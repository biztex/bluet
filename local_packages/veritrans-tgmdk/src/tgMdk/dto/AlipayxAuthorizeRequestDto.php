<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：alipayx、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayxAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "alipayx";

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
     * - "scancode":スキャンコード決済<br/>
     */
    private $serviceOptionType;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 999999999999(12桁) 以下<br/>
     */
    private $amount;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上（設定可能な値は"true"のみです。）<br/>
     * ※未指定の場合は、true:与信同時売上。<br/>
     */
    private $withCapture;

    /**
     * レスポンスタイプ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * レスポンスのタイプを指定します。<br/>
     * "0"：取引確定時にレスポンスを返却する。<br/>
     * "1"：即時にレスポンスを返却する。（取引確定については、Confirmコマンドを利用する）<br/>
     * <br/>
     * serviceOptionType="barcode"：指定任意<br/>
     * 上記以外、指定不可。<br/>
     * ※未指定の場合は、0：取引確定時にレスポンスを返却する。<br/>
     */
    private $responseType;

    /**
     * 識別コード<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * 識別コードを指定します。<br/>
     * ※serviceOptionType="barcode"：指定必須<br/>
     * 上記以外、指定不可。<br/>
     */
    private $identityCode;

    /**
     * 商品名<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * 商品名を指定します。<br/>
     * - 最大文字数:256byte<br/>
     */
    private $orderTitle;

    /**
     * 商品詳細<br>
     * 文字列<br/>
     * 最大桁数：400<br/>
     * 識別コードを指定します。<br/>
     * - 最大文字数:400byte<br/>
     */
    private $orderDetail;

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 店舗IDを指定します。<br/>
     * ※半角英数字、"-"（ハイフン）、 "_"（アンダースコア）も使用可能です。<br/>
     */
    private $storeId;

    /**
     * 店舗名<br>
     * 文字列<br/>
     * 最大桁数：128<br/>
     * 店舗名を指定します。<br/>
     * - 最大文字数:128byte<br/>
     */
    private $storeName;

    /**
     * 端末ID<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * 端末IDを指定します。<br/>
     * ※半角英数字、"-"（ハイフン）、 "_"（アンダースコア）も使用可能です。<br/>
     */
    private $terminalId;

    /**
     * 従業員ID<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * 従業員IDを指定します。<br/>
     * ※半角英数字、"-"（ハイフン）、 "_"（アンダースコア）も使用可能です。<br/>
     */
    private $operatorId;

    /**
     * スキャンコードタイプ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * シーンのタイプを指定します。<br/>
     * "0"：サービスプロバイダー発行QR利用。<br/>
     * "1"：加盟店発行QR利用。<br/>
     * <br/>
     * serviceOptionType="scancode"：指定任意<br/>
     * 上記以外、指定不可。<br/>
     * ※未指定の場合は、0：サービスプロバイダー発行QR利用。<br/>
     */
    private $scancodeType;

    /**
     * ユーザーエージェント<br>
     * 文字列<br/>
     * 最大桁数：1024<br/>
     * ユーザーエージェントを指定します。<br/>
     * - 最大文字数:1024byte<br/>
     * serviceOptionType="scancode"、かつ、scancodeType="1"の場合、指定必須<br/>
     * 上記以外、指定不可。<br/>
     */
    private $userAgent;

    /**
     * 決済成功時リダイレクトURL<br>
     * 文字列<br/>
     * 最大桁数：512<br/>
     * 決済成功時にリダイレクトするURLを指定します。<br/>
     * serviceOptionType="scancode"、かつ、scancodeType="1"の場合、指定任意<br/>
     * 上記以外、指定不可。<br/>
     */
    private $successRedirectUrl;


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
     * 識別コードを取得する<br>
     * @return string 識別コード<br>
     */
    public function getIdentityCode()
    {
        return $this->identityCode;
    }

    /**
     * 識別コードを設定する<br>
     * @param string $identityCode 識別コード<br>
     */
    public function setIdentityCode($identityCode)
    {
        $this->identityCode = $identityCode;
    }

    /**
     * 商品名を取得する<br>
     * @return string 商品名<br>
     */
    public function getOrderTitle()
    {
        return $this->orderTitle;
    }

    /**
     * 商品名を設定する<br>
     * @param string $orderTitle 商品名<br>
     */
    public function setOrderTitle($orderTitle)
    {
        $this->orderTitle = $orderTitle;
    }

    /**
     * 商品詳細を取得する<br>
     * @return string 商品詳細<br>
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

    /**
     * 商品詳細を設定する<br>
     * @param string $orderDetail 商品詳細<br>
     */
    public function setOrderDetail($orderDetail)
    {
        $this->orderDetail = $orderDetail;
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
     * 店舗名を取得する<br>
     * @return string 店舗名<br>
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * 店舗名を設定する<br>
     * @param string $storeName 店舗名<br>
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }

    /**
     * 端末IDを取得する<br>
     * @return string 端末ID<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 端末IDを設定する<br>
     * @param string $terminalId 端末ID<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * 従業員IDを取得する<br>
     * @return string 従業員ID<br>
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * 従業員IDを設定する<br>
     * @param string $operatorId 従業員ID<br>
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
    }

    /**
     * スキャンコードタイプを取得する<br>
     * @return string スキャンコードタイプ<br>
     */
    public function getScancodeType()
    {
        return $this->scancodeType;
    }

    /**
     * スキャンコードタイプを設定する<br>
     * @param string $scancodeType スキャンコードタイプ<br>
     */
    public function setScancodeType($scancodeType)
    {
        $this->scancodeType = $scancodeType;
    }

    /**
     * ユーザーエージェントを取得する<br>
     * @return string ユーザーエージェント<br>
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * ユーザーエージェントを設定する<br>
     * @param string $userAgent ユーザーエージェント<br>
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * 決済成功時リダイレクトURLを取得する<br>
     * @return string 決済成功時リダイレクトURL<br>
     */
    public function getSuccessRedirectUrl()
    {
        return $this->successRedirectUrl;
    }

    /**
     * 決済成功時リダイレクトURLを設定する<br>
     * @param string $successRedirectUrl 決済成功時リダイレクトURL<br>
     */
    public function setSuccessRedirectUrl($successRedirectUrl)
    {
        $this->successRedirectUrl = $successRedirectUrl;
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
