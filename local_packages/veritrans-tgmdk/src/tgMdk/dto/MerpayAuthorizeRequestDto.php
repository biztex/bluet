<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：merpay、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MerpayAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "merpay";

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
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * - "barcode":バーコード決済<br/>
     * - "online":オンライン決済<br/>
     */
    private $serviceOptionType;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 1000000(7桁) 以下<br/>
     * <br/>
     * ※accountingTypeが"1:随時" かつconsentAuthTypeが"0:承諾のみ"の場合は、0または未設定のみ許容する。<br/>
     */
    private $amount;

    /**
     * 課金種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * - 0:都度<br/>
     * - 1:随時<br/>
     * <br/>
     * serviceOptionType="barcode"（バーコード決済） ： 指定できません<br/>
     * serviceOptionType="online"（オンライン決済）    ： 指定任意※<br/>
     * ※オンライン決済で未指定の場合、"0"都度決済になります。<br/>
     */
    private $accountingType;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上<br/>
     * - false : 与信のみ("バーコード決済では指定不可")<br/>
     * ※バーコード決済で未指定の場合は、true:与信同時売上。  <br/>
     * ※オンライン決済で未指定の場合は、false:与信のみ。<br/>
     * ※accountingTypeが"1:随時"かつconsentAuthTypeが"0:承諾のみ"の場合、当項目は指定不可とする。<br/>
     */
    private $withCapture;

    /**
     * 店舗ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 店舗IDを指定します。<br/>
     * - 最大文字数:32byte<br/>
     */
    private $storeId;

    /**
     * 店舗端末ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 店舗端末IDを指定します。<br/>
     * - 最大文字数:32byte<br/>
     */
    private $terminalId;

    /**
     * 従業員ID<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * 従業員IDを指定します。<br/>
     * - 最大文字数:128byte<br/>
     */
    private $operatorId;

    /**
     * 伝票コード<br>
     * 半角英数字<br/>
     * 最大桁数：128<br/>
     * 伝票コードを指定します。<br/>
     * - 最大文字数:128byte<br/>
     */
    private $slipCode;

    /**
     * 決済成功URL<br>
     * 半角英数字記号<br/>
     * 最大桁数：256<br/>
     * 決済成功時の戻り先となるURL<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $successUrl;

    /**
     * 決済キャンセルURL<br>
     * 半角英数字記号<br/>
     * 最大桁数：256<br/>
     * 決済キャンセル時の戻り先となるURL<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $cancelUrl;

    /**
     * PUSH通知URL<br>
     * 半角英数字記号<br/>
     * 最大桁数：256<br/>
     * 決済結果を応答するPush通知先URL<br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $pushUrl;

    /**
     * ワンタイムコード<br>
     * 半角英数字記号<br/>
     * 最大桁数：4296<br/>
     * バーコード決済を利用する際のQRコード、バーコードの値を指定します。<br/>
     * 記号は、"+"(プラス)、"/"(スラッシュ)、"="(イコール)が使用可能です。<br/>
     */
    private $oneTimeCode;

    /**
     * 商品名<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：40<br/>
     * ※かんたん出品連携利用時は必須<br/>
     */
    private $name;

    /**
     * 商品説明<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：1000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     */
    private $description;

    /**
     * 商品画像URL1<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl1;

    /**
     * 商品画像URL2<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl2;

    /**
     * 商品画像URL3<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl3;

    /**
     * 商品画像URL4<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl4;

    /**
     * 商品画像URL5<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl5;

    /**
     * 商品画像URL6<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl6;

    /**
     * 商品画像URL7<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl7;

    /**
     * 商品画像URL8<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl8;

    /**
     * 商品画像URL9<br>
     * 半角英数字記号<br/>
     * 最大桁数：2000<br/>
     * ※かんたん出品連携利用時は必須<br/>
     * - ただし、やむを得ない場合のみ、メルペイ営業担当と相談の上、<br/>
     *    かんたん出品連携の利用が可能になる場合あり<br/>
     */
    private $imageUrl9;

    /**
     * カテゴリ名<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：40<br/>
     */
    private $category;

    /**
     * サイズ<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：20<br/>
     */
    private $size;

    /**
     * ブランド名<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：40<br/>
     */
    private $brand;

    /**
     * 色<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：32<br/>
     */
    private $color;

    /**
     * 定価<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * - 1 以上かつ 1000000(7桁) 以下<br/>
     */
    private $listPrice;

    /**
     * 購入時価格<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * - 1 以上かつ 1000000(7桁) 以下<br/>
     * ※かんたん出品連携利用時は必須<br/>
     */
    private $unitPrice;

    /**
     * 購入数<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * ※かんたん出品連携利用時は必須<br/>
     */
    private $quantity;

    /**
     * 製品管理コード(SKU)<br>
     * 半角英数字記号<br/>
     * 最大桁数：128<br/>
     * ※かんたん出品連携利用時は必須<br/>
     */
    private $itemCode;

    /**
     * JANコード<br>
     * 半角英数字<br/>
     * 最大桁数：13<br/>
     */
    private $janCode;

    /**
     * 商品カテゴリID<br>
     * 半角英数字<br/>
     * 最大桁数：4<br/>
     */
    private $categoryId;

    /**
     * 配送先情報フラグ<br>
     * 英字（boolean）<br/>
     * - true : merpayより配送先情報必要<br/>
     * - false : merpayより配送先情報不要<br/>
     * ※未指定の場合は、falseとする<br/>
     */
    private $useDeliveryAddress;

    /**
     * 購入者情報フラグ<br>
     * 英字（boolean）<br/>
     * - true : merpayより購入者情報必要<br/>
     * - false : merpayより購入者情報不要<br/>
     * ※未指定の場合は、falseとする<br/>
     */
    private $useBuyerInfo;

    /**
     * 提供サービス名<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：20<br/>
     * 随時決済の場合のみ設定<br/>
     */
    private $preapprovedServiceName;

    /**
     * 提供サービス説明<br>
     * 全半角かな英数字記号<br/>
     * 最大桁数：120<br/>
     * 随時決済の場合のみ設定<br/>
     */
    private $preapprovedServiceDescription;

    /**
     * ユーザエージェント<br>
     * 半角英数字記号<br/>
     * 最大桁数：1000<br/>
     */
    private $userAgent;

    /**
     * 承諾時決済タイプ<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * - 0 : 承諾のみ<br/>
     * - 1 : 承諾同時決済<br/>
     * <br/>
     * ※accountingTypeが"1:随時"の場合に限り、当項目は指定可能とする<br/>
     * ※未設定の場合は"0:承諾のみ"となります。<br/>
     */
    private $consentAuthType;


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
     * サービスオプションタイプを取得する<br>
     * @return string サービスオプションタイプ<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * サービスオプションタイプを設定する<br>
     * @param string $serviceOptionType サービスオプションタイプ<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
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
     * 課金種別を取得する<br>
     * @return string 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     * @param string $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 与信同時売上フラグを取得する<br>
     * @return string 与信同時売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 与信同時売上フラグを設定する<br>
     * @param string $withCapture 与信同時売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
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
     * 従業員IDを取得する<br>
     * @return string 従業員ID<br>
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * 従業員IDを設定する<br>
     * @param string $operatorId 従業員ID<br>
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
    }

    /**
     * 伝票コードを取得する<br>
     * @return string 伝票コード<br>
     */
    public function getSlipCode()
    {
        return $this->slipCode;
    }

    /**
     * 伝票コードを設定する<br>
     * @param string $slipCode 伝票コード<br>
     */
    public function setSlipCode($slipCode)
    {
        $this->slipCode = $slipCode;
    }

    /**
     * 決済成功URLを取得する<br>
     * @return string 決済成功URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 決済成功URLを設定する<br>
     * @param string $successUrl 決済成功URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 決済キャンセルURLを取得する<br>
     * @return string 決済キャンセルURL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 決済キャンセルURLを設定する<br>
     * @param string $cancelUrl 決済キャンセルURL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * PUSH通知URLを取得する<br>
     * @return string PUSH通知URL<br>
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * PUSH通知URLを設定する<br>
     * @param string $pushUrl PUSH通知URL<br>
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * ワンタイムコードを取得する<br>
     * @return string ワンタイムコード<br>
     */
    public function getOneTimeCode()
    {
        return $this->oneTimeCode;
    }

    /**
     * ワンタイムコードを設定する<br>
     * @param string $oneTimeCode ワンタイムコード<br>
     */
    public function setOneTimeCode($oneTimeCode)
    {
        $this->oneTimeCode = $oneTimeCode;
    }

    /**
     * 商品名を取得する<br>
     * @return string 商品名<br>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 商品名を設定する<br>
     * @param string $name 商品名<br>
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 商品説明を取得する<br>
     * @return string 商品説明<br>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 商品説明を設定する<br>
     * @param string $description 商品説明<br>
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 商品画像URL1を取得する<br>
     * @return string 商品画像URL1<br>
     */
    public function getImageUrl1()
    {
        return $this->imageUrl1;
    }

    /**
     * 商品画像URL1を設定する<br>
     * @param string $imageUrl1 商品画像URL1<br>
     */
    public function setImageUrl1($imageUrl1)
    {
        $this->imageUrl1 = $imageUrl1;
    }

    /**
     * 商品画像URL2を取得する<br>
     * @return string 商品画像URL2<br>
     */
    public function getImageUrl2()
    {
        return $this->imageUrl2;
    }

    /**
     * 商品画像URL2を設定する<br>
     * @param string $imageUrl2 商品画像URL2<br>
     */
    public function setImageUrl2($imageUrl2)
    {
        $this->imageUrl2 = $imageUrl2;
    }

    /**
     * 商品画像URL3を取得する<br>
     * @return string 商品画像URL3<br>
     */
    public function getImageUrl3()
    {
        return $this->imageUrl3;
    }

    /**
     * 商品画像URL3を設定する<br>
     * @param string $imageUrl3 商品画像URL3<br>
     */
    public function setImageUrl3($imageUrl3)
    {
        $this->imageUrl3 = $imageUrl3;
    }

    /**
     * 商品画像URL4を取得する<br>
     * @return string 商品画像URL4<br>
     */
    public function getImageUrl4()
    {
        return $this->imageUrl4;
    }

    /**
     * 商品画像URL4を設定する<br>
     * @param string $imageUrl4 商品画像URL4<br>
     */
    public function setImageUrl4($imageUrl4)
    {
        $this->imageUrl4 = $imageUrl4;
    }

    /**
     * 商品画像URL5を取得する<br>
     * @return string 商品画像URL5<br>
     */
    public function getImageUrl5()
    {
        return $this->imageUrl5;
    }

    /**
     * 商品画像URL5を設定する<br>
     * @param string $imageUrl5 商品画像URL5<br>
     */
    public function setImageUrl5($imageUrl5)
    {
        $this->imageUrl5 = $imageUrl5;
    }

    /**
     * 商品画像URL6を取得する<br>
     * @return string 商品画像URL6<br>
     */
    public function getImageUrl6()
    {
        return $this->imageUrl6;
    }

    /**
     * 商品画像URL6を設定する<br>
     * @param string $imageUrl6 商品画像URL6<br>
     */
    public function setImageUrl6($imageUrl6)
    {
        $this->imageUrl6 = $imageUrl6;
    }

    /**
     * 商品画像URL7を取得する<br>
     * @return string 商品画像URL7<br>
     */
    public function getImageUrl7()
    {
        return $this->imageUrl7;
    }

    /**
     * 商品画像URL7を設定する<br>
     * @param string $imageUrl7 商品画像URL7<br>
     */
    public function setImageUrl7($imageUrl7)
    {
        $this->imageUrl7 = $imageUrl7;
    }

    /**
     * 商品画像URL8を取得する<br>
     * @return string 商品画像URL8<br>
     */
    public function getImageUrl8()
    {
        return $this->imageUrl8;
    }

    /**
     * 商品画像URL8を設定する<br>
     * @param string $imageUrl8 商品画像URL8<br>
     */
    public function setImageUrl8($imageUrl8)
    {
        $this->imageUrl8 = $imageUrl8;
    }

    /**
     * 商品画像URL9を取得する<br>
     * @return string 商品画像URL9<br>
     */
    public function getImageUrl9()
    {
        return $this->imageUrl9;
    }

    /**
     * 商品画像URL9を設定する<br>
     * @param string $imageUrl9 商品画像URL9<br>
     */
    public function setImageUrl9($imageUrl9)
    {
        $this->imageUrl9 = $imageUrl9;
    }

    /**
     * カテゴリ名を取得する<br>
     * @return string カテゴリ名<br>
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * カテゴリ名を設定する<br>
     * @param string $category カテゴリ名<br>
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * サイズを取得する<br>
     * @return string サイズ<br>
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * サイズを設定する<br>
     * @param string $size サイズ<br>
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * ブランド名を取得する<br>
     * @return string ブランド名<br>
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * ブランド名を設定する<br>
     * @param string $brand ブランド名<br>
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * 色を取得する<br>
     * @return string 色<br>
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * 色を設定する<br>
     * @param string $color 色<br>
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * 定価を取得する<br>
     * @return string 定価<br>
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * 定価を設定する<br>
     * @param string $listPrice 定価<br>
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }

    /**
     * 購入時価格を取得する<br>
     * @return string 購入時価格<br>
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * 購入時価格を設定する<br>
     * @param string $unitPrice 購入時価格<br>
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * 購入数を取得する<br>
     * @return string 購入数<br>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * 購入数を設定する<br>
     * @param string $quantity 購入数<br>
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * 製品管理コード(SKU)を取得する<br>
     * @return string 製品管理コード(SKU)<br>
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * 製品管理コード(SKU)を設定する<br>
     * @param string $itemCode 製品管理コード(SKU)<br>
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
    }

    /**
     * JANコードを取得する<br>
     * @return string JANコード<br>
     */
    public function getJanCode()
    {
        return $this->janCode;
    }

    /**
     * JANコードを設定する<br>
     * @param string $janCode JANコード<br>
     */
    public function setJanCode($janCode)
    {
        $this->janCode = $janCode;
    }

    /**
     * 商品カテゴリIDを取得する<br>
     * @return string 商品カテゴリID<br>
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * 商品カテゴリIDを設定する<br>
     * @param string $categoryId 商品カテゴリID<br>
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * 配送先情報フラグを取得する<br>
     * @return string 配送先情報フラグ<br>
     */
    public function getUseDeliveryAddress()
    {
        return $this->useDeliveryAddress;
    }

    /**
     * 配送先情報フラグを設定する<br>
     * @param string $useDeliveryAddress 配送先情報フラグ<br>
     */
    public function setUseDeliveryAddress($useDeliveryAddress)
    {
        $this->useDeliveryAddress = $useDeliveryAddress;
    }

    /**
     * 購入者情報フラグを取得する<br>
     * @return string 購入者情報フラグ<br>
     */
    public function getUseBuyerInfo()
    {
        return $this->useBuyerInfo;
    }

    /**
     * 購入者情報フラグを設定する<br>
     * @param string $useBuyerInfo 購入者情報フラグ<br>
     */
    public function setUseBuyerInfo($useBuyerInfo)
    {
        $this->useBuyerInfo = $useBuyerInfo;
    }

    /**
     * 提供サービス名を取得する<br>
     * @return string 提供サービス名<br>
     */
    public function getPreapprovedServiceName()
    {
        return $this->preapprovedServiceName;
    }

    /**
     * 提供サービス名を設定する<br>
     * @param string $preapprovedServiceName 提供サービス名<br>
     */
    public function setPreapprovedServiceName($preapprovedServiceName)
    {
        $this->preapprovedServiceName = $preapprovedServiceName;
    }

    /**
     * 提供サービス説明を取得する<br>
     * @return string 提供サービス説明<br>
     */
    public function getPreapprovedServiceDescription()
    {
        return $this->preapprovedServiceDescription;
    }

    /**
     * 提供サービス説明を設定する<br>
     * @param string $preapprovedServiceDescription 提供サービス説明<br>
     */
    public function setPreapprovedServiceDescription($preapprovedServiceDescription)
    {
        $this->preapprovedServiceDescription = $preapprovedServiceDescription;
    }

    /**
     * ユーザエージェントを取得する<br>
     * @return string ユーザエージェント<br>
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * ユーザエージェントを設定する<br>
     * @param string $userAgent ユーザエージェント<br>
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * 承諾時決済タイプを取得する<br>
     * @return string 承諾時決済タイプ<br>
     */
    public function getConsentAuthType()
    {
        return $this->consentAuthType;
    }

    /**
     * 承諾時決済タイプを設定する<br>
     * @param string $consentAuthType 承諾時決済タイプ<br>
     */
    public function setConsentAuthType($consentAuthType)
    {
        $this->consentAuthType = $consentAuthType;
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
