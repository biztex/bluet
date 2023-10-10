<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Alipay、コマンド名：QRコード生成の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayCreateIdentityCodeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "alipay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "CreateIdentityCode";

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * 店舗IDを指定します。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $storeId;

    /**
     * 店舗名<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * 店舗名を指定します。<br/>
     * - 最大文字数：64byte<br/>
     */
    private $storeName;

    /**
     * タクシーオペレーションID<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * タクシーオペレーションIDを指定します。<br/>
     * ※タクシー事業者の場合は指定必須。<br/>
     * ※不明な場合はご連絡ください<br/>
     * - 最大文字数：64byte<br/>
     */
    private $taxiOperationId;

    /**
     * タクシーナンバー<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * タクシーナンバーを指定します。<br/>
     * ※タクシー事業者の場合は指定必須。<br/>
     * ※不明な場合はご連絡ください<br/>
     * - 最大文字数：64byte<br/>
     */
    private $taxiNumber;

    /**
     * タクシードライバー名<br>
     * 文字列<br/>
     * 最大桁数：64<br/>
     * タクシードライバー名を指定します。<br/>
     * ※タクシー事業者の場合は指定必須。<br/>
     * ※不明な場合はご連絡ください<br/>
     * - 最大文字数：64byte<br/>
     */
    private $taxiDriverName;

    /**
     * タクシードライバーモバイル<br>
     * 文字列<br/>
     * 最大桁数：32<br/>
     * タクシードライバーモバイル（携帯）を指定します。<br/>
     * ※タクシー事業者の場合は指定必須。<br/>
     * ※不明な場合はご連絡ください<br/>
     * - 最大文字数：32byte<br/>
     */
    private $taxiDriverMobile;


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
     * 店舗名を取得する<br>
     * @return string 店舗名<br>
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * 店舗名を設定する<br>
     * @param string $storeName 店舗名<br>
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }

    /**
     * タクシーオペレーションIDを取得する<br>
     * @return string タクシーオペレーションID<br>
     */
    public function getTaxiOperationId()
    {
        return $this->taxiOperationId;
    }

    /**
     * タクシーオペレーションIDを設定する<br>
     * @param string $taxiOperationId タクシーオペレーションID<br>
     */
    public function setTaxiOperationId($taxiOperationId)
    {
        $this->taxiOperationId = $taxiOperationId;
    }

    /**
     * タクシーナンバーを取得する<br>
     * @return string タクシーナンバー<br>
     */
    public function getTaxiNumber()
    {
        return $this->taxiNumber;
    }

    /**
     * タクシーナンバーを設定する<br>
     * @param string $taxiNumber タクシーナンバー<br>
     */
    public function setTaxiNumber($taxiNumber)
    {
        $this->taxiNumber = $taxiNumber;
    }

    /**
     * タクシードライバー名を取得する<br>
     * @return string タクシードライバー名<br>
     */
    public function getTaxiDriverName()
    {
        return $this->taxiDriverName;
    }

    /**
     * タクシードライバー名を設定する<br>
     * @param string $taxiDriverName タクシードライバー名<br>
     */
    public function setTaxiDriverName($taxiDriverName)
    {
        $this->taxiDriverName = $taxiDriverName;
    }

    /**
     * タクシードライバーモバイルを取得する<br>
     * @return string タクシードライバーモバイル<br>
     */
    public function getTaxiDriverMobile()
    {
        return $this->taxiDriverMobile;
    }

    /**
     * タクシードライバーモバイルを設定する<br>
     * @param string $taxiDriverMobile タクシードライバーモバイル<br>
     */
    public function setTaxiDriverMobile($taxiDriverMobile)
    {
        $this->taxiDriverMobile = $taxiDriverMobile;
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
