<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：paypay、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class PaypayAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "paypay";

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
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "barcode":バーコード決済<br/>
     * - "online":オンライン決済<br/>
     */
    private $serviceOptionType;

    /**
     * 課金種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0:都度決済<br/>
     * - 1:随時決済<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意※<br/>
     * ※オンライン決済で未指定の場合、"0"都度決済になります。<br/>
     */
    private $accountingType;

    /**
     * ワンタイムコード<br>
     * 半角数字<br/>
     * 最大桁数：32<br/>
     * ユーザの端末から読み取ったバーコード情報を指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定必須<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $oneTimeCode;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 9999999(7桁) 以下<br/>
     * <br/>
     * accountingType="1"（随時決済） ： 指定できません<br/>
     */
    private $amount;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上（設定可能な値は"true"のみです。）<br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意（※1）<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません（※2）<br/>
     * <br/>
     * ※1 未指定の場合は、"true"を設定します。<br/>
     * ※2 指定があった場合には指定値を無視して処理します。<br/>
     */
    private $withCapture;

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * 店舗IDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定必須<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $storeId;

    /**
     * 店舗端末ID<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * 店舗端末IDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定必須<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $terminalId;

    /**
     * レシート番号<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * レシートに印字される番号を指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $receiptNumber;

    /**
     * 決済事業者コード<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     * 決済事業者コードを指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $settleBizCode;

    /**
     * 商品名<br>
     * 文字列<br/>
     * 商品名を指定します。<br/>
     * - 最大文字数<br/>
     * 　　serviceOptionType="barcode"（バーコード決済） ： 128byte<br/>
     * 　　serviceOptionType="online"（オンライン決済）    ： 40byte<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定必須<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意<br/>
     */
    private $itemName;

    /**
     * 商品ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * マーチャントシステム内で商品やサービスを特定するID<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定必須<br/>
     */
    private $itemId;

    /**
     * 決済完了時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意※<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $successUrl;

    /**
     * 決済キャンセル時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済キャンセル時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意※<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $cancelUrl;

    /**
     * 決済エラー時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済キャンセルエラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意※<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意※<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $pushUrl;


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
     * サービスオプションタイプを取得する<br>
     * @return string サービスオプションタイプ<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * サービスオプションタイプを設定する<br>
     * @param string $serviceOptionType サービスオプションタイプ<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
    }

    /**
     * 課金種別を取得する<br>
     * @return string 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     * @param string $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
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
     * 決済事業者コードを取得する<br>
     * @return string 決済事業者コード<br>
     */
    public function getSettleBizCode()
    {
        return $this->settleBizCode;
    }

    /**
     * 決済事業者コードを設定する<br>
     * @param string $settleBizCode 決済事業者コード<br>
     */
    public function setSettleBizCode($settleBizCode)
    {
        $this->settleBizCode = $settleBizCode;
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
     * 商品IDを取得する<br>
     * @return string 商品ID<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品IDを設定する<br>
     * @param string $itemId 商品ID<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
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
     * 決済キャンセル時URLを取得する<br>
     * @return string 決済キャンセル時URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 決済キャンセル時URLを設定する<br>
     * @param string $cancelUrl 決済キャンセル時URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
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

}
