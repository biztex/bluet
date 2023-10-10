<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Amazonpay、コマンド名：再与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AmazonpayReAuthorizeRequestDto extends AbstractPaymentRequestDto
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
     * 元取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * - 随時決済を申し込んだ際の取引IDを指定します。<br/>
     */
    private $originalOrderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 100000(6桁) 以下<br/>
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
     * ※指定が無い場合は、元取引の注文説明がメールに表示されます。<br/>
     * - 最大:255文字<br/>
     */
    private $noteToBuyer;

    /**
     * 与信時プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 再与信要求が成立（成功または失敗）した時に、結果通知電文をプッシュする先のURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、元取引の与信時プッシュ先URLを使用。元取引側も未指定の場合はMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $authorizePushUrl;

    /**
     * 売上時プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 売上要求の処理結果が確定（成功または失敗）した時に、結果通知電文をプッシュする先のURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、元取引の売上時プッシュ先URLを使用。元取引側も未指定の場合はMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $capturePushUrl;

    /**
     * キャンセル時プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * キャンセル要求、返金要求の処理結果が確定（成功または失敗）した時に、結果通知電文をプッシュする先のURLを指定（クエリパラメータ指定可）<br/>
     * ※未指定の場合は、元取引のキャンセル時プッシュ先URLを使用。元取引側も未指定の場合はMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     * - 最大:256byte<br/>
     */
    private $cancelPushUrl;

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
