<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：paypay、コマンド名：売上の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class PaypayCaptureRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "paypay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Capture";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 売上対象の取引IDを指定する。<br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "online":オンライン決済<br/>
     * <br/>
     * ※オンラン決済のみ指定可<br/>
     */
    private $serviceOptionType;

    /**
     * 売上金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 売上する金額を指定します。<br/>
     * 例）250円*4個=1000円の買い物をし3個分を売上、1個取消した場合には、売上金額に750円を指定します。<br/>
     * - 1 以上かつ 9999999 以下<br/>
     * - 与信金額以下<br/>
     * <br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意<br/>
     * ※指定しなかった場合は、全額売上になります。<br/>
     */
    private $amount;

    /**
     * 注文の説明<br>
     * 文字列<br/>
     * ユーザの明細に表示される注文の説明を指定します。<br/>
     * 説明は与信金額未満を指定した部分売上の場合のみユーザの明細に表示されます。<br/>
     * 全額売上の場合は指定しても説明自体が表示されません。<br/>
     * <br/>
     * - 最大文字数<br/>
     * 　　serviceOptionType="online"（オンライン決済）    ： 255byte<br/>
     * <br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意<br/>
     */
    private $orderDescription;


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
     * サービスオプションタイプを取得する<br>
     * @return string サービスオプションタイプ<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * サービスオプションタイプを設定する<br>
     * @param string $serviceOptionType サービスオプションタイプ<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
    }

    /**
     * 売上金額を取得する<br>
     * @return string 売上金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 売上金額を設定する<br>
     * @param string $amount 売上金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 注文の説明を取得する<br>
     * @return string 注文の説明<br>
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * 注文の説明を設定する<br>
     * @param string $orderDescription 注文の説明<br>
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;
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
