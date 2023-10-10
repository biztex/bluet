<?php

namespace tgMdk\dto;

/**
 * 検索条件:キャリア検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierSearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * キャリアサービスタイプ<br>
     */
    private $crServiceType;

    /**
     * 課金タイプ<br>
     */
    private $accountingType;

    /**
     * 商品タイプ<br>
     */
    private $itemType;

    /**
     * 継続状態フラグ（月額課金状態フラグ）<br>
     */
    private $mpStatus;

    /**
     * 端末種別<br>
     */
    private $terminalKind;

    /**
     * 詳細コマンドタイプ名<br>
     */
    private $detailCommandType;

    /**
     * 初回課金年月日<br>
     */
    private $mpFirstDate;

    /**
     * 継続課金日<br>
     */
    private $mpDay;

    /**
     * 商品番号<br>
     */
    private $itemId;

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
     * キャリアサービスタイプを取得する<br>
     *
     * @return string[] キャリアサービスタイプ<br>
     */
    public function getCrServiceType()
    {
        return $this->crServiceType;
    }

    /**
     * キャリアサービスタイプを設定する<br>
     *
     * @param string[] $crServiceType キャリアサービスタイプ<br>
     */
    public function setCrServiceType($crServiceType)
    {
        $this->crServiceType = $crServiceType;
    }

    /**
     * 課金タイプを取得する<br>
     *
     * @return string 課金タイプ<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金タイプを設定する<br>
     *
     * @param string $accountingType 課金タイプ<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 商品タイプを取得する<br>
     *
     * @return string[] 商品タイプ<br>
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * 商品タイプを設定する<br>
     *
     * @param string[] $itemType 商品タイプ<br>
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * 継続状態フラグ（月額課金状態フラグ）を取得する<br>
     *
     * @return string[] 継続状態フラグ（月額課金状態フラグ）<br>
     */
    public function getMpStatus()
    {
        return $this->mpStatus;
    }

    /**
     * 継続状態フラグ（月額課金状態フラグ）を設定する<br>
     *
     * @param string[] $mpStatus 継続状態フラグ（月額課金状態フラグ）<br>
     */
    public function setMpStatus($mpStatus)
    {
        $this->mpStatus = $mpStatus;
    }

    /**
     * 端末種別を取得する<br>
     *
     * @return string[] 端末種別<br>
     */
    public function getTerminalKind()
    {
        return $this->terminalKind;
    }

    /**
     * 端末種別を設定する<br>
     *
     * @param string[] $terminalKind 端末種別<br>
     */
    public function setTerminalKind($terminalKind)
    {
        $this->terminalKind = $terminalKind;
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
     * 初回課金年月日を取得する<br>
     *
     * @return string 初回課金年月日<br>
     */
    public function getMpFirstDate()
    {
        return $this->mpFirstDate;
    }

    /**
     * 初回課金年月日を設定する<br>
     *
     * @param string $mpFirstDate 初回課金年月日<br>
     */
    public function setMpFirstDate($mpFirstDate)
    {
        $this->mpFirstDate = $mpFirstDate;
    }

    /**
     * 継続課金日を取得する<br>
     *
     * @return string 継続課金日<br>
     */
    public function getMpDay()
    {
        return $this->mpDay;
    }

    /**
     * 継続課金日を設定する<br>
     *
     * @param string $mpDay 継続課金日<br>
     */
    public function setMpDay($mpDay)
    {
        $this->mpDay = $mpDay;
    }

    /**
     * 商品番号を取得する<br>
     *
     * @return string 商品番号<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品番号を設定する<br>
     *
     * @param string $itemId 商品番号<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

}
