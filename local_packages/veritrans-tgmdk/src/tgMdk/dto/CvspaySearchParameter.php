<?php

namespace tgMdk\dto;

/**
 * 検索条件:コンビニペイ検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CvspaySearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * 詳細コマンドタイプ名<br>
     */
    private $detailCommandType;

    /**
     * CvsPay種別<br>
     */
    private $cvspayType;

    /**
     * 決済種別<br>
     */
    private $payType;

    /**
     * CvsPay取引ID<br>
     */
    private $cvspayOrderId;

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
     * 詳細コマンドタイプ名を取得する<br>
     *
     * @return string[] 詳細コマンドタイプ名<br>
     */
    public function getDetailCommandType()
    {
        return $this->detailCommandType;
    }

    /**
     * 詳細コマンドタイプ名を設定する<br>
     *
     * @param string[] $detailCommandType 詳細コマンドタイプ名<br>
     */
    public function setDetailCommandType($detailCommandType)
    {
        $this->detailCommandType = $detailCommandType;
    }

    /**
     * CvsPay種別を取得する<br>
     *
     * @return string[] CvsPay種別<br>
     */
    public function getCvspayType()
    {
        return $this->cvspayType;
    }

    /**
     * CvsPay種別を設定する<br>
     *
     * @param string[] $cvspayType CvsPay種別<br>
     */
    public function setCvspayType($cvspayType)
    {
        $this->cvspayType = $cvspayType;
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

    /**
     * CvsPay取引IDを取得する<br>
     *
     * @return string CvsPay取引ID<br>
     */
    public function getCvspayOrderId()
    {
        return $this->cvspayOrderId;
    }

    /**
     * CvsPay取引IDを設定する<br>
     *
     * @param string $cvspayOrderId CvsPay取引ID<br>
     */
    public function setCvspayOrderId($cvspayOrderId)
    {
        $this->cvspayOrderId = $cvspayOrderId;
    }

}
