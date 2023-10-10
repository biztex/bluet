<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：alipayx、コマンド名：決済確認の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayxConfirmResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "alipayx"： Alipay+<br/>
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
     * 決済日時(日本時間)<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     * 決済センターで決済が確定した日時(日本時間)を返します。<br/>
     */
    private $payTimeJp;

    /**
     * 決済センターの管理ID<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * 決済センターが発番するIDを返却します。<br/>
     */
    private $centerId;

    /**
     * 決済ゲートウェイ管理ID<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * 決済ゲートウェイが発番するIDを返却します。<br/>
     * ※記号について、“-”（ハイフン）、“_”（アンダースコア）は返戻される可能性があります。<br/>
     */
    private $gatewayTransId;

    /**
     * ペイメントソース<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * 支払いを行った決済手段を表す情報を返します。<br/>
     */
    private $paymentSource;

    /**
     * 決済金額(外貨)<br>
     * 半角数字（小数点含む）<br/>
     * 最大桁数：16<br/>
     * 決済金額(外貨)を返却します。<br/>
     */
    private $foreignAmount;

    /**
     * 通貨コード(外貨)<br>
     * 文字列<br/>
     * 最大桁数：3<br/>
     * 通貨コード(外貨)を返却します。<br/>
     */
    private $foreignAmountCurrency;


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
     * 決済日時(日本時間)を取得する<br>
     * @return string 決済日時(日本時間)<br>
     */
    public function getPayTimeJp()
    {
        return $this->payTimeJp;
    }

    /**
     * 決済日時(日本時間)を設定する<br>
     * @param string $payTimeJp 決済日時(日本時間)<br>
     */
    public function setPayTimeJp($payTimeJp)
    {
        $this->payTimeJp = $payTimeJp;
    }

    /**
     * 決済センターの管理IDを取得する<br>
     * @return string 決済センターの管理ID<br>
     */
    public function getCenterId()
    {
        return $this->centerId;
    }

    /**
     * 決済センターの管理IDを設定する<br>
     * @param string $centerId 決済センターの管理ID<br>
     */
    public function setCenterId($centerId)
    {
        $this->centerId = $centerId;
    }

    /**
     * 決済ゲートウェイ管理IDを取得する<br>
     * @return string 決済ゲートウェイ管理ID<br>
     */
    public function getGatewayTransId()
    {
        return $this->gatewayTransId;
    }

    /**
     * 決済ゲートウェイ管理IDを設定する<br>
     * @param string $gatewayTransId 決済ゲートウェイ管理ID<br>
     */
    public function setGatewayTransId($gatewayTransId)
    {
        $this->gatewayTransId = $gatewayTransId;
    }

    /**
     * ペイメントソースを取得する<br>
     * @return string ペイメントソース<br>
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * ペイメントソースを設定する<br>
     * @param string $paymentSource ペイメントソース<br>
     */
    public function setPaymentSource($paymentSource)
    {
        $this->paymentSource = $paymentSource;
    }

    /**
     * 決済金額(外貨)を取得する<br>
     * @return string 決済金額(外貨)<br>
     */
    public function getForeignAmount()
    {
        return $this->foreignAmount;
    }

    /**
     * 決済金額(外貨)を設定する<br>
     * @param string $foreignAmount 決済金額(外貨)<br>
     */
    public function setForeignAmount($foreignAmount)
    {
        $this->foreignAmount = $foreignAmount;
    }

    /**
     * 通貨コード(外貨)を取得する<br>
     * @return string 通貨コード(外貨)<br>
     */
    public function getForeignAmountCurrency()
    {
        return $this->foreignAmountCurrency;
    }

    /**
     * 通貨コード(外貨)を設定する<br>
     * @param string $foreignAmountCurrency 通貨コード(外貨)<br>
     */
    public function setForeignAmountCurrency($foreignAmountCurrency)
    {
        $this->foreignAmountCurrency = $foreignAmountCurrency;
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
