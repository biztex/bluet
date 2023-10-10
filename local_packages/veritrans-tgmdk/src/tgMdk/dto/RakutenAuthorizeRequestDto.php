<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：楽天、コマンド名：与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RakutenAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "rakuten";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 99999999 以下<br/>
     * <br/>
     * payType=0（オンライン決済） ： 100 以上かつ 99999999 以下<br/>
     * payType=1（バーコード決済（店舗スキャン型）） ： 1 以上かつ 9999999 以下<br/>
     * payType=2（オンライン決済（V2））： 2 以上かつ 9999999 以下<br/>
     */
    private $amount;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上<br/>
     * - false: 与信のみ<br/>
     * <br/>
     * payType=0（オンライン決済）： 未指定の場合は、false:与信のみ。<br/>
     * ※マーチャント登録時に商品タイプを「物販」で登録している場合、与信同時売上は使用できません。<br/>
     * <br/>
     * payType=1（バーコード決済（店舗スキャン型）） ：未指定の場合は、true:与信同時売上。<br/>
     * ※設定可能な値は"true"のみです。<br/>
     * <br/>
     * payType=2（オンライン決済（V2））：未指定の場合は、false:与信のみ。<br/>
     * <br/>
     */
    private $withCapture;

    /**
     * 商品番号<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * マーチャントシステム内で商品やサービスを特定するID<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定任意<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定できません<br/>
     */
    private $itemId;

    /**
     * 商品名<br>
     * 文字列<br/>
     * 最大桁数：300<br/>
     * 商品名<br/>
     * <br/>
     * payType=0（オンライン決済）：指定必須（最大文字数：255文字）<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定できません<br/>
     * payType=2（オンライン決済（V2)）：指定任意（最大文字数：300文字）<br/>
     */
    private $itemName;

    /**
     * 決済完了時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定任意<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定できません<br/>
     */
    private $successUrl;

    /**
     * 決済エラー時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済キャンセルエラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     * <br/>
     * payType=0（オンライン決済）、payType=2（オンライン決済（V2））：指定任意<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定できません<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定任意<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定できません<br/>
     */
    private $pushUrl;

    /**
     * 決済種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 決済種別を指定します。<br/>
     * "0"：オンライン決済<br/>
     * "1"：バーコード決済（店舗スキャン型）<br/>
     * "2"：オンライン決済（V2）<br/>
     * ※未指定の場合は、0：オンライン決済。<br/>
     */
    private $payType;

    /**
     * レスポンスタイプ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * レスポンスのタイプを指定します。<br/>
     * "0"：取引確定時にレスポンスを返却する。<br/>
     * "1"：即時にレスポンスを返却する。（取引確定については、Confirmコマンドを利用する）<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     * <br/>
     * ※未指定の場合は、0：取引確定時にレスポンスを返却する。<br/>
     */
    private $responseType;

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：36<br/>
     * 店舗番号を指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     */
    private $storeId;

    /**
     * 店舗端末ID<br>
     * 半角英数字<br/>
     * 最大桁数：36<br/>
     * 端末を識別するIDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定必須<br/>
     */
    private $terminalId;

    /**
     * レシート番号<br>
     * 半角英数字<br/>
     * 最大桁数：36<br/>
     * POSのレシート番号（処理番号）を指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定必須<br/>
     */
    private $receiptNumber;

    /**
     * ワンタイムコード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * バーコード/QRコードの情報を指定します。<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定必須<br/>
     */
    private $oneTimeCode;

    /**
     * 商品情報<br>
     * 文字列<br/>
     * 最大桁数：255<br/>
     * 商品情報を指定します。<br/>
     * - 最大文字数：255文字<br/>
     * <br/>
     * payType=0（オンライン決済）、2（オンライン決済（V2））：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     */
    private $items;


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
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済金額を設定する<br>
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 与信同時売上フラグを取得する<br>
     * @return string 与信同時売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 与信同時売上フラグを設定する<br>
     * @param string $withCapture 与信同時売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
    }

    /**
     * 商品番号を取得する<br>
     * @return string 商品番号<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品番号を設定する<br>
     * @param string $itemId 商品番号<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * 商品名を取得する<br>
     * @return string 商品名<br>
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * 商品名を設定する<br>
     * @param string $itemName 商品名<br>
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * 決済完了時URLを取得する<br>
     * @return string 決済完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 決済完了時URLを設定する<br>
     * @param string $successUrl 決済完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 決済エラー時URLを取得する<br>
     * @return string 決済エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * 決済エラー時URLを設定する<br>
     * @param string $errorUrl 決済エラー時URL<br>
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    /**
     * プッシュ先URLを取得する<br>
     * @return string プッシュ先URL<br>
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * プッシュ先URLを設定する<br>
     * @param string $pushUrl プッシュ先URL<br>
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * 決済種別を取得する<br>
     * @return string 決済種別<br>
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * 決済種別を設定する<br>
     * @param string $payType 決済種別<br>
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    }

    /**
     * レスポンスタイプを取得する<br>
     * @return string レスポンスタイプ<br>
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * レスポンスタイプを設定する<br>
     * @param string $responseType レスポンスタイプ<br>
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }

    /**
     * 店舗IDを取得する<br>
     * @return string 店舗ID<br>
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * 店舗IDを設定する<br>
     * @param string $storeId 店舗ID<br>
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * 店舗端末IDを取得する<br>
     * @return string 店舗端末ID<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 店舗端末IDを設定する<br>
     * @param string $terminalId 店舗端末ID<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * レシート番号を取得する<br>
     * @return string レシート番号<br>
     */
    public function getReceiptNumber()
    {
        return $this->receiptNumber;
    }

    /**
     * レシート番号を設定する<br>
     * @param string $receiptNumber レシート番号<br>
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;
    }

    /**
     * ワンタイムコードを取得する<br>
     * @return string ワンタイムコード<br>
     */
    public function getOneTimeCode()
    {
        return $this->oneTimeCode;
    }

    /**
     * ワンタイムコードを設定する<br>
     * @param string $oneTimeCode ワンタイムコード<br>
     */
    public function setOneTimeCode($oneTimeCode)
    {
        $this->oneTimeCode = $oneTimeCode;
    }

    /**
     * 商品情報を取得する<br>
     * @return string 商品情報<br>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * 商品情報を設定する<br>
     * @param string $items 商品情報<br>
     */
    public function setItems($items)
    {
        $this->items = $items;
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
    public function __toString() {
        return (string)$this->maskedLog;
    }

}
