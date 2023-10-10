<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Amazonpay、コマンド名：承諾情報更新の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AmazonpayUpdateConsentRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "amazonpay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "UpdateConsent";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 随時決済を申し込んだ際の取引IDを指定します。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     * 変更後の決済金額を指定します。<br/>
     * - 1 以上かつ 100000(6桁) 以下<br/>
     */
    private $amount;

    /**
     * 頻度（単位）<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 変更後の随時決済の頻度の単位（例：2週間毎であれば、単位はWeek、値は2）<br/>
     * "Year"：年<br/>
     * "Month"：月<br/>
     * "Week"：週<br/>
     * "Day"：日<br/>
     */
    private $frequencyUnit;

    /**
     * 頻度（値）<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 変更後の随時決済の頻度の値（例：2週間毎であれば、単位はWeek、値は2）<br/>
     * - 頻度（単位）毎に設定できる範囲が異なります。<br/>
     * "Year"：1のみ<br/>
     * "Month"：1～12<br/>
     * "Week"：1～52<br/>
     * "Day"：1～365<br/>
     */
    private $frequencyValue;

    /**
     * プラットフォームID<br>
     * 文字列<br/>
     * 最大桁数：21<br/>
     * Amazonから指定のあった場合のみ設定する予定の項目<br/>
     * - 最大:21byte<br/>
     */
    private $platformId;

    /**
     * 注文説明<br>
     * 文字列<br/>
     * 最大桁数：255<br/>
     * 変更後の購入者のメールに表示される注文の説明<br/>
     * - 最大:255文字<br/>
     */
    private $noteToBuyer;


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
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
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
     * 頻度（単位）を取得する<br>
     * @return string 頻度（単位）<br>
     */
    public function getFrequencyUnit()
    {
        return $this->frequencyUnit;
    }

    /**
     * 頻度（単位）を設定する<br>
     * @param string $frequencyUnit 頻度（単位）<br>
     */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->frequencyUnit = $frequencyUnit;
    }

    /**
     * 頻度（値）を取得する<br>
     * @return string 頻度（値）<br>
     */
    public function getFrequencyValue()
    {
        return $this->frequencyValue;
    }

    /**
     * 頻度（値）を設定する<br>
     * @param string $frequencyValue 頻度（値）<br>
     */
    public function setFrequencyValue($frequencyValue)
    {
        $this->frequencyValue = $frequencyValue;
    }

    /**
     * プラットフォームIDを取得する<br>
     * @return string プラットフォームID<br>
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * プラットフォームIDを設定する<br>
     * @param string $platformId プラットフォームID<br>
     */
    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
    }

    /**
     * 注文説明を取得する<br>
     * @return string 注文説明<br>
     */
    public function getNoteToBuyer()
    {
        return $this->noteToBuyer;
    }

    /**
     * 注文説明を設定する<br>
     * @param string $noteToBuyer 注文説明<br>
     */
    public function setNoteToBuyer($noteToBuyer)
    {
        $this->noteToBuyer = $noteToBuyer;
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
