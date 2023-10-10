<?php

namespace tgMdk\dto;

/**
 * 不正検知ユーザアカウントDtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionUserAccountDto
{

    /**
     * ユーザアカウントID<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 貴社システムでの、一意なエンドユーザアカウント ID。<br/>
     */
    private $id;

    /**
     * アクセス開始日時<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * オンラインアカウント アクセス開始日時を"YYYY-MM-DDTHH:MM:SS.MsMsMsZ"で設定してください。<br/>
     */
    private $enrollmentTime;

    /**
     * アカウント保有者<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * アカウント保有者。contacts オブジェクトrefIdを設定してください。<br/>
     */
    private $accountHolder;

    /**
     * リピート顧客フラグ<br>
     * true/false<br/>
     * 最大桁数：5<br/>
     * アカウント保有者がリピート顧客であるかを示すフラグ。「true, false」の何れかを設定してください。（true：リピート顧客）<br/>
     */
    private $returnCustomer;

    /**
     * ユーザ名<br>
     * 半角英数字<br/>
     * 最大桁数：200<br/>
     * アカウント保有者のユーザ名を設定してください。<br/>
     */
    private $username;

    /**
     * アカウントが作成されてからの日数<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * アカウントが作成されてからの日数を設定してください。<br/>
     */
    private $tof;

    /**
     * 最終アクション情報<br>
     * FraudDetectionLastActionTimesDto<br/>
     * 最終アクション情報オブジェクト<br/>
     */
    private $lastActionTimes;


    /**
     * ユーザアカウントIDを取得する<br>
     * @return string ユーザアカウントID<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ユーザアカウントIDを設定する<br>
     * @param string $id ユーザアカウントID<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * アクセス開始日時を取得する<br>
     * @return string アクセス開始日時<br>
     */
    public function getEnrollmentTime()
    {
        return $this->enrollmentTime;
    }

    /**
     * アクセス開始日時を設定する<br>
     * @param string $enrollmentTime アクセス開始日時<br>
     */
    public function setEnrollmentTime($enrollmentTime)
    {
        $this->enrollmentTime = $enrollmentTime;
    }

    /**
     * アカウント保有者を取得する<br>
     * @return string アカウント保有者<br>
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * アカウント保有者を設定する<br>
     * @param string $accountHolder アカウント保有者<br>
     */
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;
    }

    /**
     * リピート顧客フラグを取得する<br>
     * @return string リピート顧客フラグ<br>
     */
    public function getReturnCustomer()
    {
        return $this->returnCustomer;
    }

    /**
     * リピート顧客フラグを設定する<br>
     * @param string $returnCustomer リピート顧客フラグ<br>
     */
    public function setReturnCustomer($returnCustomer)
    {
        $this->returnCustomer = $returnCustomer;
    }

    /**
     * ユーザ名を取得する<br>
     * @return string ユーザ名<br>
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * ユーザ名を設定する<br>
     * @param string $username ユーザ名<br>
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * アカウントが作成されてからの日数を取得する<br>
     * @return string アカウントが作成されてからの日数<br>
     */
    public function getTof()
    {
        return $this->tof;
    }

    /**
     * アカウントが作成されてからの日数を設定する<br>
     * @param string $tof アカウントが作成されてからの日数<br>
     */
    public function setTof($tof)
    {
        $this->tof = $tof;
    }

    /**
     * 最終アクション情報を取得する<br>
     * @return FraudDetectionLastActionTimesDto 最終アクション情報<br>
     */
    public function getLastActionTimes()
    {
        return $this->lastActionTimes;
    }

    /**
     * 最終アクション情報を設定する<br>
     * @param FraudDetectionLastActionTimesDto $lastActionTimes 最終アクション情報<br>
     */
    public function setLastActionTimes($lastActionTimes)
    {
        $this->lastActionTimes = $lastActionTimes;
    }


}
