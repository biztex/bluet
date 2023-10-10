<?php

namespace tgMdk\dto;

/**
 * 検索条件:楽天検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RakutenSearchParameter
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
     * 商品番号<br>
     */
    private $itemId;

    /**
     * 決済種別<br>
     */
    private $payType;

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
     * 商品番号を取得する<br>
     *
     * @return string 商品番号<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品番号を設定する<br>
     *
     * @param string $itemId 商品番号<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
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
