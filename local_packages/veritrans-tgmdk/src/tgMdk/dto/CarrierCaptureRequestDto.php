<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：キャリア、コマンド名：売上の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierCaptureRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "Capture";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 売上を計上する対象の取引IDを指定する<br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "docomo":ドコモケータイ払い<br/>
     * - "au":auかんたん決済<br/>
     * - "sb_ktai":ソフトバンクまとめて支払い（B）<br/>
     * - "s_bikkuri":S!まとめて支払い<br/>
     * - "flets":フレッツまとめて支払い<br/>
     * 以下は指定できない。<br/>
     * - "sb_matomete":ソフトバンクまとめて支払い（A）<br/>
     */
    private $serviceOptionType;

    /**
     * 課金売上月<br>
     * 半角英数字<br/>
     * 最大桁数：6<br/>
     * docomo, flets, sb_ktaiで、継続課金（月額）の売上時のみ指定可能。<br/>
     * - YYYYMM形式<br/>
     */
    private $captureMonth;


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
     * 課金売上月を取得する<br>
     * @return string 課金売上月<br>
     */
    public function getCaptureMonth()
    {
        return $this->captureMonth;
    }

    /**
     * 課金売上月を設定する<br>
     * @param string $captureMonth 課金売上月<br>
     */
    public function setCaptureMonth($captureMonth)
    {
        $this->captureMonth = $captureMonth;
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
