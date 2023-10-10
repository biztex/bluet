<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：電子マネー、コマンド名：返金の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class EmRefundRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "Refund";

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
     * <li>未使用
     * </ul>
     *
     * <b>BitCash</b>
     * <ul type="square">
     * <li>未使用
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
     * 金額<br>
     * 半角数字<br>
     * 5 桁以内<br>
     * 返金金額となります。決済金額以下を指定する必要があります。<br>
     * 例）1800<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　1 以上 ～ 50,000 以下
     * <li>Suica：　1 以上 ～ 20,000 以下
     * <li>WAON：　1 以上 ～ 50,000 以下
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $amount;

    /**
     * オーダー種別<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * 返金請求オーダーの種別を指定します。<br>
     * <p>
     * <b>Edy</b>
     * <ul type="square">
     * <li>"refund"：　返金
     * </ul>
     *
     * <b>Suica</b>
     * <ul type="square">
     * <li>"refund"：　返金
     * <li>"refund_new"：　新規返金
     * </ul>
     *
     * <b>WAON</b>
     * <ul type="square">
     * <li>"refund"：　返金
     * </ul>
     *
     * <b>nanaco</b>
     * <ul type="square">
     * <li>未使用
     * </ul>
     *
     * <b>BitCash</b>
     * <ul type="square">
     * <li>未使用
     * </ul>
     */
    private $orderKind;

    /**
     * 返金対象取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * 返金を依頼する決済請求の取引IDを指定します。<br>
     */
    private $refundOrderId;

    /**
     * 決済期限<br>
     * 半角数字<br>
     * 14桁固定<br>
     * 返金・新規返金の受取期限となります。<br>
     * YYYYMMDDhhmmssの形式<br>
     * 例）20060901235901<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用（30日固定）
     * <li>Suica：　60日以内
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $settlementLimit;

    /**
     * メールアドレス<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * 返金・新規返金依頼メールを送信する消費者の携帯電話メールアドレスとなります。<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
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
     * 返金・新規返金依頼メールのコピーメール又はBCCメールをマーチャントメールアドレス（merchantMailAddr）に送信するか否かを設定します。<br>
     * 0：送信不要<br>
     * 1：送信要<br>
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
    private $forwardMailFlag;

    /**
     * マーチャントメールアドレス<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * 返金・新規返金依頼メールのコピーメール又はBCC メール先マーチャントメールアドレス。<br>
     * 以下の文字も使用できます。<br>
     * “.”(ドット)、“-”(ハイフン)、“_”(アンダースコア)、“@”(アットマーク)<br>
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
    private $merchantMailAddr;

    /**
     * 取消通知メールアドレス<br>
     * 半角英数字<br>
     * 256 文字以内<br>
     * 返金・新規返金を利用者に通知するためのメールアドレスを指定します。<br>
     */
    private $cancelMailAddr;

    /**
     * 依頼メール付加情報<br>
     * 文字列<br>
     * 256 バイト以内<br>
     * 返金・新規返金依頼メールに追加される文字列（返金情報等）です。<br>
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
    private $requestMailAddInfo;

    /**
     * 依頼メール送信要否<br>
     * 半角数字<br>
     * 1 桁固定<br>
     * Suicaポケット発行メールの送信要否を設定します。<br>
     * 0： 送信不要<br>
     * 1： 送信要<br>
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
    private $requestMailFlag;

    /**
     * 内容確認画面付加情報<br>
     * 文字列<br>
     * 256 バイト以内<br>
     * 内容確認画面に表示する付加情報を設定します。<br>
     * モバイルSuicaで決済内容確認画面に表示される文字列<br>
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
     * 返金・新規返金完了画面に表示する付加情報を設定します。<br>
     * モバイルSuicaで決済完了画面に表示される文字列<br>
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
     * 256 バイト以内<br>
     * モバイルSuicaで返金・新規返金完了画面・返金・新規返金確認画面等で「商品・サービス名」に表示されます。<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　任意　※CR（復帰）、LF（改行）は使用不可
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $screenTitle;

    /**
     * 備考<br>
     * 文字列<br>
     * 256 バイト以内<br>
     * 備考(商品詳細など)<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　未使用
     * <li>Suica：　任意　※CR（復帰）、LF（改行）は使用不可
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $free;

    /**
     * Edy個別ギフト名称<br>
     * 文字列<br>
     * 32 バイト以内<br>
     * Edyギフト画面で表示されるギフト名称の後に、個別ギフト名称を指定します。<br>
     * <p>
     * <ul type="square">
     * <li>Edy：　任意　※未指定の場合、GWで決められた名称を表示します。
     * <li>Suica：　未使用
     * <li>WAON：　未使用
     * <li>nanaco：　未使用
     * <li>BitCash：　未使用
     * </ul>
     */
    private $edyGiftName;

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
     * オーダー種別を取得する<br>
     * @return string オーダー種別<br>
     */
    public function getOrderKind()
    {
        return $this->orderKind;
    }

    /**
     * オーダー種別を設定する<br>
     * @param string $orderKind オーダー種別<br>
     */
    public function setOrderKind($orderKind)
    {
        $this->orderKind = $orderKind;
    }

    /**
     * 返金対象取引IDを取得する<br>
     * @return string 返金対象取引ID<br>
     */
    public function getRefundOrderId()
    {
        return $this->refundOrderId;
    }

    /**
     * 返金対象取引IDを設定する<br>
     * @param string $refundOrderId 返金対象取引ID<br>
     */
    public function setRefundOrderId($refundOrderId)
    {
        $this->refundOrderId = $refundOrderId;
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
     * 取消通知メールアドレスを取得する<br>
     * @return string 取消通知メールアドレス<br>
     */
    public function getCancelMailAddr()
    {
        return $this->cancelMailAddr;
    }

    /**
     * 取消通知メールアドレスを設定する<br>
     * @param string $cancelMailAddr 取消通知メールアドレス<br>
     */
    public function setCancelMailAddr($cancelMailAddr)
    {
        $this->cancelMailAddr = $cancelMailAddr;
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
     * 依頼メール送信要否を取得する<br>
     * @return string 依頼メール送信要否<br>
     */
    public function getRequestMailFlag()
    {
        return $this->requestMailFlag;
    }

    /**
     * 依頼メール送信要否を設定する<br>
     * @param string $requestMailFlag 依頼メール送信要否<br>
     */
    public function setRequestMailFlag($requestMailFlag)
    {
        $this->requestMailFlag = $requestMailFlag;
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
     * Edy個別ギフト名称を取得する<br>
     * @return string Edy個別ギフト名称<br>
     */
    public function getEdyGiftName()
    {
        return $this->edyGiftName;
    }

    /**
     * Edy個別ギフト名称を設定する<br>
     * @param string $edyGiftName Edy個別ギフト名称<br>
     */
    public function setEdyGiftName($edyGiftName)
    {
        $this->edyGiftName = $edyGiftName;
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
