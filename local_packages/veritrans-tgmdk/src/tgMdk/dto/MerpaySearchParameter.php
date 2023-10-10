<?php

namespace tgMdk\dto;

/**
 * 検索条件:merpay検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MerpaySearchParameter
{

    /**
     * merpayオーダーID<br>
     */
    private $merpayProcessingId;

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * 詳細コマンドタイプ名<br>
     */
    private $detailCommandType;

    /**
     * merpayサービスタイプ<br>
     */
    private $merpayServiceType;

    /**
     * 課金種別<br>
     */
    private $accountingType;

    /**
     * 問合せ番号<br>
     */
    private $inquiryCode;

    /**
     * 元取引ID<br>
     */
    private $originalOrderId;

    /**
     * 承諾時決済タイプ<br>
     */
    private $consentAuthType;

    /**
     * merpayオーダーIDを取得する<br>
     *
     * @return string merpayオーダーID<br>
     */
    public function getMerpayProcessingId()
    {
        return $this->merpayProcessingId;
    }

    /**
     * merpayオーダーIDを設定する<br>
     *
     * @param string $merpayProcessingId merpayオーダーID<br>
     */
    public function setMerpayProcessingId($merpayProcessingId)
    {
        $this->merpayProcessingId = $merpayProcessingId;
    }

    /**
     * 詳細オーダー決済状態を取得する<br>
     *
     * @return string[] 詳細オーダー決済状態<br>
     */
    public function getDetailOrderType()
    {
        return $this->detailOrderType;
    }

    /**
     * 詳細オーダー決済状態を設定する<br>
     *
     * @param string[] $detailOrderType 詳細オーダー決済状態<br>
     */
    public function setDetailOrderType($detailOrderType)
    {
        $this->detailOrderType = $detailOrderType;
    }

    /**
     * 詳細コマンドタイプ名を取得する<br>
     *
     * @return string[] 詳細コマンドタイプ名<br>
     */
    public function getDetailCommandType()
    {
        return $this->detailCommandType;
    }

    /**
     * 詳細コマンドタイプ名を設定する<br>
     *
     * @param string[] $detailCommandType 詳細コマンドタイプ名<br>
     */
    public function setDetailCommandType($detailCommandType)
    {
        $this->detailCommandType = $detailCommandType;
    }

    /**
     * merpayサービスタイプを取得する<br>
     *
     * @return string[] merpayサービスタイプ<br>
     */
    public function getMerpayServiceType()
    {
        return $this->merpayServiceType;
    }

    /**
     * merpayサービスタイプを設定する<br>
     *
     * @param string[] $merpayServiceType merpayサービスタイプ<br>
     */
    public function setMerpayServiceType($merpayServiceType)
    {
        $this->merpayServiceType = $merpayServiceType;
    }

    /**
     * 課金種別を取得する<br>
     *
     * @return string[] 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     *
     * @param string[] $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 問合せ番号を取得する<br>
     *
     * @return string 問合せ番号<br>
     */
    public function getInquiryCode()
    {
        return $this->inquiryCode;
    }

    /**
     * 問合せ番号を設定する<br>
     *
     * @param string $inquiryCode 問合せ番号<br>
     */
    public function setInquiryCode($inquiryCode)
    {
        $this->inquiryCode = $inquiryCode;
    }

    /**
     * 元取引IDを取得する<br>
     *
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        return $this->originalOrderId;
    }

    /**
     * 元取引IDを設定する<br>
     *
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->originalOrderId = $originalOrderId;
    }

    /**
     * 承諾時決済タイプを取得する<br>
     *
     * @return string[] 承諾時決済タイプ<br>
     */
    public function getConsentAuthType()
    {
        return $this->consentAuthType;
    }

    /**
     * 承諾時決済タイプを設定する<br>
     *
     * @param string[] $consentAuthType 承諾時決済タイプ<br>
     */
    public function setConsentAuthType($consentAuthType)
    {
        $this->consentAuthType = $consentAuthType;
    }

}
