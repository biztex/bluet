<?php

namespace tgMdk\dto;

/**
 * 取引情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class OrderParam
{

    /**
     * 元取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 決済で利用した取引IDを指定する。<br/>
     */
    private $originalOrderId;

    /**
     * 元取引IDを設定する<br>
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->originalOrderId = $originalOrderId;
    }

    /**
     * 元取引IDを取得する<br>
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        return $this->originalOrderId;
    }

    /**
     * 洗替実施マーチャントID<br>
     * 半角英数字<br/>
     * 最大桁数：22<br/>
     * 洗替を実施するマーチャントIDを指定する。<br/>
     */
    private $cleaningMerchantId;

    /**
     * 洗替実施マーチャントIDを設定する<br>
     * @param string $cleaningMerchantId 洗替実施マーチャントID<br>
     */
    public function setCleaningMerchantId($cleaningMerchantId)
    {
        $this->cleaningMerchantId = $cleaningMerchantId;
    }

    /**
     * 洗替実施マーチャントIDを取得する<br>
     * @return string 洗替実施マーチャントID<br>
     */
    public function getCleaningMerchantId()
    {
        return $this->cleaningMerchantId;
    }

}
