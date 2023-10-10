<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：コンビニ決済、コマンド名：決済の応答Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class CvsAuthorizeResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br>
     * 32 文字以内<br>
     * 決済請求処理後、応答電文に含まれる値。<br>
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
     * 例) D001000100000000<br>
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
     * 決済請求処理を依頼したオーダー管理ID<br>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     */
    private $custTxn;

    /**
     * 受付番号<br>
     * 半角英数字<br>
     * 32 文字以内<br>
     * コンビニへ正常に決済請求が完了した際に配布される受付番号<br>
     * セブンイレブン：　払込票番号　半角数字13桁固定<br>
     * ファミリーマート：　収納番号　半角数字と「-」18桁固定<br>
     * ローソン：　econ受付番号・お支払い受付番号、半角数字7桁 固定<br>
     * その他：　オンライン決済番号 半角数字11桁<br>
     */
    private $receiptNo;

    /**
     * 払込票URL<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * コンビニから返される払込票URL<br>
     * セブンイレブン：　URLあり<br>
     * ファミリーマート：　URLあり<br>
     * ローソン：　URLなし<br>
     * その他：　URLあり<br>
     * 戻り値の「https://～.info/JLP/JLPcon」の部分を<br>
     * 「https://w2.kessai.info/JLM/JLMcon」に置換えてご利用ください。<br>
     * 例）<br>
     * https://w2.kessai.info/JLM/JLMcon?code=xxx～&rkbn=1<br>
     * ※ローソンはデフォルト設定でURLなしとなっております。URLが必要の場合は弊社にご連絡下さい。<br>
     * ※PCブラウザーからの印刷用ですので、携帯では正しく表示できません。<br>
     * ※ファミリーマート、ウェルネットについては携帯での表示・支払に対応しております。<br>
     * ※テスト時は上記URLではなく、テスト用URLが返戻されます（アクセスはできません）。<br>
     */
    private $haraikomiUrl;

    /**
     * MDKバージョン<br>
     * 半角英数字<br>
     * 5桁<br>
     * 電文のバージョン番号。<br>
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
     * 受付番号を取得する<br>
     * @return string 受付番号<br>
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * 受付番号を設定する<br>
     * @param string $receiptNo 受付番号<br>
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
    }

    /**
     * 払込票URLを取得する<br>
     * @return string 払込票URL<br>
     */
    public function getHaraikomiUrl()
    {
        return $this->haraikomiUrl;
    }

    /**
     * 払込票URLを設定する<br>
     * @param string $haraikomiUrl 払込票URL<br>
     */
    public function setHaraikomiUrl($haraikomiUrl)
    {
        $this->haraikomiUrl = $haraikomiUrl;
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
