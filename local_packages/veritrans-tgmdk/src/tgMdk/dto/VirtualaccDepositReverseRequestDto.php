<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：銀行振込決済、コマンド名：入金取消の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class VirtualaccDepositReverseRequestDto extends AbstractPaymentVirtualaccRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "virtualacc";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "DepositReverse";

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "resona":りそな<br/>
     * <br/>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 入金取消する対象の取引IDを指定する<br/>
     */
    private $orderId;

    /**
     * 入金ID<br>
     * 半角数字<br/>
     * 入金取消する対象の入金IDを指定する<br/>
     */
    private $depositId;


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
     * 入金IDを取得する<br>
     * @return string 入金ID<br>
     */
    public function getDepositId()
    {
        return $this->depositId;
    }

    /**
     * 入金IDを設定する<br>
     * @param string $depositId 入金ID<br>
     */
    public function setDepositId($depositId)
    {
        $this->depositId = $depositId;
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
