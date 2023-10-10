<?php

namespace tgMdk\dto;

/**
 * 不正検知送料情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionCostDto
{

    /**
     * 発送料金<br>
     * 小数可の半角数字<br/>
     * 最大桁数：8<br/>
     * 発送料金を設定してください。<br/>
     */
    private $amount;

    /**
     * 通貨コード<br>
     * 最大桁数：3<br/>
     */
    private $currencyCode;


    /**
     * 発送料金を取得する<br>
     * @return string 発送料金<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 発送料金を設定する<br>
     * @param string $amount 発送料金<br>
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
