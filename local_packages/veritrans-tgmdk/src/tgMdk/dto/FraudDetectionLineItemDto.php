<?php

namespace tgMdk\dto;

/**
 * 不正検知商品情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionLineItemDto
{

    /**
     * 商品情報参照用Key<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 他項目から、商品情報オブジェクトへの参照用の Key 名称。<br/>
     */
    private $refId;

    /**
     * 商品名<br>
     * 文字列<br/>
     * 最大桁数：200<br/>
     * 商品名を設定してください。<br/>
     */
    private $name;

    /**
     * 商品説明<br>
     * 文字列<br/>
     * 最大桁数：26<br/>
     * 商品説明を設定してください。<br/>
     */
    private $description;

    /**
     * 商品識別ID<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * 商品を識別する ID を設定してください。<br/>
     */
    private $sku;

    /**
     * EANコード<br>
     * 半角英数字<br/>
     * 最大桁数：30<br/>
     * 商品のEAN/JANコードを設定してください。<br/>
     */
    private $eanCode;

    /**
     * プロモーションコード<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * エンドユーザが購入時に使用したプロモーションコードを設定してください。<br/>
     */
    private $promoCode;

    /**
     * カテゴリ<br>
     * 文字列<br/>
     * 最大桁数：180<br/>
     * 商品のカテゴリ名を設定してください。<br/>
     */
    private $category;

    /**
     * ブランド<br>
     * 文字列<br/>
     * 最大桁数：255<br/>
     * ブランド名またはブランドコードを設定してください。<br/>
     */
    private $brand;

    /**
     * 販売者ID<br>
     * 半角英数字<br/>
     * 最大桁数：255<br/>
     * 購入者が他の方に販売する際の販売者IDを設定してください。<br/>
     * amazonマーケットプレイスの出品者ID等。<br/>
     */
    private $sellerId;

    /**
     * 商品重量<br>
     * 小数可の半角数字<br/>
     * 最大桁数：8<br/>
     * 商品の重量を設定してください。<br/>
     */
    private $unitWeight;

    /**
     * 重量単位<br>
     * 半角英字<br/>
     * 最大桁数：10<br/>
     * 重量の単位を設定してください。<br/>
     * 選択肢は「POUND,OUNCE,GRAM,KILOGRAM」の何れかになります。<br/>
     * POUND：ポンド<br/>
     * OUNCE：オンス<br/>
     * GRAM：グラム<br/>
     * KILOGRAM：キログラム<br/>
     */
    private $unit;

    /**
     * 商品数量<br>
     * 半角数字<br/>
     * 最大桁数：9<br/>
     * 商品の数量を設定してください。<br/>
     */
    private $quantity;

    /**
     * 商品単価<br>
     * 小数可の半角数字<br/>
     * 最大桁数：8<br/>
     * 商品の単価を設定してください。<br/>
     */
    private $unitAmount;

    /**
     * 商品通貨コード(商品単価)<br>
     * 最大桁数：3<br/>
     */
    private $unitCurrencyCode;

    /**
     * 商品合計額<br>
     * 小数可の半角数字<br/>
     * 最大桁数：8<br/>
     * 商品の合計額を設定してください。<br/>
     */
    private $totalAmount;

    /**
     * 商品通貨コード(商品合計)<br>
     * 最大桁数：3<br/>
     */
    private $totalCurrencyCode;


    /**
     * 商品情報参照用Keyを取得する<br>
     * @return string 商品情報参照用Key<br>
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * 商品情報参照用Keyを設定する<br>
     * @param string $refId 商品情報参照用Key<br>
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;
    }

    /**
     * 商品名を取得する<br>
     * @return string 商品名<br>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 商品名を設定する<br>
     * @param string $name 商品名<br>
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 商品説明を取得する<br>
     * @return string 商品説明<br>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 商品説明を設定する<br>
     * @param string $description 商品説明<br>
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 商品識別IDを取得する<br>
     * @return string 商品識別ID<br>
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * 商品識別IDを設定する<br>
     * @param string $sku 商品識別ID<br>
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * EANコードを取得する<br>
     * @return string EANコード<br>
     */
    public function getEanCode()
    {
        return $this->eanCode;
    }

    /**
     * EANコードを設定する<br>
     * @param string $eanCode EANコード<br>
     */
    public function setEanCode($eanCode)
    {
        $this->eanCode = $eanCode;
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
     * カテゴリを取得する<br>
     * @return string カテゴリ<br>
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * カテゴリを設定する<br>
     * @param string $category カテゴリ<br>
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * ブランドを取得する<br>
     * @return string ブランド<br>
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * ブランドを設定する<br>
     * @param string $brand ブランド<br>
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * 販売者IDを取得する<br>
     * @return string 販売者ID<br>
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * 販売者IDを設定する<br>
     * @param string $sellerId 販売者ID<br>
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
    }

    /**
     * 商品重量を取得する<br>
     * @return string 商品重量<br>
     */
    public function getUnitWeight()
    {
        return $this->unitWeight;
    }

    /**
     * 商品重量を設定する<br>
     * @param string $unitWeight 商品重量<br>
     */
    public function setUnitWeight($unitWeight)
    {
        $this->unitWeight = $unitWeight;
    }

    /**
     * 重量単位を取得する<br>
     * @return string 重量単位<br>
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * 重量単位を設定する<br>
     * @param string $unit 重量単位<br>
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * 商品数量を取得する<br>
     * @return string 商品数量<br>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * 商品数量を設定する<br>
     * @param string $quantity 商品数量<br>
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * 商品単価を取得する<br>
     * @return string 商品単価<br>
     */
    public function getUnitAmount()
    {
        return $this->unitAmount;
    }

    /**
     * 商品単価を設定する<br>
     * @param string $unitAmount 商品単価<br>
     */
    public function setUnitAmount($unitAmount)
    {
        $this->unitAmount = $unitAmount;
    }

    /**
     * 商品通貨コード(商品単価)を取得する<br>
     * @return string 商品通貨コード(商品単価)<br>
     */
    public function getUnitCurrencyCode()
    {
        return $this->unitCurrencyCode;
    }

    /**
     * 商品通貨コード(商品単価)を設定する<br>
     * @param string $unitCurrencyCode 商品通貨コード(商品単価)<br>
     */
    public function setUnitCurrencyCode($unitCurrencyCode)
    {
        $this->unitCurrencyCode = $unitCurrencyCode;
    }

    /**
     * 商品合計額を取得する<br>
     * @return string 商品合計額<br>
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * 商品合計額を設定する<br>
     * @param string $totalAmount 商品合計額<br>
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * 商品通貨コード(商品合計)を取得する<br>
     * @return string 商品通貨コード(商品合計)<br>
     */
    public function getTotalCurrencyCode()
    {
        return $this->totalCurrencyCode;
    }

    /**
     * 商品通貨コード(商品合計)を設定する<br>
     * @param string $totalCurrencyCode 商品通貨コード(商品合計)<br>
     */
    public function setTotalCurrencyCode($totalCurrencyCode)
    {
        $this->totalCurrencyCode = $totalCurrencyCode;
    }


}
