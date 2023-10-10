<?php

namespace tgMdk\dto;

/**
 * 課金グループ情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class ChargeParam
{

    /**
     * 課金グループID<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * 課金グループを識別するためのID<br/>
     * IDはマーチャント側が任意の文字列を指定する。<br/>
     */
    private $groupId;

    /**
     * 課金グループ名<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 課金グループに付与する名称<br/>
     */
    private $groupName;

    /**
     * 課金スタイル区分<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 都度課金か、継続課金かを指定する。<br/>
     * 初期登録以降の変更は不可とする。<br/>
     * "1"：継続課金<br/>
     * "2"：都度課金<br/>
     */
    private $type;

    /**
     * 都度／初回課金金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 都度課金時又は継続課金時の初回の課金金額<br/>
     */
    private $oneTimeAmount;

    /**
     * 継続課金金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 継続課金時、2回目以降の決済金額<br/>
     * ※1回目の課金に継続課金金額は加算されないので注意<br/>
     */
    private $amount;

    /**
     * 課金日取扱区分<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 課金日が存在しない日付の場合の取扱いの設定（毎月30日払い設定時の2月など）<br/>
     * "1"：前倒し<br/>
     * "2"：後倒し<br/>
     */
    private $chargeType;

    /**
     * 継続課金スケジュール<br>
     * 半角英数字<br/>
     * 最大桁数：200<br/>
     * 継続課金のスケジュール定義文字列<br/>
     * <br/>
     * 別紙「継続課金スケジュール定義文字列設計」参照<br/>
     */
    private $schedule;

    /**
     * 売上日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 課金オプション利用フラグが"1"(利用する)の場合に指定する。<br/>
     * ・更新の場合で課金オプション利用フラグが"0"または指定なしの場合は何もしない。<br/>
     * ・空文字の場合：NULL<br/>
     * ・文字列の場合：tran-day" ：取引日が売上となる<br/>
     *                 YYYYMMDD形式 ：売上日を直接指定（年月日）<br/>
     */
    private $salesDay;

    /**
     * 仕向先会社コード<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 課金オプション利用フラグが"1"(利用する)の場合に指定する。<br/>
     * ・更新の場合で課金オプション利用フラグが"0"または指定なしの場合は何もしない。<br/>
     * ・空文字の場合：NULL<br/>
     */
    private $acquireCode;

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
     * 課金グループ名を設定する<br>
     * @param string $groupName 課金グループ名<br>
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    /**
     * 課金グループ名を取得する<br>
     * @return string 課金グループ名<br>
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * 課金スタイル区分を設定する<br>
     * @param string $type 課金スタイル区分<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 課金スタイル区分を取得する<br>
     * @return string 課金スタイル区分<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 都度／初回課金金額を設定する<br>
     * @param string $oneTimeAmount 都度／初回課金金額<br>
     */
    public function setOneTimeAmount($oneTimeAmount)
    {
        $this->oneTimeAmount = $oneTimeAmount;
    }

    /**
     * 都度／初回課金金額を取得する<br>
     * @return string 都度／初回課金金額<br>
     */
    public function getOneTimeAmount()
    {
        return $this->oneTimeAmount;
    }

    /**
     * 継続課金金額を設定する<br>
     * @param string $amount 継続課金金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 継続課金金額を取得する<br>
     * @return string 継続課金金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 課金日取扱区分を設定する<br>
     * @param string $chargeType 課金日取扱区分<br>
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
    }

    /**
     * 課金日取扱区分を取得する<br>
     * @return string 課金日取扱区分<br>
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * 継続課金スケジュールを設定する<br>
     * @param string $schedule 継続課金スケジュール<br>
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * 継続課金スケジュールを取得する<br>
     * @return string 継続課金スケジュール<br>
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * 売上日を設定する<br>
     * @param string $salesDay 売上日<br>
     */
    public function setSalesDay($salesDay)
    {
        $this->salesDay = $salesDay;
    }

    /**
     * 売上日を取得する<br>
     * @return string 売上日<br>
     */
    public function getSalesDay()
    {
        return $this->salesDay;
    }

    /**
     * 仕向先会社コードを設定する<br>
     * @param string $acquireCode 仕向先会社コード<br>
     */
    public function setAcquireCode($acquireCode)
    {
        $this->acquireCode = $acquireCode;
    }

    /**
     * 仕向先会社コードを取得する<br>
     * @return string 仕向先会社コード<br>
     */
    public function getAcquireCode()
    {
        return $this->acquireCode;
    }
}
