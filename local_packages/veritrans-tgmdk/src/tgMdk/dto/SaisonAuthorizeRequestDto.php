<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Saison認可画面表示要求電文DTOクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class SaisonAuthorizeRequestDto extends AbstractPaymentRequestDto
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
    public $SERVICE_COMMAND = "Authorize";

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
     * 申込処理ごとに一意である必要があります。<br/>
     * ※半角英数字の他に"-"（ハイフン）、"_"（アンダースコア）も使用可能です。<br/>
     * 決済請求要求電文でカード決済金額が1以上でカード取引ＩＤが未設定の場合、<br/>
     * プレフィックス"saison"を付加して使用するため実際は90桁以内となる。<br/>
     */
    private $orderId;

    /**
     * マーチャントリダイレクションURI<br>
     * 半角英数字<br/>
     * 最大桁数：256<br/>
     * 認可処理後のリダイレクト先URI。指定なしの場合には予め登録されたデフォルトを採用する。<br/>
     */
    private $merchantRedirectionUri;

    /**
     * 決済方式<br>
     * 半角英数字<br/>
     * 最大桁数：2<br/>
     * "PC"：パソコン、"MB"：モバイル、"SP"：スマートフォン。<br/>
     */
    private $settlementMethod;


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
     * マーチャントリダイレクションURIを設定する<br>
     * @param string $merchantRedirectionUri マーチャントリダイレクションURI<br>
     */
    public function setMerchantRedirectionUri($merchantRedirectionUri)
    {
        $this->merchantRedirectionUri = $merchantRedirectionUri;
    }

    /**
     * マーチャントリダイレクションURIを取得する<br>
     * @return string マーチャントリダイレクションURI<br>
     */
    public function getMerchantRedirectionUri()
    {
        return $this->merchantRedirectionUri;
    }

    /**
     * 決済方式を設定する<br>
     * @param string $settlementMethod 決済方式<br>
     */
    public function setSettlementMethod($settlementMethod)
    {
        $this->settlementMethod = $settlementMethod;
    }

    /**
     * 決済方式を取得する<br>
     * @return string 決済方式<br>
     */
    public function getSettlementMethod()
    {
        return $this->settlementMethod;
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
