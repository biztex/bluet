<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Amazonpay、コマンド名：住所情報取得の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AmazonpayGetAddressRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "amazonpay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "GetAddress";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 住所情報取得対象の取引IDを指定する。<br/>
     */
    private $orderId;

    /**
     * 追加情報応答フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * 追加情報をレスポンスに含めるかどうかのフラグ<br/>
     * "0": 含めない<br/>
     * "1": 含める<br/>
     * ※未指定の場合、"0": 含めないを設定する<br/>
     */
    private $addInfoRespFlag;


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
     * 追加情報応答フラグを取得する<br>
     * @return string 追加情報応答フラグ<br>
     */
    public function getAddInfoRespFlag()
    {
        return $this->addInfoRespFlag;
    }

    /**
     * 追加情報応答フラグを設定する<br>
     * @param string $addInfoRespFlag 追加情報応答フラグ<br>
     */
    public function setAddInfoRespFlag($addInfoRespFlag)
    {
        $this->addInfoRespFlag = $addInfoRespFlag;
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
