<?php

namespace tgMdk\dto;

/**
 * 検索条件:コンビニ検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 */
class CvsSearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * コンビニタイプ<br>
     */
    private $cvsType;

    /**
     * 支払期限（From, To）<br>
     */
    private $payLimit;

    /**
     * 入金受付日（From, To）<br>
     */
    private $paidDatetime;

    /**
     * 支払期限日時（From, To）<br>
     */
    private $payLimitDatetime;

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
     * コンビニタイプを取得する<br>
     *
     * @return string[] コンビニタイプ<br>
     */
    public function getCvsType()
    {
        return $this->cvsType;
    }

    /**
     * コンビニタイプを設定する<br>
     *
     * @param string[] $cvsType コンビニタイプ<br>
     */
    public function setCvsType($cvsType)
    {
        $this->cvsType = $cvsType;
    }

    /**
     * 支払期限（From, To）を取得する<br>
     *
     * @return SearchRange 支払期限（From, To）<br>
     */
    public function getPayLimit()
    {
        return $this->payLimit;
    }

    /**
     * 支払期限（From, To）を設定する<br>
     *
     * @param SearchRange $payLimit 支払期限（From, To）<br>
     */
    public function setPayLimit($payLimit)
    {
        $this->payLimit = $payLimit;
    }

    /**
     * 入金受付日（From, To）を取得する<br>
     *
     * @return SearchRange 入金受付日（From, To）<br>
     */
    public function getPaidDatetime()
    {
        return $this->paidDatetime;
    }

    /**
     * 入金受付日（From, To）を設定する<br>
     *
     * @param SearchRange $paidDatetime 入金受付日（From, To）<br>
     */
    public function setPaidDatetime($paidDatetime)
    {
        $this->paidDatetime = $paidDatetime;
    }

    /**
     * 支払期限日時（From, To）を取得する<br>
     *
     * @return SearchRange 支払期限日時（From, To）<br>
     */
    public function getPayLimitDatetime()
    {
        return $this->payLimitDatetime;
    }

    /**
     * 支払期限日時（From, To）を設定する<br>
     *
     * @param SearchRange $payLimitDatetime 支払期限日時（From, To）<br>
     */
    public function setPayLimitDatetime($payLimitDatetime)
    {
        $this->payLimitDatetime = $payLimitDatetime;
    }

}
