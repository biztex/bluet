<?php

namespace App\Http\Controllers;

use App\Helpers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;
use tgMdk\dto\MpiAuthorizeRequestDto;
use tgMdk\dto\MpiAuthorizeResponseDto;
use tgMdk\dto\MpiGetResultRequestDto;
use tgMdk\dto\MpiGetResultResponseDto;
use tgMdk\TGMDK_AuthHashUtil;
use tgMdk\TGMDK_Config;
use tgMdk\TGMDK_Logger;
use tgMdk\TGMDK_Transaction;

class MpiController extends Controller
{

    public function index()
    {
        return view('mpi/index')->with(
            [
                'tokenApiKey' => Config::get('sample_setting.token.token_api_key'),
                "amount" => "100",
                "orderId" => Helpers::generateOrderId()
            ]);
    }

    public function mpiAuthorize(Request $request)
    {

        $logger = Log::channel('tgmdk')->getLogger();
        if ($logger instanceof LoggerInterface) {
            TGMDK_Logger::setLogger($logger);
        }

        $orderId = $request->request->get("orderId");
        $request_data = new MpiAuthorizeRequestDto();
        $request_data->setAmount($request->request->get("amount"));
        $request_data->setOrderId($orderId);
        $request_data->setToken($request->request->get("token"));
        $request_data->setWithCapture($request->request->get("withCapture"));
        $request_data->setServiceOptionType($request->request->get("paymentMode"));
        $request_data->setHttpAccept($request->header("Accept"));
        $request_data->setHttpUserAgent($request->header("User-Agent"));
        $request_data->setRedirectionUri(Config::get('sample_setting.mpi.redirect_url'));
        $request_data->setPushUrl($request->request->get("pushUrl"));
        $request_data->setBrowserDeviceCategory($request->request->get("browserDeviceCategory"));
        $request_data->setVerifyTimeout($request->request->get("verifyTimeout"));
        $request_data->setDeviceChannel($request->request->get("deviceChannel"));
        $request_data->setAccountType($request->request->get("accountType"));
        $request_data->setMessageCategory($request->request->get("messageCategory"));
        $request_data->setCardholderName($request->request->get("cardholderName"));
        $request_data->setCardholderEmail($request->request->get("cardholderEmail"));
        $request_data->setCardholderHomePhoneCountry($request->request->get("cardholderHomePhoneCountry"));
        $request_data->setCardholderHomePhoneNumber($request->request->get("cardholderHomePhoneNumber"));
        $request_data->setCardholderMobilePhoneCountry($request->request->get("cardholderMobilePhoneCountry"));
        $request_data->setCardholderMobilePhoneNumber($request->request->get("cardholderMobilePhoneNumber"));
        $request_data->setCardholderWorkPhoneCountry($request->request->get("cardholderWorkPhoneCountry"));
        $request_data->setCardholderWorkPhoneNumber($request->request->get("cardholderWorkPhoneNumber"));
        $request_data->setBillingAddressCity($request->request->get("billingAddressCity"));
        $request_data->setBillingAddressCountry($request->request->get("billingAddressCountry"));
        $request_data->setBillingAddressLine1($request->request->get("billingAddressLine1"));
        $request_data->setBillingAddressLine2($request->request->get("billingAddressLine2"));
        $request_data->setBillingAddressLine3($request->request->get("billingAddressLine3"));
        $request_data->setBillingPostalCode($request->request->get("billingPostalCode"));
        $request_data->setBillingAddressState($request->request->get("billingAddressState"));
        $request_data->setShippingAddressCity($request->request->get("shippingAddressCity"));
        $request_data->setShippingAddressCountry($request->request->get("shippingAddressCountry"));
        $request_data->setShippingAddressLine1($request->request->get("shippingAddressLine1"));
        $request_data->setShippingAddressLine2($request->request->get("shippingAddressLine2"));
        $request_data->setShippingAddressLine3($request->request->get("shippingAddressLine3"));
        $request_data->setShippingPostalCode($request->request->get("shippingPostalCode"));
        $request_data->setShippingAddressState($request->request->get("shippingAddressState"));
        $request_data->setCustomerIp($request->request->get("customerIp"));
        $request_data->setWithChallenge($request->request->get("withChallenge"));

        /*
         * 結果通知の受信については本サンプルのPushController::mpiメソッドおよび、
         * VeriTrans4G インターフェース詳細 ～MPIホスティング～ の結果通知の章を参照してください。
         */

        $request_data->setJpo(
            Helpers::generateJpo($request->request->get("jpo1"), $request->request->get("jpo2"))
        );

        $transaction = new TGMDK_Transaction();
        $response_data = $transaction->execute($request_data);

        if ($response_data instanceof MpiAuthorizeResponseDto) {
            if ($response_data->getMstatus() == "success") {
                $request->session()->put($orderId, $response_data);
                $request->session()->put($orderId . "_PaymentMode", $request->request->get("paymentMode"));
                return response($response_data->getResResponseContents());
            } else {
                return view('mpi/result')->with([
                    'orderId' => $orderId,
                    'mstatus' => $response_data->getMstatus(),
                    'vResultCode' => $response_data->getVResultCode(),
                    'mErrMsg' => $response_data->getMerrMsg(),
                    'mpiMstatus' => null,
                    'mpiVresultCode' => null,
                    'cardMstatus' => null
                ]);
            }
        }
        return view('mpi/result')->with(['orderId' => $orderId]);

    }

    public function result(Request $request)
    {
        $merchantCcId = null;
        $merchantPw = null;

        try {
            $conf = TGMDK_Config::getInstance();
            $array = $conf->getConnectionParameters();
            $merchantCcId = $array[TGMDK_Config::MERCHANT_CC_ID];
            $merchantPw = $array[TGMDK_Config::MERCHANT_SECRET_KEY];
        } catch (Exception $ex) {
            return view('mpi/result')->with([
                'orderId' => null, 'mstatus' => null, 'vResultCode' => null, 'mErrMsg' => null,
                'message' => "マーチャントCCIDと認証鍵を取得できませんでした。",
                'mpiMstatus' => null,
                'mpiVresultCode' => null,
                'cardMstatus' => null
            ]);
        }

        $array = $request->request->all();

        foreach ($array as $key => $value) {
            if ($value == null) {
                // 値がNullだとcheckAuthHash関数がfalseを返すため
                $array[$key] = "";
            }
        }
        $checkAuthHashResult = TGMDK_AuthHashUtil::checkAuthHash($array, $merchantCcId, $merchantPw, "UTF-8");

        $orderId = $request->request->get("OrderId");

        $logger = Log::channel('tgmdk')->getLogger();
        if ($logger instanceof LoggerInterface) {
            TGMDK_Logger::setLogger($logger);
        }

        /**
         * ステータスコード
         */
        define('TXN_FAILURE_CODE', 'failure');
        define('TXN_SUCCESS_CODE', 'success');

        $request_data = new MpiGetResultRequestDto();
        $request_data->setOrderId($orderId);
        $transaction = new TGMDK_Transaction();
        $response_data = $transaction->execute($request_data);

        if ($response_data instanceof MpiGetResultResponseDto) {

            $txn_status = $response_data->getMStatus();

            if (TXN_FAILURE_CODE == $txn_status) {
                return view('mpi/result')->with([
                        'orderId' => $orderId,
                        'mstatus' => $response_data->getMstatus(),
                        'vResultCode' => $response_data->getVResultCode(),
                        'mErrMsg' => $response_data->getMerrMsg(),
                        'mpiMstatus' => null,
                        'mpiVresultCode' => null,
                        'cardMstatus' => null
                    ]
                );
            }

            $message = null;
            if (!$checkAuthHashResult) {
                $message = "改竄チェック用ハッシュが一致しませんでした";
            }

            return view('mpi/result')->with([
                'orderId' => $orderId,
                'mstatus' => $response_data->getMstatus(),
                'vResultCode' => $response_data->getVResultCode(),
                'mErrMsg' => $response_data->getMerrMsg(),
                'message' => $message,
                'mpiMstatus' => $response_data->getMpiMstatus(),
                'mpiVresultCode' => $response_data->getMpiVresultCode(),
                'cardMstatus' => $response_data->getCardMstatus(),
            ]);


        } else {
            return view('mpi/result')->with(
                ['orderId' => $orderId, 'mstatus' => null, 'vResultCode' => null, 'mErrMsg' => null,
                    'mpiMstatus' => null, 'mpiVresultCode' => null, 'cardMstatus' => null]);
        }

    }

}
