<?php

namespace tgMdk\dto;

/**
 * 検索結果:SaisonトランザクションAPI情報電文リストのクラス<br>
 *
 * @author Veritrans, Inc.
 */
class TransactionApis
{

    /**
     * SaisonトランザクションAPI情報<br>
     */
    private $transactionApi;

    /**
     * コンストラクタ。
     */
    public function __construct()
    {
        $this->transactionApi = array();
    }

    /**
     * SaisonトランザクションAPI情報を取得する<br>
     *
     * @return TransactionApi[] SaisonトランザクションAPI情報<br>
     */
    public function getTransactionApi()
    {
        return $this->transactionApi;
    }

    /**
     * SaisonトランザクションAPI情報を設定する<br>
     *
     * @param TransactionApi[] $transactionApi SaisonトランザクションAPI情報<br>
     */
    public function setTransactionApi($transactionApi)
    {
        $this->transactionApi = $transactionApi;
    }

}
