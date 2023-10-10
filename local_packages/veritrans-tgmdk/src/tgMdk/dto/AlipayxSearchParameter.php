<?php

namespace tgMdk\dto;

/**
 * 検索条件:alipayx検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayxSearchParameter
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
     * Alipay+サービスタイプ<br>
     */
    private $alipayxServiceType;

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
     * Alipay+サービスタイプを取得する<br>
     *
     * @return string[] Alipay+サービスタイプ<br>
     */
    public function getAlipayxServiceType()
    {
        return $this->alipayxServiceType;
    }

    /**
     * Alipay+サービスタイプを設定する<br>
     *
     * @param string[] $alipayxServiceType Alipay+サービスタイプ<br>
     */
    public function setAlipayxServiceType($alipayxServiceType)
    {
        $this->alipayxServiceType = $alipayxServiceType;
    }

}
