<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Alipay、コマンド名：返金の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayRefundRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "alipay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Refund";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 返金対象の取引IDを指定する。<br/>
     */
    private $orderId;

    /**
     * 取引金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 返金する金額を指定します。<br/>
     * - 返金における通貨は、与信同時売上の時に指定した通貨と同じものとなります。<br/>
     * - 残額と同額指定時は通常の返金とし、1円以上残額未満の場合部分返金とします。<br/>
     * - 中国元の場合に指定する値は、与信同時売上と同様、取引金額を100倍した値を指定してください。<br/>
     */
    private $amount;

    /**
     * 理由<br>
     * 文字列<br/>
     * 最大桁数：80<br/>
     * 返金理由<br/>
     * - 最大文字数：80byte<br/>
     * <br/>
     * payType=0（オンライン決済）：指定必須 <br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     * payType=2（バーコード決済（消費者スキャン型））：指定任意<br/>
     */
    private $reason;


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
     * 取引金額を取得する<br>
     * @return string 取引金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 取引金額を設定する<br>
     * @param string $amount 取引金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 理由を取得する<br>
     * @return string 理由<br>
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * 理由を設定する<br>
     * @param string $reason 理由<br>
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
