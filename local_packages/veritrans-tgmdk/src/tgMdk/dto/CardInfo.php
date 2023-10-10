<?php

namespace tgMdk\dto;

/**
 * カード情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class CardInfo
{

    /**
     * カードID<br>
     * 半角数字<br/>
     * 最大桁数：24<br/>
     */
    private $cardId;

    /**
     * マスクカード番号<br>
     * 半角英数字<br/>
     * 最大桁数：19<br/>
     * カード番号の先頭６桁と下４桁<br/>
     * 桁数はマスク前の桁数を維持<br/>
     */
    private $cardNumber;

    /**
     * 有効期限<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * MM/YY形式<br/>
     * マスクはしていない<br/>
     */
    private $cardExpire;

    /**
     * カード保有者名<br>
     * 半角英数字記号<br/>
     * 最大桁数：45<br/>
     * マスクはしていない<br/>
     */
    private $cardholderName;

    /**
     * 標準カードフラグ<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * "1"：決済時、カードを明示的に指定しない場合に使用されるカードである。<br/>
     * "0"：決済時、カードを明示的に指定しない場合に使用されるカードでない。<br/>
     */
    private $defaultCard;

    /**
     * 仕向先コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     */
    private $acquireCode3;

    /**
     * 券種コード<br>
     * 半角数字<br/>
     * 最大桁数：10<br/>
     */
    private $kindCode;

    /**
     * 元カードID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $originalCardId;

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
     * マスクカード番号を設定する<br>
     * @param string $cardNumber マスクカード番号<br>
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * マスクカード番号を取得する<br>
     * @return string マスクカード番号<br>
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
     * 仕向先コードを設定する<br>
     * @param string $acquireCode3 仕向先コード<br>
     */
    public function setAcquireCode3($acquireCode3)
    {
        $this->acquireCode3 = $acquireCode3;
    }

    /**
     * 仕向先コードを取得する<br>
     * @return string 仕向先コード<br>
     */
    public function getAcquireCode3()
    {
        return $this->acquireCode3;
    }

    /**
     * 券種コードを設定する<br>
     * @param string $kindCode 券種コード<br>
     */
    public function setKindCode($kindCode)
    {
        $this->kindCode = $kindCode;
    }

    /**
     * 券種コードを取得する<br>
     * @return string 券種コード<br>
     */
    public function getKindCode()
    {
        return $this->kindCode;
    }

    /**
     * 元カードIDを設定する<br>
     * @param string $originalCardId 元カードID<br>
     */
    public function setOriginalCardId($originalCardId)
    {
        $this->originalCardId = $originalCardId;
    }

    /**
     * 元カードIDを取得する<br>
     * @return string 元カードID<br>
     */
    public function getOriginalCardId()
    {
        return $this->originalCardId;
    }


}
