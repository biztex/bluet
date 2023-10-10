<?php

namespace tgMdk\dto;

/**
 * エラー情報クラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayErrorDto
{

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 最大桁数：512<br/>
     */
    private $errorMessage;

    /**
     * エラーコード<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     */
    private $errorCode;


    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $errorMessage エラーメッセージ<br>
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * エラーコードを取得する<br>
     * @return string エラーコード<br>
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * エラーコードを設定する<br>
     * @param string $errorCode エラーコード<br>
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }


}
