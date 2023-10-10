<?php

namespace tgMdk\dto;

/**
 * 銀行振込決済のみ継承する親クラス
 * AbstractPaymentVirtualaccRequestDto
 * @author Veritrans, Inc.
 *
 */
class AbstractPaymentVirtualaccRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 銀行口座関連付け拒否フラグを設定する<br>
     * @param string $rejectBankAccount 銀行口座関連付け拒否フラグ<br>
     */
    public function setRejectBankAccount($rejectBankAccount)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setRejectBankAccount($rejectBankAccount);
    }

    /**
     * 銀行口座関連付け拒否フラグを取得する<br>
     * @return string 銀行口座関連付け拒否フラグ<br>
     */
    public function getRejectBankAccount()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getRejectBankAccount();
    }

}
