<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Saison取消請求応答電文DTOクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class SaisonCancelResponseDto extends MdkBaseDto
{

    /**
     * 処理後永久不滅ウォレット残高<br>
     * 半角数字<br/>
     * 最大桁数：10<br/>
     * 決済処理後の永久不滅ウォレットの残高を返却します。<br/>
     * （100億以上の残高は一律"9999999999"が設定される）<br/>
     */
    private $aqfPointBalance;

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * "saison"： 永久不滅ウォレット決済<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 処理結果に対するステータスを返却します。<br/>
     * "success"：正常終了<br/>
     * "failure"：異常終了<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
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
     * 電文ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 取消請求時に指定された取引IDを返却します。<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDK バージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * カード決済種別<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * カード決済のコマンド種別を表す。<br/>
     * "CardCancel"：カード決済キャンセル<br/>
     */
    private $cardKind;

    /**
     * 決済サービスタイプ（カード決済）<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     */
    private $cardServiceType;

    /**
     * 処理結果コード（カード決済）<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     */
    private $cardMstatus;

    /**
     * 詳細結果コード（カード決済）<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     */
    private $cardVResultCode;

    /**
     * エラーメッセージ（カード決済）<br>
     * 文字列<br/>
     * 最大桁数：300<br/>
     */
    private $cardMerrMsg;

    /**
     * 電文ID（カード決済）<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $cardMarchTxn;

    /**
     * 取引ID（カード決済）<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $cardOrderId;

    /**
     * 取引毎に付くID（カード決済）<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $cardCustTxn;

    /**
     * MDK バージョン（カード決済）<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     */
    private $cardTxnVersion;

    /**
     * カードトランザクションタイプ<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     */
    private $cardTransactiontype;

    /**
     * ゲートウェイ要求日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     */
    private $gatewayRequestDate;

    /**
     * ゲートウェイ応答日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     */
    private $gatewayResponseDate;

    /**
     * センター要求日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     */
    private $centerRequestDate;

    /**
     * センター応答日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     */
    private $centerResponseDate;

    /**
     * ペンディング<br>
     * 文字列<br/>
     * 最大桁数：1<br/>
     */
    private $pending;

    /**
     * ループバック<br>
     * 文字列<br/>
     * 最大桁数：1<br/>
     */
    private $loopback;

    /**
     * 接続先カード接続センター<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $connectedCenterId;

    /**
     * センター要求番号<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $centerRequestNumber;

    /**
     * センターリファレンス番号<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $centerReferenceNumber;

    /**
     * 要求カード番号<br>
     * 文字列<br/>
     * 最大桁数：19<br/>
     */
    private $reqCardNumber;

    /**
     * 要求カード有効期限<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $reqCardExpire;

    /**
     * 要求カードオプションタイプ<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $reqCardOptionType;

    /**
     * 要求取引金額<br>
     * 文字列<br/>
     * 最大桁数：12<br/>
     */
    private $reqAmount;

    /**
     * 要求マーチャントトランザクション番号<br>
     * 文字列<br/>
     * 最大桁数：9<br/>
     */
    private $reqMerchantTransaction;

    /**
     * 要求リターン参照番号<br>
     * 文字列<br/>
     * 最大桁数：12<br/>
     */
    private $reqReturnReferenceNumber;

    /**
     * 要求承認番号<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $reqAuthCode;

    /**
     * 要求仕向け先コード<br>
     * 文字列<br/>
     * 最大桁数：2<br/>
     */
    private $reqAcquirerCode;

    /**
     * 要求商品コード<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $reqItemCode;

    /**
     * 要求カードセンター<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $reqCardCenter;

    /**
     * 要求支払種別情報<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $reqJpoInformation;

    /**
     * 要求売上日<br>
     * 文字列<br/>
     * 最大桁数：8<br/>
     */
    private $reqSalesDay;

    /**
     * 要求取消日<br>
     * 文字列<br/>
     * 最大桁数：8<br/>
     */
    private $reqCancelDay;

    /**
     * 要求同時売上<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $reqWithCapture;

    /**
     * 要求同時直接<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $reqWithDirect;

    /**
     * 要求セキュリティコード<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     */
    private $reqSecurityCode;

    /**
     * 要求認証番号<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $reqAuthFlag;

    /**
     * 要求誕生日<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     */
    private $reqBirthday;

    /**
     * 要求電話番号<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     */
    private $reqTel;

    /**
     * 要求カナ名前（名）<br>
     * 文字列<br/>
     * 最大桁数：15<br/>
     */
    private $reqFirstKanaName;

    /**
     * 要求カナ名前（姓）<br>
     * 文字列<br/>
     * 最大桁数：15<br/>
     */
    private $reqLastKanaName;

    /**
     * 応答マーチャントトランザクション番号<br>
     * 文字列<br/>
     * 最大桁数：9<br/>
     */
    private $resMerchantTransaction;

    /**
     * 応答リターン参照番号<br>
     * 文字列<br/>
     * 最大桁数：12<br/>
     */
    private $resReturnReferenceNumber;

    /**
     * 応答承認番号<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $resAuthCode;

    /**
     * アクションコード<br>
     * 文字列<br/>
     * 最大桁数：3<br/>
     */
    private $resActionCode;

    /**
     * 応答センターエラーコード<br>
     * 文字列<br/>
     * 最大桁数：3<br/>
     */
    private $resCenterErrorCode;

    /**
     * 応答商品コード<br>
     * 文字列<br/>
     * 最大桁数：7<br/>
     */
    private $resItemCode;

    /**
     * 応答データ<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     */
    private $resResponseData;

    /**
     * 要求通貨単位<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     */
    private $reqCurrencyUnit;

    /**
     * 要求新規返品<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     */
    private $reqWithNew;

    /**
     * 仕向け先コード<br>
     * 文字列<br/>
     * 最大桁数：2<br/>
     */
    private $acquirerCode;


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
     * 処理後永久不滅ウォレット残高を設定する<br>
     * @param string $aqfPointBalance 処理後永久不滅ウォレット残高<br>
     */
    public function setAqfPointBalance($aqfPointBalance)
    {
        $this->aqfPointBalance = $aqfPointBalance;
    }

    /**
     * 処理後永久不滅ウォレット残高を取得する<br>
     * @return string 処理後永久不滅ウォレット残高<br>
     */
    public function getAqfPointBalance()
    {
        return $this->aqfPointBalance;
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
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
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
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
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
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
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
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
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
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
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
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
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
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
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
     * MDK バージョンを取得する<br>
     * @return string MDK バージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * カード決済種別を設定する<br>
     * @param string $cardKind カード決済種別<br>
     */
    public function setCardKind($cardKind)
    {
        $this->cardKind = $cardKind;
    }

    /**
     * カード決済種別を取得する<br>
     * @return string カード決済種別<br>
     */
    public function getCardKind()
    {
        return $this->cardKind;
    }

    /**
     * 決済サービスタイプ（カード決済）を設定する<br>
     * @param string $cardServiceType 決済サービスタイプ（カード決済）<br>
     */
    public function setCardServiceType($cardServiceType)
    {
        $this->cardServiceType = $cardServiceType;
    }

    /**
     * 決済サービスタイプ（カード決済）を取得する<br>
     * @return string 決済サービスタイプ（カード決済）<br>
     */
    public function getCardServiceType()
    {
        return $this->cardServiceType;
    }

    /**
     * 処理結果コード（カード決済）を設定する<br>
     * @param string $cardMstatus 処理結果コード（カード決済）<br>
     */
    public function setCardMstatus($cardMstatus)
    {
        $this->cardMstatus = $cardMstatus;
    }

    /**
     * 処理結果コード（カード決済）を取得する<br>
     * @return string 処理結果コード（カード決済）<br>
     */
    public function getCardMstatus()
    {
        return $this->cardMstatus;
    }

    /**
     * 詳細結果コード（カード決済）を設定する<br>
     * @param string $cardVResultCode 詳細結果コード（カード決済）<br>
     */
    public function setCardVResultCode($cardVResultCode)
    {
        $this->cardVResultCode = $cardVResultCode;
    }

    /**
     * 詳細結果コード（カード決済）を取得する<br>
     * @return string 詳細結果コード（カード決済）<br>
     */
    public function getCardVResultCode()
    {
        return $this->cardVResultCode;
    }

    /**
     * エラーメッセージ（カード決済）を設定する<br>
     * @param string $cardMerrMsg エラーメッセージ（カード決済）<br>
     */
    public function setCardMerrMsg($cardMerrMsg)
    {
        $this->cardMerrMsg = $cardMerrMsg;
    }

    /**
     * エラーメッセージ（カード決済）を取得する<br>
     * @return string エラーメッセージ（カード決済）<br>
     */
    public function getCardMerrMsg()
    {
        return $this->cardMerrMsg;
    }

    /**
     * 電文ID（カード決済）を設定する<br>
     * @param string $cardMarchTxn 電文ID（カード決済）<br>
     */
    public function setCardMarchTxn($cardMarchTxn)
    {
        $this->cardMarchTxn = $cardMarchTxn;
    }

    /**
     * 電文ID（カード決済）を取得する<br>
     * @return string 電文ID（カード決済）<br>
     */
    public function getCardMarchTxn()
    {
        return $this->cardMarchTxn;
    }

    /**
     * 取引ID（カード決済）を設定する<br>
     * @param string $cardOrderId 取引ID（カード決済）<br>
     */
    public function setCardOrderId($cardOrderId)
    {
        $this->cardOrderId = $cardOrderId;
    }

    /**
     * 取引ID（カード決済）を取得する<br>
     * @return string 取引ID（カード決済）<br>
     */
    public function getCardOrderId()
    {
        return $this->cardOrderId;
    }

    /**
     * 取引毎に付くID（カード決済）を設定する<br>
     * @param string $cardCustTxn 取引毎に付くID（カード決済）<br>
     */
    public function setCardCustTxn($cardCustTxn)
    {
        $this->cardCustTxn = $cardCustTxn;
    }

    /**
     * 取引毎に付くID（カード決済）を取得する<br>
     * @return string 取引毎に付くID（カード決済）<br>
     */
    public function getCardCustTxn()
    {
        return $this->cardCustTxn;
    }

    /**
     * MDK バージョン（カード決済）を設定する<br>
     * @param string $cardTxnVersion MDK バージョン（カード決済）<br>
     */
    public function setCardTxnVersion($cardTxnVersion)
    {
        $this->cardTxnVersion = $cardTxnVersion;
    }

    /**
     * MDK バージョン（カード決済）を取得する<br>
     * @return string MDK バージョン（カード決済）<br>
     */
    public function getCardTxnVersion()
    {
        return $this->cardTxnVersion;
    }

    /**
     * カードトランザクションタイプを設定する<br>
     * @param string $cardTransactiontype カードトランザクションタイプ<br>
     */
    public function setCardTransactiontype($cardTransactiontype)
    {
        $this->cardTransactiontype = $cardTransactiontype;
    }

    /**
     * カードトランザクションタイプを取得する<br>
     * @return string カードトランザクションタイプ<br>
     */
    public function getCardTransactiontype()
    {
        return $this->cardTransactiontype;
    }

    /**
     * ゲートウェイ要求日時を設定する<br>
     * @param string $gatewayRequestDate ゲートウェイ要求日時<br>
     */
    public function setGatewayRequestDate($gatewayRequestDate)
    {
        $this->gatewayRequestDate = $gatewayRequestDate;
    }

    /**
     * ゲートウェイ要求日時を取得する<br>
     * @return string ゲートウェイ要求日時<br>
     */
    public function getGatewayRequestDate()
    {
        return $this->gatewayRequestDate;
    }

    /**
     * ゲートウェイ応答日時を設定する<br>
     * @param string $gatewayResponseDate ゲートウェイ応答日時<br>
     */
    public function setGatewayResponseDate($gatewayResponseDate)
    {
        $this->gatewayResponseDate = $gatewayResponseDate;
    }

    /**
     * ゲートウェイ応答日時を取得する<br>
     * @return string ゲートウェイ応答日時<br>
     */
    public function getGatewayResponseDate()
    {
        return $this->gatewayResponseDate;
    }

    /**
     * センター要求日時を設定する<br>
     * @param string $centerRequestDate センター要求日時<br>
     */
    public function setCenterRequestDate($centerRequestDate)
    {
        $this->centerRequestDate = $centerRequestDate;
    }

    /**
     * センター要求日時を取得する<br>
     * @return string センター要求日時<br>
     */
    public function getCenterRequestDate()
    {
        return $this->centerRequestDate;
    }

    /**
     * センター応答日時を設定する<br>
     * @param string $centerResponseDate センター応答日時<br>
     */
    public function setCenterResponseDate($centerResponseDate)
    {
        $this->centerResponseDate = $centerResponseDate;
    }

    /**
     * センター応答日時を取得する<br>
     * @return string センター応答日時<br>
     */
    public function getCenterResponseDate()
    {
        return $this->centerResponseDate;
    }

    /**
     * ペンディングを設定する<br>
     * @param string $pending ペンディング<br>
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
    }

    /**
     * ペンディングを取得する<br>
     * @return string ペンディング<br>
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * ループバックを設定する<br>
     * @param string $loopback ループバック<br>
     */
    public function setLoopback($loopback)
    {
        $this->loopback = $loopback;
    }

    /**
     * ループバックを取得する<br>
     * @return string ループバック<br>
     */
    public function getLoopback()
    {
        return $this->loopback;
    }

    /**
     * 接続先カード接続センターを設定する<br>
     * @param string $connectedCenterId 接続先カード接続センター<br>
     */
    public function setConnectedCenterId($connectedCenterId)
    {
        $this->connectedCenterId = $connectedCenterId;
    }

    /**
     * 接続先カード接続センターを取得する<br>
     * @return string 接続先カード接続センター<br>
     */
    public function getConnectedCenterId()
    {
        return $this->connectedCenterId;
    }

    /**
     * センター要求番号を設定する<br>
     * @param string $centerRequestNumber センター要求番号<br>
     */
    public function setCenterRequestNumber($centerRequestNumber)
    {
        $this->centerRequestNumber = $centerRequestNumber;
    }

    /**
     * センター要求番号を取得する<br>
     * @return string センター要求番号<br>
     */
    public function getCenterRequestNumber()
    {
        return $this->centerRequestNumber;
    }

    /**
     * センターリファレンス番号を設定する<br>
     * @param string $centerReferenceNumber センターリファレンス番号<br>
     */
    public function setCenterReferenceNumber($centerReferenceNumber)
    {
        $this->centerReferenceNumber = $centerReferenceNumber;
    }

    /**
     * センターリファレンス番号を取得する<br>
     * @return string センターリファレンス番号<br>
     */
    public function getCenterReferenceNumber()
    {
        return $this->centerReferenceNumber;
    }

    /**
     * 要求カード番号を設定する<br>
     * @param string $reqCardNumber 要求カード番号<br>
     */
    public function setReqCardNumber($reqCardNumber)
    {
        $this->reqCardNumber = $reqCardNumber;
    }

    /**
     * 要求カード番号を取得する<br>
     * @return string 要求カード番号<br>
     */
    public function getReqCardNumber()
    {
        return $this->reqCardNumber;
    }

    /**
     * 要求カード有効期限を設定する<br>
     * @param string $reqCardExpire 要求カード有効期限<br>
     */
    public function setReqCardExpire($reqCardExpire)
    {
        $this->reqCardExpire = $reqCardExpire;
    }

    /**
     * 要求カード有効期限を取得する<br>
     * @return string 要求カード有効期限<br>
     */
    public function getReqCardExpire()
    {
        return $this->reqCardExpire;
    }

    /**
     * 要求カードオプションタイプを設定する<br>
     * @param string $reqCardOptionType 要求カードオプションタイプ<br>
     */
    public function setReqCardOptionType($reqCardOptionType)
    {
        $this->reqCardOptionType = $reqCardOptionType;
    }

    /**
     * 要求カードオプションタイプを取得する<br>
     * @return string 要求カードオプションタイプ<br>
     */
    public function getReqCardOptionType()
    {
        return $this->reqCardOptionType;
    }

    /**
     * 要求取引金額を設定する<br>
     * @param string $reqAmount 要求取引金額<br>
     */
    public function setReqAmount($reqAmount)
    {
        $this->reqAmount = $reqAmount;
    }

    /**
     * 要求取引金額を取得する<br>
     * @return string 要求取引金額<br>
     */
    public function getReqAmount()
    {
        return $this->reqAmount;
    }

    /**
     * 要求マーチャントトランザクション番号を設定する<br>
     * @param string $reqMerchantTransaction 要求マーチャントトランザクション番号<br>
     */
    public function setReqMerchantTransaction($reqMerchantTransaction)
    {
        $this->reqMerchantTransaction = $reqMerchantTransaction;
    }

    /**
     * 要求マーチャントトランザクション番号を取得する<br>
     * @return string 要求マーチャントトランザクション番号<br>
     */
    public function getReqMerchantTransaction()
    {
        return $this->reqMerchantTransaction;
    }

    /**
     * 要求リターン参照番号を設定する<br>
     * @param string $reqReturnReferenceNumber 要求リターン参照番号<br>
     */
    public function setReqReturnReferenceNumber($reqReturnReferenceNumber)
    {
        $this->reqReturnReferenceNumber = $reqReturnReferenceNumber;
    }

    /**
     * 要求リターン参照番号を取得する<br>
     * @return string 要求リターン参照番号<br>
     */
    public function getReqReturnReferenceNumber()
    {
        return $this->reqReturnReferenceNumber;
    }

    /**
     * 要求承認番号を設定する<br>
     * @param string $reqAuthCode 要求承認番号<br>
     */
    public function setReqAuthCode($reqAuthCode)
    {
        $this->reqAuthCode = $reqAuthCode;
    }

    /**
     * 要求承認番号を取得する<br>
     * @return string 要求承認番号<br>
     */
    public function getReqAuthCode()
    {
        return $this->reqAuthCode;
    }

    /**
     * 要求仕向け先コードを設定する<br>
     * @param string $reqAcquirerCode 要求仕向け先コード<br>
     */
    public function setReqAcquirerCode($reqAcquirerCode)
    {
        $this->reqAcquirerCode = $reqAcquirerCode;
    }

    /**
     * 要求仕向け先コードを取得する<br>
     * @return string 要求仕向け先コード<br>
     */
    public function getReqAcquirerCode()
    {
        return $this->reqAcquirerCode;
    }

    /**
     * 要求商品コードを設定する<br>
     * @param string $reqItemCode 要求商品コード<br>
     */
    public function setReqItemCode($reqItemCode)
    {
        $this->reqItemCode = $reqItemCode;
    }

    /**
     * 要求商品コードを取得する<br>
     * @return string 要求商品コード<br>
     */
    public function getReqItemCode()
    {
        return $this->reqItemCode;
    }

    /**
     * 要求カードセンターを設定する<br>
     * @param string $reqCardCenter 要求カードセンター<br>
     */
    public function setReqCardCenter($reqCardCenter)
    {
        $this->reqCardCenter = $reqCardCenter;
    }

    /**
     * 要求カードセンターを取得する<br>
     * @return string 要求カードセンター<br>
     */
    public function getReqCardCenter()
    {
        return $this->reqCardCenter;
    }

    /**
     * 要求支払種別情報を設定する<br>
     * @param string $reqJpoInformation 要求支払種別情報<br>
     */
    public function setReqJpoInformation($reqJpoInformation)
    {
        $this->reqJpoInformation = $reqJpoInformation;
    }

    /**
     * 要求支払種別情報を取得する<br>
     * @return string 要求支払種別情報<br>
     */
    public function getReqJpoInformation()
    {
        return $this->reqJpoInformation;
    }

    /**
     * 要求売上日を設定する<br>
     * @param string $reqSalesDay 要求売上日<br>
     */
    public function setReqSalesDay($reqSalesDay)
    {
        $this->reqSalesDay = $reqSalesDay;
    }

    /**
     * 要求売上日を取得する<br>
     * @return string 要求売上日<br>
     */
    public function getReqSalesDay()
    {
        return $this->reqSalesDay;
    }

    /**
     * 要求取消日を設定する<br>
     * @param string $reqCancelDay 要求取消日<br>
     */
    public function setReqCancelDay($reqCancelDay)
    {
        $this->reqCancelDay = $reqCancelDay;
    }

    /**
     * 要求取消日を取得する<br>
     * @return string 要求取消日<br>
     */
    public function getReqCancelDay()
    {
        return $this->reqCancelDay;
    }

    /**
     * 要求同時売上を設定する<br>
     * @param string $reqWithCapture 要求同時売上<br>
     */
    public function setReqWithCapture($reqWithCapture)
    {
        $this->reqWithCapture = $reqWithCapture;
    }

    /**
     * 要求同時売上を取得する<br>
     * @return string 要求同時売上<br>
     */
    public function getReqWithCapture()
    {
        return $this->reqWithCapture;
    }

    /**
     * 要求同時直接を設定する<br>
     * @param string $reqWithDirect 要求同時直接<br>
     */
    public function setReqWithDirect($reqWithDirect)
    {
        $this->reqWithDirect = $reqWithDirect;
    }

    /**
     * 要求同時直接を取得する<br>
     * @return string 要求同時直接<br>
     */
    public function getReqWithDirect()
    {
        return $this->reqWithDirect;
    }

    /**
     * 要求セキュリティコードを設定する<br>
     * @param string $reqSecurityCode 要求セキュリティコード<br>
     */
    public function setReqSecurityCode($reqSecurityCode)
    {
        $this->reqSecurityCode = $reqSecurityCode;
    }

    /**
     * 要求セキュリティコードを取得する<br>
     * @return string 要求セキュリティコード<br>
     */
    public function getReqSecurityCode()
    {
        return $this->reqSecurityCode;
    }

    /**
     * 要求認証番号を設定する<br>
     * @param string $reqAuthFlag 要求認証番号<br>
     */
    public function setReqAuthFlag($reqAuthFlag)
    {
        $this->reqAuthFlag = $reqAuthFlag;
    }

    /**
     * 要求認証番号を取得する<br>
     * @return string 要求認証番号<br>
     */
    public function getReqAuthFlag()
    {
        return $this->reqAuthFlag;
    }

    /**
     * 要求誕生日を設定する<br>
     * @param string $reqBirthday 要求誕生日<br>
     */
    public function setReqBirthday($reqBirthday)
    {
        $this->reqBirthday = $reqBirthday;
    }

    /**
     * 要求誕生日を取得する<br>
     * @return string 要求誕生日<br>
     */
    public function getReqBirthday()
    {
        return $this->reqBirthday;
    }

    /**
     * 要求電話番号を設定する<br>
     * @param string $reqTel 要求電話番号<br>
     */
    public function setReqTel($reqTel)
    {
        $this->reqTel = $reqTel;
    }

    /**
     * 要求電話番号を取得する<br>
     * @return string 要求電話番号<br>
     */
    public function getReqTel()
    {
        return $this->reqTel;
    }

    /**
     * 要求カナ名前（名）を設定する<br>
     * @param string $reqFirstKanaName 要求カナ名前（名）<br>
     */
    public function setReqFirstKanaName($reqFirstKanaName)
    {
        $this->reqFirstKanaName = $reqFirstKanaName;
    }

    /**
     * 要求カナ名前（名）を取得する<br>
     * @return string 要求カナ名前（名）<br>
     */
    public function getReqFirstKanaName()
    {
        return $this->reqFirstKanaName;
    }

    /**
     * 要求カナ名前（姓）を設定する<br>
     * @param string $reqLastKanaName 要求カナ名前（姓）<br>
     */
    public function setReqLastKanaName($reqLastKanaName)
    {
        $this->reqLastKanaName = $reqLastKanaName;
    }

    /**
     * 要求カナ名前（姓）を取得する<br>
     * @return string 要求カナ名前（姓）<br>
     */
    public function getReqLastKanaName()
    {
        return $this->reqLastKanaName;
    }

    /**
     * 応答マーチャントトランザクション番号を設定する<br>
     * @param string $resMerchantTransaction 応答マーチャントトランザクション番号<br>
     */
    public function setResMerchantTransaction($resMerchantTransaction)
    {
        $this->resMerchantTransaction = $resMerchantTransaction;
    }

    /**
     * 応答マーチャントトランザクション番号を取得する<br>
     * @return string 応答マーチャントトランザクション番号<br>
     */
    public function getResMerchantTransaction()
    {
        return $this->resMerchantTransaction;
    }

    /**
     * 応答リターン参照番号を設定する<br>
     * @param string $resReturnReferenceNumber 応答リターン参照番号<br>
     */
    public function setResReturnReferenceNumber($resReturnReferenceNumber)
    {
        $this->resReturnReferenceNumber = $resReturnReferenceNumber;
    }

    /**
     * 応答リターン参照番号を取得する<br>
     * @return string 応答リターン参照番号<br>
     */
    public function getResReturnReferenceNumber()
    {
        return $this->resReturnReferenceNumber;
    }

    /**
     * 応答承認番号を設定する<br>
     * @param string $resAuthCode 応答承認番号<br>
     */
    public function setResAuthCode($resAuthCode)
    {
        $this->resAuthCode = $resAuthCode;
    }

    /**
     * 応答承認番号を取得する<br>
     * @return string 応答承認番号<br>
     */
    public function getResAuthCode()
    {
        return $this->resAuthCode;
    }

    /**
     * アクションコードを設定する<br>
     * @param string $resActionCode アクションコード<br>
     */
    public function setResActionCode($resActionCode)
    {
        $this->resActionCode = $resActionCode;
    }

    /**
     * アクションコードを取得する<br>
     * @return string アクションコード<br>
     */
    public function getResActionCode()
    {
        return $this->resActionCode;
    }

    /**
     * 応答センターエラーコードを設定する<br>
     * @param string $resCenterErrorCode 応答センターエラーコード<br>
     */
    public function setResCenterErrorCode($resCenterErrorCode)
    {
        $this->resCenterErrorCode = $resCenterErrorCode;
    }

    /**
     * 応答センターエラーコードを取得する<br>
     * @return string 応答センターエラーコード<br>
     */
    public function getResCenterErrorCode()
    {
        return $this->resCenterErrorCode;
    }

    /**
     * 応答商品コードを設定する<br>
     * @param string $resItemCode 応答商品コード<br>
     */
    public function setResItemCode($resItemCode)
    {
        $this->resItemCode = $resItemCode;
    }

    /**
     * 応答商品コードを取得する<br>
     * @return string 応答商品コード<br>
     */
    public function getResItemCode()
    {
        return $this->resItemCode;
    }

    /**
     * 応答データを設定する<br>
     * @param string $resResponseData 応答データ<br>
     */
    public function setResResponseData($resResponseData)
    {
        $this->resResponseData = $resResponseData;
    }

    /**
     * 応答データを取得する<br>
     * @return string 応答データ<br>
     */
    public function getResResponseData()
    {
        return $this->resResponseData;
    }

    /**
     * 要求通貨単位を設定する<br>
     * @param string $reqCurrencyUnit 要求通貨単位<br>
     */
    public function setReqCurrencyUnit($reqCurrencyUnit)
    {
        $this->reqCurrencyUnit = $reqCurrencyUnit;
    }

    /**
     * 要求通貨単位を取得する<br>
     * @return string 要求通貨単位<br>
     */
    public function getReqCurrencyUnit()
    {
        return $this->reqCurrencyUnit;
    }

    /**
     * 要求新規返品を設定する<br>
     * @param string $reqWithNew 要求新規返品<br>
     */
    public function setReqWithNew($reqWithNew)
    {
        $this->reqWithNew = $reqWithNew;
    }

    /**
     * 要求新規返品を取得する<br>
     * @return string 要求新規返品<br>
     */
    public function getReqWithNew()
    {
        return $this->reqWithNew;
    }

    /**
     * 仕向け先コードを設定する<br>
     * @param string $acquirerCode 仕向け先コード<br>
     */
    public function setAcquirerCode($acquirerCode)
    {
        $this->acquirerCode = $acquirerCode;
    }

    /**
     * 仕向け先コードを取得する<br>
     * @return string 仕向け先コード<br>
     */
    public function getAcquirerCode()
    {
        return $this->acquirerCode;
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
