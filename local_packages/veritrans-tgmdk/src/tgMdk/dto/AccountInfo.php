<?php

namespace tgMdk\dto;

/**
 * 連絡先情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class AccountInfo
{

    /**
     * 連絡先ID<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * 連絡先を一意に識別するためのID<br/>
     */
    private $accountInfoId;

    /**
     * 連絡先区分<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * "01"：請求先<br/>
     * "02"：送付先<br/>
     */
    private $accountType;

    /**
     * 標準連絡先フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * "1"：この連絡先区分として標準で使用する連絡先である。<br/>
     * "0"：この連絡先区分として標準で使用する連絡先でない。<br/>
     */
    private $defaultAccount;

    /**
     * 宛名<br>
     * 半角数字<br/>
     * 最大桁数：100<br/>
     * “-”(ハイフン)も使用可能<br/>
     */
    private $recipient;

    /**
     * 郵便番号<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * “-”(ハイフン)も使用可能<br/>
     */
    private $zip;

    /**
     * 住所<br>
     * 文字列<br/>
     * 最大桁数：200<br/>
     */
    private $address;

    /**
     * 電話番号<br>
     * 半角数字<br/>
     * 最大桁数：20<br/>
     * “-”(ハイフン)も使用可能<br/>
     */
    private $tel;


    /**
     * 連絡先IDを設定する<br>
     * @param string $accountInfoId 連絡先ID<br>
     */
    public function setAccountInfoId($accountInfoId)
    {
        $this->accountInfoId = $accountInfoId;
    }

    /**
     * 連絡先IDを取得する<br>
     * @return string 連絡先ID<br>
     */
    public function getAccountInfoId()
    {
        return $this->accountInfoId;
    }

    /**
     * 連絡先区分を設定する<br>
     * @param string $accountType 連絡先区分<br>
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * 連絡先区分を取得する<br>
     * @return string 連絡先区分<br>
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * 標準連絡先フラグを設定する<br>
     * @param string $defaultAccount 標準連絡先フラグ<br>
     */
    public function setDefaultAccount($defaultAccount)
    {
        $this->defaultAccount = $defaultAccount;
    }

    /**
     * 標準連絡先フラグを取得する<br>
     * @return string 標準連絡先フラグ<br>
     */
    public function getDefaultAccount()
    {
        return $this->defaultAccount;
    }

    /**
     * 宛名を設定する<br>
     * @param string $recipient 宛名<br>
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    /**
     * 宛名を取得する<br>
     * @return string 宛名<br>
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * 郵便番号を設定する<br>
     * @param string $zip 郵便番号<br>
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * 郵便番号を取得する<br>
     * @return string 郵便番号<br>
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * 住所を設定する<br>
     * @param string $address 住所<br>
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * 住所を取得する<br>
     * @return string 住所<br>
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $tel 電話番号<br>
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getTel()
    {
        return $this->tel;
    }


}
