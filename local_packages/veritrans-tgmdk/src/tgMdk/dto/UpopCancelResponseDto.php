<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：UPOP、コマンド名：取消の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class UpopCancelResponseDto extends MdkBaseDto
{

    /**
     * サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "upop"： 銀聯ネット決済（UPOP）<br/>
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
     * - pending：保留状態<br/>
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
     * 最大桁数：300<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * トランザクションID(取引毎につけるID)<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

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
     * MDKバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * 決済時刻（日本時間）<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * 銀聯ネット決済（UPOP）で取消が確定した日時（日本時間）を返します。<br/>
     */
    private $txnDatetimeJp;

    /**
     * 決済時刻（中国時間）<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * 銀聯ネット決済（UPOP）で取消が確定した日時（中国時間）を返します。<br/>
     */
    private $txnDatetimeCn;

    /**
     * 元売上金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 与信（売上は未実行の場合）に対するキャンセルの場合：　"0"<br/>
     * 与信（売上同時）、与信後の売上に対するキャンセルの場合： 売上金額<br/>
     */
    private $capturedAmount;

    /**
     * 返品後の金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 返品後の金額<br/>
     */
    private $remainingAmount;

    /**
     * 清算金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 清算金額<br/>
     */
    private $settleAmount;

    /**
     * 清算日付<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 清算日付（MMDD形式）<br/>
     */
    private $settleDate;

    /**
     * 清算通貨種類<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 清算通貨種類<br/>
     * 392：日本円（固定）<br/>
     */
    private $settleCurrency;

    /**
     * 清算レート<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 清算レート<br/>
     */
    private $settleRate;

    /**
     * 決済センターとの取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 決済センターとの取引ID<br/>
     */
    private $upopOrderId;


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
     * サービスタイプを取得する<br>
     * @return string サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * サービスタイプを設定する<br>
     * @param string $serviceType サービスタイプ<br>
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
     * トランザクションID(取引毎につけるID)を取得する<br>
     * @return string トランザクションID(取引毎につけるID)<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * トランザクションID(取引毎につけるID)を設定する<br>
     * @param string $custTxn トランザクションID(取引毎につけるID)<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
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
     * 決済時刻（日本時間）を取得する<br>
     * @return string 決済時刻（日本時間）<br>
     */
    public function getTxnDatetimeJp()
    {
        return $this->txnDatetimeJp;
    }

    /**
     * 決済時刻（日本時間）を設定する<br>
     * @param string $txnDatetimeJp 決済時刻（日本時間）<br>
     */
    public function setTxnDatetimeJp($txnDatetimeJp)
    {
        $this->txnDatetimeJp = $txnDatetimeJp;
    }

    /**
     * 決済時刻（中国時間）を取得する<br>
     * @return string 決済時刻（中国時間）<br>
     */
    public function getTxnDatetimeCn()
    {
        return $this->txnDatetimeCn;
    }

    /**
     * 決済時刻（中国時間）を設定する<br>
     * @param string $txnDatetimeCn 決済時刻（中国時間）<br>
     */
    public function setTxnDatetimeCn($txnDatetimeCn)
    {
        $this->txnDatetimeCn = $txnDatetimeCn;
    }

    /**
     * 元売上金額を取得する<br>
     * @return string 元売上金額<br>
     */
    public function getCapturedAmount()
    {
        return $this->capturedAmount;
    }

    /**
     * 元売上金額を設定する<br>
     * @param string $capturedAmount 元売上金額<br>
     */
    public function setCapturedAmount($capturedAmount)
    {
        $this->capturedAmount = $capturedAmount;
    }

    /**
     * 返品後の金額を取得する<br>
     * @return string 返品後の金額<br>
     */
    public function getRemainingAmount()
    {
        return $this->remainingAmount;
    }

    /**
     * 返品後の金額を設定する<br>
     * @param string $remainingAmount 返品後の金額<br>
     */
    public function setRemainingAmount($remainingAmount)
    {
        $this->remainingAmount = $remainingAmount;
    }

    /**
     * 清算金額を取得する<br>
     * @return string 清算金額<br>
     */
    public function getSettleAmount()
    {
        return $this->settleAmount;
    }

    /**
     * 清算金額を設定する<br>
     * @param string $settleAmount 清算金額<br>
     */
    public function setSettleAmount($settleAmount)
    {
        $this->settleAmount = $settleAmount;
    }

    /**
     * 清算日付を取得する<br>
     * @return string 清算日付<br>
     */
    public function getSettleDate()
    {
        return $this->settleDate;
    }

    /**
     * 清算日付を設定する<br>
     * @param string $settleDate 清算日付<br>
     */
    public function setSettleDate($settleDate)
    {
        $this->settleDate = $settleDate;
    }

    /**
     * 清算通貨種類を取得する<br>
     * @return string 清算通貨種類<br>
     */
    public function getSettleCurrency()
    {
        return $this->settleCurrency;
    }

    /**
     * 清算通貨種類を設定する<br>
     * @param string $settleCurrency 清算通貨種類<br>
     */
    public function setSettleCurrency($settleCurrency)
    {
        $this->settleCurrency = $settleCurrency;
    }

    /**
     * 清算レートを取得する<br>
     * @return string 清算レート<br>
     */
    public function getSettleRate()
    {
        return $this->settleRate;
    }

    /**
     * 清算レートを設定する<br>
     * @param string $settleRate 清算レート<br>
     */
    public function setSettleRate($settleRate)
    {
        $this->settleRate = $settleRate;
    }

    /**
     * 決済センターとの取引IDを取得する<br>
     * @return string 決済センターとの取引ID<br>
     */
    public function getUpopOrderId()
    {
        return $this->upopOrderId;
    }

    /**
     * 決済センターとの取引IDを設定する<br>
     * @param string $upopOrderId 決済センターとの取引ID<br>
     */
    public function setUpopOrderId($upopOrderId)
    {
        $this->upopOrderId = $upopOrderId;
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
    public function toString()
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
