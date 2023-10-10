<?php

namespace tgMdk\dto;

/**
 * 配送先情報クラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayDeliveryDto
{

    /**
     * 配送先ID<br>
     * 文字列<br/>
     * 最大桁数：25<br/>
     * 取引内で一意な値を設定します。<br/>
     */
    private $deliveryId;

    /**
     * 配送先情報<br>
     * ScoreatpayContactDto<br/>
     * 連絡先オブジェクトを設定します。<br/>
     */
    private $contact;

    /**
     * 明細<br>
     * ScoreatpayDetailDtoの配列<br/>
     * 明細情報オブジェクトを配列で指定します。<br/>
     */
    private $details;


    /**
     * 配送先IDを取得する<br>
     * @return string 配送先ID<br>
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * 配送先IDを設定する<br>
     * @param string $deliveryId 配送先ID<br>
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
    }

    /**
     * 配送先情報を取得する<br>
     * @return ScoreatpayContactDto 配送先情報<br>
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 配送先情報を設定する<br>
     * @param ScoreatpayContactDto $contact 配送先情報<br>
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * 明細を取得する<br>
     * @return ScoreatpayDetailDto[] 明細<br>
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * 明細を設定する<br>
     * @param ScoreatpayDetailDto[] $details 明細<br>
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }


}
