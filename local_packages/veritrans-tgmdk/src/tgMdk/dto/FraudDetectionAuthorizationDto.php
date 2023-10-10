<?php

namespace tgMdk\dto;

/**
 * 不正検知カード認証情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionAuthorizationDto
{

    /**
     * 決済処理結果<br>
     * 最大桁数：5<br/>
     */
    private $declined;

    /**
     * 承認コード<br>
     * 最大桁数：1<br/>
     */
    private $approvalCode;

    /**
     * 住所検証システム(住所)判定結果<br>
     * 最大桁数：1<br/>
     */
    private $avsAddr;

    /**
     * 住所検証システム(郵便番号)判定結果<br>
     * 最大桁数：1<br/>
     */
    private $avsZip;

    /**
     * cvv2判定結果<br>
     * 最大桁数：1<br/>
     */
    private $cvv2;

    /**
     * 3DS判定結果<br>
     * 最大桁数：1<br/>
     */
    private $ddds;

    /**
     * 3DSECI<br>
     * 最大桁数：1<br/>
     */
    private $eci;

    /**
     * 3DSトランザクションID<br>
     * 最大桁数：28<br/>
     */
    private $xid;

    /**
     * アクワイアラ<br>
     * 最大桁数：255<br/>
     */
    private $bank;

    /**
     * 支払タイプ<br>
     * 最大桁数：255<br/>
     */
    private $type;

    /**
     * Amex強化認証-電話番号<br>
     * 最大桁数：1<br/>
     */
    private $enhAuthPhone;

    /**
     * Amex強化認証-名前<br>
     * 最大桁数：1<br/>
     */
    private $enhAuthName;

    /**
     * Amex強化認証-Eメール<br>
     * 最大桁数：1<br/>
     */
    private $enhAuthEmail;

    /**
     * PayPal決済サービス 住所確認<br>
     * 最大桁数：1<br/>
     */
    private $psAddr;

    /**
     * PayPal決済サービス 支払人検証<br>
     * 最大桁数：1<br/>
     */
    private $psPayer;


    /**
     * 決済処理結果を取得する<br>
     * @return string 決済処理結果<br>
     */
    public function getDeclined()
    {
        return $this->declined;
    }

    /**
     * 決済処理結果を設定する<br>
     * @param string $declined 決済処理結果<br>
     */
    public function setDeclined($declined)
    {
        $this->declined = $declined;
    }

    /**
     * 承認コードを取得する<br>
     * @return string 承認コード<br>
     */
    public function getApprovalCode()
    {
        return $this->approvalCode;
    }

    /**
     * 承認コードを設定する<br>
     * @param string $approvalCode 承認コード<br>
     */
    public function setApprovalCode($approvalCode)
    {
        $this->approvalCode = $approvalCode;
    }

    /**
     * 住所検証システム(住所)判定結果を取得する<br>
     * @return string 住所検証システム(住所)判定結果<br>
     */
    public function getAvsAddr()
    {
        return $this->avsAddr;
    }

    /**
     * 住所検証システム(住所)判定結果を設定する<br>
     * @param string $avsAddr 住所検証システム(住所)判定結果<br>
     */
    public function setAvsAddr($avsAddr)
    {
        $this->avsAddr = $avsAddr;
    }

    /**
     * 住所検証システム(郵便番号)判定結果を取得する<br>
     * @return string 住所検証システム(郵便番号)判定結果<br>
     */
    public function getAvsZip()
    {
        return $this->avsZip;
    }

    /**
     * 住所検証システム(郵便番号)判定結果を設定する<br>
     * @param string $avsZip 住所検証システム(郵便番号)判定結果<br>
     */
    public function setAvsZip($avsZip)
    {
        $this->avsZip = $avsZip;
    }

    /**
     * cvv2判定結果を取得する<br>
     * @return string cvv2判定結果<br>
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * cvv2判定結果を設定する<br>
     * @param string $cvv2 cvv2判定結果<br>
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
    }

    /**
     * 3DS判定結果を取得する<br>
     * @return string 3DS判定結果<br>
     */
    public function getDdds()
    {
        return $this->ddds;
    }

    /**
     * 3DS判定結果を設定する<br>
     * @param string $ddds 3DS判定結果<br>
     */
    public function setDdds($ddds)
    {
        $this->ddds = $ddds;
    }

    /**
     * 3DSECIを取得する<br>
     * @return string 3DSECI<br>
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * 3DSECIを設定する<br>
     * @param string $eci 3DSECI<br>
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
    }

    /**
     * 3DSトランザクションIDを取得する<br>
     * @return string 3DSトランザクションID<br>
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * 3DSトランザクションIDを設定する<br>
     * @param string $xid 3DSトランザクションID<br>
     */
    public function setXid($xid)
    {
        $this->xid = $xid;
    }

    /**
     * アクワイアラを取得する<br>
     * @return string アクワイアラ<br>
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * アクワイアラを設定する<br>
     * @param string $bank アクワイアラ<br>
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * 支払タイプを取得する<br>
     * @return string 支払タイプ<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 支払タイプを設定する<br>
     * @param string $type 支払タイプ<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Amex強化認証-電話番号を取得する<br>
     * @return string Amex強化認証-電話番号<br>
     */
    public function getEnhAuthPhone()
    {
        return $this->enhAuthPhone;
    }

    /**
     * Amex強化認証-電話番号を設定する<br>
     * @param string $enhAuthPhone Amex強化認証-電話番号<br>
     */
    public function setEnhAuthPhone($enhAuthPhone)
    {
        $this->enhAuthPhone = $enhAuthPhone;
    }

    /**
     * Amex強化認証-名前を取得する<br>
     * @return string Amex強化認証-名前<br>
     */
    public function getEnhAuthName()
    {
        return $this->enhAuthName;
    }

    /**
     * Amex強化認証-名前を設定する<br>
     * @param string $enhAuthName Amex強化認証-名前<br>
     */
    public function setEnhAuthName($enhAuthName)
    {
        $this->enhAuthName = $enhAuthName;
    }

    /**
     * Amex強化認証-Eメールを取得する<br>
     * @return string Amex強化認証-Eメール<br>
     */
    public function getEnhAuthEmail()
    {
        return $this->enhAuthEmail;
    }

    /**
     * Amex強化認証-Eメールを設定する<br>
     * @param string $enhAuthEmail Amex強化認証-Eメール<br>
     */
    public function setEnhAuthEmail($enhAuthEmail)
    {
        $this->enhAuthEmail = $enhAuthEmail;
    }

    /**
     * PayPal決済サービス 住所確認を取得する<br>
     * @return string PayPal決済サービス 住所確認<br>
     */
    public function getPsAddr()
    {
        return $this->psAddr;
    }

    /**
     * PayPal決済サービス 住所確認を設定する<br>
     * @param string $psAddr PayPal決済サービス 住所確認<br>
     */
    public function setPsAddr($psAddr)
    {
        $this->psAddr = $psAddr;
    }

    /**
     * PayPal決済サービス 支払人検証を取得する<br>
     * @return string PayPal決済サービス 支払人検証<br>
     */
    public function getPsPayer()
    {
        return $this->psPayer;
    }

    /**
     * PayPal決済サービス 支払人検証を設定する<br>
     * @param string $psPayer PayPal決済サービス 支払人検証<br>
     */
    public function setPsPayer($psPayer)
    {
        $this->psPayer = $psPayer;
    }


}
