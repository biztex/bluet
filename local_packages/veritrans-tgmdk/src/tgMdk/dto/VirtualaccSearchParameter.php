<?php

namespace tgMdk\dto;

/**
 * 検索条件:銀行振込決済検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class VirtualaccSearchParameter
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
     * 登録時振込番号<br>
     */
    private $entryTransferNumber;

    /**
     * 登録時振込人名<br>
     */
    private $entryTransferName;

    /**
     * 口座番号<br>
     */
    private $accountNumber;

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
     * 登録時振込番号を取得する<br>
     *
     * @return string 登録時振込番号<br>
     */
    public function getEntryTransferNumber()
    {
        return $this->entryTransferNumber;
    }

    /**
     * 登録時振込番号を設定する<br>
     *
     * @param string $entryTransferNumber 登録時振込番号<br>
     */
    public function setEntryTransferNumber($entryTransferNumber)
    {
        $this->entryTransferNumber = $entryTransferNumber;
    }

    /**
     * 登録時振込人名を取得する<br>
     *
     * @return string 登録時振込人名<br>
     */
    public function getEntryTransferName()
    {
        return $this->entryTransferName;
    }

    /**
     * 登録時振込人名を設定する<br>
     *
     * @param string $entryTransferName 登録時振込人名<br>
     */
    public function setEntryTransferName($entryTransferName)
    {
        $this->entryTransferName = $entryTransferName;
    }

    /**
     * 口座番号を取得する<br>
     *
     * @return string 口座番号<br>
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * 口座番号を設定する<br>
     *
     * @param string $accountNumber 口座番号<br>
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

}
