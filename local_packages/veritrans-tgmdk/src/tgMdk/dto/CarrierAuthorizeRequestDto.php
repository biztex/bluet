<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：キャリア、コマンド名：与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class CarrierAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "carrier";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "docomo":ドコモケータイ払い<br/>
     * - "au":auかんたん決済<br/>
     * - "sb_ktai":ソフトバンクまとめて支払い（B）<br/>
     * - "sb_matomete":ソフトバンクまとめて支払い（A）<br/>
     * - "s_bikkuri":S!まとめて支払い<br/>
     * - "flets":フレッツまとめて支払い<br/>
     */
    private $serviceOptionType;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 999999999999 以下<br/>
     * <br/>
     */
    private $amount;

    /**
     * 端末種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0:PC<br/>
     * - 1:スマートフォン<br/>
     * - 2:フィーチャーフォン<br/>
     * <br/>
     */
    private $terminalKind;

    /**
     * 商品タイプ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0:デジタルコンテンツ<br/>
     * - 1:物販<br/>
     * - 2:役務<br/>
     * ※ 未指定の場合は、マーチャント登録時にDBに設定された値を使用します。<br/>
     */
    private $itemType;

    /**
     * 課金種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0:都度<br/>
     * - 1:継続<br/>
     * - 2:バーコード<br/>
     * - 3:スキャンコード<br/>
     * - 4:随時<br/>
     */
    private $accountingType;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上<br/>
     * - false: 与信のみ<br/>
     * ※ 都度決済で未指定の場合は、false:与信のみ。ただし、sb_matometeはtrue:与信同時売上として扱います。<br/>
     * ※ 以下の場合はtrue:与信同時売上のみ。未指定の場合はtrue:与信同時売上として扱います。<br/>
     *  ・docomo(バーコード)<br/>
     *  ・au(バーコード)<br/>
     *  ・au(スキャンコード)<br/>
     * <br/>
     */
    private $withCapture;

    /**
     * 本人認証（３Ｄセキュア）<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * sb_ktai以外は指定できません。<br/>
     * - 0:3D無<br/>
     * - 1:3Dバイパス<br/>
     * - 2:3D有<br/>
     * ※ 未指定の場合は、「1: バイパス」<br/>
     */
    private $d3Flag;

    /**
     * 初回課金年月日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * - 継続課金の場合に指定可<br/>
     * - 初回に課金される日付をYYYYMMDDの形式で指定してください。<br/>
     * - fletsの場合、日付は25日以下しか指定できません。<br/>
     */
    private $mpFirstDate;

    /**
     * 継続課金日<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * - 継続課金の場合に指定可<br/>
     * - 初回課金年月日の翌月以降の毎月課金日を1～28で指定してください。<br/>
     * - 月末を指定する場合は99を指定してください。<br/>
     * - fletsの場合、25以下しか指定できません。<br/>
     */
    private $mpDay;

    /**
     * 商品番号<br>
     * 半角英数字<br/>
     * マーチャントシステム内で商品やサービスを特定するID<br/>
     * - sb_matometeの継続課金の場合は、サービス識別子を18桁以内で指定してください。<br/>
     * - fletsの場合、　8桁以下の半角数字を指定できます。<br/>
     * - その他の場合、15桁以内で任意の値を指定できます。<br/>
     */
    private $itemId;

    /**
     * 商品情報<br>
     * 全角文字<br/>
     * キャリアによって用途が異なる項目です。※機種依存文字は利用できません。 <br/>
     * <br/>
     * ・docomo:<br/>
     * - キャリアが提供する消費者向けコンテンツに表示される商品情報を指定して下さい。<br/>
     * - 決済時の内容確認画面<br/>
     * - ご利用明細画面（詳細内容など）<br/>
     * - 購入完了通知メール（レシートメール）<br/>
     * ・sb_ktai:<br/>
     * - 直接契約の場合のみ、決済画面などの購入内容<br/>
     * ・sb_matomete:<br/>
     * - 購入完了通知メール本文の購入内容<br/>
     * ・flets:<br/>
     * - 決済時の内容確認画面の商品名<br/>
     * ・au:<br/>
     * - 決済時のご利用内容確認画面<br/>
     * <br/>
     * ※au（課金種別がバーコードの場合）、sb_ktai（マーチャントの契約タイプが包括契約の場合）、s_bikkuriは指定できません。<br/>
     * <br/>
     * ※auの都度課金の場合は24文字以下の全角文字、継続課金の場合は15文字以下の全角文字を指定できます。<br/>
     * ※その他の場合は20文字以下の全角文字を指定できます。<br/>
     */
    private $itemInfo;

    /**
     * 決済完了時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $successUrl;

    /**
     * 決済キャンセル時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済キャンセル時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $cancelUrl;

    /**
     * 決済エラー時URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * 決済キャンセルエラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * <br/>
     * ※ ダミー取引と都度決済の本番取引で指定可能です。<br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $pushUrl;

    /**
     * OpenID<br>
     * 半角英数字<br/>
     * 最大桁数：256<br/>
     * キャリアより発行された消費者を識別するOpenIDを指定します。<br/>
     * OpenIDは、決済申込完了通知によりVeriTrans4Gから店舗側システムに連携されます。<br/>
     * <br/>
     * sb_ktai、sb_matomete、s_bikkuri、fletsは指定できません。<br/>
     */
    private $openId;

    /**
     * UID<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 消費者端末からマーチャントシステムにアクセスした際のUIDを指定します。<br/>
     * <br/>
     * s_bikkuriでのみ指定可能です。<br/>
     */
    private $sbUid;

    /**
     * フレッツエリア<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0:東日本<br/>
     * - 1:西日本<br/>
     * <br/>
     * fletsでのみ指定可能です。<br/>
     */
    private $fletsArea;

    /**
     * auIDログインフラグ<br>
     * 英字（boolean）<br/>
     * - true : auIDログイン<br/>
     * - false: ID連携<br/>
     * <br/>
     * auでのみ指定可能です。<br/>
     */
    private $loginAuId;

    /**
     * au ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 消費者が所有するau IDを指定します。<br/>
     * <br/>
     * OpenIDもしくはau IDのいずれかのみ指定可能です。<br/>
     * auでのみ指定可能です。<br/>
     * loginAuIdの値に関係なく指定可能です。<br/>
     */
    private $auId;

    /**
     * 課金トークン<br>
     * 半角英数字<br/>
     * 最大桁数：255<br/>
     * バーコード決済用課金トークン。<br/>
     * <br/>
     * 消費者アプリのバーコードから読み取った値を設定してください。<br/>
     * auとdocomoのバーコード決済でのみ指定可能です。<br/>
     */
    private $billingToken;

    /**
     * ID認証<br>
     * 英字（boolean）<br/>
     * false：回線接続であれば回線による認証を行う<br/>
     * true：IDによる認証を必須とする<br/>
     * <br/>
     * ※ 未指定の場合は、「false」<br/>
     */
    private $idauth;

    /**
     * 店舗ID<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * auのバーコード決済でのみ指定可能です。<br/>
     * <br/>
     * ※未指定の場合は、マーチャント登録時にDBに設定された値<br/>
     */
    private $storeId;

    /**
     * 端末管理番号<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * auのバーコード決済でのみ指定可能です。<br/>
     */
    private $termId;

    /**
     * レシート番号<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * auのバーコード決済でのみ指定可能です。<br/>
     */
    private $receiptNo;


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
     * サービスオプションタイプを取得する<br>
     * @return string サービスオプションタイプ<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * サービスオプションタイプを設定する<br>
     * @param string $serviceOptionType サービスオプションタイプ<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
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
     * 端末種別を取得する<br>
     * @return string 端末種別<br>
     */
    public function getTerminalKind()
    {
        return $this->terminalKind;
    }

    /**
     * 端末種別を設定する<br>
     * @param string $terminalKind 端末種別<br>
     */
    public function setTerminalKind($terminalKind)
    {
        $this->terminalKind = $terminalKind;
    }

    /**
     * 商品タイプを取得する<br>
     * @return string 商品タイプ<br>
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * 商品タイプを設定する<br>
     * @param string $itemType 商品タイプ<br>
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * 課金種別を取得する<br>
     * @return string 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     * @param string $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 与信同時売上フラグを取得する<br>
     * @return string 与信同時売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 与信同時売上フラグを設定する<br>
     * @param string $withCapture 与信同時売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
    }

    /**
     * 本人認証（３Ｄセキュア）を取得する<br>
     * @return string 本人認証（３Ｄセキュア）<br>
     */
    public function getD3Flag()
    {
        return $this->d3Flag;
    }

    /**
     * 本人認証（３Ｄセキュア）を設定する<br>
     * @param string $d3Flag 本人認証（３Ｄセキュア）<br>
     */
    public function setD3Flag($d3Flag)
    {
        $this->d3Flag = $d3Flag;
    }

    /**
     * 初回課金年月日を取得する<br>
     * @return string 初回課金年月日<br>
     */
    public function getMpFirstDate()
    {
        return $this->mpFirstDate;
    }

    /**
     * 初回課金年月日を設定する<br>
     * @param string $mpFirstDate 初回課金年月日<br>
     */
    public function setMpFirstDate($mpFirstDate)
    {
        $this->mpFirstDate = $mpFirstDate;
    }

    /**
     * 継続課金日を取得する<br>
     * @return string 継続課金日<br>
     */
    public function getMpDay()
    {
        return $this->mpDay;
    }

    /**
     * 継続課金日を設定する<br>
     * @param string $mpDay 継続課金日<br>
     */
    public function setMpDay($mpDay)
    {
        $this->mpDay = $mpDay;
    }

    /**
     * 商品番号を取得する<br>
     * @return string 商品番号<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品番号を設定する<br>
     * @param string $itemId 商品番号<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * 商品情報を取得する<br>
     * @return string 商品情報<br>
     */
    public function getItemInfo()
    {
        return $this->itemInfo;
    }

    /**
     * 商品情報を設定する<br>
     * @param string $itemInfo 商品情報<br>
     */
    public function setItemInfo($itemInfo)
    {
        $this->itemInfo = $itemInfo;
    }

    /**
     * 決済完了時URLを取得する<br>
     * @return string 決済完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 決済完了時URLを設定する<br>
     * @param string $successUrl 決済完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 決済キャンセル時URLを取得する<br>
     * @return string 決済キャンセル時URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 決済キャンセル時URLを設定する<br>
     * @param string $cancelUrl 決済キャンセル時URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * 決済エラー時URLを取得する<br>
     * @return string 決済エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * 決済エラー時URLを設定する<br>
     * @param string $errorUrl 決済エラー時URL<br>
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    /**
     * プッシュ先URLを取得する<br>
     * @return string プッシュ先URL<br>
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * プッシュ先URLを設定する<br>
     * @param string $pushUrl プッシュ先URL<br>
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * OpenIDを取得する<br>
     * @return string OpenID<br>
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * OpenIDを設定する<br>
     * @param string $openId OpenID<br>
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

    /**
     * UIDを取得する<br>
     * @return string UID<br>
     */
    public function getSbUid()
    {
        return $this->sbUid;
    }

    /**
     * UIDを設定する<br>
     * @param string $sbUid UID<br>
     */
    public function setSbUid($sbUid)
    {
        $this->sbUid = $sbUid;
    }

    /**
     * フレッツエリアを取得する<br>
     * @return string フレッツエリア<br>
     */
    public function getFletsArea()
    {
        return $this->fletsArea;
    }

    /**
     * フレッツエリアを設定する<br>
     * @param string $fletsArea フレッツエリア<br>
     */
    public function setFletsArea($fletsArea)
    {
        $this->fletsArea = $fletsArea;
    }

    /**
     * auIDログインフラグを取得する<br>
     * @return string auIDログインフラグ<br>
     */
    public function getLoginAuId()
    {
        return $this->loginAuId;
    }

    /**
     * auIDログインフラグを設定する<br>
     * @param string $loginAuId auIDログインフラグ<br>
     */
    public function setLoginAuId($loginAuId)
    {
        $this->loginAuId = $loginAuId;
    }

    /**
     * au IDを取得する<br>
     * @return string au ID<br>
     */
    public function getAuId()
    {
        return $this->auId;
    }

    /**
     * au IDを設定する<br>
     * @param string $auId au ID<br>
     */
    public function setAuId($auId)
    {
        $this->auId = $auId;
    }

    /**
     * 課金トークンを取得する<br>
     * @return string 課金トークン<br>
     */
    public function getBillingToken()
    {
        return $this->billingToken;
    }

    /**
     * 課金トークンを設定する<br>
     * @param string $billingToken 課金トークン<br>
     */
    public function setBillingToken($billingToken)
    {
        $this->billingToken = $billingToken;
    }

    /**
     * ID認証を取得する<br>
     * @return string ID認証<br>
     */
    public function getIdauth()
    {
        return $this->idauth;
    }

    /**
     * ID認証を設定する<br>
     * @param string $idauth ID認証<br>
     */
    public function setIdauth($idauth)
    {
        $this->idauth = $idauth;
    }

    /**
     * 店舗IDを取得する<br>
     * @return string 店舗ID<br>
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * 店舗IDを設定する<br>
     * @param string $storeId 店舗ID<br>
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * 端末管理番号を取得する<br>
     * @return string 端末管理番号<br>
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * 端末管理番号を設定する<br>
     * @param string $termId 端末管理番号<br>
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;
    }

    /**
     * レシート番号を取得する<br>
     * @return string レシート番号<br>
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * レシート番号を設定する<br>
     * @param string $receiptNo レシート番号<br>
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
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

}
