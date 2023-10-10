<?php

namespace tgMdk\dto;

/**
 * 検索条件:MasterPass検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MasterpassSearchParameter
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
     * 支払種別<br>
     */
    private $jpo;

    /**
     * 仕向け先コード<br>
     */
    private $acquirerCode;

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
     * 支払種別を取得する<br>
     *
     * @return string 支払種別<br>
     */
    public function getJpo()
    {
        return $this->jpo;
    }

    /**
     * 支払種別を設定する<br>
     *
     * @param string $jpo 支払種別<br>
     */
    public function setJpo($jpo)
    {
        $this->jpo = $jpo;
    }

    /**
     * 仕向け先コードを取得する<br>
     *
     * @return string 仕向け先コード<br>
     */
    public function getAcquirerCode()
    {
        return $this->acquirerCode;
    }

    /**
     * 仕向け先コードを設定する<br>
     *
     * @param string $acquirerCode 仕向け先コード<br>
     */
    public function setAcquirerCode($acquirerCode)
    {
        $this->acquirerCode = $acquirerCode;
    }

}
