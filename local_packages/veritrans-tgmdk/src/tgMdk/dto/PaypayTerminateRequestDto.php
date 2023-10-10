<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：paypay、コマンド名：解約の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class PaypayTerminateRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "Terminate";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * - 随時決済を解約する対象の取引IDを指定する。<br/>
     * <br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "online":オンライン決済<br/>
     * ※オンラン決済のみ指定可<br/>
     */
    private $serviceOptionType;

    /**
     * 強制解約<br>
     * 英字（boolean）<br/>
     * 解約の方式（3者間または2者間）を指定します。<br/>
     * - "true" ：強制解約（2者間）<br/>
     * - "false" ：消費者を介する解約要求（3者間／デフォルト）<br/>
     * <br/>
     */
    private $force;

    /**
     * 解約完了時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 解約完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※消費者を介する解約要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $successUrl;

    /**
     * 解約キャンセル時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 解約キャンセル時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※消費者を介する解約要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $cancelUrl;

    /**
     * 解約エラー時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 解約キャンセルエラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※消費者を介する解約要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはMAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * <br/>
     * ※消費者を介する解約要求（3者間）の場合に指定可能なパラメータです。<br/>
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
     * 強制解約を取得する<br>
     * @return string 強制解約<br>
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * 強制解約を設定する<br>
     * @param string $force 強制解約<br>
     */
    public function setForce($force)
    {
        $this->force = $force;
    }

    /**
     * 解約完了時URLを取得する<br>
     * @return string 解約完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 解約完了時URLを設定する<br>
     * @param string $successUrl 解約完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 解約キャンセル時URLを取得する<br>
     * @return string 解約キャンセル時URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 解約キャンセル時URLを設定する<br>
     * @param string $cancelUrl 解約キャンセル時URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * 解約エラー時URLを取得する<br>
     * @return string 解約エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * 解約エラー時URLを設定する<br>
     * @param string $errorUrl 解約エラー時URL<br>
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
