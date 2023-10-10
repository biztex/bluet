<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：alipayx、コマンド名：返金の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayxRefundRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "Refund";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 返金対象の取引IDを指定する。<br/>
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
     * 返金金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 返金金額を指定します。<br/>
     * - 1 以上かつ 999999999999(12桁) 以下<br/>
     * ※未指定の場合は、残高<br/>
     */
    private $amount;

    /**
     * 返金理由<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * 返金理由を指定します。<br/>
     * - 最大文字数:256byte<br/>
     */
    private $reason;


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
     * 返金金額を取得する<br>
     * @return string 返金金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 返金金額を設定する<br>
     * @param string $amount 返金金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 返金理由を取得する<br>
     * @return string 返金理由<br>
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * 返金理由を設定する<br>
     * @param string $reason 返金理由<br>
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
