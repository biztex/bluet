<?php

namespace tgMdk\dto;

/**
 * 不正検知外部リスク評価結果Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionExternalRiskResultDto
{

    /**
     * ソース<br>
     * 文字列<br/>
     * 最大桁数：200<br/>
     * 外部リスク評価システム名、項目名<br/>
     */
    private $source;

    /**
     * スコア<br>
     * 小数可の半角数字<br/>
     * 最大桁数：8<br/>
     * 評価結果スコア<br/>
     */
    private $score;

    /**
     * コード値<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 評価結果コード値<br/>
     */
    private $code;


    /**
     * ソースを取得する<br>
     * @return string ソース<br>
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * ソースを設定する<br>
     * @param string $source ソース<br>
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * スコアを取得する<br>
     * @return string スコア<br>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * スコアを設定する<br>
     * @param string $score スコア<br>
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * コード値を取得する<br>
     * @return string コード値<br>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * コード値を設定する<br>
     * @param string $code コード値<br>
     */
    public function setCode($code)
    {
        $this->code = $code;
    }


}
