<?php

namespace tgMdk\dto;

/**
 * 不正検知最終アクション情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionLastActionTimesDto
{

    /**
     * 最終ログイン日時<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * 最終ログイン日時を"YYYY-MM-DDTHH:MM:SS.MsMsMsZ"で設定してください。<br/>
     */
    private $previousSuccessfulLogin;

    /**
     * 送金限度額の最終変更日時<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * 送金限度額の最終変更日時を"YYYY-MM-DDTHH:MM:SS.MsMsMsZ"で設定してください。<br/>
     */
    private $transferThresholdUpdated;


    /**
     * 最終ログイン日時を取得する<br>
     * @return string 最終ログイン日時<br>
     */
    public function getPreviousSuccessfulLogin()
    {
        return $this->previousSuccessfulLogin;
    }

    /**
     * 最終ログイン日時を設定する<br>
     * @param string $previousSuccessfulLogin 最終ログイン日時<br>
     */
    public function setPreviousSuccessfulLogin($previousSuccessfulLogin)
    {
        $this->previousSuccessfulLogin = $previousSuccessfulLogin;
    }

    /**
     * 送金限度額の最終変更日時を取得する<br>
     * @return string 送金限度額の最終変更日時<br>
     */
    public function getTransferThresholdUpdated()
    {
        return $this->transferThresholdUpdated;
    }

    /**
     * 送金限度額の最終変更日時を設定する<br>
     * @param string $transferThresholdUpdated 送金限度額の最終変更日時<br>
     */
    public function setTransferThresholdUpdated($transferThresholdUpdated)
    {
        $this->transferThresholdUpdated = $transferThresholdUpdated;
    }


}
