<?php

namespace tgMdk\dto;

/**
 * 不正検知連絡先Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionContactDto
{

    /**
     * 参照Key<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 他項目から、連絡先オブジェクトへの参照用の Key 名称。<br/>
     */
    private $refId;

    /**
     * 名<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 連絡先氏名（名）<br/>
     */
    private $firstName;

    /**
     * 姓<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 連絡先氏名（姓）<br/>
     */
    private $lastName;

    /**
     * 会社名<br>
     * 文字列<br/>
     * 最大桁数：120<br/>
     * 連絡先会社名<br/>
     */
    private $company;

    /**
     * Eメールアドレス<br>
     * 半角英数字<br/>
     * 最大桁数：60<br/>
     * メールアドレス<br/>
     */
    private $emailAddress;

    /**
     * Eメールアドレス分類<br>
     * 半角英字<br/>
     * 最大桁数：20<br/>
     * メールアドレスの分類。<br/>
     * 「PERSONAL,WORK,UNKNOWN」の何れかを設定してください。<br/>
     * PERSONAL:個人用<br/>
     * WORK:仕事用<br/>
     * UNKNOWN:不明<br/>
     */
    private $emailAddressType;

    /**
     * 電話番号<br>
     * 半角数字<br/>
     * 最大桁数：13<br/>
     * 電話番号をハイフンを除いた数字で設定してください。<br/>
     * ※addressで指定されたcountryCodeの国の電話番号として取り扱います。<br/>
     */
    private $phoneNumber;

    /**
     * 電話番号分類<br>
     * 半角英字<br/>
     * 最大桁数：20<br/>
     * 電話番号の分類。<br/>
     * 「HOME,MOBILE,WORK,COMPANY,FAX,UNKNOWN」の何れかを設定してください。<br/>
     * HOME:自宅<br/>
     * MOBILE:モバイル<br/>
     * WORK:仕事用<br/>
     * COMPANY:会社<br/>
     * FAX:ファックス<br/>
     * UNKNOWN:不明<br/>
     */
    private $phoneNumberType;

    /**
     * 住所1<br>
     * 文字列<br/>
     * 最大桁数：255<br/>
     * 住所1。住所2と合わせて住所情報となるよう設定してください。<br/>
     */
    private $streetLine;

    /**
     * 住所2<br>
     * 文字列<br/>
     * 最大桁数：255<br/>
     * 住所2。住所1と合わせて住所情報となるよう設定してください。<br/>
     */
    private $streetLine2;

    /**
     * 都道府県<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * 47 都道府県名称を設定してください。<br/>
     */
    private $city;

    /**
     * 郵便番号<br>
     * 半角英数字<br/>
     * 最大桁数：9<br/>
     * 郵便番号をハイフン無で設定してください。<br/>
     */
    private $postal;

    /**
     * 都道府県略号<br>
     * 半角英数字<br/>
     * 最大桁数：3<br/>
     * 都道府県の略号（ISO 3166-2：2007）の英数字1～3桁を設定してください。<br/>
     */
    private $stateProvinceCode;

    /**
     * 国名コード<br>
     * 半角英字<br/>
     * 最大桁数：2<br/>
     * 国名コード（ISO 3166-2：2007）を設定してください。<br/>
     */
    private $countryCode;

    /**
     * 生年月日<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * "YYYY-MM-DD"の形式で設定してください。<br/>
     */
    private $birthDate;

    /**
     * 旧姓<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 母方の姓、旧姓を設定してください。<br/>
     */
    private $mothersMaidenName;


    /**
     * 参照Keyを取得する<br>
     * @return string 参照Key<br>
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * 参照Keyを設定する<br>
     * @param string $refId 参照Key<br>
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;
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
     * 名を設定する<br>
     * @param string $firstName 名<br>
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
     * 姓を設定する<br>
     * @param string $lastName 姓<br>
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * 会社名を取得する<br>
     * @return string 会社名<br>
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * 会社名を設定する<br>
     * @param string $company 会社名<br>
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Eメールアドレスを取得する<br>
     * @return string Eメールアドレス<br>
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Eメールアドレスを設定する<br>
     * @param string $emailAddress Eメールアドレス<br>
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Eメールアドレス分類を取得する<br>
     * @return string Eメールアドレス分類<br>
     */
    public function getEmailAddressType()
    {
        return $this->emailAddressType;
    }

    /**
     * Eメールアドレス分類を設定する<br>
     * @param string $emailAddressType Eメールアドレス分類<br>
     */
    public function setEmailAddressType($emailAddressType)
    {
        $this->emailAddressType = $emailAddressType;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $phoneNumber 電話番号<br>
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * 電話番号分類を取得する<br>
     * @return string 電話番号分類<br>
     */
    public function getPhoneNumberType()
    {
        return $this->phoneNumberType;
    }

    /**
     * 電話番号分類を設定する<br>
     * @param string $phoneNumberType 電話番号分類<br>
     */
    public function setPhoneNumberType($phoneNumberType)
    {
        $this->phoneNumberType = $phoneNumberType;
    }

    /**
     * 住所1を取得する<br>
     * @return string 住所1<br>
     */
    public function getStreetLine()
    {
        return $this->streetLine;
    }

    /**
     * 住所1を設定する<br>
     * @param string $streetLine 住所1<br>
     */
    public function setStreetLine($streetLine)
    {
        $this->streetLine = $streetLine;
    }

    /**
     * 住所2を取得する<br>
     * @return string 住所2<br>
     */
    public function getStreetLine2()
    {
        return $this->streetLine2;
    }

    /**
     * 住所2を設定する<br>
     * @param string $streetLine2 住所2<br>
     */
    public function setStreetLine2($streetLine2)
    {
        $this->streetLine2 = $streetLine2;
    }

    /**
     * 都道府県を取得する<br>
     * @return string 都道府県<br>
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 都道府県を設定する<br>
     * @param string $city 都道府県<br>
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * 郵便番号を取得する<br>
     * @return string 郵便番号<br>
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * 郵便番号を設定する<br>
     * @param string $postal 郵便番号<br>
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    /**
     * 都道府県略号を取得する<br>
     * @return string 都道府県略号<br>
     */
    public function getStateProvinceCode()
    {
        return $this->stateProvinceCode;
    }

    /**
     * 都道府県略号を設定する<br>
     * @param string $stateProvinceCode 都道府県略号<br>
     */
    public function setStateProvinceCode($stateProvinceCode)
    {
        $this->stateProvinceCode = $stateProvinceCode;
    }

    /**
     * 国名コードを取得する<br>
     * @return string 国名コード<br>
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * 国名コードを設定する<br>
     * @param string $countryCode 国名コード<br>
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * 生年月日を取得する<br>
     * @return string 生年月日<br>
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * 生年月日を設定する<br>
     * @param string $birthDate 生年月日<br>
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * 旧姓を取得する<br>
     * @return string 旧姓<br>
     */
    public function getMothersMaidenName()
    {
        return $this->mothersMaidenName;
    }

    /**
     * 旧姓を設定する<br>
     * @param string $mothersMaidenName 旧姓<br>
     */
    public function setMothersMaidenName($mothersMaidenName)
    {
        $this->mothersMaidenName = $mothersMaidenName;
    }


}
