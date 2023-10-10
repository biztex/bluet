<?php

namespace tgMdk\dto;

/**
 * 不正検知警告Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionCbWarningDto
{

    /**
     * パス<br>
     * 無効と判断されたデータが含まれる要素へのオブジェクトパス。<br/>
     */
    private $path;

    /**
     * メッセージ<br>
     * 問題を通知するメッセージ本文。<br/>
     */
    private $message;

    /**
     * 値<br>
     * 無効と判断された要素の値。<br/>
     */
    private $value;


    /**
     * パスを取得する<br>
     * @return string パス<br>
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * パスを設定する<br>
     * @param string $path パス<br>
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * メッセージを取得する<br>
     * @return string メッセージ<br>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * メッセージを設定する<br>
     * @param string $message メッセージ<br>
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * 値を取得する<br>
     * @return string 値<br>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 値を設定する<br>
     * @param string $value 値<br>
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


}
