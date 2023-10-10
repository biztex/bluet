<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：銀行振込決済、コマンド名：決済申込の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class VirtualaccAuthorizeResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "virtualacc"： 銀行振込決済<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 決済請求処理後、応答電文に含まれる値。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     * - success：正常終了<br/>
     * - failure：異常終了<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
     * <br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * 振込人名<br>
     * 文字列<br/>
     * 最大桁数：69<br/>
     * リクエストのパラメータで受け取った"登録振込人名"の先頭に"振込番号"を連結して返却します。<br/>
     */
    private $transferName;

    /**
     * 銀行名<br>
     * 文字列<br/>
     * 最大桁数：15<br/>
     * 振込先の銀行名を返却します。<br/>
     */
    private $bankName;

    /**
     * 銀行コード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 振込先の銀行コードを返却します。<br/>
     */
    private $bankCode;

    /**
     * 支店名<br>
     * 文字列<br/>
     * 最大桁数：15<br/>
     * 振込先の支店名を返却します。<br/>
     */
    private $branchName;

    /**
     * 支店コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 振込先の支店コードを返却します。<br/>
     */
    private $branchCode;

    /**
     * 口座種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 振込先の口座種別を返却します。<br/>
     * - 1 : 普通<br/>
     * - 2 : 当座<br/>
     */
    private $accountType;

    /**
     * 口座番号<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 振込先の口座番号を返却します。<br/>
     */
    private $accountNumber;

    /**
     * 口座名義<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 振込先の口座名義を返却します。<br/>
     */
    private $accountName;

    /**
     * 電文ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDKバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;


    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 振込人名を取得する<br>
     * @return string 振込人名<br>
     */
    public function getTransferName()
    {
        return $this->transferName;
    }

    /**
     * 振込人名を設定する<br>
     * @param string $transferName 振込人名<br>
     */
    public function setTransferName($transferName)
    {
        $this->transferName = $transferName;
    }

    /**
     * 銀行名を取得する<br>
     * @return string 銀行名<br>
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * 銀行名を設定する<br>
     * @param string $bankName 銀行名<br>
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }

    /**
     * 銀行コードを取得する<br>
     * @return string 銀行コード<br>
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * 銀行コードを設定する<br>
     * @param string $bankCode 銀行コード<br>
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * 支店名を取得する<br>
     * @return string 支店名<br>
     */
    public function getBranchName()
    {
        return $this->branchName;
    }

    /**
     * 支店名を設定する<br>
     * @param string $branchName 支店名<br>
     */
    public function setBranchName($branchName)
    {
        $this->branchName = $branchName;
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
     * 口座種別を取得する<br>
     * @return string 口座種別<br>
     */
    public function getAccountType()
    {
        return $this->accountType;
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
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
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
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }


    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }

}
