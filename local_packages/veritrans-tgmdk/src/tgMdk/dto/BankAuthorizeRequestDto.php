<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：銀行決済、コマンド名：決済の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class BankAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "bank";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * 決済サービスオプション<br>
     * "atm"：ATM決済(番号通知方式)<br>
     * "netbank-pc"：ネットバンク決済(銀行リンク方式：PC)<br>
     * "netbank-docomo"：ネットバンク決済(銀行リンク方式：docomo)<br>
     * "netbank-softbank"：ネットバンク決済(銀行リンク方式：SoftBank)<br>
     * "netbank-au"：ネットバンク決済(銀行リンク方式：au)<br>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     */
    private $orderId;

    /**
     * 決済金額<br>
     */
    private $amount;

    /**
     * 顧客名１<br>
     */
    private $name1;

    /**
     * 顧客名２<br>
     */
    private $name2;

    /**
     * 顧客名カナ１<br>
     * 全角英数カナのみ　※最大20Byte<br>
     */
    private $kana1;

    /**
     * 顧客名カナ２<br>
     * 全角英数カナのみ　※最大20Byte<br>
     */
    private $kana2;

    /**
     * 郵便番号１<br>
     * 郵便番号上３桁<br>
     */
    private $post1;

    /**
     * 郵便番号２<br>
     * 郵便番号下４桁<br>
     */
    private $post2;

    /**
     * 住所１<br>
     * ※最大50Byte<br>
     */
    private $address1;

    /**
     * 住所２<br>
     * ※最大50Byte<br>
     */
    private $address2;

    /**
     * 住所３<br>
     * ※最大100Byte<br>
     */
    private $address3;

    /**
     * 電話番号<br>
     * ハイフンなし、９桁～１１桁<br>
     */
    private $telNo;

    /**
     * 支払期限<br>
     * YYYYMMDD<br>
     */
    private $payLimit;

    /**
     * 成約日<br>
     * YYYYMMDD<br>
     */
    private $agreementDate;

    /**
     * 請求内容（漢字）<br>
     * インフォメーションとしてＡＴＭ等に表示　※最大24Byte<br>
     */
    private $contents;

    /**
     * 請求内容（カナ）<br>
     * インフォメーションとしてＡＴＭ等に表示　※最大48Byte<br>
     */
    private $contentsKana;

    /**
     * 決済機関コード<br>
     * ※「画面言語」を設定した場合は、当項目を設定することはできない。<br>
     */
    private $payCsv;

    /**
     * 画面言語<br>
     * ※「決済機関コード」を設定した場合は、当項目を設定することはできない。<br>
     */
    private $viewLocale;

    /**
     * 決済結果戻り先URL<br>
     * ※決済完了後に店舗側サイトへ遷移を戻すためのURL<br>
     * ※URLに使用可能な半角文字<br>
     * ※ネットバンク決済(銀行リンク方式：PC)を指定した場合のみ設定可能。<br>
     * 　ただし、決済機関コードを設定した場合はネットバンク決済(銀行リンク方式：PC)を設定した場合でも設定不可となる。<br>
     */
    private $termUrl;

    /**
     * プッシュURL<br>
     * URL<br>
     * 最大桁数：256<br>
     * プッシュURLを指定します。<br>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br>
     */
    private $pushUrl;

    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;

    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
    }

    /**
     * 決済サービスオプションを取得する<br>
     * @return string 決済サービスオプション<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * 決済サービスオプションを設定する<br>
     * @param string $serviceOptionType 決済サービスオプション<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済金額を設定する<br>
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 顧客名１を取得する<br>
     * @return string 顧客名１<br>
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * 顧客名１を設定する<br>
     * @param string $name1 顧客名１<br>
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
    }

    /**
     * 顧客名２を取得する<br>
     * @return string 顧客名２<br>
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * 顧客名２を設定する<br>
     * @param string $name2 顧客名２<br>
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * 顧客名カナ１を取得する<br>
     * @return string 顧客名カナ１<br>
     */
    public function getKana1()
    {
        return $this->kana1;
    }

    /**
     * 顧客名カナ１を設定する<br>
     * @param string $kana1 顧客名カナ１<br>
     */
    public function setKana1($kana1)
    {
        $this->kana1 = $kana1;
    }

    /**
     * 顧客名カナ２を取得する<br>
     * @return string 顧客名カナ２<br>
     */
    public function getKana2()
    {
        return $this->kana2;
    }

    /**
     * 顧客名カナ２を設定する<br>
     * @param string $kana2 顧客名カナ２<br>
     */
    public function setKana2($kana2)
    {
        $this->kana2 = $kana2;
    }

    /**
     * 郵便番号１を取得する<br>
     * @return string 郵便番号１<br>
     */
    public function getPost1()
    {
        return $this->post1;
    }

    /**
     * 郵便番号１を設定する<br>
     * @param string $post1 郵便番号１<br>
     */
    public function setPost1($post1)
    {
        $this->post1 = $post1;
    }

    /**
     * 郵便番号２を取得する<br>
     * @return string 郵便番号２<br>
     */
    public function getPost2()
    {
        return $this->post2;
    }

    /**
     * 郵便番号２を設定する<br>
     * @param string $post2 郵便番号２<br>
     */
    public function setPost2($post2)
    {
        $this->post2 = $post2;
    }

    /**
     * 住所１を取得する<br>
     * @return string 住所１<br>
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * 住所１を設定する<br>
     * @param string $address1 住所１<br>
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * 住所２を取得する<br>
     * @return string 住所２<br>
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * 住所２を設定する<br>
     * @param string $address2 住所２<br>
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * 住所３を取得する<br>
     * @return string 住所３<br>
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * 住所３を設定する<br>
     * @param string $address3 住所３<br>
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getTelNo()
    {
        return $this->telNo;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $telNo 電話番号<br>
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;
    }

    /**
     * 支払期限を取得する<br>
     * @return string 支払期限<br>
     */
    public function getPayLimit()
    {
        return $this->payLimit;
    }

    /**
     * 支払期限を設定する<br>
     * @param string $payLimit 支払期限<br>
     */
    public function setPayLimit($payLimit)
    {
        $this->payLimit = $payLimit;
    }

    /**
     * 成約日を取得する<br>
     * @return string 成約日<br>
     */
    public function getAgreementDate()
    {
        return $this->agreementDate;
    }

    /**
     * 成約日を設定する<br>
     * @param string $agreementDate 成約日<br>
     */
    public function setAgreementDate($agreementDate)
    {
        $this->agreementDate = $agreementDate;
    }

    /**
     * 請求内容（漢字）を取得する<br>
     * @return string 請求内容（漢字）<br>
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * 請求内容（漢字）を設定する<br>
     * @param string $contents 請求内容（漢字）<br>
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    /**
     * 請求内容（カナ）を取得する<br>
     * @return string 請求内容（カナ）<br>
     */
    public function getContentsKana()
    {
        return $this->contentsKana;
    }

    /**
     * 請求内容（カナ）を設定する<br>
     * @param string $contentsKana 請求内容（カナ）<br>
     */
    public function setContentsKana($contentsKana)
    {
        $this->contentsKana = $contentsKana;
    }

    /**
     * 決済機関コードを取得する<br>
     * @return string 決済機関コード<br>
     */
    public function getPayCsv()
    {
        return $this->payCsv;
    }

    /**
     * 決済機関コードを設定する<br>
     * @param string $payCsv 決済機関コード<br>
     */
    public function setPayCsv($payCsv)
    {
        $this->payCsv = $payCsv;
    }

    /**
     * 画面言語を取得する<br>
     * @return string 画面言語<br>
     */
    public function getViewLocale()
    {
        return $this->viewLocale;
    }

    /**
     * 画面言語を設定する<br>
     * @param string $viewLocale 画面言語<br>
     */
    public function setViewLocale($viewLocale)
    {
        $this->viewLocale = $viewLocale;
    }

    /**
     * 決済結果戻り先URLを取得する<br>
     * @return string 決済結果戻り先URL<br>
     */
    public function getTermUrl()
    {
        return $this->termUrl;
    }

    /**
     * 決済結果戻り先URLを設定する<br>
     * @param string $termUrl 決済結果戻り先URL<br>
     */
    public function setTermUrl($termUrl)
    {
        $this->termUrl = $termUrl;
    }

    /**
     * プッシュURLを取得する<br>
     * @return string プッシュURL<br>
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * プッシュURLを設定する<br>
     * @param string $pushUrl プッシュURL<br>
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * ログ用文字列(マスク済み)を設定する<br>
     * @param string $maskedLog ログ用文字列(マスク済み)<br>
     */
    public function _setMaskedLog($maskedLog)
    {
        $this->maskedLog = $maskedLog;
    }

    /**
     * ログ用文字列(マスク済み)を取得する<br>
     * @return string ログ用文字列(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->maskedLog;
    }


    /**
     * 拡張パラメータ<br>
     * 並列処理用の拡張パラメータを保持する。
     */
    private $optionParams;

    /**
     * 拡張パラメータリストを取得する<br>
     * @return OptionParams 拡張パラメータリスト<br>
     */
    public function getOptionParams()
    {
        return $this->optionParams;
    }

    /**
     * 拡張パラメータリストを設定する<br>
     * @param OptionParams $optionParams 拡張パラメータリスト<br>
     */
    public function setOptionParams($optionParams)
    {
        $this->optionParams = $optionParams;
    }
}
