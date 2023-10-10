<?php

namespace tgMdk\dto;

/**
 * 保留理由クラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayHoldReasonDto
{

    /**
     * 理由コード<br>
     * 半角英数字<br/>
     * 最大桁数：4<br/>
     */
    private $reasonCode;

    /**
     * 理由<br>
     * 文字列<br/>
     * 最大桁数：512<br/>
     */
    private $reason;


    /**
     * 理由コードを取得する<br>
     * @return string 理由コード<br>
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * 理由コードを設定する<br>
     * @param string $reasonCode 理由コード<br>
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * 理由を取得する<br>
     * @return string 理由<br>
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * 理由を設定する<br>
     * @param string $reason 理由<br>
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }


}
