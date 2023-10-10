<?php

namespace tgMdk\dto;

/**
 * 不正検知セッション情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionSessionDto
{

    /**
     * セッション識別子<br>
     * 半角英数字<br/>
     * 最大桁数：400<br/>
     * 貴社システム上でのセッション識別子を設定してください。<br/>
     */
    private $id;

    /**
     * アイテム削除フラグ<br>
     * true/false<br/>
     * 最大桁数：5<br/>
     * トランザクション中に、“買い物カゴ”からアイテムが削除されたことを示すフラグを設定してください。<br/>
     */
    private $itemsRemoved;

    /**
     * ログイン経過時間<br>
     * 半角数字<br/>
     * 最大桁数：9<br/>
     * ログイン経過時間（ミリ秒）を設定してください。<br/>
     */
    private $durationInMillis;

    /**
     * 最終送信画面コード<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * 最終送信画面コード（名）を設定してください。<br/>
     */
    private $activityPageCode;

    /**
     * ログイン失敗回数<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     * 過去分すべての、ログイン試行し失敗した回数を設定してください。<br/>
     */
    private $failedLoginAttempts;

    /**
     * サードパーティセッション識別子<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * サードパーティセッション識別子を設定してください。<br/>
     */
    private $thirdPartySessionId;

    /**
     * ログインフラグ<br>
     * true/false<br/>
     * 最大桁数：5<br/>
     * ログインしていたかの状態を設定してください。<br/>
     */
    private $loggedIn;

    /**
     * 認証要求状態フラグ<br>
     * true/false<br/>
     * 最大桁数：5<br/>
     * 2要素認証要求状態を設定してください。<br/>
     */
    private $multiFactorAuthenticated;

    /**
     * ログイン試行回数<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     * 直近のログイン試行回数を設定してください。<br/>
     */
    private $challengeAttempts;


    /**
     * セッション識別子を取得する<br>
     * @return string セッション識別子<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * セッション識別子を設定する<br>
     * @param string $id セッション識別子<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * アイテム削除フラグを取得する<br>
     * @return string アイテム削除フラグ<br>
     */
    public function getItemsRemoved()
    {
        return $this->itemsRemoved;
    }

    /**
     * アイテム削除フラグを設定する<br>
     * @param string $itemsRemoved アイテム削除フラグ<br>
     */
    public function setItemsRemoved($itemsRemoved)
    {
        $this->itemsRemoved = $itemsRemoved;
    }

    /**
     * ログイン経過時間を取得する<br>
     * @return string ログイン経過時間<br>
     */
    public function getDurationInMillis()
    {
        return $this->durationInMillis;
    }

    /**
     * ログイン経過時間を設定する<br>
     * @param string $durationInMillis ログイン経過時間<br>
     */
    public function setDurationInMillis($durationInMillis)
    {
        $this->durationInMillis = $durationInMillis;
    }

    /**
     * 最終送信画面コードを取得する<br>
     * @return string 最終送信画面コード<br>
     */
    public function getActivityPageCode()
    {
        return $this->activityPageCode;
    }

    /**
     * 最終送信画面コードを設定する<br>
     * @param string $activityPageCode 最終送信画面コード<br>
     */
    public function setActivityPageCode($activityPageCode)
    {
        $this->activityPageCode = $activityPageCode;
    }

    /**
     * ログイン失敗回数を取得する<br>
     * @return string ログイン失敗回数<br>
     */
    public function getFailedLoginAttempts()
    {
        return $this->failedLoginAttempts;
    }

    /**
     * ログイン失敗回数を設定する<br>
     * @param string $failedLoginAttempts ログイン失敗回数<br>
     */
    public function setFailedLoginAttempts($failedLoginAttempts)
    {
        $this->failedLoginAttempts = $failedLoginAttempts;
    }

    /**
     * サードパーティセッション識別子を取得する<br>
     * @return string サードパーティセッション識別子<br>
     */
    public function getThirdPartySessionId()
    {
        return $this->thirdPartySessionId;
    }

    /**
     * サードパーティセッション識別子を設定する<br>
     * @param string $thirdPartySessionId サードパーティセッション識別子<br>
     */
    public function setThirdPartySessionId($thirdPartySessionId)
    {
        $this->thirdPartySessionId = $thirdPartySessionId;
    }

    /**
     * ログインフラグを取得する<br>
     * @return string ログインフラグ<br>
     */
    public function getLoggedIn()
    {
        return $this->loggedIn;
    }

    /**
     * ログインフラグを設定する<br>
     * @param string $loggedIn ログインフラグ<br>
     */
    public function setLoggedIn($loggedIn)
    {
        $this->loggedIn = $loggedIn;
    }

    /**
     * 認証要求状態フラグを取得する<br>
     * @return string 認証要求状態フラグ<br>
     */
    public function getMultiFactorAuthenticated()
    {
        return $this->multiFactorAuthenticated;
    }

    /**
     * 認証要求状態フラグを設定する<br>
     * @param string $multiFactorAuthenticated 認証要求状態フラグ<br>
     */
    public function setMultiFactorAuthenticated($multiFactorAuthenticated)
    {
        $this->multiFactorAuthenticated = $multiFactorAuthenticated;
    }

    /**
     * ログイン試行回数を取得する<br>
     * @return string ログイン試行回数<br>
     */
    public function getChallengeAttempts()
    {
        return $this->challengeAttempts;
    }

    /**
     * ログイン試行回数を設定する<br>
     * @param string $challengeAttempts ログイン試行回数<br>
     */
    public function setChallengeAttempts($challengeAttempts)
    {
        $this->challengeAttempts = $challengeAttempts;
    }


}
