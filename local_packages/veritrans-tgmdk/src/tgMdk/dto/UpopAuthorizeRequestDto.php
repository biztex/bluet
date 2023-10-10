<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：UPOP、コマンド名：与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class UpopAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "upop";

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
     * 最大桁数：12<br/>
     * 決済金額（日本円）を指定します。<br/>
     * 1 以上 999,999,999,999 以下<br/>
     */
    private $amount;

    /**
     * 売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上<br/>
     * - false: 与信のみ<br/>
     * ※ 未指定の場合は、false:与信のみ。<br/>
     */
    private $withCapture;

    /**
     * 決済結果戻り先URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 決済完了後に、店舗側へ遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     */
    private $termUrl;

    /**
     * 消費者IPアドレス<br>
     * IP(半角)<br/>
     * 最大桁数：40<br/>
     * 消費者側のIPアドレスを指定します。<br/>
     * ※ IPV6の形式も対応しています。<br/>
     */
    private $customerIp;


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
     * 売上フラグを取得する<br>
     * @return string 売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 売上フラグを設定する<br>
     * @param string $withCapture 売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
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
     * 消費者IPアドレスを取得する<br>
     * @return string 消費者IPアドレス<br>
     */
    public function getCustomerIp()
    {
        return $this->customerIp;
    }

    /**
     * 消費者IPアドレスを設定する<br>
     * @param string $customerIp 消費者IPアドレス<br>
     */
    public function setCustomerIp($customerIp)
    {
        $this->customerIp = $customerIp;
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
