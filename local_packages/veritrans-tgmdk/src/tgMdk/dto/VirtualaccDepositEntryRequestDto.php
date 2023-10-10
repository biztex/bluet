<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：銀行振込決済、コマンド名：入金の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class VirtualaccDepositEntryRequestDto extends AbstractPaymentVirtualaccRequestDto
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
    private $SERVICE_COMMAND = "DepositEntry";

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "resona":りそな<br/>
     * <br/>
     */
    private $serviceOptionType;

    /**
     * 振込人名<br>
     * 文字列<br/>
     * 最大桁数：69<br/>
     * 振込番号と登録時振込人名を結合したものを指定する<br/>
     */
    private $transferName;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 入金する対象の取引IDを指定する<br/>
     */
    private $orderId;

    /**
     * 金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 入金金額を指定する<br/>
     * - 1 以上かつ 999999999999(12桁) 以下<br/>
     */
    private $amount;

    /**
     * 消込フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0 : 消込しない<br/>
     * - 1 : 消込(強制)<br/>
     * - 2 : 消込(自動)<br/>
     * ※ 未指定の場合は、0 : 消込しない<br/>
     */
    private $withReconcile;

    /**
     * 登録方法<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0 : 手動<br/>
     * - 1 : 自動<br/>
     * ※ 未指定の場合は、0 : 手動<br/>
     */
    private $registrationMethod;

    /**
     * 入金日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * YYYYMMDD<br/>
     */
    private $depositDate;


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
     * 振込人名を取得する<br>
     * @return string 振込人名<br>
     */
    public function getTransferName()
    {
        return $this->transferName;
    }

    /**
     * 振込人名を設定する<br>
     * @param string $transferName 振込人名<br>
     */
    public function setTransferName($transferName)
    {
        $this->transferName = $transferName;
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
     * 金額を取得する<br>
     * @return string 金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 金額を設定する<br>
     * @param string $amount 金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 消込フラグを取得する<br>
     * @return string 消込フラグ<br>
     */
    public function getWithReconcile()
    {
        return $this->withReconcile;
    }

    /**
     * 消込フラグを設定する<br>
     * @param string $withReconcile 消込フラグ<br>
     */
    public function setWithReconcile($withReconcile)
    {
        $this->withReconcile = $withReconcile;
    }

    /**
     * 登録方法を取得する<br>
     * @return string 登録方法<br>
     */
    public function getRegistrationMethod()
    {
        return $this->registrationMethod;
    }

    /**
     * 登録方法を設定する<br>
     * @param string $registrationMethod 登録方法<br>
     */
    public function setRegistrationMethod($registrationMethod)
    {
        $this->registrationMethod = $registrationMethod;
    }

    /**
     * 入金日を取得する<br>
     * @return string 入金日<br>
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }

    /**
     * 入金日を設定する<br>
     * @param string $depositDate 入金日<br>
     */
    public function setDepositDate($depositDate)
    {
        $this->depositDate = $depositDate;
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
