<?php

namespace tgMdk\dto;

/**
 * 会員課金情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class RecurringCharge
{

    /**
     * 課金グループID<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * 継続課金対象の課金グループID<br/>
     * 事前に登録してあるIDのみ指定可能<br/>
     */
    private $groupId;

    /**
     * カードID<br>
     * 半角数字<br/>
     * 最大桁数：24<br/>
     */
    private $cardId;


    /**
     * 課金グループIDを設定する<br>
     * @param string $groupId 課金グループID<br>
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    }

    /**
     * 課金グループIDを取得する<br>
     * @return string 課金グループID<br>
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * カードIDを設定する<br>
     * @param string $cardId カードID<br>
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }

    /**
     * カードIDを取得する<br>
     * @return string カードID<br>
     */
    public function getCardId()
    {
        return $this->cardId;
    }


}
