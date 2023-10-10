<?php

namespace tgMdk\dto;

/**
 * 不正検知監査証跡情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionCbAuditTrailDto
{

    /**
     * 名称コード<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * スコアリングの契機となったルールの名称コード。<br/>
     */
    private $code;

    /**
     * スコア<br>
     * 半角英数字<br/>
     * 最大桁数：38<br/>
     * ルールに設定されているスコア。<br/>
     */
    private $ruleScore;

    /**
     * 評価アクション<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * ルールに設定されている、最高の不正リスク評価アクション。<br/>
     * APPROVE：承認<br/>
     * NOTE：ノート<br/>
     * REJECT：却下<br/>
     * SUSPECT：不審<br/>
     * XSPECIAL：特別監視(通常は使用しません)<br/>
     * <br/>
     */
    private $ruleAction;


    /**
     * 名称コードを取得する<br>
     * @return string 名称コード<br>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 名称コードを設定する<br>
     * @param string $code 名称コード<br>
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * スコアを取得する<br>
     * @return string スコア<br>
     */
    public function getRuleScore()
    {
        return $this->ruleScore;
    }

    /**
     * スコアを設定する<br>
     * @param string $ruleScore スコア<br>
     */
    public function setRuleScore($ruleScore)
    {
        $this->ruleScore = $ruleScore;
    }

    /**
     * 評価アクションを取得する<br>
     * @return string 評価アクション<br>
     */
    public function getRuleAction()
    {
        return $this->ruleAction;
    }

    /**
     * 評価アクションを設定する<br>
     * @param string $ruleAction 評価アクション<br>
     */
    public function setRuleAction($ruleAction)
    {
        $this->ruleAction = $ruleAction;
    }


}
