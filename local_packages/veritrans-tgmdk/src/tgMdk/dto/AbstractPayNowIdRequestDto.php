<?php

namespace tgMdk\dto;

/**
 * PayNowIDリクエストDTO親クラス<br>
 *
 * @author Veritrans, Inc.
 */
class AbstractPayNowIdRequestDto extends MdkBaseDto
{

    /** サービスタイプ */
    private $SERVICE_TYPE;
    /** サービスコマンド */
    private $SERVICE_COMMAND;
    /** ログ用文字列 */
    private $maskedLog;
    /** PayNowIDオブジェクト */
    protected $payNowIdParam;

    /**
     * コンストラクタ<br>
     * @param string $serviceType サービスタイプ<br>
     * @param string $serviceCommand サービスコマンド<br>
     */
    function __construct($serviceType, $serviceCommand)
    {
        $this->SERVICE_TYPE = $serviceType;
        $this->SERVICE_COMMAND = $serviceCommand;
        $this->payNowIdParam = new PayNowIdParam();
    }

    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
    }

    /**
     * ログ用文字列(マスク済み)を設定する<br>
     * @param string $maskedLog ログ用文字列(マスク済み)<br>
     */
    public function _setMaskedLog($maskedLog)
    {
        $this->maskedLog = $maskedLog;
    }

    /**
     * ログ用文字列(マスク済み)を取得する<br>
     * @return string ログ用文字列(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->maskedLog;
    }

    /**
     * 会員IDを取得する。<br>
     * @return string 会員ID<br>
     */
    public function getAccountId()
    {
        $this->existAccountParam();
        return $this->payNowIdParam->getAccountParam()->getAccountId();
    }

    /**
     * 会員IDを設定する。<br>
     * @param string $accountId 会員ID<br>
     */
    public function setAccountId($accountId)
    {
        $this->existAccountParam();
        $this->payNowIdParam->getAccountParam()->setAccountId($accountId);
    }

    /**
     * ワンタイムトークン種別を取得する。<br>
     * @return string ワンタイムトークン種別<br>
     */
    public function getOnetimeTokenType()
    {
        $this->existAccountParam();
        return $this->payNowIdParam->getAccountParam()->getOnetimeTokenType();
    }

    /**
     * ワンタイムトークン種別を設定する。<br>
     * @param string $onetimeTokenType ワンタイムトークン種別<br>
     */
    public function setOnetimeTokenType($onetimeTokenType)
    {
        $this->existAccountParam();
        $this->payNowIdParam->getAccountParam()->setOnetimeTokenType($onetimeTokenType);
    }

    /**
     * 元会員IDを取得する。<br>
     * @return string 元会員ID<br>
     */
    public function getOriginalAccountId()
    {
        $this->existAccountParam();
        return $this->payNowIdParam->getAccountParam()->getOriginalAccountId();
    }

    /**
     * 元会員IDを設定する。<br>
     * @param string $originalAccountId 元会員ID<br>
     */
    public function setOriginalAccountId($originalAccountId)
    {
        $this->existAccountParam();
        $this->payNowIdParam->getAccountParam()->setOriginalAccountId($originalAccountId);
    }

    /**
     * PayNowIDを取得する。<br>
     * @return string PayNowID<br>
     */
    public function getPayNowId()
    {
        $this->existAccountParam();
        return $this->payNowIdParam->getAccountParam()->getPayNowId();
    }

    /**
     * PayNowIDを設定する。<br>
     * @param string $payNowId PayNowID<br>
     */
    public function setPayNowId($payNowId)
    {
        $this->existAccountParam();
        $this->payNowIdParam->getAccountParam()->setPayNowId($payNowId);
    }

    /**
     * リクエスト項目を取得する。<br>
     * @return string リクエスト項目<br>
     */
    public function getTransData()
    {
        $this->existAccountParam();
        return $this->payNowIdParam->getAccountParam()->getTransData();
    }

    /**
     * リクエスト項目を設定する。<br>
     * @param string $transData リクエスト項目<br>
     */
    public function setTransData($transData)
    {
        $this->existAccountParam();
        $this->payNowIdParam->getAccountParam()->setTransData($transData);
    }

    /**
     * 入会年月日を設定する<br>
     * @param string $createDate 入会年月日<br>
     */
    public function setCreateDate($createDate)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setCreateDate($createDate);
    }

    /**
     * 入会年月日を取得する<br>
     * @return string 入会年月日<br>
     */
    public function getCreateDate()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getCreateDate();
    }

    /**
     * 退会年月日を設定する<br>
     * @param string $deleteDate 退会年月日<br>
     */
    public function setDeleteDate($deleteDate)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setDeleteDate($deleteDate);
    }

    /**
     * 退会年月日を取得する<br>
     * @return string 退会年月日<br>
     */
    public function getDeleteDate()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getDeleteDate();
    }

    /**
     * 強制退会フラグを設定する<br>
     * @param string $forceDeleteDate 強制退会フラグ<br>
     */
    public function setForceDeleteDate($forceDeleteDate)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setForceDeleteDate($forceDeleteDate);
    }

    /**
     * 強制退会フラグを取得する<br>
     * @return string 強制退会フラグ<br>
     */
    public function getForceDeleteDate()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getForceDeleteDate();
    }

    /**
     * カード情報削除フラグを設定する<br>
     * @param string $deleteCardInfo カード情報削除フラグ<br>
     */
    public function setDeleteCardInfo($deleteCardInfo)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setDeleteCardInfo($deleteCardInfo);
    }

    /**
     * カード情報削除フラグを取得する<br>
     * @return string カード情報削除フラグ<br>
     */
    public function getDeleteCardInfo()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getDeleteCardInfo();
    }

    /**
     * カード情報追加フラグを設定する<br>
     * @param string $addCardInfo カード情報追加フラグ<br>
     */
    public function setAddCardInfo($addCardInfo)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setAddCardInfo($addCardInfo);
    }

    /**
     * カード情報追加フラグを取得する<br>
     * @return string カード情報追加フラグ<br>
     */
    public function getAddCardInfo()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getAddCardInfo();
    }

    /**
     * 元会員ID退会フラグを設定する<br>
     * @param string $deleteOriginalAccountId 元会員ID退会フラグ<br>
     */
    public function setDeleteOriginalAccountId($deleteOriginalAccountId)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setDeleteOriginalAccountId($deleteOriginalAccountId);
    }

    /**
     * 元会員ID退会フラグを取得する<br>
     * @return string 元会員ID退会フラグ<br>
     */
    public function getDeleteOriginalAccountId()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getDeleteOriginalAccountId();
    }

    /**
     * 標準カード限定フラグを設定する<br>
     * @param string $defaultCardOnly 標準カード限定フラグ<br>
     */
    public function setDefaultCardOnly($defaultCardOnly)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setDefaultCardOnly($defaultCardOnly);
    }

    /**
     * 標準カード限定フラグを取得する<br>
     * @return string 標準カード限定フラグ<br>
     */
    public function getDefaultCardOnly()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getDefaultCardOnly();
    }

    /**
     * 洗替設定フラグを設定する<br>
     * @param string $cleaningConfig 洗替設定フラグ<br>
     */
    public function setCleaningConfig($cleaningConfig)
    {
        $this->existAccountBasicParam();
        $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->setCleaningConfig($cleaningConfig);
    }

    /**
     * 洗替設定フラグを取得する<br>
     * @return string 洗替設定フラグ<br>
     */
    public function getCleaningConfig()
    {
        $this->existAccountBasicParam();
        return $this->payNowIdParam->getAccountParam()->getAccountBasicParam()->getCleaningConfig();
    }

    /**
     * カードIDを設定する<br>
     * @param string $cardId カードID<br>
     */
    public function setCardId($cardId)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setCardId($cardId);
    }

    /**
     * カードIDを取得する<br>
     * @return string カードID<br>
     */
    public function getCardId()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getCardId();
    }

    /**
     * 標準カードフラグを設定する<br>
     * @param string $defaultCard 標準カードフラグ<br>
     */
    public function setDefaultCard($defaultCard)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setDefaultCard($defaultCard);
    }

    /**
     * 標準カードフラグを取得する<br>
     * @return string 標準カードフラグ<br>
     */
    public function getDefaultCard()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getDefaultCard();
    }

    /**
     * 標準カードIDを設定する<br>
     * @param string $defaultCardId 標準カードID<br>
     */
    public function setDefaultCardId($defaultCardId)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setDefaultCardId($defaultCardId);
    }

    /**
     * 標準カードIDを取得する<br>
     * @return string 標準カードID<br>
     */
    public function getDefaultCardId()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getDefaultCardId();
    }

    /**
     * セキュリティコードを設定する<br>
     * @param string $securityCode セキュリティコード<br>
     */
    public function setSecurityCode($securityCode)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setSecurityCode($securityCode);
    }

    /**
     * セキュリティコードを取得する<br>
     * @return string セキュリティコード<br>
     */
    public function getSecurityCode()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getSecurityCode();
    }

    /**
     * 洗替実施フラグを設定する<br>
     * @param string $updater 洗替実施フラグ<br>
     */
    public function setUpdater($updater)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setUpdater($updater);
    }

    /**
     * 洗替実施フラグを取得する<br>
     * @return string 洗替実施フラグ<br>
     */
    public function getUpdater()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getUpdater();
    }

    /**
     * カード番号を設定する<br>
     * @param string $cardNumber カード番号<br>
     */
    public function setCardNumber($cardNumber)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setCardNumber($cardNumber);
    }

    /**
     * カード番号を取得する<br>
     * @return string カード番号<br>
     */
    public function getCardNumber()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getCardNumber();
    }

    /**
     * 有効期限を設定する<br>
     * @param string $cardExpire 有効期限<br>
     */
    public function setCardExpire($cardExpire)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setCardExpire($cardExpire);
    }

    /**
     * 有効期限を取得する<br>
     * @return string 有効期限<br>
     */
    public function getCardExpire()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getCardExpire();
    }

    /**
     * カード保有者名を設定する<br>
     * @param string $cardholderName カード保有者名<br>
     */
    public function setCardholderName($cardholderName)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setCardholderName($cardholderName);
    }

    /**
     * カード保有者名を取得する<br>
     * @return string カード保有者名<br>
     */
    public function getCardholderName()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getCardholderName();
    }

    /**
     * トークンを設定する
     * @param string $token string トークン
     */
    public function setToken($token)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setToken($token);
    }

    /**
     * トークンを取得する
     * @return string トークン
     */
    public function getToken()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getToken();
    }

    /**
     * カード番号マスクタイプを設定する
     * @param string $cardNumberMaskType string カード番号マスクタイプ
     */
    public function setCardNumberMaskType($cardNumberMaskType)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setCardNumberMaskType($cardNumberMaskType);
    }

    /**
     * カード番号マスクタイプを取得する
     * @return string カード番号マスクタイプ
     */
    public function getCardNumberMaskType()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getCardNumberMaskType();
    }

    /**
     * 与信実施フラグを設定する
     * @param string $withAuthorize string 与信実施フラグ
     */
    public function setWithAuthorize($withAuthorize)
    {
        $this->existCardParam();
        $this->payNowIdParam->getAccountParam()->getCardParam()->setWithAuthorize($withAuthorize);
    }

    /**
     * 与信実施フラグを取得する
     * @return string 与信実施フラグ
     */
    public function getWithAuthorize()
    {
        $this->existCardParam();
        return $this->payNowIdParam->getAccountParam()->getCardParam()->getWithAuthorize();
    }

    /**
     * 課金グループIDを設定する<br>
     * @param string $groupId 課金グループID<br>
     */
    public function setGroupId($groupId)
    {
        if ($this->SERVICE_TYPE === PayNowIdConstants::SERVICE_TYPE_ACCOUNT
            || $this->SERVICE_TYPE === PayNowIdConstants::SERVICE_TYPE_RECURRING) {
            $this->existRecurringChargeParam();
            $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setGroupId($groupId);
        } else if ($this->SERVICE_TYPE === PayNowIdConstants::SERVICE_TYPE_CHARGE) {
            $this->existChargeParam();
            $this->payNowIdParam->getChargeParam()->setGroupId($groupId);
        }
    }

    /**
     * 課金グループIDを取得する<br>
     * @return string 課金グループID<br>
     */
    public function getGroupId()
    {
        if ($this->SERVICE_TYPE === PayNowIdConstants::SERVICE_TYPE_ACCOUNT
            || $this->SERVICE_TYPE === PayNowIdConstants::SERVICE_TYPE_RECURRING) {
            $this->existRecurringChargeParam();
            return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getGroupId();
        } else if ($this->SERVICE_TYPE === PayNowIdConstants::SERVICE_TYPE_CHARGE) {
            $this->existChargeParam();
            return $this->payNowIdParam->getChargeParam()->getGroupId();
        }
        return null;
    }

    /**
     * 課金開始日を設定する<br>
     * @param string $startDate 課金開始日<br>
     */
    public function setStartDate($startDate)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setStartDate($startDate);
    }

    /**
     * 課金開始日を取得する<br>
     * @return string 課金開始日<br>
     */
    public function getStartDate()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getStartDate();
    }

    /**
     * 課金終了日を設定する<br>
     * @param string $endDate 課金終了日<br>
     */
    public function setEndDate($endDate)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setEndDate($endDate);
    }

    /**
     * 課金終了日を取得する<br>
     * @return string 課金終了日<br>
     */
    public function getEndDate()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getEndDate();
    }

    /**
     * 次回課金終了フラグを設定する<br>
     * @param string $finalCharge 次回課金終了フラグ<br>
     */
    public function setFinalCharge($finalCharge)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setFinalCharge($finalCharge);
    }

    /**
     * 次回課金終了フラグを取得する<br>
     * @return string 次回課金終了フラグ<br>
     */
    public function getFinalCharge()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getFinalCharge();
    }

    /**
     * 継続課金用メモ1を設定する<br>
     * @param string $recurringMemo1 継続課金用メモ1<br>
     */
    public function setRecurringMemo1($recurringMemo1)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setRecurringMemo1($recurringMemo1);
    }

    /**
     * 継続課金用メモ1を取得する<br>
     * @return string 継続課金用メモ1<br>
     */
    public function getRecurringMemo1()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getRecurringMemo1();
    }

    /**
     * 継続課金用メモ2を設定する<br>
     * @param string $recurringMemo2 継続課金用メモ2<br>
     */
    public function setRecurringMemo2($recurringMemo2)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setRecurringMemo2($recurringMemo2);
    }

    /**
     * 継続課金用メモ2を取得する<br>
     * @return string 継続課金用メモ2<br>
     */
    public function getRecurringMemo2()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getRecurringMemo2();
    }

    /**
     * 継続課金用メモ3を設定する<br>
     * @param string $recurringMemo3 継続課金用メモ3<br>
     */
    public function setRecurringMemo3($recurringMemo3)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setRecurringMemo3($recurringMemo3);
    }

    /**
     * 継続課金用メモ3を取得する<br>
     * @return string 継続課金用メモ3<br>
     */
    public function getRecurringMemo3()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getRecurringMemo3();
    }

    /**
     * 課金オプション利用フラグを設定する<br>
     * @param string $useChargeOption 課金オプション利用フラグ<br>
     */
    public function setUseChargeOption($useChargeOption)
    {
        $this->existRecurringChargeParam();
        $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setUseChargeOption($useChargeOption);
    }

    /**
     * 課金オプション利用フラグを取得する<br>
     * @return string 課金オプション利用フラグ<br>
     */
    public function getUseChargeOption()
    {
        $this->existRecurringChargeParam();
        return $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getUseChargeOption();
    }

    /**
     * 都度/初回課金金額を設定する<br>
     * @param string $oneTimeAmount 都度/初回課金金額<br>
     */
    public function setOneTimeAmount($oneTimeAmount)
    {
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトに設定
            $this->existRecurringChargeParam();
            $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setOneTimeAmount($oneTimeAmount);
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトに設定
            $this->existChargeParam();
            $this->payNowIdParam->getChargeParam()->setOneTimeAmount($oneTimeAmount);
        }
    }

    /**
     * 都度/初回課金金額を取得する<br>
     * @return string 都度/初回課金金額<br>
     */
    public function getOneTimeAmount()
    {
        $oneTimeAmount = null;
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトから取得
            $this->existRecurringChargeParam();
            $oneTimeAmount = $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getOneTimeAmount();
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトから取得
            $this->existChargeParam();
            $oneTimeAmount = $this->payNowIdParam->getChargeParam()->getOneTimeAmount();
        }
        return $oneTimeAmount;
    }

    /**
     * 継続課金金額を設定する<br>
     * @param string $amount 継続課金金額<br>
     */
    public function setAmount($amount)
    {
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトに設定
            $this->existRecurringChargeParam();
            $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setAmount($amount);
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトに設定
            $this->existChargeParam();
            $this->payNowIdParam->getChargeParam()->setAmount($amount);
        }
    }

    /**
     * 継続課金金額を取得する<br>
     * @return string 継続課金金額<br>
     */
    public function getAmount()
    {
        $amount = null;
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトから取得
            $this->existRecurringChargeParam();
            $amount = $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getAmount();
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトから取得
            $this->existChargeParam();
            $amount = $this->payNowIdParam->getChargeParam()->getAmount();
        }
        return $amount;
    }

    /**
     * 売上日を設定する<br>
     * @param string $salesDay 売上日<br>
     */
    public function setSalesDay($salesDay)
    {
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトに設定
            $this->existRecurringChargeParam();
            $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setSalesDay($salesDay);
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトに設定
            $this->existChargeParam();
            $this->payNowIdParam->getChargeParam()->setSalesDay($salesDay);
        }
    }

    /**
     * 売上日を取得する<br>
     * @return string 売上日<br>
     */
    public function getSalesDay()
    {
        $salesDay = null;
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトから取得
            $this->existRecurringChargeParam();
            $salesDay = $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getSalesDay();
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトから取得
            $this->existChargeParam();
            $salesDay = $this->payNowIdParam->getChargeParam()->getSalesDay();
        }
        return $salesDay;
    }

    /**
     * 仕向先会社コードを設定する<br>
     * @param string $acquireCode 仕向先会社コード<br>
     */
    public function setAcquireCode($acquireCode)
    {
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトに設定
            $this->existRecurringChargeParam();
            $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->setAcquireCode($acquireCode);
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトに設定
            $this->existChargeParam();
            $this->payNowIdParam->getChargeParam()->setAcquireCode($acquireCode);
        }
    }

    /**
     * 仕向先会社コードを取得する<br>
     * @return string 仕向先会社コード<br>
     */
    public function getAcquireCode()
    {
        $acquireCode = null;
        if (PayNowIdConstants::SERVICE_TYPE_ACCOUNT === $this->SERVICE_TYPE
            || PayNowIdConstants::SERVICE_TYPE_RECURRING === $this->SERVICE_TYPE) {
            // 会員課金情報オブジェクトから取得
            $this->existRecurringChargeParam();
            $acquireCode = $this->payNowIdParam->getAccountParam()->getRecurringChargeParam()->getAcquireCode();
        } else if (PayNowIdConstants::SERVICE_TYPE_CHARGE === $this->SERVICE_TYPE) {
            // 課金グループ情報オブジェクトから取得
            $this->existChargeParam();
            $acquireCode = $this->payNowIdParam->getChargeParam()->getAcquireCode();
        }
        return $acquireCode;
    }

    /**
     * 金融機関コードを設定する<br>
     * @param string $bankCode 金融機関コード<br>
     */
    public function setBankCode($bankCode)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setBankCode($bankCode);
    }

    /**
     * 金融機関コードを取得する<br>
     * @return string 金融機関コード<br>
     */
    public function getBankCode()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getBankCode();
    }

    /**
     * 支店コードを設定する<br>
     * @param string $branchCode 支店コード<br>
     */
    public function setBranchCode($branchCode)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setBranchCode($branchCode);
    }

    /**
     * 支店コードを取得する<br>
     * @return string 支店コード<br>
     */
    public function getBranchCode()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getBranchCode();
    }

    /**
     * 口座種別を設定する<br>
     * @param string $accountType 口座種別<br>
     */
    public function setAccountType($accountType)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setAccountType($accountType);
    }

    /**
     * 口座種別を取得する<br>
     * @return string 口座種別<br>
     */
    public function getAccountType()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getAccountType();
    }

    /**
     * 口座番号を設定する<br>
     * @param string $accountNumber 口座番号<br>
     */
    public function setAccountNumber($accountNumber)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setAccountNumber($accountNumber);
    }

    /**
     * 口座番号を取得する<br>
     * @return string 口座番号<br>
     */
    public function getAccountNumber()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getAccountNumber();
    }

    /**
     * 口座管理方式を設定する<br>
     * @param string $accountManageType 口座管理方式<br>
     */
    public function setAccountManageType($accountManageType)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setAccountManageType($accountManageType);
    }

    /**
     * 口座管理方式を取得する<br>
     * @return string 口座管理方式<br>
     */
    public function getAccountManageType()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getAccountManageType();
    }

    /**
     * 銀行口座関連付け拒否フラグを設定する<br>
     * @param string $rejectBankAccount 銀行口座関連付け拒否フラグ<br>
     */
    public function setRejectBankAccount($rejectBankAccount)
    {
        $this->existBankAccountParam();
        $this->payNowIdParam->getAccountParam()->getBankAccountParam()->setRejectBankAccount($rejectBankAccount);
    }

    /**
     * 銀行口座関連付け拒否フラグを取得する<br>
     * @return string 銀行口座関連付け拒否フラグ<br>
     */
    public function getRejectBankAccount()
    {
        $this->existBankAccountParam();
        return $this->payNowIdParam->getAccountParam()->getBankAccountParam()->getRejectBankAccount();
    }

    /**
     * 課金グループ名を設定する<br>
     * @param string $groupName 課金グループ名<br>
     */
    public function setGroupName($groupName)
    {
        $this->existChargeParam();
        $this->payNowIdParam->getChargeParam()->setGroupName($groupName);
    }

    /**
     * 課金グループ名を取得する<br>
     * @return string 課金グループ名<br>
     */
    public function getGroupName()
    {
        $this->existChargeParam();
        return $this->payNowIdParam->getChargeParam()->getGroupName();
    }

    /**
     * 課金スタイル区分を設定する<br>
     * @param string $type 課金スタイル区分<br>
     */
    public function setType($type)
    {
        $this->existChargeParam();
        $this->payNowIdParam->getChargeParam()->setType($type);
    }

    /**
     * 課金スタイル区分を取得する<br>
     * @return string 課金スタイル区分<br>
     */
    public function getType()
    {
        $this->existChargeParam();
        return $this->payNowIdParam->getChargeParam()->getType();
    }

    /**
     * 課金日取扱区分を設定する<br>
     * @param string $chargeType 課金日取扱区分<br>
     */
    public function setChargeType($chargeType)
    {
        $this->existChargeParam();
        $this->payNowIdParam->getChargeParam()->setChargeType($chargeType);
    }

    /**
     * 課金日取扱区分を取得する<br>
     * @return string 課金日取扱区分<br>
     */
    public function getChargeType()
    {
        $this->existChargeParam();
        return $this->payNowIdParam->getChargeParam()->getChargeType();
    }

    /**
     * 継続課金スケジュールを設定する<br>
     * @param string $schedule 継続課金スケジュール<br>
     */
    public function setSchedule($schedule)
    {
        $this->existChargeParam();
        $this->payNowIdParam->getChargeParam()->setSchedule($schedule);
    }

    /**
     * 継続課金スケジュールを取得する<br>
     * @return string 継続課金スケジュール<br>
     */
    public function getSchedule()
    {
        $this->existChargeParam();
        return $this->payNowIdParam->getChargeParam()->getSchedule();
    }

    /**
     * タンキングフラグを設定する<br>
     * @param string $tanking タンキングフラグ<br>
     */
    public function setTanking($tanking)
    {
        $this->payNowIdParam->setTanking($tanking);
    }

    /**
     * タンキングフラグを取得する<br>
     * @return string タンキングフラグ<br>
     */
    public function getTanking()
    {
        return $this->payNowIdParam->getTanking();
    }

    /**
     * 元取引IDを設定する<br>
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->existOrderParam();
        $this->payNowIdParam->getOrderParam()->setOriginalOrderId($originalOrderId);
    }

    /**
     * 元取引IDを取得する<br>
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        $this->existOrderParam();
        return $this->payNowIdParam->getOrderParam()->getOriginalOrderId();
    }

    /**
     * 洗替実施マーチャントIDを設定する<br>
     * @param string $cleaningMerchantId 洗替実施マーチャントID<br>
     */
    public function setCleaningMerchantId($cleaningMerchantId)
    {
        $this->existOrderParam();
        $this->payNowIdParam->getOrderParam()->setCleaningMerchantId($cleaningMerchantId);
    }

    /**
     * 洗替実施マーチャントIDを取得する<br>
     * @return string 洗替実施マーチャントID<br>
     */
    public function getCleaningMerchantId()
    {
        $this->existOrderParam();
        return $this->payNowIdParam->getOrderParam()->getCleaningMerchantId();
    }

    /**
     * AccountParamがPayNowIdParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、PayNowIdParamに設定する。<br>
     */
    private function existAccountParam()
    {
        if (is_null($this->payNowIdParam->getAccountParam())) {
            $accountParam = new AccountParam();
            $this->payNowIdParam->setAccountParam($accountParam);
        }
    }

    /**
     * AccountBasicParamがPayNowIdParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、PayNowIdParamに設定する。<br>
     */
    private function existAccountBasicParam()
    {
        $this->existAccountParam();
        if (is_null($this->payNowIdParam->getAccountParam()->getAccountBasicParam())) {
            $accountBasicParam = new AccountBasicParam();
            $this->payNowIdParam->getAccountParam()->setAccountBasicParam($accountBasicParam);
        }
    }

    /**
     * CardParamがPayNowIdParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、PayNowIdParamに設定する。<br>
     */
    private function existCardParam()
    {
        $this->existAccountParam();
        if (is_null($this->payNowIdParam->getAccountParam()->getCardParam())) {
            $cardParam = new CardParam();
            $this->payNowIdParam->getAccountParam()->setCardParam($cardParam);
        }
    }

    /**
     * RecurringChargeParamがPayNowIdParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、PayNowIdParamに設定する。<br>
     */
    private function existRecurringChargeParam()
    {
        $this->existAccountParam();
        if (is_null($this->payNowIdParam->getAccountParam()->getRecurringChargeParam())) {
            $recurringChargeParam = new RecurringChargeParam();
            $this->payNowIdParam->getAccountParam()->setRecurringChargeParam($recurringChargeParam);
        }
    }

    /**
     * ChargeParamがPayNowIdParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、PayNowIdParamに設定する。<br>
     */
    private function existChargeParam()
    {
        if (is_null($this->payNowIdParam->getChargeParam())) {
            $chargeParam = new ChargeParam();
            $this->payNowIdParam->setChargeParam($chargeParam);
        }
    }

    /**
     * BankAccountParamがAccountParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、AccountParamに設定する。<br>
     */
    private function existBankAccountParam()
    {
        $this->existAccountParam();
        if (is_null($this->payNowIdParam->getAccountParam()->getBankAccountParam())) {
            $bankAccountParam = new BankAccountParam();
            $this->payNowIdParam->getAccountParam()->setBankAccountParam($bankAccountParam);
        }
    }

    /**
     * OrderParamがPayNowIdParamに設定されているか判定する。<br>
     * 設定されていない場合はインスタンスを生成し、PayNowIdParamに設定する。<br>
     */
    private function existOrderParam()
    {
        if (is_null($this->payNowIdParam->getOrderParam())) {
            $orderParam = new OrderParam();
            $this->payNowIdParam->setOrderParam($orderParam);
        }
    }

}

