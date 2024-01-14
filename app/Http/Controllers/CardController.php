<?php

namespace App\Http\Controllers;

use App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Psr\Log\LoggerInterface;
use tgMdk\dto\CardAuthorizeRequestDto;
use tgMdk\dto\CardAuthorizeResponseDto;
use tgMdk\dto\CardCancelRequestDto;
use tgMdk\dto\CardCancelResponseDto;
use tgMdk\TGMDK_Config;
use tgMdk\TGMDK_Logger;
use tgMdk\TGMDK_Transaction;
use App\Models\Stock;
use App\Models\Reservation;
use Carbon\Carbon;
use Yasumi\Yasumi;

class CardController extends Controller
{
    public function index()
    {
        return view('card/index')->with(
            [
                'tokenApiKey' => Config::get('sample_setting.token.token_api_key'),
                "amount" => "100",
                "orderId" => Helpers::generateOrderId()
            ]);
    }

    public function cardAuthorize(Request $request)
    {
        // Set locale to user's language
        if ($request->has('lang')) {
            app()->setLocale($request->lang);
        }

        $logger = Log::channel('tgmdk')->getLogger();
        if ($logger instanceof LoggerInterface) {
            TGMDK_Logger::setLogger($logger);
        }
        $request_data = new CardAuthorizeRequestDto();
        $request_data->setAmount($request->request->get("amount"));
        $request_data->setOrderId($request->request->get("orderId"));
        $request_data->setToken($request->request->get("token"));
        $request_data->setWithCapture($request->request->get("withCapture"));

        $request_data->setJpo(
            Helpers::generateJpo($request->request->get("jpo1"), $request->request->get("jpo2"))
        );

        /*
         * 設定ファイルのパスを手動で指定する場合は以下のようにパスを指定してTGMDK_Configクラスのインスタンス生成をしておく
         * TGMDK_Config::getInstance("/home/test/laravel_sample/config/3GPSMDK.properties");
         */
        TGMDK_Config::getInstance();
        $transaction = new TGMDK_Transaction();
        //$response_data = $transaction->execute($request_data);

        /*
         * マーチャントIDとマーチャント認証鍵を動的に設定する場合はexecuteメソッドの第2引数に以下のようにセットする
         */
         //$props["merchant_ccid"] = "A100000800000001100705cc";
         //$props["merchant_secret_key"] = "d1ee259e52da562b63e02caaa44e420966dab3bb20acf3cb36c01d17d69412b3";
         $response_data = $transaction->execute($request_data);

        if ($response_data instanceof CardAuthorizeResponseDto) {
            $request->session()->put($request->request->get("orderId"), $response_data);
            if ($response_data->getMstatus() == 'success'){
                // 予約者へメール通知
                $reservation = Reservation::find($request->reservation_id);
                $dt = new Carbon($reservation->fixed_datetime);
                $week_map = [
                    0 => 'sunday',
                    1 => 'monday',
                    2 => 'tuesday',
                    3 => 'wednesday',
                    4 => 'thursday',
                    5 => 'friday',
                    6 => 'saturday',
                ];
                $day_of_week = $dt->dayOfWeek;
                $weekday = $week_map[$day_of_week];
                // 祝日判定
                $holidays = Yasumi::create('Japan', $dt->format('Y'));
                foreach ($holidays->getHolidayDates() as $holiday) {
                    if ($holiday == $dt->format('Y-m-d')) {
                $weekday = 'holiday';
                    }
                }
                Mail::send(['text' => 'user.reservations.email'], [
                    "number" => $reservation->number,
                    "plan" => $request->plan_name,
                    "date" => date('Y年m月d日', strtotime($reservation->fixed_datetime)),
                    "activity" => $request->activity_name,
                    "name_last" => $reservation->user->name_last,
                    "name_first" => $reservation->user->name_first,
                    "email" => $reservation->user->email,
                    "tel" => $reservation->user->tel,
                    "tel2" => $reservation->user->tel2,
                    "reservation" => $reservation,
                    "payment" => 'クレジットカード決済',
                    "haraikomiUrl" => null,
                    "receiptNo" => null,
                    "weekday" => $weekday,
                    "amount" => $request->amount
                ], function($message) use($reservation) {
                    if ($reservation->user->email) {
                        $message
                        ->to($reservation->user->email)
                        ->bcc(['blue@quality-t.com', 'test.zenryo@gmail.com'])
                        //->bcc(['test.zenryo@gmail.com'])
                        ->from('no-reply@blue-tourism-hokkaido.website')
                        ->subject("【ブルーツーリズム北海道】予約確定メール");
                }
                });
                // ベリトランスオーダーIDをDBへ格納
                $reservation->order_id = $request->request->get("orderId");
                // 決済ステータスをDBへ格納
                $reservation->status = '予約確定';
                // 支払方法と回数をDBへ格納
                $reservation->jpo1 = $request->jpo1;
                $reservation->jpo2 = $request->jpo2;
                $reservation->save();
                // 在庫を減数
                $stock = Stock::select()
                ->where('plan_id', $reservation->plan->id)
                ->where('res_date', date('Y-m-d', strtotime($reservation->fixed_datetime)))
                ->first();
                if ($stock) {
                    if ($reservation->plan->res_limit_flag == 0) {
                        // 予約人数をカウント
                        $count_member = 0;
                        for ($i = 0; $i <= 20 ; $i++) {
                            $count = $reservation->{'type'. $i . '_number'};
                            if ($count > 0) {
                                $count_member += $count;
                            }
                        }
                        // 料金区分２０以上対応
                        // 予約人数リセット
                        if(!is_null($reservation->Number_of_reservations)){
                            $Number_of_reservations = json_decode($reservation->Number_of_reservations);
                            $count_member = 0;
                            for($i=0;$i<=100;$i++){
                                if(array_key_exists(sprintf('type%d_number', $i),json_decode($reservation->Number_of_reservations, true))){
                                    if($Number_of_reservations->{sprintf('type%d_number', $i)} > 0 ){
                                        $count_member += $Number_of_reservations->{sprintf('type%d_number', $i)};
                                    }
                                }
                            }
                        }
                        $stock->limit_number = $stock->limit_number - $count_member;
                        $stock->save();
                    } else {
                        $stock->limit_number = $stock->limit_number - 1;
                        $stock->save();
                    }
                }
            }else{
                $reservation = Reservation::find($request->reservation_id);
                // 決済ステータスをDBへ格納
                $reservation->status = '未決済';
                $reservation->save();
            }
            //return view('user.reservations.result');
            return redirect('/card/result/' . $request->request->get("orderId"));
        }
        return view('card/index')->with(
            [
                'tokenApiKey' => Config::get('sample_setting.token.token_api_key'),
                'amount' => $request->request->get("amount")
            ]);

    }

    public function authorizeResult($orderId)
    {
        $response_data = session($orderId);
        if ($response_data instanceof CardAuthorizeResponseDto) {
            return view('card/result')->with([
                'mstatus' => $response_data->getMstatus(),
                'vResultCode' => $response_data->getVResultCode(),
                'mErrMsg' => $response_data->getMerrMsg(),
                'orderId' => $response_data->getOrderId(),
                'resAuthCode' => $response_data->getResAuthCode(),
                'reqCardNumber' => $response_data->getReqCardNumber()
            ]);
        } else {
            return view('card/result')->with([
                'mstatus' => null, 'vResultCode' => null, 'mErrMsg' => null, 'orderId' => null, 'resAuthCode' => null,
                'reqCardNumber' => null, 'message' => "error!"
            ]);
        }
    }
}
