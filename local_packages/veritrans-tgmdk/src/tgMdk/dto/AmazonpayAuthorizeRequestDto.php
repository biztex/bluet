<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Amazonpay、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AmazonpayAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "amazonpay";

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
     * 課金種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * "0"：都度決済<br/>
     * "1"：随時決済<br/>
     * ※未指定の場合は、"0"：都度決済となります。<br/>
     */
    private $accountingType;

    /**
     * 承諾時決済タイプ<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * "0"：承諾のみ<br/>
     * "1"：与信＋承諾<br/>
     * ※課金種別が都度決済の場合は 指定できません。<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $consentAuthType;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 決済金額を指定します。<br/>
     * - 課金種別が都度決済の場合：1 以上かつ 10000000(8桁) 以下<br/>
     * - 課金種別が随時決済の場合：1 以上かつ 100000(6桁) 以下<br/>
     */
    private $amount;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * "true"： 与信同時売上<br/>
     * "false"： 与信のみ<br/>
     * ※指定が無い場合は、与信のみとなります。<br/>
     */
    private $withCapture;

    /**
     * 配送先表示抑止フラグ<br>
     * 英字（boolean）<br/>
     * "true"： 配送先非表示<br/>
     * "false"： 配送先表示<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $suppressShippingAddressView;

    /**
     * プラットフォームID<br>
     * 文字列<br/>
     * 最大桁数：21<br/>
     * Amazonから指定のあった場合のみ設定する予定の項目<br/>
     * - 最大:21byte<br/>
     */
    private $platformId;

    /**
     * 注文説明<br>
     * 文字列<br/>
     * 最大桁数：255<br/>
     * 購入者のメールに表示される注文の説明<br/>
     * - 最大:255文字<br/>
     */
    private $noteToBuyer;

    /**
     * 完了時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済申込成功時に、店舗側サイトに画面遷移を戻すためのURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $successUrl;

    /**
     * キャンセル時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済申込を消費者がキャンセルした時に、店舗側サイトに画面遷移を戻すためのURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $cancelUrl;

    /**
     * エラー時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済申込エラー時に、店舗側サイトに画面遷移を戻すためのURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $errorUrl;

    /**
     * 与信時プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済申込、再与信要求および与信変更要求が成立（成功または失敗）した時に、結果通知電文をプッシュする先のURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $authorizePushUrl;

    /**
     * 売上時プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 売上要求の処理結果が確定（成功または失敗）した時に、結果通知電文をプッシュする先のURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $capturePushUrl;

    /**
     * キャンセル時プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * キャンセル要求、返金要求および解約要求の処理結果が確定（成功または失敗）した時に、結果通知電文をプッシュする先のURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $cancelPushUrl;

    /**
     * 頻度（単位）<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 随時決済の頻度の単位（例：2週間毎であれば、単位はWeek、値は2）<br/>
     * "Year"：年<br/>
     * "Month"：月<br/>
     * "Week"：週<br/>
     * "Day"：日<br/>
     * ※課金種別が都度決済の場合は 指定できません。<br/>
     * ※課金種別が随時決済の場合は指定必須 。<br/>
     */
    private $frequencyUnit;

    /**
     * 頻度（値）<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 随時決済の頻度の値（例：2週間毎であれば、単位はWeek、値は2）<br/>
     * - 頻度（単位）毎に設定できる範囲が異なります。<br/>
     * "Year"：1のみ<br/>
     * "Month"：1～12<br/>
     * "Week"：1～52<br/>
     * "Day"：1～365<br/>
     * ※課金種別が都度決済の場合は指定できません。<br/>
     * ※課金種別が随時決済の場合は指定必須 。<br/>
     */
    private $frequencyValue;

    /**
     * 配送先制限リスト<br>
     * 文字列<br/>
     * 最大桁数：4000<br/>
     * 配送先を制限するための許可リストまたは禁止リスト。<br/>
     * - リストには下記内容をJSON形式で指定する必要があります。<br/>
     * {"type": "【Allowed】", "restrictions": {<br/>
     *  "【countryCode】": {"statesOrRegions": ["【AA】"],"zipCodes": ["【99999】", "【99999】"]},<br/>
     *  "【countryCode】": {"statesOrRegions": ["【AA】"],"zipCodes": ["【999-9999】"]}, ...<br/>
     * }<br/>
     * ※【】で括られた部分は下記に従い適切な値を設定<br/>
     * "type"："Allowed"(許可)<br/>
     *            "NotAllowed"(禁止)<br/>
     * "countryCode"： 国名コード(日本：JP,アメリカ：US等のISO3166準拠コード)<br/>
     * "statesOrRegions"：都道府県等の地域名、アメリカは2桁の州略号(WA, CA, IL...)<br/>
     * "zipCodes"： 郵便番号、日本の場合は【999-9999】<br/>
     */
    private $addressRestrictions;

    /**
     * 決済確認画面種別<br>
     * 文字列<br/>
     * 最大桁数：1<br/>
     * 加盟店用の決済確認画面を利用するかの種別。<br/>
     * "0"：DGFT決済確認画面利用<br/>
     * "1"：加盟店決済確認画面利用<br/>
     * ※未指定の場合は、"0"：DGFT決済確認画面利用となります。<br/>
     */
    private $payConfirmScreenType;

    /**
     * 決済確認画面URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済確認画面へ遷移するためのURL<br/>
     * ※決済確認画面種別が"1"かつ決済確認画面URLが未指定の場合は、エラーとする。<br/>
     * - 最大:256byte<br/>
     */
    private $payConfirmScreenUrl;

    /**
     * 与信期限延長フラグ<br>
     * 英字（boolean）<br/>
     * "true"： 延長する<br/>
     * "false"： 延長しない<br/>
     * ※指定が無い場合は、延長しないとなります。<br/>
     * ※課金種別が都度決済の場合のみ、指定可能。<br/>
     */
    private $extendExpiration;


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
     * 承諾時決済タイプを取得する<br>
     * @return string 承諾時決済タイプ<br>
     */
    public function getConsentAuthType()
    {
        return $this->consentAuthType;
    }

    /**
     * 承諾時決済タイプを設定する<br>
     * @param string $consentAuthType 承諾時決済タイプ<br>
     */
    public function setConsentAuthType($consentAuthType)
    {
        $this->consentAuthType = $consentAuthType;
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
     * 配送先表示抑止フラグを取得する<br>
     * @return string 配送先表示抑止フラグ<br>
     */
    public function getSuppressShippingAddressView()
    {
        return $this->suppressShippingAddressView;
    }

    /**
     * 配送先表示抑止フラグを設定する<br>
     * @param string $suppressShippingAddressView 配送先表示抑止フラグ<br>
     */
    public function setSuppressShippingAddressView($suppressShippingAddressView)
    {
        $this->suppressShippingAddressView = $suppressShippingAddressView;
    }

    /**
     * プラットフォームIDを取得する<br>
     * @return string プラットフォームID<br>
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * プラットフォームIDを設定する<br>
     * @param string $platformId プラットフォームID<br>
     */
    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
    }

    /**
     * 注文説明を取得する<br>
     * @return string 注文説明<br>
     */
    public function getNoteToBuyer()
    {
        return $this->noteToBuyer;
    }

    /**
     * 注文説明を設定する<br>
     * @param string $noteToBuyer 注文説明<br>
     */
    public function setNoteToBuyer($noteToBuyer)
    {
        $this->noteToBuyer = $noteToBuyer;
    }

    /**
     * 完了時URLを取得する<br>
     * @return string 完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 完了時URLを設定する<br>
     * @param string $successUrl 完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * キャンセル時URLを取得する<br>
     * @return string キャンセル時URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * キャンセル時URLを設定する<br>
     * @param string $cancelUrl キャンセル時URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * エラー時URLを取得する<br>
     * @return string エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * エラー時URLを設定する<br>
     * @param string $errorUrl エラー時URL<br>
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    /**
     * 与信時プッシュ先URLを取得する<br>
     * @return string 与信時プッシュ先URL<br>
     */
    public function getAuthorizePushUrl()
    {
        return $this->authorizePushUrl;
    }

    /**
     * 与信時プッシュ先URLを設定する<br>
     * @param string $authorizePushUrl 与信時プッシュ先URL<br>
     */
    public function setAuthorizePushUrl($authorizePushUrl)
    {
        $this->authorizePushUrl = $authorizePushUrl;
    }

    /**
     * 売上時プッシュ先URLを取得する<br>
     * @return string 売上時プッシュ先URL<br>
     */
    public function getCapturePushUrl()
    {
        return $this->capturePushUrl;
    }

    /**
     * 売上時プッシュ先URLを設定する<br>
     * @param string $capturePushUrl 売上時プッシュ先URL<br>
     */
    public function setCapturePushUrl($capturePushUrl)
    {
        $this->capturePushUrl = $capturePushUrl;
    }

    /**
     * キャンセル時プッシュ先URLを取得する<br>
     * @return string キャンセル時プッシュ先URL<br>
     */
    public function getCancelPushUrl()
    {
        return $this->cancelPushUrl;
    }

    /**
     * キャンセル時プッシュ先URLを設定する<br>
     * @param string $cancelPushUrl キャンセル時プッシュ先URL<br>
     */
    public function setCancelPushUrl($cancelPushUrl)
    {
        $this->cancelPushUrl = $cancelPushUrl;
    }

    /**
     * 頻度（単位）を取得する<br>
     * @return string 頻度（単位）<br>
     */
    public function getFrequencyUnit()
    {
        return $this->frequencyUnit;
    }

    /**
     * 頻度（単位）を設定する<br>
     * @param string $frequencyUnit 頻度（単位）<br>
     */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->frequencyUnit = $frequencyUnit;
    }

    /**
     * 頻度（値）を取得する<br>
     * @return string 頻度（値）<br>
     */
    public function getFrequencyValue()
    {
        return $this->frequencyValue;
    }

    /**
     * 頻度（値）を設定する<br>
     * @param string $frequencyValue 頻度（値）<br>
     */
    public function setFrequencyValue($frequencyValue)
    {
        $this->frequencyValue = $frequencyValue;
    }

    /**
     * 配送先制限リストを取得する<br>
     * @return string 配送先制限リスト<br>
     */
    public function getAddressRestrictions()
    {
        return $this->addressRestrictions;
    }

    /**
     * 配送先制限リストを設定する<br>
     * @param string $addressRestrictions 配送先制限リスト<br>
     */
    public function setAddressRestrictions($addressRestrictions)
    {
        $this->addressRestrictions = $addressRestrictions;
    }

    /**
     * 決済確認画面種別を取得する<br>
     * @return string 決済確認画面種別<br>
     */
    public function getPayConfirmScreenType()
    {
        return $this->payConfirmScreenType;
    }

    /**
     * 決済確認画面種別を設定する<br>
     * @param string $payConfirmScreenType 決済確認画面種別<br>
     */
    public function setPayConfirmScreenType($payConfirmScreenType)
    {
        $this->payConfirmScreenType = $payConfirmScreenType;
    }

    /**
     * 決済確認画面URLを取得する<br>
     * @return string 決済確認画面URL<br>
     */
    public function getPayConfirmScreenUrl()
    {
        return $this->payConfirmScreenUrl;
    }

    /**
     * 決済確認画面URLを設定する<br>
     * @param string $payConfirmScreenUrl 決済確認画面URL<br>
     */
    public function setPayConfirmScreenUrl($payConfirmScreenUrl)
    {
        $this->payConfirmScreenUrl = $payConfirmScreenUrl;
    }

    /**
     * 与信期限延長フラグを取得する<br>
     * @return string 与信期限延長フラグ<br>
     */
    public function getExtendExpiration()
    {
        return $this->extendExpiration;
    }

    /**
     * 与信期限延長フラグを設定する<br>
     * @param string $extendExpiration 与信期限延長フラグ<br>
     */
    public function setExtendExpiration($extendExpiration)
    {
        $this->extendExpiration = $extendExpiration;
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
