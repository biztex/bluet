<?php

namespace tgMdk\dto;

/**
 * 検索条件:検索条件パラメータ群を保持するクラス
 *
 * @author Veritrans, Inc.
 */
class SearchParameters
{

    /**
     * 共通検索パラメータ<br>
     */
    private $common;

    /**
     * カード検索パラメータ<br>
     */
    private $card;

    /**
     * 電子マネー検索パラメータ<br>
     */
    private $em;

    /**
     * コンビニ検索パラメータ<br>
     */
    private $cvs;

    /**
     * 銀行決済検索パラメータ<br>
     */
    private $bank;

    /**
     * ペイパル検索パラメータ<br>
     */
    private $paypal;

    /**
     * セゾン検索パラメータ<br>
     */
    private $saison;

    /**
     * UPOPパラメータ<br>
     */
    private $upop;

    /**
     * 3Dセキュアカード連携検索パラメータ<br>
     */
    private $mpi;

    /**
     * Alipayパラメータ<br>
     */
    private $alipay;

    /**
     * キャリア検索パラメータ<br>
     */
    private $carrier;

    /**
     * ショッピングクレジット検索パラメータ<br>
     */
    private $oricosc;

    /**
     * 楽天検索パラメータ<br>
     */
    private $rakuten;

    /**
     * リクルート検索パラメータ<br>
     */
    private $recruit;

    /**
     * LINE Pay検索パラメータ<br>
     */
    private $linepay;

    /**
     * MasterPass検索パラメータ<br>
     */
    private $masterpass;

    /**
     * 銀行振込検索パラメータ<br>
     */
    private $virtualacc;

    /**
     * Tenpay検索パラメータ<br>
     */
    private $tenpay;

    /**
     * 金融機関マスタ検索パラメータ<br>
     */
    private $bankFinancialInstInfo;

    /**
     * PayPay検索パラメータ
     */
    private $paypay;

    /**
     * Alipay+検索パラメータ<br>
     */
    private $alipayx;

    /**
     * CsvPay検索パラメータ<br>
     */
    private $cvspay;

    /**
     * スコア@払い検索パラメータ<br>
     */
    private $scoreatpay;

    /**
     * Amazon Pay検索パラメータ
     */
    private $amazonpay;

    /**
     * メルペイ検索パラメータ
     */
    private $merpay;

    /**
     * エポスかんたん決済パラメータ
     */
    private $epos;

    /**
     * 共通検索パラメータを取得する<br>
     *
     * @return CommonSearchParameter 共通検索パラメータ
     */
    public function getCommon()
    {
        return $this->common;
    }

    /**
     * 共通検索パラメータを設定する<br>
     *
     * @param CommonSearchParameter $common 共通検索パラメータ
     */
    public function setCommon($common)
    {
        $this->common = $common;
    }

    /**
     * カード検索パラメータを取得する<br>
     *
     * @return CardSearchParameter カード検索パラメータ
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * カード検索パラメータを設定する<br>
     *
     * @param CardSearchParameter $card カード検索パラメータ
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * 電子マネー検索パラメータを取得する<br>
     *
     * @return EmSearchParameter 電子マネー検索パラメータ
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * 電子マネー検索パラメータを設定する<br>
     *
     * @param EmSearchParameter $em 電子マネー検索パラメータ
     */
    public function setEm($em)
    {
        $this->em = $em;
    }

    /**
     * コンビニ検索パラメータを取得する<br>
     *
     * @return CvsSearchParameter コンビニ検索パラメータ
     */
    public function getCvs()
    {
        return $this->cvs;
    }

    /**
     * コンビニ検索パラメータを設定する<br>
     *
     * @param CvsSearchParameter $cvs コンビニ検索パラメータ
     */
    public function setCvs($cvs)
    {
        $this->cvs = $cvs;
    }

    /**
     * 銀行決済検索パラメータを取得する<br>
     *
     * @return BankSearchParameter 銀行決済検索パラメータ
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * 銀行決済検索パラメータを設定する<br>
     *
     * @param BankSearchParameter $bank 銀行決済検索パラメータ
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * ペイパル検索パラメータを取得する<br>
     *
     * @return PaypalSearchParameter ペイパル検索パラメータ
     */
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * ペイパル検索パラメータを設定する<br>
     *
     * @param PaypalSearchParameter $paypal ペイパル検索パラメータ
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;
    }

    /**
     * セゾン検索パラメータを取得する<br>
     *
     * @return SaisonSearchParameter セゾン検索パラメータ
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * セゾン検索パラメータを設定する<br>
     *
     * @param SaisonSearchParameter $saison セゾン検索パラメータ
     */
    public function setSaison($saison)
    {
        $this->saison = $saison;
    }

    /**
     * upop銀聯検索パラメータを取得する<br>
     *
     * @return UpopSearchParameter upop銀聯検索パラメータ
     */
    public function getUpop()
    {
        return $this->upop;
    }

    /**
     * upop銀聯検索パラメータを設定する<br>
     *
     * @param UpopSearchParameter $upop upop銀聯検索パラメータ
     */
    public function setUpop($upop)
    {
        $this->upop = $upop;
    }

    /**
     * 3Dセキュアカード連携検索パラメータを取得する<br>
     *
     * @return MpiSearchParameter 3Dセキュアカード連携検索パラメータ
     */
    public function getMpi()
    {
        return $this->mpi;
    }

    /**
     * 3Dセキュアカード連携検索パラメータを設定する<br>
     *
     * @param MpiSearchParameter $mpi 3Dセキュアカード連携検索パラメータ
     */
    public function setMpi($mpi)
    {
        $this->mpi = $mpi;
    }

    /**
     * alipay検索パラメータを取得する<br>
     *
     * @return AlipaySearchParameter alipay検索パラメータ
     */
    public function getAlipay()
    {
        return $this->alipay;
    }

    /**
     * alipay検索パラメータを設定する<br>
     *
     * @param AlipaySearchParameter $alipay alipay検索パラメータ
     */
    public function setAlipay($alipay)
    {
        $this->alipay = $alipay;
    }

    /**
     * キャリア検索パラメータを取得する<br>
     *
     * @return CarrierSearchParameter キャリア検索パラメータ
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * キャリア検索パラメータを設定する<br>
     *
     * @param CarrierSearchParameter $carrier キャリア検索パラメータ
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * ショッピングクレジット検索パラメータを取得する<br>
     *
     * @return OricoscSearchParameter ショッピングクレジット検索パラメータ
     */
    public function getOricosc()
    {
        return $this->oricosc;
    }

    /**
     * ショッピングクレジット検索パラメータを設定する<br>
     *
     * @param OricoscSearchParameter $oricosc ショッピングクレジット検索パラメータ
     */
    public function setOricosc($oricosc)
    {
        $this->oricosc = $oricosc;
    }

    /**
     * 楽天検索パラメータを取得する<br>
     *
     * @return RakutenSearchParameter 楽天検索パラメータ
     */
    public function getRakuten()
    {
        return $this->rakuten;
    }

    /**
     * 楽天検索パラメータを設定する<br>
     *
     * @param RakutenSearchParameter $rakuten 楽天検索パラメータ
     */
    public function setRakuten($rakuten)
    {
        $this->rakuten = $rakuten;
    }

    /**
     * リクルート検索パラメータを取得する<br>
     *
     * @return RecruitSearchParameter リクルート検索パラメータ
     */
    public function getRecruit()
    {
        return $this->recruit;
    }

    /**
     * リクルート検索パラメータを設定する<br>
     *
     * @param RecruitSearchParameter $recruit リクルート検索パラメータ
     */
    public function setRecruit($recruit)
    {
        $this->recruit = $recruit;
    }

    /**
     * LINE Pay検索パラメータを取得する<br>
     *
     * @return LinepaySearchParameter LINE Pay検索パラメータ
     */
    public function getLinepay()
    {
        return $this->linepay;
    }

    /**
     * LINE Pay検索パラメータを設定する<br>
     *
     * @param LinepaySearchParameter $linepay LINE Pay検索パラメータ
     */
    public function setLinepay($linepay)
    {
        $this->linepay = $linepay;
    }

    /**
     * MasterPass検索パラメータを取得する<br>
     *
     * @return MasterpassSearchParameter MasterPass検索パラメータ
     */
    public function getMasterpass()
    {
        return $this->masterpass;
    }

    /**
     * MasterPass検索パラメータを設定する<br>
     *
     * @param MasterpassSearchParameter $masterpass MasterPass検索パラメータ
     */
    public function setMasterpass($masterpass)
    {
        $this->masterpass = $masterpass;
    }

    /**
     * 銀行振込検索パラメータを取得する<br>
     *
     * @return VirtualaccSearchParameter 銀行振込検索パラメータ
     */
    public function getVirtualacc()
    {
        return $this->virtualacc;
    }

    /**
     * 銀行振込検索パラメータを設定する<br>
     *
     * @param VirtualaccSearchParameter $virtualacc 銀行振込検索パラメータ
     */
    public function setVirtualacc($virtualacc)
    {
        $this->virtualacc = $virtualacc;
    }

    /**
     * Tenpay検索パラメータを取得する<br>
     *
     * @return TenpaySearchParameter Tenpay検索パラメータ
     */
    public function getTenpay()
    {
        return $this->tenpay;
    }

    /**
     * Tenpay検索パラメータを設定する<br>
     *
     * @param TenpaySearchParameter $tenpay Tenpay検索パラメータ
     */
    public function setTenpay($tenpay)
    {
        $this->tenpay = $tenpay;
    }

    /**
     * 金融機関マスタ検索パラメータを取得する<br>
     *
     * @return BankFinancialInstInfo 金融機関マスタ検索パラメータ
     */
    public function getBankFinancialInstInfo()
    {
        return $this->bankFinancialInstInfo;
    }

    /**
     * 金融機関マスタ検索パラメータを設定する<br>
     *
     * @param BankFinancialInstInfo $bankFinancialInstInfo 金融機関マスタ検索パラメータ
     */
    public function setBankFinancialInstInfo($bankFinancialInstInfo)
    {
        $this->bankFinancialInstInfo = $bankFinancialInstInfo;
    }

    /**
     * PayPay検索パラメータを取得する<br>
     *
     * @return PayPaySearchParameter PayPay検索パラメータ
     */
    public function getPayPay()
    {
        return $this->paypay;
    }

    /**
     * PayPay検索パラメータを設定する<br>
     *
     * @param PayPaySearchParameter $paypay PayPay検索パラメータ
     */
    public function setPayPay($paypay)
    {
        $this->paypay = $paypay;
    }

    /**
     * Alipay+検索パラメータを取得する<br>
     *
     * @return AlipayxSearchParameter Alipay+検索パラメータ
     */
    public function getAlipayx()
    {
        return $this->alipayx;
    }

    /**
     * Alipay+検索パラメータを設定する<br>
     *
     * @param AlipayxSearchParameter $alipayx Alipay+検索パラメータ
     */
    public function setAlipayx($alipayx)
    {
        $this->alipayx = $alipayx;
    }

    /**
     * CvsPay検索パラメータを取得する<br>
     *
     * @return CvsPaySearchParameter CvsPay検索パラメータ
     */
    public function getCvsPay()
    {
        return $this->cvspay;
    }

    /**
     * CvsPay検索パラメータを設定する<br>
     *
     * @param CvsPaySearchParameter $cvspay CvsPay検索パラメータ
     */
    public function setCvsPay($cvspay)
    {
        $this->cvspay = $cvspay;
    }

    /**
     * スコア@払い検索パラメータを取得する<br>
     *
     * @return ScoreatpaySearchParameter スコア@払い検索パラメータ
     */
    public function getScoreatpay()
    {
        return $this->scoreatpay;
    }

    /**
     * スコア@払い検索パラメータを設定する<br>
     *
     * @param ScoreatpaySearchParameter $scoreatpay スコア@払い検索パラメータ
     */
    public function setScoreatpay($scoreatpay)
    {
        $this->scoreatpay = $scoreatpay;
    }

    /**
     * Amazon Pay検索パラメータを取得する<br>
     *
     * @return AmazonpaySearchParameter Amazon Pay検索パラメータ
     */
    public function getAmazonpay()
    {
        return $this->amazonpay;
    }

    /**
     * Amazon Pay検索パラメータを設定する<br>
     *
     * @param AmazonpaySearchParameter $amazonpay Amazon Pay検索パラメータ
     */
    public function setAmazonpay($amazonpay)
    {
        $this->amazonpay = $amazonpay;
    }

    /**
     * メルペイ検索パラメータを取得する<br>
     *
     * @return MerpaySearchParameter メルペイ検索パラメータ
     */
    public function getMerpay()
    {
        return $this->merpay;
    }

    /**
     * メルペイ検索パラメータを設定する<br>
     *
     * @param MerpaySearchParameter $merpay メルペイ検索パラメータ
     */
    public function setMerpay($merpay)
    {
        $this->merpay = $merpay;
    }

    /**
     * エポスかんたん決済検索パラメータを取得する<br>
     *
     * @return EposSearchParameter エポスかんたん決済検索パラメータ
     */
    public function getEpos()
    {
        return $this->epos;
    }

    /**
     * エポスかんたん決済検索パラメータを設定する<br>
     *
     * @param EposSearchParameter $epos エポスかんたん決済検索パラメータ
     */
    public function setEpos($epos)
    {
        $this->epos = $epos;
    }
}
