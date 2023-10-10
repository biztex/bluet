<?php

namespace tgMdk\dto;

/**
 * 不正検知注文情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionOrderDto
{

    /**
     * 注文ID<br>
     * 最大桁数：50<br/>
     */
    private $id;

    /**
     * 注文経路<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * 注文経路を設定してください。注文サイトのURL等。<br/>
     */
    private $source;

    /**
     * プロモーションコード<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * 商品購入時に使用したプロモーションコードを設定してください。<br/>
     */
    private $promoCode;

    /**
     * 決済失敗回数<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     * 決済試行し、失敗した回数を設定してください。<br/>
     */
    private $failedPaymentAttempts;

    /**
     * lineItemsのサイズ<br>
     * 半角数字<br/>
     * 最大桁数：99<br/>
     */
    private $oiRepeat;

    /**
     * 商品情報<br>
     * FraudDetectionLineItemDtoの配列<br/>
     * 商品情報オブジェクト<br/>
     */
    private $lineItems;

    /**
     * 配送情報<br>
     * FraudDetectionShipmentDto<br/>
     * 配送情報オブジェクト<br/>
     */
    private $shipment;


    /**
     * 注文IDを取得する<br>
     * @return string 注文ID<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 注文IDを設定する<br>
     * @param string $id 注文ID<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 注文経路を取得する<br>
     * @return string 注文経路<br>
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 注文経路を設定する<br>
     * @param string $source 注文経路<br>
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * プロモーションコードを取得する<br>
     * @return string プロモーションコード<br>
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * プロモーションコードを設定する<br>
     * @param string $promoCode プロモーションコード<br>
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;
    }

    /**
     * 決済失敗回数を取得する<br>
     * @return string 決済失敗回数<br>
     */
    public function getFailedPaymentAttempts()
    {
        return $this->failedPaymentAttempts;
    }

    /**
     * 決済失敗回数を設定する<br>
     * @param string $failedPaymentAttempts 決済失敗回数<br>
     */
    public function setFailedPaymentAttempts($failedPaymentAttempts)
    {
        $this->failedPaymentAttempts = $failedPaymentAttempts;
    }

    /**
     * lineItemsのサイズを取得する<br>
     * @return string lineItemsのサイズ<br>
     */
    public function getOiRepeat()
    {
        return $this->oiRepeat;
    }

    /**
     * lineItemsのサイズを設定する<br>
     * @param string $oiRepeat lineItemsのサイズ<br>
     */
    public function setOiRepeat($oiRepeat)
    {
        $this->oiRepeat = $oiRepeat;
    }

    /**
     * 商品情報を取得する<br>
     * @return FraudDetectionLineItemDto[] 商品情報<br>
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * 商品情報を設定する<br>
     * @param FraudDetectionLineItemDto[] $lineItems 商品情報<br>
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
    }

    /**
     * 配送情報を取得する<br>
     * @return FraudDetectionShipmentDto 配送情報<br>
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * 配送情報を設定する<br>
     * @param FraudDetectionShipmentDto $shipment 配送情報<br>
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
    }


}
