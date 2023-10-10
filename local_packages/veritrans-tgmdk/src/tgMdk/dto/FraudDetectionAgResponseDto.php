<?php

namespace tgMdk\dto;

/**
 * 不正検知Aegis詳細結果応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionAgResponseDto
{

    /**
     * 評価結果<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 不正検知評価結果。<br/>
     * accept：承認<br/>
     * deny：拒否<br/>
     * challenge：保留<br/>
     */
    private $decision;

    /**
     * 該当不正検知ルール<br>
     * 半角英数字の配列<br/>
     * 最大桁数：20<br/>
     * 該当した不正検知ルール（複数）。<br/>
     */
    private $hitRules;

    /**
     * 該当不正検知理由<br>
     * 半角英数字の配列<br/>
     * 最大桁数：500<br/>
     * 該当した不正検知理由（複数）。<br/>
     */
    private $hitReasons;

    /**
     * 実施時エラー理由<br>
     * 半角英数字の配列<br/>
     * 最大桁数：100<br/>
     * 不正検知評価実施時に発生したエラー理由（複数）<br/>
     */
    private $errors;

    /**
     * 実施前エラー理由<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 不正検知評価前に発生したエラー理由<br/>
     */
    private $message;


    /**
     * 評価結果を取得する<br>
     * @return string 評価結果<br>
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * 評価結果を設定する<br>
     * @param string $decision 評価結果<br>
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;
    }

    /**
     * 該当不正検知ルールを取得する<br>
     * @return string[] 該当不正検知ルール<br>
     */
    public function getHitRules()
    {
        return $this->hitRules;
    }

    /**
     * 該当不正検知ルールを設定する<br>
     * @param string[] $hitRules 該当不正検知ルール<br>
     */
    public function setHitRules($hitRules)
    {
        $this->hitRules = $hitRules;
    }

    /**
     * 該当不正検知理由を取得する<br>
     * @return string[] 該当不正検知理由<br>
     */
    public function getHitReasons()
    {
        return $this->hitReasons;
    }

    /**
     * 該当不正検知理由を設定する<br>
     * @param string[] $hitReasons 該当不正検知理由<br>
     */
    public function setHitReasons($hitReasons)
    {
        $this->hitReasons = $hitReasons;
    }

    /**
     * 実施時エラー理由を取得する<br>
     * @return string[] 実施時エラー理由<br>
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * 実施時エラー理由を設定する<br>
     * @param string[] $errors 実施時エラー理由<br>
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * 実施前エラー理由を取得する<br>
     * @return string 実施前エラー理由<br>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 実施前エラー理由を設定する<br>
     * @param string $message 実施前エラー理由<br>
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}
