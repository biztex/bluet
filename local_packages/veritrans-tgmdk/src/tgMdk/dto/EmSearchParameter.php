<?php

namespace tgMdk\dto;

/**
 * 検索条件:電子マネー検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 */
class EmSearchParameter
{

    /**
     * 詳細オーダー決済状態
     */
    private $detailOrderType;

    /**
     * 電子マネー種別<br>
     */
    private $emType;

    /**
     * 支払い種別<br>
     */
    private $optionType;

    /**
     * 支払/受取期限（From, To）<br>
     */
    private $settlementLimit;

    /**
     * 支払完了日時（From, To）<br>
     */
    private $completeDatetime;

    /**
     * 受付番号<br>
     */
    private $receiptNo;

    /**
     * 管理番号<br>
     */
    private $managementNo;

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
     * 電子マネー種別を取得する<br>
     *
     * @return string[] 電子マネー種別<br>
     */
    public function getEmType()
    {
        return $this->emType;
    }

    /**
     * 電子マネー種別を設定する<br>
     *
     * @param string[] $emType 電子マネー種別<br>
     */
    public function setEmType($emType)
    {
        $this->emType = $emType;
    }

    /**
     * 支払い種別を取得する<br>
     *
     * @return string[] 支払い種別<br>
     */
    public function getOptionType()
    {
        return $this->optionType;
    }

    /**
     * 支払い種別を設定する<br>
     *
     * @param string[] $optionType 支払い種別<br>
     */
    public function setOptionType($optionType)
    {
        $this->optionType = $optionType;
    }

    /**
     * 支払/受取期限（From, To）を取得する<br>
     *
     * @return SearchRange 支払/受取期限（From, To）<br>
     */
    public function getSettlementLimit()
    {
        return $this->settlementLimit;
    }

    /**
     * 支払/受取期限（From, To）を設定する<br>
     *
     * @param SearchRange $settlementLimit 支払/受取期限（From, To）<br>
     */
    public function setSettlementLimit($settlementLimit)
    {
        $this->settlementLimit = $settlementLimit;
    }

    /**
     * 支払完了日時（From, To）を取得する<br>
     *
     * @return SearchRange 支払完了日時（From, To）<br>
     */
    public function getCompleteDatetime()
    {
        return $this->completeDatetime;
    }

    /**
     * 支払完了日時（From, To）を設定する<br>
     *
     * @param SearchRange $completeDatetime 支払完了日時（From, To）<br>
     */
    public function setCompleteDatetime($completeDatetime)
    {
        $this->completeDatetime = $completeDatetime;
    }

    /**
     * 受付番号を取得する<br>
     *
     * @return string 受付番号<br>
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * 受付番号を設定する<br>
     *
     * @param string $receiptNo 受付番号<br>
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
    }

    /**
     * 管理番号を取得する<br>
     *
     * @return string 管理番号<br>
     */
    public function getManagementNo()
    {
        return $this->managementNo;
    }

    /**
     * 管理番号を設定する<br>
     *
     * @param string $managementNo 管理番号<br>
     */
    public function setManagementNo($managementNo)
    {
        $this->managementNo = $managementNo;
    }

}
