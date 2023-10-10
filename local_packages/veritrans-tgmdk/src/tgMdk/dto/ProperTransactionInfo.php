<?php

namespace tgMdk\dto;

/**
 * 検索結果:固有トランザクション情報のクラス<br>
 *
 * @author Veritrans, Inc.
 */
class ProperTransactionInfo
{

    /**
     * トランザクション種別<br>
     */
    private $txnKind;
    /**
     * 取引対象タイプ<br>
     */
    private $emTxnType;
    /**
     * 取引日時<br>
     */
    private $centerProcDatetime;
    /**
     * カード種別<br>
     */
    private $cardType;
    /**
     * 取引カード番号<br>
     */
    private $cardNo;
    /**
     * 取引カードブランドコード<br>
     */
    private $cardBrandCode;
    /**
     * 決済ステータス<br>
     */
    private $settlementStatus;

    /**
     * API実行ID<br>
     */
    private $logId;

    /**
     * センター要求日時<br>
     */
    private $centerRequestDatetime;

    /**
     * センター応答日時<br>
     */
    private $centerResponseDatetime;

    /**
     * 取引対象タイプ<br>
     */
    private $cvsTxnType;
    /**
     * 対象取引タイプ<br>
     */
    private $peTxnType;
    /**
     * 受付番号<br>
     */
    private $receiptNo;
    /**
     * 取引日時<br>
     */
    private $startDatetime;
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
     * センター要求番号<br>
     */
    private $centerRequestNumber;
    /**
     * センターリファレンス番号<br>
     */
    private $centerReferenceNumber;
    /**
     * 要求商品コード<br>
     */
    private $reqItemCode;
    /**
     * 応答商品コード<br>
     */
    private $resItemCode;
    /**
     * 要求リターン参照番号<br>
     */
    private $reqReturnReferenceNumber;
    /**
     * 応答データ<br>
     */
    private $responsedata;
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
    private $reqAmount;
    /**
     * 要求取引金額<br>
     */
    private $reqCardOptionType;
    /**
     * 要求マーチャントトランザクション番号<br>
     */
    private $reqMerchantTransaction;
    /**
     * 要求承認番号<br>
     */
    private $reqAuthCode;
    /**
     * 要求仕向先コード<br>
     */
    private $reqAcquirerCode;
    /**
     * 要求カードセンター<br>
     */
    private $reqCardCenter;
    /**
     * 要求JPO情報<br>
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
     * 要求3Dメッセージバージョン<br>
     */
    private $req3dMessageVersion;
    /**
     * 要求3DトランザクションID<br>
     */
    private $req3dTransactionId;
    /**
     * 要求3Dトランザクションステータス<br>
     */
    private $req3dTransactionStatus;
    /**
     * 要求3D CAVVアルゴリズム<br>
     */
    private $req3dCavvAlgorithm;
    /**
     * 要求3D CAVV<br>
     */
    private $req3dCavv;
    /**
     * 要求3D ECI<br>
     */
    private $req3dEci;

    /**
     * 要求3D DSトランザクションID<br>
     */
    private $req3dDsTransactionId;

    /**
     * 要求3DサーバトランザクションID<br>
     */
    private $req3dServerTransactionId;

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
     * 応答与信期間<br>
     */
    private $resAuthTerm;
    /**
     * 要求新規返品<br>
     */
    private $reqWithNew;
    /**
     * 取引金額<br>
     */
    private $amount;
    /**
     * 決済完了フラグ<br>
     */
    private $txnFixed;

    /**
     * 対象取引タイプ<br>
     */
    private $ppTxnType;
    /**
     * 取引識別子<br>
     */
    private $centerTxnId;
    /**
     * 払戻し手数料<br>
     */
    private $feeAmount;
    /**
     * 外貨換算レート<br>
     */
    private $exchangeRate;
    /**
     * 純返金金額<br>
     */
    private $netRefundAmount;

    /**
     * MPIトランザクションタイプ<br>
     */
    private $mpiTransactionType;

    /**
     * リダイレクションURI<br>
     */
    private $reqRedirectionUri;

    /**
     * カード会社ID<br>
     */
    private $corporationId;

    /**
     * ブランドID<br>
     */
    private $brandId;

    /**
     * 仕向先バイナリ<br>
     */
    private $acquirerBinary;

    /**
     * ディレクトリサービスログインID<br>
     */
    private $dsLoginId;

    /**
     * CRRSステータス<br>
     */
    private $crresStatus;

    /**
     * VERESステータス<br>
     */
    private $veresStatus;

    /**
     * PARESステータス<br>
     */
    private $paresStatus;

    /**
     * PARESサイン<br>
     */
    private $paresSign;

    /**
     * PARES ECI<br>
     */
    private $paresEci;

    /**
     * 本人認証レスポンスコード<br>
     */
    private $authResponseCode;

    /**
     * 検証レスポンスコード<br>
     */
    private $verifyResponseCode;

    /**
     * 応答3Dメッセージバージョン<br>
     */
    private $res3dMessageVersion;

    /**
     * 本人認証要求日時<br>
     */
    private $authRequestDatetime;
    /**
     * 本人認証応答日時<br>
     */
    private $authResponseDatetime;

    /**
     * 検証要求日時<br>
     */
    private $verifyRequestDatetime;
    /**
     * 検証応答日時<br>
     */
    private $verifyResponseDatetime;

    /**
     * 要求通貨単位<br>
     */
    private $reqCurrencyUnit;

    /**
     * 応答3DトランザクションID<br>
     */
    private $res3dTransactionId;

    /**
     * 応答3D DSトランザクションID<br>
     */
    private $res3dDsTransactionId;

    /**
     * 応答3DサーバトランザクションID<br>
     */
    private $res3dServerTransactionId;

    /**
     * 応答3Dトランザクションステータス<br>
     */
    private $res3dTransactionStatus;

    /**
     * 応答3D CAVVアルゴリズム<br>
     */
    private $res3dCavvAlgorithm;

    /**
     * 応答3D CAVV <br>
     */
    private $res3dCavv;

    /**
     * 応答3D ECI<br>
     */
    private $res3dEci;

    /**
     * 永久不滅ウォレット残高<br>
     */
    private $aqAqfWalletBalance;

    /**
     * 永久不滅ポイント残高<br>
     */
    private $aqAqfPointBalance;

    /**
     * 交換後利用可能バリュー<br>
     */
    private $aqAvailableValue;

    /**
     * SaisonトランザクションAPIリスト<br>
     */
    private $transactionApis;

    /**
     * Saisonトランザクションカードリスト<br>
     */
    private $transactionCards;

    /**
     * UPOP取引対象タイプ<br>
     */
    private $upopTxnType;

    /**
     * UPOP決済センターとの取引ID<br>
     */
    private $resUpopOrderId;

    /**
     * 清算日付<br>
     */
    private $resUpopSettleDate;

    /**
     * 清算金額<br>
     */
    private $resUpopSettleAmount;

    /**
     * 清算通貨<br>
     */
    private $resUpopSettleCurrency;

    /**
     * 外貨換算日付<br>
     */
    private $resUpopExchangeDate;

    /**
     * 外貨換算レート<br>
     */
    private $resUpopExchangeRate;

    /**
     * 決済センターとの取引ID<br>
     */
    private $centerTradeId;

    /**
     * 対象取引タイプ<br>
     */
    private $alipayTxnType;

    /**
     * 清算金額<br>
     */
    private $settleAmount;

    /**
     * 清算通貨<br>
     */
    private $settleCurrency;

    /**
     * 支払い日付<br>
     */
    private $paymentTime;

    /**
     * 清算日付<br>
     */
    private $settlementTime;

    /**
     * 決済種別<br>
     */
    private $payType;

    /**
     * キャリア結果コード<br>
     */
    private $crResultCode;

    /**
     * 詳細コマンドタイプ<br>
     */
    private $detailCommandType;

    /**
     * キャリアへの要求日時<br>
     */
    private $crRequestDatetime;

    /**
     * キャリアからの返戻日時<br>
     */
    private $crResponseDatetime;

    /**
     * 取引対象タイプ<br>
     */
    private $oricoTxnType;

    /**
     * 審査結果コード<br>
     */
    private $orderStateCode;

    /**
     * 承認番号<br>
     */
    private $approvalNo;

    /**
     * 申込日<br>
     */
    private $requestDate;

    /**
     * ローン元金<br>
     */
    private $loanPrincipal;

    /**
     * 支払回数<br>
     */
    private $paymentCount;

    /**
     * 円金額<br>
     */
    private $jpyAmount;

    /**
     * 多通貨レスポンスコード<br>
     */
    private $resMcpResponseCode;

    /**
     * 楽天APIエラーコード<br>
     */
    private $rakutenApiErrorCode;

    /**
     * 楽天取引エラーコード<br>
     */
    private $rakutenOrderErrorCode;

    /**
     * 楽天への要求日時<br>
     */
    private $rakutenRequestDatetime;

    /**
     * 楽天からの返戻日時<br>
     */
    private $rakutenResponseDatetime;

    /**
     * リクルートエラーコード<br>
     */
    private $recruitErrorCode;

    /**
     * リクルートへの要求日時<br>
     */
    private $recruitRequestDatetime;

    /**
     * リクルートからの返戻日時<br>
     */
    private $recruitResponseDatetime;

    /**
     * LINE Payエラーコード<br>
     */
    private $linepayErrorCode;

    /**
     * LINE Payへの要求日時<br>
     */
    private $linepayRequestDatetime;

    /**
     * LINE Payからの返戻日時<br>
     */
    private $linepayResponseDatetime;

    /**
     * 承認番号（MasterPass）
     */
    private $authCode;

    /**
     * リファレンス番号
     */
    private $referenceNumber;

    /**
     * カードプラグインから返却されたVResultCode
     */
    private $cardVResultCode;

    /**
     * MasterPassへの要求日時
     */
    private $masterpassRequestDatetime;

    /**
     * MasterPassからの返戻日時
     */
    private $masterpassResponseDatetime;

    /**
     * 消込フラグ
     */
    private $withReconcile;

    /**
     * 入金ID
     */
    private $depositId;

    /**
     * 登録方法
     */
    private $registrationMethod;

    /**
     * 入金日
     */
    private $depositDate;

    /**
     * 振込人名
     */
    private $transferName;

    /**
     * エラーコード
     */
    private $tenpayErrorCode;

    /**
     * Tenpayへの要求日時
     */
    private $tenpayRequestDatetime;

    /**
     * Tenpayからの返戻日時
     */
    private $tenpayResponseDatetime;

    /**
     * 応答センター処理通番
     */
    private $resCenterProcessNumber;

    /**
     * 応答センター送信日時
     */
    private $resCenterSendDateTime;

    /**
     * 店舗ID
     */
    private $storeId;

    /**
     * 店舗端末ID
     */
    private $terminalId;

    /**
     * PayPay返戻コード
     */
    private $paypayResultCode;

    /**
     * 決済事業者コード
     */
    private $settleBizCode;

    /**
     * レシート番号
     */
    private $receiptNumber;

    /**
     * 商品名
     */
    private $itemName;

    /**
     * PayPayへの要求日時
     */
    private $paypayRequestDatetime;

    /**
     * PayPayからの返戻日時
     */
    private $paypayResponseDatetime;

    /**
     * PayPayトランザクションID
     */
    private $paypayOnlineTxnId;

    /**
     * PayPayエラーコード
     */
    private $paypayErrorCode;

    /**
     * 決済ゲートウェイ管理ID
     */
    private $gatewayTransId;

    /**
     * Alipay+決済センター結果コード
     */
    private $alipayxResultCode;

    /**
     * Alipay+決済センターへの要求日時
     */
    private $alipayxRequestDatetime;

    /**
     * Alipay+決済センターからの返戻日時
     */
    private $alipayxResponseDatetime;

    /**
     * CvsPay結果コード
     */
    private $cvspayResultCd;

    /**
     * CvsPayへの要求日時
     */
    private $cvspayRequestDatetime;

    /**
     * CvsPayからの返戻日時
     */
    private $cvspayResponseDatetime;

    /**
     * CvsPay取消オーダーID
     */
    private $cvspayCancelOrderId;

    /**
     * 自動審査結果
     */
    private $authorResult;

    /**
     * 決済センターのトランザクション管理ID
     */
    private $centerTransactionId;

    /**
     * 決済センター結果コード
     */
    private $centerResultCode;

    /**
     * 決済センター状態コード
     */
    private $centerStateCode;

    /**
     * 決済センター理由コード
     */
    private $centerReasonCode;

    /**
     * merpayエラーコード
     */
    private $merpayErrorCode;

    /**
     * 従業員ID
     */
    private $operatorId;

    /**
     * 伝票コード
     */
    private $slipCode;

    /**
     * merpayの管理ID
     */
    private $merpayResourceId;

    /**
     * 決済センターとの取引ID
     */
    private $merpayProcessingId;

    /**
     * merpayへの要求日時
     */
    private $merpayRequestDatetime;

    /**
     * merpayからの返戻日時
     */
    private $merpayResponseDatetime;

    /**
     * 問合せ番号
     */
    private $inquiryCode;

    /**
     * クレジット利用額
     */
    private $useCredit;

    /**
     * クーポン利用額
     */
    private $useCoupon;

    /**
     * ポイント利用額
     */
    private $usePoint;

    /**
     * エポスへの要求日時
     */
    private $eposRequestDatetime;

    /**
     * エポスへの返戻日時
     */
    private $eposResponseDatetime;

    /**
     * カードの要求支払種別
     */
    private $reqPaymentType;

    /**
     * カードの要求レスポンスコード
     */
    private $reqResponseCode;

    /**
     * 頻度（単位）
     */
    private $frequencyUnit;

    /**
     * 頻度（値）
     */
    private $frequencyValue;

    /**
     * 楽天APIエラータイプ
     */
    private $rakutenApiErrorType;

    /**
     * トランザクション種別を取得する<br>
     * @return string トランザクション種別<br>
     */
    public function getTxnKind()
    {
        return $this->txnKind;
    }

    /**
     * トランザクション種別を設定する<br>
     * @param string $txnKind トランザクション種別 <br>
     */
    public function setTxnKind($txnKind)
    {
        $this->txnKind = $txnKind;
    }

    /**
     * 取引対象タイプを取得する<br>
     *
     * @return string 取引対象タイプ<br>
     */
    public function getEmTxnType()
    {
        return $this->emTxnType;
    }

    /**
     * 取引対象タイプを設定する<br>
     *
     * @param string $emTxnType 取引対象タイプ<br>
     */
    public function setEmTxnType($emTxnType)
    {
        $this->emTxnType = $emTxnType;
    }

    /**
     * 取引日時を取得する<br>
     *
     * @return string 取引日時<br>
     */
    public function getCenterProcDatetime()
    {
        return $this->centerProcDatetime;
    }

    /**
     * 取引日時を設定する<br>
     *
     * @param string $centerProcDatetime 取引日時<br>
     */
    public function setCenterProcDatetime($centerProcDatetime)
    {
        $this->centerProcDatetime = $centerProcDatetime;
    }

    /**
     * カード種別を取得する<br>
     * @return string カード種別<br>
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * カード種別を設定する<br>
     * @param string $cardType カード種別<br>
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    /**
     * 取引カード番号を取得する<br>
     * @return string 取引カード番号<br>
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * 取引カード番号を設定する<br>
     * @param string $cardNo 取引カード番号<br>
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
     * 取引カードブランドコードを取得する<br>
     * @return string 取引カードブランドコード<br>
     */
    public function getCardBrandCode()
    {
        return $this->cardBrandCode;
    }

    /**
     * 取引カードブランドコードを設定する<br>
     * @param string $cardBrandCode 取引カードブランドコード<br>
     */
    public function setCardBrandCode($cardBrandCode)
    {
        $this->cardBrandCode = $cardBrandCode;
    }

    /**
     * 決済ステータスを取得する<br>
     * @return string 決済ステータス<br>
     */
    public function getSettlementStatus()
    {
        return $this->settlementStatus;
    }

    /**
     * 決済ステータスを設定する<br>
     * @param string $settlementStatus 決済ステータス<br>
     */
    public function setSettlementStatus($settlementStatus)
    {
        $this->settlementStatus = $settlementStatus;
    }

    /**
     * API実行IDを取得する<br>
     * @return string API実行ID<br>
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * API実行IDを設定する<br>
     * @param string $logId API実行ID<br>
     */
    public function setLogId($logId)
    {
        $this->logId = $logId;
    }

    /**
     * センター要求日時を取得する<br>
     * @return string センター要求日時<br>
     */
    public function getCenterRequestDatetime()
    {
        return $this->centerRequestDatetime;
    }

    /**
     * センター要求日時を設定する<br>
     * @param string $centerRequestDatetime センター要求日時<br>
     */
    public function setCenterRequestDatetime($centerRequestDatetime)
    {
        $this->centerRequestDatetime = $centerRequestDatetime;
    }

    /**
     * センター応答日時を取得する<br>
     * @return string センター応答日時<br>
     */
    public function getCenterResponseDatetime()
    {
        return $this->centerResponseDatetime;
    }

    /**
     * センター応答日時を設定する<br>
     * @param string $centerResponseDatetime センター応答日時<br>
     */
    public function setCenterResponseDatetime($centerResponseDatetime)
    {
        $this->centerResponseDatetime = $centerResponseDatetime;
    }

    /**
     * 取引対象タイプを取得する<br>
     *
     * @return string 取引対象タイプ<br>
     */
    public function getCvsTxnType()
    {
        return $this->cvsTxnType;
    }

    /**
     * 取引対象タイプを設定する<br>
     *
     * @param string $cvsTxnType 取引対象タイプ<br>
     */
    public function setCvsTxnType($cvsTxnType)
    {
        $this->cvsTxnType = $cvsTxnType;
    }

    /**
     * 対象取引タイプを取得する<br>
     *
     * @return string 対象取引タイプ<br>
     */
    public function getPeTxnType()
    {
        return $this->peTxnType;
    }

    /**
     * 対象取引タイプを設定する<br>
     *
     * @param string $peTxnType 対象取引タイプ<br>
     */
    public function setPeTxnType($peTxnType)
    {
        $this->peTxnType = $peTxnType;
    }

    /**
     * 受付番号を取得する<br>
     *
     * @return string 受付番号<br>
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * 受付番号を設定する<br>
     *
     * @param string $receiptNo 受付番号<br>
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
    }

    /**
     * 取引日時を取得する<br>
     *
     * @return string 取引日時<br>
     */
    public function getStartDatetime()
    {
        return $this->startDatetime;
    }

    /**
     * 取引日時を設定する<br>
     *
     * @param string $startDatetime 取引日時<br>
     */
    public function setStartDatetime($startDatetime)
    {
        $this->startDatetime = $startDatetime;
    }

    /**
     * カードトランザクションタイプを取得する<br>
     *
     * @return string カードトランザクションタイプ<br>
     */
    public function getCardTransactionType()
    {
        return $this->cardTransactionType;
    }

    /**
     * カードトランザクションタイプを設定する<br>
     *
     * @param string $cardTransactionType カードトランザクションタイプ<br>
     */
    public function setCardTransactionType($cardTransactionType)
    {
        $this->cardTransactionType = $cardTransactionType;
    }

    /**
     * ゲートウェイ要求日時を取得する<br>
     *
     * @return string ゲートウェイ要求日時<br>
     */
    public function getGatewayRequestDate()
    {
        return $this->gatewayRequestDate;
    }

    /**
     * ゲートウェイ要求日時を設定する<br>
     *
     * @param string $gatewayRequestDate ゲートウェイ要求日時<br>
     */
    public function setGatewayRequestDate($gatewayRequestDate)
    {
        $this->gatewayRequestDate = $gatewayRequestDate;
    }

    /**
     * ゲートウェイ応答日時を取得する<br>
     *
     * @return string ゲートウェイ応答日時<br>
     */
    public function getGatewayResponseDate()
    {
        return $this->gatewayResponseDate;
    }

    /**
     * ゲートウェイ応答日時を設定する<br>
     *
     * @param string $gatewayResponseDate ゲートウェイ応答日時<br>
     */
    public function setGatewayResponseDate($gatewayResponseDate)
    {
        $this->gatewayResponseDate = $gatewayResponseDate;
    }

    /**
     * センター要求日時を取得する<br>
     *
     * @return string センター要求日時<br>
     */
    public function getCenterRequestDate()
    {
        return $this->centerRequestDate;
    }

    /**
     * センター要求日時を設定する<br>
     *
     * @param string $centerRequestDate センター要求日時<br>
     */
    public function setCenterRequestDate($centerRequestDate)
    {
        $this->centerRequestDate = $centerRequestDate;
    }

    /**
     * センター応答日時を取得する<br>
     *
     * @return string センター応答日時<br>
     */
    public function getCenterResponseDate()
    {
        return $this->centerResponseDate;
    }

    /**
     * センター応答日時を設定する<br>
     *
     * @param string $centerResponseDate センター応答日時<br>
     */
    public function setCenterResponseDate($centerResponseDate)
    {
        $this->centerResponseDate = $centerResponseDate;
    }

    /**
     * センター要求番号を取得する<br>
     *
     * @return string センター要求番号<br>
     */
    public function getCenterRequestNumber()
    {
        return $this->centerRequestNumber;
    }

    /**
     * センター要求番号を設定する<br>
     *
     * @param string $centerRequestNumber センター要求番号<br>
     */
    public function setCenterRequestNumber($centerRequestNumber)
    {
        $this->centerRequestNumber = $centerRequestNumber;
    }

    /**
     * センターリファレンス番号を取得する<br>
     *
     * @return string センターリファレンス番号<br>
     */
    public function getCenterReferenceNumber()
    {
        return $this->centerReferenceNumber;
    }

    /**
     * センターリファレンス番号を設定する<br>
     *
     * @param string $centerReferenceNumber センターリファレンス番号<br>
     */
    public function setCenterReferenceNumber($centerReferenceNumber)
    {
        $this->centerReferenceNumber = $centerReferenceNumber;
    }

    /**
     * 要求商品コードを取得する<br>
     *
     * @return string 要求商品コード<br>
     */
    public function getReqItemCode()
    {
        return $this->reqItemCode;
    }

    /**
     * 要求商品コードを設定する<br>
     *
     * @param string $reqItemCode 要求商品コード<br>
     */
    public function setReqItemCode($reqItemCode)
    {
        $this->reqItemCode = $reqItemCode;
    }

    /**
     * 応答商品コードを取得する<br>
     *
     * @return string 応答商品コード<br>
     */
    public function getResItemCode()
    {
        return $this->resItemCode;
    }

    /**
     * 応答商品コードを設定する<br>
     *
     * @param string $resItemCode 応答商品コード<br>
     */
    public function setResItemCode($resItemCode)
    {
        $this->resItemCode = $resItemCode;
    }

    /**
     * 要求リターン参照番号を取得する<br>
     *
     * @return string 要求リターン参照番号<br>
     */
    public function getReqReturnReferenceNumber()
    {
        return $this->reqReturnReferenceNumber;
    }

    /**
     * 要求リターン参照番号を設定する<br>
     *
     * @param string $reqReturnReferenceNumber 要求リターン参照番号<br>
     */
    public function setReqReturnReferenceNumber($reqReturnReferenceNumber)
    {
        $this->reqReturnReferenceNumber = $reqReturnReferenceNumber;
    }

    /**
     * 応答データを取得する<br>
     *
     * @return string 応答データ<br>
     */
    public function getResponsedata()
    {
        return $this->responsedata;
    }

    /**
     * 応答データを設定する<br>
     *
     * @param string $responsedata 応答データ<br>
     */
    public function setResponsedata($responsedata)
    {
        $this->responsedata = $responsedata;
    }

    /**
     * ペンディングを取得する<br>
     *
     * @return string ペンディング<br>
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * ペンディングを設定する<br>
     *
     * @param string $pending ペンディング<br>
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
    }

    /**
     * ループバックを取得する<br>
     *
     * @return string ループバック<br>
     */
    public function getLoopback()
    {
        return $this->loopback;
    }

    /**
     * ループバックを設定する<br>
     *
     * @param string $loopback ループバック<br>
     */
    public function setLoopback($loopback)
    {
        $this->loopback = $loopback;
    }

    /**
     * 接続先カード接続センターを取得する<br>
     *
     * @return string 接続先カード接続センター<br>
     */
    public function getConnectedCenterId()
    {
        return $this->connectedCenterId;
    }

    /**
     * 接続先カード接続センターを設定する<br>
     *
     * @param string $connectedCenterId 接続先カード接続センター<br>
     */
    public function setConnectedCenterId($connectedCenterId)
    {
        $this->connectedCenterId = $connectedCenterId;
    }

    /**
     * 要求カード番号を取得する<br>
     *
     * @return string 要求カード番号<br>
     */
    public function getReqCardNumber()
    {
        return $this->reqCardNumber;
    }

    /**
     * 要求カード番号を設定する<br>
     *
     * @param string $reqCardNumber 要求カード番号<br>
     */
    public function setReqCardNumber($reqCardNumber)
    {
        $this->reqCardNumber = $reqCardNumber;
    }

    /**
     * 要求カード有効期限を取得する<br>
     *
     * @return string 要求カード有効期限<br>
     */
    public function getReqCardExpire()
    {
        return $this->reqCardExpire;
    }

    /**
     * 要求カード有効期限を設定する<br>
     *
     * @param string $reqCardExpire 要求カード有効期限<br>
     */
    public function setReqCardExpire($reqCardExpire)
    {
        $this->reqCardExpire = $reqCardExpire;
    }

    /**
     * 要求カードオプションタイプを取得する<br>
     *
     * @return string 要求カードオプションタイプ<br>
     */
    public function getReqAmount()
    {
        return $this->reqAmount;
    }

    /**
     * 要求カードオプションタイプを設定する<br>
     *
     * @param string $reqAmount 要求カードオプションタイプ<br>
     */
    public function setReqAmount($reqAmount)
    {
        $this->reqAmount = $reqAmount;
    }

    /**
     * 要求取引金額を取得する<br>
     *
     * @return string 要求取引金額<br>
     */
    public function getReqCardOptionType()
    {
        return $this->reqCardOptionType;
    }

    /**
     * 要求取引金額を設定する<br>
     *
     * @param string $reqCardOptionType 要求取引金額<br>
     */
    public function setReqCardOptionType($reqCardOptionType)
    {
        $this->reqCardOptionType = $reqCardOptionType;
    }

    /**
     * 要求マーチャントトランザクション番号を取得する<br>
     *
     * @return string 要求マーチャントトランザクション番号<br>
     */
    public function getReqMerchantTransaction()
    {
        return $this->reqMerchantTransaction;
    }

    /**
     * 要求マーチャントトランザクション番号を設定する<br>
     *
     * @param string $reqMerchantTransaction 要求マーチャントトランザクション番号<br>
     */
    public function setReqMerchantTransaction($reqMerchantTransaction)
    {
        $this->reqMerchantTransaction = $reqMerchantTransaction;
    }

    /**
     * 要求承認番号を取得する<br>
     *
     * @return string 要求承認番号<br>
     */
    public function getReqAuthCode()
    {
        return $this->reqAuthCode;
    }

    /**
     * 要求承認番号を設定する<br>
     *
     * @param string $reqAuthCode 要求承認番号<br>
     */
    public function setReqAuthCode($reqAuthCode)
    {
        $this->reqAuthCode = $reqAuthCode;
    }

    /**
     * 要求仕向先コードを取得する<br>
     *
     * @return string 要求仕向先コード<br>
     */
    public function getReqAcquirerCode()
    {
        return $this->reqAcquirerCode;
    }

    /**
     * 要求仕向先コードを設定する<br>
     *
     * @param string $reqAcquirerCode 要求仕向先コード<br>
     */
    public function setReqAcquirerCode($reqAcquirerCode)
    {
        $this->reqAcquirerCode = $reqAcquirerCode;
    }

    /**
     * 要求カードセンターを取得する<br>
     *
     * @return string 要求カードセンター<br>
     */
    public function getReqCardCenter()
    {
        return $this->reqCardCenter;
    }

    /**
     * 要求カードセンターを設定する<br>
     *
     * @param string $reqCardCenter 要求カードセンター<br>
     */
    public function setReqCardCenter($reqCardCenter)
    {
        $this->reqCardCenter = $reqCardCenter;
    }

    /**
     * 要求JPO情報を取得する<br>
     *
     * @return string 要求JPO情報<br>
     */
    public function getReqJpoInformation()
    {
        return $this->reqJpoInformation;
    }

    /**
     * 要求JPO情報を設定する<br>
     *
     * @param string $reqJpoInformation 要求JPO情報<br>
     */
    public function setReqJpoInformation($reqJpoInformation)
    {
        $this->reqJpoInformation = $reqJpoInformation;
    }

    /**
     * 要求売上日を取得する<br>
     *
     * @return string 要求売上日<br>
     */
    public function getReqSalesDay()
    {
        return $this->reqSalesDay;
    }

    /**
     * 要求売上日を設定する<br>
     *
     * @param string $reqSalesDay 要求売上日<br>
     */
    public function setReqSalesDay($reqSalesDay)
    {
        $this->reqSalesDay = $reqSalesDay;
    }

    /**
     * 要求取消日を取得する<br>
     *
     * @return string 要求取消日<br>
     */
    public function getReqCancelDay()
    {
        return $this->reqCancelDay;
    }

    /**
     * 要求取消日を設定する<br>
     *
     * @param string $reqCancelDay 要求取消日<br>
     */
    public function setReqCancelDay($reqCancelDay)
    {
        $this->reqCancelDay = $reqCancelDay;
    }

    /**
     * 要求同時売上を取得する<br>
     *
     * @return string 要求同時売上<br>
     */
    public function getReqWithCapture()
    {
        return $this->reqWithCapture;
    }

    /**
     * 要求同時売上を設定する<br>
     *
     * @param string $reqWithCapture 要求同時売上<br>
     */
    public function setReqWithCapture($reqWithCapture)
    {
        $this->reqWithCapture = $reqWithCapture;
    }

    /**
     * 要求同時直接を取得する<br>
     *
     * @return string 要求同時直接<br>
     */
    public function getReqWithDirect()
    {
        return $this->reqWithDirect;
    }

    /**
     * 要求同時直接を設定する<br>
     *
     * @param string $reqWithDirect 要求同時直接<br>
     */
    public function setReqWithDirect($reqWithDirect)
    {
        $this->reqWithDirect = $reqWithDirect;
    }

    /**
     * 要求3Dメッセージバージョンを取得する<br>
     *
     * @return string 要求3Dメッセージバージョン<br>
     */
    public function getReq3dMessageVersion()
    {
        return $this->req3dMessageVersion;
    }

    /**
     * 要求3Dメッセージバージョンを設定する<br>
     *
     * @param string $req3dMessageVersion 要求3Dメッセージバージョン<br>
     */
    public function setReq3dMessageVersion($req3dMessageVersion)
    {
        $this->req3dMessageVersion = $req3dMessageVersion;
    }

    /**
     * 要求3DトランザクションIDを取得する<br>
     *
     * @return string 要求3DトランザクションID<br>
     */
    public function getReq3dTransactionId()
    {
        return $this->req3dTransactionId;
    }

    /**
     * 要求3DトランザクションIDを設定する<br>
     *
     * @param string $req3dTransactionId 要求3DトランザクションID<br>
     */
    public function setReq3dTransactionId($req3dTransactionId)
    {
        $this->req3dTransactionId = $req3dTransactionId;
    }

    /**
     * 要求3Dトランザクションステータスを取得する<br>
     *
     * @return string 要求3Dトランザクションステータス<br>
     */
    public function getReq3dTransactionStatus()
    {
        return $this->req3dTransactionStatus;
    }

    /**
     * 要求3Dトランザクションステータスを設定する<br>
     *
     * @param string $req3dTransactionStatus 要求3Dトランザクションステータス<br>
     */
    public function setReq3dTransactionStatus($req3dTransactionStatus)
    {
        $this->req3dTransactionStatus = $req3dTransactionStatus;
    }

    /**
     * 要求3D CAVVアルゴリズムを取得する<br>
     *
     * @return string 要求3D CAVVアルゴリズム<br>
     */
    public function getReq3dCavvAlgorithm()
    {
        return $this->req3dCavvAlgorithm;
    }

    /**
     * 要求3D CAVVアルゴリズムを設定する<br>
     *
     * @param string $req3dCavvAlgorithm 要求3D CAVVアルゴリズム<br>
     */
    public function setReq3dCavvAlgorithm($req3dCavvAlgorithm)
    {
        $this->req3dCavvAlgorithm = $req3dCavvAlgorithm;
    }

    /**
     * 要求3D CAVVを取得する<br>
     *
     * @return string 要求3D CAVV<br>
     */
    public function getReq3dCavv()
    {
        return $this->req3dCavv;
    }

    /**
     * 要求3D CAVVを設定する<br>
     *
     * @param string $req3dCavv 要求3D CAVV<br>
     */
    public function setReq3dCavv($req3dCavv)
    {
        $this->req3dCavv = $req3dCavv;
    }

    /**
     * 要求3D ECIを取得する<br>
     *
     * @return string 要求3D ECI<br>
     */
    public function getReq3dEci()
    {
        return $this->req3dEci;
    }

    /**
     * 要求3D ECIを設定する<br>
     *
     * @param string $req3dEci 要求3D ECI<br>
     */
    public function setReq3dEci($req3dEci)
    {
        $this->req3dEci = $req3dEci;
    }

    /**
     * 要求3D DSトランザクションIDを取得する<br>
     *
     * @return string 要求3D DSトランザクションID<br>
     */
    public function getReq3dDsTransactionId()
    {
        return $this->req3dDsTransactionId;
    }

    /**
     * 要求3D DSトランザクションIDを設定する<br>
     *
     * @param string $req3dDsTransactionId 要求3D DSトランザクションID<br>
     */
    public function setReq3dDsTransactionId($req3dDsTransactionId)
    {
        $this->req3dDsTransactionId = $req3dDsTransactionId;
    }

    /**
     * 要求3DサーバトランザクションIDを取得する<br>
     *
     * @return string 要求3DサーバトランザクションID<br>
     */
    public function getReq3dServerTransactionId()
    {
        return $this->req3dServerTransactionId;
    }

    /**
     * 要求3DサーバトランザクションIDを設定する<br>
     *
     * @param string $req3dServerTransactionId 要求3DサーバトランザクションID<br>
     */
    public function setReq3dServerTransactionId($req3dServerTransactionId)
    {
        $this->req3dServerTransactionId = $req3dServerTransactionId;
    }

    /**
     * 要求セキュリティコードを取得する<br>
     *
     * @return string 要求セキュリティコード<br>
     */
    public function getReqSecurityCode()
    {
        return $this->reqSecurityCode;
    }

    /**
     * 要求セキュリティコードを設定する<br>
     *
     * @param string $reqSecurityCode 要求セキュリティコード<br>
     */
    public function setReqSecurityCode($reqSecurityCode)
    {
        $this->reqSecurityCode = $reqSecurityCode;
    }

    /**
     * 要求認証番号を取得する<br>
     *
     * @return string 要求認証番号<br>
     */
    public function getReqAuthFlag()
    {
        return $this->reqAuthFlag;
    }

    /**
     * 要求認証番号を設定する<br>
     *
     * @param string $reqAuthFlag 要求認証番号<br>
     */
    public function setReqAuthFlag($reqAuthFlag)
    {
        $this->reqAuthFlag = $reqAuthFlag;
    }

    /**
     * 要求誕生日を取得する<br>
     *
     * @return string 要求誕生日<br>
     */
    public function getReqBirthday()
    {
        return $this->reqBirthday;
    }

    /**
     * 要求誕生日を設定する<br>
     *
     * @param string $reqBirthday 要求誕生日<br>
     */
    public function setReqBirthday($reqBirthday)
    {
        $this->reqBirthday = $reqBirthday;
    }

    /**
     * 要求電話番号を取得する<br>
     *
     * @return string 要求電話番号<br>
     */
    public function getReqTel()
    {
        return $this->reqTel;
    }

    /**
     * 要求電話番号を設定する<br>
     *
     * @param string $reqTel 要求電話番号<br>
     */
    public function setReqTel($reqTel)
    {
        $this->reqTel = $reqTel;
    }

    /**
     * 要求カナ名前（名）を取得する<br>
     *
     * @return string 要求カナ名前（名）<br>
     */
    public function getReqFirstKanaName()
    {
        return $this->reqFirstKanaName;
    }

    /**
     * 要求カナ名前（名）を設定する<br>
     *
     * @param string $reqFirstKanaName 要求カナ名前（名）<br>
     */
    public function setReqFirstKanaName($reqFirstKanaName)
    {
        $this->reqFirstKanaName = $reqFirstKanaName;
    }

    /**
     * 要求カナ名前（姓）を取得する<br>
     *
     * @return string 要求カナ名前（姓）<br>
     */
    public function getReqLastKanaName()
    {
        return $this->reqLastKanaName;
    }

    /**
     * 要求カナ名前（姓）を設定する<br>
     *
     * @param string $reqLastKanaName 要求カナ名前（姓）<br>
     */
    public function setReqLastKanaName($reqLastKanaName)
    {
        $this->reqLastKanaName = $reqLastKanaName;
    }

    /**
     * 応答マーチャントトランザクション番号を取得する<br>
     *
     * @return string 応答マーチャントトランザクション番号<br>
     */
    public function getResMerchantTransaction()
    {
        return $this->resMerchantTransaction;
    }

    /**
     * 応答マーチャントトランザクション番号を設定する<br>
     *
     * @param string $resMerchantTransaction 応答マーチャントトランザクション番号<br>
     */
    public function setResMerchantTransaction($resMerchantTransaction)
    {
        $this->resMerchantTransaction = $resMerchantTransaction;
    }

    /**
     * 応答リターン参照番号を取得する<br>
     *
     * @return string 応答リターン参照番号<br>
     */
    public function getResReturnReferenceNumber()
    {
        return $this->resReturnReferenceNumber;
    }

    /**
     * 応答リターン参照番号を設定する<br>
     *
     * @param string $resReturnReferenceNumber 応答リターン参照番号<br>
     */
    public function setResReturnReferenceNumber($resReturnReferenceNumber)
    {
        $this->resReturnReferenceNumber = $resReturnReferenceNumber;
    }

    /**
     * 応答承認番号を取得する<br>
     *
     * @return string 応答承認番号<br>
     */
    public function getResAuthCode()
    {
        return $this->resAuthCode;
    }

    /**
     * 応答承認番号を設定する<br>
     *
     * @param string $resAuthCode 応答承認番号<br>
     */
    public function setResAuthCode($resAuthCode)
    {
        $this->resAuthCode = $resAuthCode;
    }

    /**
     * アクションコードを取得する<br>
     *
     * @return string アクションコード<br>
     */
    public function getResActionCode()
    {
        return $this->resActionCode;
    }

    /**
     * アクションコードを設定する<br>
     *
     * @param string $resActionCode アクションコード<br>
     */
    public function setResActionCode($resActionCode)
    {
        $this->resActionCode = $resActionCode;
    }

    /**
     * 応答センターエラーコードを取得する<br>
     *
     * @return string 応答センターエラーコード<br>
     */
    public function getResCenterErrorCode()
    {
        return $this->resCenterErrorCode;
    }

    /**
     * 応答センターエラーコードを設定する<br>
     *
     * @param string $resCenterErrorCode 応答センターエラーコード<br>
     */
    public function setResCenterErrorCode($resCenterErrorCode)
    {
        $this->resCenterErrorCode = $resCenterErrorCode;
    }

    /**
     * 応答与信期間を取得する<br>
     *
     * @return string 応答与信期間<br>
     */
    public function getResAuthTerm()
    {
        return $this->resAuthTerm;
    }

    /**
     * 応答与信期間を設定する<br>
     *
     * @param string $resAuthTerm 応答与信期間<br>
     */
    public function setResAuthTerm($resAuthTerm)
    {
        $this->resAuthTerm = $resAuthTerm;
    }

    /**
     * 要求新規返品を取得する<br>
     *
     * @return string 要求新規返品<br>
     */
    public function getReqWithNew()
    {
        return $this->reqWithNew;
    }

    /**
     * 要求新規返品を設定する<br>
     *
     * @param string $reqWithNew 要求新規返品<br>
     */
    public function setReqWithNew($reqWithNew)
    {
        $this->reqWithNew = $reqWithNew;
    }

    /**
     * 取引金額を取得する<br>
     *
     * @return string 取引金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 取引金額を設定する<br>
     *
     * @param string $amount 取引金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 決済完了フラグを取得する<br>
     *
     * @return string 決済完了フラグ<br>
     */
    public function getTxnFixed()
    {
        return $this->txnFixed;
    }

    /**
     * 決済完了フラグを設定する<br>
     *
     * @param string $txnFixed 決済完了フラグ<br>
     */
    public function setTxnFixed($txnFixed)
    {
        $this->txnFixed = $txnFixed;
    }

    /**
     * Paypal対象取引タイプを取得する<br>
     *
     * @return string 対象取引タイプ<br>
     */
    public function getPpTxnType()
    {
        return $this->ppTxnType;
    }

    /**
     * Paypal対象取引タイプを設定する<br>
     *
     * @param string $ppTxnType 対象取引タイプ<br>
     */
    public function setPpTxnType($ppTxnType)
    {
        $this->ppTxnType = $ppTxnType;
    }

    /**
     * Paypal取引識別子を取得する<br>
     *
     * @return string 取引識別子<br>
     */
    public function getCenterTxnId()
    {
        return $this->centerTxnId;
    }

    /**
     * Paypal取引識別子を設定する<br>
     *
     * @param string $centerTxnId 取引識別子<br>
     */
    public function setCenterTxnId($centerTxnId)
    {
        $this->centerTxnId = $centerTxnId;
    }

    /**
     * 手数料を取得する<br>
     *
     * @return string 手数料<br>
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * 手数料を設定する<br>
     *
     * @param string $feeAmount 手数料<br>
     */
    public function setFeeAmount($feeAmount)
    {
        $this->feeAmount = $feeAmount;
    }

    /**
     * Paypal外貨換算レートを取得する<br>
     *
     * @return string 外貨換算レート<br>
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Paypal外貨換算レートを設定する<br>
     *
     * @param string $exchangeRate 外貨換算レート<br>
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * Paypal純返金金額を取得する<br>
     *
     * @return string 純返金金額<br>
     */
    public function getNetRefundAmount()
    {
        return $this->netRefundAmount;
    }

    /**
     * Paypal純返金金額を設定する<br>
     *
     * @param string $netRefundAmount 純返金金額<br>
     */
    public function setNetRefundAmount($netRefundAmount)
    {
        $this->netRefundAmount = $netRefundAmount;
    }

    /**
     * MPIトランザクションタイプを取得する<br>
     *
     * @return string MPIトランザクションタイプ<br>
     */
    public function getMpiTransactionType()
    {
        return $this->mpiTransactionType;
    }

    /**
     * MPIトランザクションタイプを設定する。<br>
     *
     * @param string $mpiTransactionType MPIトランザクションタイプ<br>
     */
    public function setMpiTransactionType($mpiTransactionType)
    {
        $this->mpiTransactionType = $mpiTransactionType;
    }

    /**
     * リダイレクションURIを取得する<br>
     *
     * @return string リダイレクションURI<br>
     */
    public function getReqRedirectionUri()
    {
        return $this->reqRedirectionUri;
    }

    /**
     * リダイレクションURIを設定する<br>
     *
     * @param string $reqRedirectionUri リダイレクションURI<br>
     */
    public function setReqRedirectionUri($reqRedirectionUri)
    {
        $this->reqRedirectionUri = $reqRedirectionUri;
    }

    /**
     * カード会社IDを取得する<br>
     *
     * @return string カード会社ID<br>
     */
    public function getCorporationId()
    {
        return $this->corporationId;
    }

    /**
     * カード会社IDを設定する<br>
     *
     * @param string $corporationId カード会社ID<br>
     */
    public function setCorporationId($corporationId)
    {
        $this->corporationId = $corporationId;
    }

    /**
     * ブランドIDを取得する<br>
     *
     * @return string ブランドID<br>
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * ブランドIDを設定する<br>
     * @param string $brandId ブランドID<br>
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
    }

    /**
     * 仕向先バイナリを取得する<br>
     *
     * @return string 仕向先バイナリ<br>
     */
    public function getAcquirerBinary()
    {
        return $this->acquirerBinary;
    }

    /**
     * 仕向先バイナリを取得する<br>
     *
     * @param string $acquirerBinary 仕向先バイナリ<br>
     */
    public function setAcquirerBinary($acquirerBinary)
    {
        $this->acquirerBinary = $acquirerBinary;
    }

    /**
     * ディレクトリサービスログインIDを取得する<br>
     *
     * @return string ディレクトリサービスログインID<br>
     */
    public function getDsLoginId()
    {
        return $this->dsLoginId;
    }

    /**
     * ディレクトリサービスログインIDを設定する<br>
     *
     * @param string $dsLoginId ディレクトリサービスログインID<br>
     */
    public function setDsLoginId($dsLoginId)
    {
        $this->dsLoginId = $dsLoginId;
    }

    /**
     * CRRSステータスを取得する<br>
     *
     * @return string CRRSステータス<br>
     */
    public function getCrresStatus()
    {
        return $this->crresStatus;
    }

    /**
     * CRRSステータスを設定する<br>
     *
     * @param string $crresStatus CRRSステータス<br>
     */
    public function setCrresStatus($crresStatus)
    {
        $this->crresStatus = $crresStatus;
    }

    /**
     * VERESステータスを取得する<br>
     *
     * @return string VERESステータス<br>
     */
    public function getVeresStatus()
    {
        return $this->veresStatus;
    }

    /**
     *  VERESステータスを設定する<br>
     *
     * @param string $veresStatus VERESステータス<br>
     */
    public function setVeresStatus($veresStatus)
    {
        $this->veresStatus = $veresStatus;
    }

    /**
     * PARESサインを取得する<br>
     *
     * @return string PARESサイン<br>
     */
    public function getParesSign()
    {
        return $this->paresSign;
    }

    /**
     *  PARESサインを設定する<br>
     *
     * @param string $paresSign PARESサイン<br>
     */
    public function setParesSign($paresSign)
    {
        $this->paresSign = $paresSign;
    }

    /**
     * PARESステータスを取得する<br>
     *
     * @return string PARESステータス<br>
     */
    public function getParesStatus()
    {
        return $this->paresStatus;
    }

    /**
     *  PARESステータスを設定する<br>
     * @param string $paresStatus PARESステータス<br>
     */
    public function setParesStatus($paresStatus)
    {
        $this->paresStatus = $paresStatus;
    }

    /**
     *  PARES ECIを取得する<br>
     * @return string  PARES ECI<br>
     */
    public function getParesEci()
    {
        return $this->paresEci;
    }

    /**
     * PARES ECIを設定する<br>
     * @param string $paresEci PARES ECI<br>
     */
    public function setParesEci($paresEci)
    {
        $this->paresEci = $paresEci;
    }

    /**
     * 本人認証レスポンスコードを取得する<br>
     *
     * @return string 本人認証レスポンスコード<br>
     */
    public function getAuthResponseCode()
    {
        return $this->authResponseCode;
    }

    /**
     * 本人認証レスポンスコードを設定する<br>
     *
     * @param string $authResponseCode 本人認証レスポンスコード<br>
     */
    public function setAuthResponseCode($authResponseCode)
    {
        $this->authResponseCode = $authResponseCode;
    }

    /**
     * 検証レスポンスコードを取得する<br>
     *
     * @return string 検証レスポンスコード<br>
     */
    public function getVerifyResponseCode()
    {
        return $this->verifyResponseCode;
    }

    /**
     * 検証レスポンスコードを設定する<br>
     *
     * @param string $verifyResponseCode 検証レスポンスコード<br>
     */
    public function setVerifyResponseCode($verifyResponseCode)
    {
        $this->verifyResponseCode = $verifyResponseCode;
    }

    /**
     * 応答3Dメッセージバージョンを取得する<br>
     *
     * @return string 応答3Dメッセージバージョン<br>
     */
    public function getRes3dMessageVersion()
    {
        return $this->res3dMessageVersion;
    }

    /**
     * 応答3Dメッセージバージョンを設定する<br>
     *
     * @param string $res3dMessageVersion 応答3Dメッセージバージョン<br>
     */
    public function setRes3dMessageVersion($res3dMessageVersion)
    {
        $this->res3dMessageVersion = $res3dMessageVersion;
    }

    /**
     * 応答3DトランザクションIDを取得する<br>
     *
     * @return string 応答3DトランザクションID<br>
     */
    public function getRes3dTransactionId()
    {
        return $this->res3dTransactionId;
    }

    /**
     * 応答3DトランザクションIDを設定する<br>
     *
     * @param string $res3dTransactionId 応答3DトランザクションID<br>
     */
    public function setRes3dTransactionId($res3dTransactionId)
    {
        $this->res3dTransactionId = $res3dTransactionId;
    }

    /**
     * 応答3D DSトランザクションIDを取得する<br>
     *
     * @return string 応答3D DSトランザクションID<br>
     */
    public function getRes3dDsTransactionId()
    {
        return $this->res3dDsTransactionId;
    }

    /**
     * 応答3D DSトランザクションIDを設定する<br>
     *
     * @param string $res3dDsTransactionId 応答3D DSトランザクションID<br>
     */
    public function setRes3dDsTransactionId($res3dDsTransactionId)
    {
        $this->res3dDsTransactionId = $res3dDsTransactionId;
    }

    /**
     * 応答3DサーバトランザクションIDを取得する<br>
     *
     * @return string 応答3DサーバトランザクションID<br>
     */
    public function getRes3dServerTransactionId()
    {
        return $this->res3dServerTransactionId;
    }

    /**
     * 応答3DサーバトランザクションIDを設定する<br>
     *
     * @param string $res3dServerTransactionId 応答3DサーバトランザクションID<br>
     */
    public function setRes3dServerTransactionId($res3dServerTransactionId)
    {
        $this->res3dServerTransactionId = $res3dServerTransactionId;
    }

    /**
     * 応答3Dトランザクションステータスを取得する<br>
     *
     * @return string 応答3Dトランザクションステータス<br>
     */
    public function getRes3dTransactionStatus()
    {
        return $this->res3dTransactionStatus;
    }

    /**
     * 応答3Dトランザクションステータスを設定する<br>
     *
     * @param string $res3dTransactionStatus 応答3Dトランザクションステータス<br>
     */
    public function setRes3dTransactionStatus($res3dTransactionStatus)
    {
        $this->res3dTransactionStatus = $res3dTransactionStatus;
    }

    /**
     * 応答3D CAVV アルゴリズムを取得する<br>
     *
     * @return string 応答3D CAVV アルゴリズム<br>
     */
    public function getRes3dCavvAlgorithm()
    {
        return $this->res3dCavvAlgorithm;
    }

    /**
     *  応答3D CAVV アルゴリズムを設定する<br>
     *
     * @param string $res3dCavvAlgorithm 応答3D CAVV アルゴリズム<br>
     */
    public function setRes3dCavvAlgorithm($res3dCavvAlgorithm)
    {
        $this->res3dCavvAlgorithm = $res3dCavvAlgorithm;
    }

    /**
     * 応答3D CAVVを取得する<br>
     *
     * @return string 応答3D CAVV<br>
     */
    public function getRes3dCavv()
    {
        return $this->res3dCavv;
    }

    /**
     * 応答3D CAVV を設定する<br>
     *
     * @param string $res3dCavv 応答3D CAVV<br>
     */
    public function setRes3dCavv($res3dCavv)
    {
        $this->res3dCavv = $res3dCavv;
    }

    /**
     * 応答3D ECI を取得する<br>
     *
     * @return string 応答3D ECI<br>
     */
    public function getRes3dEci()
    {
        return $this->res3dEci;
    }

    /**
     * 応答3D ECIを設定する<br>
     *
     * @param string $res3dEci 応答3D ECI<br>
     */
    public function setRes3dEci($res3dEci)
    {
        $this->res3dEci = $res3dEci;
    }

    /**
     * 本人認証要求日時を取得する<br>
     *
     * @return string 本人認証要求日時<br>
     */
    public function getAuthRequestDatetime()
    {
        return $this->authRequestDatetime;
    }

    /**
     * 本人認証要求日時を設定する<br>
     *
     * @param string $authRequestDatetime 本人認証要求日時<br>
     */
    public function setAuthRequestDatetime($authRequestDatetime)
    {
        $this->authRequestDatetime = $authRequestDatetime;
    }

    /**
     * 本人認証応答日時を取得する<br>
     *
     * @return string 本人認証応答日時<br>
     */
    public function getAuthResponseDatetime()
    {
        return $this->authResponseDatetime;
    }

    /**
     * 本人認証応答日時を設定する<br>
     *
     * @param string $authResponseDatetime 本人認証応答日時<br>
     */
    public function setAuthResponseDatetime($authResponseDatetime)
    {
        $this->authResponseDatetime = $authResponseDatetime;
    }

    /**
     * 検証要求日時を取得する<br>
     *
     * @return string 検証要求日時<br>
     */
    public function getVerifyRequestDatetime()
    {
        return $this->verifyRequestDatetime;
    }

    /**
     * 検証要求日時を設定する<br>
     * @param string $verifyRequestDatetime 検証要求日時<br>
     */
    public function setVerifyRequestDatetime($verifyRequestDatetime)
    {
        $this->verifyRequestDatetime = $verifyRequestDatetime;
    }

    /**
     * 検証応答日時を取得する<br>
     *
     * @return string 検証応答日時<br>
     */
    public function getVerifyResponseDatetime()
    {
        return $this->verifyResponseDatetime;
    }

    /**
     * 検証応答日時を設定する<br>
     *
     * @param string $verifyResponseDatetime 検証応答日時<br>
     */
    public function setVerifyResponseDatetime($verifyResponseDatetime)
    {
        $this->verifyResponseDatetime = $verifyResponseDatetime;
    }

    /**
     * 要求通貨単位を取得する<br>
     *
     * @return string 要求通貨単位<br>
     */
    public function getReqCurrencyUnit()
    {
        return $this->reqCurrencyUnit;
    }

    /**
     * 要求通貨単位を設定する<br>
     *
     * @param string $reqCurrencyUnit 要求通貨単位<br>
     */
    public function setReqCurrencyUnit($reqCurrencyUnit)
    {
        $this->reqCurrencyUnit = $reqCurrencyUnit;
    }

    /**
     * 永久不滅ウォレット残高を設定する<br>
     *
     * @param string $aqAqfWalletBalance 永久不滅ウォレット残高<br>
     */
    public function setAqAqfWalletBalance($aqAqfWalletBalance)
    {
        $this->aqAqfWalletBalance = $aqAqfWalletBalance;
    }

    /**
     * 永久不滅ウォレット残高を取得する<br>
     *
     * @return string 永久不滅ウォレット残高<br>
     */
    public function getAqAqfWalletBalance()
    {
        return $this->aqAqfWalletBalance;
    }

    /**
     * 永久不滅ポイント残高を設定する<br>
     *
     * @param string $aqAqfPointBalance 永久不滅ポイント残高<br>
     */
    public function setAqAqfPointBalance($aqAqfPointBalance)
    {
        $this->aqAqfPointBalance = $aqAqfPointBalance;
    }

    /**
     * 永久不滅ポイント残高を取得する<br>
     *
     * @return string 永久不滅ポイント残高<br>
     */
    public function getAqAqfPointBalance()
    {
        return $this->aqAqfPointBalance;
    }

    /**
     * 交換後利用可能バリューを設定する<br>
     *
     * @param string $aqAvailableValue 交換後利用可能バリュー<br>
     */
    public function setAqAvailableValue($aqAvailableValue)
    {
        $this->aqAvailableValue = $aqAvailableValue;
    }

    /**
     * 交換後利用可能バリューを取得する<br>
     *
     * @return string 交換後利用可能バリュー<br>
     */
    public function getAqAvailableValue()
    {
        return $this->aqAvailableValue;
    }

    /**
     * SaisonトランザクションAPI情報リストを設定する<br>
     *
     * @param TransactionApis $transactionApis SaisonトランザクションAPI情報リスト<br>
     */
    public function setTransactionApis($transactionApis)
    {
        $this->transactionApis = $transactionApis;
    }

    /**
     * SaisonトランザクションAPI情報リストを取得する<br>
     *
     * @return TransactionApis SaisonトランザクションAPI情報リスト<br>
     */
    public function getTransactionApis()
    {
        return $this->transactionApis;
    }

    /**
     * Saisonトランザクションカード情報リストを取得する<br>
     *
     * @return TransactionCards Saisonトランザクションカード情報リスト<br>
     */
    public function getTransactionCards()
    {
        return $this->transactionCards;
    }

    /**
     * Saisonトランザクションカード情報リストを設定する<br>
     *
     * @param TransactionCards $transactionCards Saisonトランザクションカード情報リスト<br>
     */
    public function setTransactionCards($transactionCards)
    {
        $this->transactionCards = $transactionCards;
    }

    /**
     * 取引対象タイプを取得する<br>
     * @return string upopTxnType 取引対象タイプ<br>
     */
    public function getUpopTxnType()
    {
        return $this->upopTxnType;
    }

    /**
     * 取引対象タイプを設定する。<br>
     * @param string $upopTxnType 取引対象タイプ<br>
     */
    public function setUpopTxnType($upopTxnType)
    {
        $this->upopTxnType = $upopTxnType;
    }

    /**
     * 決済センターとの取引IDを取得する。<br>
     * @return string resUpopOrderId 決済センターとの取引ID<br>
     */
    public function getResUpopOrderId()
    {
        return $this->resUpopOrderId;
    }

    /**
     * 決済センターとの取引IDを設定する。<br>
     * @param string $resUpopOrderId 決済センターとの取引ID<br>
     */
    public function setResUpopOrderId($resUpopOrderId)
    {
        $this->resUpopOrderId = $resUpopOrderId;
    }

    /**
     * 清算金額を取得する。<br>
     * @return string resUpopSettleAmount 清算金額<br>
     */
    public function getResUpopSettleAmount()
    {
        return $this->resUpopSettleAmount;
    }

    /**
     * 清算金額を設定する。<br>
     * @param string $resUpopSettleAmount 清算金額<br>
     */
    public function setResUpopSettleAmount($resUpopSettleAmount)
    {
        $this->resUpopSettleAmount = $resUpopSettleAmount;
    }

    /**
     * 清算日付を取得する。<br>
     * @return string resUpopSettleDate 清算日付<br>
     */
    public function getResUpopSettleDate()
    {
        return $this->resUpopSettleDate;
    }

    /**
     * 清算日付を設定する。<br>
     * @param string $resUpopSettleDate 清算日付<br>
     */
    public function setResUpopSettleDate($resUpopSettleDate)
    {
        $this->resUpopSettleDate = $resUpopSettleDate;
    }

    /**
     * 清算通貨を取得する。<br>
     * @return string resUpopSettleCurrency 清算通貨<br>
     */
    public function getResUpopSettleCurrency()
    {
        return $this->resUpopSettleCurrency;
    }

    /**
     * 清算通貨を設定する。<br>
     * @param string $resUpopSettleCurrency 清算通貨<br>
     */
    public function setResUpopSettleCurrency($resUpopSettleCurrency)
    {
        $this->resUpopSettleCurrency = $resUpopSettleCurrency;
    }

    /**
     * 外貨換算日付を取得する。<br>
     * @return string resUpopExchangeDate 外貨換算日付<br>
     */
    public function getResUpopExchangeDate()
    {
        return $this->resUpopExchangeDate;
    }

    /**
     * 外貨換算日付を設定する。<br>
     * @param string $resUpopExchangeDate 外貨換算日付<br>
     */
    public function setResUpopExchangeDate($resUpopExchangeDate)
    {
        $this->resUpopExchangeDate = $resUpopExchangeDate;
    }

    /**
     * 外貨換算レートを取得する。<br>
     * @return string resUpopExchangeRate 外貨換算レート<br>
     */
    public function getResUpopExchangeRate()
    {
        return $this->resUpopExchangeRate;
    }

    /**
     * 外貨換算レートを設定する。<br>
     * @param string $resUpopExchangeRate 外貨換算レート<br>
     */
    public function setResUpopExchangeRate($resUpopExchangeRate)
    {
        $this->resUpopExchangeRate = $resUpopExchangeRate;
    }

    /**
     * 決済センターとの取引IDを取得する。<br>
     * @return string centerTradeId 決済センターとの取引ID<br>
     */
    public function getCenterTradeId()
    {
        return $this->centerTradeId;
    }

    /**
     * 決済センターとの取引IDを設定する。<br>
     * @param string $centerTradeId 決済センターとの取引ID<br>
     */
    public function setCenterTradeId($centerTradeId)
    {
        $this->centerTradeId = $centerTradeId;
    }

    /**
     * 対象取引タイプ。<br>
     *
     * @return string alipayTxnType 対象取引タイプ<br>
     */
    public function getAlipayTxnType()
    {
        return $this->alipayTxnType;
    }

    /**
     * 対象取引タイプ。<br>
     *
     * @param string $alipayTxnType 対象取引タイプ<br>
     */
    public function setAlipayTxnType($alipayTxnType)
    {
        $this->alipayTxnType = $alipayTxnType;
    }

    /**
     * 清算金額を取得する。<br>
     * @return string settleAmount 清算金額<br>
     */
    public function getSettleAmount()
    {
        return $this->settleAmount;
    }

    /**
     * 清算金額を設定する。<br>
     * @param string $settleAmount 清算金額<br>
     */
    public function setSettleAmount($settleAmount)
    {
        $this->settleAmount = $settleAmount;
    }

    /**
     * 清算通貨を取得する。<br>
     * @return string settleCurrency 清算通貨<br>
     */
    public function getSettleCurrency()
    {
        return $this->settleCurrency;
    }

    /**
     * 清算通貨を設定する。<br>
     * @param string $settleCurrency 清算通貨<br>
     */
    public function setSettleCurrency($settleCurrency)
    {
        $this->settleCurrency = $settleCurrency;
    }

    /**
     * 支払い日付を取得する。<br>
     * @return string paymentTime 支払い日付<br>
     */
    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    /**
     * 支払い日付を設定する。<br>
     * @param string $paymentTime 支払い日付<br>
     */
    public function setPaymentTime($paymentTime)
    {
        $this->paymentTime = $paymentTime;
    }

    /**
     * 清算日付を取得する。<br>
     * @return string settlementTime 清算日付<br>
     */
    public function getSettlementTime()
    {
        return $this->settlementTime;
    }

    /**
     * 清算日付を設定する。<br>
     * @param string $settlementTime 清算日付<br>
     */
    public function setSettlementTime($settlementTime)
    {
        $this->settlementTime = $settlementTime;
    }

    /**
     * 決済種別を取得する。<br>
     * @return string payType 決済種別<br>
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * 決済種別を設定する。<br>
     * @param string $payType 決済種別<br>
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    }

    /**
     * キャリア結果コードを取得する。<br>
     * @return string crResultCode キャリア結果コード<br>
     */
    public function getCrResultCode()
    {
        return $this->crResultCode;
    }

    /**
     * キャリア結果コードを設定する。<br>
     * @param string $crResultCode キャリア結果コード<br>
     */
    public function setCrResultCode($crResultCode)
    {
        $this->crResultCode = $crResultCode;
    }

    /**
     * 詳細コマンドタイプを取得する。<br>
     * @return string detailCommandType 詳細コマンドタイプ<br>
     */
    public function getDetailCommandType()
    {
        return $this->detailCommandType;
    }

    /**
     * 詳細コマンドタイプを設定する。<br>
     * @param string $detailCommandType 詳細コマンドタイプ<br>
     */
    public function setDetailCommandType($detailCommandType)
    {
        $this->detailCommandType = $detailCommandType;
    }

    /**
     * キャリアへの要求日時を取得する。<br>
     * @return string crRequestDatetime キャリアへの要求日時<br>
     */
    public function getCrRequestDatetime()
    {
        return $this->crRequestDatetime;
    }

    /**
     * キャリアへの要求日時を設定する。<br>
     * @param string $crRequestDatetime キャリアへの要求日時<br>
     */
    public function setCrRequestDatetime($crRequestDatetime)
    {
        $this->crRequestDatetime = $crRequestDatetime;
    }

    /**
     * キャリアからの返戻日時を取得する。<br>
     * @return string crResponseDatetime キャリアからの返戻日時<br>
     */
    public function getCrResponseDatetime()
    {
        return $this->crResponseDatetime;
    }

    /**
     * キャリアからの返戻日時を設定する。<br>
     * @param string $crResponseDatetime キャリアからの返戻日時<br>
     */
    public function setCrResponseDatetime($crResponseDatetime)
    {
        $this->crResponseDatetime = $crResponseDatetime;
    }

    /**
     * 取引対象タイプを取得する<br>
     * @return string oricoTxnType 取引対象タイプ<br>
     */
    public function getOricoTxnType()
    {
        return $this->oricoTxnType;
    }

    /**
     * 取引対象タイプを設定する。<br>
     * @param string $oricoTxnType 取引対象タイプ<br>
     */
    public function setOricoTxnType($oricoTxnType)
    {
        $this->oricoTxnType = $oricoTxnType;
    }

    /**
     * 審査結果コードを取得する<br>
     *
     * @return string 審査結果コード<br>
     */
    public function getOrderStateCode()
    {
        return $this->orderStateCode;
    }

    /**
     * 審査結果コードを設定する<br>
     *
     * @param string $orderStateCode 審査結果コード<br>
     */
    public function setOrderStateCode($orderStateCode)
    {
        $this->orderStateCode = $orderStateCode;
    }

    /**
     * 承認番号を取得する<br>
     *
     * @return string 承認番号<br>
     */
    public function getApprovalNo()
    {
        return $this->approvalNo;
    }

    /**
     * 承認番号を設定する<br>
     *
     * @param string $approvalNo 承認番号<br>
     */
    public function setApprovalNo($approvalNo)
    {
        $this->approvalNo = $approvalNo;
    }

    /**
     * 申込日を取得する<br>
     *
     * @return string 申込日<br>
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * 申込日を設定する<br>
     *
     * @param string $requestDate 申込日<br>
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;
    }

    /**
     * ローン元金を取得する<br>
     *
     * @return string ローン元金<br>
     */
    public function getLoanPrincipal()
    {
        return $this->loanPrincipal;
    }

    /**
     * ローン元金を設定する<br>
     *
     * @param string $loanPrincipal ローン元金<br>
     */
    public function setLoanPrincipal($loanPrincipal)
    {
        $this->loanPrincipal = $loanPrincipal;
    }

    /**
     * 支払回数を取得する<br>
     *
     * @return string 支払回数<br>
     */
    public function getPaymentCount()
    {
        return $this->paymentCount;
    }

    /**
     * 支払回数を設定する<br>
     *
     * @param string $paymentCount 支払回数<br>
     */
    public function setPaymentCount($paymentCount)
    {
        $this->paymentCount = $paymentCount;
    }

    /**
     * 円金額を取得する<br>
     *
     * @return string 円金額<br>
     */
    public function getJpyAmount()
    {
        return $this->jpyAmount;
    }

    /**
     * 円金額を設定する<br>
     *
     * @param string $jpyAmount 円金額<br>
     */
    public function setJpyAmount($jpyAmount)
    {
        $this->jpyAmount = $jpyAmount;
    }

    /**
     * 多通貨レスポンスコードを取得する<br>
     *
     * @return string 多通貨レスポンスコード<br>
     */
    public function getResMcpResponseCode()
    {
        return $this->resMcpResponseCode;
    }

    /**
     * 多通貨レスポンスコードを設定する<br>
     *
     * @param string $resMcpResponseCode 多通貨レスポンスコード<br>
     */
    public function setResMcpResponseCode($resMcpResponseCode)
    {
        $this->resMcpResponseCode = $resMcpResponseCode;
    }

    /**
     * 楽天APIエラーコードを取得する<br>
     *
     * @return string 楽天APIエラーコード<br>
     */
    public function getRakutenApiErrorCode()
    {
        return $this->rakutenApiErrorCode;
    }

    /**
     * 楽天APIエラーコードを設定する<br>
     *
     * @param string $rakutenApiErrorCode 楽天エラーコード<br>
     */
    public function setRakutenApiErrorCode($rakutenApiErrorCode)
    {
        $this->rakutenApiErrorCode = $rakutenApiErrorCode;
    }

    /**
     * 楽天取引エラーコードを取得する<br>
     *
     * @return string 楽天取引エラーコード<br>
     */
    public function getRakutenOrderErrorCode()
    {
        return $this->rakutenOrderErrorCode;
    }

    /**
     * 楽天取引エラーコードを設定する<br>
     *
     * @param string $rakutenOrderErrorCode 楽天取引エラーコード<br>
     */
    public function setRakutenOrderErrorCode($rakutenOrderErrorCode)
    {
        $this->rakutenOrderErrorCode = $rakutenOrderErrorCode;
    }

    /**
     * 楽天への要求日時を取得する<br>
     *
     * @return string 楽天への要求日時<br>
     */
    public function getRakutenRequestDatetime()
    {
        return $this->rakutenRequestDatetime;
    }

    /**
     * 楽天への要求日時を設定する<br>
     *
     * @param string $rakutenRequestDatetime 楽天への要求日時<br>
     */
    public function setRakutenRequestDatetime($rakutenRequestDatetime)
    {
        $this->rakutenRequestDatetime = $rakutenRequestDatetime;
    }

    /**
     * 楽天への返戻日時を取得する<br>
     *
     * @return string 楽天への返戻日時<br>
     */
    public function getRakutenResponseDatetime()
    {
        return $this->rakutenResponseDatetime;
    }

    /**
     * 楽天への返戻日時を設定する<br>
     *
     * @param string $rakutenResponseDatetime 楽天への返戻日時<br>
     */
    public function setRakutenResponseDatetime($rakutenResponseDatetime)
    {
        $this->rakutenResponseDatetime = $rakutenResponseDatetime;
    }

    /**
     * リクルートエラーコードを取得する<br>
     *
     * @return string 楽天APIエラーコード<br>
     */
    public function getRecruitErrorCode()
    {
        return $this->recruitErrorCode;
    }

    /**
     * リクルートエラーコードを設定する<br>
     *
     * @param string $recruitErrorCode リクルートエラーコード<br>
     */
    public function setRecruitErrorCode($recruitErrorCode)
    {
        $this->recruitErrorCode = $recruitErrorCode;
    }

    /**
     * リクルートへの要求日時を取得する<br>
     *
     * @return string リクルートへの要求日時<br>
     */
    public function getRecruitRequestDatetime()
    {
        return $this->recruitRequestDatetime;
    }

    /**
     * リクルートへの要求日時を設定する<br>
     *
     * @param string $recruitRequestDatetime リクルートへの要求日時<br>
     */
    public function setRecruitRequestDatetime($recruitRequestDatetime)
    {
        $this->recruitRequestDatetime = $recruitRequestDatetime;
    }

    /**
     * リクルートからの返戻日時を取得する<br>
     *
     * @return string リクルートからの返戻日時<br>
     */
    public function getRecruitResponseDatetime()
    {
        return $this->recruitResponseDatetime;
    }

    /**
     * リクルートからの返戻日時を設定する<br>
     *
     * @param string $recruitResponseDatetime リクルートからの返戻日時<br>
     */
    public function setRecruitResponseDatetime($recruitResponseDatetime)
    {
        $this->recruitResponseDatetime = $recruitResponseDatetime;
    }

    /**
     * LINE Payエラーコードを取得する<br>
     *
     * @return string LINE Payエラーコード<br>
     */
    public function getLinepayErrorCode()
    {
        return $this->linepayErrorCode;
    }

    /**
     * LINE Payエラーコードを設定する<br>
     *
     * @param string $linepayErrorCode LINE Payエラーコード<br>
     */
    public function setLinepayErrorCode($linepayErrorCode)
    {
        $this->linepayErrorCode = $linepayErrorCode;
    }

    /**
     * LINE Payへの要求日時を取得する<br>
     *
     * @return string LINE Payへの要求日時<br>
     */
    public function getLinepayRequestDatetime()
    {
        return $this->linepayRequestDatetime;
    }

    /**
     * LINE Payへの要求日時を設定する<br>
     *
     * @param string $linepayRequestDatetime LINE Payへの要求日時<br>
     */
    public function setLinepayRequestDatetime($linepayRequestDatetime)
    {
        $this->linepayRequestDatetime = $linepayRequestDatetime;
    }

    /**
     * LINE Payからの返戻日時を取得する<br>
     *
     * @return string LINE Payからの返戻日時<br>
     */
    public function getLinepayResponseDatetime()
    {
        return $this->linepayResponseDatetime;
    }

    /**
     * LINE Payからの返戻日時を設定する<br>
     *
     * @param string $linepayResponseDatetime LINE Payからの返戻日時<br>
     */
    public function setLinepayResponseDatetime($linepayResponseDatetime)
    {
        $this->linepayResponseDatetime = $linepayResponseDatetime;
    }

    /**
     * 承認番号（MasterPass）を取得する
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * 承認番号（MasterPass）を設定する
     *
     * @param string $authCode 承認番号（MasterPass）
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
    }

    /**
     * リファレンス番号を取得する
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * リファレンス番号を設定する
     *
     * @param string $referenceNumber リファレンス番号
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }


    /**
     * カードプラグインから返却されたVResultCodeを取得する
     */
    public function getCardVResultCode()
    {
        return $this->cardVResultCode;
    }

    /**
     * カードプラグインから返却されたVResultCodeを設定する
     *
     * @param string $cardVResultCode カードプラグインから返却されたVResultCode
     */
    public function setCardVResultCode($cardVResultCode)
    {
        $this->cardVResultCode = $cardVResultCode;
    }

    /**
     * MasterPassへの要求日時を取得する<br>
     *
     * @return string MasterPassへの要求日時<br>
     */
    public function getMasterpassRequestDatetime()
    {
        return $this->masterpassRequestDatetime;
    }

    /**
     * MasterPassへの要求日時を設定する<br>
     *
     * @param string $masterpassRequestDatetime MasterPassへの要求日時<br>
     */
    public function setMasterpassRequestDatetime($masterpassRequestDatetime)
    {
        $this->masterpassRequestDatetime = $masterpassRequestDatetime;
    }

    /**
     * MasterPassからの返戻日時を取得する<br>
     *
     * @return string MasterPassからの返戻日時<br>
     */
    public function getMasterpassResponseDatetime()
    {
        return $this->masterpassResponseDatetime;
    }

    /**
     * MasterPassからの返戻日時を設定する<br>
     *
     * @param string $masterpassResponseDatetime MasterPassからの返戻日時<br>
     */
    public function setMasterpassResponseDatetime($masterpassResponseDatetime)
    {
        $this->masterpassResponseDatetime = $masterpassResponseDatetime;
    }

    /**
     * 消込フラグを取得する<br>
     *
     * @return string 消込フラグ<br>
     */
    public function getWithReconcile()
    {
        return $this->withReconcile;
    }

    /**
     * 消込フラグを設定する<br>
     *
     * @param string $withReconcile 消込フラグ<br>
     */
    public function setWithReconcile($withReconcile)
    {
        $this->withReconcile = $withReconcile;
    }

    /**
     * 入金IDを取得する<br>
     *
     * @return string 入金ID<br>
     */
    public function getDepositId()
    {
        return $this->depositId;
    }

    /**
     * 入金IDを設定する<br>
     *
     * @param string $depositId 入金ID<br>
     */
    public function setDepositId($depositId)
    {
        $this->depositId = $depositId;
    }

    /**
     * 登録方法を取得する<br>
     *
     * @return string 登録方法<br>
     */
    public function getRegistrationMethod()
    {
        return $this->registrationMethod;
    }

    /**
     * 登録方法を設定する。<br>
     *
     * @param string $registrationMethod 登録方法<br>
     */
    public function setRegistrationMethod($registrationMethod)
    {
        $this->registrationMethod = $registrationMethod;
    }

    /**
     * 入金日を取得する<br>
     *
     * @return string 入金日<br>
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }

    /**
     * 入金日を設定する<br>
     *
     * @param string $depositDate 入金日<br>
     */
    public function setDepositDate($depositDate)
    {
        $this->depositDate = $depositDate;
    }

    /**
     * 振込人名を取得する<br>
     *
     * @return string 振込人名<br>
     */
    public function getTransferName()
    {
        return $this->transferName;
    }

    /**
     * 振込人名を設定する<br>
     *
     * @param string $transferName 振込人名<br>
     */
    public function setTransferName($transferName)
    {
        $this->transferName = $transferName;
    }

    /**
     * エラーコードを取得する<br>
     *
     * @return string エラーコード<br>
     */
    public function getTenpayErrorCode()
    {
        return $this->tenpayErrorCode;
    }

    /**
     * エラーコードを設定する<br>
     *
     * @param string $tenpayErrorCode エラーコード<br>
     */
    public function setTenpayErrorCode($tenpayErrorCode)
    {
        $this->tenpayErrorCode = $tenpayErrorCode;
    }

    /**
     * Tenpayへの要求日時を取得する<br>
     *
     * @return string Tenpayへの要求日時<br>
     */
    public function getTenpayRequestDatetime()
    {
        return $this->tenpayRequestDatetime;
    }

    /**
     * Tenpayへの要求日時を設定する<br>
     *
     * @param string $tenpayRequestDatetime Tenpayへの要求日時<br>
     */
    public function setTenpayRequestDatetime($tenpayRequestDatetime)
    {
        $this->tenpayRequestDatetime = $tenpayRequestDatetime;
    }

    /**
     * Tenpayからの返戻日時を取得する<br>
     *
     * @return string Tenpayからの返戻日時<br>
     */
    public function getTenpayResponseDatetime()
    {
        return $this->tenpayResponseDatetime;
    }

    /**
     * Tenpayからの返戻日時を設定する<br>
     *
     * @param string $tenpayResponseDatetime Tenpayからの返戻日時<br>
     */
    public function setTenpayResponseDatetime($tenpayResponseDatetime)
    {
        $this->tenpayResponseDatetime = $tenpayResponseDatetime;
    }

    /**
     * 応答センター処理通番を取得する<br>
     *
     * @return string 応答センター処理通番<br>
     */
    public function getResCenterProcessNumber()
    {
        return $this->resCenterProcessNumber;
    }

    /**
     * 応答センター処理通番を設定する<br>
     *
     * @param string $resCenterProcessNumber 応答センター処理通番<br>
     */
    public function setResCenterProcessNumber($resCenterProcessNumber)
    {
        $this->resCenterProcessNumber = $resCenterProcessNumber;
    }

    /**
     * 応答センター送信日時を取得する<br>
     *
     * @return string 応答センター送信日時<br>
     */
    public function getResCenterSendDateTime()
    {
        return $this->resCenterSendDateTime;
    }

    /**
     * 応答センター送信日時を設定する<br>
     *
     * @param string $resCenterSendDateTime 応答センター送信日時<br>
     */
    public function setResCenterSendDateTime($resCenterSendDateTime)
    {
        $this->resCenterSendDateTime = $resCenterSendDateTime;
    }

    /**
     * 店舗IDを取得する<br>
     *
     * @return string 店舗ID<br>
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * 店舗IDを設定する<br>
     *
     * @param string $storeId 店舗ID<br>
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * 店舗端末IDを取得する<br>
     *
     * @return string 店舗端末ID<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 店舗端末IDを設定する<br>
     *
     * @param string $terminalId 店舗端末ID<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * PayPay返戻コードを取得する<br>
     *
     * @return string PayPay返戻コード<br>
     */
    public function getPaypayResultCode()
    {
        return $this->paypayResultCode;
    }

    /**
     * PayPay返戻コードを設定する<br>
     *
     * @param string $paypayResultCode PayPay返戻コード<br>
     */
    public function setPaypayResultCode($paypayResultCode)
    {
        $this->paypayResultCode = $paypayResultCode;
    }

    /**
     * 決済事業者コードを取得する<br>
     *
     * @return string 決済事業者コード<br>
     */
    public function getSettleBizCode()
    {
        return $this->settleBizCode;
    }

    /**
     * 決済事業者コードを設定する<br>
     *
     * @param string $settleBizCode 決済事業者コード<br>
     */
    public function setSettleBizCode($settleBizCode)
    {
        $this->settleBizCode = $settleBizCode;
    }

    /**
     * レシート番号を取得する<br>
     *
     * @return string レシート番号<br>
     */
    public function getReceiptNumber()
    {
        return $this->receiptNumber;
    }

    /**
     * レシート番号を設定する<br>
     *
     * @param string $receiptNumber レシート番号<br>
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;
    }

    /**
     * 商品名を取得する<br>
     *
     * @return string 商品名<br>
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * 商品名を設定する<br>
     *
     * @param string $itemName 商品名<br>
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * PayPayへの要求日時を取得する<br>
     *
     * @return string PayPayへの要求日時<br>
     */
    public function getPaypayRequestDatetime()
    {
        return $this->paypayRequestDatetime;
    }

    /**
     * PayPayへの要求日時を設定する<br>
     *
     * @param string $paypayRequestDatetime PayPayへの要求日時<br>
     */
    public function setPaypayRequestDatetime($paypayRequestDatetime)
    {
        $this->paypayRequestDatetime = $paypayRequestDatetime;
    }

    /**
     * PayPayからの返戻日時を取得する<br>
     *
     * @return string PayPayからの返戻日時<br>
     */
    public function getPaypayResponseDatetime()
    {
        return $this->paypayResponseDatetime;
    }

    /**
     * PayPayからの返戻日時を設定する<br>
     *
     * @param string $paypayResponseDatetime PayPayからの返戻日時<br>
     */
    public function setPaypayResponseDatetime($paypayResponseDatetime)
    {
        $this->paypayResponseDatetime = $paypayResponseDatetime;
    }

    /**
     * PayPayトランザクションIDを取得する<br>
     *
     * @return string PayPayトランザクションID<br>
     */
    public function getPaypayOnlineTxnId()
    {
        return $this->paypayOnlineTxnId;
    }

    /**
     * PayPayトランザクションIDを設定する<br>
     *
     * @param string $paypayOnlineTxnId PayPayトランザクションID<br>
     */
    public function setPaypayOnlineTxnId($paypayOnlineTxnId)
    {
        $this->paypayOnlineTxnId = $paypayOnlineTxnId;
    }

    /**
     * PayPayエラーコードを取得する<br>
     *
     * @return string PayPayエラーコード<br>
     */
    public function getPaypayErrorCode()
    {
        return $this->paypayErrorCode;
    }

    /**
     * PayPayエラーコードを設定する<br>
     *
     * @param string $paypayErrorCode PayPayエラーコード<br>
     */
    public function setPaypayErrorCode($paypayErrorCode)
    {
        $this->paypayErrorCode = $paypayErrorCode;
    }

    /**
     * 決済ゲートウェイ管理IDを設定する
     *
     * @param string $gatewayTransId 決済ゲートウェイ管理ID
     */
    public function setGatewayTransId($gatewayTransId)
    {
        $this->gatewayTransId = $gatewayTransId;
    }

    /**
     * 決済ゲートウェイ管理IDを取得する
     *
     * @return string gatewayTransId 決済ゲートウェイ管理ID
     */
    public function getGatewayTransId()
    {
        return $this->gatewayTransId;
    }

    /**
     * Alipay+決済センター結果コードを設定する
     *
     * @param string $alipayxResultCode Alipay+決済センター結果コード
     */
    public function setAlipayxResultCode($alipayxResultCode)
    {
        $this->alipayxResultCode = $alipayxResultCode;
    }

    /**
     * Alipay+決済センター結果コードを取得する
     *
     * @return string alipayxResultCode Alipay+決済センター結果コード
     */
    public function getAlipayxResultCode()
    {
        return $this->alipayxResultCode;
    }

    /**
     * Alipay+決済センターへの要求日時を設定する
     *
     * @param string $alipayxRequestDatetime Alipay+決済センターへの要求日時
     */
    public function setAlipayxRequestDatetime($alipayxRequestDatetime)
    {
        $this->alipayxRequestDatetime = $alipayxRequestDatetime;
    }

    /**
     * Alipay+決済センターへの要求日時を取得する
     *
     * @return string alipayxRequestDatetime Alipay+決済センターへの要求日時
     */
    public function getAlipayxRequestDatetime()
    {
        return $this->alipayxRequestDatetime;
    }

    /**
     * Alipay+決済センターからの返戻日時を設定する
     *
     * @param string $alipayxResponseDatetime Alipay+決済センターからの返戻日時
     */
    public function setAlipayxResponseDatetime($alipayxResponseDatetime)
    {
        $this->alipayxResponseDatetime = $alipayxResponseDatetime;
    }

    /**
     * Alipay+決済センターからの返戻日時を取得する
     *
     * @return string alipayxResponseDatetime Alipay+決済センターからの返戻日時
     */
    public function getAlipayxResponseDatetime()
    {
        return $this->alipayxResponseDatetime;
    }

    /**
     * CvsPay結果コードを取得する
     *
     * @return string CvsPay結果コード
     */
    public function getCvspayResultCd()
    {
        return $this->cvspayResultCd;
    }

    /**
     * CvsPay結果コードを設定する
     *
     * @param string $cvspayResultCd CvsPay結果コード
     */
    public function setCvspayResultCd($cvspayResultCd)
    {
        $this->cvspayResultCd = $cvspayResultCd;
    }

    /**
     * CvsPayへの要求日時を取得する
     *
     * @return string CvsPayへの要求日時
     */
    public function getCvspayRequestDatetime()
    {
        return $this->cvspayRequestDatetime;
    }

    /**
     * CvsPayへの要求日時を設定する
     *
     * @param string $cvspayRequestDatetime CvsPayへの要求日時
     */
    public function setCvspayRequestDatetime($cvspayRequestDatetime)
    {
        $this->cvspayRequestDatetime = $cvspayRequestDatetime;
    }

    /**
     * CvsPayからの返戻日時を取得する
     *
     * @return string CvsPayからの返戻日時
     */
    public function getCvspayResponseDatetime()
    {
        return $this->cvspayResponseDatetime;
    }

    /**
     * CvsPayからの返戻日時を設定する
     *
     * @param string $cvspayResponseDatetime CvsPayからの返戻日時
     */
    public function setCvspayResponseDatetime($cvspayResponseDatetime)
    {
        $this->cvspayResponseDatetime = $cvspayResponseDatetime;
    }

    /**
     * CvsPay取消オーダーIDを取得する
     *
     * @return string CvsPay取消オーダーID
     */
    public function getCvspayCancelOrderId()
    {
        return $this->cvspayCancelOrderId;
    }

    /**
     * CvsPay取消オーダーIDを設定する
     *
     * @param string $cvspayCancelOrderId CvsPay取消オーダーID
     */
    public function setCvspayCancelOrderId($cvspayCancelOrderId)
    {
        $this->cvspayCancelOrderId = $cvspayCancelOrderId;
    }

    /**
     * 自動審査結果を取得する<br>
     *
     * @return string 自動審査結果<br>
     */
    public function getAuthorResult()
    {
        return $this->authorResult;
    }

    /**
     * 自動審査結果を設定する<br>
     *
     * @param string $authorResult 自動審査結果<br>
     */
    public function setAuthorResult($authorResult)
    {
        $this->authorResult = $authorResult;
    }

    /**
     * 決済センターのトランザクション管理IDを取得する<br>
     *
     * @return string 決済センターのトランザクション管理ID<br>
     */
    public function getCenterTransactionId()
    {
        return $this->centerTransactionId;
    }

    /**
     * 決済センターのトランザクション管理IDを設定する<br>
     *
     * @param string $centerTransactionId 決済センターのトランザクション管理ID<br>
     */
    public function setCenterTransactionId($centerTransactionId)
    {
        $this->centerTransactionId = $centerTransactionId;
    }

    /**
     * 決済センター結果コードを取得する<br>
     *
     * @return string 決済センター結果コード<br>
     */
    public function getCenterResultCode()
    {
        return $this->centerResultCode;
    }

    /**
     * 決済センター結果コードを設定する<br>
     *
     * @param string $centerResultCode 決済センター結果コード<br>
     */
    public function setCenterResultCode($centerResultCode)
    {
        $this->centerResultCode = $centerResultCode;
    }

    /**
     * 決済センター状態コードを取得する<br>
     *
     * @return string 決済センター状態コード<br>
     */
    public function getCenterStateCode()
    {
        return $this->centerStateCode;
    }

    /**
     * 決済センター状態コードを設定する<br>
     *
     * @param string $centerStateCode 決済センター状態コード<br>
     */
    public function setCenterStateCode($centerStateCode)
    {
        $this->centerStateCode = $centerStateCode;
    }

    /**
     * 決済センター理由コードを取得する<br>
     *
     * @return string 決済センター理由コード<br>
     */
    public function getCenterReasonCode()
    {
        return $this->centerReasonCode;
    }

    /**
     * 決済センター理由コードを設定する<br>
     *
     * @param string $centerReasonCode 決済センター理由コード<br>
     */
    public function setCenterReasonCode($centerReasonCode)
    {
        $this->centerReasonCode = $centerReasonCode;
    }

    /**
     * merpayエラーコードを取得する<br>
     *
     * @return string merpayエラーコード<br>
     */
    public function getMerpayErrorCode()
    {
        return $this->merpayErrorCode;
    }

    /**
     * merpayエラーコードを設定する<br>
     *
     * @param string $merpayErrorCode merpayエラーコード<br>
     */
    public function setMerpayErrorCode($merpayErrorCode)
    {
        $this->merpayErrorCode = $merpayErrorCode;
    }

    /**
     * 従業員IDを取得する
     *
     * @return string operatorId 従業員ID
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * 従業員IDを設定する
     *
     * @param string $operatorId 従業員ID
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
    }

    /**
     * 伝票コードを取得する
     *
     * @return string slipCode 伝票コード
     */
    public function getSlipCode()
    {
        return $this->slipCode;
    }

    /**
     * 伝票コードを設定する
     *
     * @param string $slipCode 伝票コード
     */
    public function setSlipCode($slipCode)
    {
        $this->slipCode = $slipCode;
    }

    /**
     * merpayの管理IDを取得する<br>
     *
     * @return string merpayの管理ID<br>
     */
    public function getMerpayResourceId()
    {
        return $this->merpayResourceId;
    }

    /**
     * merpayの管理IDを設定する<br>
     *
     * @param string $merpayResourceId merpayの管理ID<br>
     */
    public function setMerpayResourceId($merpayResourceId)
    {
        $this->merpayResourceId = $merpayResourceId;
    }

    /**
     * 決済センターとの取引IDを取得する<br>
     *
     * @return string 決済センターとの取引ID<br>
     */
    public function getMerpayProcessingId()
    {
        return $this->merpayProcessingId;
    }

    /**
     * 決済センターとの取引IDを設定する<br>
     *
     * @param string $merpayProcessingId 決済センターとの取引ID<br>
     */
    public function setMerpayProcessingId($merpayProcessingId)
    {
        $this->merpayProcessingId = $merpayProcessingId;
    }

    /**
     * merpayへの要求日時を取得する<br>
     *
     * @return string merpayへの要求日時<br>
     */
    public function getMerpayRequestDatetime()
    {
        return $this->merpayRequestDatetime;
    }

    /**
     * merpayへの要求日時を設定する<br>
     *
     * @param string $merpayRequestDatetime merpayへの要求日時<br>
     */
    public function setMerpayRequestDatetime($merpayRequestDatetime)
    {
        $this->merpayRequestDatetime = $merpayRequestDatetime;
    }

    /**
     * merpayからの返戻日時を取得する<br>
     *
     * @return string merpayからの返戻日時<br>
     */
    public function getMerpayResponseDatetime()
    {
        return $this->merpayResponseDatetime;
    }

    /**
     * merpayからの返戻日時を設定する<br>
     *
     * @param string $merpayResponseDatetime merpayからの返戻日時<br>
     */
    public function setMerpayResponseDatetime($merpayResponseDatetime)
    {
        $this->merpayResponseDatetime = $merpayResponseDatetime;
    }

    /**
     * 問合せ番号を取得する
     *
     * @return string inquiryCode 問合せ番号
     */
    public function getInquiryCode()
    {
        return $this->inquiryCode;
    }

    /**
     * 問合せ番号を設定する
     *
     * @param string $inquiryCode 問合せ番号
     */
    public function setInquiryCode($inquiryCode)
    {
        $this->inquiryCode = $inquiryCode;
    }

    /**
     * クレジット利用額を取得する
     *
     * @return string useCredit クレジット利用額
     */
    public function getUseCredit()
    {
        return $this->useCredit;
    }

    /**
     * クレジット利用額を設定する
     *
     * @param string $useCredit クレジット利用額
     */
    public function setUseCredit($useCredit)
    {
        $this->useCredit = $useCredit;
    }

    /**
     * クーポン利用額を取得する
     *
     * @return string useCoupon クーポン利用額
     */
    public function getUseCoupon()
    {
        return $this->useCoupon;
    }

    /**
     * クーポン利用額を設定する
     *
     * @param string $useCoupon クーポン利用額
     */
    public function setUseCoupon($useCoupon)
    {
        $this->useCoupon = $useCoupon;
    }

    /**
     * ポイント利用額を取得する
     *
     * @return string usePoint ポイント利用額
     */
    public function getUsePoint()
    {
        return $this->usePoint;
    }

    /**
     * ポイント利用額を設定する
     *
     * @param string $usePoint ポイント利用額
     */
    public function setUsePoint($usePoint)
    {
        $this->usePoint = $usePoint;
    }

    /**
     * エポスへの要求日時を取得する
     *
     * @return string eposRequestDatetime エポスへの要求日時
     */
    public function getEposRequestDatetime()
    {
        return $this->eposRequestDatetime;
    }

    /**
     * エポスへの要求日時を設定する
     *
     * @param string $eposRequestDatetime エポスへの要求日時
     */
    public function setEposRequestDatetime($eposRequestDatetime)
    {
        $this->eposRequestDatetime = $eposRequestDatetime;
    }

    /**
     * エポスへの返戻日時を取得する
     *
     * @return string eposResponseDatetime エポスへの返戻日時
     */
    public function getEposResponseDatetime()
    {
        return $this->eposResponseDatetime;
    }

    /**
     * エポスへの返戻日時を設定する
     *
     * @param string $eposResponseDatetime エポスへの返戻日時
     */
    public function setEposResponseDatetime($eposResponseDatetime)
    {
        $this->eposResponseDatetime = $eposResponseDatetime;
    }

    /**
     * カードの要求支払種別を取得する。
     *
     * @return string カードの要求支払種別
     */
    public function getReqPaymentType()
    {
        return $this->reqPaymentType;
    }

    /**
     * カードの要求支払種別を設定する。
     *
     * @param string $reqPaymentType カードの要求支払種別
     */
    public function setReqPaymentType($reqPaymentType)
    {
        $this->reqPaymentType = $reqPaymentType;
    }

    /**
     * カードの要求レスポンスコードを取得する。
     *
     * @return string カードの要求レスポンスコード
     */
    public function getReqResponseCode()
    {
        return $this->reqResponseCode;
    }

    /**
     * カードの要求レスポンスコードを設定する。
     *
     * @param string $reqResponseCode カードの要求レスポンスコード
     */
    public function setReqResponseCode($reqResponseCode)
    {
        $this->reqResponseCode = $reqResponseCode;
    }

    /**
     * 頻度（単位）を取得する<br>
     *
     * @return string frequencyUnit<br>
     */
    public function getFrequencyUnit()
    {
        return $this->frequencyUnit;
    }

    /**
     * 頻度（単位）を設定する<br>
     *
     * @param string  frequencyUnit 頻度（単位）<br>
     */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->frequencyUnit = $frequencyUnit;
    }

    /**
     * 頻度（値）を取得する<br>
     *
     * @return string frequencyValue<br>
     */
    public function getFrequencyValue()
    {
        return $this->frequencyValue;
    }

    /**
     * 頻度（値）を設定する<br>
     *
     * @param string  frequencyValue 頻度（値）<br>
     */
    public function setFrequencyValue($frequencyValue)
    {
        $this->frequencyValue = $frequencyValue;
    }

    /**
     * 楽天APIエラータイプを取得する<br>
     * 
     * @return string rakutenApiErrorType<br>
     */
    public function getRakutenApiErrorType()
    {
        return $this->rakutenApiErrorType;
    }

    /**
     * 楽天APIエラータイプを設定する<br>
     * 
     * @param string  rakutenApiErrorType 楽天APIエラータイプ<br>
     */
    public function setRakutenApiErrorType($rakutenApiErrorType)
    {
        $this->rakutenApiErrorType = $rakutenApiErrorType;
    }

}
