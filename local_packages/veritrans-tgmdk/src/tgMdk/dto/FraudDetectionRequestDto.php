<?php

namespace tgMdk\dto;

/**
 * 不正検知評価要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionRequestDto
{

    /**
     * 組織コード<br>
     * 最大桁数：25<br/>
     */
    private $orgCode;

    /**
     * モデルコード<br>
     * 最大桁数：25<br/>
     */
    private $modelCode;

    /**
     * マーチャントID<br>
     * 最大桁数：255<br/>
     */
    private $merchantId;

    /**
     * セクターID<br>
     * 最大桁数：255<br/>
     */
    private $bruceSector;

    /**
     * Aegis予備フィールド1<br>
     * 最大桁数：255<br/>
     */
    private $customField1;

    /**
     * Aegis予備フィールド2<br>
     * 最大桁数：255<br/>
     */
    private $customField2;

    /**
     * Aegis予備フィールド3<br>
     * 最大桁数：255<br/>
     */
    private $customField3;

    /**
     * ReD予備フィールド1<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData1;

    /**
     * ReD予備フィールド2<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData2;

    /**
     * ReD予備フィールド3<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData3;

    /**
     * ReD予備フィールド4<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData4;

    /**
     * ReD予備フィールド5<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData5;

    /**
     * ReD予備フィールド6<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData6;

    /**
     * ReD予備フィールド7<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData7;

    /**
     * ReD予備フィールド8<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData8;

    /**
     * ReD予備フィールド9<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData9;

    /**
     * ReD予備フィールド10<br>
     * 最大桁数：256<br/>
     */
    private $ebtUserData10;

    /**
     * ReD予備フィールド11<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData11;

    /**
     * ReD予備フィールド12<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData12;

    /**
     * ReD予備フィールド13<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData13;

    /**
     * ReD予備フィールド14<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData14;

    /**
     * ReD予備フィールド15<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData15;

    /**
     * ReD予備フィールド16<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData16;

    /**
     * ReD予備フィールド17<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData17;

    /**
     * ReD予備フィールド18<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData18;

    /**
     * ReD予備フィールド19<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData19;

    /**
     * ReD予備フィールド20<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData20;

    /**
     * ReD予備フィールド21<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData21;

    /**
     * ReD予備フィールド22<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData22;

    /**
     * ReD予備フィールド23<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData23;

    /**
     * ReD予備フィールド24<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData24;

    /**
     * ReD予備フィールド25<br>
     * 最大桁数：30<br/>
     */
    private $ebtUserData25;

    /**
     * Transaction Action<br>
     * 最大桁数：2<br/>
     */
    private $actCd;

    /**
     * ReD1 Division<br>
     * 最大桁数：15<br/>
     */
    private $divNum;

    /**
     * SSL Key ID<br>
     * 最大桁数：6<br/>
     */
    private $SKeyId;

    /**
     * ReD Shield Service Code<br>
     * 最大桁数：1<br/>
     */
    private $ebtService;

    /**
     * ReD Shield Division Number<br>
     * 最大桁数：12<br/>
     */
    private $ebtName;

    /**
     * System/User ID<br>
     * 最大桁数：16<br/>
     */
    private $userId;

    /**
     * ID文字列<br>
     * 最大桁数：50<br/>
     */
    private $id;

    /**
     * 取引発生日時<br>
     * 最大桁数：24<br/>
     */
    private $time;

    /**
     * 申込元<br>
     * 最大桁数：20<br/>
     */
    private $source;

    /**
     * デバイス<br>
     * FraudDetectionDeviceDto<br/>
     * デバイスオブジェクト<br/>
     */
    private $device;

    /**
     * 外部リスク評価結果<br>
     * FraudDetectionExternalRiskResultDtoの配列<br/>
     * 外部リスク評価結果オブジェクト<br/>
     */
    private $externalRiskResults;

    /**
     * 連絡先<br>
     * FraudDetectionContactDtoの配列<br/>
     * 連絡先オブジェクト<br/>
     * userAccount、transaction、shipmentからの参照があれば設定してください。<br/>
     */
    private $contacts;

    /**
     * ユーザアカウント<br>
     * FraudDetectionUserAccountDto<br/>
     * ユーザアカウントオブジェクト<br/>
     */
    private $userAccount;

    /**
     * セッション情報<br>
     * FraudDetectionSessionDto<br/>
     * セッション情報オブジェクト<br/>
     */
    private $session;

    /**
     * 合計金額<br>
     * FraudDetectionTotalDto<br/>
     * 合計金額オブジェクト<br/>
     */
    private $total;

    /**
     * 取引支払い<br>
     * FraudDetectionTransactionDto<br/>
     * 取引支払いオブジェクト<br/>
     */
    private $transaction;

    /**
     * 注文情報<br>
     * FraudDetectionOrderDto<br/>
     * 注文情報オブジェクト<br/>
     */
    private $order;


    /**
     * 組織コードを取得する<br>
     * @return string 組織コード<br>
     */
    public function getOrgCode()
    {
        return $this->orgCode;
    }

    /**
     * 組織コードを設定する<br>
     * @param string $orgCode 組織コード<br>
     */
    public function setOrgCode($orgCode)
    {
        $this->orgCode = $orgCode;
    }

    /**
     * モデルコードを取得する<br>
     * @return string モデルコード<br>
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }

    /**
     * モデルコードを設定する<br>
     * @param string $modelCode モデルコード<br>
     */
    public function setModelCode($modelCode)
    {
        $this->modelCode = $modelCode;
    }

    /**
     * マーチャントIDを取得する<br>
     * @return string マーチャントID<br>
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * マーチャントIDを設定する<br>
     * @param string $merchantId マーチャントID<br>
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * セクターIDを取得する<br>
     * @return string セクターID<br>
     */
    public function getBruceSector()
    {
        return $this->bruceSector;
    }

    /**
     * セクターIDを設定する<br>
     * @param string $bruceSector セクターID<br>
     */
    public function setBruceSector($bruceSector)
    {
        $this->bruceSector = $bruceSector;
    }

    /**
     * Aegis予備フィールド1を取得する<br>
     * @return string Aegis予備フィールド1<br>
     */
    public function getCustomField1()
    {
        return $this->customField1;
    }

    /**
     * Aegis予備フィールド1を設定する<br>
     * @param string $customField1 Aegis予備フィールド1<br>
     */
    public function setCustomField1($customField1)
    {
        $this->customField1 = $customField1;
    }

    /**
     * Aegis予備フィールド2を取得する<br>
     * @return string Aegis予備フィールド2<br>
     */
    public function getCustomField2()
    {
        return $this->customField2;
    }

    /**
     * Aegis予備フィールド2を設定する<br>
     * @param string $customField2 Aegis予備フィールド2<br>
     */
    public function setCustomField2($customField2)
    {
        $this->customField2 = $customField2;
    }

    /**
     * Aegis予備フィールド3を取得する<br>
     * @return string Aegis予備フィールド3<br>
     */
    public function getCustomField3()
    {
        return $this->customField3;
    }

    /**
     * Aegis予備フィールド3を設定する<br>
     * @param string $customField3 Aegis予備フィールド3<br>
     */
    public function setCustomField3($customField3)
    {
        $this->customField3 = $customField3;
    }

    /**
     * ReD予備フィールド1を取得する<br>
     * @return string ReD予備フィールド1<br>
     */
    public function getEbtUserData1()
    {
        return $this->ebtUserData1;
    }

    /**
     * ReD予備フィールド1を設定する<br>
     * @param string $ebtUserData1 ReD予備フィールド1<br>
     */
    public function setEbtUserData1($ebtUserData1)
    {
        $this->ebtUserData1 = $ebtUserData1;
    }

    /**
     * ReD予備フィールド2を取得する<br>
     * @return string ReD予備フィールド2<br>
     */
    public function getEbtUserData2()
    {
        return $this->ebtUserData2;
    }

    /**
     * ReD予備フィールド2を設定する<br>
     * @param string $ebtUserData2 ReD予備フィールド2<br>
     */
    public function setEbtUserData2($ebtUserData2)
    {
        $this->ebtUserData2 = $ebtUserData2;
    }

    /**
     * ReD予備フィールド3を取得する<br>
     * @return string ReD予備フィールド3<br>
     */
    public function getEbtUserData3()
    {
        return $this->ebtUserData3;
    }

    /**
     * ReD予備フィールド3を設定する<br>
     * @param string $ebtUserData3 ReD予備フィールド3<br>
     */
    public function setEbtUserData3($ebtUserData3)
    {
        $this->ebtUserData3 = $ebtUserData3;
    }

    /**
     * ReD予備フィールド4を取得する<br>
     * @return string ReD予備フィールド4<br>
     */
    public function getEbtUserData4()
    {
        return $this->ebtUserData4;
    }

    /**
     * ReD予備フィールド4を設定する<br>
     * @param string $ebtUserData4 ReD予備フィールド4<br>
     */
    public function setEbtUserData4($ebtUserData4)
    {
        $this->ebtUserData4 = $ebtUserData4;
    }

    /**
     * ReD予備フィールド5を取得する<br>
     * @return string ReD予備フィールド5<br>
     */
    public function getEbtUserData5()
    {
        return $this->ebtUserData5;
    }

    /**
     * ReD予備フィールド5を設定する<br>
     * @param string $ebtUserData5 ReD予備フィールド5<br>
     */
    public function setEbtUserData5($ebtUserData5)
    {
        $this->ebtUserData5 = $ebtUserData5;
    }

    /**
     * ReD予備フィールド6を取得する<br>
     * @return string ReD予備フィールド6<br>
     */
    public function getEbtUserData6()
    {
        return $this->ebtUserData6;
    }

    /**
     * ReD予備フィールド6を設定する<br>
     * @param string $ebtUserData6 ReD予備フィールド6<br>
     */
    public function setEbtUserData6($ebtUserData6)
    {
        $this->ebtUserData6 = $ebtUserData6;
    }

    /**
     * ReD予備フィールド7を取得する<br>
     * @return string ReD予備フィールド7<br>
     */
    public function getEbtUserData7()
    {
        return $this->ebtUserData7;
    }

    /**
     * ReD予備フィールド7を設定する<br>
     * @param string $ebtUserData7 ReD予備フィールド7<br>
     */
    public function setEbtUserData7($ebtUserData7)
    {
        $this->ebtUserData7 = $ebtUserData7;
    }

    /**
     * ReD予備フィールド8を取得する<br>
     * @return string ReD予備フィールド8<br>
     */
    public function getEbtUserData8()
    {
        return $this->ebtUserData8;
    }

    /**
     * ReD予備フィールド8を設定する<br>
     * @param string $ebtUserData8 ReD予備フィールド8<br>
     */
    public function setEbtUserData8($ebtUserData8)
    {
        $this->ebtUserData8 = $ebtUserData8;
    }

    /**
     * ReD予備フィールド9を取得する<br>
     * @return string ReD予備フィールド9<br>
     */
    public function getEbtUserData9()
    {
        return $this->ebtUserData9;
    }

    /**
     * ReD予備フィールド9を設定する<br>
     * @param string $ebtUserData9 ReD予備フィールド9<br>
     */
    public function setEbtUserData9($ebtUserData9)
    {
        $this->ebtUserData9 = $ebtUserData9;
    }

    /**
     * ReD予備フィールド10を取得する<br>
     * @return string ReD予備フィールド10<br>
     */
    public function getEbtUserData10()
    {
        return $this->ebtUserData10;
    }

    /**
     * ReD予備フィールド10を設定する<br>
     * @param string $ebtUserData10 ReD予備フィールド10<br>
     */
    public function setEbtUserData10($ebtUserData10)
    {
        $this->ebtUserData10 = $ebtUserData10;
    }

    /**
     * ReD予備フィールド11を取得する<br>
     * @return string ReD予備フィールド11<br>
     */
    public function getEbtUserData11()
    {
        return $this->ebtUserData11;
    }

    /**
     * ReD予備フィールド11を設定する<br>
     * @param string $ebtUserData11 ReD予備フィールド11<br>
     */
    public function setEbtUserData11($ebtUserData11)
    {
        $this->ebtUserData11 = $ebtUserData11;
    }

    /**
     * ReD予備フィールド12を取得する<br>
     * @return string ReD予備フィールド12<br>
     */
    public function getEbtUserData12()
    {
        return $this->ebtUserData12;
    }

    /**
     * ReD予備フィールド12を設定する<br>
     * @param string $ebtUserData12 ReD予備フィールド12<br>
     */
    public function setEbtUserData12($ebtUserData12)
    {
        $this->ebtUserData12 = $ebtUserData12;
    }

    /**
     * ReD予備フィールド13を取得する<br>
     * @return string ReD予備フィールド13<br>
     */
    public function getEbtUserData13()
    {
        return $this->ebtUserData13;
    }

    /**
     * ReD予備フィールド13を設定する<br>
     * @param string $ebtUserData13 ReD予備フィールド13<br>
     */
    public function setEbtUserData13($ebtUserData13)
    {
        $this->ebtUserData13 = $ebtUserData13;
    }

    /**
     * ReD予備フィールド14を取得する<br>
     * @return string ReD予備フィールド14<br>
     */
    public function getEbtUserData14()
    {
        return $this->ebtUserData14;
    }

    /**
     * ReD予備フィールド14を設定する<br>
     * @param string $ebtUserData14 ReD予備フィールド14<br>
     */
    public function setEbtUserData14($ebtUserData14)
    {
        $this->ebtUserData14 = $ebtUserData14;
    }

    /**
     * ReD予備フィールド15を取得する<br>
     * @return string ReD予備フィールド15<br>
     */
    public function getEbtUserData15()
    {
        return $this->ebtUserData15;
    }

    /**
     * ReD予備フィールド15を設定する<br>
     * @param string $ebtUserData15 ReD予備フィールド15<br>
     */
    public function setEbtUserData15($ebtUserData15)
    {
        $this->ebtUserData15 = $ebtUserData15;
    }

    /**
     * ReD予備フィールド16を取得する<br>
     * @return string ReD予備フィールド16<br>
     */
    public function getEbtUserData16()
    {
        return $this->ebtUserData16;
    }

    /**
     * ReD予備フィールド16を設定する<br>
     * @param string $ebtUserData16 ReD予備フィールド16<br>
     */
    public function setEbtUserData16($ebtUserData16)
    {
        $this->ebtUserData16 = $ebtUserData16;
    }

    /**
     * ReD予備フィールド17を取得する<br>
     * @return string ReD予備フィールド17<br>
     */
    public function getEbtUserData17()
    {
        return $this->ebtUserData17;
    }

    /**
     * ReD予備フィールド17を設定する<br>
     * @param string $ebtUserData17 ReD予備フィールド17<br>
     */
    public function setEbtUserData17($ebtUserData17)
    {
        $this->ebtUserData17 = $ebtUserData17;
    }

    /**
     * ReD予備フィールド18を取得する<br>
     * @return string ReD予備フィールド18<br>
     */
    public function getEbtUserData18()
    {
        return $this->ebtUserData18;
    }

    /**
     * ReD予備フィールド18を設定する<br>
     * @param string $ebtUserData18 ReD予備フィールド18<br>
     */
    public function setEbtUserData18($ebtUserData18)
    {
        $this->ebtUserData18 = $ebtUserData18;
    }

    /**
     * ReD予備フィールド19を取得する<br>
     * @return string ReD予備フィールド19<br>
     */
    public function getEbtUserData19()
    {
        return $this->ebtUserData19;
    }

    /**
     * ReD予備フィールド19を設定する<br>
     * @param string $ebtUserData19 ReD予備フィールド19<br>
     */
    public function setEbtUserData19($ebtUserData19)
    {
        $this->ebtUserData19 = $ebtUserData19;
    }

    /**
     * ReD予備フィールド20を取得する<br>
     * @return string ReD予備フィールド20<br>
     */
    public function getEbtUserData20()
    {
        return $this->ebtUserData20;
    }

    /**
     * ReD予備フィールド20を設定する<br>
     * @param string $ebtUserData20 ReD予備フィールド20<br>
     */
    public function setEbtUserData20($ebtUserData20)
    {
        $this->ebtUserData20 = $ebtUserData20;
    }

    /**
     * ReD予備フィールド21を取得する<br>
     * @return string ReD予備フィールド21<br>
     */
    public function getEbtUserData21()
    {
        return $this->ebtUserData21;
    }

    /**
     * ReD予備フィールド21を設定する<br>
     * @param string $ebtUserData21 ReD予備フィールド21<br>
     */
    public function setEbtUserData21($ebtUserData21)
    {
        $this->ebtUserData21 = $ebtUserData21;
    }

    /**
     * ReD予備フィールド22を取得する<br>
     * @return string ReD予備フィールド22<br>
     */
    public function getEbtUserData22()
    {
        return $this->ebtUserData22;
    }

    /**
     * ReD予備フィールド22を設定する<br>
     * @param string $ebtUserData22 ReD予備フィールド22<br>
     */
    public function setEbtUserData22($ebtUserData22)
    {
        $this->ebtUserData22 = $ebtUserData22;
    }

    /**
     * ReD予備フィールド23を取得する<br>
     * @return string ReD予備フィールド23<br>
     */
    public function getEbtUserData23()
    {
        return $this->ebtUserData23;
    }

    /**
     * ReD予備フィールド23を設定する<br>
     * @param string $ebtUserData23 ReD予備フィールド23<br>
     */
    public function setEbtUserData23($ebtUserData23)
    {
        $this->ebtUserData23 = $ebtUserData23;
    }

    /**
     * ReD予備フィールド24を取得する<br>
     * @return string ReD予備フィールド24<br>
     */
    public function getEbtUserData24()
    {
        return $this->ebtUserData24;
    }

    /**
     * ReD予備フィールド24を設定する<br>
     * @param string $ebtUserData24 ReD予備フィールド24<br>
     */
    public function setEbtUserData24($ebtUserData24)
    {
        $this->ebtUserData24 = $ebtUserData24;
    }

    /**
     * ReD予備フィールド25を取得する<br>
     * @return string ReD予備フィールド25<br>
     */
    public function getEbtUserData25()
    {
        return $this->ebtUserData25;
    }

    /**
     * ReD予備フィールド25を設定する<br>
     * @param string $ebtUserData25 ReD予備フィールド25<br>
     */
    public function setEbtUserData25($ebtUserData25)
    {
        $this->ebtUserData25 = $ebtUserData25;
    }

    /**
     * Transaction Actionを取得する<br>
     * @return string Transaction Action<br>
     */
    public function getActCd()
    {
        return $this->actCd;
    }

    /**
     * Transaction Actionを設定する<br>
     * @param string $actCd Transaction Action<br>
     */
    public function setActCd($actCd)
    {
        $this->actCd = $actCd;
    }

    /**
     * ReD1 Divisionを取得する<br>
     * @return string ReD1 Division<br>
     */
    public function getDivNum()
    {
        return $this->divNum;
    }

    /**
     * ReD1 Divisionを設定する<br>
     * @param string $divNum ReD1 Division<br>
     */
    public function setDivNum($divNum)
    {
        $this->divNum = $divNum;
    }

    /**
     * SSL Key IDを取得する<br>
     * @return string SSL Key ID<br>
     */
    public function getSKeyId()
    {
        return $this->SKeyId;
    }

    /**
     * SSL Key IDを設定する<br>
     * @param string $SKeyId SSL Key ID<br>
     */
    public function setSKeyId($SKeyId)
    {
        $this->SKeyId = $SKeyId;
    }

    /**
     * ReD Shield Service Codeを取得する<br>
     * @return string ReD Shield Service Code<br>
     */
    public function getEbtService()
    {
        return $this->ebtService;
    }

    /**
     * ReD Shield Service Codeを設定する<br>
     * @param string $ebtService ReD Shield Service Code<br>
     */
    public function setEbtService($ebtService)
    {
        $this->ebtService = $ebtService;
    }

    /**
     * ReD Shield Division Numberを取得する<br>
     * @return string ReD Shield Division Number<br>
     */
    public function getEbtName()
    {
        return $this->ebtName;
    }

    /**
     * ReD Shield Division Numberを設定する<br>
     * @param string $ebtName ReD Shield Division Number<br>
     */
    public function setEbtName($ebtName)
    {
        $this->ebtName = $ebtName;
    }

    /**
     * System/User IDを取得する<br>
     * @return string System/User ID<br>
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * System/User IDを設定する<br>
     * @param string $userId System/User ID<br>
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * ID文字列を取得する<br>
     * @return string ID文字列<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID文字列を設定する<br>
     * @param string $id ID文字列<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 取引発生日時を取得する<br>
     * @return string 取引発生日時<br>
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * 取引発生日時を設定する<br>
     * @param string $time 取引発生日時<br>
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * 申込元を取得する<br>
     * @return string 申込元<br>
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 申込元を設定する<br>
     * @param string $source 申込元<br>
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * デバイスを取得する<br>
     * @return FraudDetectionDeviceDto デバイス<br>
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * デバイスを設定する<br>
     * @param FraudDetectionDeviceDto $device デバイス<br>
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * 外部リスク評価結果を取得する<br>
     * @return FraudDetectionExternalRiskResultDto[] 外部リスク評価結果<br>
     */
    public function getExternalRiskResults()
    {
        return $this->externalRiskResults;
    }

    /**
     * 外部リスク評価結果を設定する<br>
     * @param FraudDetectionExternalRiskResultDto[] $externalRiskResults 外部リスク評価結果<br>
     */
    public function setExternalRiskResults($externalRiskResults)
    {
        $this->externalRiskResults = $externalRiskResults;
    }

    /**
     * 連絡先を取得する<br>
     * @return FraudDetectionContactDto[] 連絡先<br>
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * 連絡先を設定する<br>
     * @param FraudDetectionContactDto[] $contacts 連絡先<br>
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * ユーザアカウントを取得する<br>
     * @return FraudDetectionUserAccountDto ユーザアカウント<br>
     */
    public function getUserAccount()
    {
        return $this->userAccount;
    }

    /**
     * ユーザアカウントを設定する<br>
     * @param FraudDetectionUserAccountDto $userAccount ユーザアカウント<br>
     */
    public function setUserAccount($userAccount)
    {
        $this->userAccount = $userAccount;
    }

    /**
     * セッション情報を取得する<br>
     * @return FraudDetectionSessionDto セッション情報<br>
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * セッション情報を設定する<br>
     * @param FraudDetectionSessionDto $session セッション情報<br>
     */
    public function setSession($session)
    {
        $this->session = $session;
    }

    /**
     * 合計金額を取得する<br>
     * @return FraudDetectionTotalDto 合計金額<br>
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 合計金額を設定する<br>
     * @param FraudDetectionTotalDto $total 合計金額<br>
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * 取引支払いを取得する<br>
     * @return FraudDetectionTransactionDto 取引支払い<br>
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * 取引支払いを設定する<br>
     * @param FraudDetectionTransactionDto $transaction 取引支払い<br>
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * 注文情報を取得する<br>
     * @return FraudDetectionOrderDto 注文情報<br>
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * 注文情報を設定する<br>
     * @param FraudDetectionOrderDto $order 注文情報<br>
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }


}
