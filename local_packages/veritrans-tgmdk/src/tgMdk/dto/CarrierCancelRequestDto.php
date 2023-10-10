<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：キャリア、コマンド名：取消の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierCancelRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "Cancel";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * キャンセル対象の取引IDを指定する。<br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "docomo":ドコモケータイ払い<br/>
     * - "au":auかんたん決済<br/>
     * - "sb_ktai":ソフトバンクまとめて支払い（B）<br/>
     * - "flets":フレッツまとめて支払い<br/>
     * 以下は指定できない。<br/>
     * - "sb_matomete":ソフトバンクまとめて支払い（A）<br/>
     * - "s_bikkuri":S!まとめて支払い<br/>
     */
    private $serviceOptionType;

    /**
     * 課金取消月<br>
     * 半角英数字<br/>
     * 最大桁数：6<br/>
     * docomo, au, flets, sb_ktaiで、継続課金（月額）の取消時のみ指定可能。<br/>
     * - YYYYMM形式<br/>
     */
    private $cancelMonth;

    /**
     * 返金金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 返金する金額を指定します。<br/>
     * 例）250円*4個=1000円の買い物をし1個返品した場合には、返金金額に250円を指定します。<br/>
     * - 1 以上かつ 999999999999 以下<br/>
     * <br/>
     */
    private $amount;

    /**
     * 店舗ID<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * auのバーコード決済、スキャンコード決済で指定可能です。<br/>
     * <br/>
     * ※未指定の場合は、Authorize時と同じ値<br/>
     */
    private $storeId;

    /**
     * 端末管理番号<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * auのバーコード決済、スキャンコード決済で指定可能です。<br/>
     * <br/>
     * ※未指定の場合は、Authorize時と同じ値<br/>
     */
    private $termId;

    /**
     * レシート番号<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * auのバーコード決済、スキャンコード決済で指定可能です。<br/>
     * <br/>
     * ※未指定の場合は、Authorize時と同じ値<br/>
     */
    private $receiptNo;


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
     * 課金取消月を取得する<br>
     * @return string 課金取消月<br>
     */
    public function getCancelMonth()
    {
        return $this->cancelMonth;
    }

    /**
     * 課金取消月を設定する<br>
     * @param string $cancelMonth 課金取消月<br>
     */
    public function setCancelMonth($cancelMonth)
    {
        $this->cancelMonth = $cancelMonth;
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
     * 端末管理番号を取得する<br>
     * @return string 端末管理番号<br>
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * 端末管理番号を設定する<br>
     * @param string $termId 端末管理番号<br>
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;
    }

    /**
     * レシート番号を取得する<br>
     * @return string レシート番号<br>
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * レシート番号を設定する<br>
     * @param string $receiptNo レシート番号<br>
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
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
