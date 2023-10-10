<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：paypay、コマンド名：返金の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class PaypayRefundRequestDto extends AbstractPaymentRequestDto
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
     * - "online":オンライン決済<br/>
     */
    private $serviceOptionType;

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * 店舗IDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $storeId;

    /**
     * 店舗端末ID<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * 店舗端末IDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $terminalId;

    /**
     * レシート番号<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * レシートに印字される番号を指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $receiptNumber;

    /**
     * 決済事業者コード<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     * 決済事業者コードを指定します。<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定任意<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定できません<br/>
     */
    private $settleBizCode;

    /**
     * 返金金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 返金する金額を指定します。<br/>
     * 例）250円*4個=1000円の買い物をし1個返品した場合には、返金金額に250円を指定します。<br/>
     * - 1 以上かつ 9999999 以下<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意<br/>
     * ※オンライン決済で指定しなかった場合は、全額返金になります。<br/>
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
     * 店舗IDを取得する<br>
     * @return string 店舗ID<br>
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * 店舗IDを設定する<br>
     * @param string $storeId 店舗ID<br>
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * 店舗端末IDを取得する<br>
     * @return string 店舗端末ID<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 店舗端末IDを設定する<br>
     * @param string $terminalId 店舗端末ID<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * レシート番号を取得する<br>
     * @return string レシート番号<br>
     */
    public function getReceiptNumber()
    {
        return $this->receiptNumber;
    }

    /**
     * レシート番号を設定する<br>
     * @param string $receiptNumber レシート番号<br>
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;
    }

    /**
     * 決済事業者コードを取得する<br>
     * @return string 決済事業者コード<br>
     */
    public function getSettleBizCode()
    {
        return $this->settleBizCode;
    }

    /**
     * 決済事業者コードを設定する<br>
     * @param string $settleBizCode 決済事業者コード<br>
     */
    public function setSettleBizCode($settleBizCode)
    {
        $this->settleBizCode = $settleBizCode;
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
