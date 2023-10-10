<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Paypal、コマンド名：売上の応答Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class PaypalCaptureResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * 決済サービスの区分を指定します。<br>
     * 必須項目、固定値<br>
     * "paypal"： PayPal決済<br>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br>
     * 32 文字以内<br>
     * 取消請求処理後、応答電文に含まれる値。<br>
     * 以下の処理結果のいずれかが格納される<br>
     * ・success：正常終了<br>
     * ・failure：異常終了<br>
     * ・pending：保留状態<br>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br>
     * 16 文字以内<br>
     * 結果コード<br>
     * 例) L001000100000000<br>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br>
     * 1024 バイト以内<br>
     * エラーメッセージ<br>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * 返金を行った取引IDが格納されます。<br>
     * “.”（ドット）、“-”（ハイフン）、“_”（アンダースコア）も使用できます。<br>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     */
    private $custTxn;

    /**
     * MDK バージョン<br>
     * 半角英数字<br>
     * 5 桁<br>
     * 電文のバージョン番号。<br>
     */
    private $txnVersion;

    /**
     * ログインURL<br>
     * PayPalログイン画面のURLが格納されます。<br>
     */
    private $loginUrl;

    /**
     * トークン<br>
     * 半角英数字<br>
     * 20文字以内<br>
     * トークンが格納されます。<br>
     */
    private $token;

    /**
     * 請求番号<br>
     * 半角英数字<br>
     * 127文字以内<br>
     * GWが発番するオーダー単位でユニークとなるIDが格納されます。<br>
     */
    private $invoiceId;

    /**
     * 顧客番号<br>
     * 半角英数字<br>
     * 13文字以内<br>
     * 顧客番号が格納されます。<br>
     */
    private $payerId;

    /**
     * 取引金額<br>
     * 半角数字<br>
     * 取引金額が格納されます。<br>
     */
    private $amount;

    /**
     * 手数料<br>
     * 半角数字<br>
     * 手数料が格納されます。<br>
     */
    private $feeAmount;

    /**
     * 決済金額<br>
     * 半角数字<br>
     * 決済金額が格納されます。<br>
     */
    private $settleAmount;

    /**
     * 外貨換算レート<br>
     * 半角英数字<br>
     * 17文字以内<br>
     * 外貨換算レートが格納されます。<br>
     */
    private $exchangeRate;

    /**
     * 支払時刻<br>
     * 半角英数字<br>
     * １４文字<br>
     * 支払時刻が格納されます。<br>
     * 形式は"yyyyMMddHHmmss"です。<br>
     */
    private $paymentDate;

    /**
     * 支払ステータス<br>
     * 半角英数字<br>
     * 支払ステータスが格納されます。<br>
     */
    private $paymentStatus;

    /**
     * 決済センタ取引ID<br>
     * 半角英数字<br>
     * 17文字以内<br>
     * PayPalが発番するユニークなIDが格納されます。<br>
     */
    private $centerTxnId;

    /**
     * 配送先氏名<br>
     * 文字列<br>
     * 配送先氏名が格納されます。<br>
     */
    private $shipName;

    /**
     * 配送先住所１<br>
     * 文字列<br>
     * 配送先住所１が格納されます。<br>
     */
    private $shipStreet1;

    /**
     * 配送先住所２<br>
     * 文字列<br>
     * 配送先住所２が格納されます。<br>
     */
    private $shipStreet2;

    /**
     * 配送先市区町村名<br>
     * 文字列<br>
     * 配送先市区町村名が格納されます。<br>
     */
    private $shipCity;

    /**
     * 配送先州名<br>
     * 文字列<br>
     * 配送先州名が格納されます。<br>
     */
    private $shipState;

    /**
     * 配送先国コード<br>
     * 半角英数字<br>
     * 2文字以内<br>
     * 配送先国コードが格納されます。<br>
     */
    private $shipCountry;

    /**
     * 配送先郵便番号<br>
     * 半角英数字<br>
     * 20文字以内<br>
     * 配送先郵便番号が格納されます。<br>
     */
    private $shipPostalCode;

    /**
     * 配送先電話番号<br>
     * 半角英数字<br>
     * 20文字以内<br>
     * 配送先電話番号が格納されます。<br>
     */
    private $shipPhone;

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
     * MDK バージョンを取得する<br>
     * @return string MDK バージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDK バージョンを設定する<br>
     * @param string $txnVersion MDK バージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * ログインURLを取得する<br>
     * @return string ログインURL<br>
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    /**
     * ログインURLを設定する<br>
     * @param string $loginUrl ログインURL<br>
     */
    public function setLoginUrl($loginUrl)
    {
        $this->loginUrl = $loginUrl;
    }

    /**
     * トークンを取得する<br>
     * @return string トークン<br>
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * トークンを設定する<br>
     * @param string $token トークン<br>
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * 請求番号を取得する<br>
     * @return string 請求番号<br>
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * 請求番号を設定する<br>
     * @param string $invoiceId 請求番号<br>
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * 顧客番号を取得する<br>
     * @return string 顧客番号<br>
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * 顧客番号を設定する<br>
     * @param string $payerId 顧客番号<br>
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
    }

    /**
     * 取引金額を取得する<br>
     * @return string 取引金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 取引金額を設定する<br>
     * @param string $amount 取引金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 手数料を取得する<br>
     * @return string 手数料<br>
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * 手数料を設定する<br>
     * @param string $feeAmount 手数料<br>
     */
    public function setFeeAmount($feeAmount)
    {
        $this->feeAmount = $feeAmount;
    }

    /**
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getSettleAmount()
    {
        return $this->settleAmount;
    }

    /**
     * 決済金額を設定する<br>
     * @param string $settleAmount 決済金額<br>
     */
    public function setSettleAmount($settleAmount)
    {
        $this->settleAmount = $settleAmount;
    }

    /**
     * 外貨換算レートを取得する<br>
     * @return string 外貨換算レート<br>
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * 外貨換算レートを設定する<br>
     * @param string $exchangeRate 外貨換算レート<br>
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * 支払時刻を取得する<br>
     * @return string 支払時刻<br>
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * 支払時刻を設定する<br>
     * @param string $paymentDate 支払時刻<br>
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * 支払ステータスを取得する<br>
     * @return string 支払ステータス<br>
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * 支払ステータスを設定する<br>
     * @param string $paymentStatus 支払ステータス<br>
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * 決済センタ取引IDを取得する<br>
     * @return string 決済センタ取引ID<br>
     */
    public function getCenterTxnId()
    {
        return $this->centerTxnId;
    }

    /**
     * 決済センタ取引IDを設定する<br>
     * @param string $centerTxnId 決済センタ取引ID<br>
     */
    public function setCenterTxnId($centerTxnId)
    {
        $this->centerTxnId = $centerTxnId;
    }

    /**
     * 配送先氏名を取得する<br>
     * @return string 配送先氏名<br>
     */
    public function getShipName()
    {
        return $this->shipName;
    }

    /**
     * 配送先氏名を設定する<br>
     * @param string $shipName 配送先氏名<br>
     */
    public function setShipName($shipName)
    {
        $this->shipName = $shipName;
    }

    /**
     * 配送先住所１を取得する<br>
     * @return string 配送先住所１<br>
     */
    public function getShipStreet1()
    {
        return $this->shipStreet1;
    }

    /**
     * 配送先住所１を設定する<br>
     * @param string $shipStreet1 配送先住所１<br>
     */
    public function setShipStreet1($shipStreet1)
    {
        $this->shipStreet1 = $shipStreet1;
    }

    /**
     * 配送先住所２を取得する<br>
     * @return string 配送先住所２<br>
     */
    public function getShipStreet2()
    {
        return $this->shipStreet2;
    }

    /**
     * 配送先住所２を設定する<br>
     * @param string $shipStreet2 配送先住所２<br>
     */
    public function setShipStreet2($shipStreet2)
    {
        $this->shipStreet2 = $shipStreet2;
    }

    /**
     * 配送先市区町村名を取得する<br>
     * @return string 配送先市区町村名<br>
     */
    public function getShipCity()
    {
        return $this->shipCity;
    }

    /**
     * 配送先市区町村名を設定する<br>
     * @param string $shipCity 配送先市区町村名<br>
     */
    public function setShipCity($shipCity)
    {
        $this->shipCity = $shipCity;
    }

    /**
     * 配送先州名を取得する<br>
     * @return string 配送先州名<br>
     */
    public function getShipState()
    {
        return $this->shipState;
    }

    /**
     * 配送先州名を設定する<br>
     * @param string $shipState 配送先州名<br>
     */
    public function setShipState($shipState)
    {
        $this->shipState = $shipState;
    }

    /**
     * 配送先国コードを取得する<br>
     * @return string 配送先国コード<br>
     */
    public function getShipCountry()
    {
        return $this->shipCountry;
    }

    /**
     * 配送先国コードを設定する<br>
     * @param string $shipCountry 配送先国コード<br>
     */
    public function setShipCountry($shipCountry)
    {
        $this->shipCountry = $shipCountry;
    }

    /**
     * 配送先郵便番号を取得する<br>
     * @return string 配送先郵便番号<br>
     */
    public function getShipPostalCode()
    {
        return $this->shipPostalCode;
    }

    /**
     * 配送先郵便番号を設定する<br>
     * @param string $shipPostalCode 配送先郵便番号<br>
     */
    public function setShipPostalCode($shipPostalCode)
    {
        $this->shipPostalCode = $shipPostalCode;
    }

    /**
     * 配送先電話番号を取得する<br>
     * @return string 配送先電話番号<br>
     */
    public function getShipPhone()
    {
        return $this->shipPhone;
    }

    /**
     * 配送先電話番号を設定する<br>
     * @param string $shipPhone 配送先電話番号<br>
     */
    public function setShipPhone($shipPhone)
    {
        $this->shipPhone = $shipPhone;
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
