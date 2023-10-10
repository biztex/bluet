<?php

namespace tgMdk\dto;

/**
 * 検索結果:オーダー情報リストのクラス<br>
 *
 * @author Veritrans, Inc.
 */
class OrderInfos
{

    /**
     * オーダー情報<br>
     */
    private $orderInfo;

    /**
     * コンストラクタ。
     */
    public function __construct()
    {
        $this->orderInfo = array();
    }

    /**
     * オーダー情報を取得する<br>
     * @return OrderInfo[] オーダー情報<br>
     */
    public function getOrderInfo()
    {
        return $this->orderInfo;
    }

    /**
     * オーダー情報を設定する<br>
     * @param OrderInfo[] $orderInfo オーダー情報<br>
     */
    public function setOrderInfo($orderInfo)
    {
        $this->orderInfo = $orderInfo;
    }

}
