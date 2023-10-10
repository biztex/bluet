<?php

namespace tgMdk\dto;

/**
 * 連絡先情報クラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayContactDto
{

    /**
     * フルネーム(漢字)<br>
     * 文字列<br/>
     * 最大桁数：25<br/>
     * 購入者のフルネーム(漢字)を指定します。<br/>
     *  - 最小2文字。<br/>
     */
    private $fullName;

    /**
     * フルネーム(カナ)<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     * 購入者のフルネーム(カナ)を指定します。<br/>
     *  - 最小2文字。<br/>
     */
    private $fullKanaName;

    /**
     * 電話番号<br>
     * 半角数字記号<br/>
     * 最大桁数：17<br/>
     * 購入者の電話番号を指定します。<br/>
     *  - ハイフン利用可。<br/>
     *  - 最小8桁。<br/>
     */
    private $tel;

    /**
     * 携帯電話番号<br>
     * 半角数字記号<br/>
     * 最大桁数：17<br/>
     * 購入者の携帯電話番号を指定します。<br/>
     *  - ハイフン利用可。<br/>
     *  - 最小8桁。<br/>
     * 発送先情報として使用する場合は無視される<br/>
     */
    private $mobile;

    /**
     * メールアドレス<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 購入者のメールアドレスを指定します。<br/>
     *  - @とピリオド必須。<br/>
     * 請求先情報として使用する場合は必須<br/>
     * 発送先情報として使用する場合は必須でない<br/>
     */
    private $email;

    /**
     * 携帯メールアドレス<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 購入者の携帯メールアドレスを指定します。<br/>
     *  - @とピリオド必須。<br/>
     * 発送先情報として使用する場合は無視される<br/>
     */
    private $mobileEmail;

    /**
     * 郵便番号<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * 購入者の郵便番号を指定します。<br/>
     *  - ハイフン利用可。<br/>
     */
    private $zipCode;

    /**
     * 住所(都道府県)<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     * 購入者の住所(都道府県)を指定します。<br/>
     *  - 最小1文字。<br/>
     */
    private $address1;

    /**
     * 住所(市区町村)<br>
     * 文字列<br/>
     * 最大桁数：31<br/>
     * 購入者の住所(市区町村)を指定します。厳密な市区町村区分けが困難な場合、最小/最大文字数のみ考慮して指定してください。<br/>
     *  - 最小2文字。<br/>
     */
    private $address2;

    /**
     * 住所(市区町村以降)<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     * 購入者の住所(市区町村以降)のを指定します。厳密な市区町村区分けが困難な場合、最小/最大文字数のみ考慮して指定してください。<br/>
     *  - 最小2文字。<br/>
     */
    private $address3;

    /**
     * 会社名<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     * 購入者の会社名を指定します。<br/>
     *  - 最小2文字。<br/>
     */
    private $companyName;

    /**
     * 部署名<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     * 購入者の部署名を指定します。<br/>
     *  - 最小2文字。<br/>
     */
    private $departmentName;


    /**
     * フルネーム(漢字)を取得する<br>
     * @return string フルネーム(漢字)<br>
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * フルネーム(漢字)を設定する<br>
     * @param string $fullName フルネーム(漢字)<br>
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * フルネーム(カナ)を取得する<br>
     * @return string フルネーム(カナ)<br>
     */
    public function getFullKanaName()
    {
        return $this->fullKanaName;
    }

    /**
     * フルネーム(カナ)を設定する<br>
     * @param string $fullKanaName フルネーム(カナ)<br>
     */
    public function setFullKanaName($fullKanaName)
    {
        $this->fullKanaName = $fullKanaName;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getTel()
    {
        return $this->tel;
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
     * 携帯電話番号を取得する<br>
     * @return string 携帯電話番号<br>
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 携帯電話番号を設定する<br>
     * @param string $mobile 携帯電話番号<br>
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $email メールアドレス<br>
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * 携帯メールアドレスを取得する<br>
     * @return string 携帯メールアドレス<br>
     */
    public function getMobileEmail()
    {
        return $this->mobileEmail;
    }

    /**
     * 携帯メールアドレスを設定する<br>
     * @param string $mobileEmail 携帯メールアドレス<br>
     */
    public function setMobileEmail($mobileEmail)
    {
        $this->mobileEmail = $mobileEmail;
    }

    /**
     * 郵便番号を取得する<br>
     * @return string 郵便番号<br>
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * 郵便番号を設定する<br>
     * @param string $zipCode 郵便番号<br>
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * 住所(都道府県)を取得する<br>
     * @return string 住所(都道府県)<br>
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * 住所(都道府県)を設定する<br>
     * @param string $address1 住所(都道府県)<br>
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * 住所(市区町村)を取得する<br>
     * @return string 住所(市区町村)<br>
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * 住所(市区町村)を設定する<br>
     * @param string $address2 住所(市区町村)<br>
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * 住所(市区町村以降)を取得する<br>
     * @return string 住所(市区町村以降)<br>
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * 住所(市区町村以降)を設定する<br>
     * @param string $address3 住所(市区町村以降)<br>
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    /**
     * 会社名を取得する<br>
     * @return string 会社名<br>
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * 会社名を設定する<br>
     * @param string $companyName 会社名<br>
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * 部署名を取得する<br>
     * @return string 部署名<br>
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * 部署名を設定する<br>
     * @param string $departmentName 部署名<br>
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
    }


}
