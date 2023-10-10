<?php

namespace tgMdk\dto;

/**
 * 不正検知カードメソッドDtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionMethodCardDto
{

    /**
     * メソッド分類<br>
     * 最大桁数：20<br/>
     */
    private $type;

    /**
     * カードブランド<br>
     * 最大桁数：2<br/>
     */
    private $brand;

    /**
     * カード所有者名<br>
     * 文字列<br/>
     * 最大桁数：192<br/>
     * カード所有者名を設定してください。<br/>
     */
    private $cardHolderName;

    /**
     * カードbinコード<br>
     * 最大桁数：6<br/>
     */
    private $cardBin;

    /**
     * カード番号下4桁<br>
     * 最大桁数：4<br/>
     */
    private $cardLastFour;

    /**
     * カード番号ハッシュ値<br>
     * 最大桁数：255<br/>
     */
    private $hashedCardNumber;

    /**
     * カード有効期限<br>
     * 最大桁数：5<br/>
     */
    private $expireDate;

    /**
     * カード使用後経過日数<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 同カードが最後に使用されてからの日数<br/>
     */
    private $tof;

    /**
     * 認証情報<br>
     * FraudDetectionAuthorizationDto<br/>
     * 認証情報オブジェクト<br/>
     */
    private $authorization;


    /**
     * メソッド分類を取得する<br>
     * @return string メソッド分類<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * メソッド分類を設定する<br>
     * @param string $type メソッド分類<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * カードブランドを取得する<br>
     * @return string カードブランド<br>
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * カードブランドを設定する<br>
     * @param string $brand カードブランド<br>
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * カード所有者名を取得する<br>
     * @return string カード所有者名<br>
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * カード所有者名を設定する<br>
     * @param string $cardHolderName カード所有者名<br>
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
    }

    /**
     * カードbinコードを取得する<br>
     * @return string カードbinコード<br>
     */
    public function getCardBin()
    {
        return $this->cardBin;
    }

    /**
     * カードbinコードを設定する<br>
     * @param string $cardBin カードbinコード<br>
     */
    public function setCardBin($cardBin)
    {
        $this->cardBin = $cardBin;
    }

    /**
     * カード番号下4桁を取得する<br>
     * @return string カード番号下4桁<br>
     */
    public function getCardLastFour()
    {
        return $this->cardLastFour;
    }

    /**
     * カード番号下4桁を設定する<br>
     * @param string $cardLastFour カード番号下4桁<br>
     */
    public function setCardLastFour($cardLastFour)
    {
        $this->cardLastFour = $cardLastFour;
    }

    /**
     * カード番号ハッシュ値を取得する<br>
     * @return string カード番号ハッシュ値<br>
     */
    public function getHashedCardNumber()
    {
        return $this->hashedCardNumber;
    }

    /**
     * カード番号ハッシュ値を設定する<br>
     * @param string $hashedCardNumber カード番号ハッシュ値<br>
     */
    public function setHashedCardNumber($hashedCardNumber)
    {
        $this->hashedCardNumber = $hashedCardNumber;
    }

    /**
     * カード有効期限を取得する<br>
     * @return string カード有効期限<br>
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * カード有効期限を設定する<br>
     * @param string $expireDate カード有効期限<br>
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }

    /**
     * カード使用後経過日数を取得する<br>
     * @return string カード使用後経過日数<br>
     */
    public function getTof()
    {
        return $this->tof;
    }

    /**
     * カード使用後経過日数を設定する<br>
     * @param string $tof カード使用後経過日数<br>
     */
    public function setTof($tof)
    {
        $this->tof = $tof;
    }

    /**
     * 認証情報を取得する<br>
     * @return FraudDetectionAuthorizationDto 認証情報<br>
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * 認証情報を設定する<br>
     * @param FraudDetectionAuthorizationDto $authorization 認証情報<br>
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;
    }


}
