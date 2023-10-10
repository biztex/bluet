<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：MPI、コマンド名：本人認証結果取得の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MpiGetResultResponseDto extends MdkBaseDto
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
     * リクエストID<br>
     * 半角英数字記号<br/>
     * 最大桁数：128<br/>
     * 本人認証の結果を検索する際のキー項目<br/>
     */
    private $requestId;

    /**
     * 要求取引金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqAmount;

    /**
     * 要求カード番号<br>
     * 半角数字、記号<br/>
     * 最大桁数：26<br/>
     * 要求電文に設定した値<br/>
     * 上6桁下2桁のみ数字表示され、その他は"*"（アスタリスク）に変換されます。<br/>
     */
    private $reqCardNumber;

    /**
     * 要求通貨単位<br>
     * 英字<br/>
     * 最大桁数：3<br/>
     * 要求電文に設定した値<br/>
     */
    private $reqCurrencyUnit;

    /**
     * 本人認証処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 本人認証の処理結果ステータス<br/>
     * "success"：正常終了<br/>
     * "failure"：異常終了<br/>
     */
    private $mpiMstatus;

    /**
     * 本人認証詳細結果コード<br>
     * 文字列<br/>
     * 最大桁数：16<br/>
     * 本人認証処理の結果を詳細に表すコード<br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     * 詳細は『結果コード一覧』を参照下さい。<br/>
     */
    private $mpiVresultCode;

    /**
     * カード結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * カード決済の処理結果ステータス<br/>
     * "success"：正常終了<br/>
     * "failure"：異常終了<br/>
     * "pending"：ペンディング<br/>
     * ※MPI結果コードがfailureの場合は空<br/>
     */
    private $cardMstatus;

    /**
     * カードトランザクションタイプ<br>
     * 文字列<br/>
     * 最大桁数：6<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * カード決済取引の詳細な状態<br/>
     * "a"：与信<br/>
     * "ax"：与信（期限切れ）<br/>
     * "ap"：与信（保留）<br/>
     * "ac"：与信売上<br/>
     * "acp"：与信売上（保留）<br/>
     */
    private $cardTransactionType;

    /**
     * センター要求日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * カード決済センターへ決済要求を行った日時<br/>
     * YYYYMMDDhhmmss形式<br/>
     */
    private $centerRequestDate;

    /**
     * センター応答日時<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * カード決済センターの決済応答を受けた日時<br/>
     * YYYYMMDDhhmmss形式<br/>
     */
    private $centerResponseDate;

    /**
     * 接続先カード接続センター<br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * 決済サーバー⇒カード会社間の接続センター名<br/>
     * 例：‘ｊｃｎ‘<br/>
     */
    private $connectedCenterId;

    /**
     * 要求仕向け先コード<br>
     * 文字列<br/>
     * 最大桁数：2<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * 決済要求電文が最初に仕向けられたカード会社のコード<br/>
     * 仕向け先カード会社の一覧は『インターフェース詳細　～クレジットカード決済～』の「クレジットカード決済　　仕向け先カード会社の一覧」を参照<br/>
     */
    private $acquirerCode;

    /**
     * 応答承認番号<br>
     * 半角英数字スペース<br/>
     * 最大桁数：7<br/>
     * [serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * カード会社が発行する承認番号<br/>
     */
    private $authCode;

    /**
     * 不正検知結果コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * [不正検知実施 かつ serviceOptionTypeが（mpi-complete / mpi-company / mpi-merchant）の場合のみ]<br/>
     * 不正検知結果<br/>
     * "100"：accept<br/>
     * "200"：deny<br/>
     * "300"：challenge<br/>
     * "400"：error<br/>
     * "500"：timeout<br/>
     * "600"：internal error<br/>
     * ""：値なし（空白）<br/>
     */
    private $fdResult;

    /**
     * 3Dメッセージバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * [serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * Message Version Number<br/>
     * （例 “1.0.2”）<br/>
     */
    private $dddMessageVersion;

    /**
     * 3DトランザクションID<br>
     * 半角英数字、"+"、"-"、"="<br/>
     * 最大桁数：28<br/>
     * [3Dセキュア 1.0.2 かつ serviceOptionTypeが（mpi-none）の場合、または3Dセキュア 2.0 かつ serviceOptionTypeが（mpi-none） かつ クレジットカードブランドがAMEXの場合]<br/>
     * Transaction Identifier(XID)の値をBase64で変換した値<br/>
     */
    private $dddTransactionId;

    /**
     * 3DDSトランザクションID<br>
     * 半角文字列<br/>
     * 最大桁数：36<br/>
     * [3Dセキュア 2.0 かつ serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * Directory server transaction ID（ディレクトリサーバトランザクションID）<br/>
     */
    private $dddDsTransactionId;

    /**
     * 3DサーバトランザクションID<br>
     * 半角文字列<br/>
     * 最大桁数：36<br/>
     * [3Dセキュア 2.0 かつ serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * 3DSサーバによって割り当てられたユニークなトランザクション識別子<br/>
     */
    private $dddServerTransactionId;

    /**
     * 3Dトランザクションステータス<br>
     * 半角英字<br/>
     * 最大桁数：1<br/>
     * [serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * 3Dセキュアトランザクションステータス<br/>
     * "Y"：本人認証成功<br/>
     * "N"：本人認証失敗（イシュアまたは会員が原因）<br/>
     * "U"：本人認証失敗（上記以外が原因）<br/>
     * "A"：Attempt（暫定的に本人認証成功）<br/>
     * "R"：本人認証拒否<br/>
     * ""：値なし（空白）<br/>
     */
    private $dddTransactionStatus;

    /**
     * 3Dトランザクションステータス理由<br>
     * 半角文字列<br/>
     * 最大桁数：2<br/>
     * [3Dセキュア 2.0 かつ serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * 3Dトランザクションステータスの値の設定理由<br/>
     * "01":Card authentication failed<br/>
     * "02":Unknown Device<br/>
     * "03":Unsupported Device<br/>
     * "04":Exceeds authentication frequency limit<br/>
     * "05":Expired card<br/>
     * "06":Invalid card number<br/>
     * "07":Invalid transaction<br/>
     * "08":No Card record<br/>
     * "09":Security failure<br/>
     * "10":Stolen card<br/>
     * "11":Suspected fraud<br/>
     * "12":Transaction not permitted to cardholder<br/>
     * "13":Cardholder not enrolled in service<br/>
     * "14":Transaction timed out at the ACS<br/>
     * "15":Low confidence<br/>
     * "16":Medium confidence<br/>
     * "17":High confidence<br/>
     * "18":Very High confidence<br/>
     * "19":Exceeds ACS maximum challenges<br/>
     * "20":Non-Payment transaction not supported<br/>
     * "21":3RI transaction not supported<br/>
     * "22":ACS technical issue<br/>
     * "23":Decoupled Authentication required by ACS but not requested by 3DS Requestor<br/>
     * "24":3DS Requestor Decoupled Max Expiry Time exceeded<br/>
     * "25":Decoupled Authentication was provided insufficient time to authenticate cardholder. ACS will not make attempt<br/>
     * "26":Authentication attempted but not performed by the cardholder<br/>
     * ""：値なし（空白）<br/>
     * ※カード会社の仕様により、上記以外の値で設定されることもあります。<br/>
     */
    private $dddTransactionStatusReason;

    /**
     * 3DCAVVアルゴリズム<br>
     * 半角英字<br/>
     * 最大桁数：1<br/>
     * [serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * 3DセキュアCAVVアルゴリズム<br/>
     * "0"：HMAC<br/>
     * "1"：CVV<br/>
     * "2"：CVV with ATN<br/>
     * "3"：SPA Algorithm<br/>
     * "4"：AEVV Algorithm<br/>
     * "9"：取引毎の指定なし（3Dセキュア 2.0以上の場合）<br/>
     * ""：値なし（空白）<br/>
     * ※カード会社の仕様により、上記以外の値で設定されることもあります。<br/>
     */
    private $dddCavvAlgorithm;

    /**
     * 3DCAVV<br>
     * 半角英数字、"+"、"-"、"="<br/>
     * 最大桁数：28<br/>
     * [serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * 3DセキュアCAVV<br/>
     */
    private $dddCavv;

    /**
     * 3DECI<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * [serviceOptionTypeが（mpi-none）の場合のみ]<br/>
     * 3DセキュアECI<br/>
     * [3Dセキュア 1.0.2の場合]<br/>
     * "01"：Attempt（Master Card）<br/>
     * "02"：認証成功（Master Card）<br/>
     * "05"：認証成功（VISA、JCB）<br/>
     * "06"：Attempt（VISA、JCB）又は未参加（Master Card、VISA、JCB）<br/>
     * "07"：認証実行不能（Master Card、VISA、JCB）<br/>
     * ""：値なし（空白）<br/>
     * [3Dセキュア 2.0の場合]<br/>
     * "05"：認証成功<br/>
     * "06"：Attempt又は未参加<br/>
     * "07"：認証実行不能<br/>
     * ""：値なし（空白）<br/>
     */
    private $dddEci;


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
     * リクエストIDを取得する<br>
     * @return string リクエストID<br>
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * リクエストIDを設定する<br>
     * @param string $requestId リクエストID<br>
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * 本人認証処理結果コードを取得する<br>
     * @return string 本人認証処理結果コード<br>
     */
    public function getMpiMstatus()
    {
        return $this->mpiMstatus;
    }

    /**
     * 本人認証処理結果コードを設定する<br>
     * @param string $mpiMstatus 本人認証処理結果コード<br>
     */
    public function setMpiMstatus($mpiMstatus)
    {
        $this->mpiMstatus = $mpiMstatus;
    }

    /**
     * 本人認証詳細結果コードを取得する<br>
     * @return string 本人認証詳細結果コード<br>
     */
    public function getMpiVresultCode()
    {
        return $this->mpiVresultCode;
    }

    /**
     * 本人認証詳細結果コードを設定する<br>
     * @param string $mpiVresultCode 本人認証詳細結果コード<br>
     */
    public function setMpiVresultCode($mpiVresultCode)
    {
        $this->mpiVresultCode = $mpiVresultCode;
    }

    /**
     * カード結果コードを取得する<br>
     * @return string カード結果コード<br>
     */
    public function getCardMstatus()
    {
        return $this->cardMstatus;
    }

    /**
     * カード結果コードを設定する<br>
     * @param string $cardMstatus カード結果コード<br>
     */
    public function setCardMstatus($cardMstatus)
    {
        $this->cardMstatus = $cardMstatus;
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
     * カードトランザクションタイプを設定する<br>
     * @param string $cardTransactionType カードトランザクションタイプ<br>
     */
    public function setCardTransactionType($cardTransactionType)
    {
        $this->cardTransactionType = $cardTransactionType;
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
     * センター要求日時を設定する<br>
     * @param string $centerRequestDate センター要求日時<br>
     */
    public function setCenterRequestDate($centerRequestDate)
    {
        $this->centerRequestDate = $centerRequestDate;
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
     * センター応答日時を設定する<br>
     * @param string $centerResponseDate センター応答日時<br>
     */
    public function setCenterResponseDate($centerResponseDate)
    {
        $this->centerResponseDate = $centerResponseDate;
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
     * 接続先カード接続センターを設定する<br>
     * @param string $connectedCenterId 接続先カード接続センター<br>
     */
    public function setConnectedCenterId($connectedCenterId)
    {
        $this->connectedCenterId = $connectedCenterId;
    }

    /**
     * 要求仕向け先コードを取得する<br>
     * @return string 要求仕向け先コード<br>
     */
    public function getAcquirerCode()
    {
        return $this->acquirerCode;
    }

    /**
     * 要求仕向け先コードを設定する<br>
     * @param string $acquirerCode 要求仕向け先コード<br>
     */
    public function setAcquirerCode($acquirerCode)
    {
        $this->acquirerCode = $acquirerCode;
    }

    /**
     * 応答承認番号を取得する<br>
     * @return string 応答承認番号<br>
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * 応答承認番号を設定する<br>
     * @param string $authCode 応答承認番号<br>
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
    }

    /**
     * 不正検知結果コードを取得する<br>
     * @return string 不正検知結果コード<br>
     */
    public function getFdResult()
    {
        return $this->fdResult;
    }

    /**
     * 不正検知結果コードを設定する<br>
     * @param string $fdResult 不正検知結果コード<br>
     */
    public function setFdResult($fdResult)
    {
        $this->fdResult = $fdResult;
    }

    /**
     * 3Dメッセージバージョンを取得する<br>
     * @return string 3Dメッセージバージョン<br>
     */
    public function getDddMessageVersion()
    {
        return $this->dddMessageVersion;
    }

    /**
     * 3Dメッセージバージョンを設定する<br>
     * @param string $dddMessageVersion 3Dメッセージバージョン<br>
     */
    public function setDddMessageVersion($dddMessageVersion)
    {
        $this->dddMessageVersion = $dddMessageVersion;
    }

    /**
     * 3DトランザクションIDを取得する<br>
     * @return string 3DトランザクションID<br>
     */
    public function getDddTransactionId()
    {
        return $this->dddTransactionId;
    }

    /**
     * 3DトランザクションIDを設定する<br>
     * @param string $dddTransactionId 3DトランザクションID<br>
     */
    public function setDddTransactionId($dddTransactionId)
    {
        $this->dddTransactionId = $dddTransactionId;
    }

    /**
     * 3DDSトランザクションIDを取得する<br>
     * @return string 3DDSトランザクションID<br>
     */
    public function getDddDsTransactionId()
    {
        return $this->dddDsTransactionId;
    }

    /**
     * 3DDSトランザクションIDを設定する<br>
     * @param string $dddDsTransactionId 3DDSトランザクションID<br>
     */
    public function setDddDsTransactionId($dddDsTransactionId)
    {
        $this->dddDsTransactionId = $dddDsTransactionId;
    }

    /**
     * 3DサーバトランザクションIDを取得する<br>
     * @return string 3DサーバトランザクションID<br>
     */
    public function getDddServerTransactionId()
    {
        return $this->dddServerTransactionId;
    }

    /**
     * 3DサーバトランザクションIDを設定する<br>
     * @param string $dddServerTransactionId 3DサーバトランザクションID<br>
     */
    public function setDddServerTransactionId($dddServerTransactionId)
    {
        $this->dddServerTransactionId = $dddServerTransactionId;
    }

    /**
     * 3Dトランザクションステータスを取得する<br>
     * @return string 3Dトランザクションステータス<br>
     */
    public function getDddTransactionStatus()
    {
        return $this->dddTransactionStatus;
    }

    /**
     * 3Dトランザクションステータスを設定する<br>
     * @param string $dddTransactionStatus 3Dトランザクションステータス<br>
     */
    public function setDddTransactionStatus($dddTransactionStatus)
    {
        $this->dddTransactionStatus = $dddTransactionStatus;
    }

    /**
     * 3Dトランザクションステータス理由を取得する<br>
     * @return string 3Dトランザクションステータス理由<br>
     */
    public function getDddTransactionStatusReason()
    {
        return $this->dddTransactionStatusReason;
    }

    /**
     * 3Dトランザクションステータス理由を設定する<br>
     * @param string $dddTransactionStatusReason 3Dトランザクションステータス理由<br>
     */
    public function setDddTransactionStatusReason($dddTransactionStatusReason)
    {
        $this->dddTransactionStatusReason = $dddTransactionStatusReason;
    }

    /**
     * 3DCAVVアルゴリズムを取得する<br>
     * @return string 3DCAVVアルゴリズム<br>
     */
    public function getDddCavvAlgorithm()
    {
        return $this->dddCavvAlgorithm;
    }

    /**
     * 3DCAVVアルゴリズムを設定する<br>
     * @param string $dddCavvAlgorithm 3DCAVVアルゴリズム<br>
     */
    public function setDddCavvAlgorithm($dddCavvAlgorithm)
    {
        $this->dddCavvAlgorithm = $dddCavvAlgorithm;
    }

    /**
     * 3DCAVVを取得する<br>
     * @return string 3DCAVV<br>
     */
    public function getDddCavv()
    {
        return $this->dddCavv;
    }

    /**
     * 3DCAVVを設定する<br>
     * @param string $dddCavv 3DCAVV<br>
     */
    public function setDddCavv($dddCavv)
    {
        $this->dddCavv = $dddCavv;
    }

    /**
     * 3DECIを取得する<br>
     * @return string 3DECI<br>
     */
    public function getDddEci()
    {
        return $this->dddEci;
    }

    /**
     * 3DECIを設定する<br>
     * @param string $dddEci 3DECI<br>
     */
    public function setDddEci($dddEci)
    {
        $this->dddEci = $dddEci;
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
