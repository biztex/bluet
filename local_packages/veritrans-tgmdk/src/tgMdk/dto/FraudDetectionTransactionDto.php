<?php

namespace tgMdk\dto;

/**
 * 不正検知取引支払いDtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionTransactionDto
{

    /**
     * 取引分類<br>
     * 最大桁数：20<br/>
     */
    private $type;

    /**
     * 取引ID<br>
     * 最大桁数：20<br/>
     */
    private $id;

    /**
     * 取引金額<br>
     * FraudDetectionCashValueDto<br/>
     * 取引金額オブジェクト<br/>
     */
    private $cashValue;

    /**
     * 取引日時<br>
     * 最大桁数：24<br/>
     */
    private $time;

    /**
     * 支払者<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 支払者の連絡先。contacts オブジェクトrefIdを設定してください。<br/>
     */
    private $payer;

    /**
     * 取引種別<br>
     * 最大桁数：20<br/>
     */
    private $category;

    /**
     * カードメソッド<br>
     * FraudDetectionMethodCardDto<br/>
     * カードメソッドオブジェクト<br/>
     */
    private $methodCard;


    /**
     * 取引分類を取得する<br>
     * @return string 取引分類<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 取引分類を設定する<br>
     * @param string $type 取引分類<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $id 取引ID<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 取引金額を取得する<br>
     * @return FraudDetectionCashValueDto 取引金額<br>
     */
    public function getCashValue()
    {
        return $this->cashValue;
    }

    /**
     * 取引金額を設定する<br>
     * @param FraudDetectionCashValueDto $cashValue 取引金額<br>
     */
    public function setCashValue($cashValue)
    {
        $this->cashValue = $cashValue;
    }

    /**
     * 取引日時を取得する<br>
     * @return string 取引日時<br>
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * 取引日時を設定する<br>
     * @param string $time 取引日時<br>
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * 支払者を取得する<br>
     * @return string 支払者<br>
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * 支払者を設定する<br>
     * @param string $payer 支払者<br>
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
    }

    /**
     * 取引種別を取得する<br>
     * @return string 取引種別<br>
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 取引種別を設定する<br>
     * @param string $category 取引種別<br>
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * カードメソッドを取得する<br>
     * @return FraudDetectionMethodCardDto カードメソッド<br>
     */
    public function getMethodCard()
    {
        return $this->methodCard;
    }

    /**
     * カードメソッドを設定する<br>
     * @param FraudDetectionMethodCardDto $methodCard カードメソッド<br>
     */
    public function setMethodCard($methodCard)
    {
        $this->methodCard = $methodCard;
    }


}
