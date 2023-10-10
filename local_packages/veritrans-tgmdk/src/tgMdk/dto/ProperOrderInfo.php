<?php

namespace tgMdk\dto;

/**
 * 検索結果:決済オーダー情報のクラス
 *
 * @author Veritrans, Inc.
 */
class ProperOrderInfo
{

    /**
     * 決済方式<br>
     */
    private $settlementMethod;
    /**
     * 決済タイプ<br>
     */
    private $settlementType;

    /**
     * 決済金額<br>
     */
    private $amount;

    /**
     * 決済申込金額
     */
    private $authorizeAmount;

    /**
     * 残高
     */
    private $balance;

    /**
     * 利用ポイント
     */
    private $usedPoint;

    /**
     * 利用ポイント
     */
    private $usePoint;

    /**
     * 付与ポイント
     */
    private $givePoint;

    /**
     * リクルートクーポン
     */
    private $recruitCoupon;

    /**
     * マーチャントクーポン
     */
    private $merchantCoupon;

    /**
     * 決済期限<br>
     */
    private $settlementLimit;

    /**
     * 転送メール送信要否<br>
     */
    private $forwardMailFlag;

    /**
     * マーチャントメールアドレス<br>
     */
    private $merchantMailAddr;

    /**
     * 取消返金通知メールアドレス<br>
     */
    private $cancelMailAddr;
    /**
     * 依頼メール付加情報<br>
     */
    private $requestMailAddInfo;

    /**
     * 完了メール付加情報<br>
     */
    private $completeMailAddInfo;
    /**
     * ショップ名<br>
     */
    private $shopName;
    /**
     * 完了メール送信要否<br>
     */
    private $completeMailFlag;
    /**
     * 内容確認画面付加情報<br>
     */
    private $confirmScreenAddInfo;

    /**
     * 完了画面付加情報<br>
     */
    private $completeScreenAddInfo;
    /**
     * 画面タイトル<br>
     */
    private $screenTitle;

    /**
     * 決済完了戻り先種別<br>
     */
    private $completeReturnKind;
    /**
     * 決済完了戻り先URL<br>
     */
    private $completeReturnUrl;

    /**
     * 決済完了通知URL<br>
     */
    private $completeNoticeUrl;

    /**
     * 販売区分<br>
     */
    private $salesType;

    /**
     * 備考<br>
     */
    private $free;

    /**
     * 返金オーダーID<br>
     */
    private $refundOrderCtlId;

    /**
     * 決済アプリ起動URL<br>
     */
    private $appUrl;

    /**
     * オーダー種別<br>
     */
    private $orderKind;

    /**
     * 完了日時<br>
     */
    private $completeDatetime;
    /**
     * 復旧リダイレクションURL<br>
     */
    private $reAuthorizeRedirectionUrl;

    /**
     * 取引種別<br>
     */
    private $transactionKind;

    /**
     * ユーザID<br>
     */
    private $userId;

    /**
     * 決済処理ID<br>
     */
    private $settlementId;

    /**
     * 復旧用アプリ起動URL<br>
     */
    private $reAuthAppUrl;

    /**
     * 管理番号<br>
     */
    private $managementNo;

    /**
     * 決済サービスオプション<br>
     */
    private $cvsType;

    /**
     * 氏名１<br>
     */
    private $name1;
    /**
     * 氏名２<br>
     */
    private $name2;

    /**
     * カナ<br>
     */
    private $kana;

    /**
     * 電話番号<br>
     */
    private $telNo;

    /**
     * メールアドレス<br>
     */
    private $mailAddr;

    /**
     * 備考１<br>
     */
    private $free1;

    /**
     * 備考２<br>
     */
    private $free2;

    /**
     * 支払期限<br>
     */
    private $payLimit;

    /**
     * 支払期限日時<br>
     */
    private $payLimitDatetime;

    /**
     * 受付番号<br>
     */
    private $receiptNo;

    /**
     * 入金受付日<br>
     */
    private $paidDatetime;

    /**
     * 収納日時<br>
     */
    private $receivedDatetime;

    /**
     * 電文ID<br>
     */
    private $startTxn;

    /**
     * 3Dメッセージバージョン<br>
     */
    private $dddMessageVersion;

    /**
     * デバイスチャネル<br>
     */
    private $deviceChannel;

    /**
     * アカウントタイプ<br>
     */
    private $accountType;

    /**
     * 認証要求タイプ<br>
     */
    private $authenticationIndicator;

    /**
     * メッセージカテゴリ<br>
     */
    private $messageCategory;

    /**
     * 要求通貨単位<br>
     */
    private $requestCurrencyUnit;

    /**
     * カード有効期限<br>
     */
    private $cardExpire;

    /**
     * 請求番号<br>
     */
    private $invoiceId;

    /**
     * 顧客番号<br>
     */
    private $payerId;

    /**
     * 支払日時<br>
     */
    private $paymentDatetime;

    /**
     * マーチャントリダイレクトURI<br>
     */
    private $merchantRedirectUri;

    /**
     * 決済金額<br>
     */
    private $totalAmount;

    /**
     * ウォレット決済金額<br>
     */
    private $walletAmount;

    /**
     * カード決済金額<br>
     */
    private $cardAmount;

    /**
     * カード取引ID<br>
     */
    private $cardOrderId;

    /**
     * キャリアサービスタイプ<br>
     */
    private $crServiceType;

    /**
     * 与信同時売上フラグ<br>
     */
    private $withCapture;

    /**
     * 課金タイプ<br>
     */
    private $accountingType;

    /**
     * 商品情報<br>
     */
    private $itemInfo;

    /**
     * 商品ID<br>
     */
    private $itemId;

    /**
     * 商品タイプ<br>
     */
    private $itemType;

    /**
     * 端末種別<br>
     */
    private $terminalKind;

    /**
     * 決済申込日時<br>
     */
    private $authorizeDatetime;

    /**
     * 売上日時<br>
     */
    private $captureDatetime;

    /**
     * 取消日時<br>
     */
    private $cancelDatetime;

    /**
     * 初回課金日付<br>
     */
    private $mpFirstDate;

    /**
     * 継続課金日<br>
     */
    private $mpDay;

    /**
     * 継続状態フラグ（月額課金状態フラグ）<br>
     */
    private $mpStatus;

    /**
     * 継続課金オーダーID<br>
     */
    private $mpOrderId;

    /**
     * 継続課金状態タイプ<br>
     */
    private $mpTxnStatusType;

    /**
     * 継続課金売上日時<br>
     */
    private $mpCaptureDatetime;

    /**
     * 継続課金取消日時<br>
     */
    private $mpCancelDatetime;

    /**
     * 継続課金終了日時<br>
     */
    private $mpTerminateDatetime;

    /**
     * キャリアオーダーID<br>
     */
    private $crOrderId;

    /**
     * 本人認証（３Ｄセキュア）<br>
     */
    private $d3Flag;

    /**
     * フレッツエリア<br>
     */
    private $fletsArea;

    /**
     * 割引金額<br>
     */
    private $discountAmount;

    /**
     * 元取引ID<br>
     */
    private $originalOrderId;

    /**
     * マーチャントリダイレクションURL<br>
     */
    private $merchantRedirectionUrl;

    /**
     * 注文番号<br>
     */
    private $oricoOrderNo;

    /**
     * 会員番号(加盟店)<br>
     */
    private $userNo;

    /**
     * 商品名<br>
     */
    private $itemName;

    /**
     * 商品名１<br>
     */
    private $itemName1;

    /**
     * 数量１<br>
     */
    private $itemCount1;

    /**
     * 商品価格１(税込)<br>
     */
    private $itemAmount1;

    /**
     * 商品名２<br>
     */
    private $itemName2;

    /**
     * 数量２<br>
     */
    private $itemCount2;

    /**
     * 商品価格２(税込)<br>
     */
    private $itemAmount2;

    /**
     * 商品名３<br>
     */
    private $itemName3;

    /**
     * 数量３<br>
     */
    private $itemCount3;

    /**
     * 商品価格３(税込)<br>
     */
    private $itemAmount3;

    /**
     * 商品名４<br>
     */
    private $itemName4;

    /**
     * 数量４<br>
     */
    private $itemCount4;

    /**
     * 商品価格４(税込)<br>
     */
    private $itemAmount4;

    /**
     * 商品名５<br>
     */
    private $itemName5;

    /**
     * 数量５<br>
     */
    private $itemCount5;

    /**
     * 商品価格５(税込)<br>
     */
    private $itemAmount5;

    /**
     * 商品価格合計(税込)<br>
     */
    private $totalItemAmount;

    /**
     * 送料合計(税込)<br>
     */
    private $totalCarriage;

    /**
     * 頭金<br>
     */
    private $deposit;

    /**
     * 配送先郵便番号<br>
     */
    private $shippingZipCode;

    /**
     * 取扱契約番号<br>
     */
    private $handlingContractNo;

    /**
     * 契約書有無区分<br>
     */
    private $contractDocumentKbn;

    /**
     * WEB申込商品ID
     */
    private $webDescriptionId;

    /**
     * 楽天オーダーID
     */
    private $rakutenOrderId;

    /**
     * リクルートオーダーID
     */
    private $recruitOrderId;

    /**
     * LINE PayオーダーID
     */
    private $linepayOrderId;

    /**
     * 商品金額
     */
    private $itemAmount;

    /**
     * MasterPass取引ID
     */
    private $masterpassOrderId;

    /**
     * 仕向け先コード
     */
    private $acquirerCode;

    /**
     * カード番号
     */
    private $cardNumber;

    /**
     * 支払詳細
     */
    private $jpoInformation;

    /**
     * 入金状態
     */
    private $vaccDepositStatusType;

    /**
     * 振込期限
     */
    private $transferExpiredDate;

    /**
     * 消込日
     */
    private $reconcileDate;

    /**
     * 入金総額
     */
    private $totalDepositAmount;

    /**
     * 登録時振込人名
     */
    private $entryTransferName;

    /**
     * 登録時振込番号
     */
    private $entryTransferNumber;

    /**
     * 口座番号
     */
    private $accountNumber;

    /**
     * 口座管理方式
     */
    private $accountManageType;

    /**
     * Tenpayサービスタイプ
     */
    private $tenpayServiceType;

    /**
     * 商品詳細
     */
    private $itemDetail;

    /**
     * 商品タグ
     */
    private $itemLabel;

    /**
     * Tenpay取引ID
     */
    private $tenpayOrderId;

    /**
     * 決済センター（PayPay）との取引ID<br>
     */
    private $paypayOrderId;

    /**
     * PayPayサービスタイプ<br>
     */
    private $paypayServiceType;

    /**
     * 返金日時<br>
     */
    private $refundDatetime;

    /**
     * 解約日時<br>
     */
    private $terminateDatetime;

    /**
     * 顧客決済情報<br>
     */
    private $userKey;

    /**
     * Alipay+サービスタイプ
     */
    private $alipayxServiceType;

    /**
     * 決済センターの管理ID
     */
    private $centerId;

    /**
     * ペイメントソース
     */
    private $paymentSource;


    /**
     * CvsPay種別<br>
     */
    private $cvspayType;

    /**
     * 決済種別<br>
     */
    private $payType;

    /**
     * CvsPayオーダーID<br>
     */
    private $cvspayOrderId;

    /**
     * ニッセン注文ID<br>
     */
    private $nissenTransactionId;

    /**
     * 最新自動審査結果<br>
     */
    private $lastAuthorResult;

    /**
     * 売上金額<br>
     */
    private $captureAmount;

    /**
     * 返金可能金額<br>
     */
    private $refundableAmount;

    /**
     * 決済センターの管理ID<br>
     */
    private $centerOrderId;

    /**
     * 承諾状態
     */
    private $consentStatus;

    /**
     * 頻度（単位）
     */
    private $frequencyUnit;

    /**
     * 頻度（値）
     */
    private $frequencyValue;

    /**
     * merpayサービスタイプ<br>
     */
    private $merpayServiceType;

    /**
     * エポス取引ID<br>
     */
    private $eposOrderId;

    /**
     * クレジット利用額<br>
     */
    private $useCredit;

    /**
     * クーポン利用額<br>
     */
    private $useCoupon;

    /**
     * 決済固有トランザクション情報<br>
     */
    private $properTransactionInfo;

    /**
     * 承諾時決済タイプ<br>
     */
    private $consentAuthType;

    /**
     * 事前承認ID<br>
     */
    private $preapprovalId;

    /**
     * 随時決済金額<br>
     */
    private $odAmount;

     /**
     * 決済取引ID<br>
     */
    private $gatewayOrderId;

     /**
     * クレジットカードのブランド<br>
     */
    private $cardBrand;

     /**
     * クレジットカード番号の下4桁<br>
     */
    private $cardLast4;

     /**
     * 分割払いの回数<br>
     */
    private $cardInstallments;

     /**
     * セキュリティコード認証利用有無<br>
     */
    private $cardCvc;

     /**
     * 3D セキュア認証利用有無<br>
     */
    private $card3ds;

     /**
     * 取消受付期限<br>
     */
    private $cancelExpirationTime;

     /**
     * 売上受付期限<br>
     */
    private $captureExpirationTime;

     /**
     * 金額変更受付期限<br>
     */
    private $updateExpirationTime;

     /**
     * 与信延長受付期限<br>
     */
    private $extendAuthExpirationTime;

    /**
     * 決済確認画面種別<br>
     */
    private $payConfirmScreenType;

    /**
     * 決済方式を取得する<br>
     *
     * @return string 決済方式<br>
     */
    public function getSettlementMethod()
    {
        return $this->settlementMethod;
    }

    /**
     * 決済方式を設定する<br>
     *
     * @param string $settlementMethod 決済方式<br>
     */
    public function setSettlementMethod($settlementMethod)
    {
        $this->settlementMethod = $settlementMethod;
    }

    /**
     * 決済タイプを取得する<br>
     *
     * @return string 決済タイプ<br>
     */
    public function getSettlementType()
    {
        return $this->settlementType;
    }

    /**
     * 決済タイプを設定する<br>
     *
     * @param string $settlementType 決済タイプ<br>
     */
    public function setSettlementType($settlementType)
    {
        $this->settlementType = $settlementType;
    }

    /**
     * 決済金額を取得する<br>
     *
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済金額を設定する<br>
     *
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 決済申込金額を取得する<br>
     *
     * @return string 決済申込金額<br>
     */
    public function getAuthorizeAmount()
    {
        return $this->authorizeAmount;
    }

    /**
     * 決済申込金額を設定する<br>
     *
     * @param string $authorizeAmount 決済申込金額<br>
     */
    public function setAuthorizeAmount($authorizeAmount)
    {
        $this->authorizeAmount = $authorizeAmount;
    }

    /**
     * 残高を取得する<br>
     *
     * @return string 決済金額<br>
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * 残高を設定する<br>
     *
     * @param string $balance 残高<br>
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * 利用ポイントを取得する<br>
     *
     * @return string 利用ポイント<br>
     */
    public function getUsedPoint()
    {
        return $this->usedPoint;
    }

    /**
     * 利用ポイントを設定する<br>
     *
     * @param string $usedPoint 利用ポイント<br>
     */
    public function setUsedPoint($usedPoint)
    {
        $this->usedPoint = $usedPoint;
    }

    /**
     * 利用ポイントを取得する<br>
     *
     * @return string 利用ポイント<br>
     */
    public function getUsePoint()
    {
        return $this->usePoint;
    }

    /**
     * 利用ポイントを設定する<br>
     *
     * @param string $usePoint 利用ポイント<br>
     */
    public function setUsePoint($usePoint)
    {
        $this->usePoint = $usePoint;
    }

    /**
     * 付与ポイントを取得する<br>
     *
     * @return string 付与ポイント<br>
     */
    public function getGivePoint()
    {
        return $this->givePoint;
    }

    /**
     * 付与ポイントを設定する<br>
     *
     * @param string $givePoint 付与ポイント<br>
     */
    public function setGivePoint($givePoint)
    {
        $this->givePoint = $givePoint;
    }

    /**
     * リクルートクーポンを取得する<br>
     *
     * @return string リクルートクーポン<br>
     */
    public function getRecruitCoupon()
    {
        return $this->recruitCoupon;
    }

    /**
     * リクルートクーポンを設定する<br>
     *
     * @param string $recruitCoupon リクルートクーポン<br>
     */
    public function setRecruitCoupon($recruitCoupon)
    {
        $this->recruitCoupon = $recruitCoupon;
    }

    /**
     * マーチャントクーポンを取得する<br>
     *
     * @return string マーチャントクーポン<br>
     */
    public function getMerchantCoupon()
    {
        return $this->merchantCoupon;
    }

    /**
     * マーチャントクーポンを設定する<br>
     *
     * @param string $merchantCoupon マーチャントクーポン<br>
     */
    public function setMerchantCoupon($merchantCoupon)
    {
        $this->merchantCoupon = $merchantCoupon;
    }

    /**
     * 決済期限を取得する<br>
     *
     * @return string 決済期限<br>
     */
    public function getSettlementLimit()
    {
        return $this->settlementLimit;
    }

    /**
     * 決済期限を設定する<br>
     *
     * @param string $settlementLimit 決済期限<br>
     */
    public function setSettlementLimit($settlementLimit)
    {
        $this->settlementLimit = $settlementLimit;
    }

    /**
     * 転送メール送信要否を取得する<br>
     *
     * @return string 転送メール送信要否<br>
     */
    public function getForwardMailFlag()
    {
        return $this->forwardMailFlag;
    }

    /**
     * 転送メール送信要否を設定する<br>
     *
     * @param string $forwardMailFlag 転送メール送信要否<br>
     */
    public function setForwardMailFlag($forwardMailFlag)
    {
        $this->forwardMailFlag = $forwardMailFlag;
    }

    /**
     * マーチャントメールアドレスを取得する<br>
     *
     * @return string マーチャントメールアドレス<br>
     */
    public function getMerchantMailAddr()
    {
        return $this->merchantMailAddr;
    }

    /**
     * マーチャントメールアドレスを設定する<br>
     *
     * @param string $merchantMailAddr マーチャントメールアドレス<br>
     */
    public function setMerchantMailAddr($merchantMailAddr)
    {
        $this->merchantMailAddr = $merchantMailAddr;
    }

    /**
     * 取消返金通知メールアドレスを取得する<br>
     *
     * @return string 取消返金通知メールアドレス<br>
     */
    public function getCancelMailAddr()
    {
        return $this->cancelMailAddr;
    }

    /**
     * 取消返金通知メールアドレスを設定する<br>
     *
     * @param string $cancelMailAddr 取消返金通知メールアドレス<br>
     */
    public function setCancelMailAddr($cancelMailAddr)
    {
        $this->cancelMailAddr = $cancelMailAddr;
    }

    /**
     * 依頼メール付加情報を取得する<br>
     *
     * @return string 依頼メール付加情報<br>
     */
    public function getRequestMailAddInfo()
    {
        return $this->requestMailAddInfo;
    }

    /**
     * 依頼メール付加情報を設定する<br>
     *
     * @param string $requestMailAddInfo 依頼メール付加情報<br>
     */
    public function setRequestMailAddInfo($requestMailAddInfo)
    {
        $this->requestMailAddInfo = $requestMailAddInfo;
    }

    /**
     * 完了メール付加情報を取得する<br>
     *
     * @return string 完了メール付加情報<br>
     */
    public function getCompleteMailAddInfo()
    {
        return $this->completeMailAddInfo;
    }

    /**
     * 完了メール付加情報を設定する<br>
     *
     * @param string $completeMailAddInfo 完了メール付加情報<br>
     */
    public function setCompleteMailAddInfo($completeMailAddInfo)
    {
        $this->completeMailAddInfo = $completeMailAddInfo;
    }

    /**
     * ショップ名を取得する<br>
     *
     * @return string ショップ名<br>
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * ショップ名を設定する<br>
     *
     * @param string $shopName ショップ名<br>
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
    }

    /**
     * 完了メール送信要否を取得する<br>
     *
     * @return string 完了メール送信要否<br>
     */
    public function getCompleteMailFlag()
    {
        return $this->completeMailFlag;
    }

    /**
     * 完了メール送信要否を設定する<br>
     *
     * @param string $completeMailFlag 完了メール送信要否<br>
     */
    public function setCompleteMailFlag($completeMailFlag)
    {
        $this->completeMailFlag = $completeMailFlag;
    }

    /**
     * 内容確認画面付加情報を取得する<br>
     *
     * @return string 内容確認画面付加情報<br>
     */
    public function getConfirmScreenAddInfo()
    {
        return $this->confirmScreenAddInfo;
    }

    /**
     * 内容確認画面付加情報を設定する<br>
     *
     * @param string $confirmScreenAddInfo 内容確認画面付加情報<br>
     */
    public function setConfirmScreenAddInfo($confirmScreenAddInfo)
    {
        $this->confirmScreenAddInfo = $confirmScreenAddInfo;
    }

    /**
     * 完了画面付加情報を取得する<br>
     *
     * @return string 完了画面付加情報<br>
     */
    public function getCompleteScreenAddInfo()
    {
        return $this->completeScreenAddInfo;
    }

    /**
     * 完了画面付加情報を設定する<br>
     *
     * @param string $completeScreenAddInfo 完了画面付加情報<br>
     */
    public function setCompleteScreenAddInfo($completeScreenAddInfo)
    {
        $this->completeScreenAddInfo = $completeScreenAddInfo;
    }

    /**
     * 画面タイトルを取得する<br>
     *
     * @return string 画面タイトル<br>
     */
    public function getScreenTitle()
    {
        return $this->screenTitle;
    }

    /**
     * 画面タイトルを設定する<br>
     *
     * @param string $screenTitle 画面タイトル<br>
     */
    public function setScreenTitle($screenTitle)
    {
        $this->screenTitle = $screenTitle;
    }

    /**
     * 決済完了戻り先種別を取得する<br>
     *
     * @return string 決済完了戻り先種別<br>
     */
    public function getCompleteReturnKind()
    {
        return $this->completeReturnKind;
    }

    /**
     * 決済完了戻り先種別を設定する<br>
     *
     * @param string $completeReturnKind 決済完了戻り先種別<br>
     */
    public function setCompleteReturnKind($completeReturnKind)
    {
        $this->completeReturnKind = $completeReturnKind;
    }

    /**
     * 決済完了戻り先URLを取得する<br>
     *
     * @return string 決済完了戻り先URL<br>
     */
    public function getCompleteReturnUrl()
    {
        return $this->completeReturnUrl;
    }

    /**
     * 決済完了戻り先URLを設定する<br>
     *
     * @param string $completeReturnUrl 決済完了戻り先URL<br>
     */
    public function setCompleteReturnUrl($completeReturnUrl)
    {
        $this->completeReturnUrl = $completeReturnUrl;
    }

    /**
     * 決済完了通知URLを取得する<br>
     *
     * @return string 決済完了通知URL<br>
     */
    public function getCompleteNoticeUrl()
    {
        return $this->completeNoticeUrl;
    }

    /**
     * 決済完了通知URLを設定する<br>
     *
     * @param string $completeNoticeUrl 決済完了通知URL<br>
     */
    public function setCompleteNoticeUrl($completeNoticeUrl)
    {
        $this->completeNoticeUrl = $completeNoticeUrl;
    }

    /**
     * 販売区分を取得する<br>
     *
     * @return string 販売区分<br>
     */
    public function getSalesType()
    {
        return $this->salesType;
    }

    /**
     * 販売区分を設定する<br>
     *
     * @param string $salesType 販売区分<br>
     */
    public function setSalesType($salesType)
    {
        $this->salesType = $salesType;
    }

    /**
     * 備考を取得する<br>
     *
     * @return string 備考<br>
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * 備考を設定する<br>
     *
     * @param string $free 備考<br>
     */
    public function setFree($free)
    {
        $this->free = $free;
    }

    /**
     * 返金オーダーIDを取得する<br>
     *
     * @return string 返金オーダーID<br>
     */
    public function getRefundOrderCtlId()
    {
        return $this->refundOrderCtlId;
    }

    /**
     * 返金オーダーIDを設定する<br>
     *
     * @param string $refundOrderCtlId 返金オーダーID<br>
     */
    public function setRefundOrderCtlId($refundOrderCtlId)
    {
        $this->refundOrderCtlId = $refundOrderCtlId;
    }

    /**
     * 決済アプリ起動URLを取得する<br>
     *
     * @return string 決済アプリ起動URL<br>
     */
    public function getAppUrl()
    {
        return $this->appUrl;
    }

    /**
     * 決済アプリ起動URLを設定する<br>
     *
     * @param string $appUrl 決済アプリ起動URL<br>
     */
    public function setAppUrl($appUrl)
    {
        $this->appUrl = $appUrl;
    }

    /**
     * オーダー種別を取得する<br>
     *
     * @return string オーダー種別<br>
     */
    public function getOrderKind()
    {
        return $this->orderKind;
    }

    /**
     * オーダー種別を設定する<br>
     *
     * @param string $orderKind オーダー種別<br>
     */
    public function setOrderKind($orderKind)
    {
        $this->orderKind = $orderKind;
    }

    /**
     * 完了日時を取得する<br>
     *
     * @return string 完了日時<br>
     */
    public function getCompleteDatetime()
    {
        return $this->completeDatetime;
    }

    /**
     * 完了日時を設定する<br>
     *
     * @param string $completeDatetime 完了日時<br>
     */
    public function setCompleteDatetime($completeDatetime)
    {
        $this->completeDatetime = $completeDatetime;
    }

    /**
     * 復旧リダイレクトURLを取得する<br>
     * @return string 復旧リダイレクトURL<br>
     */
    public function getReAuthorizeRedirectionUrl()
    {
        return $this->reAuthorizeRedirectionUrl;
    }

    /**
     * 復旧リダイレクトURLを設定する<br>
     * @param string $reAuthorizeRedirectionUrl 復旧リダイレクトURL<br>
     */
    public function setReAuthorizeRedirectionUrl($reAuthorizeRedirectionUrl)
    {
        $this->reAuthorizeRedirectionUrl = $reAuthorizeRedirectionUrl;
    }

    /**
     * 管理番号を取得する<br>
     * @return string 管理番号<br>
     */
    public function getManagementNo()
    {
        return $this->managementNo;
    }

    /**
     * 管理番号を設定する<br>
     * @param string $managementNo 管理番号<br>
     */
    public function setManagementNo($managementNo)
    {
        $this->managementNo = $managementNo;
    }

    /**
     * 取引種別を取得する<br>
     * @return string 取引種別<br>
     */
    public function getTransactionKind()
    {
        return $this->transactionKind;
    }

    /**
     * 取引種別を設定する<br>
     * @param string $transactionKind 取引種別<br>
     */
    public function setTransactionKind($transactionKind)
    {
        $this->transactionKind = $transactionKind;
    }

    /**
     * ユーザIDを取得する<br>
     * @return string ユーザID<br>
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * ユーザIDを設定する<br>
     * @param string $userId ユーザID<br>
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * 決済IDを取得する<br>
     * @return string 決済ID<br>
     */
    public function getSettlementId()
    {
        return $this->settlementId;
    }

    /**
     * 決済IDを設定する<br>
     * @param string $settlementId 決済ID<br>
     */
    public function setSettlementId($settlementId)
    {
        $this->settlementId = $settlementId;
    }

    /**
     * 復旧用アプリ起動URLを取得する<br>
     * @return string 復旧用アプリ起動URL<br>
     */
    public function getReAuthAppUrl()
    {
        return $this->reAuthAppUrl;
    }

    /**
     * 復旧用アプリ起動URLを設定する<br>
     * @param string $reAuthAppUrl 復旧用アプリ起動URL
     */
    public function setReAuthAppUrl($reAuthAppUrl)
    {
        $this->reAuthAppUrl = $reAuthAppUrl;
    }

    /**
     * 決済サービスオプションを取得する<br>
     *
     * @return string 決済サービスオプション<br>
     */
    public function getCvsType()
    {
        return $this->cvsType;
    }

    /**
     * 決済サービスオプションを設定する<br>
     *
     * @param string $cvsType 決済サービスオプション<br>
     */
    public function setCvsType($cvsType)
    {
        $this->cvsType = $cvsType;
    }

    /**
     * 氏名１を取得する<br>
     *
     * @return string 氏名１<br>
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * 氏名１を設定する<br>
     *
     * @param string $name1 氏名１<br>
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
    }

    /**
     * 氏名２を取得する<br>
     *
     * @return string 氏名２<br>
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * 氏名２を設定する<br>
     *
     * @param string $name2 氏名２<br>
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * カナを取得する<br>
     *
     * @return string カナ<br>
     */
    public function getKana()
    {
        return $this->kana;
    }

    /**
     * カナを設定する<br>
     *
     * @param string $kana カナ<br>
     */
    public function setKana($kana)
    {
        $this->kana = $kana;
    }

    /**
     * 電話番号を取得する<br>
     *
     * @return string 電話番号<br>
     */
    public function getTelNo()
    {
        return $this->telNo;
    }

    /**
     * 電話番号を設定する<br>
     *
     * @param string $telNo 電話番号<br>
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;
    }

    /**
     * メールアドレスを取得する<br>
     *
     * @return string メールアドレス<br>
     */
    public function getMailAddr()
    {
        return $this->mailAddr;
    }

    /**
     * メールアドレスを設定する<br>
     *
     * @param string $mailAddr メールアドレス<br>
     */
    public function setMailAddr($mailAddr)
    {
        $this->mailAddr = $mailAddr;
    }

    /**
     * 備考１を取得する<br>
     *
     * @return string 備考１<br>
     */
    public function getFree1()
    {
        return $this->free1;
    }

    /**
     * 備考１を設定する<br>
     *
     * @param string $free1 備考１<br>
     */
    public function setFree1($free1)
    {
        $this->free1 = $free1;
    }

    /**
     * 備考２を取得する<br>
     *
     * @return string 備考２<br>
     */
    public function getFree2()
    {
        return $this->free2;
    }

    /**
     * 備考２を設定する<br>
     *
     * @param string $free2 備考２<br>
     */
    public function setFree2($free2)
    {
        $this->free2 = $free2;
    }

    /**
     * 支払期限を取得する<br>
     *
     * @return string 支払期限<br>
     */
    public function getPayLimit()
    {
        return $this->payLimit;
    }

    /**
     * 支払期限を設定する<br>
     *
     * @param string $payLimit 支払期限<br>
     */
    public function setPayLimit($payLimit)
    {
        $this->payLimit = $payLimit;
    }

    /**
     * 支払期限日時を取得する<br>
     *
     * @return string 支払期限日時<br>
     */
    public function getPayLimitDatetime()
    {
        return $this->payLimitDatetime;
    }

    /**
     * 支払期限日時を設定する<br>
     *
     * @param string $payLimitDatetime 支払期限日時<br>
     */
    public function setPayLimitDatetime($payLimitDatetime)
    {
        $this->payLimitDatetime = $payLimitDatetime;
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
     * 入金受付日を取得する<br>
     *
     * @return string 入金受付日<br>
     */
    public function getPaidDatetime()
    {
        return $this->paidDatetime;
    }

    /**
     * 入金受付日を設定する<br>
     *
     * @param string $paidDatetime 入金受付日<br>
     */
    public function setPaidDatetime($paidDatetime)
    {
        $this->paidDatetime = $paidDatetime;
    }

    /**
     * 収納日時を取得する<br>
     *
     * @return string 収納日時<br>
     */
    public function getReceivedDatetime()
    {
        return $this->receivedDatetime;
    }

    /**
     * 収納日時を設定する<br>
     *
     * @param string $receivedDatetime 収納日時<br>
     */
    public function setReceivedDatetime($receivedDatetime)
    {
        $this->receivedDatetime = $receivedDatetime;
    }

    /**
     * 電文IDを取得する<br>
     *
     * @return string 電文ID<br>
     */
    public function getStartTxn()
    {
        return $this->startTxn;
    }

    /**
     * 電文IDを設定する<br>
     *
     * @param string $startTxn 電文ID<br>
     */
    public function setStartTxn($startTxn)
    {
        $this->startTxn = $startTxn;
    }

    /**
     * 3Dメッセージバージョンを取得する<br>
     *
     * @return string 3Dメッセージバージョン<br>
     */
    public function getDddMessageVersion()
    {
        return $this->dddMessageVersion;
    }

    /**
     * 3Dメッセージバージョンを設定する<br>
     *
     * @param string $dddMessageVersion 3Dメッセージバージョン<br>
     */
    public function setDddMessageVersion($dddMessageVersion)
    {
        $this->dddMessageVersion = $dddMessageVersion;
    }

    /**
     * デバイスチャネルを取得する<br>
     *
     * @return string デバイスチャネル<br>
     */
    public function getDeviceChannel()
    {
        return $this->deviceChannel;
    }

    /**
     * デバイスチャネルを設定する<br>
     *
     * @param string $deviceChannel デバイスチャネル<br>
     */
    public function setDeviceChannel($deviceChannel)
    {
        $this->deviceChannel = $deviceChannel;
    }

    /**
     * アカウントタイプを取得する<br>
     *
     * @return string アカウントタイプ<br>
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * アカウントタイプを設定する<br>
     *
     * @param string $accountType アカウントタイプ<br>
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * 認証要求タイプを取得する<br>
     *
     * @return string 認証要求タイプ<br>
     */
    public function getAuthenticationIndicator()
    {
        return $this->authenticationIndicator;
    }

    /**
     * 認証要求タイプを設定する<br>
     *
     * @param string $authenticationIndicator 認証要求タイプ<br>
     */
    public function setAuthenticationIndicator($authenticationIndicator)
    {
        $this->authenticationIndicator = $authenticationIndicator;
    }

    /**
     * メッセージカテゴリを取得する<br>
     *
     * @return string メッセージカテゴリ<br>
     */
    public function getMessageCategory()
    {
        return $this->messageCategory;
    }

    /**
     * メッセージカテゴリを設定する<br>
     *
     * @param string $messageCategory メッセージカテゴリ<br>
     */
    public function setMessageCategory($messageCategory)
    {
        $this->messageCategory = $messageCategory;
    }

    /**
     * 要求通貨単位を取得する<br>
     *
     * @return string 要求通貨単位<br>
     */
    public function getRequestCurrencyUnit()
    {
        return $this->requestCurrencyUnit;
    }

    /**
     * 要求通貨単位を設定する<br>
     *
     * @param string $requestCurrencyUnit 要求通貨単位<br>
     */
    public function setRequestCurrencyUnit($requestCurrencyUnit)
    {
        $this->requestCurrencyUnit = $requestCurrencyUnit;
    }

    /**
     * カード有効期限を取得する<br>
     *
     * @return string カード有効期限<br>
     */
    public function getCardExpire()
    {
        return $this->cardExpire;
    }

    /**
     * カード有効期限を設定する<br>
     *
     * @param string $cardExpire カード有効期限<br>
     */
    public function setCardExpire($cardExpire)
    {
        $this->cardExpire = $cardExpire;
    }

    /**
     * 請求番号を取得する<br>
     *
     * @return string 請求番号<br>
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * 請求番号を設定する<br>
     *
     * @param string $invoiceId 請求番号<br>
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * 顧客番号を取得する<br>
     *
     * @return string 顧客番号<br>
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * 顧客番号を設定する<br>
     *
     * @param string $payerId 顧客番号<br>
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
    }

    /**
     * 支払日時を取得する<br>
     *
     * @return string 支払日時<br>
     */
    public function getPaymentDatetime()
    {
        return $this->paymentDatetime;
    }

    /**
     * 支払日時を設定する<br>
     *
     * @param string $paymentDatetime 支払日時<br>
     */
    public function setPaymentDatetime($paymentDatetime)
    {
        $this->paymentDatetime = $paymentDatetime;
    }

    /**
     * マーチャントリダイレクトURIを設定する<br>
     *
     * @param string $merchantRedirectUri マーチャントリダイレクトURI<br>
     */
    public function setMerchantRedirectUri($merchantRedirectUri)
    {
        $this->merchantRedirectUri = $merchantRedirectUri;
    }

    /**
     * マーチャントリダイレクトURIを取得する<br>
     *
     * @return string マーチャントリダイレクトURI<br>
     */
    public function getMerchantRedirectUri()
    {
        return $this->merchantRedirectUri;
    }

    /**
     * 合計決済金額を設定する<br>
     *
     * @param string $totalAmount 合計決済金額<br>
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * 合計決済金額を取得する<br>
     *
     * @return string 合計決済金額<br>
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * ウォレット決済金額を設定する<br>
     *
     * @param string $walletAmount ウォレット決済金額<br>
     */
    public function setWalletAmount($walletAmount)
    {
        $this->walletAmount = $walletAmount;
    }

    /**
     * ウォレット決済金額を取得する<br>
     *
     * @return string ウォレット決済金額<br>
     */
    public function getWalletAmount()
    {
        return $this->walletAmount;
    }

    /**
     * カード決済金額を設定する<br>
     *
     * @param string $cardAmount カード決済金額<br>
     */
    public function setCardAmount($cardAmount)
    {
        $this->cardAmount = $cardAmount;
    }

    /**
     * カード決済金額を取得する<br>
     *
     * @return string カード決済金額<br>
     */
    public function getCardAmount()
    {
        return $this->cardAmount;
    }

    /**
     * カード取引IDを設定する<br>
     *
     * @param string $cardOrderId カード取引ID<br>
     */
    public function setCardOrderId($cardOrderId)
    {
        $this->cardOrderId = $cardOrderId;
    }

    /**
     * カード取引IDを取得する<br>
     *
     * @return string カード取引ID<br>
     */
    public function getCardOrderId()
    {
        return $this->cardOrderId;
    }

    /**
     * キャリアサービスタイプを設定する<br>
     *
     * @param string $crServiceType キャリアサービスタイプ<br>
     */
    public function setCrServiceType($crServiceType)
    {
        $this->crServiceType = $crServiceType;
    }

    /**
     * キャリアサービスタイプを取得する<br>
     *
     * @return string キャリアサービスタイプ<br>
     */
    public function getCrServiceType()
    {
        return $this->crServiceType;
    }

    /**
     * 与信同時売上フラグを設定する<br>
     *
     * @param string $withCapture 与信同時売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
    }

    /**
     * 与信同時売上フラグを取得する<br>
     *
     * @return string 与信同時売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 課金フラグを設定する<br>
     *
     * @param string $accountingType 課金フラグ<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 課金フラグを取得する<br>
     *
     * @return string 課金フラグ<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 商品情報を設定する<br>
     *
     * @param string $itemInfo 商品情報<br>
     */
    public function setItemInfo($itemInfo)
    {
        $this->itemInfo = $itemInfo;
    }

    /**
     * 商品情報を取得する<br>
     *
     * @return string 商品情報<br>
     */
    public function getItemInfo()
    {
        return $this->itemInfo;
    }

    /**
     * 商品IDを設定する<br>
     *
     * @param string $itemId 商品ID<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * 商品IDを取得する<br>
     *
     * @return string 商品ID<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品タイプを設定する<br>
     *
     * @param string $itemType 商品タイプ<br>
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * 商品タイプを取得する<br>
     *
     * @return string 商品タイプ<br>
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * 端末種別を設定する<br>
     *
     * @param string $terminalKind 端末種別<br>
     */
    public function setTerminalKind($terminalKind)
    {
        $this->terminalKind = $terminalKind;
    }

    /**
     * 端末種別を取得する<br>
     *
     * @return string 端末種別<br>
     */
    public function getTerminalKind()
    {
        return $this->terminalKind;
    }

    /**
     * 決済申込日時を設定する<br>
     *
     * @param string $authorizeDatetime 決済申込日時<br>
     */
    public function setAuthorizeDatetime($authorizeDatetime)
    {
        $this->authorizeDatetime = $authorizeDatetime;
    }

    /**
     * 決済申込日時を取得する<br>
     *
     * @return string 決済申込日時<br>
     */
    public function getAuthorizeDatetime()
    {
        return $this->authorizeDatetime;
    }

    /**
     * 売上日時を設定する<br>
     *
     * @param string $captureDatetime 売上日時<br>
     */
    public function setCaptureDatetime($captureDatetime)
    {
        $this->captureDatetime = $captureDatetime;
    }

    /**
     * 売上日時を取得する<br>
     *
     * @return string 売上日時<br>
     */
    public function getCaptureDatetime()
    {
        return $this->captureDatetime;
    }

    /**
     * 取消日時を設定する<br>
     *
     * @param string $cancelDatetime 取消日時<br>
     */
    public function setCancelDatetime($cancelDatetime)
    {
        $this->cancelDatetime = $cancelDatetime;
    }

    /**
     * 取消日時を取得する<br>
     *
     * @return string 取消日時<br>
     */
    public function getCancelDatetime()
    {
        return $this->cancelDatetime;
    }

    /**
     * 初回課金日付を設定する<br>
     *
     * @param string $mpFirstDate 初回課金日付<br>
     */
    public function setMpFirstDate($mpFirstDate)
    {
        $this->mpFirstDate = $mpFirstDate;
    }

    /**
     * 初回課金日付を取得する<br>
     *
     * @return string 初回課金日付<br>
     */
    public function getMpFirstDate()
    {
        return $this->mpFirstDate;
    }

    /**
     * 継続課金日を設定する<br>
     *
     * @param string $mpDay 継続課金日<br>
     */
    public function setMpDay($mpDay)
    {
        $this->mpDay = $mpDay;
    }

    /**
     * 継続課金日を取得する<br>
     *
     * @return string 継続課金日<br>
     */
    public function getMpDay()
    {
        return $this->mpDay;
    }

    /**
     * 継続状態フラグ（月額課金状態フラグ）を設定する<br>
     *
     * @param string $mpStatus 継続状態フラグ（月額課金状態フラグ）<br>
     */
    public function setMpStatus($mpStatus)
    {
        $this->mpStatus = $mpStatus;
    }

    /**
     * 継続状態フラグ（月額課金状態フラグ）を取得する<br>
     *
     * @return string 継続状態フラグ（月額課金状態フラグ）<br>
     */
    public function getMpStatus()
    {
        return $this->mpStatus;
    }

    /**
     * 継続課金オーダーIDを設定する<br>
     *
     * @param string $mpOrderId 継続課金オーダーID<br>
     */
    public function setMpOrderId($mpOrderId)
    {
        $this->mpOrderId = $mpOrderId;
    }

    /**
     * 継続課金オーダーIDを取得する<br>
     *
     * @return string 継続課金オーダーID<br>
     */
    public function getMpOrderId()
    {
        return $this->mpOrderId;
    }

    /**
     * 継続課金状態タイプを設定する<br>
     *
     * @param string $mpTxnStatusType 継続課金状態タイプ<br>
     */
    public function setMpTxnStatusType($mpTxnStatusType)
    {
        $this->mpTxnStatusType = $mpTxnStatusType;
    }

    /**
     * 継続課金状態タイプを取得する<br>
     *
     * @return string 継続課金状態タイプ<br>
     */
    public function getMpTxnStatusType()
    {
        return $this->mpTxnStatusType;
    }

    /**
     * 継続課金売上日時を設定する<br>
     *
     * @param string $mpCaptureDatetime 継続課金売上日時<br>
     */
    public function setMpCaptureDatetime($mpCaptureDatetime)
    {
        $this->mpCaptureDatetime = $mpCaptureDatetime;
    }

    /**
     * 継続課金売上日時を取得する<br>
     *
     * @return string 継続課金売上日時<br>
     */
    public function getMpCaptureDatetime()
    {
        return $this->mpCaptureDatetime;
    }

    /**
     * 継続課金取消日時を設定する<br>
     *
     * @param string $mpCancelDatetime 継続課金取消日時<br>
     */
    public function setMpCancelDatetime($mpCancelDatetime)
    {
        $this->mpCancelDatetime = $mpCancelDatetime;
    }

    /**
     * 継続課金取消日時を取得する<br>
     *
     * @return string 継続課金取消日時<br>
     */
    public function getMpCancelDatetime()
    {
        return $this->mpCancelDatetime;
    }

    /**
     * 継続課金終了日時を設定する<br>
     *
     * @param string $mpTerminateDatetime 継続課金終了日時<br>
     */
    public function setMpTerminateDatetime($mpTerminateDatetime)
    {
        $this->mpTerminateDatetime = $mpTerminateDatetime;
    }

    /**
     * 継続課金終了日時を取得する<br>
     *
     * @return string 継続課金終了日時<br>
     */
    public function getMpTerminateDatetime()
    {
        return $this->mpTerminateDatetime;
    }

    /**
     * キャリアオーダーIDを設定する<br>
     *
     * @param string $crOrderId キャリアオーダーID<br>
     */
    public function setCrOrderId($crOrderId)
    {
        $this->crOrderId = $crOrderId;
    }

    /**
     * キャリアオーダーIDを取得する<br>
     *
     * @return string キャリアオーダーID<br>
     */
    public function getCrOrderId()
    {
        return $this->crOrderId;
    }

    /**
     * 本人認証（３Ｄセキュア）を設定する<br>
     *
     * @param string $d3Flag 本人認証（３Ｄセキュア）<br>
     */
    public function setD3Flag($d3Flag)
    {
        $this->d3Flag = $d3Flag;
    }

    /**
     * 本人認証（３Ｄセキュア）を取得する<br>
     *
     * @return string 本人認証（３Ｄセキュア）<br>
     */
    public function getD3Flag()
    {
        return $this->d3Flag;
    }

    /**
     * フレッツエリアを設定する<br>
     *
     * @param string $fletsArea フレッツエリア<br>
     */
    public function setFletsArea($fletsArea)
    {
        $this->fletsArea = $fletsArea;
    }

    /**
     * フレッツエリアを取得する<br>
     *
     * @return string フレッツエリア<br>
     */
    public function getFletsArea()
    {
        return $this->fletsArea;
    }

    /**
     * 割引金額を設定する<br>
     *
     * @param string $discountAmount 割引金額<br>
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * 割引金額を取得する<br>
     *
     * @return string 割引金額<br>
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * 元取引IDを設定する<br>
     *
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->originalOrderId = $originalOrderId;
    }

    /**
     * 元取引IDを取得する<br>
     *
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        return $this->originalOrderId;
    }

    /**
     * マーチャントリダイレクションURLを設定する<br>
     *
     * @param string $merchantRedirectionUrl マーチャントリダイレクションURL<br>
     */
    public function setMerchantRedirectionUrl($merchantRedirectionUrl)
    {
        $this->merchantRedirectionUrl = $merchantRedirectionUrl;
    }

    /**
     * マーチャントリダイレクションURLを取得する<br>
     *
     * @param string マーチャントリダイレクションURL<br>
     */
    public function getMerchantRedirectionUrl()
    {
        return $this->merchantRedirectionUrl;
    }

    /**
     * 注文番号を設定する<br>
     *
     * @param string $oricoOrderNo 注文番号<br>
     */
    public function setOricoOrderNo($oricoOrderNo)
    {
        $this->oricoOrderNo = $oricoOrderNo;
    }

    /**
     * 注文番号を取得する<br>
     *
     * @return string 注文番号<br>
     */
    public function getOricoOrderNo()
    {
        return $this->oricoOrderNo;
    }

    /**
     * 会員番号(加盟店)を設定する<br>
     *
     * @param string $userNo 会員番号(加盟店)<br>
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
    }

    /**
     * 会員番号(加盟店)を取得する<br>
     *
     * @return string 会員番号(加盟店)<br>
     */
    public function getUserNo()
    {
        return $this->userNo;
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
     * 商品名を取得する<br>
     *
     * @return string 商品名１<br>
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * 商品名１を設定する<br>
     *
     * @param string $itemName1 商品名１<br>
     */
    public function setItemName1($itemName1)
    {
        $this->itemName1 = $itemName1;
    }

    /**
     * 商品名１を取得する<br>
     *
     * @return string 商品名１<br>
     */
    public function getItemName1()
    {
        return $this->itemName1;
    }

    /**
     * 数量１を設定する<br>
     *
     * @param string $itemCount1 数量１<br>
     */
    public function setItemCount1($itemCount1)
    {
        $this->itemCount1 = $itemCount1;
    }

    /**
     * 数量１を取得する<br>
     *
     * @return string 数量１<br>
     */
    public function getItemCount1()
    {
        return $this->itemCount1;
    }

    /**
     * 商品価格１(税込)を設定する<br>
     *
     * @param string $itemAmount1 商品価格１(税込)<br>
     */
    public function setItemAmount1($itemAmount1)
    {
        $this->itemAmount1 = $itemAmount1;
    }

    /**
     * 商品価格１(税込)を取得する<br>
     *
     * @return string 商品価格１(税込)<br>
     */
    public function getItemAmount1()
    {
        return $this->itemAmount1;
    }

    /**
     * 商品名２を設定する<br>
     *
     * @param string $itemName2 商品名２<br>
     */
    public function setItemName2($itemName2)
    {
        $this->itemName2 = $itemName2;
    }

    /**
     * 商品名２を取得する<br>
     *
     * @return string 商品名２<br>
     */
    public function getItemName2()
    {
        return $this->itemName2;
    }

    /**
     * 数量２を設定する<br>
     *
     * @param string $itemCount2 数量２<br>
     */
    public function setItemCount2($itemCount2)
    {
        $this->itemCount2 = $itemCount2;
    }

    /**
     * 数量２を取得する<br>
     *
     * @return string 数量２<br>
     */
    public function getItemCount2()
    {
        return $this->itemCount2;
    }

    /**
     * 商品価格２(税込)を設定する<br>
     *
     * @param string $itemAmount2 商品価格２(税込)<br>
     */
    public function setItemAmount2($itemAmount2)
    {
        $this->itemAmount2 = $itemAmount2;
    }

    /**
     * 商品価格２(税込)を取得する<br>
     *
     * @return string 商品価格２(税込)<br>
     */
    public function getItemAmount2()
    {
        return $this->itemAmount2;
    }

    /**
     * 商品名３を設定する<br>
     *
     * @param string $itemName3 商品名３<br>
     */
    public function setItemName3($itemName3)
    {
        $this->itemName3 = $itemName3;
    }

    /**
     * 商品名３を取得する<br>
     *
     * @return string 商品名３<br>
     */
    public function getItemName3()
    {
        return $this->itemName3;
    }

    /**
     * 数量３を設定する<br>
     *
     * @param string $itemCount3 数量３<br>
     */
    public function setItemCount3($itemCount3)
    {
        $this->itemCount3 = $itemCount3;
    }

    /**
     * 数量３を取得する<br>
     *
     * @return string 数量３<br>
     */
    public function getItemCount3()
    {
        return $this->itemCount3;
    }

    /**
     * 商品価格３(税込)を設定する<br>
     *
     * @param string $itemAmount3 商品価格３(税込)<br>
     */
    public function setItemAmount3($itemAmount3)
    {
        $this->itemAmount3 = $itemAmount3;
    }

    /**
     * 商品価格３(税込)を取得する<br>
     *
     * @return string 商品価格３(税込)<br>
     */
    public function getItemAmount3()
    {
        return $this->itemAmount3;
    }

    /**
     * 商品名４を設定する<br>
     *
     * @param string $itemName4 商品名４<br>
     */
    public function setItemName4($itemName4)
    {
        $this->itemName4 = $itemName4;
    }

    /**
     * 商品名４を取得する<br>
     *
     * @return string 商品名４<br>
     */
    public function getItemName4()
    {
        return $this->itemName4;
    }

    /**
     * 数量４を設定する<br>
     *
     * @param string $itemCount4 数量４<br>
     */
    public function setItemCount4($itemCount4)
    {
        $this->itemCount4 = $itemCount4;
    }

    /**
     * 数量４を取得する<br>
     *
     * @return string 数量４<br>
     */
    public function getItemCount4()
    {
        return $this->itemCount4;
    }

    /**
     * 商品価格４(税込)を設定する<br>
     *
     * @param string $itemAmount4 商品価格４(税込)<br>
     */
    public function setItemAmount4($itemAmount4)
    {
        $this->itemAmount4 = $itemAmount4;
    }

    /**
     * 商品価格４(税込)を取得する<br>
     *
     * @return string 商品価格４(税込)<br>
     */
    public function getItemAmount4()
    {
        return $this->itemAmount4;
    }

    /**
     * 商品名５を設定する<br>
     *
     * @param string $itemName5 商品名５<br>
     */
    public function setItemName5($itemName5)
    {
        $this->itemName5 = $itemName5;
    }

    /**
     * 商品名５を取得する<br>
     *
     * @return string 商品名５<br>
     */
    public function getItemName5()
    {
        return $this->itemName5;
    }

    /**
     * 数量５を設定する<br>
     *
     * @param string $itemCount5 数量５<br>
     */
    public function setItemCount5($itemCount5)
    {
        $this->itemCount5 = $itemCount5;
    }

    /**
     * 数量５を取得する<br>
     *
     * @return string 数量５<br>
     */
    public function getItemCount5()
    {
        return $this->itemCount5;
    }

    /**
     * 商品価格５(税込)を設定する<br>
     *
     * @param string $itemAmount5 商品価格５(税込)<br>
     */
    public function setItemAmount5($itemAmount5)
    {
        $this->itemAmount5 = $itemAmount5;
    }

    /**
     * 商品価格５(税込)を取得する<br>
     *
     * @return string 商品価格５(税込)<br>
     */
    public function getItemAmount5()
    {
        return $this->itemAmount5;
    }

    /**
     * 商品価格合計(税込)を設定する<br>
     *
     * @param string $totalItemAmount 商品価格合計(税込)<br>
     */
    public function setTotalItemAmount($totalItemAmount)
    {
        $this->totalItemAmount = $totalItemAmount;
    }

    /**
     * 商品価格合計(税込)を取得する<br>
     *
     * @return string 商品価格合計(税込)<br>
     */
    public function getTotalItemAmount()
    {
        return $this->totalItemAmount;
    }

    /**
     * 送料合計(税込)を設定する<br>
     *
     * @param string $totalCarriage 送料合計(税込)<br>
     */
    public function setTotalCarriage($totalCarriage)
    {
        $this->totalCarriage = $totalCarriage;
    }

    /**
     * 送料合計(税込)を取得する<br>
     *
     * @return string 送料合計(税込)<br>
     */
    public function getTotalCarriage()
    {
        return $this->totalCarriage;
    }

    /**
     * 頭金を設定する<br>
     *
     * @param string $deposit 頭金<br>
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;
    }

    /**
     * 頭金を取得する<br>
     *
     * @return string 頭金<br>
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * 配送先郵便番号を設定する<br>
     *
     * @param string $shippingZipCode 配送先郵便番号<br>
     */
    public function setShippingZipCode($shippingZipCode)
    {
        $this->shippingZipCode = $shippingZipCode;
    }

    /**
     * 配送先郵便番号を取得する<br>
     *
     * @return string 配送先郵便番号<br>
     */
    public function getShippingZipCode()
    {
        return $this->shippingZipCode;
    }

    /**
     * 取扱契約番号を設定する<br>
     *
     * @param string $handlingContractNo 取扱契約番号<br>
     */
    public function setHandlingContractNo($handlingContractNo)
    {
        $this->handlingContractNo = $handlingContractNo;
    }

    /**
     * 取扱契約番号を取得する<br>
     *
     * @return string 取扱契約番号<br>
     */
    public function getHandlingContractNo()
    {
        return $this->handlingContractNo;
    }

    /**
     * 契約書有無区分を設定する<br>
     * @param string $contractDocumentKbn 契約書有無区分<br>
     */
    public function setContractDocumentKbn($contractDocumentKbn)
    {
        $this->contractDocumentKbn = $contractDocumentKbn;
    }

    /**
     * 契約書有無区分を取得する<br>
     * @return string 契約書有無区分<br>
     */
    public function getContractDocumentKbn()
    {
        return $this->contractDocumentKbn;
    }

    /**
     * WEB申込商品IDを設定する<br>
     * @param string $webDescriptionId WEB申込商品ID
     */
    public function setWebDescriptionId($webDescriptionId)
    {
        $this->webDescriptionId = $webDescriptionId;
    }

    /**
     * WEB申込商品IDを取得する<br>
     * @return string WEB申込商品ID
     */
    public function getWebDescriptionId()
    {
        return $this->webDescriptionId;
    }

    /**
     * 楽天オーダーIDを取得する<br>
     * @return string 楽天オーダーID
     */
    public function getRakutenOrderId()
    {
        return $this->rakutenOrderId;
    }

    /**
     * 楽天オーダーIDを設定する<br>
     * @param string $rakutenOrderId 楽天オーダーID
     */
    public function setRakutenOrderId($rakutenOrderId)
    {
        $this->rakutenOrderId = $rakutenOrderId;
    }

    /**
     * リクルートオーダーIDを取得する<br>
     * @return string リクルートオーダーID
     */
    public function getRecruitOrderId()
    {
        return $this->recruitOrderId;
    }

    /**
     * リクルートオーダーIDを設定する<br>
     * @param string $recruitOrderId リクルートオーダーID
     */
    public function setRecruitOrderId($recruitOrderId)
    {
        $this->recruitOrderId = $recruitOrderId;
    }

    /**
     * LINE PayオーダーIDを取得する<br>
     * @return string LINE PayオーダーID
     */
    public function getLinepayOrderId()
    {
        return $this->linepayOrderId;
    }

    /**
     * LINE PayオーダーIDを設定する<br>
     * @param string $linepayOrderId LINE PayオーダーID
     */
    public function setLinepayOrderId($linepayOrderId)
    {
        $this->linepayOrderId = $linepayOrderId;
    }

    /**
     * 商品金額を取得する<br>
     * @return string 商品金額
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    /**
     * 商品金額を設定する<br>
     * @param string $itemAmount 商品金額
     */
    public function setItemAmount($itemAmount)
    {
        $this->itemAmount = $itemAmount;
    }

    /**
     * MasterPass取引IDを取得する<br>
     * @return string MasterPass取引ID
     */
    public function getMasterpassOrderId()
    {
        return $this->masterpassOrderId;
    }

    /**
     * MasterPass取引IDを設定する<br>
     * @param string $masterpassOrderId MasterPass取引ID
     */
    public function setMasterpassOrderId($masterpassOrderId)
    {
        $this->masterpassOrderId = $masterpassOrderId;
    }

    /**
     * 仕向け先コードを取得する<br>
     * @return string 仕向け先コード
     */
    public function getAcquirerCode()
    {
        return $this->acquirerCode;
    }

    /**
     * 仕向け先コードを設定する<br>
     * @param string $acquirerCode 仕向け先コード
     */
    public function setAcquirerCode($acquirerCode)
    {
        $this->acquirerCode = $acquirerCode;
    }

    /**
     * カード番号を取得する<br>
     * @return string カード番号
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * カード番号を設定する<br>
     * @param string $cardNumber カード番号
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * 支払詳細を取得する<br>
     * @return string 支払詳細
     */
    public function getJpoInformation()
    {
        return $this->jpoInformation;
    }

    /**
     * 支払詳細を設定する<br>
     * @param string $jpoInformation 支払詳細
     */
    public function setJpoInformation($jpoInformation)
    {
        $this->jpoInformation = $jpoInformation;
    }

    /**
     * 入金状態を取得する<br>
     *
     * @return string 入金状態
     */
    public function getVaccDepositStatusType()
    {
        return $this->vaccDepositStatusType;
    }

    /**
     * 入金状態を設定する<br>
     *
     * @param string $vaccDepositStatusType 入金状態
     */
    public function setVaccDepositStatusType($vaccDepositStatusType)
    {
        $this->vaccDepositStatusType = $vaccDepositStatusType;
    }

    /**
     * 振込期限を取得する<br>
     *
     * @return string 振込期限
     */
    public function getTransferExpiredDate()
    {
        return $this->transferExpiredDate;
    }

    /**
     * 振込期限を設定する<br>
     *
     * @param string $transferExpiredDate 振込期限
     */
    public function setTransferExpiredDate($transferExpiredDate)
    {
        $this->transferExpiredDate = $transferExpiredDate;
    }

    /**
     * 消込日を取得する<br>
     *
     * @return string 消込日
     */
    public function getReconcileDate()
    {
        return $this->reconcileDate;
    }

    /**
     * 消込日を設定する<br>
     *
     * @param string $reconcileDate 消込日
     */
    public function setReconcileDate($reconcileDate)
    {
        $this->reconcileDate = $reconcileDate;
    }

    /**
     * 入金総額を取得する<br>
     *
     * @return string 入金総額
     */
    public function getTotalDepositAmount()
    {
        return $this->totalDepositAmount;
    }

    /**
     * 入金総額を設定する<br>
     *
     * @param string $totalDepositAmount 入金総額
     */
    public function setTotalDepositAmount($totalDepositAmount)
    {
        $this->totalDepositAmount = $totalDepositAmount;
    }

    /**
     * 登録時振込人名を取得する<br>
     *
     * @return string 登録時振込人名
     */
    public function getEntryTransferName()
    {
        return $this->entryTransferName;
    }

    /**
     * 登録時振込人名を設定する<br>
     *
     * @param string $entryTransferName 登録時振込人名
     */
    public function setEntryTransferName($entryTransferName)
    {
        $this->entryTransferName = $entryTransferName;
    }

    /**
     * 登録時振込番号を取得する<br>
     *
     * @return string 登録時振込番号
     */
    public function getEntryTransferNumber()
    {
        return $this->entryTransferNumber;
    }

    /**
     * 登録時振込番号を設定する<br>
     *
     * @param string $entryTransferNumber 登録時振込番号
     */
    public function setEntryTransferNumber($entryTransferNumber)
    {
        $this->entryTransferNumber = $entryTransferNumber;
    }

    /**
     * 口座番号を取得する<br>
     *
     * @return string 口座番号
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * 口座番号を設定する<br>
     *
     * @param string $accountNumber 口座番号
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * 口座管理方式を取得する<br>
     *
     * @return string 口座管理方式
     */
    public function getAccountManageType()
    {
        return $this->accountManageType;
    }

    /**
     * 口座管理方式を設定する<br>
     *
     * @param string $accountManageType 口座管理方式
     */
    public function setAccountManageType($accountManageType)
    {
        $this->accountManageType = $accountManageType;
    }

    /**
     * Tenpayサービスタイプを取得する<br>
     *
     * @return string Tenpayサービスタイプ
     */
    public function getTenpayServiceType()
    {
        return $this->tenpayServiceType;
    }

    /**
     * Tenpayサービスタイプを設定する<br>
     *
     * @param string $tenpayServiceType Tenpayサービスタイプ
     */
    public function setTenpayServiceType($tenpayServiceType)
    {
        $this->tenpayServiceType = $tenpayServiceType;
    }

    /**
     * 商品詳細を取得する<br>
     *
     * @return string 商品詳細
     */
    public function getItemDetail()
    {
        return $this->itemDetail;
    }

    /**
     * 商品詳細を設定する<br>
     *
     * @param string $itemDetail 商品詳細
     */
    public function setItemDetail($itemDetail)
    {
        $this->itemDetail = $itemDetail;
    }

    /**
     * 商品タグを取得する<br>
     *
     * @return string 商品タグ
     */
    public function getItemLabel()
    {
        return $this->itemLabel;
    }

    /**
     * 商品タグを設定する<br>
     *
     * @param string $itemLabel 商品タグ
     */
    public function setItemLabel($itemLabel)
    {
        $this->itemLabel = $itemLabel;
    }

    /**
     * Tenpay取引IDを取得する<br>
     *
     * @return string Tenpay取引ID
     */
    public function getTenpayOrderId()
    {
        return $this->tenpayOrderId;
    }

    /**
     * Tenpay取引IDを設定する<br>
     *
     * @param string $tenpayOrderId Tenpay取引ID
     */
    public function setTenpayOrderId($tenpayOrderId)
    {
        $this->tenpayOrderId = $tenpayOrderId;
    }

    /**
     * 決済センター（PayPay）との取引IDを取得する<br>
     *
     * @return string 決済センター（PayPay）との取引ID<br>
     */
    public function getPaypayOrderId()
    {
        return $this->paypayOrderId;
    }

    /**
     * 決済センター（PayPay）との取引IDを設定する<br>
     *
     * @param string $paypayOrderId 決済センター（PayPay）との取引ID<br>
     */
    public function setPaypayOrderId($paypayOrderId)
    {
        $this->paypayOrderId = $paypayOrderId;
    }

    /**
     * PayPayサービスタイプを取得する<br>
     *
     * @return string PayPayサービスタイプ<br>
     */
    public function getPaypayServiceType()
    {
        return $this->paypayServiceType;
    }

    /**
     * PayPayサービスタイプを設定する<br>
     *
     * @param string $paypayServiceType PayPayサービスタイプ<br>
     */
    public function setPaypayServiceType($paypayServiceType)
    {
        $this->paypayServiceType = $paypayServiceType;
    }

    /**
     * 返金日時を取得する<br>
     *
     * @return string 返金日時<br>
     */
    public function getRefundDatetime()
    {
        return $this->refundDatetime;
    }

    /**
     * 返金日時を設定する<br>
     *
     * @param string $refundDatetime 返金日時<br>
     */
    public function setRefundDatetime($refundDatetime)
    {
        $this->refundDatetime = $refundDatetime;
    }

    /**
     * 解約日時を取得する<br>
     *
     * @return string 解約日時<br>
     */
    public function getTerminateDatetime()
    {
        return $this->terminateDatetime;
    }

    /**
     * 解約日時を設定する<br>
     *
     * @param string $terminateDatetime 解約日時<br>
     */
    public function setTerminateDatetime($terminateDatetime)
    {
        $this->terminateDatetime = $terminateDatetime;
    }

    /**
     * 顧客決済情報を取得する<br>
     *
     * @return string 顧客決済情報<br>
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * 顧客決済情報を設定する<br>
     *
     * @param string $userKey 顧客決済情報<br>
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;
    }

    /**
     * Alipay+サービスタイプを取得する<br>
     *
     * @return string Alipay+サービスタイプ
     */
    public function getAlipayxServiceType()
    {
        return $this->alipayxServiceType;
    }

    /**
     * Alipay+サービスタイプを設定する<br>
     *
     * @param string $alipayxServiceType Alipay+サービスタイプ
     */
    public function setAlipayxServiceType($alipayxServiceType)
    {
        $this->alipayxServiceType = $alipayxServiceType;
    }

    /**
     * 決済センターの管理IDを取得する<br>
     *
     * @return string 決済センターの管理ID
     */
    public function getCenterId()
    {
        return $this->centerId;
    }

    /**
     * 決済センターの管理IDを設定する<br>
     *
     * @param string $centerId 決済センターの管理ID
     */
    public function setCenterId($centerId)
    {
        $this->centerId = $centerId;
    }

    /**
     * ペイメントソースを取得する<br>
     *
     * @return string ペイメントソース
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * ペイメントソースを設定する<br>
     *
     * @param string $paymentSource ペイメントソース
     */
    public function setPaymentSource($paymentSource)
    {
        $this->paymentSource = $paymentSource;
    }

    /**
     * CvsPay種別を取得する<br>
     *
     * @return string CvsPay種別<br>
     */
    public function getCvspayType()
    {
        return $this->cvspayType;
    }

    /**
     * CvsPay種別を設定する<br>
     *
     * @param string $cvspayType CvsPay種別<br>
     */
    public function setCvspayType($cvspayType)
    {
        $this->cvspayType = $cvspayType;
    }

    /**
     * 決済種別を取得する<br>
     *
     * @return string 決済種別<br>
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * 決済種別を設定する<br>
     *
     * @param string $payType 決済種別<br>
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    }

    /**
     * CvsPayオーダーIDを取得する
     *
     * @return string CvsPayオーダーID
     */
    public function getCvspayOrderId()
    {
        return $this->cvspayOrderId;
    }

    /**
     * CvsPayオーダーIDを設定する
     *
     * @param string $cvspayOrderId CvsPayオーダーID
     */
    public function setCvspayOrderId($cvspayOrderId)
    {
        $this->cvspayOrderId = $cvspayOrderId;
    }

    /**
     * ニッセン注文IDを取得する<br>
     *
     * @return string ニッセン注文ID<br>
     */
    public function getNissenTransactionId()
    {
        return $this->nissenTransactionId;
    }

    /**
     * ニッセン注文IDを設定する<br>
     *
     * @param string $nissenTransactionId ニッセン注文ID<br>
     */
    public function setNissenTransactionId($nissenTransactionId)
    {
        $this->nissenTransactionId = $nissenTransactionId;
    }

    /**
     * 最新自動審査結果を取得する<br>
     *
     * @return string 最新自動審査結果<br>
     */
    public function getLastAuthorResult()
    {
        return $this->lastAuthorResult;
    }

    /**
     * 最新自動審査結果を設定する<br>
     *
     * @param string $lastAuthorResult 最新自動審査結果<br>
     */
    public function setLastAuthorResult($lastAuthorResult)
    {
        $this->lastAuthorResult = $lastAuthorResult;
    }

    /**
     * 売上金額を取得する<br>
     *
     * @return string 売上金額<br>
     */
    public function getCaptureAmount()
    {
        return $this->captureAmount;
    }

    /**
     * 売上金額を設定する<br>
     *
     * @param string $captureAmount 売上金額<br>
     */
    public function setCaptureAmount($captureAmount)
    {
        $this->captureAmount = $captureAmount;
    }

    /**
     * 返金可能金額を取得する<br>
     *
     * @return string 返金可能金額<br>
     */
    public function getRefundableAmount()
    {
        return $this->refundableAmount;
    }

    /**
     * 返金可能金額を設定する<br>
     *
     * @param string $refundableAmount 返金可能金額<br>
     */
    public function setRefundableAmount($refundableAmount)
    {
        $this->refundableAmount = $refundableAmount;
    }

    /**
     * 決済センターの管理IDを取得する<br>
     *
     * @return string 決済センターの管理ID<br>
     */
    public function getCenterOrderId()
    {
        return $this->centerOrderId;
    }

    /**
     * 決済センターの管理IDを設定する<br>
     *
     * @param string $centerOrderId 決済センターの管理ID<br>
     */
    public function setCenterOrderId($centerOrderId)
    {
        $this->centerOrderId = $centerOrderId;
    }

    /**
     * 承諾状態を取得する<br>
     *
     * @return string 承諾状態<br>
     */
    public function getConsentStatus()
    {
        return $this->consentStatus;
    }

    /**
     * 承諾状態を設定する<br>
     *
     * @param string $consentStatus 承諾状態<br>
     */
    public function setConsentStatus($consentStatus)
    {
        $this->consentStatus = $consentStatus;
    }

    /**
     * 頻度（単位）を取得する<br>
     *
     * @return string 頻度（単位）<br>
     */
    public function getFrequencyUnit()
    {
        return $this->frequencyUnit;
    }

    /**
     * 頻度（単位）を設定する<br>
     *
     * @param string $frequencyUnit 頻度（単位）<br>
     */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->frequencyUnit = $frequencyUnit;
    }

    /**
     * 頻度（値）を取得する<br>
     *
     * @return string 頻度（値）<br>
     */
    public function getFrequencyValue()
    {
        return $this->frequencyValue;
    }

    /**
     * 頻度（値）を設定する<br>
     *
     * @param string $frequencyValue 頻度（値）<br>
     */
    public function setFrequencyValue($frequencyValue)
    {
        $this->frequencyValue = $frequencyValue;
    }

    /**
     * merpayサービスタイプを取得する<br>
     *
     * @return string merpayサービスタイプ<br>
     */
    public function getMerpayServiceType()
    {
        return $this->merpayServiceType;
    }

    /**
     * merpayサービスタイプを設定する<br>
     *
     * @param string $merpayServiceType merpayサービスタイプ<br>
     */
    public function setMerpayServiceType($merpayServiceType)
    {
        $this->merpayServiceType = $merpayServiceType;
    }

    /**
     * エポス取引IDを取得する<br>
     *
     * @return string eposOrderId エポス取引ID
     */
    public function getEposOrderId()
    {
        return $this->eposOrderId;
    }

    /**
     * エポス取引IDを設定する<br>
     *
     * @param string $eposOrderId エポス取引ID<br>
     */
    public function setEposOrderId($eposOrderId)
    {
        $this->eposOrderId = $eposOrderId;
    }

    /**
     * クレジット利用額を取得する<br>
     *
     * @return string useCredit クレジット利用額
     */
    public function getUseCredit()
    {
        return $this->useCredit;
    }

    /**
     * クレジット利用額を設定する<br>
     *
     * @param string $useCredit クレジット利用額
     */
    public function setUseCredit($useCredit)
    {
        $this->useCredit = $useCredit;
    }

    /**
     * クーポン利用額を取得する<br>
     *
     * @return string useCoupon クーポン利用額
     */
    public function getUseCoupon()
    {
        return $this->useCoupon;
    }

    /**
     * クーポン利用額を設定する<br>
     *
     * @param string $useCoupon クーポン利用額
     */
    public function setUseCoupon($useCoupon)
    {
        $this->useCoupon = $useCoupon;
    }


    /**
     * 承諾時決済タイプを取得する<br>
     *
     * @return string consentAuthType 承諾時決済タイプ
     */
    public function getConsentAuthType()
    {
        return $this->consentAuthType;
    }

    /**
     * 承諾時決済タイプを設定する<br>
     *
     * @param string $consentAuthType 承諾時決済タイプ
     */
    public function setConsentAuthType($consentAuthType)
    {
        $this->consentAuthType = $consentAuthType;
    }

    /**
     * 事前承認IDを取得する<br>
     *
     * @return string preapprovalId 事前承認ID
     */
    public function getPreapprovalId()
    {
        return $this->preapprovalId;
    }

    /**
     * 事前承認IDを設定する<br>
     *
     * @param string $preapprovalId 事前承認ID
     */
    public function setPreapprovalId($preapprovalId)
    {
        $this->preapprovalId = $preapprovalId;
    }

    /**
     * 随時決済金額を取得する<br>
     *
     * @return string odAmount<br>
     */
    public function getOdAmount()
    {
        return $this->odAmount;
    }

    /**
     * 随時決済金額を設定する<br>
     *
     * @param string  odAmount 随時決済金額<br>
     */
    public function setOdAmount($odAmount)
    {
        $this->odAmount = $odAmount;
    }

    /**
     * 決済取引IDを取得する<br>
     * 
     * @return string gatewayOrderId<br>
     */
    public function getGatewayOrderId()
    {
        return $this->gatewayOrderId;
    }

    /**
     * 決済取引IDを設定する<br>
     * 
     * @param string  gatewayOrderId 決済取引ID<br>
     */
    public function setGatewayOrderId($gatewayOrderId)
    {
        $this->gatewayOrderId = $gatewayOrderId;
    }

    /**
     * クレジットカードのブランドを取得する<br>
     * 
     * @return string cardBrand<br>
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * クレジットカードのブランドを設定する<br>
     * 
     * @param string  cardBrand クレジットカードのブランド<br>
     */
    public function setCardBrand($cardBrand)
    {
        $this->cardBrand = $cardBrand;
    }

    /**
     * クレジットカード番号の下4桁を取得する<br>
     * 
     * @return string cardLast4<br>
     */
    public function getCardLast4()
    {
        return $this->cardLast4;
    }

    /**
     * クレジットカード番号の下4桁を設定する<br>
     * 
     * @param string  cardLast4 クレジットカード番号の下4桁<br>
     */
    public function setCardLast4($cardLast4)
    {
        $this->cardLast4 = $cardLast4;
    }

    /**
     * 分割払いの回数を取得する<br>
     * 
     * @return string cardInstallments<br>
     */
    public function getCardInstallments()
    {
        return $this->cardInstallments;
    }

    /**
     * 分割払いの回数を設定する<br>
     * 
     * @param string  cardInstallments 分割払いの回数<br>
     */
    public function setCardInstallments($cardInstallments)
    {
        $this->cardInstallments = $cardInstallments;
    }

    /**
     * セキュリティコード認証利用有無を取得する<br>
     * 
     * @return string cardCvc<br>
     */
    public function getCardCvc()
    {
        return $this->cardCvc;
    }

    /**
     * セキュリティコード認証利用有無を設定する<br>
     * 
     * @param string  cardCvc セキュリティコード認証利用有無<br>
     */
    public function setCardCvc($cardCvc)
    {
        $this->cardCvc = $cardCvc;
    }

    /**
     * 3D セキュア認証利用有無を取得する<br>
     * 
     * @return string card3ds<br>
     */
    public function getCard3ds()
    {
        return $this->card3ds;
    }

    /**
     * 3D セキュア認証利用有無を設定する<br>
     * 
     * @param string  card3ds 3D セキュア認証利用有無<br>
     */
    public function setCard3ds($card3ds)
    {
        $this->card3ds = $card3ds;
    }

    /**
     * 取消受付期限を取得する<br>
     * 
     * @return string cancelExpirationTime<br>
     */
    public function getCancelExpirationTime()
    {
        return $this->cancelExpirationTime;
    }

    /**
     * 取消受付期限を設定する<br>
     * 
     * @param string  cancelExpirationTime 取消受付期限<br>
     */
    public function setCancelExpirationTime($cancelExpirationTime)
    {
        $this->cancelExpirationTime = $cancelExpirationTime;
    }

    /**
     * 売上受付期限を取得する<br>
     * 
     * @return string captureExpirationTime<br>
     */
    public function getCaptureExpirationTime()
    {
        return $this->captureExpirationTime;
    }

    /**
     * 売上受付期限を設定する<br>
     * 
     * @param string  captureExpirationTime 売上受付期限<br>
     */
    public function setCaptureExpirationTime($captureExpirationTime)
    {
        $this->captureExpirationTime = $captureExpirationTime;
    }

    /**
     * 金額変更受付期限を取得する<br>
     * 
     * @return string updateExpirationTime<br>
     */
    public function getUpdateExpirationTime()
    {
        return $this->updateExpirationTime;
    }

    /**
     * 金額変更受付期限を設定する<br>
     * 
     * @param string  updateExpirationTime 金額変更受付期限<br>
     */
    public function setUpdateExpirationTime($updateExpirationTime)
    {
        $this->updateExpirationTime = $updateExpirationTime;
    }

    /**
     * 与信延長受付期限を取得する<br>
     * 
     * @return string extendAuthExpirationTime<br>
     */
    public function getExtendAuthExpirationTime()
    {
        return $this->extendAuthExpirationTime;
    }

    /**
     * 与信延長受付期限を設定する<br>
     * 
     * @param string  extendAuthExpirationTime 与信延長受付期限<br>
     */
    public function setExtendAuthExpirationTime($extendAuthExpirationTime)
    {
        $this->extendAuthExpirationTime = $extendAuthExpirationTime;
    }

    /**
     * 決済確認画面種別を取得する<br>
     * 
     * @return string payConfirmScreenType<br>
     */
    public function getPayConfirmScreenType() {
            return $this->payConfirmScreenType;
    }

    /**
     * 決済確認画面種別を設定する<br>
     * 
     * @param string  payConfirmScreenType 決済確認画面種別<br>
     */
    public function setPayConfirmScreenType($payConfirmScreenType) {
            $this->payConfirmScreenType = $payConfirmScreenType;
    }

    /**
     * 固有トランザクション情報を取得する<br>
     *
     * @return ProperTransactionInfo 固有トランザクション情報<br>
     */
    public function getProperTransactionInfo()
    {
        return $this->properTransactionInfo;
    }

    /**
     * 固有トランザクション情報を設定する<br>
     *
     * @param ProperTransactionInfo $properTransactionInfo 固有トランザクション情報<br>
     */
    public function setProperTransactionInfo($properTransactionInfo)
    {
        $this->properTransactionInfo = $properTransactionInfo;
    }
}
