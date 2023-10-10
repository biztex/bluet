<?php

namespace tgMdk\dto;

/**
 * カード情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class CardParam
{

    /**
     * カードID<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * PayNowIDで管理しているカードを決済で利用する場合に指定する。<br/>
     */
    private $cardId;

    /**
     * 標準カードフラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 今後決済時、カード情報をリクエストに含めなかった際に、<br/>
     * このカード情報を使用するか否かを設定する。<br/>
     * <br/>
     * "1"：今回のカードを今後決済時使用するカードに設定する。（未設定時は"1"として扱う）<br/>
     * "0"：この課金でのみ利用する　<br/>
     */
    private $defaultCard;

    /**
     * 標準カードID<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * カード削除リクエスト時のみ設定可能。<br/>
     * <br/>
     * 標準カードとして設定しているカード情報を削除する際に、<br/>
     * 新しく標準カードとして扱うカードを指定する。<br/>
     */
    private $defaultCardId;

    /**
     * 洗替実施フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * このカードを洗替対象外にする際に設定する。<br/>
     * ※洗替を実施するマーチャントの場合のみ設定可能。<br/>
     * <br/>
     * "1"：洗替する。（未設定時は"1"として扱う）<br/>
     * "0"：洗替しない。<br/>
     */
    private $updater;

    /**
     * カード番号<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     * クレジットカード番号を指定します。<br/>
     * 例） クレジットカード番号は19桁まで処理が可能。<br/>
     * （ハイフンを含んでも含まなくても同様に処理が可能）<br/>
     * <br/>
     * サービスコマンド「update」且つサービスオプションタイプ「card」の場合を除き、<br/>
     * カードID指定時は入力不可<br/>
     * また、決済コマンド時は入力不可<br/>
     */
    private $cardNumber;

    /**
     * 有効期限<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     * クレジットカードの有効期限を指定します。<br/>
     * MM/YY （月 + "/" + 年）の形式<br/>
     * 例） "11/09"<br/>
     * <br/>
     * サービスコマンド「update」且つサービスオプションタイプ「card」の場合を除き、<br/>
     * カードID指定時は入力不可<br/>
     * また、決済コマンド時は入力不可<br/>
     */
    private $cardExpire;

    /**
     * セキュリティコード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * クレジットカードのセキュリティコードを指定します。<br/>
     * <br/>
     */
    private $securityCode;

    /**
     * カード保有者名<br>
     * 半角英数記号<br/>
     * 最大桁数：45<br/>
     * カード保有者名を指定します。<br/>
     * <br/>
     */
    private $cardholderName;

    /**
     * @var string トークン
     * 半角英数記号
     * 最大桁数：36
     * トークンを利用する場合に指定します。
     */
    private $token;

    /**
     * カードマスクタイプ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * カードマスクパターンを変更する場合に指定します。<br/>
     */
    private $cardNumberMaskType;

    /**
     * 与信実施フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * カード情報を更新する際に2円与信するか否か指定するフラグ。<br/>
     * カード情報の変更有無に関わらず、本フラグで与信の実施有無を判断します。<br/>
     * <br/>
     * "1"：与信する。<br/>
     * "0"：与信しない。<br/>
     * ※未設定時はカード情報を変更した場合のみ与信が実施されます。<br/>
     */
    private $withAuthorize;

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

    /**
     * 標準カードフラグを設定する<br>
     * @param string $defaultCard 標準カードフラグ<br>
     */
    public function setDefaultCard($defaultCard)
    {
        $this->defaultCard = $defaultCard;
    }

    /**
     * 標準カードフラグを取得する<br>
     * @return string 標準カードフラグ<br>
     */
    public function getDefaultCard()
    {
        return $this->defaultCard;
    }

    /**
     * 標準カードIDを設定する<br>
     * @param string $defaultCardId 標準カードID<br>
     */
    public function setDefaultCardId($defaultCardId)
    {
        $this->defaultCardId = $defaultCardId;
    }

    /**
     * 標準カードIDを取得する<br>
     * @return string 標準カードID<br>
     */
    public function getDefaultCardId()
    {
        return $this->defaultCardId;
    }

    /**
     * 洗替実施フラグを設定する<br>
     * @param string $updater 洗替実施フラグ<br>
     */
    public function setUpdater($updater)
    {
        $this->updater = $updater;
    }

    /**
     * 洗替実施フラグを取得する<br>
     * @return string 洗替実施フラグ<br>
     */
    public function getUpdater()
    {
        return $this->updater;
    }

    /**
     * カード番号を設定する<br>
     * @param string $cardNumber カード番号<br>
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * カード番号を取得する<br>
     * @return string カード番号<br>
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * 有効期限を設定する<br>
     * @param string $cardExpire 有効期限<br>
     */
    public function setCardExpire($cardExpire)
    {
        $this->cardExpire = $cardExpire;
    }

    /**
     * 有効期限を取得する<br>
     * @return string 有効期限<br>
     */
    public function getCardExpire()
    {
        return $this->cardExpire;
    }

    /**
     * セキュリティコードを設定する<br>
     * @param string $securityCode セキュリティコード<br>
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
    }

    /**
     * セキュリティコードを取得する<br>
     * @return string セキュリティコード<br>
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * カード保有者名を設定する<br>
     * @param string $cardholderName カード保有者名<br>
     */
    public function setCardholderName($cardholderName)
    {
        $this->cardholderName = $cardholderName;
    }

    /**
     * カード保有者名を取得する<br>
     * @return string カード保有者名<br>
     */
    public function getCardholderName()
    {
        return $this->cardholderName;
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

    /**
     * カード番号マスクタイプを設定する
     * @param string $cardNumberMaskType カード番号マスクタイプ
     */
    public function setCardNumberMaskType($cardNumberMaskType)
    {
        $this->cardNumberMaskType = $cardNumberMaskType;
    }

    /**
     * カード番号マスクタイプを取得する
     * @return string カード番号マスクタイプ
     */
    public function getCardNumberMaskType()
    {
        return $this->cardNumberMaskType;
    }

    /**
     * 与信実施フラグを設定する
     * @param string $withAuthorize 与信実施フラグ
     */
    public function setWithAuthorize($withAuthorize)
    {
        $this->withAuthorize = $withAuthorize;
    }

    /**
     * 与信実施フラグを取得する
     * @return string 与信実施フラグ
     */
    public function getWithAuthorize()
    {
        return $this->withAuthorize;
    }

}
