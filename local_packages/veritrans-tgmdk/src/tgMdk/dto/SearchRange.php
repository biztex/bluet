<?php

namespace tgMdk\dto;

/**
 * 検索条件:範囲指定クラス
 *
 * @author Veritrans, Inc.
 */
class SearchRange
{

    /**
     * 検索範囲:From<br>
     */
    private $from;

    /**
     * 検索範囲:To<br>
     */
    private $to;

    /**
     * 検索範囲:Fromを取得する<br>
     *
     * @return string 検索範囲:From<br>
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * 検索範囲:Fromを設定する<br>
     *
     * @param string $from 検索範囲:From<br>
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * 検索範囲:Toを取得する<br>
     *
     * @return string 検索範囲:To<br>
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * 検索範囲:Toを設定する<br>
     *
     * @param string $to 検索範囲:To<br>
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

}
