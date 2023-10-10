<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：楽天、コマンド名：取消の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RakutenCancelRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "rakuten";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Cancel";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * キャンセル対象の取引IDを指定する。<br/>
     */
    private $orderId;

    /**
     * 金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 減額する金額を指定する<br/>
     * <br/>
     * payType=0（オンライン決済）：売上前の場合は全額以外を指定できません。売上後は指定任意<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定できません<br/>
     * payType=2（オンライン決済（V2））:売上前の場合は全額以外を指定できません。売上後は指定任意。<br/>
     */
    private $amount;

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：36<br/>
     * 店舗番号を指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * payType=0（オンライン決済）：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     * payType=2（オンライン決済（V2））：指定できません<br/>
     */
    private $storeId;

    /**
     * 店舗端末ID<br>
     * 半角英数字<br/>
     * 最大桁数：36<br/>
     * 端末を識別するIDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     * <br/>
     * payType=0（オンライン決済）：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     * payType=2（オンライン決済（V2））：指定できません<br/>
     */
    private $terminalId;

    /**
     * キャンセル理由種別<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * キャンセル理由の種別を下記のコード値から指定します。<br/>
     * <br/>
     * - 10: 重複しての決済<br/>
     * - 11: 商品の返品<br/>
     * - 12: お支払方法の変更<br/>
     * - 13: 金額の間違い<br/>
     * - 14: テスト決済<br/>
     * - 98: 障害取消（タイムアウトなど）<br/>
     * - 99: その他<br/>
     * <br/>
     * payType=0（オンライン決済）：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定必須<br/>
     * payType=2（オンライン決済（V2））：指定できません<br/>
     */
    private $cancelType;

    /**
     * キャンセル理由詳細<br>
     * 文字列<br/>
     * 最大桁数：1024<br/>
     * キャンセル理由の詳細を記載します。<br/>
     * -最大文字数:1024byte<br/>
     * payType=0（オンライン決済）：指定できません<br/>
     * payType=1（バーコード決済（店舗スキャン型））：指定任意<br/>
     * payType=2（オンライン決済（V2））：指定できません<br/>
     */
    private $cancelReason;


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
     * 店舗端末IDを取得する<br>
     * @return string 店舗端末ID<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 店舗端末IDを設定する<br>
     * @param string $terminalId 店舗端末ID<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * キャンセル理由種別を取得する<br>
     * @return string キャンセル理由種別<br>
     */
    public function getCancelType()
    {
        return $this->cancelType;
    }

    /**
     * キャンセル理由種別を設定する<br>
     * @param string $cancelType キャンセル理由種別<br>
     */
    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;
    }

    /**
     * キャンセル理由詳細を取得する<br>
     * @return string キャンセル理由詳細<br>
     */
    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * キャンセル理由詳細を設定する<br>
     * @param string $cancelReason キャンセル理由詳細<br>
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;
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
