<?php

namespace tgMdk\dto;

/**
 * 会員情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class Account
{

    /**
     * 会員ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 以下の文字も使用できます。<br/>
     * “.”(ドット)、“-”(ハイフン)、“_”(アンダースコア)、“@”(アットマーク) <br/>
     */
    private $accountId;

    /**
     * ワンタイムトークン<br>
     * 半角数字<br/>
     * 最大桁数：13<br/>
     */
    private $onetimeToken;

    /**
     * ワンタイムトークン有効期限<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     */
    private $onetimeTokenExpire;

    /**
     * リクエスト項目<br>
     * 半角英数字<br/>
     * 最大桁数：256<br/>
     * レスポンスに含める項目を記述する。<br/>
     * “-”(ハイフン)、“_”(アンダースコア)、“,”(カンマ)<br/>
     */
    private $transData;

    /**
     * 会員基本情報<br>
     * オブジェクト<br/>
     * 会員基本情報を格納するオブジェクト<br/>
     */
    private $accountBasic;

    /**
     * 連絡先情報<br>
     * オブジェクト配列<br/>
     * 連絡先情報を格納するオブジェクト<br/>
     * <br/>
     */
    private $accountInfo;

    /**
     * カード情報<br>
     * オブジェクト配列<br/>
     */
    private $cardInfo;

    /**
     * 会員課金情報<br>
     * オブジェクト配列<br/>
     */
    private $recurringCharge;

    /**
     * 銀行口座情報<br>
     * オブジェクト<br/>
     */
    private $bankAccountInfo;


    /**
     * 会員IDを設定する<br>
     * @param string $accountId 会員ID<br>
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * 会員IDを取得する<br>
     * @return string 会員ID<br>
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * ワンタイムトークンを設定する<br>
     * @param string $onetimeToken ワンタイムトークン<br>
     */
    public function setOnetimeToken($onetimeToken)
    {
        $this->onetimeToken = $onetimeToken;
    }

    /**
     * ワンタイムトークンを取得する<br>
     * @return string ワンタイムトークン<br>
     */
    public function getOnetimeToken()
    {
        return $this->onetimeToken;
    }

    /**
     * ワンタイムトークン有効期限を設定する<br>
     * @param string $onetimeTokenExpire ワンタイムトークン有効期限<br>
     */
    public function setOnetimeTokenExpire($onetimeTokenExpire)
    {
        $this->onetimeTokenExpire = $onetimeTokenExpire;
    }

    /**
     * ワンタイムトークン有効期限を取得する<br>
     * @return string ワンタイムトークン有効期限<br>
     */
    public function getOnetimeTokenExpire()
    {
        return $this->onetimeTokenExpire;
    }

    /**
     * リクエスト項目を設定する<br>
     * @param string $transData リクエスト項目<br>
     */
    public function setTransData($transData)
    {
        $this->transData = $transData;
    }

    /**
     * リクエスト項目を取得する<br>
     * @return string リクエスト項目<br>
     */
    public function getTransData()
    {
        return $this->transData;
    }

    /**
     * 会員基本情報を設定する<br>
     * @param AccountBasic $accountBasic 会員基本情報<br>
     */
    public function setAccountBasic($accountBasic)
    {
        $this->accountBasic = $accountBasic;
    }

    /**
     * 会員基本情報を取得する<br>
     * @return AccountBasic 会員基本情報<br>
     */
    public function getAccountBasic()
    {
        return $this->accountBasic;
    }

    /**
     * 連絡先情報を設定する<br>
     * @param AccountInfo[] $accountInfo 連絡先情報<br>
     */
    public function setAccountInfo($accountInfo)
    {
        $this->accountInfo = $accountInfo;
    }

    /**
     * 連絡先情報を取得する<br>
     * @return AccountInfo[] 連絡先情報<br>
     */
    public function getAccountInfo()
    {
        return $this->accountInfo;
    }

    /**
     * カード情報を設定する<br>
     * @param CardInfo[] $cardInfo カード情報<br>
     */
    public function setCardInfo($cardInfo)
    {
        $this->cardInfo = $cardInfo;
    }

    /**
     * カード情報を取得する<br>
     * @return CardInfo[] カード情報<br>
     */
    public function getCardInfo()
    {
        return $this->cardInfo;
    }

    /**
     * 会員課金情報を設定する<br>
     * @param RecurringCharge[] $recurringCharge 会員課金情報<br>
     */
    public function setRecurringCharge($recurringCharge)
    {
        $this->recurringCharge = $recurringCharge;
    }

    /**
     * 会員課金情報を取得する<br>
     * @return RecurringCharge[] 会員課金情報<br>
     */
    public function getRecurringCharge()
    {
        return $this->recurringCharge;
    }

    /**
     * 銀行口座情報を設定する<br>
     * @param BankAccountInfo $bankAccountInfo 銀行口座情報<br>
     */
    public function setBankAccountInfo($bankAccountInfo)
    {
        $this->bankAccountInfo = $bankAccountInfo;
    }

    /**
     * 銀行口座情報を取得する<br>
     * @return BankAccountInfo 銀行口座情報<br>
     */
    public function getBankAccountInfo()
    {
        return $this->bankAccountInfo;
    }

}
