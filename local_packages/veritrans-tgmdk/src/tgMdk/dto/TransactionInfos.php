<?php

namespace tgMdk\dto;

/**
 * 検索結果:決済トランザクションリストのクラス<br>
 *
 * @author Veritrans, Inc.
 */
class TransactionInfos
{

    /**
     * 決済トランザクション<br>
     */
    private $transactionInfo;

    /**
     * コンストラクタ。
     */
    public function __construct()
    {
        $this->transactionInfo = array();
    }

    /**
     * 決済トランザクションを取得する<br>
     *
     * @return TransactionInfo[] 決済トランザクション<br>
     */
    public function getTransactionInfo()
    {
        return $this->transactionInfo;
    }

    /**
     * 決済トランザクションを設定する<br>
     *
     * @param TransactionInfo[] $transactionInfo 決済トランザクション<br>
     */
    public function setTransactionInfo($transactionInfo)
    {
        $this->transactionInfo = $transactionInfo;
    }
}
