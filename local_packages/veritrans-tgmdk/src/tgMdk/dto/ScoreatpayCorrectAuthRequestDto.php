<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：スコア@払い、コマンド名：決済情報修正の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayCorrectAuthRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "scoreatpay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "CorrectAuth";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 999999(6桁) 以下<br/>
     */
    private $amount;

    /**
     * 注文日<br>
     * 半角数字記号<br/>
     * 最大桁数：10<br/>
     * 注文日を指定します。<br/>
     *  - "YYYY/MM/DD"の10桁固定<br/>
     */
    private $shopOrderDate;

    /**
     * 購入者情報<br>
     * ScoreatpayContactDto<br/>
     * 連絡先オブジェクトを設定します。<br/>
     */
    private $buyerContact;

    /**
     * 購入者追加情報<br>
     * 半角英数字<br/>
     * 最大桁数：40<br/>
     * 購入者の与信審査に利用する追加情報を設定します。<br/>
     */
    private $buyerAdditionalInfo;

    /**
     * 決済種別<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 決済種別を指定します。<br/>
     *  - 2：請求書別送。<br/>
     *  - 3：請求書同梱サービス。<br/>
     *  - ※請求書同梱サービスは、購入者住所情報と配送先住所情報が完全に一致す<br/>
     * る場合のみ使用可能。<br/>
     */
    private $paymentType;

    /**
     * 配送先情報<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを配列で指定します。<br/>
     */
    private $delivery;

    /**
     * 配送先情報2<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery2;

    /**
     * 配送先情報3<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery3;

    /**
     * 配送先情報4<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery4;

    /**
     * 配送先情報5<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery5;

    /**
     * 配送先情報6<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery6;

    /**
     * 配送先情報7<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery7;

    /**
     * 配送先情報8<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery8;

    /**
     * 配送先情報9<br>
     * ScoreatpayDeliveryDto<br/>
     * 配送先情報オブジェクトを設定します。※配送先が２つ以上ある場合に設定します。<br/>
     */
    private $delivery9;


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
     * 注文日を取得する<br>
     * @return string 注文日<br>
     */
    public function getShopOrderDate()
    {
        return $this->shopOrderDate;
    }

    /**
     * 注文日を設定する<br>
     * @param string $shopOrderDate 注文日<br>
     */
    public function setShopOrderDate($shopOrderDate)
    {
        $this->shopOrderDate = $shopOrderDate;
    }

    /**
     * 購入者情報を取得する<br>
     * @return ScoreatpayContactDto 購入者情報<br>
     */
    public function getBuyerContact()
    {
        return $this->buyerContact;
    }

    /**
     * 購入者情報を設定する<br>
     * @param ScoreatpayContactDto $buyerContact 購入者情報<br>
     */
    public function setBuyerContact($buyerContact)
    {
        $this->buyerContact = $buyerContact;
    }

    /**
     * 購入者追加情報を取得する<br>
     * @return string 購入者追加情報<br>
     */
    public function getBuyerAdditionalInfo()
    {
        return $this->buyerAdditionalInfo;
    }

    /**
     * 購入者追加情報を設定する<br>
     * @param string $buyerAdditionalInfo 購入者追加情報<br>
     */
    public function setBuyerAdditionalInfo($buyerAdditionalInfo)
    {
        $this->buyerAdditionalInfo = $buyerAdditionalInfo;
    }

    /**
     * 決済種別を取得する<br>
     * @return string 決済種別<br>
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * 決済種別を設定する<br>
     * @param string $paymentType 決済種別<br>
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * 配送先情報を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報<br>
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * 配送先情報を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery 配送先情報<br>
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * 配送先情報2を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報2<br>
     */
    public function getDelivery2()
    {
        return $this->delivery2;
    }

    /**
     * 配送先情報2を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery2 配送先情報2<br>
     */
    public function setDelivery2($delivery2)
    {
        $this->delivery2 = $delivery2;
    }

    /**
     * 配送先情報3を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報3<br>
     */
    public function getDelivery3()
    {
        return $this->delivery3;
    }

    /**
     * 配送先情報3を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery3 配送先情報3<br>
     */
    public function setDelivery3($delivery3)
    {
        $this->delivery3 = $delivery3;
    }

    /**
     * 配送先情報4を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報4<br>
     */
    public function getDelivery4()
    {
        return $this->delivery4;
    }

    /**
     * 配送先情報4を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery4 配送先情報4<br>
     */
    public function setDelivery4($delivery4)
    {
        $this->delivery4 = $delivery4;
    }

    /**
     * 配送先情報5を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報5<br>
     */
    public function getDelivery5()
    {
        return $this->delivery5;
    }

    /**
     * 配送先情報5を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery5 配送先情報5<br>
     */
    public function setDelivery5($delivery5)
    {
        $this->delivery5 = $delivery5;
    }

    /**
     * 配送先情報6を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報6<br>
     */
    public function getDelivery6()
    {
        return $this->delivery6;
    }

    /**
     * 配送先情報6を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery6 配送先情報6<br>
     */
    public function setDelivery6($delivery6)
    {
        $this->delivery6 = $delivery6;
    }

    /**
     * 配送先情報7を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報7<br>
     */
    public function getDelivery7()
    {
        return $this->delivery7;
    }

    /**
     * 配送先情報7を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery7 配送先情報7<br>
     */
    public function setDelivery7($delivery7)
    {
        $this->delivery7 = $delivery7;
    }

    /**
     * 配送先情報8を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報8<br>
     */
    public function getDelivery8()
    {
        return $this->delivery8;
    }

    /**
     * 配送先情報8を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery8 配送先情報8<br>
     */
    public function setDelivery8($delivery8)
    {
        $this->delivery8 = $delivery8;
    }

    /**
     * 配送先情報9を取得する<br>
     * @return ScoreatpayDeliveryDto 配送先情報9<br>
     */
    public function getDelivery9()
    {
        return $this->delivery9;
    }

    /**
     * 配送先情報9を設定する<br>
     * @param ScoreatpayDeliveryDto $delivery9 配送先情報9<br>
     */
    public function setDelivery9($delivery9)
    {
        $this->delivery9 = $delivery9;
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
