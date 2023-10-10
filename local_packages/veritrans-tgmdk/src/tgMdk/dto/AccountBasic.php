<?php

namespace tgMdk\dto;

/**
 * 会員基本情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class AccountBasic
{

    /**
     * 姓<br>
     * 文字列<br/>
     * 最大桁数：40<br/>
     */
    private $lastName;

    /**
     * 姓カナ<br>
     * 文字列<br/>
     * 最大桁数：40<br/>
     * 全角カナ<br/>
     */
    private $lastKanaName;

    /**
     * 名<br>
     * 文字列<br/>
     * 最大桁数：40<br/>
     */
    private $firstName;

    /**
     * 名カナ<br>
     * 文字列<br/>
     * 最大桁数：40<br/>
     * 全角カナ<br/>
     */
    private $firstKanaName;

    /**
     * メールアドレス<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     */
    private $mailAddress;

    /**
     * 入会年月日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * YYYYMMDD形式<br/>
     */
    private $createDate;

    /**
     * 退会年月日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * YYYYMMDD形式<br/>
     */
    private $deleteDate;


    /**
     * 姓を設定する<br>
     * @param string $lastName 姓<br>
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * 姓を取得する<br>
     * @return string 姓<br>
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * 姓カナを設定する<br>
     * @param string $lastKanaName 姓カナ<br>
     */
    public function setLastKanaName($lastKanaName)
    {
        $this->lastKanaName = $lastKanaName;
    }

    /**
     * 姓カナを取得する<br>
     * @return string 姓カナ<br>
     */
    public function getLastKanaName()
    {
        return $this->lastKanaName;
    }

    /**
     * 名を設定する<br>
     * @param string $firstName 名<br>
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * 名を取得する<br>
     * @return string 名<br>
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * 名カナを設定する<br>
     * @param string $firstKanaName 名カナ<br>
     */
    public function setFirstKanaName($firstKanaName)
    {
        $this->firstKanaName = $firstKanaName;
    }

    /**
     * 名カナを取得する<br>
     * @return string 名カナ<br>
     */
    public function getFirstKanaName()
    {
        return $this->firstKanaName;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $mailAddress メールアドレス<br>
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;
    }

    /**
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * 入会年月日を設定する<br>
     * @param string $createDate 入会年月日<br>
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * 入会年月日を取得する<br>
     * @return string 入会年月日<br>
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * 退会年月日を設定する<br>
     * @param string $deleteDate 退会年月日<br>
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;
    }

    /**
     * 退会年月日を取得する<br>
     * @return string 退会年月日<br>
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }


}
