<?php

namespace tgMdk\dto;

/**
 * 検索条件:エポス検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class EposSearchParameter
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
     * エポス取引ID<br>
     */
    private $eposOrderId;

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
     * エポス取引IDを取得する<br>
     *
     * @return string エポス取引ID<br>
     */
    public function getEposOrderId()
    {
        return $this->eposOrderId;
    }

    /**
     * エポス取引IDを設定する<br>
     *
     * @param string $eposOrderId エポス取引ID<br>
     */
    public function setEposOrderId($eposOrderId)
    {
        $this->eposOrderId = $eposOrderId;
    }


}
