<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：エポス、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class EposAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "epos";

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
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     */
    private $amount;

    /**
     * 加盟店顧客ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * マーチャントにて顧客を一意に識別するIDを指定します。<br/>
     */
    private $customerId;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * 最大桁数：5<br/>
     * - true : 与信同時売上<br/>
     * - false : 与信のみ <br/>
     * ※未指定の場合は、false。<br/>
     */
    private $withCapture;

    /**
     * 決済完了時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $successUrl;

    /**
     * 決済キャンセル時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済キャンセル時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $cancelUrl;

    /**
     * 決済エラー時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済エラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 「ダミー取引」時のプッシュURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
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
     * 加盟店顧客IDを取得する<br>
     * @return string 加盟店顧客ID<br>
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * 加盟店顧客IDを設定する<br>
     * @param string $customerId 加盟店顧客ID<br>
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
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
