<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：スコア@払い、コマンド名：決済確定の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class ScoreatpayCaptureRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "scoreatpay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Capture";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 決済確定対象の取引IDを指定します。<br/>
     */
    private $orderId;

    /**
     * 運送会社コード<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 運送会社に該当する2桁の数字を指定します。<br/>
     *  - 11：佐川急便<br/>
     *  - 12：ヤマト運輸・クロネコメール便<br/>
     *  - 13：日本通運<br/>
     *  - 14：西濃運輸<br/>
     *  - 15：郵便書留<br/>
     *  - 16：郵パック<br/>
     *  - 17：セイノースーパーエクスプレス<br/>
     *  - 18：福山通運<br/>
     *  - 20：新潟運輸<br/>
     *  - 21：名鉄運輸<br/>
     *  - 23：信州名鉄運輸<br/>
     *  - 26：トールエクスプレスジャパン<br/>
     *  - 27：エコ配<br/>
     *  - 28：翌朝10時郵便<br/>
     *  - 29：トナミ運輸<br/>
     *  - 99：その他　※どの運送会社にも該当しない場合使用<br/>
     */
    private $pdCompanyCode;

    /**
     * 配送伝票番号<br>
     * 半角数字記号<br/>
     * 最大桁数：20<br/>
     * ハイフン以外の記号は利用しないでください。<br/>
     */
    private $slipNo;

    /**
     * 配送先ID<br>
     * 文字列<br/>
     * 最大桁数：25<br/>
     * ScoreatpayAuthorizeRequestDtoで設定した値を設定します。<br/>
     */
    private $deliveryId;


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
     * 運送会社コードを取得する<br>
     * @return string 運送会社コード<br>
     */
    public function getPdCompanyCode()
    {
        return $this->pdCompanyCode;
    }

    /**
     * 運送会社コードを設定する<br>
     * @param string $pdCompanyCode 運送会社コード<br>
     */
    public function setPdCompanyCode($pdCompanyCode)
    {
        $this->pdCompanyCode = $pdCompanyCode;
    }

    /**
     * 配送伝票番号を取得する<br>
     * @return string 配送伝票番号<br>
     */
    public function getSlipNo()
    {
        return $this->slipNo;
    }

    /**
     * 配送伝票番号を設定する<br>
     * @param string $slipNo 配送伝票番号<br>
     */
    public function setSlipNo($slipNo)
    {
        $this->slipNo = $slipNo;
    }

    /**
     * 配送先IDを取得する<br>
     * @return string 配送先ID<br>
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * 配送先IDを設定する<br>
     * @param string $deliveryId 配送先ID<br>
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
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
