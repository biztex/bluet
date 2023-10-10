<?php

namespace tgMdk\dto;

/**
 * 検索条件:Alipay検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipaySearchParameter
{

    /**
     * 詳細取引決済状態<br>
     */
    private $detailOrderType;

    /**
     * 決済センターとの取引ID<br>
     */
    private $centerTradeId;

    /**
     * 支払日時<br>
     */
    private $paymentTime;

    /**
     * 清算日時<br>
     */
    private $settlementTime;

    /**
     * 決済種別<br>
     */
    private $payType;

    /**
     * 詳細取引決済状態を取得する<br>
     *
     * @return string[] 詳細取引決済状態<br>
     */
    public function getDetailOrderType()
    {
        return $this->detailOrderType;
    }

    /**
     * 詳細取引決済状態を設定する<br>
     *
     * @param string[] $detailOrderType 詳細取引決済状態<br>
     */
    public function setDetailOrderType($detailOrderType)
    {
        $this->detailOrderType = $detailOrderType;
    }

    /**
     * 決済センターとの取引IDを取得する<br>
     *
     * @return string 決済センターとの取引ID<br>
     */
    public function getCenterTradeId()
    {
        return $this->centerTradeId;
    }

    /**
     * 決済センターとの取引IDを設定する<br>
     *
     * @param string $centerTradeId 決済センターとの取引ID<br>
     */
    public function setCenterTradeId($centerTradeId)
    {
        $this->centerTradeId = $centerTradeId;
    }

    /**
     * 支払日時を取得する<br>
     *
     * @return SearchRange 支払日時<br>
     */
    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    /**
     * 支払日時を設定する<br>
     *
     * @param SearchRange $paymentTime 支払日時<br>
     */
    public function setPaymentTime($paymentTime)
    {
        $this->paymentTime = $paymentTime;
    }

    /**
     * 清算日時を取得する<br>
     *
     * @return SearchRange 清算日時<br>
     */
    public function getSettlementTime()
    {
        return $this->settlementTime;
    }

    /**
     * 清算日時を設定する<br>
     *
     * @param SearchRange $settlementTime 清算日時<br>
     */
    public function setSettlementTime($settlementTime)
    {
        $this->settlementTime = $settlementTime;
    }

    /**
     * 決済種別を取得する<br>
     *
     * @return string[] 決済種別<br>
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * 決済種別を設定する<br>
     *
     * @param string[] $payType 決済種別<br>
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    }

}
