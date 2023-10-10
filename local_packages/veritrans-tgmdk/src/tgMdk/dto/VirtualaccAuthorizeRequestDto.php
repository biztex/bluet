<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：銀行振込決済、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class VirtualaccAuthorizeRequestDto extends AbstractPaymentVirtualaccRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "virtualacc";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "resona":りそな<br/>
     * <br/>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 999999999999(12桁) 以下<br/>
     */
    private $amount;

    /**
     * 登録時振込人名<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     */
    private $entryTransferName;

    /**
     * 登録時振込番号<br>
     * 全角数字<br/>
     * 最大桁数：5<br/>
     */
    private $entryTransferNumber;

    /**
     * 振込期限<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * YYYYMMDD<br/>
     */
    private $transferExpiredDate;

    /**
     * 口座番号<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 口座管理方式が0:実口座の場合は利用不可項目となります。<br/>
     * ⇒マーチャント情報に紐づく実口座の口座番号が指定されます。<br/>
     * 口座管理方式が1:バーチャル口座の場合は必須項目となります。<br/>
     * ⇒PayNow側で払い出された口座番号が指定されます。<br/>
     */
    private $accountNumber;

    /**
     * 口座管理方式<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0 : 実口座<br/>
     * - 1: バーチャル口座<br/>
     */
    private $accountManageType;

    /**
     * 支店コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 口座管理方式が0:実口座の場合は利用不可項目となります。<br/>
     * 口座管理方式が1:バーチャル口座の場合は必須項目となります。<br/>
     * ⇒PayNow側でバーチャル口座情報マスタから取得した支店コードが指定されます。<br/>
     */
    private $branchCode;

    /**
     * 口座名義<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 口座管理方式が0:実口座の場合は利用不可項目となります。<br/>
     * 口座管理方式が1:バーチャル口座の場合は必須項目となります。<br/>
     * ⇒PayNow側で払い出された口座名義が指定されます。<br/>
     */
    private $accountName;


    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
    }

    /**
     * サービスオプションタイプを取得する<br>
     * @return string サービスオプションタイプ<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * サービスオプションタイプを設定する<br>
     * @param string $serviceOptionType サービスオプションタイプ<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済金額を設定する<br>
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 登録時振込人名を取得する<br>
     * @return string 登録時振込人名<br>
     */
    public function getEntryTransferName()
    {
        return $this->entryTransferName;
    }

    /**
     * 登録時振込人名を設定する<br>
     * @param string $entryTransferName 登録時振込人名<br>
     */
    public function setEntryTransferName($entryTransferName)
    {
        $this->entryTransferName = $entryTransferName;
    }

    /**
     * 登録時振込番号を取得する<br>
     * @return string 登録時振込番号<br>
     */
    public function getEntryTransferNumber()
    {
        return $this->entryTransferNumber;
    }

    /**
     * 登録時振込番号を設定する<br>
     * @param string $entryTransferNumber 登録時振込番号<br>
     */
    public function setEntryTransferNumber($entryTransferNumber)
    {
        $this->entryTransferNumber = $entryTransferNumber;
    }

    /**
     * 振込期限を取得する<br>
     * @return string 振込期限<br>
     */
    public function getTransferExpiredDate()
    {
        return $this->transferExpiredDate;
    }

    /**
     * 振込期限を設定する<br>
     * @param string $transferExpiredDate 振込期限<br>
     */
    public function setTransferExpiredDate($transferExpiredDate)
    {
        $this->transferExpiredDate = $transferExpiredDate;
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
     * 口座番号を設定する<br>
     * @param string $accountNumber 口座番号<br>
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
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
     * 口座管理方式を設定する<br>
     * @param string $accountManageType 口座管理方式<br>
     */
    public function setAccountManageType($accountManageType)
    {
        $this->accountManageType = $accountManageType;
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
     * 支店コードを設定する<br>
     * @param string $branchCode 支店コード<br>
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
    }

    /**
     * 口座名義を取得する<br>
     * @return string 口座名義<br>
     */
    public function getAccountName()
    {
        return $this->accountName;
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
     * ログ用文字列(マスク済み)を設定する<br>
     * @param string $maskedLog ログ用文字列(マスク済み)<br>
     */
    public function _setMaskedLog($maskedLog)
    {
        $this->maskedLog = $maskedLog;
    }

    /**
     * ログ用文字列(マスク済み)を取得する<br>
     * @return string ログ用文字列(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->maskedLog;
    }

}
