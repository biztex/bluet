<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：リクルート、コマンド名：売上の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RecruitCaptureResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "recruit"： リクルート決済<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 売上請求処理後、応答電文に含まれる値。<br/>
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
     * 残高<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 残高を返します。<br/>
     */
    private $balance;

    /**
     * 利用ポイント<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 利用ポイントを返します。<br/>
     */
    private $usePoint;

    /**
     * 付与ポイント<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 付与ポイントを返します。<br/>
     */
    private $givePoint;

    /**
     * リクルートクーポン<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * リクルート原資のクーポンの利用金額を返します。<br/>
     */
    private $recruitCoupon;

    /**
     * マーチャントクーポン<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * マーチャント原資のクーポンの利用金額を返します。<br/>
     */
    private $merchantCoupon;

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
     * 売上日時（YYYYMMDDhhmmss）<br>
     * 半角英数字<br/>
     * 最大桁数：14<br/>
     * リクルートで処理が完了した日時を返します。<br/>
     */
    private $captureDatetime;


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
     * 残高を取得する<br>
     * @return string 残高<br>
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * 残高を設定する<br>
     * @param string $balance 残高<br>
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * 利用ポイントを取得する<br>
     * @return string 利用ポイント<br>
     */
    public function getUsePoint()
    {
        return $this->usePoint;
    }

    /**
     * 利用ポイントを設定する<br>
     * @param string $usePoint 利用ポイント<br>
     */
    public function setUsePoint($usePoint)
    {
        $this->usePoint = $usePoint;
    }

    /**
     * 付与ポイントを取得する<br>
     * @return string 付与ポイント<br>
     */
    public function getGivePoint()
    {
        return $this->givePoint;
    }

    /**
     * 付与ポイントを設定する<br>
     * @param string $givePoint 付与ポイント<br>
     */
    public function setGivePoint($givePoint)
    {
        $this->givePoint = $givePoint;
    }

    /**
     * リクルートクーポンを取得する<br>
     * @return string リクルートクーポン<br>
     */
    public function getRecruitCoupon()
    {
        return $this->recruitCoupon;
    }

    /**
     * リクルートクーポンを設定する<br>
     * @param string $recruitCoupon リクルートクーポン<br>
     */
    public function setRecruitCoupon($recruitCoupon)
    {
        $this->recruitCoupon = $recruitCoupon;
    }

    /**
     * マーチャントクーポンを取得する<br>
     * @return string マーチャントクーポン<br>
     */
    public function getMerchantCoupon()
    {
        return $this->merchantCoupon;
    }

    /**
     * マーチャントクーポンを設定する<br>
     * @param string $merchantCoupon マーチャントクーポン<br>
     */
    public function setMerchantCoupon($merchantCoupon)
    {
        $this->merchantCoupon = $merchantCoupon;
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
     * 売上日時（YYYYMMDDhhmmss）を取得する<br>
     * @return string 売上日時（YYYYMMDDhhmmss）<br>
     */
    public function getCaptureDatetime()
    {
        return $this->captureDatetime;
    }

    /**
     * 売上日時（YYYYMMDDhhmmss）を設定する<br>
     * @param string $captureDatetime 売上日時（YYYYMMDDhhmmss）<br>
     */
    public function setCaptureDatetime($captureDatetime)
    {
        $this->captureDatetime = $captureDatetime;
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
