<?php

namespace tgMdk\dto;

/**
 * 検索条件:共通検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 */
class CommonSearchParameter
{

    /**
     * オーダーID<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     */
    private $orderId;

    /**
     * オーダー決済状態<br>
     */
    private $orderStatus;

    /**
     * コマンド<br>
     */
    private $command;

    /**
     * ステータスコード<br>
     */
    private $mstatus;

    /**
     * 取引日時（From, To）<br>
     */
    private $txnDatetime;

    /**
     * 金額（From, To）<br>
     */
    private $amount;

    /**
     * オーダーIDを取得する<br>
     * @return string オーダーID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * オーダーIDを設定する<br>
     *
     * "*"によるワイルドカード検索が可能<br>
     *
     * @param string $orderId オーダーID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * オーダー決済状態を取得する<br>
     * @return string[] オーダー決済状態<br>
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * オーダー決済状態を設定する<br>
     * @param string[] $orderStatus オーダー決済状態<br>
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * コマンドを取得する<br>
     * @return string[] コマンド<br>
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * コマンドを設定する<br>
     * @param string[] $command コマンド<br>
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

    /**
     * ステータスコードを取得する<br>
     * @return string[] ステータスコード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * ステータスコードを設定する<br>
     * @param string[] $mstatus ステータスコード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 取引日時（From, To）を取得する<br>
     * @return SearchRange 取引日時（From, To）<br>
     */
    public function getTxnDatetime()
    {
        return $this->txnDatetime;
    }

    /**
     * 取引日時（From, To）を設定する<br>
     * @param SearchRange $txnDatetime 取引日時（From, To）<br>
     */
    public function setTxnDatetime($txnDatetime)
    {
        $this->txnDatetime = $txnDatetime;
    }

    /**
     * 金額（From, To）を取得する<br>
     * @return SearchRange 金額（From, To）<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 金額（From, To）を設定する<br>
     * @param SearchRange $amount 金額（From, To）<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

}
