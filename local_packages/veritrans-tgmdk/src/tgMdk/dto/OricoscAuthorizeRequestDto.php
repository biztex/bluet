<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：ショッピングクレジット画面表示要求電文DTOクラス<br>
 *
 * @author Created automatically by DtoCreator
 *
 */
class OricoscAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    public $SERVICE_TYPE = "oricosc";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    public $SERVICE_COMMAND = "Authorize";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * 申込処理ごとに一意である必要があります。<br/>
     * ※半角英数字の他に"-"（ハイフン）、"_"（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * マーチャントリダイレクションURL<br>
     * 半角英数字<br/>
     * 最大桁数：256<br/>
     * 決済完了後のリダイレクト先URL。<br/>
     */
    private $merchantRedirectionUrl;

    /**
     * 注文番号<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * マーチャント側で取引を表す個品割賦用の注文番号を指定します。<br/>
     */
    private $oricoOrderNo;

    /**
     * 会員番号（加盟店）<br>
     * 半角英数記号<br/>
     * 最大桁数：20<br/>
     * マーチャントが会員を管理したい際に利用します。<br/>
     */
    private $userNo;

    /**
     * 商品名１<br>
     * 全角半角英数記号<br/>
     * 最大桁数：256<br/>
     */
    private $itemName1;

    /**
     * 数量１<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     */
    private $itemCount1;

    /**
     * 商品価格１（税込）<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     */
    private $itemAmount1;

    /**
     * 商品名２<br>
     * 全角半角英数記号<br/>
     * 最大桁数：256<br/>
     * 数量２、商品価格２(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemName2;

    /**
     * 数量２<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 商品名２、商品価格２(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemCount2;

    /**
     * 商品価格２（税込）<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * 商品名２、数量２のどちらかが指定されている場合、必須<br/>
     */
    private $itemAmount2;

    /**
     * 商品名３<br>
     * 全角半角英数記号<br/>
     * 最大桁数：256<br/>
     * 数量３、商品価格３(税込)がのどちらかが指定されている場合、必須<br/>
     */
    private $itemName3;

    /**
     * 数量３<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 商品名３、商品価格３(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemCount3;

    /**
     * 商品価格３（税込）<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * 商品名３、数量３のどちらかが指定されている場合、必須<br/>
     */
    private $itemAmount3;

    /**
     * 商品名４<br>
     * 全角半角英数記号<br/>
     * 最大桁数：256<br/>
     * 数量４、商品価格４(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemName4;

    /**
     * 数量４<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 商品名４、商品価格４(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemCount4;

    /**
     * 商品価格４（税込）<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * 商品名４、数量４のどちらかが指定されている場合、必須<br/>
     */
    private $itemAmount4;

    /**
     * 商品名５<br>
     * 全角半角英数記号<br/>
     * 最大桁数：256<br/>
     * 数量５、商品価格５(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemName5;

    /**
     * 数量５<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 商品名５、商品価格５(税込)のどちらかが指定されている場合、必須<br/>
     */
    private $itemCount5;

    /**
     * 商品価格５（税込）<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * 商品名５、数量５のどちらかが指定されている場合、必須<br/>
     */
    private $itemAmount5;

    /**
     * 商品価格合計（税込）<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * オリコマーチャント管理．支払合計金額最小値以上<br/>
     */
    private $totalItemAmount;

    /**
     * 送料合計（税込）<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 指定なしの場合は0として扱う。<br/>
     */
    private $totalCarriage;

    /**
     * 支払合計金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * オリコマーチャント管理．支払合計金額最小値以上<br/>
     */
    private $amount;

    /**
     * 頭金<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 指定なしの場合は0として扱う。<br/>
     */
    private $deposit;

    /**
     * 配送先郵便番号<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * ハイフン含む（999-9999 形式）<br/>
     */
    private $shippingZipCode;

    /**
     * 取扱契約番号<br>
     * 半角英数字<br/>
     * 最大桁数：3<br/>
     */
    private $handlingContractNo;

    /**
     * 加盟店番号<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     */
    private $memberStoreNo;

    /**
     * 契約書有無区分<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     */
    private $contractDocumentKbn;

    /**
     * WEB申込商品ID<br>
     * 半角英数字<br/>
     * 最大桁数：4<br/>
     */
    private $webDescriptionId;


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
     * マーチャントリダイレクションURLを設定する<br>
     * @param string $merchantRedirectionUrl マーチャントリダイレクションURL<br>
     */
    public function setMerchantRedirectionUrl($merchantRedirectionUrl)
    {
        $this->merchantRedirectionUrl = $merchantRedirectionUrl;
    }

    /**
     * マーチャントリダイレクションURLを取得する<br>
     * @return string マーチャントリダイレクションURL<br>
     */
    public function getMerchantRedirectionUrl()
    {
        return $this->merchantRedirectionUrl;
    }

    /**
     * 注文番号を設定する<br>
     * @param string $oricoOrderNo 注文番号<br>
     */
    public function setOricoOrderNo($oricoOrderNo)
    {
        $this->oricoOrderNo = $oricoOrderNo;
    }

    /**
     * 注文番号を取得する<br>
     * @return string 注文番号<br>
     */
    public function getOricoOrderNo()
    {
        return $this->oricoOrderNo;
    }

    /**
     * 会員番号（加盟店）を設定する<br>
     * @param string $userNo 会員番号（加盟店）<br>
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
    }

    /**
     * 会員番号（加盟店）を取得する<br>
     * @return string 会員番号（加盟店）<br>
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * 商品名１を設定する<br>
     * @param string $itemName1 商品名１<br>
     */
    public function setItemName1($itemName1)
    {
        $this->itemName1 = $itemName1;
    }

    /**
     * 商品名１を取得する<br>
     * @return string 商品名１<br>
     */
    public function getItemName1()
    {
        return $this->itemName1;
    }

    /**
     * 数量１を設定する<br>
     * @param string $itemCount1 数量１<br>
     */
    public function setItemCount1($itemCount1)
    {
        $this->itemCount1 = $itemCount1;
    }

    /**
     * 数量１を取得する<br>
     * @return string 数量１<br>
     */
    public function getItemCount1()
    {
        return $this->itemCount1;
    }

    /**
     * 商品価格１（税込）を設定する<br>
     * @param string $itemAmount1 商品価格１（税込）<br>
     */
    public function setItemAmount1($itemAmount1)
    {
        $this->itemAmount1 = $itemAmount1;
    }

    /**
     * 商品価格１（税込）を取得する<br>
     * @return string 商品価格１（税込）<br>
     */
    public function getItemAmount1()
    {
        return $this->itemAmount1;
    }

    /**
     * 商品名２を設定する<br>
     * @param string $itemName2 商品名２<br>
     */
    public function setItemName2($itemName2)
    {
        $this->itemName2 = $itemName2;
    }

    /**
     * 商品名２を取得する<br>
     * @return string 商品名２<br>
     */
    public function getItemName2()
    {
        return $this->itemName2;
    }

    /**
     * 数量２を設定する<br>
     * @param string $itemCount2 数量２<br>
     */
    public function setItemCount2($itemCount2)
    {
        $this->itemCount2 = $itemCount2;
    }

    /**
     * 数量２を取得する<br>
     * @return string 数量２<br>
     */
    public function getItemCount2()
    {
        return $this->itemCount2;
    }

    /**
     * 商品価格２（税込）を設定する<br>
     * @param string $itemAmount2 商品価格２（税込）<br>
     */
    public function setItemAmount2($itemAmount2)
    {
        $this->itemAmount2 = $itemAmount2;
    }

    /**
     * 商品価格２（税込）を取得する<br>
     * @return string 商品価格２（税込）<br>
     */
    public function getItemAmount2()
    {
        return $this->itemAmount2;
    }

    /**
     * 商品名３を設定する<br>
     * @param string $itemName3 商品名３<br>
     */
    public function setItemName3($itemName3)
    {
        $this->itemName3 = $itemName3;
    }

    /**
     * 商品名３を取得する<br>
     * @return string 商品名３<br>
     */
    public function getItemName3()
    {
        return $this->itemName3;
    }

    /**
     * 数量３を設定する<br>
     * @param string $itemCount3 数量３<br>
     */
    public function setItemCount3($itemCount3)
    {
        $this->itemCount3 = $itemCount3;
    }

    /**
     * 数量３を取得する<br>
     * @return string 数量３<br>
     */
    public function getItemCount3()
    {
        return $this->itemCount3;
    }

    /**
     * 商品価格３（税込）を設定する<br>
     * @param string $itemAmount3 商品価格３（税込）<br>
     */
    public function setItemAmount3($itemAmount3)
    {
        $this->itemAmount3 = $itemAmount3;
    }

    /**
     * 商品価格３（税込）を取得する<br>
     * @return string 商品価格３（税込）<br>
     */
    public function getItemAmount3()
    {
        return $this->itemAmount3;
    }

    /**
     * 商品名４を設定する<br>
     * @param string $itemName4 商品名４<br>
     */
    public function setItemName4($itemName4)
    {
        $this->itemName4 = $itemName4;
    }

    /**
     * 商品名４を取得する<br>
     * @return string 商品名４<br>
     */
    public function getItemName4()
    {
        return $this->itemName4;
    }

    /**
     * 数量４を設定する<br>
     * @param string $itemCount4 数量４<br>
     */
    public function setItemCount4($itemCount4)
    {
        $this->itemCount4 = $itemCount4;
    }

    /**
     * 数量４を取得する<br>
     * @return string 数量４<br>
     */
    public function getItemCount4()
    {
        return $this->itemCount4;
    }

    /**
     * 商品価格４（税込）を設定する<br>
     * @param string $itemAmount4 商品価格４（税込）<br>
     */
    public function setItemAmount4($itemAmount4)
    {
        $this->itemAmount4 = $itemAmount4;
    }

    /**
     * 商品価格４（税込）を取得する<br>
     * @return string 商品価格４（税込）<br>
     */
    public function getItemAmount4()
    {
        return $this->itemAmount4;
    }

    /**
     * 商品名５を設定する<br>
     * @param string $itemName5 商品名５<br>
     */
    public function setItemName5($itemName5)
    {
        $this->itemName5 = $itemName5;
    }

    /**
     * 商品名５を取得する<br>
     * @return string 商品名５<br>
     */
    public function getItemName5()
    {
        return $this->itemName5;
    }

    /**
     * 数量５を設定する<br>
     * @param string $itemCount5 数量５<br>
     */
    public function setItemCount5($itemCount5)
    {
        $this->itemCount5 = $itemCount5;
    }

    /**
     * 数量５を取得する<br>
     * @return string 数量５<br>
     */
    public function getItemCount5()
    {
        return $this->itemCount5;
    }

    /**
     * 商品価格５（税込）を設定する<br>
     * @param string $itemAmount5 商品価格５（税込）<br>
     */
    public function setItemAmount5($itemAmount5)
    {
        $this->itemAmount5 = $itemAmount5;
    }

    /**
     * 商品価格５（税込）を取得する<br>
     * @return string 商品価格５（税込）<br>
     */
    public function getItemAmount5()
    {
        return $this->itemAmount5;
    }

    /**
     * 商品価格合計（税込）を設定する<br>
     * @param string $totalItemAmount 商品価格合計（税込）<br>
     */
    public function setTotalItemAmount($totalItemAmount)
    {
        $this->totalItemAmount = $totalItemAmount;
    }

    /**
     * 商品価格合計（税込）を取得する<br>
     * @return string 商品価格合計（税込）<br>
     */
    public function getTotalItemAmount()
    {
        return $this->totalItemAmount;
    }

    /**
     * 送料合計（税込）を設定する<br>
     * @param string $totalCarriage 送料合計（税込）<br>
     */
    public function setTotalCarriage($totalCarriage)
    {
        $this->totalCarriage = $totalCarriage;
    }

    /**
     * 送料合計（税込）を取得する<br>
     * @return string 送料合計（税込）<br>
     */
    public function getTotalCarriage()
    {
        return $this->totalCarriage;
    }

    /**
     * 支払合計金額を設定する<br>
     * @param string $amount 支払合計金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 支払合計金額を取得する<br>
     * @return string 支払合計金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 頭金を設定する<br>
     * @param string $deposit 頭金<br>
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;
    }

    /**
     * 頭金を取得する<br>
     * @return string 頭金<br>
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * 配送先郵便番号を設定する<br>
     * @param string $shippingZipCode 配送先郵便番号<br>
     */
    public function setShippingZipCode($shippingZipCode)
    {
        $this->shippingZipCode = $shippingZipCode;
    }

    /**
     * 配送先郵便番号を取得する<br>
     * @return string 配送先郵便番号<br>
     */
    public function getShippingZipCode()
    {
        return $this->shippingZipCode;
    }

    /**
     * 取扱契約番号を設定する<br>
     * @param string $handlingContractNo 取扱契約番号<br>
     */
    public function setHandlingContractNo($handlingContractNo)
    {
        $this->handlingContractNo = $handlingContractNo;
    }

    /**
     * 取扱契約番号を取得する<br>
     * @return string 取扱契約番号<br>
     */
    public function getHandlingContractNo()
    {
        return $this->handlingContractNo;
    }

    /**
     * 加盟店番号を設定する<br>
     * @param string $memberStoreNo 加盟店番号<br>
     */
    public function setMemberStoreNo($memberStoreNo)
    {
        $this->memberStoreNo = $memberStoreNo;
    }

    /**
     * 加盟店番号を取得する<br>
     * @return string 加盟店番号<br>
     */
    public function getMemberStoreNo()
    {
        return $this->memberStoreNo;
    }

    /**
     * 契約書有無区分を設定する<br>
     * @param string $contractDocumentKbn 契約書有無区分<br>
     */
    public function setContractDocumentKbn($contractDocumentKbn)
    {
        $this->contractDocumentKbn = $contractDocumentKbn;
    }

    /**
     * 契約書有無区分を取得する<br>
     * @return string 契約書有無区分<br>
     */
    public function getContractDocumentKbn()
    {
        return $this->contractDocumentKbn;
    }

    /**
     * WEB申込商品IDを設定する<br>
     * @param string $webDescriptionId WEB申込商品ID<br>
     */
    public function setWebDescriptionId($webDescriptionId)
    {
        $this->webDescriptionId = $webDescriptionId;
    }

    /**
     * WEB申込商品IDを取得する<br>
     * @return string WEB申込商品ID<br>
     */
    public function getWebDescriptionId()
    {
        return $this->webDescriptionId;
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
