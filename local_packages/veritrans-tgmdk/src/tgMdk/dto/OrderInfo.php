<?php

namespace tgMdk\dto;

/**
 * 検索結果:オーダー情報のクラス<br>
 *
 * @author Veritrans, Inc.
 */
class OrderInfo
{

    /**
     * インデックス<br>
     * 検索されたオーダーのインデックス<br>
     */
    private $index;

    /**
     * 決済サービスタイプ<br>
     */
    private $serviceTypeCd;

    /**
     * オーダーID<br>
     */
    private $orderId;
    /**
     * オーダー決済状態<br>
     */
    private $orderStatus;
    /**
     * 最終成功トランザクションタイプ<br>
     */
    private $lastSuccessTxnType;
    /**
     * 詳細トランザクションタイプ<br>
     */
    private $successDetailTxnType;
    /**
     * 固有オーダー情報<br>
     */
    private $properOrderInfo;
    /**
     * 決済トランザクションリスト<br>
     */
    private $transactionInfos;
    /**
     * 取引メモ1<br>
     */
    private $memo1;
    /**
     * 取引メモ2<br>
     */
    private $memo2;
    /**
     * 取引メモ3<br>
     */
    private $memo3;
    /**
     * キー情報<br>
     */
    private $freeKey;
    /**
     * 会員ID<br>
     */
    private $accountId;

    /**
     *
     * インデックスを取得する<br>
     *
     * @return string インデックス<br>
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * インデックスを設定する<br>
     *
     * @param string $index インデックス<br>
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * 決済サービスタイプを取得する<br>
     *
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceTypeCd()
    {
        return $this->serviceTypeCd;
    }

    /**
     * 決済サービスタイプを設定する<br>
     *
     * @param string $serviceTypeCd 決済サービスタイプ<br>
     */
    public function setServiceTypeCd($serviceTypeCd)
    {
        $this->serviceTypeCd = $serviceTypeCd;
    }

    /**
     * オーダーIDを取得する<br>
     *
     * @return string オーダーID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * オーダーIDを設定する<br>
     *
     * @param string $orderId オーダーID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * オーダー決済状態を取得する<br>
     *
     * @return string オーダー決済状態<br>
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * オーダー決済状態を設定する<br>
     *
     * @param string $orderStatus オーダー決済状態<br>
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * 最終成功トランザクションタイプを取得する<br>
     *
     * @return string 最終成功トランザクションタイプ<br>
     */
    public function getLastSuccessTxnType()
    {
        return $this->lastSuccessTxnType;
    }

    /**
     * 最終成功トランザクションタイプを設定する<br>
     *
     * @param string $lastSuccessTxnType 最終成功トランザクションタイプ<br>
     */
    public function setLastSuccessTxnType($lastSuccessTxnType)
    {
        $this->lastSuccessTxnType = $lastSuccessTxnType;
    }

    /**
     * 詳細トランザクションタイプを取得する<br>
     *
     * @return string 詳細トランザクションタイプ<br>
     */
    public function getSuccessDetailTxnType()
    {
        return $this->successDetailTxnType;
    }

    /**
     * 詳細トランザクションタイプを設定する<br>
     *
     * @param string $successDetailTxnType 詳細トランザクションタイプ<br>
     */
    public function setSuccessDetailTxnType($successDetailTxnType)
    {
        $this->successDetailTxnType = $successDetailTxnType;
    }

    /**
     * 固有オーダー情報を取得する<br>
     *
     * @return ProperOrderInfo 固有オーダー情報<br>
     */
    public function getProperOrderInfo()
    {
        return $this->properOrderInfo;
    }

    /**
     * 固有オーダー情報を設定する<br>
     *
     * @param ProperOrderInfo $properOrderInfo 固有オーダー情報<br>
     */
    public function setProperOrderInfo($properOrderInfo)
    {
        $this->properOrderInfo = $properOrderInfo;
    }

    /**
     * 決済トランザクションリストを取得する<br>
     *
     * @return TransactionInfos 決済トランザクションリスト<br>
     */
    public function getTransactionInfos()
    {
        return $this->transactionInfos;
    }

    /**
     * 決済トランザクションリストを設定する<br>
     *
     * @param TransactionInfos $transactionInfos 決済トランザクションリスト<br>
     */
    public function setTransactionInfos($transactionInfos)
    {
        $this->transactionInfos = $transactionInfos;
    }

    /**
     * 取引メモ1を取得する<br>
     * @return string 取引メモ1<br>
     */
    public function getMemo1()
    {
        return $this->memo1;
    }

    /**
     * 取引メモ1を設定する<br>
     * @param string $memo1 取引メモ1<br>
     */
    public function setMemo1($memo1)
    {
        $this->memo1 = $memo1;
    }

    /**
     * 取引メモ2を取得する<br>
     * @return string 取引メモ2<br>
     */
    public function getMemo2()
    {
        return $this->memo2;
    }

    /**
     * 取引メモ2を設定する<br>
     * @param string $memo2 取引メモ2<br>
     */
    public function setMemo2($memo2)
    {
        $this->memo2 = $memo2;
    }

    /**
     * 取引メモ3を取得する<br>
     * @return string 取引メモ3<br>
     */
    public function getMemo3()
    {
        return $this->memo3;
    }

    /**
     * 取引メモ3を設定する<br>
     * @param string $memo3 取引メモ3<br>
     */
    public function setMemo3($memo3)
    {
        $this->memo3 = $memo3;
    }

    /**
     * キー情報を取得する<br>
     * @return string キー情報<br>
     */
    public function getFreeKey()
    {
        return $this->freeKey;
    }

    /**
     * キー情報を設定する<br>
     * @param string $freeKey キー情報<br>
     */
    public function setFreeKey($freeKey)
    {
        $this->freeKey = $freeKey;
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
     * 会員IDを設定する<br>
     * @param string $accountId 会員ID<br>
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
}
