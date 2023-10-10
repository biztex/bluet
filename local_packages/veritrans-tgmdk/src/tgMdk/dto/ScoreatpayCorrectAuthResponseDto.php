<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：スコア@払い、コマンド名：決済情報修正の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayCorrectAuthResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * "scoreatpay"： スコア@払い<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 決済請求処理後、応答電文に含まれる値。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     *  - success：正常終了<br/>
     *  - failure：異常終了<br/>
     *  - pending：保留<br/>
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
     * 加盟店注文ID<br>
     * 半角英数字<br/>
     * 最大桁数：40<br/>
     */
    private $shopTransactionId;

    /**
     * スコア注文ID<br>
     * 半角英数字<br/>
     * 最大桁数：11<br/>
     */
    private $nissenTransactionId;

    /**
     * 自動審査結果<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     * 自動審査結果を返却します。<br/>
     *  - OK：審査結果OK<br/>
     *  - NG：審査結果NG<br/>
     *  - HD：審査中(HOLD)<br/>
     */
    private $authorResult;

    /**
     * エラー詳細<br>
     * ScoreatpayErrorDtoの配列<br/>
     * エラー情報オブジェクトを配列で返却します。<br/>
     */
    private $errors;


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
     * 加盟店注文IDを取得する<br>
     * @return string 加盟店注文ID<br>
     */
    public function getShopTransactionId()
    {
        return $this->shopTransactionId;
    }

    /**
     * 加盟店注文IDを設定する<br>
     * @param string $shopTransactionId 加盟店注文ID<br>
     */
    public function setShopTransactionId($shopTransactionId)
    {
        $this->shopTransactionId = $shopTransactionId;
    }

    /**
     * スコア注文IDを取得する<br>
     * @return string スコア注文ID<br>
     */
    public function getNissenTransactionId()
    {
        return $this->nissenTransactionId;
    }

    /**
     * スコア注文IDを設定する<br>
     * @param string $nissenTransactionId スコア注文ID<br>
     */
    public function setNissenTransactionId($nissenTransactionId)
    {
        $this->nissenTransactionId = $nissenTransactionId;
    }

    /**
     * 自動審査結果を取得する<br>
     * @return string 自動審査結果<br>
     */
    public function getAuthorResult()
    {
        return $this->authorResult;
    }

    /**
     * 自動審査結果を設定する<br>
     * @param string $authorResult 自動審査結果<br>
     */
    public function setAuthorResult($authorResult)
    {
        $this->authorResult = $authorResult;
    }

    /**
     * エラー詳細を取得する<br>
     * @return ScoreatpayErrorDto[] エラー詳細<br>
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * エラー詳細を設定する<br>
     * @param ScoreatpayErrorDto[] $errors エラー詳細<br>
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
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

    /**
     * プロパティ名と対応するクラス名のリストを取得する<br>
     * @return array プロパティ名と対応するクラス名のリスト<br>
     */
    public function getPropertyClassNameList()
    {
        return array('errors' => 'ScoreatpayErrorDto');
    }

}
