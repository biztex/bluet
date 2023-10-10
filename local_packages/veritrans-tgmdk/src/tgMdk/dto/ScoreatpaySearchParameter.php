<?php

namespace tgMdk\dto;

/**
 * 検索条件:スコア@払い検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpaySearchParameter
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
     * 最新自動審査結果<br>
     */
    private $lastAuthorResult;

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
     * 最新自動審査結果を取得する<br>
     *
     * @return string[] 最新自動審査結果<br>
     */
    public function getLastAuthorResult()
    {
        return $this->lastAuthorResult;
    }

    /**
     * 最新自動審査結果を設定する<br>
     *
     * @param string[] $lastAuthorResult 最新自動審査結果<br>
     */
    public function setLastAuthorResult($lastAuthorResult)
    {
        $this->lastAuthorResult = $lastAuthorResult;
    }

}
