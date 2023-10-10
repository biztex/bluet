<?php

namespace tgMdk\dto;

/**
 * 会員課金情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class RecurringChargeParam
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
     * 課金開始日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 課金を開始する日付（YYYYMMDD形式）<br/>
     * <br/>
     * ※初回課金される日付ではない<br/>
     * 　継続課金スケジュール日程の参照を開始する日付<br/>
     */
    private $startDate;

    /**
     * 課金終了日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 課金を終了する日付（YYYYMMDD形式）<br/>
     * <br/>
     * ※最後に課金される日付ではない<br/>
     * 　継続課金スケジュール日程の参照を終了する最終日<br/>
     */
    private $endDate;

    /**
     * 次回課金終了フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 次回課金をもって課金終了する場合に設定したい場合に利用するフラグ<br/>
     * <br/>
     * "1"：次回課金日で終了<br/>
     * "0"：課金終了日で終了 (未設定時は"0"として扱う)<br/>
     */
    private $finalCharge;

    /**
     * 都度／初回課金金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 都度課金時又は継続課金時の初回の課金金額<br/>
     * 都度課金時は、次回課金時の金額を指定する。<br/>
     * 継続課金時は、課金グループにて指定している金額と別の金額で決済したい場合に設定する。<br/>
     */
    private $oneTimeAmount;

    /**
     * 継続課金金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 継続課金時、2回目以降の決済金額<br/>
     * 課金グループにて指定している金額と別の金額で決済したい場合に使用する。<br/>
     * ※1回目の課金に継続課金金額は加算されないので注意<br/>
     */
    private $amount;

    /**
     * 継続課金用メモ1<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 継続課金処理時に取引に関するメモ情報を付加することができる。<br/>
     * （暗号化する）<br/>
     */
    private $recurringMemo1;

    /**
     * 継続課金用メモ2<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 継続課金処理時に取引に関するメモ情報を付加することができる。<br/>
     * （暗号化する）<br/>
     */
    private $recurringMemo2;

    /**
     * 継続課金用メモ3<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 継続課金処理時に取引に関するメモ情報を付加することができる。<br/>
     * （暗号化する）<br/>
     */
    private $recurringMemo3;

    /**
     * 課金オプション利用フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 課金オプションを利用するかどうかのフラグ<br/>
     * "0"：利用しない(未設定時は"0"として扱う）<br/>
     * "1"：利用する<br/>
     */
    private $useChargeOption;

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
     * 課金開始日を設定する<br>
     * @param string $startDate 課金開始日<br>
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * 課金開始日を取得する<br>
     * @return string 課金開始日<br>
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * 課金終了日を設定する<br>
     * @param string $endDate 課金終了日<br>
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * 課金終了日を取得する<br>
     * @return string 課金終了日<br>
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * 次回課金終了フラグを設定する<br>
     * @param string $finalCharge 次回課金終了フラグ<br>
     */
    public function setFinalCharge($finalCharge)
    {
        $this->finalCharge = $finalCharge;
    }

    /**
     * 次回課金終了フラグを取得する<br>
     * @return string 次回課金終了フラグ<br>
     */
    public function getFinalCharge()
    {
        return $this->finalCharge;
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
     * 継続課金用メモ1を設定する<br>
     * @param string $recurringMemo1 継続課金用メモ1<br>
     */
    public function setRecurringMemo1($recurringMemo1)
    {
        $this->recurringMemo1 = $recurringMemo1;
    }

    /**
     * 継続課金用メモ1を取得する<br>
     * @return string 継続課金用メモ1<br>
     */
    public function getRecurringMemo1()
    {
        return $this->recurringMemo1;
    }

    /**
     * 継続課金用メモ2を設定する<br>
     * @param string $recurringMemo2 継続課金用メモ2<br>
     */
    public function setRecurringMemo2($recurringMemo2)
    {
        $this->recurringMemo2 = $recurringMemo2;
    }

    /**
     * 継続課金用メモ2を取得する<br>
     * @return string 継続課金用メモ2<br>
     */
    public function getRecurringMemo2()
    {
        return $this->recurringMemo2;
    }

    /**
     * 継続課金用メモ3を設定する<br>
     * @param string $recurringMemo3 継続課金用メモ3<br>
     */
    public function setRecurringMemo3($recurringMemo3)
    {
        $this->recurringMemo3 = $recurringMemo3;
    }

    /**
     * 継続課金用メモ3を取得する<br>
     * @return string 継続課金用メモ3<br>
     */
    public function getRecurringMemo3()
    {
        return $this->recurringMemo3;
    }

    /**
     * 課金オプション利用フラグを設定する<br>
     * @param string $useChargeOption 課金オプション利用フラグ<br>
     */
    public function setUseChargeOption($useChargeOption)
    {
        $this->useChargeOption = $useChargeOption;
    }

    /**
     * 課金オプション利用フラグを取得する<br>
     * @return string 課金オプション利用フラグ<br>
     */
    public function getUseChargeOption()
    {
        return $this->useChargeOption;
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
