<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：MasterPass、コマンド名：売上の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MasterpassCaptureRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "masterpass";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Capture";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：80<br/>
     * 売上を計上する対象の取引IDを指定する<br/>
     */
    private $orderId;

    /**
     * 金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 売上を計上する金額を指定します。<br/>
     * 指定なしまたは与信金額と同額指定時は通常の売上確定とし、1円以上与信額未満の場合部分売上となります。<br/>
     */
    private $amount;

    /**
     * 初回請求年月<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 与信時のJPOが31,34,61の場合に初回請求月をYYMM形式で指定します。与信時のJPOが上記以外の場合は設定されているとエラーになります。<br/>
     * 指定がない場合には初回請求年月を指定せずに売上を行います（JPOパラメータ内の数値で補完されません）。<br/>
     * <br/>
     */
    private $firstPayment;

    /**
     * ボーナス初回年月<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 与信時のJPOが24,34の場合にボーナス初回月をYYMM形式で指定します。与信時のJPOが上記以外の場合は設定されているとエラーになります。<br/>
     * 指定がない場合にはボーナス初回月を指定せずに売上を行います（JPOパラメータ内の数値で補完されません）。<br/>
     * <br/>
     */
    private $bonusFirstPayment;


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
     * 金額を取得する<br>
     * @return string 金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 金額を設定する<br>
     * @param string $amount 金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 初回請求年月を取得する<br>
     * @return string 初回請求年月<br>
     */
    public function getFirstPayment()
    {
        return $this->firstPayment;
    }

    /**
     * 初回請求年月を設定する<br>
     * @param string $firstPayment 初回請求年月<br>
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
    }

    /**
     * ボーナス初回年月を取得する<br>
     * @return string ボーナス初回年月<br>
     */
    public function getBonusFirstPayment()
    {
        return $this->bonusFirstPayment;
    }

    /**
     * ボーナス初回年月を設定する<br>
     * @param string $bonusFirstPayment ボーナス初回年月<br>
     */
    public function setBonusFirstPayment($bonusFirstPayment)
    {
        $this->bonusFirstPayment = $bonusFirstPayment;
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

}
