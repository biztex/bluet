<?php

namespace tgMdk\dto;

/**
 * 不正検知配送情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionShipmentDto
{

    /**
     * 出荷・配送先<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 出荷・配送先。contacts オブジェクトrefIdを設定してください。<br/>
     */
    private $recipient;

    /**
     * Shipping Detail Present Flag<br>
     * 最大桁数：1<br/>
     */
    private $shipTypeCd;

    /**
     * 発送日時<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * 発送日時を"YYYY-MM-DDTHH:MM:SS.MsMsMsZ"で設定してください。<br/>
     */
    private $scheduledShipTime;

    /**
     * 保険フラグ<br>
     * true/false<br/>
     * 最大桁数：5<br/>
     * 発送に保険が掛けられているかを設定してください。（true：保険を掛けている）<br/>
     */
    private $insured;

    /**
     * 出荷方法<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 出荷方法を設定してください。<br/>
     * 選択肢は「DIGITAL,GROUND,IN_STORE,OVERNIGHT,SAME_DAY,2ND_DAY,3RD_DAY,LOW_COST,DESIGNATED,INTERNATIONAL,OTHER」の何れかになります。<br/>
     * DIGITAL：デジタルコンテンツ<br/>
     * GROUND：通常発送<br/>
     * IN_STORE：店舗受取<br/>
     * OVERNIGHT：夜間発送<br/>
     * SAME_DAY：当日発送<br/>
     * 2ND_DAY：2 日発送<br/>
     * 3RD_DAY：3 日発送<br/>
     * LOW_COST：低料金発送<br/>
     * DESIGNATED：指定日発送<br/>
     * INTERNATIONAL：海外発送<br/>
     * OTHER：上記以外<br/>
     */
    private $method;

    /**
     * 発送時コメント<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 発送時コメントを設定してください。<br/>
     */
    private $comment;

    /**
     * お問い合わせ番号<br>
     * 半角英数字<br/>
     * 最大桁数：19<br/>
     * お問い合わせ番号を入力してください。<br/>
     */
    private $trackingNumber;

    /**
     * 送料情報<br>
     * FraudDetectionCostDto<br/>
     * 送料情報オブジェクト<br/>
     */
    private $cost;

    /**
     * 商品詳細情報<br>
     * 半角英数字の配列<br/>
     * 最大桁数：20<br/>
     * 商品詳細情報。<br/>
     * lineItems オブジェクトrefId を設定してください。<br/>
     */
    private $lineItems;


    /**
     * 出荷・配送先を取得する<br>
     * @return string 出荷・配送先<br>
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * 出荷・配送先を設定する<br>
     * @param string $recipient 出荷・配送先<br>
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    /**
     * Shipping Detail Present Flagを取得する<br>
     * @return string Shipping Detail Present Flag<br>
     */
    public function getShipTypeCd()
    {
        return $this->shipTypeCd;
    }

    /**
     * Shipping Detail Present Flagを設定する<br>
     * @param string $shipTypeCd Shipping Detail Present Flag<br>
     */
    public function setShipTypeCd($shipTypeCd)
    {
        $this->shipTypeCd = $shipTypeCd;
    }

    /**
     * 発送日時を取得する<br>
     * @return string 発送日時<br>
     */
    public function getScheduledShipTime()
    {
        return $this->scheduledShipTime;
    }

    /**
     * 発送日時を設定する<br>
     * @param string $scheduledShipTime 発送日時<br>
     */
    public function setScheduledShipTime($scheduledShipTime)
    {
        $this->scheduledShipTime = $scheduledShipTime;
    }

    /**
     * 保険フラグを取得する<br>
     * @return string 保険フラグ<br>
     */
    public function getInsured()
    {
        return $this->insured;
    }

    /**
     * 保険フラグを設定する<br>
     * @param string $insured 保険フラグ<br>
     */
    public function setInsured($insured)
    {
        $this->insured = $insured;
    }

    /**
     * 出荷方法を取得する<br>
     * @return string 出荷方法<br>
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * 出荷方法を設定する<br>
     * @param string $method 出荷方法<br>
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * 発送時コメントを取得する<br>
     * @return string 発送時コメント<br>
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * 発送時コメントを設定する<br>
     * @param string $comment 発送時コメント<br>
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * お問い合わせ番号を取得する<br>
     * @return string お問い合わせ番号<br>
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * お問い合わせ番号を設定する<br>
     * @param string $trackingNumber お問い合わせ番号<br>
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * 送料情報を取得する<br>
     * @return FraudDetectionCostDto 送料情報<br>
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * 送料情報を設定する<br>
     * @param FraudDetectionCostDto $cost 送料情報<br>
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * 商品詳細情報を取得する<br>
     * @return string[] 商品詳細情報<br>
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * 商品詳細情報を設定する<br>
     * @param string[] $lineItems 商品詳細情報<br>
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
    }


}
