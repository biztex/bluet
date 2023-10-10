<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：楽天、コマンド名：与信変更の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RakutenUpdateAuthorizeRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "UpdateAuthorize";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 対象の取引IDを指定する<br/>
     */
    private $orderId;

    /**
     * 金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 変更後の決済金額を指定する<br/>
     */
    private $amount;

    /**
     * 与信延長フラグ<br>
     * 英字（boolean）<br/>
     * - true : 行う<br/>
     * - false: 行わない<br/>
     * 未指定の場合は、false:行わない。<br/>
     * <br/>
     * 与信期限を延長する場合は「true」としてください。<br/>
     */
    private $authExtensionFlag;


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
     * 与信延長フラグを取得する<br>
     * @return string 与信延長フラグ<br>
     */
    public function getAuthExtensionFlag()
    {
        return $this->authExtensionFlag;
    }

    /**
     * 与信延長フラグを設定する<br>
     * @param string $authExtensionFlag 与信延長フラグ<br>
     */
    public function setAuthExtensionFlag($authExtensionFlag)
    {
        $this->authExtensionFlag = $authExtensionFlag;
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
    public function __toString() {
        return (string)$this->maskedLog;
    }

}
