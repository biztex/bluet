<?php

namespace tgMdk\dto;

/**
 * 検索結果:Saisonトランザクションカード情報電文のクラス
 *
 * @author Veritrans, Inc.
 *
 */
class TransactionCard
{

    /**
     * カード決済種別<br>
     */
    private $saCardKind;

    /**
     * カード決済金額<br>
     */
    private $cardAmount;

    /**
     * カード取引ID<br>
     */
    private $cardOrderId;

    /**
     * 支払種別<br>
     */
    private $jpo;

    /**
     * 売上フラグ<br>
     */
    private $withCapture;

    /**
     * 決済サービスタイプ<br>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     */
    private $merrmsg;

    /**
     * 電文ID<br>
     */
    private $marchTxn;

    /**
     * 応答カード取引ID<br>
     */
    private $resOrderId;

    /**
     * 取引毎に付くID<br>
     */
    private $custTxn;

    /**
     * MDK バージョン<br>
     */
    private $txnVersion;

    /**
     * カードトランザクションタイプ<br>
     */
    private $cardTransactionType;

    /**
     * ゲートウェイ要求日時<br>
     */
    private $gatewayRequestDate;

    /**
     * ゲートウェイ応答日時<br>
     */
    private $gatewayResponseDate;

    /**
     * センター要求日時<br>
     */
    private $centerRequestDate;

    /**
     * センター応答日時<br>
     */
    private $centerResponseDate;

    /**
     * ペンディング<br>
     */
    private $pending;

    /**
     * ループバック<br>
     */
    private $loopback;

    /**
     * 接続先カード接続センター<br>
     */
    private $connectedCenterId;

    /**
     * センター要求番号<br>
     */
    private $centerRequestNumber;

    /**
     * センターリファレンス番号<br>
     */
    private $centerReferenceNumber;

    /**
     * 要求カード番号<br>
     */
    private $reqCardNumber;

    /**
     * 要求カード有効期限<br>
     */
    private $reqCardExpire;

    /**
     * 要求カードオプションタイプ<br>
     */
    private $reqCardOptionType;

    /**
     * 要求取引金額<br>
     */
    private $reqAmount;

    /**
     * 要求マーチャントトランザクション番号<br>
     */
    private $reqMerchantTransaction;

    /**
     * 要求リターン参照番号<br>
     */
    private $reqReturnReferenceNumber;

    /**
     * 要求承認番号<br>
     */
    private $reqAuthCode;

    /**
     * 要求仕向け先コード<br>
     */
    private $reqAcquirerCode;

    /**
     * 要求商品コード<br>
     */
    private $reqItemCode;

    /**
     * 要求カードセンター<br>
     */
    private $reqCardCenter;

    /**
     * 要求支払種別情報<br>
     */
    private $reqJpoInformation;

    /**
     * 要求売上日<br>
     */
    private $reqSalesDay;

    /**
     * 要求取消日<br>
     */
    private $reqCancelDay;

    /**
     * 要求同時売上<br>
     */
    private $reqWithCapture;

    /**
     * 要求同時直接<br>
     */
    private $reqWithDirect;

    /**
     * 要求セキュリティコード<br>
     */
    private $reqSecurityCode;

    /**
     * 要求認証番号<br>
     */
    private $reqAuthFlag;

    /**
     * 要求誕生日<br>
     */
    private $reqBirthday;

    /**
     * 要求電話番号<br>
     */
    private $reqTel;

    /**
     * 要求カナ名前（名）<br>
     */
    private $reqFirstKanaName;

    /**
     * 要求カナ名前（姓）<br>
     */
    private $reqLastKanaName;

    /**
     * 応答マーチャントトランザクション番号<br>
     */
    private $resMerchantTransaction;

    /**
     * 応答リターン参照番号<br>
     */
    private $resReturnReferenceNumber;

    /**
     * 応答承認番号<br>
     */
    private $resAuthCode;

    /**
     * アクションコード<br>
     */
    private $resActionCode;

    /**
     * 応答センターエラーコード<br>
     */
    private $resCenterErrorCode;

    /**
     * 応答商品コード<br>
     */
    private $resItemCode;

    /**
     * 応答データ<br>
     */
    private $resResponseData;

    /**
     * 要求通貨単位<br>
     */
    private $reqCurrencyUnit;

    /**
     * 要求新規返品<br>
     */
    private $reqWithNew;

    /**
     * 仕向け先コード<br>
     */
    private $acquirerCode;


    /**
     * カード決済種別を設定する<br>
     * @param string $saCardKind カード決済種別<br>
     */
    public function setSaCardKind($saCardKind)
    {
        $this->saCardKind = $saCardKind;
    }

    /**
     * カード決済種別を取得する<br>
     * @return string カード決済種別<br>
     */
    public function getSaCardKind()
    {
        return $this->saCardKind;
    }

    /**
     * カード決済金額を設定する<br>
     * @param string $cardAmount カード決済金額<br>
     */
    public function setCardAmount($cardAmount)
    {
        $this->cardAmount = $cardAmount;
    }

    /**
     * カード決済金額を取得する<br>
     * @return string カード決済金額<br>
     */
    public function getCardAmount()
    {
        return $this->cardAmount;
    }

    /**
     * カード取引IDを設定する<br>
     * @param string $cardOrderId カード取引ID<br>
     */
    public function setCardOrderId($cardOrderId)
    {
        $this->cardOrderId = $cardOrderId;
    }

    /**
     * カード取引IDを取得する<br>
     * @return string カード取引ID<br>
     */
    public function getCardOrderId()
    {
        return $this->cardOrderId;
    }

    /**
     * 支払種別を設定する<br>
     * @param string $jpo 支払種別<br>
     */
    public function setJpo($jpo)
    {
        $this->jpo = $jpo;
    }

    /**
     * 支払種別を取得する<br>
     * @return string 支払種別<br>
     */
    public function getJpo()
    {
        return $this->jpo;
    }

    /**
     * 売上フラグを設定する<br>
     * @param string $withCapture 売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
    }

    /**
     * 売上フラグを取得する<br>
     * @return string 売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
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
     * @param string $merrmsg エラーメッセージ<br>
     */
    public function setMerrmsg($merrmsg)
    {
        $this->merrmsg = $merrmsg;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrmsg()
    {
        return $this->merrmsg;
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
     * 応答カード取引IDを設定する<br>
     * @param string $resOrderId 応答カード取引ID<br>
     */
    public function setResOrderId($resOrderId)
    {
        $this->resOrderId = $resOrderId;
    }

    /**
     * 応答カード取引IDを取得する<br>
     * @return string 応答カード取引ID<br>
     */
    public function getResOrderId()
    {
        return $this->resOrderId;
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
     * カードトランザクションタイプを設定する<br>
     * @param string $cardTransactionType カードトランザクションタイプ<br>
     */
    public function setCardTransactionType($cardTransactionType)
    {
        $this->cardTransactionType = $cardTransactionType;
    }

    /**
     * カードトランザクションタイプを取得する<br>
     * @return string カードトランザクションタイプ<br>
     */
    public function getCardTransactionType()
    {
        return $this->cardTransactionType;
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


}
