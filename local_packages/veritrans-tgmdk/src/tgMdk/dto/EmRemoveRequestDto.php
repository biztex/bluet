<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：電子マネー、コマンド名：カード削除の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class EmRemoveRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "Remove";

    /**
     * 決済サービスオプション<br>
     * 半角英数字<br/>
     * 決済手段を指定します。<br/>
     * <p>
     * <b>Edy</b>
     * <ul type="square">
     * <li>未使用
     * </ul>
     *
     * <b>Suica</b>
     * <ul type="square">
     * <li>未使用
     * </ul>
     *
     * <b>WAON</b>
     * <ul type="square">
     * <li>未使用
     * </ul>
     *
     * <b>nanaco</b>
     * <ul type="square">
     * <li>"tcc-redirect"：　nanaco決済
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
     */
    private $orderId;

    /**
     * ユーザID<br>
     * 半角英数字記号<br>
     * 64 文字以内<br>
     * ユーザID<br>
     */
    private $userId;

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
