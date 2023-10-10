<?php

namespace tgMdk\dto;

/**
 * 明細情報クラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayDetailDto
{

    /**
     * 明細名<br>
     * 文字列<br/>
     * 最大桁数：150<br/>
     * 商品名を指定します。<br/>
     */
    private $detailName;

    /**
     * 単価<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     *  -99999 ～ 999999の値を指定可能<br/>
     */
    private $detailPrice;

    /**
     * 数量<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     *  0 ～ 9999の値を指定可能<br/>
     */
    private $detailQuantity;


    /**
     * 明細名を取得する<br>
     * @return string 明細名<br>
     */
    public function getDetailName()
    {
        return $this->detailName;
    }

    /**
     * 明細名を設定する<br>
     * @param string $detailName 明細名<br>
     */
    public function setDetailName($detailName)
    {
        $this->detailName = $detailName;
    }

    /**
     * 単価を取得する<br>
     * @return string 単価<br>
     */
    public function getDetailPrice()
    {
        return $this->detailPrice;
    }

    /**
     * 単価を設定する<br>
     * @param string $detailPrice 単価<br>
     */
    public function setDetailPrice($detailPrice)
    {
        $this->detailPrice = $detailPrice;
    }

    /**
     * 数量を取得する<br>
     * @return string 数量<br>
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }

    /**
     * 数量を設定する<br>
     * @param string $detailQuantity 数量<br>
     */
    public function setDetailQuantity($detailQuantity)
    {
        $this->detailQuantity = $detailQuantity;
    }


}
