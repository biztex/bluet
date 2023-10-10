<?php

namespace tgMdk\dto;

/**
 *
 * @author Veritrans, Inc.
 */
class MasterInfo
{

    /**
     * マスタ名<br>
     */
    private $name;

    /**
     * マスタ情報<br>
     */
    private $masters;

    /**
     * マスタ名を取得する<br>
     *
     * @return string マスタ名<br>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * マスタ名を設定する<br>
     *
     * @param string $name マスタ名<br>
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * マスタ情報を取得する<br>
     *
     * @return Masters マスタ情報<br>
     */
    public function getMasters()
    {
        return $this->masters;
    }

    /**
     * マスタ情報を設定する<br>
     *
     * @param Masters $masters マスタ情報<br>
     */
    public function setMasters($masters)
    {
        $this->masters = $masters;
    }

}
