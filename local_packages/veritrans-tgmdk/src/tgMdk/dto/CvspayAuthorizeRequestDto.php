<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：コンビニペイ、コマンド名：与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CvspayAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "cvspay";

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
     * - "famipay":ファミペイ<br/>
     * （設定可能な値は"famipay"（ファミペイ）のみです。）<br/>
     */
    private $serviceOptionType;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 99999999 以下<br/>
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
     * 決済完了時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     * <br/>
     * payType=0（オンライン決済）：指定任意<br/>
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
     * <br/>
     * payType=0（オンライン決済）：指定任意<br/>
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
     * <br/>
     * payType=0（オンライン決済）：指定任意<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 「ダミー取引」時のプッシュURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 本パラメータは店舗側システムの開発時にのみ利用されることを想定しており、ダミー取引で指定可能です。<br/>
     * <br/>
     * payType=0（オンライン決済）：指定任意<br/>
     */
    private $pushUrl;

    /**
     * 決済種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 決済種別を指定します。（設定可能な値は"0"（オンライン決済）のみです。）<br/>
     * "0"：オンライン決済<br/>
     */
    private $payType;


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
