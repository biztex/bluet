<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：paypay、コマンド名：再与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class PaypayReAuthorizeRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "ReAuthorize";

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
     * - "online":オンライン決済<br/>
     * ※オンライン決済のみ指定可<br/>
     */
    private $serviceOptionType;

    /**
     * 元取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 随時決済の決済申込で指定した取引IDを指定します。<br/>
     */
    private $originalOrderId;

    /**
     * 金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 9999999(7桁) 以下<br/>
     */
    private $amount;

    /**
     * 商品ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * マーチャントシステム内で商品やサービスを特定するID<br/>
     * <br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意<br/>
     * ※未指定の場合は、決済申込時に入力したitemIdを設定します。<br/>
     */
    private $itemId;

    /**
     * 商品名<br>
     * 文字列<br/>
     * 商品名を指定します。<br/>
     * - 最大文字数 40byte<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意<br/>
     * ※未指定の場合は、決済申込時に入力したitemNameを設定します。決済申込時に未指定の場合は、設定しません。<br/>
     */
    private $itemName;

    /**
     * 支払い要求実行フラグ<br>
     * 英字（boolean）<br/>
     * コマンド処理が消費者の残高不足が原因で失敗した場合に、消費者アプリに支払い要求を送信するかどうかを指定します。<br/>
     * - true : 支払い要求を送信する<br/>
     * - false : 支払い要求を送信せず、売上処理失敗とする<br/>
     * <br/>
     * ※未指定の場合は、"false"を設定します。<br/>
     */
    private $nsfRecoveryFlag;

    /**
     * 支払い有効期限<br>
     * 半角英数字<br/>
     * 最大桁数：14<br/>
     * コマンド処理が消費者の残高不足が原因で失敗し消費者アプリに支払い要求を送信した場合の支払い有効期限を指定します。（YYYYMMDDhhmmss形式）<br/>
     * リクエスト日時の10分後～48時間後の範囲で指定可能です。<br/>
     * <br/>
     * ※nsfRecoveryFlag="true"の場合に指定可能なパラメータです。<br/>
     * ※nsfRecoveryFlag="true"で未指定の場合は、リクエスト日時の6時間後を設定します。<br/>
     */
    private $nsfRecoveryExpiredDatetime;

    /**
     * プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * <br/>
     * ※nsfRecoveryFlag="true"の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
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
     * 元取引IDを取得する<br>
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        return $this->originalOrderId;
    }

    /**
     * 元取引IDを設定する<br>
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->originalOrderId = $originalOrderId;
    }

    /**
     * 金額を取得する<br>
     * @return string 金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 金額を設定する<br>
     * @param string $amount 金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * 支払い要求実行フラグを取得する<br>
     * @return string 支払い要求実行フラグ<br>
     */
    public function getNsfRecoveryFlag()
    {
        return $this->nsfRecoveryFlag;
    }

    /**
     * 支払い要求実行フラグを設定する<br>
     * @param string $nsfRecoveryFlag 支払い要求実行フラグ<br>
     */
    public function setNsfRecoveryFlag($nsfRecoveryFlag)
    {
        $this->nsfRecoveryFlag = $nsfRecoveryFlag;
    }

    /**
     * 支払い有効期限を取得する<br>
     * @return string 支払い有効期限<br>
     */
    public function getNsfRecoveryExpiredDatetime()
    {
        return $this->nsfRecoveryExpiredDatetime;
    }

    /**
     * 支払い有効期限を設定する<br>
     * @param string $nsfRecoveryExpiredDatetime 支払い有効期限<br>
     */
    public function setNsfRecoveryExpiredDatetime($nsfRecoveryExpiredDatetime)
    {
        $this->nsfRecoveryExpiredDatetime = $nsfRecoveryExpiredDatetime;
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
