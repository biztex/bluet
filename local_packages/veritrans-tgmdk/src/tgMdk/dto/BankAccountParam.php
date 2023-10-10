<?php

namespace tgMdk\dto;

/**
 * 銀行口座情報のクラス
 *
 * @author Veritrans, Inc.
 *
 */
class BankAccountParam
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
     * 口座管理方式<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * "0"：実口座<br/>
     * "1"：バーチャル口座<br/>
     */
    private $accountManageType;

    /**
     * 銀行口座関連付け拒否フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * "0"：会員情報と銀行口座情報を関連付ける。<br/>
     * "1"：会員情報と銀行口座情報を関連付けない。<br/>
     * 未設定の場合は""0""：会員情報と銀行口座情報を関連付けるとして扱う<br/>
     */
    private $rejectBankAccount;

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
     * 口座管理方式を設定する<br>
     * @param string $accountManageType 口座管理方式<br>
     */
    public function setAccountManageType($accountManageType)
    {
        $this->accountManageType = $accountManageType;
    }

    /**
     * 口座管理方式を取得する<br>
     * @return string 口座管理方式<br>
     */
    public function getAccountManageType()
    {
        return $this->accountManageType;
    }

    /**
     * 銀行口座関連付け拒否フラグを設定する<br>
     * @param string $rejectBankAccount 銀行口座関連付け拒否フラグ<br>
     */
    public function setRejectBankAccount($rejectBankAccount)
    {
        $this->rejectBankAccount = $rejectBankAccount;
    }

    /**
     * 銀行口座関連付け拒否フラグを取得する<br>
     * @return string 銀行口座関連付け拒否フラグ<br>
     */
    public function getRejectBankAccount()
    {
        return $this->rejectBankAccount;
    }


}

