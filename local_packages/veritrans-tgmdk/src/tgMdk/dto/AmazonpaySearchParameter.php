<?php

namespace tgMdk\dto;

/**
 * 検索条件:Amazonpay検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AmazonpaySearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * 詳細コマンドタイプ名<br>
     */
    private $detailCommandType;

    /**
     * 決済センターの管理ID<br>
     */
    private $centerOrderId;

    /**
     * 決済センターのトランザクション管理ID<br>
     */
    private $centerTransactionId;

    /**
     * 課金種別<br>
     */
    private $accountingType;

    /**
     * 承諾状態<br>
     */
    private $consentStatus;

    /**
     * 元取引ID<br>
     */
    private $originalOrderId;

    /**
     * 決済確認画面種別<br>
     */
    private $payConfirmScreenType;

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
     * 決済センターの管理IDを取得する<br>
     *
     * @return string 決済センターの管理ID<br>
     */
    public function getCenterOrderId()
    {
        return $this->centerOrderId;
    }

    /**
     * 決済センターの管理IDを設定する<br>
     *
     * @param string $centerOrderId 決済センターの管理ID<br>
     */
    public function setCenterOrderId($centerOrderId)
    {
        $this->centerOrderId = $centerOrderId;
    }

    /**
     * 決済センターのトランザクション管理IDを取得する<br>
     *
     * @return string 決済センターのトランザクション管理ID<br>
     */
    public function getCenterTransactionId()
    {
        return $this->centerTransactionId;
    }

    /**
     * 決済センターのトランザクション管理IDを設定する<br>
     *
     * @param string $centerTransactionId 決済センターのトランザクション管理ID<br>
     */
    public function setCenterTransactionId($centerTransactionId)
    {
        $this->centerTransactionId = $centerTransactionId;
    }

    /**
     * 課金種別を取得する<br>
     *
     * @return string 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     *
     * @param string $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 承諾状態を取得する<br>
     *
     * @return string[] 承諾状態<br>
     */
    public function getConsentStatus()
    {
        return $this->consentStatus;
    }

    /**
     * 承諾状態を設定する<br>
     *
     * @param string[] $consentStatus 承諾状態<br>
     */
    public function setConsentStatus($consentStatus)
    {
        $this->consentStatus = $consentStatus;
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
     * 決済確認画面種別を取得する<br>
     *
     * @return string 決済確認画面種別<br>
     */
    public function getPayConfirmScreenType()
    {
        return $this->payConfirmScreenType;
    }

    /**
     * 決済確認画面種別を設定する<br>
     *
     * @param string $payConfirmScreenType 決済確認画面種別<br>
     */
    public function setPayConfirmScreenType($payConfirmScreenType)
    {
        $this->payConfirmScreenType = $payConfirmScreenType;
    }


}
