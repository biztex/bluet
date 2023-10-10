<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：スコア@払い、コマンド名：請求印字データ取得の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayGetInvoiceDataResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * "scoreatpay"： スコア@払い<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 決済請求処理後、応答電文に含まれる値。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     * - success：正常終了<br/>
     * - failure：異常終了<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
     * <br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDKバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * 請求書バーコード<br>
     * 半角英数字<br/>
     * 最大桁数：44<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $invoiceBarCode;

    /**
     * 請求書コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * バーコード情報内に含まれる取引に関するコードです<br/>
     */
    private $invoiceCode;

    /**
     * 発行区分<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * 固定文字列となります<br/>
     */
    private $invoiceKbn;

    /**
     * 履歴番号<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 固定文字列となります<br/>
     */
    private $historySeq;

    /**
     * 督促区分<br>
     * 半角英数字<br/>
     * 最大桁数：2<br/>
     * 固定文字列となります<br/>
     */
    private $remindedKbn;

    /**
     * 会社名<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     */
    private $companyName;

    /**
     * 部署名<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     */
    private $department;

    /**
     * 購入者氏名<br>
     * 文字列<br/>
     * 最大桁数：25<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $customerName;

    /**
     * 購入者郵便番号<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     */
    private $customerZip;

    /**
     * 購入者住所都道府県<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     */
    private $customerAddress1;

    /**
     * 購入者住所市区町村<br>
     * 文字列<br/>
     * 最大桁数：31<br/>
     */
    private $customerAddress2;

    /**
     * 購入者住所それ以降の住所<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     */
    private $customerAddress3;

    /**
     * 加盟店郵便番号<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     */
    private $shopZip;

    /**
     * 加盟店住所都道府県<br>
     * 文字列<br/>
     * 最大桁数：4<br/>
     */
    private $shopAddress1;

    /**
     * 加盟店住所市区町村<br>
     * 文字列<br/>
     * 最大桁数：31<br/>
     */
    private $shopAddress2;

    /**
     * 加盟店住所それ以降の住所<br>
     * 文字列<br/>
     * 最大桁数：35<br/>
     */
    private $shopAddress3;

    /**
     * 加盟店電話<br>
     * 半角数字<br/>
     * 最大桁数：17<br/>
     */
    private $shopTel;

    /**
     * 加盟店FAX番号<br>
     * 半角数字<br/>
     * 最大桁数：17<br/>
     */
    private $shopFax;

    /**
     * 顧客請求金額<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     * 1～999999<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $billedAmount;

    /**
     * 消費税<br>
     * 半角数字<br/>
     * 最大桁数：6<br/>
     * 顧客請求金額から自動計算されています<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $tax;

    /**
     * 購入者払込期限日<br>
     * 文字列<br/>
     * 最大桁数：11<br/>
     * YYYY年MM月DD日<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $timeOfReceipts;

    /**
     * 請求書発行日付<br>
     * 文字列<br/>
     * 最大桁数：11<br/>
     * YYYY年MM月DD日<br/>
     */
    private $invoiceStartDate;

    /**
     * 帳票タイトル<br>
     * 文字列<br/>
     * 最大桁数：3<br/>
     * 固定文字列となります<br/>
     */
    private $invoiceTitle;

    /**
     * スコア通信欄1<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 【加盟店】株式会社ニッセンからの情報です<br/>
     */
    private $nissenMessage1;

    /**
     * スコア通信欄2<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 【加盟店】株式会社ニッセンからの情報です<br/>
     */
    private $nissenMessage2;

    /**
     * スコア通信欄3<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 【加盟店】株式会社ニッセンからの情報です<br/>
     */
    private $nissenMessage3;

    /**
     * スコア通信欄4<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 【加盟店】株式会社ニッセンからの情報です<br/>
     */
    private $nissenMessage4;

    /**
     * 加盟店サイト名称<br>
     * 文字列<br/>
     * 最大桁数：75<br/>
     * 固定文字列となります<br/>
     */
    private $invoiceShopsiteName;

    /**
     * 加盟店メールアドレス<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 固定文字列となります<br/>
     */
    private $shopEmail;

    /**
     * スコア社名<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 固定文字列となります<br/>
     */
    private $nissenName;

    /**
     * スコア連絡先URL<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 固定文字列となります<br/>
     */
    private $nissenQaUrl;

    /**
     * 加盟店注文日<br>
     * 文字列<br/>
     * 最大桁数：11<br/>
     * YYYY年MM月DD日<br/>
     */
    private $shopOrderDate;

    /**
     * 加盟店コード<br>
     * 半角英数字<br/>
     * 最大桁数：9<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $shopCode;

    /**
     * スコア注文ID<br>
     * 半角英数字<br/>
     * 最大桁数：11<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $nissenTransactionId;

    /**
     * 加盟店注文ID1<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 加盟店注文IDの内、1～20文字がセットされます<br/>
     */
    private $shopTransactionId1;

    /**
     * 加盟店注文ID2<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 加盟店注文IDの内、21～40文字がセットされます<br/>
     */
    private $shopTransactionId2;

    /**
     * 加盟店通信欄1<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 登録いただいている加盟店様の自由通信欄です<br/>
     */
    private $shopMessage1;

    /**
     * 加盟店通信欄2<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 登録いただいている加盟店様の自由通信欄です<br/>
     */
    private $shopMessage2;

    /**
     * 加盟店通信欄3<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 登録いただいている加盟店様の自由通信欄です<br/>
     */
    private $shopMessage3;

    /**
     * 加盟店通信欄4<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 登録いただいている加盟店様の自由通信欄です<br/>
     */
    private $shopMessage4;

    /**
     * 加盟店通信欄5<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 登録いただいている加盟店様の自由通信欄です<br/>
     */
    private $shopMessage5;

    /**
     * 請求書形式<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 固定文字列となります<br/>
     */
    private $yobi1;

    /**
     * 郵便口座番号<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 固定文字列となります<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $yobi2;

    /**
     * 郵便口座名義<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 固定文字列となります<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $yobi3;

    /**
     * 郵便OCR-Bフォント上段<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 39文字(固定長)<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $yobi4;

    /**
     * 郵便OCR-Bフォント下段<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 44文字(固定長)<br/>
     * 印字の際は必ず取得した値を利用してください<br/>
     */
    private $yobi5;

    /**
     * 払込取扱用購入者住所<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 固定文字列となります<br/>
     */
    private $yobi6;

    /**
     * X印<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 封書形式(郵便局支払可)の取引の場合のみ、出力されます<br/>
     * 固定文字列となります<br/>
     */
    private $yobi7;

    /**
     * -<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 予備項目。現在は出力されません<br/>
     */
    private $yobi8;

    /**
     * -<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 予備項目。現在は出力されません<br/>
     */
    private $yobi9;

    /**
     * -<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 予備項目。現在は出力されません<br/>
     */
    private $yobi10;

    /**
     * 明細<br>
     * ScoreatpayDetailDtoの配列<br/>
     * 明細情報オブジェクトを配列で指定します。<br/>
     */
    private $details;

    /**
     * エラー詳細<br>
     * ScoreatpayErrorDtoの配列<br/>
     * エラー情報オブジェクトを配列で返却します。<br/>
     */
    private $errors;


    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
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
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * 請求書バーコードを取得する<br>
     * @return string 請求書バーコード<br>
     */
    public function getInvoiceBarCode()
    {
        return $this->invoiceBarCode;
    }

    /**
     * 請求書バーコードを設定する<br>
     * @param string $invoiceBarCode 請求書バーコード<br>
     */
    public function setInvoiceBarCode($invoiceBarCode)
    {
        $this->invoiceBarCode = $invoiceBarCode;
    }

    /**
     * 請求書コードを取得する<br>
     * @return string 請求書コード<br>
     */
    public function getInvoiceCode()
    {
        return $this->invoiceCode;
    }

    /**
     * 請求書コードを設定する<br>
     * @param string $invoiceCode 請求書コード<br>
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->invoiceCode = $invoiceCode;
    }

    /**
     * 発行区分を取得する<br>
     * @return string 発行区分<br>
     */
    public function getInvoiceKbn()
    {
        return $this->invoiceKbn;
    }

    /**
     * 発行区分を設定する<br>
     * @param string $invoiceKbn 発行区分<br>
     */
    public function setInvoiceKbn($invoiceKbn)
    {
        $this->invoiceKbn = $invoiceKbn;
    }

    /**
     * 履歴番号を取得する<br>
     * @return string 履歴番号<br>
     */
    public function getHistorySeq()
    {
        return $this->historySeq;
    }

    /**
     * 履歴番号を設定する<br>
     * @param string $historySeq 履歴番号<br>
     */
    public function setHistorySeq($historySeq)
    {
        $this->historySeq = $historySeq;
    }

    /**
     * 督促区分を取得する<br>
     * @return string 督促区分<br>
     */
    public function getRemindedKbn()
    {
        return $this->remindedKbn;
    }

    /**
     * 督促区分を設定する<br>
     * @param string $remindedKbn 督促区分<br>
     */
    public function setRemindedKbn($remindedKbn)
    {
        $this->remindedKbn = $remindedKbn;
    }

    /**
     * 会社名を取得する<br>
     * @return string 会社名<br>
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * 会社名を設定する<br>
     * @param string $companyName 会社名<br>
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * 部署名を取得する<br>
     * @return string 部署名<br>
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 部署名を設定する<br>
     * @param string $department 部署名<br>
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * 購入者氏名を取得する<br>
     * @return string 購入者氏名<br>
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * 購入者氏名を設定する<br>
     * @param string $customerName 購入者氏名<br>
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * 購入者郵便番号を取得する<br>
     * @return string 購入者郵便番号<br>
     */
    public function getCustomerZip()
    {
        return $this->customerZip;
    }

    /**
     * 購入者郵便番号を設定する<br>
     * @param string $customerZip 購入者郵便番号<br>
     */
    public function setCustomerZip($customerZip)
    {
        $this->customerZip = $customerZip;
    }

    /**
     * 購入者住所都道府県を取得する<br>
     * @return string 購入者住所都道府県<br>
     */
    public function getCustomerAddress1()
    {
        return $this->customerAddress1;
    }

    /**
     * 購入者住所都道府県を設定する<br>
     * @param string $customerAddress1 購入者住所都道府県<br>
     */
    public function setCustomerAddress1($customerAddress1)
    {
        $this->customerAddress1 = $customerAddress1;
    }

    /**
     * 購入者住所市区町村を取得する<br>
     * @return string 購入者住所市区町村<br>
     */
    public function getCustomerAddress2()
    {
        return $this->customerAddress2;
    }

    /**
     * 購入者住所市区町村を設定する<br>
     * @param string $customerAddress2 購入者住所市区町村<br>
     */
    public function setCustomerAddress2($customerAddress2)
    {
        $this->customerAddress2 = $customerAddress2;
    }

    /**
     * 購入者住所それ以降の住所を取得する<br>
     * @return string 購入者住所それ以降の住所<br>
     */
    public function getCustomerAddress3()
    {
        return $this->customerAddress3;
    }

    /**
     * 購入者住所それ以降の住所を設定する<br>
     * @param string $customerAddress3 購入者住所それ以降の住所<br>
     */
    public function setCustomerAddress3($customerAddress3)
    {
        $this->customerAddress3 = $customerAddress3;
    }

    /**
     * 加盟店郵便番号を取得する<br>
     * @return string 加盟店郵便番号<br>
     */
    public function getShopZip()
    {
        return $this->shopZip;
    }

    /**
     * 加盟店郵便番号を設定する<br>
     * @param string $shopZip 加盟店郵便番号<br>
     */
    public function setShopZip($shopZip)
    {
        $this->shopZip = $shopZip;
    }

    /**
     * 加盟店住所都道府県を取得する<br>
     * @return string 加盟店住所都道府県<br>
     */
    public function getShopAddress1()
    {
        return $this->shopAddress1;
    }

    /**
     * 加盟店住所都道府県を設定する<br>
     * @param string $shopAddress1 加盟店住所都道府県<br>
     */
    public function setShopAddress1($shopAddress1)
    {
        $this->shopAddress1 = $shopAddress1;
    }

    /**
     * 加盟店住所市区町村を取得する<br>
     * @return string 加盟店住所市区町村<br>
     */
    public function getShopAddress2()
    {
        return $this->shopAddress2;
    }

    /**
     * 加盟店住所市区町村を設定する<br>
     * @param string $shopAddress2 加盟店住所市区町村<br>
     */
    public function setShopAddress2($shopAddress2)
    {
        $this->shopAddress2 = $shopAddress2;
    }

    /**
     * 加盟店住所それ以降の住所を取得する<br>
     * @return string 加盟店住所それ以降の住所<br>
     */
    public function getShopAddress3()
    {
        return $this->shopAddress3;
    }

    /**
     * 加盟店住所それ以降の住所を設定する<br>
     * @param string $shopAddress3 加盟店住所それ以降の住所<br>
     */
    public function setShopAddress3($shopAddress3)
    {
        $this->shopAddress3 = $shopAddress3;
    }

    /**
     * 加盟店電話を取得する<br>
     * @return string 加盟店電話<br>
     */
    public function getShopTel()
    {
        return $this->shopTel;
    }

    /**
     * 加盟店電話を設定する<br>
     * @param string $shopTel 加盟店電話<br>
     */
    public function setShopTel($shopTel)
    {
        $this->shopTel = $shopTel;
    }

    /**
     * 加盟店FAX番号を取得する<br>
     * @return string 加盟店FAX番号<br>
     */
    public function getShopFax()
    {
        return $this->shopFax;
    }

    /**
     * 加盟店FAX番号を設定する<br>
     * @param string $shopFax 加盟店FAX番号<br>
     */
    public function setShopFax($shopFax)
    {
        $this->shopFax = $shopFax;
    }

    /**
     * 顧客請求金額を取得する<br>
     * @return string 顧客請求金額<br>
     */
    public function getBilledAmount()
    {
        return $this->billedAmount;
    }

    /**
     * 顧客請求金額を設定する<br>
     * @param string $billedAmount 顧客請求金額<br>
     */
    public function setBilledAmount($billedAmount)
    {
        $this->billedAmount = $billedAmount;
    }

    /**
     * 消費税を取得する<br>
     * @return string 消費税<br>
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * 消費税を設定する<br>
     * @param string $tax 消費税<br>
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * 購入者払込期限日を取得する<br>
     * @return string 購入者払込期限日<br>
     */
    public function getTimeOfReceipts()
    {
        return $this->timeOfReceipts;
    }

    /**
     * 購入者払込期限日を設定する<br>
     * @param string $timeOfReceipts 購入者払込期限日<br>
     */
    public function setTimeOfReceipts($timeOfReceipts)
    {
        $this->timeOfReceipts = $timeOfReceipts;
    }

    /**
     * 請求書発行日付を取得する<br>
     * @return string 請求書発行日付<br>
     */
    public function getInvoiceStartDate()
    {
        return $this->invoiceStartDate;
    }

    /**
     * 請求書発行日付を設定する<br>
     * @param string $invoiceStartDate 請求書発行日付<br>
     */
    public function setInvoiceStartDate($invoiceStartDate)
    {
        $this->invoiceStartDate = $invoiceStartDate;
    }

    /**
     * 帳票タイトルを取得する<br>
     * @return string 帳票タイトル<br>
     */
    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    /**
     * 帳票タイトルを設定する<br>
     * @param string $invoiceTitle 帳票タイトル<br>
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;
    }

    /**
     * スコア通信欄1を取得する<br>
     * @return string スコア通信欄1<br>
     */
    public function getNissenMessage1()
    {
        return $this->nissenMessage1;
    }

    /**
     * スコア通信欄1を設定する<br>
     * @param string $nissenMessage1 スコア通信欄1<br>
     */
    public function setNissenMessage1($nissenMessage1)
    {
        $this->nissenMessage1 = $nissenMessage1;
    }

    /**
     * スコア通信欄2を取得する<br>
     * @return string スコア通信欄2<br>
     */
    public function getNissenMessage2()
    {
        return $this->nissenMessage2;
    }

    /**
     * スコア通信欄2を設定する<br>
     * @param string $nissenMessage2 スコア通信欄2<br>
     */
    public function setNissenMessage2($nissenMessage2)
    {
        $this->nissenMessage2 = $nissenMessage2;
    }

    /**
     * スコア通信欄3を取得する<br>
     * @return string スコア通信欄3<br>
     */
    public function getNissenMessage3()
    {
        return $this->nissenMessage3;
    }

    /**
     * スコア通信欄3を設定する<br>
     * @param string $nissenMessage3 スコア通信欄3<br>
     */
    public function setNissenMessage3($nissenMessage3)
    {
        $this->nissenMessage3 = $nissenMessage3;
    }

    /**
     * スコア通信欄4を取得する<br>
     * @return string スコア通信欄4<br>
     */
    public function getNissenMessage4()
    {
        return $this->nissenMessage4;
    }

    /**
     * スコア通信欄4を設定する<br>
     * @param string $nissenMessage4 スコア通信欄4<br>
     */
    public function setNissenMessage4($nissenMessage4)
    {
        $this->nissenMessage4 = $nissenMessage4;
    }

    /**
     * 加盟店サイト名称を取得する<br>
     * @return string 加盟店サイト名称<br>
     */
    public function getInvoiceShopsiteName()
    {
        return $this->invoiceShopsiteName;
    }

    /**
     * 加盟店サイト名称を設定する<br>
     * @param string $invoiceShopsiteName 加盟店サイト名称<br>
     */
    public function setInvoiceShopsiteName($invoiceShopsiteName)
    {
        $this->invoiceShopsiteName = $invoiceShopsiteName;
    }

    /**
     * 加盟店メールアドレスを取得する<br>
     * @return string 加盟店メールアドレス<br>
     */
    public function getShopEmail()
    {
        return $this->shopEmail;
    }

    /**
     * 加盟店メールアドレスを設定する<br>
     * @param string $shopEmail 加盟店メールアドレス<br>
     */
    public function setShopEmail($shopEmail)
    {
        $this->shopEmail = $shopEmail;
    }

    /**
     * スコア社名を取得する<br>
     * @return string スコア社名<br>
     */
    public function getNissenName()
    {
        return $this->nissenName;
    }

    /**
     * スコア社名を設定する<br>
     * @param string $nissenName スコア社名<br>
     */
    public function setNissenName($nissenName)
    {
        $this->nissenName = $nissenName;
    }

    /**
     * スコア連絡先URLを取得する<br>
     * @return string スコア連絡先URL<br>
     */
    public function getNissenQaUrl()
    {
        return $this->nissenQaUrl;
    }

    /**
     * スコア連絡先URLを設定する<br>
     * @param string $nissenQaUrl スコア連絡先URL<br>
     */
    public function setNissenQaUrl($nissenQaUrl)
    {
        $this->nissenQaUrl = $nissenQaUrl;
    }

    /**
     * 加盟店注文日を取得する<br>
     * @return string 加盟店注文日<br>
     */
    public function getShopOrderDate()
    {
        return $this->shopOrderDate;
    }

    /**
     * 加盟店注文日を設定する<br>
     * @param string $shopOrderDate 加盟店注文日<br>
     */
    public function setShopOrderDate($shopOrderDate)
    {
        $this->shopOrderDate = $shopOrderDate;
    }

    /**
     * 加盟店コードを取得する<br>
     * @return string 加盟店コード<br>
     */
    public function getShopCode()
    {
        return $this->shopCode;
    }

    /**
     * 加盟店コードを設定する<br>
     * @param string $shopCode 加盟店コード<br>
     */
    public function setShopCode($shopCode)
    {
        $this->shopCode = $shopCode;
    }

    /**
     * スコア注文IDを取得する<br>
     * @return string スコア注文ID<br>
     */
    public function getNissenTransactionId()
    {
        return $this->nissenTransactionId;
    }

    /**
     * スコア注文IDを設定する<br>
     * @param string $nissenTransactionId スコア注文ID<br>
     */
    public function setNissenTransactionId($nissenTransactionId)
    {
        $this->nissenTransactionId = $nissenTransactionId;
    }

    /**
     * 加盟店注文ID1を取得する<br>
     * @return string 加盟店注文ID1<br>
     */
    public function getShopTransactionId1()
    {
        return $this->shopTransactionId1;
    }

    /**
     * 加盟店注文ID1を設定する<br>
     * @param string $shopTransactionId1 加盟店注文ID1<br>
     */
    public function setShopTransactionId1($shopTransactionId1)
    {
        $this->shopTransactionId1 = $shopTransactionId1;
    }

    /**
     * 加盟店注文ID2を取得する<br>
     * @return string 加盟店注文ID2<br>
     */
    public function getShopTransactionId2()
    {
        return $this->shopTransactionId2;
    }

    /**
     * 加盟店注文ID2を設定する<br>
     * @param string $shopTransactionId2 加盟店注文ID2<br>
     */
    public function setShopTransactionId2($shopTransactionId2)
    {
        $this->shopTransactionId2 = $shopTransactionId2;
    }

    /**
     * 加盟店通信欄1を取得する<br>
     * @return string 加盟店通信欄1<br>
     */
    public function getShopMessage1()
    {
        return $this->shopMessage1;
    }

    /**
     * 加盟店通信欄1を設定する<br>
     * @param string $shopMessage1 加盟店通信欄1<br>
     */
    public function setShopMessage1($shopMessage1)
    {
        $this->shopMessage1 = $shopMessage1;
    }

    /**
     * 加盟店通信欄2を取得する<br>
     * @return string 加盟店通信欄2<br>
     */
    public function getShopMessage2()
    {
        return $this->shopMessage2;
    }

    /**
     * 加盟店通信欄2を設定する<br>
     * @param string $shopMessage2 加盟店通信欄2<br>
     */
    public function setShopMessage2($shopMessage2)
    {
        $this->shopMessage2 = $shopMessage2;
    }

    /**
     * 加盟店通信欄3を取得する<br>
     * @return string 加盟店通信欄3<br>
     */
    public function getShopMessage3()
    {
        return $this->shopMessage3;
    }

    /**
     * 加盟店通信欄3を設定する<br>
     * @param string $shopMessage3 加盟店通信欄3<br>
     */
    public function setShopMessage3($shopMessage3)
    {
        $this->shopMessage3 = $shopMessage3;
    }

    /**
     * 加盟店通信欄4を取得する<br>
     * @return string 加盟店通信欄4<br>
     */
    public function getShopMessage4()
    {
        return $this->shopMessage4;
    }

    /**
     * 加盟店通信欄4を設定する<br>
     * @param string $shopMessage4 加盟店通信欄4<br>
     */
    public function setShopMessage4($shopMessage4)
    {
        $this->shopMessage4 = $shopMessage4;
    }

    /**
     * 加盟店通信欄5を取得する<br>
     * @return string 加盟店通信欄5<br>
     */
    public function getShopMessage5()
    {
        return $this->shopMessage5;
    }

    /**
     * 加盟店通信欄5を設定する<br>
     * @param string $shopMessage5 加盟店通信欄5<br>
     */
    public function setShopMessage5($shopMessage5)
    {
        $this->shopMessage5 = $shopMessage5;
    }

    /**
     * 請求書形式を取得する<br>
     * @return string 請求書形式<br>
     */
    public function getYobi1()
    {
        return $this->yobi1;
    }

    /**
     * 請求書形式を設定する<br>
     * @param string $yobi1 請求書形式<br>
     */
    public function setYobi1($yobi1)
    {
        $this->yobi1 = $yobi1;
    }

    /**
     * 郵便口座番号を取得する<br>
     * @return string 郵便口座番号<br>
     */
    public function getYobi2()
    {
        return $this->yobi2;
    }

    /**
     * 郵便口座番号を設定する<br>
     * @param string $yobi2 郵便口座番号<br>
     */
    public function setYobi2($yobi2)
    {
        $this->yobi2 = $yobi2;
    }

    /**
     * 郵便口座名義を取得する<br>
     * @return string 郵便口座名義<br>
     */
    public function getYobi3()
    {
        return $this->yobi3;
    }

    /**
     * 郵便口座名義を設定する<br>
     * @param string $yobi3 郵便口座名義<br>
     */
    public function setYobi3($yobi3)
    {
        $this->yobi3 = $yobi3;
    }

    /**
     * 郵便OCR-Bフォント上段を取得する<br>
     * @return string 郵便OCR-Bフォント上段<br>
     */
    public function getYobi4()
    {
        return $this->yobi4;
    }

    /**
     * 郵便OCR-Bフォント上段を設定する<br>
     * @param string $yobi4 郵便OCR-Bフォント上段<br>
     */
    public function setYobi4($yobi4)
    {
        $this->yobi4 = $yobi4;
    }

    /**
     * 郵便OCR-Bフォント下段を取得する<br>
     * @return string 郵便OCR-Bフォント下段<br>
     */
    public function getYobi5()
    {
        return $this->yobi5;
    }

    /**
     * 郵便OCR-Bフォント下段を設定する<br>
     * @param string $yobi5 郵便OCR-Bフォント下段<br>
     */
    public function setYobi5($yobi5)
    {
        $this->yobi5 = $yobi5;
    }

    /**
     * 払込取扱用購入者住所を取得する<br>
     * @return string 払込取扱用購入者住所<br>
     */
    public function getYobi6()
    {
        return $this->yobi6;
    }

    /**
     * 払込取扱用購入者住所を設定する<br>
     * @param string $yobi6 払込取扱用購入者住所<br>
     */
    public function setYobi6($yobi6)
    {
        $this->yobi6 = $yobi6;
    }

    /**
     * X印を取得する<br>
     * @return string X印<br>
     */
    public function getYobi7()
    {
        return $this->yobi7;
    }

    /**
     * X印を設定する<br>
     * @param string $yobi7 X印<br>
     */
    public function setYobi7($yobi7)
    {
        $this->yobi7 = $yobi7;
    }

    /**
     * -を取得する<br>
     * @return string -<br>
     */
    public function getYobi8()
    {
        return $this->yobi8;
    }

    /**
     * -を設定する<br>
     * @param string $yobi8 -<br>
     */
    public function setYobi8($yobi8)
    {
        $this->yobi8 = $yobi8;
    }

    /**
     * -を取得する<br>
     * @return string -<br>
     */
    public function getYobi9()
    {
        return $this->yobi9;
    }

    /**
     * -を設定する<br>
     * @param string $yobi9 -<br>
     */
    public function setYobi9($yobi9)
    {
        $this->yobi9 = $yobi9;
    }

    /**
     * -を取得する<br>
     * @return string -<br>
     */
    public function getYobi10()
    {
        return $this->yobi10;
    }

    /**
     * -を設定する<br>
     * @param string $yobi10 -<br>
     */
    public function setYobi10($yobi10)
    {
        $this->yobi10 = $yobi10;
    }

    /**
     * 明細を取得する<br>
     * @return ScoreatpayDetailDto[] 明細<br>
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * 明細を設定する<br>
     * @param ScoreatpayDetailDto[] $details 明細<br>
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * エラー詳細を取得する<br>
     * @return ScoreatpayErrorDto[] エラー詳細<br>
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * エラー詳細を設定する<br>
     * @param ScoreatpayErrorDto[] $errors エラー詳細<br>
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }


    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }

    /**
     * プロパティ名と対応するクラス名のリストを取得する<br>
     * @return array プロパティ名と対応するクラス名のリスト<br>
     */
    public function getPropertyClassNameList()
    {
        return array('details' => 'ScoreatpayDetailDto', 'errors' => 'ScoreatpayErrorDto');
    }

}
