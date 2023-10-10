<?php

namespace tgMdk\dto;

/**
 * 検索条件:bank検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 */
class BankSearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * 支払い種別<br>
     */
    private $optionType;

    /**
     * 支払期限（From, To）<br>
     */
    private $payLimit;

    /**
     * 収納日時（From, To）<br>
     */
    private $receivedDatetime;

    /**
     * 収納機関番号<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     */
    private $shunoKikanNo;

    /**
     * 収納企業コード<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     */
    private $shunoKigyoNo;

    /**
     * お客様番号<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     */
    private $customerNo;

    /**
     * 確認番号<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     */
    private $confirmNo;

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
     * 支払期限（From, To）を取得する<br>
     *
     * @return SearchRange 支払期限（From, To）<br>
     */
    public function getPayLimit()
    {
        return $this->payLimit;
    }

    /**
     * 支払期限（From, To）を設定する<br>
     *
     * @param SearchRange $payLimit 支払期限（From, To）
     */
    public function setPayLimit($payLimit)
    {
        $this->payLimit = $payLimit;
    }

    /**
     * 収納日時（From, To）を取得する<br>
     *
     * @return SearchRange 収納日時（From, To）<br>
     */
    public function getReceivedDatetime()
    {
        return $this->receivedDatetime;
    }

    /**
     * 収納日時（From, To）を設定する<br>
     *
     * @param SearchRange $receivedDatetime 収納日時（From, To）<br>
     */
    public function setReceivedDatetime($receivedDatetime)
    {
        $this->receivedDatetime = $receivedDatetime;
    }

    /**
     * 収納機関番号を取得する<br>
     *
     * @return string 収納機関番号<br>
     */
    public function getShunoKikanNo()
    {
        return $this->shunoKikanNo;
    }

    /**
     * 収納機関番号を設定する<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     * @param string $shunoKikanNo 収納機関番号<br>
     */
    public function setShunoKikanNo($shunoKikanNo)
    {
        $this->shunoKikanNo = $shunoKikanNo;
    }

    /**
     * 収納企業コードを取得する<br>
     *
     * @return string 収納企業コード<br>
     */
    public function getShunoKigyoNo()
    {
        return $this->shunoKigyoNo;
    }

    /**
     * 収納企業コードを設定する<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     * @param string $shunoKigyoNo 収納企業コード<br>
     */
    public function setShunoKigyoNo($shunoKigyoNo)
    {
        $this->shunoKigyoNo = $shunoKigyoNo;
    }

    /**
     * お客様番号を取得する<br>
     *
     * @return string お客様番号<br>
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * お客様番号を設定する<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     * @param string $customerNo お客様番号<br>
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
    }

    /**
     * 確認番号を取得する<br>
     *
     * @return string 確認番号<br>
     */
    public function getConfirmNo()
    {
        return $this->confirmNo;
    }

    /**
     * 確認番号を設定する<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     * @param string $confirmNo 確認番号<br>
     */
    public function setConfirmNo($confirmNo)
    {
        $this->confirmNo = $confirmNo;
    }
}
