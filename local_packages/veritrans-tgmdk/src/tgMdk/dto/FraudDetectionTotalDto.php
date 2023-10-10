<?php

namespace tgMdk\dto;

/**
 * 不正検知合計金額Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionTotalDto
{

    /**
     * 合計金額<br>
     * 最大桁数：8<br/>
     */
    private $amount;

    /**
     * 通貨コード<br>
     * 最大桁数：3<br/>
     */
    private $currencyCode;


    /**
     * 合計金額を取得する<br>
     * @return string 合計金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 合計金額を設定する<br>
     * @param string $amount 合計金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 通貨コードを取得する<br>
     * @return string 通貨コード<br>
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * 通貨コードを設定する<br>
     * @param string $currencyCode 通貨コード<br>
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }


}
