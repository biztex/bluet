<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：コンビニ決済、コマンド名：決済の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class CvsAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "cvs";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * 決済サービスオプション<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * 決済サービスのオプションを指定します<br>
     * セブンイレブン：　"sej"<br>
     * ファミリーマート：　"famima"<br>
     * ローソン､ミニストップetc（ファミリーマートあり）：　"econ"<br>
     * ローソン､ミニストップetc（ファミリーマートなし）：　"lawson"<br>
     * その他：　"other"　<br>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * マーチャントで任意に採番してください。<br>
     * 申込処理ごとに付ける必要が御座います。<br>
     * “.”（ドット）、“-”（ハイフン）、“_”（アンダースコア）も使用できます。<br>
     */
    private $orderId;

    /**
     * 金額<br>
     * 半角数字<br>
     * 6 桁以内<br>
     * 支払金額となります。<br>
     * 例）2100<br>
     */
    private $amount;

    /**
     * 氏名１<br>
     * 文字列 全角のみ<br>
     * 10 文字以内<br>
     * 顧客姓<br>
     * 例） 山田<br>
     * ※全角ハイフン、全角スペース、外字は、文字化けする恐れがあります<br>
     */
    private $name1;

    /**
     * 氏名２<br>
     * 文字列 全角のみ<br>
     * 10 文字以内<br>
     * 顧客名<br>
     * 例） 太郎<br>
     * ※全角ハイフン、全角スペース、外字は、文字化けする恐れがあります<br>
     */
    private $name2;

    /**
     * カナ<br>
     * 文字列 全角カタカナのみ<br>
     * 15 文字以内<br>
     * 顧客カナ名<br>
     * 例） ヤマダタロウ<br>
     * ※ファミリーマートのみ設定できます<br>
     * ※半角スペースは入力不可です<br>
     * ※全角ハイフン、全角スペース、外字は、文字化けする恐れがあります<br>
     */
    private $kana;

    /**
     * 電話番号<br>
     * 半角数字、ハイフン<br>
     * 13 桁以内<br>
     * 顧客電話番号、数字のみ11桁以内、ハイフン含み13桁以内<br>
     * 例） 0311112222、03-1111-2222、09011112222、090-1111-2222<br>
     */
    private $telNo;

    /**
     * 支払期限<br>
     * 半角数字<br>
     * 10 桁以内<br>
     * 支払期限<br>
     * yyyy/mm/dd の形式<br>
     * セブンイレブン：　当日～60日後を支払期限に指定可能<br>
     * ファミリーマート：　当日～60日後を支払期限に指定可能<br>
     * ローソン：　当日～60日後を支払期限に指定可能<br>
     * その他：　当日～60日後を支払期限に指定可能<br>
     * 例） 2009/07/24<br>
     */
    private $payLimit;

    /**
     * メールアドレス<br>
     * 半角英数字<br>
     * 50 文字以内<br>
     * 払込票URL通知メールアドレス<br>
     * ※ローソン、ファミリーマートのみ設定できます<br>
     * ※ファミリーマートは任意入力項目です<br>
     * ※ローソンは受付番号、払込票URL通知メールを顧客へ送信しない場合は、特定のメールアドレス(サイトのメールアドレスなど)でもよい。<br>
     * @derecated
     */
    private $mailAddr;

    /**
     * 支払区分<br>
     * 半角数字<br>
     * 1 桁固定<br>
     * 支払区分<br>
     * ※現在はリザーブパラメータのため無条件に "0" を設定<br>
     */
    private $paymentType;

    /**
     * 備考１<br>
     * 文字列<br>
     * 50 バイト以内<br>
     * 備考欄（商品詳細などに利用する）<br>
     * セブンイレブン： 使用不可<br>
     * ファミリーマート： 任意（38バイト）<br>
     * ローソン： 任意（50バイト）<br>
     * その他： 任意（32バイト）<br>
     */
    private $free1;

    /**
     * 備考２<br>
     * 文字列<br>
     * 38 バイト以内<br>
     * 備考欄（商品詳細などに利用する）<br>
     * セブンイレブン： 使用不可<br>
     * ファミリーマート：　任意（38バイト）<br>
     * ローソン： 使用不可<br>
     * その他：　任意（32バイト）<br>
     */
    private $free2;

    /**
     * プッシュURL<br>
     * URL<br>
     * 最大桁数：256<br>
     * プッシュURLを指定します。<br>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br>
     */
    private $pushUrl;

    /**
     * 支払期限時分<br>
     * 半角数字<br>
     * 5 桁以内<br>
     * 支払期限時分<br>
     * HH:mm の形式<br>
     * 例） 15:30<br>
     */
    private $payLimitHhmm;

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
     * 金額を取得する<br>
     * @return string 金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 金額を設定する<br>
     * @param string $amount 金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 氏名１を取得する<br>
     * @return string 氏名１<br>
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * 氏名１を設定する<br>
     * @param string $name1 氏名１<br>
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
    }

    /**
     * 氏名２を取得する<br>
     * @return string 氏名２<br>
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * 氏名２を設定する<br>
     * @param string $name2 氏名２<br>
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * カナを取得する<br>
     * @return string カナ<br>
     */
    public function getKana()
    {
        return $this->kana;
    }

    /**
     * カナを設定する<br>
     * @param string $kana カナ<br>
     */
    public function setKana($kana)
    {
        $this->kana = $kana;
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
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     * @deprecated
     */
    public function getMailAddr()
    {
        return $this->mailAddr;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $mailAddr メールアドレス<br>
     * @deprecated
     */
    public function setMailAddr($mailAddr)
    {
        $this->mailAddr = $mailAddr;
    }

    /**
     * 支払区分を取得する<br>
     * @return string 支払区分<br>
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * 支払区分を設定する<br>
     * @param string $paymentType 支払区分<br>
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * 備考１を取得する<br>
     * @return string 備考１<br>
     */
    public function getFree1()
    {
        return $this->free1;
    }

    /**
     * 備考１を設定する<br>
     * @param string $free1 備考１<br>
     */
    public function setFree1($free1)
    {
        $this->free1 = $free1;
    }

    /**
     * 備考２を取得する<br>
     * @return string 備考２<br>
     */
    public function getFree2()
    {
        return $this->free2;
    }

    /**
     * 備考２を設定する<br>
     * @param string $free2 備考２<br>
     */
    public function setFree2($free2)
    {
        $this->free2 = $free2;
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
     * 支払期限時分を取得する<br>
     * @return string 支払期限時分<br>
     */
    public function getPayLimitHhmm()
    {
        return $this->payLimitHhmm;
    }

    /**
     * 支払期限時分を設定する<br>
     * @param string $payLimitHhmm 支払期限時分<br>
     */
    public function setPayLimitHhmm($payLimitHhmm)
    {
        $this->payLimitHhmm = $payLimitHhmm;
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
