<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Amazonpay、コマンド名：住所情報取得の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AmazonpayGetAddressResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "amazonpay"： AmazonPay<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 住所情報取得処理後、応答電文に含まれる値。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     * - success：正常終了<br/>
     * - failure：異常終了<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
     * <br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDKバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * 決済センター応答日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     * 決済センターが住所情報取得要求に応答した日時<br/>
     * ※YYYYMMDDhhmmssの形式<br/>
     */
    private $centerResponseDatetime;

    /**
     * 配送先：氏名<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * - 最大:50文字<br/>
     */
    private $shippingName;

    /**
     * 配送先：電話番号<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * - 最大:20文字<br/>
     */
    private $shippingPhone;

    /**
     * 配送先：住所１<br>
     * 文字列<br/>
     * 最大桁数：180<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * 住所１～住所３でどのように住所が登録されているかは、購入者の入力次第です。<br/>
     * - 最大:180文字<br/>
     */
    private $shippingAddress1;

    /**
     * 配送先：住所２<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * - 最大:60文字<br/>
     */
    private $shippingAddress2;

    /**
     * 配送先：住所３<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * - 最大:60文字<br/>
     */
    private $shippingAddress3;

    /**
     * 配送先：都道府県<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * 住所１～住所３に都道府県を含めて登録されているかは、購入者の入力次第です。<br/>
     * - 最大:50文字<br/>
     */
    private $shippingPrefecture;

    /**
     * 配送先：郵便番号<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * 購入者がAmazonに登録している値を返します。<br/>
     * 半角、全角、ハイフンありなど、購入者の入力次第です。<br/>
     * - 最大:20文字<br/>
     */
    private $shippingPostalCode;

    /**
     * 購入者ID<br>
     * 半角英数字<br/>
     * 決済センターが発番した購入者AmazonアカウントのユニークIDを返します。<br/>
     * 文字数は可変となります。<br/>
     */
    private $buyerId;

    /**
     * 購入者メールアドレス<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     * 購入者のメールアドレスを返します。<br/>
     */
    private $buyerEmail;

    /**
     * 購入者名<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 購入者の名前を返します。<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $buyerName;

    /**
     * 購入者電話番号<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * 購入者の電話番号を返します。<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $buyerPhoneNumber;

    /**
     * 購入者支払方法<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * 購入者が指定した支払方法を返します。<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $paymentPreferences;

    /**
     * 請求先：住所１<br>
     * 文字列<br/>
     * 最大桁数：180<br/>
     * 請求先でAmazonに登録している値を返します。<br/>
     * 住所１～住所３でどのように住所が登録されているかは、請求先の入力次第です。<br/>
     * - 最大:180文字<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $billingAddress1;

    /**
     * 請求先：住所２<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 請求先でAmazonに登録している値を返します。<br/>
     * - 最大:60文字<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $billingAddress2;

    /**
     * 請求先：住所３<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 請求先でAmazonに登録している値を返します。<br/>
     * - 最大:60文字<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $billingAddress3;

    /**
     * 請求先：都道府県<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 請求先でAmazonに登録している値を返します。<br/>
     * 住所１～住所３に都道府県を含めて登録されているかは、請求先の入力次第です。<br/>
     * - 最大:50文字<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $billingPrefecture;

    /**
     * 請求先：郵便番号<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * 請求先でAmazonに登録している値を返します。<br/>
     * 半角、全角、ハイフンありなど、購入者の入力次第です。<br/>
     * - 最大:20文字<br/>
     * ※追加情報応答フラグが"1"の場合のみ連携されます。<br/>
     */
    private $billingPostalCode;

    /**
     * 決済確定URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * AmazonPayで決済処理を行うためのURLを返します。<br/>
     * ※ステータスがPreAuth時にコマンドを利用した場合のみ連携されます。<br/>
     */
    private $payRedirectUrl;

    /**
     * CheckoutSessionの管理Id<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * 配送先変更、支払方法変更等に利用するAmazon発行のIDを返します。<br/>
     * ※ステータスがPreAuth時にコマンドを利用した場合のみ連携されます。<br/>
     */
    private $checkoutSessionId;


    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * 決済センター応答日時を取得する<br>
     * @return string 決済センター応答日時<br>
     */
    public function getCenterResponseDatetime()
    {
        return $this->centerResponseDatetime;
    }

    /**
     * 決済センター応答日時を設定する<br>
     * @param string $centerResponseDatetime 決済センター応答日時<br>
     */
    public function setCenterResponseDatetime($centerResponseDatetime)
    {
        $this->centerResponseDatetime = $centerResponseDatetime;
    }

    /**
     * 配送先：氏名を取得する<br>
     * @return string 配送先：氏名<br>
     */
    public function getShippingName()
    {
        return $this->shippingName;
    }

    /**
     * 配送先：氏名を設定する<br>
     * @param string $shippingName 配送先：氏名<br>
     */
    public function setShippingName($shippingName)
    {
        $this->shippingName = $shippingName;
    }

    /**
     * 配送先：電話番号を取得する<br>
     * @return string 配送先：電話番号<br>
     */
    public function getShippingPhone()
    {
        return $this->shippingPhone;
    }

    /**
     * 配送先：電話番号を設定する<br>
     * @param string $shippingPhone 配送先：電話番号<br>
     */
    public function setShippingPhone($shippingPhone)
    {
        $this->shippingPhone = $shippingPhone;
    }

    /**
     * 配送先：住所１を取得する<br>
     * @return string 配送先：住所１<br>
     */
    public function getShippingAddress1()
    {
        return $this->shippingAddress1;
    }

    /**
     * 配送先：住所１を設定する<br>
     * @param string $shippingAddress1 配送先：住所１<br>
     */
    public function setShippingAddress1($shippingAddress1)
    {
        $this->shippingAddress1 = $shippingAddress1;
    }

    /**
     * 配送先：住所２を取得する<br>
     * @return string 配送先：住所２<br>
     */
    public function getShippingAddress2()
    {
        return $this->shippingAddress2;
    }

    /**
     * 配送先：住所２を設定する<br>
     * @param string $shippingAddress2 配送先：住所２<br>
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shippingAddress2 = $shippingAddress2;
    }

    /**
     * 配送先：住所３を取得する<br>
     * @return string 配送先：住所３<br>
     */
    public function getShippingAddress3()
    {
        return $this->shippingAddress3;
    }

    /**
     * 配送先：住所３を設定する<br>
     * @param string $shippingAddress3 配送先：住所３<br>
     */
    public function setShippingAddress3($shippingAddress3)
    {
        $this->shippingAddress3 = $shippingAddress3;
    }

    /**
     * 配送先：都道府県を取得する<br>
     * @return string 配送先：都道府県<br>
     */
    public function getShippingPrefecture()
    {
        return $this->shippingPrefecture;
    }

    /**
     * 配送先：都道府県を設定する<br>
     * @param string $shippingPrefecture 配送先：都道府県<br>
     */
    public function setShippingPrefecture($shippingPrefecture)
    {
        $this->shippingPrefecture = $shippingPrefecture;
    }

    /**
     * 配送先：郵便番号を取得する<br>
     * @return string 配送先：郵便番号<br>
     */
    public function getShippingPostalCode()
    {
        return $this->shippingPostalCode;
    }

    /**
     * 配送先：郵便番号を設定する<br>
     * @param string $shippingPostalCode 配送先：郵便番号<br>
     */
    public function setShippingPostalCode($shippingPostalCode)
    {
        $this->shippingPostalCode = $shippingPostalCode;
    }

    /**
     * 購入者IDを取得する<br>
     * @return string 購入者ID<br>
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * 購入者IDを設定する<br>
     * @param string $buyerId 購入者ID<br>
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
    }

    /**
     * 購入者メールアドレスを取得する<br>
     * @return string 購入者メールアドレス<br>
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * 購入者メールアドレスを設定する<br>
     * @param string $buyerEmail 購入者メールアドレス<br>
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;
    }

    /**
     * 購入者名を取得する<br>
     * @return string 購入者名<br>
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * 購入者名を設定する<br>
     * @param string $buyerName 購入者名<br>
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;
    }

    /**
     * 購入者電話番号を取得する<br>
     * @return string 購入者電話番号<br>
     */
    public function getBuyerPhoneNumber()
    {
        return $this->buyerPhoneNumber;
    }

    /**
     * 購入者電話番号を設定する<br>
     * @param string $buyerPhoneNumber 購入者電話番号<br>
     */
    public function setBuyerPhoneNumber($buyerPhoneNumber)
    {
        $this->buyerPhoneNumber = $buyerPhoneNumber;
    }

    /**
     * 購入者支払方法を取得する<br>
     * @return string 購入者支払方法<br>
     */
    public function getPaymentPreferences()
    {
        return $this->paymentPreferences;
    }

    /**
     * 購入者支払方法を設定する<br>
     * @param string $paymentPreferences 購入者支払方法<br>
     */
    public function setPaymentPreferences($paymentPreferences)
    {
        $this->paymentPreferences = $paymentPreferences;
    }

    /**
     * 請求先：住所１を取得する<br>
     * @return string 請求先：住所１<br>
     */
    public function getBillingAddress1()
    {
        return $this->billingAddress1;
    }

    /**
     * 請求先：住所１を設定する<br>
     * @param string $billingAddress1 請求先：住所１<br>
     */
    public function setBillingAddress1($billingAddress1)
    {
        $this->billingAddress1 = $billingAddress1;
    }

    /**
     * 請求先：住所２を取得する<br>
     * @return string 請求先：住所２<br>
     */
    public function getBillingAddress2()
    {
        return $this->billingAddress2;
    }

    /**
     * 請求先：住所２を設定する<br>
     * @param string $billingAddress2 請求先：住所２<br>
     */
    public function setBillingAddress2($billingAddress2)
    {
        $this->billingAddress2 = $billingAddress2;
    }

    /**
     * 請求先：住所３を取得する<br>
     * @return string 請求先：住所３<br>
     */
    public function getBillingAddress3()
    {
        return $this->billingAddress3;
    }

    /**
     * 請求先：住所３を設定する<br>
     * @param string $billingAddress3 請求先：住所３<br>
     */
    public function setBillingAddress3($billingAddress3)
    {
        $this->billingAddress3 = $billingAddress3;
    }

    /**
     * 請求先：都道府県を取得する<br>
     * @return string 請求先：都道府県<br>
     */
    public function getBillingPrefecture()
    {
        return $this->billingPrefecture;
    }

    /**
     * 請求先：都道府県を設定する<br>
     * @param string $billingPrefecture 請求先：都道府県<br>
     */
    public function setBillingPrefecture($billingPrefecture)
    {
        $this->billingPrefecture = $billingPrefecture;
    }

    /**
     * 請求先：郵便番号を取得する<br>
     * @return string 請求先：郵便番号<br>
     */
    public function getBillingPostalCode()
    {
        return $this->billingPostalCode;
    }

    /**
     * 請求先：郵便番号を設定する<br>
     * @param string $billingPostalCode 請求先：郵便番号<br>
     */
    public function setBillingPostalCode($billingPostalCode)
    {
        $this->billingPostalCode = $billingPostalCode;
    }

    /**
     * 決済確定URLを取得する<br>
     * @return string 決済確定URL<br>
     */
    public function getPayRedirectUrl()
    {
        return $this->payRedirectUrl;
    }

    /**
     * 決済確定URLを設定する<br>
     * @param string $payRedirectUrl 決済確定URL<br>
     */
    public function setPayRedirectUrl($payRedirectUrl)
    {
        $this->payRedirectUrl = $payRedirectUrl;
    }

    /**
     * CheckoutSessionの管理Idを取得する<br>
     * @return string CheckoutSessionの管理Id<br>
     */
    public function getCheckoutSessionId()
    {
        return $this->checkoutSessionId;
    }

    /**
     * CheckoutSessionの管理Idを設定する<br>
     * @param string $checkoutSessionId CheckoutSessionの管理Id<br>
     */
    public function setCheckoutSessionId($checkoutSessionId)
    {
        $this->checkoutSessionId = $checkoutSessionId;
    }


    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }

}
