<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：キャリア、コマンド名：継続終了の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierTerminateRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "carrier";

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
     * - 継続課金を終了する対象の取引IDを指定する。<br/>
     * - 随時決済を終了する利用承諾の取引IDを指定する。<br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "docomo":ドコモケータイ払い<br/>
     * - "au":auかんたん決済<br/>
     * - "sb_matomete":ソフトバンクまとめて支払い（A）<br/>
     * - "flets":フレッツまとめて支払い<br/>
     * - "sb_ktai":ソフトバンクまとめて支払い（B）<br/>
     * 以下は指定できない。<br/>
     * - "s_bikkuri":S!まとめて支払い<br/>
     */
    private $serviceOptionType;

    /**
     * 端末種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 消費者が使用している端末の種別を指定します。<br/>
     * - 0:PC<br/>
     * - 1:スマートフォン<br/>
     * - 2:フィーチャーフォン<br/>
     * ※消費者を介する終了要求（3者間）の場合に指定可能なパラメータです。<br/>
     */
    private $terminalKind;

    /**
     * 強制終了<br>
     * 英字（boolean）<br/>
     * ※docomo、sb_matomete のみ指定可能なパラメータです。<br/>
     * <br/>
     * 継続課金の終了方式（3者間または2者間）を指定します。<br/>
     * - "true" ：強制終了（2者間）<br/>
     * - "false" ：消費者を介する終了要求（3者間／デフォルト）<br/>
     * <br/>
     * ※auの場合は強制終了で固定のため、指定できません。<br/>
     */
    private $force;

    /**
     * 継続課金終了完了時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * ※消費者を介する終了要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはマーチャント登録時に設定した値を使用<br/>
     * <br/>
     * 継続課金終了完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     */
    private $successUrl;

    /**
     * 継続課金終了キャンセル時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * ※消費者を介する終了要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはマーチャント登録時に設定した値を使用<br/>
     * <br/>
     * 継続課金終了キャンセル後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     */
    private $cancelUrl;

    /**
     * 継続課金終了エラー時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * ※消費者を介する終了要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはマーチャント登録時に設定した値を使用<br/>
     * <br/>
     * 継続課金終了エラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 「ダミー取引」時のプッシュURLを指定します。<br/>
     * <br/>
     * ※消費者を介する終了要求（3者間）の場合に指定可能なパラメータです。<br/>
     * ※本パラメータは店舗側システムの開発時にのみ利用されることを想定しており、ダミー取引で指定可能です。<br/>
     * ※未指定の場合は、Authorize時に指定された値、またはマーチャント登録時にDBに設定された値を使用<br/>
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
     * 端末種別を取得する<br>
     * @return string 端末種別<br>
     */
    public function getTerminalKind()
    {
        return $this->terminalKind;
    }

    /**
     * 端末種別を設定する<br>
     * @param string $terminalKind 端末種別<br>
     */
    public function setTerminalKind($terminalKind)
    {
        $this->terminalKind = $terminalKind;
    }

    /**
     * 強制終了を取得する<br>
     * @return string 強制終了<br>
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * 強制終了を設定する<br>
     * @param string $force 強制終了<br>
     */
    public function setForce($force)
    {
        $this->force = $force;
    }

    /**
     * 継続課金終了完了時URLを取得する<br>
     * @return string 継続課金終了完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 継続課金終了完了時URLを設定する<br>
     * @param string $successUrl 継続課金終了完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 継続課金終了キャンセル時URLを取得する<br>
     * @return string 継続課金終了キャンセル時URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 継続課金終了キャンセル時URLを設定する<br>
     * @param string $cancelUrl 継続課金終了キャンセル時URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * 継続課金終了エラー時URLを取得する<br>
     * @return string 継続課金終了エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * 継続課金終了エラー時URLを設定する<br>
     * @param string $errorUrl 継続課金終了エラー時URL<br>
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
