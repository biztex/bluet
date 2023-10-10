<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Paypal、コマンド名：返金の応答Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class PaypalRefundResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * 決済サービスの区分を指定します。<br>
     * 必須項目、固定値<br>
     * "paypal"： PayPal決済<br>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br>
     * 32 文字以内<br>
     * 取消請求処理後、応答電文に含まれる値。<br>
     * 以下の処理結果のいずれかが格納される<br>
     * ・success：正常終了<br>
     * ・failure：異常終了<br>
     * ・pending：保留状態<br>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br>
     * 16 文字以内<br>
     * 結果コード<br>
     * 例) L001000100000000<br>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br>
     * 1024 バイト以内<br>
     * エラーメッセージ<br>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * 返金を行った取引IDが格納されます。<br>
     * “.”（ドット）、“-”（ハイフン）、“_”（アンダースコア）も使用できます。<br>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     */
    private $custTxn;

    /**
     * MDK バージョン<br>
     * 半角英数字<br>
     * 5 桁<br>
     * 電文のバージョン番号。<br>
     */
    private $txnVersion;

    /**
     * 払戻し手数料<br>
     * 半角数字<br>
     * 払い戻し手数料が格納されます。<br>
     */
    private $feeRefundAmount;

    /**
     * 返金金額<br>
     * 半角数字<br>
     * 返金金額が格納されます。<br>
     */
    private $refundAmount;

    /**
     * 純返金金額<br>
     * 半角数字<br>
     * PayPal残高から差し引かれた金額が格納されます。<br>
     */
    private $netRefundAmount;

    /**
     * 元決済金額<br>
     * 半角数字<br>
     * 元決済金額が格納されます。<br>
     */
    private $principalAmount;

    /**
     * 決済残高<br>
     * 半角数字<br>
     * 決済残高が格納されます。<br>
     */
    private $settlementBalance;

    /**
     * 請求番号<br>
     * 半角数字<br>
     * 請求番号が格納されます。<br>
     */
    private $invoiceId;

    /**
     * 決済センタ取引ID<br>
     * 半角英数字<br>
     * 19 文字以内<br>
     * PayPalが発番する返金取引単位でユニークとなるIDが格納されます。<br>
     */
    private $centerTxnId;

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
     * MDK バージョンを取得する<br>
     * @return string MDK バージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDK バージョンを設定する<br>
     * @param string $txnVersion MDK バージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * 払戻し手数料を取得する<br>
     * @return string 払戻し手数料<br>
     */
    public function getFeeRefundAmount()
    {
        return $this->feeRefundAmount;
    }

    /**
     * 払戻し手数料を設定する<br>
     * @param string $feeRefundAmount 払戻し手数料<br>
     */
    public function setFeeRefundAmount($feeRefundAmount)
    {
        $this->feeRefundAmount = $feeRefundAmount;
    }

    /**
     * 返金金額を取得する<br>
     * @return string 返金金額<br>
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * 返金金額を設定する<br>
     * @param string $refundAmount 返金金額<br>
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * 純返金金額を取得する<br>
     * @return string 純返金金額<br>
     */
    public function getNetRefundAmount()
    {
        return $this->netRefundAmount;
    }

    /**
     * 純返金金額を設定する<br>
     * @param string $netRefundAmount 純返金金額<br>
     */
    public function setNetRefundAmount($netRefundAmount)
    {
        $this->netRefundAmount = $netRefundAmount;
    }

    /**
     * 元決済金額を取得する<br>
     * @return string 元決済金額<br>
     */
    public function getPrincipalAmount()
    {
        return $this->principalAmount;
    }

    /**
     * 元決済金額を設定する<br>
     * @param string $principalAmount 元決済金額<br>
     */
    public function setPrincipalAmount($principalAmount)
    {
        $this->principalAmount = $principalAmount;
    }

    /**
     * 決済残高を取得する<br>
     * @return string 決済残高<br>
     */
    public function getSettlementBalance()
    {
        return $this->settlementBalance;
    }

    /**
     * 決済残高を設定する<br>
     * @param string $settlementBalance 決済残高<br>
     */
    public function setSettlementBalance($settlementBalance)
    {
        $this->settlementBalance = $settlementBalance;
    }

    /**
     * 請求番号を取得する<br>
     * @return string 請求番号<br>
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * 請求番号を設定する<br>
     * @param string $invoiceId 請求番号<br>
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * 決済センタ取引IDを取得する<br>
     * @return string 決済センタ取引ID<br>
     */
    public function getCenterTxnId()
    {
        return $this->centerTxnId;
    }

    /**
     * 決済センタ取引IDを設定する<br>
     * @param string $centerTxnId 決済センタ取引ID<br>
     */
    public function setCenterTxnId($centerTxnId)
    {
        $this->centerTxnId = $centerTxnId;
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
