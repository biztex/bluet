<?php

namespace tgMdk\dto;

/**
 * 銀行口座情報のクラス
 *
 * @author Veritrans, Inc.
 *
 */
class BankAccountInfo
{

    /**
     * 金融機関コード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     */
    private $bankCode;

    /**
     * 支店コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     */
    private $branchCode;

    /**
     * 口座種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * "1"：普通<br/>
     * "2"：当座<br/>
     * "4"：貯蓄<br/>
     * "9"：その他<br/>
     */
    private $accountType;

    /**
     * 口座番号<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * "入力時"：指定したバーチャル口座が割り当てられる<br/>
     * "未入力時"：あいているバーチャル口座が割り当てられる<br/>
     */
    private $accountNumber;

    /**
     * 口座名義<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     */
    private $accountName;


    /**
     * 金融機関コードを設定する<br>
     * @param string $bankCode 金融機関コード<br>
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * 金融機関コードを取得する<br>
     * @return string 金融機関コード<br>
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * 支店コードを設定する<br>
     * @param string $branchCode 支店コード<br>
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
    }

    /**
     * 支店コードを取得する<br>
     * @return string 支店コード<br>
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * 口座種別を設定する<br>
     * @param string $accountType 口座種別<br>
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * 口座種別を取得する<br>
     * @return string 口座種別<br>
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * 口座番号を設定する<br>
     * @param string $accountNumber 口座番号<br>
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * 口座番号を取得する<br>
     * @return string 口座番号<br>
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * 口座名義を設定する<br>
     * @param string $accountName 口座名義<br>
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * 口座名義を取得する<br>
     * @return string 口座名義<br>
     */
    public function getAccountName()
    {
        return $this->accountName;
    }


}
