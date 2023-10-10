<?php

namespace tgMdk\dto;

/**
 * PayNowIdオブジェクトのクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class PayNowIdParam
{

    /**
     * 会員情報<br>
     * オブジェクト<br/>
     */
    private $accountParam;

    /**
     * 課金グループ情報<br>
     * オブジェクト<br/>
     * 課金グループ情報を格納するオブジェクト<br/>
     */
    private $chargeParam;

    /**
     * 取引情報<br>
     * オブジェクト<br/>
     * 取引情報を格納するオブジェクト<br/>
     */
    private $orderParam;

    /**
     * タンキングフラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * カード決済時タンキングするか否か指定するフラグ<br/>
     * "1"：タンキングする<br/>
     * "0"：タンキングしない （未設定時は"0"として扱う）<br/>
     * 会員情報または会員IDが設定されている場合、必須<br/>
     */
    private $tanking;

    /**
     * 取引メモ1<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * 取引に関するメモ情報を付加することができる。<br/>
     * （暗号化する）<br/>
     */
    private $memo1;

    /**
     * 取引メモ2<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * 取引に関するメモ情報を付加することができる。<br/>
     * （暗号化する）<br/>
     */
    private $memo2;

    /**
     * 取引メモ3<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * 取引に関するメモ情報を付加することができる。<br/>
     * （暗号化する）<br/>
     */
    private $memo3;

    /**
     * キー情報<br>
     * 半角英数字<br/>
     * 最大桁数：256<br/>
     * 取引に関する検索用のキー情報を付加することができる。<br/>
     * （暗号化しない。）<br/>
     */
    private $freeKey;

    /**
     * レシートデータ<br>
     * 文字列<br/>
     * 1024バイト以内<br/>
     * POSのレシートデータを付加することができる。<br/>
     * （暗号化しない。）<br/>
     */
    private $receiptData;

    /**
     * @var string トークン
     * 半角英数記号
     * 最大桁数：36
     * トークンを利用する場合に指定します。
     */
    private $token;

    /**
     * 会員情報を設定する<br>
     * @param AccountParam $accountParam 会員情報<br>
     */
    public function setAccountParam($accountParam)
    {
        $this->accountParam = $accountParam;
    }

    /**
     * 会員情報を取得する<br>
     * @return AccountParam 会員情報<br>
     */
    public function getAccountParam()
    {
        return $this->accountParam;
    }

    /**
     * 課金グループ情報を設定する<br>
     * @param ChargeParam $chargeParam 課金グループ情報<br>
     */
    public function setChargeParam($chargeParam)
    {
        $this->chargeParam = $chargeParam;
    }

    /**
     * 課金グループ情報を取得する<br>
     * @return ChargeParam 課金グループ情報<br>
     */
    public function getChargeParam()
    {
        return $this->chargeParam;
    }

    /**
     * 取引情報を設定する<br>
     * @param OrderParam $orderParam 取引情報<br>
     */
    public function setOrderParam($orderParam)
    {
        $this->orderParam = $orderParam;
    }

    /**
     * 取引情報を取得する<br>
     * @return OrderParam 取引情報<br>
     */
    public function getOrderParam()
    {
        return $this->orderParam;
    }

    /**
     * タンキングフラグを設定する<br>
     * @param string $tanking タンキングフラグ<br>
     */
    public function setTanking($tanking)
    {
        $this->tanking = $tanking;
    }

    /**
     * タンキングフラグを取得する<br>
     * @return string タンキングフラグ<br>
     */
    public function getTanking()
    {
        return $this->tanking;
    }

    /**
     * 取引メモ1を設定する<br>
     * @param string $memo1 取引メモ1<br>
     */
    public function setMemo1($memo1)
    {
        $this->memo1 = $memo1;
    }

    /**
     * 取引メモ1を取得する<br>
     * @return string 取引メモ1<br>
     */
    public function getMemo1()
    {
        return $this->memo1;
    }

    /**
     * 取引メモ2を設定する<br>
     * @param string $memo2 取引メモ2<br>
     */
    public function setMemo2($memo2)
    {
        $this->memo2 = $memo2;
    }

    /**
     * 取引メモ2を取得する<br>
     * @return string 取引メモ2<br>
     */
    public function getMemo2()
    {
        return $this->memo2;
    }

    /**
     * 取引メモ3を設定する<br>
     * @param string $memo3 取引メモ3<br>
     */
    public function setMemo3($memo3)
    {
        $this->memo3 = $memo3;
    }

    /**
     * 取引メモ3を取得する<br>
     * @return string 取引メモ3<br>
     */
    public function getMemo3()
    {
        return $this->memo3;
    }

    /**
     * キー情報を設定する<br>
     * @param string $freeKey キー情報<br>
     */
    public function setFreeKey($freeKey)
    {
        $this->freeKey = $freeKey;
    }

    /**
     * キー情報を取得する<br>
     * @return string キー情報<br>
     */
    public function getFreeKey()
    {
        return $this->freeKey;
    }

    /**
     * レシートデータを設定する<br>
     * @param string $receiptData レシートデータ<br>
     */
    public function setReceiptData($receiptData)
    {
        $this->receiptData = $receiptData;
    }

    /**
     * レシートデータを取得する<br>
     * @return string レシートデータ<br>
     */
    public function getReceiptData()
    {
        return $this->receiptData;
    }

    /**
     * トークンを設定する
     * @param string $token トークン
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * トークンを取得する
     * @return string トークン
     */
    public function getToken()
    {
        return $this->token;
    }
}
