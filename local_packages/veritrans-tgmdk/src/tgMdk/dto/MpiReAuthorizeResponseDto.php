<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：MPI、コマンド名：再取引の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MpiReAuthorizeResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "mpi"： MPI<br/>
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
     * MDK バージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * MPIトランザクションタイプ<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     * MPIトランザクションタイプ<br/>
     */
    private $mpiTransactiontype;

    /**
     * 要求カード番号<br>
     * 半角数字、記号<br/>
     * 最大桁数：26<br/>
     * 要求電文に設定した値<br/>
     * 上6桁下2桁のみ数字表示され、その他は"*"（アスタリスク）に変換されます。<br/>
     */
    private $reqCardNumber;

    /**
     * 要求カード有効期限<br>
     * 半角数字、記号<br/>
     * 最大桁数：5<br/>
     * 要求電文に設定した値<br/>
     * 全桁"*"（アスタリスク）に変換されます。<br/>
     */
    private $reqCardExpire;

    /**
     * 要求取引金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqAmount;

    /**
     * 要求仕向先コード<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqAcquirerCode;

    /**
     * 要求商品コード<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqItemCode;

    /**
     * 要求カードセンター<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqCardCenter;

    /**
     * 要求JPO情報<br>
     * 半角英数字<br/>
     * 最大桁数：138<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqJpoInformation;

    /**
     * 要求売上日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqSalesDay;

    /**
     * 要求同時売上<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqWithCapture;

    /**
     * 要求セキュリティコード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 要求電文に設定した値<br/>
     * 全桁”0”（ゼロ）に変換されます。<br/>
     */
    private $reqSecurityCode;

    /**
     * 要求誕生日<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqBirthday;

    /**
     * 要求電話番号<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqTel;

    /**
     * 要求カナ名前（名）<br>
     * 半角カナ<br/>
     * 最大桁数：15<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqFirstKanaName;

    /**
     * 要求カナ名前（姓）<br>
     * 半角カナ<br/>
     * 最大桁数：15<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqLastKanaName;

    /**
     * 要求通貨単位<br>
     * 英字<br/>
     * 最大桁数：3<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqCurrencyUnit;

    /**
     * リダイレクションURI<br>
     * 半角英数字<br/>
     * 最大桁数：1024<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqRedirectionUri;

    /**
     * 要求HTTPユーザエージェント<br>
     * 半角英数字記号<br/>
     * 最大桁数：-<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqHttpUserAgent;

    /**
     * 要求HTTPアクセプト<br>
     * 半角英数字記号<br/>
     * 最大桁数：-<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqHttpAccept;

    /**
     * 応答コンテンツ<br>
     * 半角英数字記号<br/>
     * 最大桁数：-<br/>
     * 本人認証が成功した場合にマーチャント側でコンシューマに対して応答するレスポンスです。<br/>
     */
    private $resResponseContents;

    /**
     * 応答会社ID<br>
     * 半角英数字<br/>
     * 最大桁数：2<br/>
     * 店舗が加盟店契約をしているカード会社のコード<br/>
     */
    private $resCorporationId;

    /**
     * 応答ブランドID<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * "35"：JCB<br/>
     * "4"：VISA<br/>
     * "5"：MASTER<br/>
     * "36"：DINERS<br/>
     * "37"：AMEX<br/>
     */
    private $resBrandId;

    /**
     * 応答3Dセキュアメッセージバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 3Dセキュアプロトコルのメッセージバージョン<br/>
     */
    private $res3dMessageVersion;

    /**
     * 本人認証要求日時<br>
     * 半角英数字記号<br/>
     * 最大桁数：28<br/>
     * 本人認証要求の受付時間<br/>
     * EEE MMM dd HH:mm:ss JST yyyy 形式 （例 "Tue Mar 07 13:17:40 JST 2017"）<br/>
     */
    private $authRequestDatetime;

    /**
     * 本人認証応答日時<br>
     * 半角英数字記号<br/>
     * 最大桁数：28<br/>
     * 本人認証の応答時間<br/>
     * EEE MMM dd HH:mm:ss JST yyyy 形式 （例 "Tue Mar 07 13:17:40 JST 2017"）<br/>
     */
    private $authResponseDatetime;

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
     * MPIトランザクションタイプを取得する<br>
     * @return string MPIトランザクションタイプ<br>
     */
    public function getMpiTransactiontype()
    {
        return $this->mpiTransactiontype;
    }

    /**
     * MPIトランザクションタイプを設定する<br>
     * @param string $mpiTransactiontype MPIトランザクションタイプ<br>
     */
    public function setMpiTransactiontype($mpiTransactiontype)
    {
        $this->mpiTransactiontype = $mpiTransactiontype;
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
     * 要求カード番号を設定する<br>
     * @param string $reqCardNumber 要求カード番号<br>
     */
    public function setReqCardNumber($reqCardNumber)
    {
        $this->reqCardNumber = $reqCardNumber;
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
     * 要求カード有効期限を設定する<br>
     * @param string $reqCardExpire 要求カード有効期限<br>
     */
    public function setReqCardExpire($reqCardExpire)
    {
        $this->reqCardExpire = $reqCardExpire;
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
     * 要求取引金額を設定する<br>
     * @param string $reqAmount 要求取引金額<br>
     */
    public function setReqAmount($reqAmount)
    {
        $this->reqAmount = $reqAmount;
    }

    /**
     * 要求仕向先コードを取得する<br>
     * @return string 要求仕向先コード<br>
     */
    public function getReqAcquirerCode()
    {
        return $this->reqAcquirerCode;
    }

    /**
     * 要求仕向先コードを設定する<br>
     * @param string $reqAcquirerCode 要求仕向先コード<br>
     */
    public function setReqAcquirerCode($reqAcquirerCode)
    {
        $this->reqAcquirerCode = $reqAcquirerCode;
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
     * 要求商品コードを設定する<br>
     * @param string $reqItemCode 要求商品コード<br>
     */
    public function setReqItemCode($reqItemCode)
    {
        $this->reqItemCode = $reqItemCode;
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
     * 要求カードセンターを設定する<br>
     * @param string $reqCardCenter 要求カードセンター<br>
     */
    public function setReqCardCenter($reqCardCenter)
    {
        $this->reqCardCenter = $reqCardCenter;
    }

    /**
     * 要求JPO情報を取得する<br>
     * @return string 要求JPO情報<br>
     */
    public function getReqJpoInformation()
    {
        return $this->reqJpoInformation;
    }

    /**
     * 要求JPO情報を設定する<br>
     * @param string $reqJpoInformation 要求JPO情報<br>
     */
    public function setReqJpoInformation($reqJpoInformation)
    {
        $this->reqJpoInformation = $reqJpoInformation;
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
     * 要求売上日を設定する<br>
     * @param string $reqSalesDay 要求売上日<br>
     */
    public function setReqSalesDay($reqSalesDay)
    {
        $this->reqSalesDay = $reqSalesDay;
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
     * 要求同時売上を設定する<br>
     * @param string $reqWithCapture 要求同時売上<br>
     */
    public function setReqWithCapture($reqWithCapture)
    {
        $this->reqWithCapture = $reqWithCapture;
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
     * 要求セキュリティコードを設定する<br>
     * @param string $reqSecurityCode 要求セキュリティコード<br>
     */
    public function setReqSecurityCode($reqSecurityCode)
    {
        $this->reqSecurityCode = $reqSecurityCode;
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
     * 要求誕生日を設定する<br>
     * @param string $reqBirthday 要求誕生日<br>
     */
    public function setReqBirthday($reqBirthday)
    {
        $this->reqBirthday = $reqBirthday;
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
     * 要求電話番号を設定する<br>
     * @param string $reqTel 要求電話番号<br>
     */
    public function setReqTel($reqTel)
    {
        $this->reqTel = $reqTel;
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
     * 要求カナ名前（名）を設定する<br>
     * @param string $reqFirstKanaName 要求カナ名前（名）<br>
     */
    public function setReqFirstKanaName($reqFirstKanaName)
    {
        $this->reqFirstKanaName = $reqFirstKanaName;
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
     * 要求カナ名前（姓）を設定する<br>
     * @param string $reqLastKanaName 要求カナ名前（姓）<br>
     */
    public function setReqLastKanaName($reqLastKanaName)
    {
        $this->reqLastKanaName = $reqLastKanaName;
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
     * 要求通貨単位を設定する<br>
     * @param string $reqCurrencyUnit 要求通貨単位<br>
     */
    public function setReqCurrencyUnit($reqCurrencyUnit)
    {
        $this->reqCurrencyUnit = $reqCurrencyUnit;
    }

    /**
     * リダイレクションURIを取得する<br>
     * @return string リダイレクションURI<br>
     */
    public function getReqRedirectionUri()
    {
        return $this->reqRedirectionUri;
    }

    /**
     * リダイレクションURIを設定する<br>
     * @param string $reqRedirectionUri リダイレクションURI<br>
     */
    public function setReqRedirectionUri($reqRedirectionUri)
    {
        $this->reqRedirectionUri = $reqRedirectionUri;
    }

    /**
     * 要求HTTPユーザエージェントを取得する<br>
     * @return string 要求HTTPユーザエージェント<br>
     */
    public function getReqHttpUserAgent()
    {
        return $this->reqHttpUserAgent;
    }

    /**
     * 要求HTTPユーザエージェントを設定する<br>
     * @param string $reqHttpUserAgent 要求HTTPユーザエージェント<br>
     */
    public function setReqHttpUserAgent($reqHttpUserAgent)
    {
        $this->reqHttpUserAgent = $reqHttpUserAgent;
    }

    /**
     * 要求HTTPアクセプトを取得する<br>
     * @return string 要求HTTPアクセプト<br>
     */
    public function getReqHttpAccept()
    {
        return $this->reqHttpAccept;
    }

    /**
     * 要求HTTPアクセプトを設定する<br>
     * @param string $reqHttpAccept 要求HTTPアクセプト<br>
     */
    public function setReqHttpAccept($reqHttpAccept)
    {
        $this->reqHttpAccept = $reqHttpAccept;
    }

    /**
     * 応答コンテンツを取得する<br>
     * @return string 応答コンテンツ<br>
     */
    public function getResResponseContents()
    {
        return $this->resResponseContents;
    }

    /**
     * 応答コンテンツを設定する<br>
     * @param string $resResponseContents 応答コンテンツ<br>
     */
    public function setResResponseContents($resResponseContents)
    {
        $this->resResponseContents = $resResponseContents;
    }

    /**
     * 応答会社IDを取得する<br>
     * @return string 応答会社ID<br>
     */
    public function getResCorporationId()
    {
        return $this->resCorporationId;
    }

    /**
     * 応答会社IDを設定する<br>
     * @param string $resCorporationId 応答会社ID<br>
     */
    public function setResCorporationId($resCorporationId)
    {
        $this->resCorporationId = $resCorporationId;
    }

    /**
     * 応答ブランドIDを取得する<br>
     * @return string 応答ブランドID<br>
     */
    public function getResBrandId()
    {
        return $this->resBrandId;
    }

    /**
     * 応答ブランドIDを設定する<br>
     * @param string $resBrandId 応答ブランドID<br>
     */
    public function setResBrandId($resBrandId)
    {
        $this->resBrandId = $resBrandId;
    }

    /**
     * 応答3Dセキュアメッセージバージョンを取得する<br>
     * @return string 応答3Dセキュアメッセージバージョン<br>
     */
    public function getRes3dMessageVersion()
    {
        return $this->res3dMessageVersion;
    }

    /**
     * 応答3Dセキュアメッセージバージョンを設定する<br>
     * @param string $res3dMessageVersion 応答3Dセキュアメッセージバージョン<br>
     */
    public function setRes3dMessageVersion($res3dMessageVersion)
    {
        $this->res3dMessageVersion = $res3dMessageVersion;
    }

    /**
     * 本人認証要求日時を取得する<br>
     * @return string 本人認証要求日時<br>
     */
    public function getAuthRequestDatetime()
    {
        return $this->authRequestDatetime;
    }

    /**
     * 本人認証要求日時を設定する<br>
     * @param string $authRequestDatetime 本人認証要求日時<br>
     */
    public function setAuthRequestDatetime($authRequestDatetime)
    {
        $this->authRequestDatetime = $authRequestDatetime;
    }

    /**
     * 本人認証応答日時を取得する<br>
     * @return string 本人認証応答日時<br>
     */
    public function getAuthResponseDatetime()
    {
        return $this->authResponseDatetime;
    }

    /**
     * 本人認証応答日時を設定する<br>
     * @param string $authResponseDatetime 本人認証応答日時<br>
     */
    public function setAuthResponseDatetime($authResponseDatetime)
    {
        $this->authResponseDatetime = $authResponseDatetime;
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
