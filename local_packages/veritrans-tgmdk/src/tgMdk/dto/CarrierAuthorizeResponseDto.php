<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：キャリア、コマンド名：与信の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierAuthorizeResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "carrier"： キャリア決済<br/>
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
     * リダイレクトURL<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * HTTPレスポンスヘッダ（Locationヘッダ）にセットするキャリアのURLです。<br/>
     * <br/>
     * ※「S!まとめて支払い」の場合にのみセットされます。<br/>
     */
    private $redirectUrl;

    /**
     * レスポンスコンテンツ<br>
     * 文字列<br/>
     * マーチャント側でコンシューマに対して応答するHTMLコンテンツです。自動でキャリアの画面に遷移するためのJavaScriptを含みます。<br/>
     * <br/>
     * ※「S!まとめて支払い」以外のキャリア決済の場合にセットされます。<br/>
     */
    private $responseContents;

    /**
     * 処理日時<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * 決済処理日時を返却します。<br/>
     * <br/>
     * ※「auかんたん決済」「ドコモケータイ払い」のバーコード決済の場合のみセットされます。<br/>
     */
    private $txnTime;

    /**
     * キャリア側取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：19<br/>
     * キャリア側取引IDを返却します。<br/>
     * <br/>
     * ※「auかんたん決済」「ドコモケータイ払い」のバーコード決済の場合のみセットされます。<br/>
     */
    private $crOrderId;

    /**
     * 割引金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 割引金額を返却します。<br/>
     * <br/>
     * ※「auかんたん決済」のバーコード決済の場合のみセットされます。<br/>
     */
    private $discountAmount;

    /**
     * シーケンス番号<br>
     * 半角数字<br/>
     * 最大桁数：64<br/>
     * センターリクエストで使用するためのシーケンス番号を返却します。<br/>
     * <br/>
     * ※「auかんたん決済」のスキャンコードの場合のみセットされます。<br/>
     */
    private $seqNo;


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
     * リダイレクトURLを取得する<br>
     * @return string リダイレクトURL<br>
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * リダイレクトURLを設定する<br>
     * @param string $redirectUrl リダイレクトURL<br>
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * レスポンスコンテンツを取得する<br>
     * @return string レスポンスコンテンツ<br>
     */
    public function getResponseContents()
    {
        return $this->responseContents;
    }

    /**
     * レスポンスコンテンツを設定する<br>
     * @param string $responseContents レスポンスコンテンツ<br>
     */
    public function setResponseContents($responseContents)
    {
        $this->responseContents = $responseContents;
    }

    /**
     * 処理日時を取得する<br>
     * @return string 処理日時<br>
     */
    public function getTxnTime()
    {
        return $this->txnTime;
    }

    /**
     * 処理日時を設定する<br>
     * @param string $txnTime 処理日時<br>
     */
    public function setTxnTime($txnTime)
    {
        $this->txnTime = $txnTime;
    }

    /**
     * キャリア側取引IDを取得する<br>
     * @return string キャリア側取引ID<br>
     */
    public function getCrOrderId()
    {
        return $this->crOrderId;
    }

    /**
     * キャリア側取引IDを設定する<br>
     * @param string $crOrderId キャリア側取引ID<br>
     */
    public function setCrOrderId($crOrderId)
    {
        $this->crOrderId = $crOrderId;
    }

    /**
     * 割引金額を取得する<br>
     * @return string 割引金額<br>
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * 割引金額を設定する<br>
     * @param string $discountAmount 割引金額<br>
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * シーケンス番号を取得する<br>
     * @return string シーケンス番号<br>
     */
    public function getSeqNo()
    {
        return $this->seqNo;
    }

    /**
     * シーケンス番号を設定する<br>
     * @param string $seqNo シーケンス番号<br>
     */
    public function setSeqNo($seqNo)
    {
        $this->seqNo = $seqNo;
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
