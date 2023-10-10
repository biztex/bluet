<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Paypal、コマンド名：売上の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class PaypalCaptureRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "paypal";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Capture";

    /**
     * 取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * 決済請求、予授権完了時に採番した取引IDを指定指定します。<br>
     * “.”（ドット）、“-”（ハイフン）、“_”（アンダースコア）も使用できます。<br>
     */
    private $orderId;

    /**
     * 取引金額<br>
     * 半角数字<br>
     * 日本円を設定します。<br>
     * ただし、$10,000 USD を上限とした金額を設定します。<br>
     */
    private $amount;

    /**
     * アクションタイプ<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * set: 売上請求処理<br>
     * get: 売上請求確認処理<br>
     * do : 売上請求完了処理<br>
     * capture : 売上請求完了処理<br>
     * 　※"capture"は 与信を行った場合にのみ、実行可能<br>
     */
    private $action;

    /**
     * 戻り先URL<br>
     * 半角英数字<br>
     * 1024文字以内<br>
     * 消費者がPayPal上での操作が完了したときの遷移するマーチャントのURLを設定します。<br>
     * 半角英数字のほかに、URLとして使用できる文字を使用できます。（"."など）<br>
     */
    private $returnUrl;

    /**
     * 取消URL<br>
     * 半角英数字<br>
     * 1024文字以内<br>
     * 消費者がPayPal上で支払いをキャンセルした場合に遷移するマーチャントのURLを設定します。<br>
     * 半角英数字のほかに、URLとして使用できる文字を使用できます。（"."など）<br>
     */
    private $cancelUrl;

    /**
     * ヘッダーイメージURL<br>
     * 半角英数字<br>
     * 127文字以内<br>
     * PayPal画面のヘッダーに表示する画像のURLを設定します。<br>
     * 半角英数字のほかに、URLとして使用できる文字を使用できます。（"."など）<br>
     */
    private $headerImageUrl;

    /**
     * オーダー説明<br>
     * 文字列<br>
     * 127Byte以内<br>
     * 商品の説明を設定します。<br>
     * ※文字コードは"UTF-8"とします。<br>
     */
    private $orderDescription;

    /**
     * 配送先フラグ<br>
     * 半角英数字<br>
     * 1文字以内<br>
     * 配送先情報を有効とするかを設定します。<br>
     * "0"： 配送先の設定を無効にする。<br>
     * "1"： 配送先の設定を有効にする。<br>
     */
    private $shippingFlag;

    /**
     * 配送先氏名<br>
     * 文字列<br>
     * 32Byte以内<br>
     * 配送先氏名を設定します。<br>
     * ※文字コードは"UTF-8"とします。<br>
     * 配送先フラグに"1"を設定した場合は必須。<br>
     */
    private $shipName;

    /**
     * 配送先住所１<br>
     * 文字列<br>
     * 100Byte以内<br>
     * 配送先住所１を設定します。<br>
     * ※文字コードは"UTF-8"とします。<br>
     * 配送先フラグに"1"を設定した場合は必須。<br>
     */
    private $shipStreet1;

    /**
     * 配送先住所２<br>
     * 文字列<br>
     * 100Byte以内<br>
     * 配送先住所２を設定します。<br>
     * ※文字コードは"UTF-8"とします。<br>
     */
    private $shipStreet2;

    /**
     * 配送先市区町村名<br>
     * 文字列<br>
     * 40Byte以内<br>
     * 配送先市区町村名を設定します。<br>
     * ※文字コードは"UTF-8"とします。<br>
     * 配送先フラグに"1"を設定した場合は必須。<br>
     */
    private $shipCity;

    /**
     * 配送先州名<br>
     * 文字列<br>
     * 40Byte以内<br>
     * 配送先州名を設定します。<br>
     * ※文字コードは"UTF-8"とします。<br>
     */
    private $shipState;

    /**
     * 配送先国コード<br>
     * 半角英数字<br>
     * 2文字以内<br>
     * 配送先コードを設定します。<br>
     */
    private $shipCountry;

    /**
     * 配送先郵便番号<br>
     * 半角英数字<br>
     * 20文字以内<br>
     * 配送先郵便番号を設定します。<br>
     * 全角文字を除く文字列を設定します。<br>
     * 配送先フラグに"1"を設定した場合は必須。<br>
     */
    private $shipPostalCode;

    /**
     * 配送先電話番号<br>
     * 半角英数字<br>
     * 20文字以内<br>
     * 配送先電話番号を設定します。<br>
     * 全角文字を除く文字列を設定します。<br>
     */
    private $shipPhone;

    /**
     * 顧客番号<br>
     * 半角英数字<br>
     * 13文字以内<br>
     * 顧客番号を設定します。<br>
     * PayPalから処理が戻ってきたとき、URL（戻り先URL）に付加されています。<br>
     */
    private $payerId;

    /**
     * トークン<br>
     * 半角英数字<br>
     * 20文字以内<br>
     * トークンを設定します。<br>
     */
    private $token;

    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;

    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
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
     * アクションタイプを取得する<br>
     * @return string アクションタイプ<br>
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * アクションタイプを設定する<br>
     * @param string $action アクションタイプ<br>
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * 戻り先URLを取得する<br>
     * @return string 戻り先URL<br>
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * 戻り先URLを設定する<br>
     * @param string $returnUrl 戻り先URL<br>
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    /**
     * 取消URLを取得する<br>
     * @return string 取消URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 取消URLを設定する<br>
     * @param string $cancelUrl 取消URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * ヘッダーイメージURLを取得する<br>
     * @return string ヘッダーイメージURL<br>
     */
    public function getHeaderImageUrl()
    {
        return $this->headerImageUrl;
    }

    /**
     * ヘッダーイメージURLを設定する<br>
     * @param string $headerImageUrl ヘッダーイメージURL<br>
     */
    public function setHeaderImageUrl($headerImageUrl)
    {
        $this->headerImageUrl = $headerImageUrl;
    }

    /**
     * オーダー説明を取得する<br>
     * @return string オーダー説明<br>
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * オーダー説明を設定する<br>
     * @param string $orderDescription オーダー説明<br>
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * 配送先フラグを取得する<br>
     * @return string 配送先フラグ<br>
     */
    public function getShippingFlag()
    {
        return $this->shippingFlag;
    }

    /**
     * 配送先フラグを設定する<br>
     * @param string $shippingFlag 配送先フラグ<br>
     */
    public function setShippingFlag($shippingFlag)
    {
        $this->shippingFlag = $shippingFlag;
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
     * ログ用文字列(マスク済み)を設定する<br>
     * @param string $maskedLog ログ用文字列(マスク済み)<br>
     */
    public function _setMaskedLog($maskedLog)
    {
        $this->maskedLog = $maskedLog;
    }

    /**
     * ログ用文字列(マスク済み)を取得する<br>
     * @return string ログ用文字列(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->maskedLog;
    }


    /**
     * 拡張パラメータ<br>
     * 並列処理用の拡張パラメータを保持する。
     */
    private $optionParams;

    /**
     * 拡張パラメータリストを取得する<br>
     * @return OptionParams 拡張パラメータリスト<br>
     */
    public function getOptionParams()
    {
        return $this->optionParams;
    }

    /**
     * 拡張パラメータリストを設定する<br>
     * @param OptionParams $optionParams 拡張パラメータリスト<br>
     */
    public function setOptionParams($optionParams)
    {
        $this->optionParams = $optionParams;
    }

}
