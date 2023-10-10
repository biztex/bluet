<?php

namespace tgMdk\dto;

/**
 * 会員情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class AccountParam
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
     * ワンタイムトークン種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     */
    private $onetimeTokenType;

    /**
     * 元会員ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 以下の文字も使用できます。<br/>
     * “.”(ドット)、“-”(ハイフン)、“_”(アンダースコア)、“@”(アットマーク) <br/>
     */
    private $originalAccountId;

    /**
     * PayNowID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * グローバル情報を元に会員情報を作成する場合に指定する。<br/>
     * 以下の文字も使用できます。<br/>
     * “.”(ドット)、“-”(ハイフン)、“_”(アンダースコア)、“@”(アットマーク) <br/>
     */
    private $payNowId;

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
     * 会員情報を格納するオブジェクト<br/>
     */
    private $accountBasicParam;

    /**
     * カード情報<br>
     * オブジェクト<br/>
     */
    private $cardParam;

    /**
     * 会員課金情報<br>
     * オブジェクト<br/>
     */
    private $recurringChargeParam;

    /**
     * 銀行口座情報<br>
     * オブジェクト<br/>
     */
    private $bankAccountParam;


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
     * ワンタイムトークン種別を設定する<br>
     * @param string $onetimeTokenType ワンタイムトークン種別<br>
     */
    public function setOnetimeTokenType($onetimeTokenType)
    {
        $this->onetimeTokenType = $onetimeTokenType;
    }

    /**
     * ワンタイムトークン種別を取得する<br>
     * @return string ワンタイムトークン種別<br>
     */
    public function getOnetimeTokenType()
    {
        return $this->onetimeTokenType;
    }

    /**
     * 元会員IDを設定する<br>
     * @param string $originalAccountId 元会員ID<br>
     */
    public function setOriginalAccountId($originalAccountId)
    {
        $this->originalAccountId = $originalAccountId;
    }

    /**
     * 元会員IDを取得する<br>
     * @return string 元会員ID<br>
     */
    public function getOriginalAccountId()
    {
        return $this->originalAccountId;
    }

    /**
     * PayNowIDを設定する<br>
     * @param string $payNowId PayNowID<br>
     */
    public function setPayNowId($payNowId)
    {
        $this->payNowId = $payNowId;
    }

    /**
     * PayNowIDを取得する<br>
     * @return string PayNowID<br>
     */
    public function getPayNowId()
    {
        return $this->payNowId;
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
     * @param AccountBasicParam $accountBasicParam 会員基本情報
     */
    public function setAccountBasicParam($accountBasicParam)
    {
        $this->accountBasicParam = $accountBasicParam;
    }

    /**
     * 会員基本情報を取得する<br>
     * @return AccountBasicParam 会員基本情報<br>
     */
    public function getAccountBasicParam()
    {
        return $this->accountBasicParam;
    }

    /**
     * カード情報を設定する<br>
     * @param CardParam $cardParam カード情報<br>
     */
    public function setCardParam($cardParam)
    {
        $this->cardParam = $cardParam;
    }

    /**
     * カード情報を取得する<br>
     * @return CardParam カード情報<br>
     */
    public function getCardParam()
    {
        return $this->cardParam;
    }

    /**
     * 会員課金情報を設定する<br>
     * @param RecurringChargeParam $recurringChargeParam 会員課金情報<br>
     */
    public function setRecurringChargeParam($recurringChargeParam)
    {
        $this->recurringChargeParam = $recurringChargeParam;
    }

    /**
     * 会員課金情報を取得する<br>
     * @return RecurringChargeParam 会員課金情報<br>
     */
    public function getRecurringChargeParam()
    {
        return $this->recurringChargeParam;
    }

    /**
     * 銀行口座情報を設定する<br>
     * @param BankAccountParam $bankAccountParam 銀行口座情報<br>
     */
    public function setBankAccountParam($bankAccountParam)
    {
        $this->bankAccountParam = $bankAccountParam;
    }

    /**
     * 銀行口座情報を取得する<br>
     * @return BankAccountParam 銀行口座情報<br>
     */
    public function getBankAccountParam()
    {
        return $this->bankAccountParam;
    }


}
