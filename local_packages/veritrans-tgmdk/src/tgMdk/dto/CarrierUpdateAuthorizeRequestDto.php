<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：キャリア、コマンド名：金額変更の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierUpdateAuthorizeRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "UpdateAuthorize";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 金額を変更する対象の取引IDを指定する<br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "au":auかんたん決済<br/>
     * 以下は指定できない。<br/>
     * - "docomo":ドコモケータイ払い<br/>
     * - "sb_matomete":ソフトバンクまとめて支払い（A）<br/>
     * - "sb_ktai":ソフトバンクまとめて支払い（B）<br/>
     * - "s_bikkuri":S!まとめて支払い<br/>
     * - "flets":フレッツまとめて支払い<br/>
     */
    private $serviceOptionType;

    /**
     * 変更後金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 変更後の金額を指定します。<br/>
     * - 1 以上かつ 999999999999 以下<br/>
     */
    private $amount;


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
     * 変更後金額を取得する<br>
     * @return string 変更後金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 変更後金額を設定する<br>
     * @param string $amount 変更後金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
