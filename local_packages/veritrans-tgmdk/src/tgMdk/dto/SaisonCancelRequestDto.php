<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Saison取消請求要求電文DTOクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class SaisonCancelRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    public $SERVICE_TYPE = "saison";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    public $SERVICE_COMMAND = "Cancel";

    /**
     * 決済サービスオプション<br>
     * 半角英数字<br/>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * 利用取消を行う取引ＩＤ。<br/>
     * ※半角英数字の他に"-"（ハイフン）、"_"（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * カード取消フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * 差額決済に紐付くカード決済も取り消すか否かのフラグ<br/>
     * 0： 永久不滅のみキャンセル<br/>
     * 1：永久不滅とカード決済の両方キャンセル<br/>
     */
    private $cardCancelFlag;


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
     * 決済サービスオプションを設定する<br>
     * @param string $serviceOptionType 決済サービスオプション<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
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
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
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
     * カード取消フラグを設定する<br>
     * @param string $cardCancelFlag カード取消フラグ<br>
     */
    public function setCardCancelFlag($cardCancelFlag)
    {
        $this->cardCancelFlag = $cardCancelFlag;
    }

    /**
     * カード取消フラグを取得する<br>
     * @return string カード取消フラグ<br>
     */
    public function getCardCancelFlag()
    {
        return $this->cardCancelFlag;
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
