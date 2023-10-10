<?php

namespace tgMdk\dto;

/**
 * 検索条件:Tenpay検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class TenpaySearchParameter
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
     * Tenpayサービスタイプ<br>
     */
    private $tenpayServiceType;

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
     * Tenpayサービスタイプを取得する<br>
     *
     * @return string[] Tenpayサービスタイプ<br>
     */
    public function getTenpayServiceType()
    {
        return $this->tenpayServiceType;
    }

    /**
     * Tenpayサービスタイプを設定する<br>
     *
     * @param string[] $tenpayServiceType Tenpayサービスタイプ<br>
     */
    public function setTenpayServiceType($tenpayServiceType)
    {
        $this->tenpayServiceType = $tenpayServiceType;
    }

}
