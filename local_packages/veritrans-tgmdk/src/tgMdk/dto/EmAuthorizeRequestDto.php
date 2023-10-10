<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：電子マネー、コマンド名：決済の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class EmAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "em";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * 決済サービスオプション<br>
     * 半角英数字<br>
     * 決済サービスのオプションを指定します<br>
     * 例） モバイルEdyの場合： "edy-mobile"<br>
     * <p>
     * <b>Edy</b>
     * <ul type="square">
     * <li>"edy-pc"：　サイバーEdy（pc）
     * <li>"edy-mobile"：　モバイルEdy
     * <li>"edy-direct"：　モバイルEdyダイレクト
     * </ul>
     *
     * <b>Suica</b>
     * <ul type="square">
     * <li>"suica-mobile-mail"：　モバイル-メール決済
     * <li>"suica-mobile-app"：　モバイル-アプリ決済
     * <li>"suica-pc-mail"：　ネット-メール決済
     * <li>"suica-pc-app"：　ネット-アプリ決済
     * </ul>
     *
     * <b>WAON</b>
     * <ul type="square">
     * <li>"waon-mobile"：　モバイルアプリ決済
     * <li>"waon-pc"：　PaSoRi決済
     * </ul>
     *
     * <b>nanaco</b>
     * <ul type="square">
     * <li>"tcc-redirect"：　nanaco決済
     * </ul>
     *
     * <b>BitCash</b>
     * <ul type="square">
     * <li>"bitcash-api"：　BitCash決済
     * </ul>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * マーチャント側で取引を一意に表す注文管理IDを指定します。<br>
     * 申込処理ごとに一意である必要があります。<br>
     * 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br>
     * ※Suicaに限り40桁を上限とする。<br>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br>
     * 7 桁以内<br>
     * 支払金額となります。<br>
     * 例）2100<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　1 以上 ～ 50,000 以下
     * <li>Suica：　1 以上 ～ 20,000 以下
     * <li>WAON：　1 以上 ～ 50,000 以下
     * <li>nanaco：　1 以上 ～ 50,000 以下
     * <li>BitCash：　1 以上 ～ 200,000 以下
     * </ul>
     */
    private $amount;

    /**
     * 決済期限<br>
     * 半角数字<br>
     * 14 桁固定<br>
     * 支払の期限となります。<br>
     * 支払期限を過ぎた決済については、消費者はアプリ上から確認できます。<br>
     * YYYYMMDDhhmmss の形式<br>
     * 例）20060901235959<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　当日～90日後
     * <li>Edy（モバイルEdy以外）：　未使用（10日固定）
     * <li>Suica：　60日以内
     * <li>WAON：　決済日から365日先の日付までが上限
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $settlementLimit;

    /**
     * メールアドレス<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * 決済依頼メールを送信する消費者の携帯電話メールアドレスとなります。<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　必須
     * <li>Edy（モバイルEdy以外）：　未使用
     * <li>Suica（メール決済）：　必須
     * <li>Suica（アプリ決済）：　未使用
     * <li>WAON：　任意
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $mailAddr;

    /**
     * 転送メール送信要否<br>
     * 半角数字<br>
     * 1 桁固定<br>
     * 決済依頼メール、決済完了メールのコピーメール又はBCC メールをマーチャントメールアドレス（merchantMailAddr）に送信するか否かを設定します。<br>
     * 0： 送信不要<br>
     * 1： 送信要<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　任意
     * <li>Edy（モバイルEdy以外）：　未使用
     * <li>Suica（メール決済）：　任意
     * <li>Suica（アプリ決済）：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $forwardMailFlag;

    /**
     * マーチャントメールアドレス<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * 決済依頼メール、決済完了メールのコピーメール又はBCC メール先マーチャントメールアドレス。<br>
     * 以下の文字も使用できます。<br>
     * “.”(ドット)、“-”(ハイフン)、“_”(アンダースコア)、“@”(アットマーク)<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　任意
     * <li>Edy（モバイルEdy以外）：　未使用
     * <li>Suica（メール決済）：　任意
     * <li>Suica（アプリ決済）：　任意
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $merchantMailAddr;

    /**
     * 依頼メール付加情報<br>
     * 文字列<br>
     * 256 バイト以内<br>
     * 支払依頼メールに追加される文字列（商品情報等）です。<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　任意
     * <li>Edy（モバイルEdy以外）：　未使用
     * <li>Suica（メール決済）：　任意
     * <li>Suica（アプリ決済）：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $requestMailAddInfo;

    /**
     * 完了メール付加情報<br>
     * 文字列<br>
     * 320 バイト以内<br>
     * 決済完了メールに追加される文字列（遷移先URL 等）<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　任意
     * <li>Edy（モバイルEdy以外）：　未使用
     * <li>Suica（メール決済）：　任意
     * <li>Suica（アプリ決済）：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $completeMailAddInfo;

    /**
     * ショップ名<br>
     * 文字列<br>
     * 48 バイト以内<br>
     * Edy で使用する店舗名<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　任意
     * <li>Edy（モバイルEdy以外）：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $shopName;

    /**
     * 完了メール送信要否<br>
     * 半角数字<br>
     * 1 桁固定<br>
     * 決済完了時にメールを送信するか否かを設定します。<br>
     * 0： 送信不要　1： 送信要<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　任意
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $completeMailFlag;

    /**
     * 内容確認画面付加情報<br>
     * 文字列<br>
     * 256 バイト以内<br>
     * 内容確認画面に表示する付加情報を設定します。<br>
     * モバイルSuica で決済内容確認画面に表示される文字列<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　任意
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $confirmScreenAddInfo;

    /**
     * 完了画面付加情報<br>
     * 文字列<br>
     * 256 バイト以内<br>
     * 決済完了画面に表示する付加情報を設定します。<br>
     * モバイルSuica で決済完了画面に表示される文字列<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　任意
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $completeScreenAddInfo;

    /**
     * 画面タイトル<br>
     * 文字列<br>
     * 40 バイト以内<br>
     * モバイルSuica で決済完了画面・決済確認画面等で「商品・サービス名」に表示されます。<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　必須　※CR（復帰）、LF（改行）は使用不可
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $screenTitle;

    /**
     * 決済完了戻り先種別<br>
     * 半角数字<br>
     * 1 桁固定<br>
     * モバイルSuica でアプリ終了時に遷移する先の種別<br>
     * 1： ローカルメニュー<br>
     * 2： モバイルSuica アプリを終了し「決済完了戻り先URL」へ遷移<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica（メール決済）：　任意
     * <li>Suica（アプリ決済）：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $completeReturnKind;

    /**
     * 決済完了戻り先URL<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * モバイルSuicaでアプリ終了時に遷移する先のURL<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　任意
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $completeReturnUrl;

    /**
     * 決済完了通知URL<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * Edy Viewer にて支払いを完了した後に遷移するURL<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：　未使用
     * <li>Edy（モバイルEdy以外）：　任意
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $completeNoticeUrl;

    /**
     * 販売区分<br>
     * 半角数字<br>
     * 1 桁固定<br>
     * Edy で任意に登録する販売区分<br>
     * 　1：物販、　2：デジタル<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　任意
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $salesType;

    /**
     * 備考<br>
     * 文字列<br>
     * 256 バイト<br>
     * 備考(商品詳細など)<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　任意　※カンマ、セミコロン、シングルクォーテーション、CR（復帰）、LF（改行）は使用不可
     * <li>Suica：　任意　※CR（復帰）、LF（改行）は使用不可
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $free;

    /**
     * 成功時URL<br>
     * 半角英数字<br>
     * 128 バイト<br>
     * PaSoRi決済時、決済が成功した場合に遷移されるURL<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON（モバイルアプリ決済）：　未使用
     * <li>WAON（PaSoRi決済）：　必須
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $successUrl;

    /**
     * 失敗時URL<br>
     * 半角英数字<br>
     * 128 バイト<br>
     * PaSoRi決済時、決済が失敗した場合に遷移されるURL<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON（モバイルアプリ決済）：　未使用
     * <li>WAON（PaSoRi決済）：　必須
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $failureUrl;

    /**
     * キャンセルURL<br>
     * 半角英数字<br>
     * 128 バイト<br>
     * PaSoRi決済時、確認画面等でキャンセルボタンが押された場合に遷移されるURL<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON（モバイルアプリ決済）：　未使用
     * <li>WAON（PaSoRi決済）：　必須
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $cancelUrl;

    /**
     * 加盟店決済受付時刻<br>
     * 半角数字<br>
     * 14 桁固定<br>
     * 加盟店側で当該決済を受付た時刻<br>
     * YYYYMMDDhhmmss の形式<br>
     * 例）20060901235959<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　任意
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $memberStoreSettleEntryTime;

    /**
     * 支払取消期限<br>
     * 半角数字<br>
     * 14 桁固定<br>
     * 決済後、該当の支払を返金（取消）することができる期限。<br>
     * YYYYMMDDhhmmss の形式<br>
     * 例）20060901235959<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　必須
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $cancelLimit;

    /**
     * 取引種別<br>
     * 半角数字<br>
     * 最大桁数：2<br>
     * "02"：電子マネー決済<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　必須
     * <li>BitCash：　未使用
     * </ul>
     */
    private $transactionKind;

    /**
     * ユーザID<br>
     * 半角英数字記号<br>
     * 最大桁数：64<br>
     * 取引対象利用者を一意に特定可能なID。<br>
     * <br>
     * RFC2822に準拠する。<br>
     * [0-9][a-z][A-Z]!#$%&'*+-/=?^_`{|}~.<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　必須
     * <li>BitCash：　未使用
     * </ul>
     */
    private $userId;

    /**
     * ひらがなID<br>
     * 全角<br>
     * 最大桁数：16<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　必須
     * </ul>
     */
    private $hiraganaId;

    /**
     * 商品レイティング<br>
     * 半角数字<br>
     * 最大桁数：2<br>
     * 19：ST<br>
     * 99：EX<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　必須
     * </ul>
     */
    private $rating;

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
     * 決済期限を取得する<br>
     * @return string 決済期限<br>
     */
    public function getSettlementLimit()
    {
        return $this->settlementLimit;
    }

    /**
     * 決済期限を設定する<br>
     * @param string $settlementLimit 決済期限<br>
     */
    public function setSettlementLimit($settlementLimit)
    {
        $this->settlementLimit = $settlementLimit;
    }

    /**
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     */
    public function getMailAddr()
    {
        return $this->mailAddr;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $mailAddr メールアドレス<br>
     */
    public function setMailAddr($mailAddr)
    {
        $this->mailAddr = $mailAddr;
    }

    /**
     * 転送メール送信要否を取得する<br>
     * @return string 転送メール送信要否<br>
     */
    public function getForwardMailFlag()
    {
        return $this->forwardMailFlag;
    }

    /**
     * 転送メール送信要否を設定する<br>
     * @param string $forwardMailFlag 転送メール送信要否<br>
     */
    public function setForwardMailFlag($forwardMailFlag)
    {
        $this->forwardMailFlag = $forwardMailFlag;
    }

    /**
     * マーチャントメールアドレスを取得する<br>
     * @return string マーチャントメールアドレス<br>
     */
    public function getMerchantMailAddr()
    {
        return $this->merchantMailAddr;
    }

    /**
     * マーチャントメールアドレスを設定する<br>
     * @param string $merchantMailAddr マーチャントメールアドレス<br>
     */
    public function setMerchantMailAddr($merchantMailAddr)
    {
        $this->merchantMailAddr = $merchantMailAddr;
    }

    /**
     * 依頼メール付加情報を取得する<br>
     * @return string 依頼メール付加情報<br>
     */
    public function getRequestMailAddInfo()
    {
        return $this->requestMailAddInfo;
    }

    /**
     * 依頼メール付加情報を設定する<br>
     * @param string $requestMailAddInfo 依頼メール付加情報<br>
     */
    public function setRequestMailAddInfo($requestMailAddInfo)
    {
        $this->requestMailAddInfo = $requestMailAddInfo;
    }

    /**
     * 完了メール付加情報を取得する<br>
     * @return string 完了メール付加情報<br>
     */
    public function getCompleteMailAddInfo()
    {
        return $this->completeMailAddInfo;
    }

    /**
     * 完了メール付加情報を設定する<br>
     * @param string $completeMailAddInfo 完了メール付加情報<br>
     */
    public function setCompleteMailAddInfo($completeMailAddInfo)
    {
        $this->completeMailAddInfo = $completeMailAddInfo;
    }

    /**
     * ショップ名を取得する<br>
     * @return string ショップ名<br>
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * ショップ名を設定する<br>
     * @param string $shopName ショップ名<br>
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
    }

    /**
     * 完了メール送信要否を取得する<br>
     * @return string 完了メール送信要否<br>
     */
    public function getCompleteMailFlag()
    {
        return $this->completeMailFlag;
    }

    /**
     * 完了メール送信要否を設定する<br>
     * @param string $completeMailFlag 完了メール送信要否<br>
     */
    public function setCompleteMailFlag($completeMailFlag)
    {
        $this->completeMailFlag = $completeMailFlag;
    }

    /**
     * 内容確認画面付加情報を取得する<br>
     * @return string 内容確認画面付加情報<br>
     */
    public function getConfirmScreenAddInfo()
    {
        return $this->confirmScreenAddInfo;
    }

    /**
     * 内容確認画面付加情報を設定する<br>
     * @param string $confirmScreenAddInfo 内容確認画面付加情報<br>
     */
    public function setConfirmScreenAddInfo($confirmScreenAddInfo)
    {
        $this->confirmScreenAddInfo = $confirmScreenAddInfo;
    }

    /**
     * 完了画面付加情報を取得する<br>
     * @return string 完了画面付加情報<br>
     */
    public function getCompleteScreenAddInfo()
    {
        return $this->completeScreenAddInfo;
    }

    /**
     * 完了画面付加情報を設定する<br>
     * @param string $completeScreenAddInfo 完了画面付加情報<br>
     */
    public function setCompleteScreenAddInfo($completeScreenAddInfo)
    {
        $this->completeScreenAddInfo = $completeScreenAddInfo;
    }

    /**
     * 画面タイトルを取得する<br>
     * @return string 画面タイトル<br>
     */
    public function getScreenTitle()
    {
        return $this->screenTitle;
    }

    /**
     * 画面タイトルを設定する<br>
     * @param string $screenTitle 画面タイトル<br>
     */
    public function setScreenTitle($screenTitle)
    {
        $this->screenTitle = $screenTitle;
    }

    /**
     * 決済完了戻り先種別を取得する<br>
     * @return string 決済完了戻り先種別<br>
     */
    public function getCompleteReturnKind()
    {
        return $this->completeReturnKind;
    }

    /**
     * 決済完了戻り先種別を設定する<br>
     * @param string $completeReturnKind 決済完了戻り先種別<br>
     */
    public function setCompleteReturnKind($completeReturnKind)
    {
        $this->completeReturnKind = $completeReturnKind;
    }

    /**
     * 決済完了戻り先URLを取得する<br>
     * @return string 決済完了戻り先URL<br>
     */
    public function getCompleteReturnUrl()
    {
        return $this->completeReturnUrl;
    }

    /**
     * 決済完了戻り先URLを設定する<br>
     * @param string $completeReturnUrl 決済完了戻り先URL<br>
     */
    public function setCompleteReturnUrl($completeReturnUrl)
    {
        $this->completeReturnUrl = $completeReturnUrl;
    }

    /**
     * 決済完了通知URLを取得する<br>
     * @return string 決済完了通知URL<br>
     */
    public function getCompleteNoticeUrl()
    {
        return $this->completeNoticeUrl;
    }

    /**
     * 決済完了通知URLを設定する<br>
     * @param string $completeNoticeUrl 決済完了通知URL<br>
     */
    public function setCompleteNoticeUrl($completeNoticeUrl)
    {
        $this->completeNoticeUrl = $completeNoticeUrl;
    }

    /**
     * 販売区分を取得する<br>
     * @return string 販売区分<br>
     */
    public function getSalesType()
    {
        return $this->salesType;
    }

    /**
     * 販売区分を設定する<br>
     * @param string $salesType 販売区分<br>
     */
    public function setSalesType($salesType)
    {
        $this->salesType = $salesType;
    }

    /**
     * 備考を取得する<br>
     * @return string 備考<br>
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * 備考を設定する<br>
     * @param string $free 備考<br>
     */
    public function setFree($free)
    {
        $this->free = $free;
    }

    /**
     * 成功時URLを取得する<br>
     * @return string 成功時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 成功時URLを設定する<br>
     * @param string $successUrl 成功時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 失敗時URLを取得する<br>
     * @return string 失敗時URL<br>
     */
    public function getFailureUrl()
    {
        return $this->failureUrl;
    }

    /**
     * 失敗時URLを設定する<br>
     * @param string $failureUrl 失敗時URL<br>
     */
    public function setFailureUrl($failureUrl)
    {
        $this->failureUrl = $failureUrl;
    }

    /**
     * キャンセルURLを取得する<br>
     * @return string キャンセルURL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * キャンセルURLを設定する<br>
     * @param string $cancelUrl キャンセルURL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * 加盟店決済受付時刻を取得する<br>
     * @return string 加盟店決済受付時刻<br>
     */
    public function getMemberStoreSettleEntryTime()
    {
        return $this->memberStoreSettleEntryTime;
    }

    /**
     * 加盟店決済受付時刻を設定する<br>
     * @param string $memberStoreSettleEntryTime 加盟店決済受付時刻<br>
     */
    public function setMemberStoreSettleEntryTime($memberStoreSettleEntryTime)
    {
        $this->memberStoreSettleEntryTime = $memberStoreSettleEntryTime;
    }

    /**
     * 支払取消期限を取得する<br>
     * @return string 支払取消期限<br>
     */
    public function getCancelLimit()
    {
        return $this->cancelLimit;
    }

    /**
     * 支払取消期限を設定する<br>
     * @param string $cancelLimit 支払取消期限<br>
     */
    public function setCancelLimit($cancelLimit)
    {
        $this->cancelLimit = $cancelLimit;
    }

    /**
     * 取引種別を取得する<br>
     * @return string 取引種別<br>
     */
    public function getTransactionKind()
    {
        return $this->transactionKind;
    }

    /**
     * 取引種別を設定する<br>
     * @param string $transactionKind 取引種別<br>
     */
    public function setTransactionKind($transactionKind)
    {
        $this->transactionKind = $transactionKind;
    }

    /**
     * ユーザIDを取得する<br>
     * @return string ユーザID<br>
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * ユーザIDを設定する<br>
     * @param string $userId ユーザID<br>
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * ひらがなIDを取得する<br>
     * @return string ひらがなID<br>
     */
    public function getHiraganaId()
    {
        return $this->hiraganaId;
    }

    /**
     * ひらがなIDを設定する<br>
     * @param string $hiraganaId ひらがなID<br>
     */
    public function setHiraganaId($hiraganaId)
    {
        $this->hiraganaId = $hiraganaId;
    }

    /**
     * 商品レイティングを取得する<br>
     * @return string 商品レイティング<br>
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * 商品レイティングを設定する<br>
     * @param string $rating 商品レイティング<br>
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
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
