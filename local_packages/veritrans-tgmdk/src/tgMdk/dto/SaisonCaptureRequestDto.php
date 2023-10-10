<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Saison決済請求要求電文DTOクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class SaisonCaptureRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    public $SERVICE_TYPE = "saison";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    public $SERVICE_COMMAND = "Capture";

    /**
     * 決済サービスオプション<br>
     * 半角英数字<br/>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * 申込処理ごとに一意である必要があります。<br/>
     * ※半角英数字の他に"-"（ハイフン）、"_"（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 支払金額を指定します。1以上　99,999,999以下の金額が指定可能です。<br/>
     * 永久不滅ウォレット決済金額とカード決済金額の合計と同じである必要があります。<br/>
     */
    private $amount;

    /**
     * 永久不滅ウォレット決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 永久不滅ウォレットでの支払金額を指定します。0以上　99,999,999以下の金額が指定可能です。<br/>
     */
    private $walletAmount;

    /**
     * カード決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * カードでの支払金額を指定します。0以上　99,999,999以下の金額が指定可能です。<br/>
     */
    private $cardAmount;

    /**
     * カード番号<br>
     * 半角英数字<br/>
     * 最大桁数：26<br/>
     * ハイフンを含んでも含まなくても同様に処理が可能<br/>
     */
    private $cardNumber;

    /**
     * カード有効期限<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * MM/YY（月＋"/"＋"年"）の形式<br/>
     */
    private $cardExpire;

    /**
     * セキュリティコード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     */
    private $securityCode;

    /**
     * カード取引ＩＤ<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * マーチャント側でカード決済取引を一意に表す注文管理IDを指定します。<br/>
     */
    private $cardOrderId;

    /**
     * カード売上フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * "true"：与信・売上<br/>
     * "false"：与信のみ<br/>
     * 指定が無い場合は、デフォルト（与信のみ）<br/>
     */
    private $withCapture;


    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;


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
     * 決済サービスオプションを設定する<br>
     * @param string $serviceOptionType 決済サービスオプション<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
    }

    /**
     * 決済サービスオプションを取得する<br>
     * @return string 決済サービスオプション<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
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
     * 決済金額を設定する<br>
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 永久不滅ウォレット決済金額を設定する<br>
     * @param string $walletAmount 永久不滅ウォレット決済金額<br>
     */
    public function setWalletAmount($walletAmount)
    {
        $this->walletAmount = $walletAmount;
    }

    /**
     * 永久不滅ウォレット決済金額を取得する<br>
     * @return string 永久不滅ウォレット決済金額<br>
     */
    public function getWalletAmount()
    {
        return $this->walletAmount;
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
     * カード番号を設定する<br>
     * @param string $cardNumber カード番号<br>
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * カード番号を取得する<br>
     * @return string カード番号<br>
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * カード有効期限を設定する<br>
     * @param string $cardExpire カード有効期限<br>
     */
    public function setCardExpire($cardExpire)
    {
        $this->cardExpire = $cardExpire;
    }

    /**
     * カード有効期限を取得する<br>
     * @return string カード有効期限<br>
     */
    public function getCardExpire()
    {
        return $this->cardExpire;
    }

    /**
     * セキュリティコードを設定する<br>
     * @param string $securityCode セキュリティコード<br>
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
    }

    /**
     * セキュリティコードを取得する<br>
     * @return string セキュリティコード<br>
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * カード取引ＩＤを設定する<br>
     * @param string $cardOrderId カード取引ＩＤ<br>
     */
    public function setCardOrderId($cardOrderId)
    {
        $this->cardOrderId = $cardOrderId;
    }

    /**
     * カード取引ＩＤを取得する<br>
     * @return string カード取引ＩＤ<br>
     */
    public function getCardOrderId()
    {
        return $this->cardOrderId;
    }

    /**
     * カード売上フラグを設定する<br>
     * @param string $withCapture カード売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
    }

    /**
     * カード売上フラグを取得する<br>
     * @return string カード売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
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
     * 拡張パラメータ<br>
     * 並列処理用の拡張パラメータを保持する。
     */
    private $optionParams;

    /**
     * 拡張パラメータリストを取得する<br>
     * @return OptionParams 拡張パラメータリスト<br>
     */
    public function getOptionParams()
    {
        return $this->optionParams;
    }

    /**
     * 拡張パラメータリストを設定する<br>
     * @param OptionParams $optionParams 拡張パラメータリスト<br>
     */
    public function setOptionParams($optionParams)
    {
        $this->optionParams = $optionParams;
    }

    /**
     * トークンを設定する<br>
     * @param string $token トークン<br>
     */
    public function setToken($token)
    {
        $this->existPayNowIdParam();
        $this->payNowIdParam->setToken($token);
    }

    /**
     * トークンを取得する<br>
     * @return string トークン<br>
     */
    public function getToken()
    {
        $this->existPayNowIdParam();
        return $this->payNowIdParam->getToken();
    }
}
