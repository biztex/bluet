<?php

namespace tgMdk\dto;

/**
 * 検索条件:ペイパル検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 */
class PaypalSearchParameter
{

    /**
     * 詳細オーダー決済状態
     */
    private $detailOrderType;

    /**
     * 支払日時（From, To）<br>
     */
    private $paymentDatetime;

    /**
     * 請求番号<br>
     */
    private $invoiceId;

    /**
     * 顧客番号<br>
     */
    private $payerId;

    /**
     * 詳細オーダー決済状態を取得する<br>
     *
     * @return string[] 詳細オーダー決済状態<br>
     */
    public function getDetailOrderType()
    {
        return $this->detailOrderType;
    }

    /**
     * 詳細オーダー決済状態を設定する<br>
     *
     * @param string[] $detailOrderType 詳細オーダー決済状態<br>
     */
    public function setDetailOrderType($detailOrderType)
    {
        $this->detailOrderType = $detailOrderType;
    }

    /**
     * 支払日時（From, To）を取得する<br>
     *
     * @return SearchRange 支払日時（From, To）<br>
     */
    public function getPaymentDatetime()
    {
        return $this->paymentDatetime;
    }

    /**
     * 支払日時（From, To）を設定する<br>
     *
     * @param SearchRange $paymentDatetime 支払日時（From, To）<br>
     */
    public function setPaymentDatetime($paymentDatetime)
    {
        $this->paymentDatetime = $paymentDatetime;
    }

    /**
     * 請求番号を取得する<br>
     *
     * @return string 請求番号<br>
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * 請求番号を設定する<br>
     *
     * @param string $invoiceId 請求番号<br>
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * 顧客番号を取得する<br>
     *
     * @return string 顧客番号<br>
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * 顧客番号を設定する<br>
     *
     * @param string $payerId 顧客番号<br>
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
    }

}
