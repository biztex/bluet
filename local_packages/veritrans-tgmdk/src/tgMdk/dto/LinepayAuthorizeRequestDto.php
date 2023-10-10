<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：LINEPay、コマンド名：与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class LinepayAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "linepay";

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
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 9999999(7桁) 以下<br/>
     */
    private $amount;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上<br/>
     * - false: 与信のみ<br/>
     * ※ 未指定の場合は、false:与信のみ。<br/>
     */
    private $withCapture;

    /**
     * 商品番号<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * マーチャントシステム内で商品やサービスを特定するID<br/>
     */
    private $itemId;

    /**
     * 商品名<br>
     * 文字列<br/>
     * 最大桁数：4000<br/>
     * 商品名<br/>
     * - 最大文字数：4000byte<br/>
     */
    private $itemName;

    /**
     * 商品画像URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 商品画像URL（決済画面に表示される画像URL。サイズ：84×84）<br/>
     * - 半角256byte以内<br/>
     */
    private $itemImageUrl;

    /**
     * 使用ブラウザ判定<br>
     * 英字（boolean）<br/>
     * - true : 決済を要請したbrowserとLINEアプリから遷移するbrowserが異なる場合、LINE Payで決済を要請したbrowserに戻るよう案内ページを提供する。<br/>
     * - false: LINE Payで決済を要請したbrowserとLINEアプリから遷移するbrowserの確認をしない<br/>
     * ※ 未指定の場合は、false。<br/>
     */
    private $checkUseBrowser;

    /**
     * アプリ起動URLスキーム<br>
     * 半角英数字<br/>
     * 最大桁数：256<br/>
     * LINE Pay アプリが起動するブラウザまたは独自アプリケーシ<br/>
     * ョンを起動するためのURL スキーム。<br/>
     * ※決済確認方法が"サーバ間通信"の場合には指定できません。<br/>
     */
    private $appUrlScheme;

    /**
     * 独自アプリ起動時のオプション指定<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * - 0 : 独自アプリ起動オプションを使用しない<br/>
     * - 1 : URLエンコーディングを使用する場合に指定<br/>
     * ※ 未指定の場合は、'0'：オプションを使用しない。<br/>
     * ※決済確認方法が"サーバ間通信"の場合には指定できません。<br/>
     */
    private $useOriginalApp;

    /**
     * LINE member ID<br>
     * 半角英数字<br/>
     * 最大桁数：50<br/>
     * 店舗側システムにて、LINEユーザを特定できる固有IDです。<br/>
     * - 半角50文字以内<br/>
     * <br/>
     * 加盟店様でLINEユーザの情報にアクセスできる場合にmidを指定してください。<br/>
     * <br/>
     */
    private $mid;

    /**
     * packageName<br>
     * 半角英数字<br/>
     * 最大桁数：4000<br/>
     * Androidにおいて、アプリ間切り替えの際にphishing防止用の情報<br/>
     * ※決済確認方法が"サーバ間通信"の場合には指定できません。<br/>
     */
    private $packageName;

    /**
     * 言語コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 決済待ち画面の言語コード（BCP-47形式）<br/>
     * - ja : 日本語<br/>
     * - ko : 韓国語<br/>
     * - en : 英語<br/>
     * - zh-Hans : 中国語（簡体字）<br/>
     * - zh-Hant : 中国語（繁体字）<br/>
     * - th : タイ語<br/>
     * ※未指定の場合は、ja:日本語<br/>
     */
    private $langCd;

    /**
     * 決済完了時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※決済確認方法が"サーバ間通信"の場合には指定できません。<br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $successUrl;

    /**
     * 決済キャンセル時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済キャンセル時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※決済確認方法が"サーバ間通信"の場合には指定できません。<br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $cancelUrl;

    /**
     * 決済エラー時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済エラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※決済確認方法が"サーバ間通信"の場合には指定できません。<br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 「ダミー取引」時のプッシュURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 本パラメータは店舗側システムの開発時にのみ利用されることを想定しており、ダミー取引で指定可能です。<br/>
     */
    private $pushUrl;

    /**
     * ワンタイムキー<br>
     * 半角英数字<br/>
     * 最大桁数：19<br/>
     * 店舗レジ等でQRコードもしくはバーコード読み取りによる決済を実行する場合に使用します。<br/>
     * LINE Pay アプリで提供するQR/BarCodeから取得できるコード値を指定してください。<br/>
     * ※ワンタイムキー指定時には、決済確認方法に「1 : サーバ間通信」を設定してください。<br/>
     */
    private $oneTimeKey;

    /**
     * 決済確認方法<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * 決済確認の方式を指定します。<br/>
     * - 0 : ブラウザを介する通信（デフォルト）<br/>
     * - 1 : サーバ間通信<br/>
     */
    private $paymentConfirmType;


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
     * 商品名を取得する<br>
     * @return string 商品名<br>
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * 商品名を設定する<br>
     * @param string $itemName 商品名<br>
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * 商品画像URLを取得する<br>
     * @return string 商品画像URL<br>
     */
    public function getItemImageUrl()
    {
        return $this->itemImageUrl;
    }

    /**
     * 商品画像URLを設定する<br>
     * @param string $itemImageUrl 商品画像URL<br>
     */
    public function setItemImageUrl($itemImageUrl)
    {
        $this->itemImageUrl = $itemImageUrl;
    }

    /**
     * 使用ブラウザ判定を取得する<br>
     * @return string 使用ブラウザ判定<br>
     */
    public function getCheckUseBrowser()
    {
        return $this->checkUseBrowser;
    }

    /**
     * 使用ブラウザ判定を設定する<br>
     * @param string $checkUseBrowser 使用ブラウザ判定<br>
     */
    public function setCheckUseBrowser($checkUseBrowser)
    {
        $this->checkUseBrowser = $checkUseBrowser;
    }

    /**
     * アプリ起動URLスキームを取得する<br>
     * @return string アプリ起動URLスキーム<br>
     */
    public function getAppUrlScheme()
    {
        return $this->appUrlScheme;
    }

    /**
     * アプリ起動URLスキームを設定する<br>
     * @param string $appUrlScheme アプリ起動URLスキーム<br>
     */
    public function setAppUrlScheme($appUrlScheme)
    {
        $this->appUrlScheme = $appUrlScheme;
    }

    /**
     * 独自アプリ起動時のオプション指定を取得する<br>
     * @return string 独自アプリ起動時のオプション指定<br>
     */
    public function getUseOriginalApp()
    {
        return $this->useOriginalApp;
    }

    /**
     * 独自アプリ起動時のオプション指定を設定する<br>
     * @param string $useOriginalApp 独自アプリ起動時のオプション指定<br>
     */
    public function setUseOriginalApp($useOriginalApp)
    {
        $this->useOriginalApp = $useOriginalApp;
    }

    /**
     * LINE member IDを取得する<br>
     * @return string LINE member ID<br>
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * LINE member IDを設定する<br>
     * @param string $mid LINE member ID<br>
     */
    public function setMid($mid)
    {
        $this->mid = $mid;
    }

    /**
     * packageNameを取得する<br>
     * @return string packageName<br>
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * packageNameを設定する<br>
     * @param string $packageName packageName<br>
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    /**
     * 言語コードを取得する<br>
     * @return string 言語コード<br>
     */
    public function getLangCd()
    {
        return $this->langCd;
    }

    /**
     * 言語コードを設定する<br>
     * @param string $langCd 言語コード<br>
     */
    public function setLangCd($langCd)
    {
        $this->langCd = $langCd;
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
     * ワンタイムキーを取得する<br>
     * @return string ワンタイムキー<br>
     */
    public function getOneTimeKey()
    {
        return $this->oneTimeKey;
    }

    /**
     * ワンタイムキーを設定する<br>
     * @param string $oneTimeKey ワンタイムキー<br>
     */
    public function setOneTimeKey($oneTimeKey)
    {
        $this->oneTimeKey = $oneTimeKey;
    }

    /**
     * 決済確認方法を取得する<br>
     * @return string 決済確認方法<br>
     */
    public function getPaymentConfirmType()
    {
        return $this->paymentConfirmType;
    }

    /**
     * 決済確認方法を設定する<br>
     * @param string $paymentConfirmType 決済確認方法<br>
     */
    public function setPaymentConfirmType($paymentConfirmType)
    {
        $this->paymentConfirmType = $paymentConfirmType;
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
