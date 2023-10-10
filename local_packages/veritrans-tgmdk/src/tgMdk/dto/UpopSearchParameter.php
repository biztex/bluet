<?php

namespace tgMdk\dto;

/**
 * 検索条件:UPOP検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class UpopSearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * 決済日時(日本) (From, To)<br>
     */
    private $settleDatetimeJp;

    /**
     * 決済日時(中国) (From, To)<br>
     */
    private $settleDatetimeCn;

    /**
     * 詳細オーダー決済状態を取得する<br>
     *
     * @return string[] 詳細オーダー決済状態<br>
     */
    public function getDetailOrderType()
    {
        return $this->detailOrderType;
    }

    /**
     * 詳細オーダー決済状態を設定する<br>
     *
     * @param string[] $detailOrderType 詳細オーダー決済状態<br>
     */
    public function setDetailOrderType($detailOrderType)
    {
        $this->detailOrderType = $detailOrderType;
    }

    /**
     * 決済日時(日本) (From, To)を取得する<br>
     *
     * @return SearchRange 決済日時(日本) (From, To)<br>
     */
    public function getSettleDatetimeJp()
    {
        return $this->settleDatetimeJp;
    }

    /**
     * 決済日時(日本) (From, To)を設定する<br>
     *
     * @param SearchRange $settleDatetimeJp 決済日時(日本) (From, To)<br>
     */
    public function setSettleDatetimeJp($settleDatetimeJp)
    {
        $this->settleDatetimeJp = $settleDatetimeJp;
    }

    /**
     * 決済日時(中国) (From, To)を取得する<br>
     *
     * @return SearchRange 決済日時(中国) (From, To)<br>
     */
    public function getSettleDatetimeCn()
    {
        return $this->settleDatetimeCn;
    }

    /**
     * 決済日時(中国) (From, To)を設定する<br>
     *
     * @param SearchRange $settleDatetimeCn 決済日時(中国) (From, To)<br>
     */
    public function setSettleDatetimeCn($settleDatetimeCn)
    {
        $this->settleDatetimeCn = $settleDatetimeCn;
    }

}
