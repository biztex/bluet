<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：MasterPass、コマンド名：認証の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MasterpassLoginRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "masterpass";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Login";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：80<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 合計金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 各商品金額の合計<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     */
    private $itemAmount;

    /**
     * 商品番号<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * マーチャントシステム内で商品やサービスを特定するID<br/>
     */
    private $itemId;

    /**
     * 表示用商品説明1<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明1<br/>
     * - 100文字以内<br/>
     */
    private $description1;

    /**
     * 表示用商品金額1<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額1を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     */
    private $value1;

    /**
     * 表示用商品数量1<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量1を指定します。<br/>
     * 1以上<br/>
     */
    private $quantity1;

    /**
     * 表示用商品イメージURL1<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL1<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl1;

    /**
     * 表示用商品説明2<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明2<br/>
     * - 100文字以内<br/>
     * 表示用商品金額2、表示用商品数量2、表示用商品イメージURL2のいずれかが指定されている場合、必須<br/>
     */
    private $description2;

    /**
     * 表示用商品金額2<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額2を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明2、表示用商品数量2、表示用商品イメージURL2のいずれかが指定されている場合、必須<br/>
     */
    private $value2;

    /**
     * 表示用商品数量2<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量2を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明2、表示用商品金額2、表示用商品イメージURL2のいずれかが指定されている場合、必須<br/>
     */
    private $quantity2;

    /**
     * 表示用商品イメージURL2<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL2<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl2;

    /**
     * 表示用商品説明3<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明3<br/>
     * - 100文字以内<br/>
     * 表示用商品金額3、表示用商品数量3、表示用商品イメージURL3のいずれかが指定されている場合、必須<br/>
     */
    private $description3;

    /**
     * 表示用商品金額3<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額3を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明3、表示用商品数量3、表示用商品イメージURL3のいずれかが指定されている場合、必須<br/>
     */
    private $value3;

    /**
     * 表示用商品数量3<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量3を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明3、表示用商品金額3、表示用商品イメージURL3のいずれかが指定されている場合、必須<br/>
     */
    private $quantity3;

    /**
     * 表示用商品イメージURL3<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL3<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl3;

    /**
     * 表示用商品説明4<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明4<br/>
     * - 100文字以内<br/>
     * 表示用商品金額4、表示用商品数量4、表示用商品イメージURL4のいずれかが指定されている場合、必須<br/>
     */
    private $description4;

    /**
     * 表示用商品金額4<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額4を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明4、表示用商品数量4、表示用商品イメージURL4のいずれかが指定されている場合、必須<br/>
     */
    private $value4;

    /**
     * 表示用商品数量4<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量4を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明4、表示用商品金額4、表示用商品イメージURL4のいずれかが指定されている場合、必須<br/>
     */
    private $quantity4;

    /**
     * 表示用商品イメージURL4<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL4<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl4;

    /**
     * 表示用商品説明5<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明5<br/>
     * - 100文字以内<br/>
     * 表示用商品金額5、表示用商品数量5、表示用商品イメージURL5のいずれかが指定されている場合、必須<br/>
     */
    private $description5;

    /**
     * 表示用商品金額5<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額5を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明5、表示用商品数量5、表示用商品イメージURL5のいずれかが指定されている場合、必須<br/>
     */
    private $value5;

    /**
     * 表示用商品数量5<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量5を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明5、表示用商品金額5、表示用商品イメージURL5のいずれかが指定されている場合、必須<br/>
     */
    private $quantity5;

    /**
     * 表示用商品イメージURL5<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL5<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl5;

    /**
     * 表示用商品説明6<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明6<br/>
     * - 100文字以内<br/>
     * 表示用商品金額6、表示用商品数量6、表示用商品イメージURL6のいずれかが指定されている場合、必須<br/>
     */
    private $description6;

    /**
     * 表示用商品金額6<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額6を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明6、表示用商品数量6、表示用商品イメージURL6のいずれかが指定されている場合、必須<br/>
     */
    private $value6;

    /**
     * 表示用商品数量6<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量6を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明6、表示用商品金額6、表示用商品イメージURL6のいずれかが指定されている場合、必須<br/>
     */
    private $quantity6;

    /**
     * 表示用商品イメージURL6<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL6<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl6;

    /**
     * 表示用商品説明7<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明7<br/>
     * - 100文字以内<br/>
     * 表示用商品金額7、表示用商品数量7、表示用商品イメージURL7のいずれかが指定されている場合、必須<br/>
     */
    private $description7;

    /**
     * 表示用商品金額7<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額7を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明7、表示用商品数量7、表示用商品イメージURL7のいずれかが指定されている場合、必須<br/>
     */
    private $value7;

    /**
     * 表示用商品数量7<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量7を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明7、表示用商品金額7、表示用商品イメージURL7のいずれかが指定されている場合、必須<br/>
     */
    private $quantity7;

    /**
     * 表示用商品イメージURL7<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL7<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl7;

    /**
     * 表示用商品説明8<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明8<br/>
     * - 100文字以内<br/>
     * 表示用商品金額8、表示用商品数量8、表示用商品イメージURL8のいずれかが指定されている場合、必須<br/>
     */
    private $description8;

    /**
     * 表示用商品金額8<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額8を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明8、表示用商品数量8、表示用商品イメージURL8のいずれかが指定されている場合、必須<br/>
     */
    private $value8;

    /**
     * 表示用商品数量8<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量8を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明8、表示用商品金額8、表示用商品イメージURL8のいずれかが指定されている場合、必須<br/>
     */
    private $quantity8;

    /**
     * 表示用商品イメージURL8<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL8<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl8;

    /**
     * 表示用商品説明9<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明9<br/>
     * - 100文字以内<br/>
     * 表示用商品金額9、表示用商品数量9、表示用商品イメージURL9のいずれかが指定されている場合、必須<br/>
     */
    private $description9;

    /**
     * 表示用商品金額9<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額9を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明9、表示用商品数量9、表示用商品イメージURL9のいずれかが指定されている場合、必須<br/>
     */
    private $value9;

    /**
     * 表示用商品数量9<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量9を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明9、表示用商品金額9、表示用商品イメージURL9のいずれかが指定されている場合、必須<br/>
     */
    private $quantity9;

    /**
     * 表示用商品イメージURL9<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL9<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl9;

    /**
     * 表示用商品説明10<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 表示用商品説明10<br/>
     * - 100文字以内<br/>
     * 表示用商品金額10、表示用商品数量10、表示用商品イメージURL10のいずれかが指定されている場合、必須<br/>
     */
    private $description10;

    /**
     * 表示用商品金額10<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 表示用商品金額10を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     * 表示用商品説明10、表示用商品数量10、表示用商品イメージURL10のいずれかが指定されている場合、必須<br/>
     */
    private $value10;

    /**
     * 表示用商品数量10<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * 表示用商品数量10を指定します。<br/>
     * 1以上<br/>
     * 表示用商品説明10、表示用商品金額10、表示用商品イメージURL10のいずれかが指定されている場合、必須<br/>
     */
    private $quantity10;

    /**
     * 表示用商品イメージURL10<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * 表示用商品のイメージ画像のURL10<br/>
     * ※MasterPassでユーザ認証時に表示されます<br/>
     */
    private $imageUrl10;

    /**
     * 配送先抑止フラグ<br>
     * 英字（boolean）<br/>
     * - true : 配送先表示抑止<br/>
     * - false: 配送先表示<br/>
     * ※ 未指定の場合は、false:配送先表示。<br/>
     */
    private $suppressShippingAddress;

    /**
     * 配送先許可エリア<br>
     * 半角英字<br/>
     * 最大桁数：256<br/>
     * 配送先を許可する国名をカンマ区切りで指定します。<br/>
     * - 半角256文字以内<br/>
     * 例） "USA,JPN" など<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $shippingLocationProfile;

    /**
     * 3Dセキュア<br>
     * 英字（boolean）<br/>
     * - true : 3Dセキュア<br/>
     * - false: 3Dセキュアなし<br/>
     * ※ 未指定の場合は、false:3Dセキュアなし。<br/>
     */
    private $d3Flag;

    /**
     * 認証完了時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * ユーザ認証完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $successUrl;

    /**
     * 認証キャンセル時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * ユーザ認証キャンセル後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $cancelUrl;

    /**
     * 認証エラー時URL<br>
     * URL(半角)<br/>
     * 最大桁数：256<br/>
     * ユーザ認証エラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * - 半角256文字以内<br/>
     * <br/>
     * ※ 未指定の場合は、マーチャント登録時に設定した値を使用<br/>
     */
    private $errorUrl;


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
     * 合計金額を取得する<br>
     * @return string 合計金額<br>
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    /**
     * 合計金額を設定する<br>
     * @param string $itemAmount 合計金額<br>
     */
    public function setItemAmount($itemAmount)
    {
        $this->itemAmount = $itemAmount;
    }

    /**
     * 商品番号を取得する<br>
     * @return string 商品番号<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品番号を設定する<br>
     * @param string $itemId 商品番号<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * 表示用商品説明1を取得する<br>
     * @return string 表示用商品説明1<br>
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * 表示用商品説明1を設定する<br>
     * @param string $description1 表示用商品説明1<br>
     */
    public function setDescription1($description1)
    {
        $this->description1 = $description1;
    }

    /**
     * 表示用商品金額1を取得する<br>
     * @return string 表示用商品金額1<br>
     */
    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * 表示用商品金額1を設定する<br>
     * @param string $value1 表示用商品金額1<br>
     */
    public function setValue1($value1)
    {
        $this->value1 = $value1;
    }

    /**
     * 表示用商品数量1を取得する<br>
     * @return string 表示用商品数量1<br>
     */
    public function getQuantity1()
    {
        return $this->quantity1;
    }

    /**
     * 表示用商品数量1を設定する<br>
     * @param string $quantity1 表示用商品数量1<br>
     */
    public function setQuantity1($quantity1)
    {
        $this->quantity1 = $quantity1;
    }

    /**
     * 表示用商品イメージURL1を取得する<br>
     * @return string 表示用商品イメージURL1<br>
     */
    public function getImageUrl1()
    {
        return $this->imageUrl1;
    }

    /**
     * 表示用商品イメージURL1を設定する<br>
     * @param string $imageUrl1 表示用商品イメージURL1<br>
     */
    public function setImageUrl1($imageUrl1)
    {
        $this->imageUrl1 = $imageUrl1;
    }

    /**
     * 表示用商品説明2を取得する<br>
     * @return string 表示用商品説明2<br>
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * 表示用商品説明2を設定する<br>
     * @param string $description2 表示用商品説明2<br>
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;
    }

    /**
     * 表示用商品金額2を取得する<br>
     * @return string 表示用商品金額2<br>
     */
    public function getValue2()
    {
        return $this->value2;
    }

    /**
     * 表示用商品金額2を設定する<br>
     * @param string $value2 表示用商品金額2<br>
     */
    public function setValue2($value2)
    {
        $this->value2 = $value2;
    }

    /**
     * 表示用商品数量2を取得する<br>
     * @return string 表示用商品数量2<br>
     */
    public function getQuantity2()
    {
        return $this->quantity2;
    }

    /**
     * 表示用商品数量2を設定する<br>
     * @param string $quantity2 表示用商品数量2<br>
     */
    public function setQuantity2($quantity2)
    {
        $this->quantity2 = $quantity2;
    }

    /**
     * 表示用商品イメージURL2を取得する<br>
     * @return string 表示用商品イメージURL2<br>
     */
    public function getImageUrl2()
    {
        return $this->imageUrl2;
    }

    /**
     * 表示用商品イメージURL2を設定する<br>
     * @param string $imageUrl2 表示用商品イメージURL2<br>
     */
    public function setImageUrl2($imageUrl2)
    {
        $this->imageUrl2 = $imageUrl2;
    }

    /**
     * 表示用商品説明3を取得する<br>
     * @return string 表示用商品説明3<br>
     */
    public function getDescription3()
    {
        return $this->description3;
    }

    /**
     * 表示用商品説明3を設定する<br>
     * @param string $description3 表示用商品説明3<br>
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;
    }

    /**
     * 表示用商品金額3を取得する<br>
     * @return string 表示用商品金額3<br>
     */
    public function getValue3()
    {
        return $this->value3;
    }

    /**
     * 表示用商品金額3を設定する<br>
     * @param string $value3 表示用商品金額3<br>
     */
    public function setValue3($value3)
    {
        $this->value3 = $value3;
    }

    /**
     * 表示用商品数量3を取得する<br>
     * @return string 表示用商品数量3<br>
     */
    public function getQuantity3()
    {
        return $this->quantity3;
    }

    /**
     * 表示用商品数量3を設定する<br>
     * @param string $quantity3 表示用商品数量3<br>
     */
    public function setQuantity3($quantity3)
    {
        $this->quantity3 = $quantity3;
    }

    /**
     * 表示用商品イメージURL3を取得する<br>
     * @return string 表示用商品イメージURL3<br>
     */
    public function getImageUrl3()
    {
        return $this->imageUrl3;
    }

    /**
     * 表示用商品イメージURL3を設定する<br>
     * @param string $imageUrl3 表示用商品イメージURL3<br>
     */
    public function setImageUrl3($imageUrl3)
    {
        $this->imageUrl3 = $imageUrl3;
    }

    /**
     * 表示用商品説明4を取得する<br>
     * @return string 表示用商品説明4<br>
     */
    public function getDescription4()
    {
        return $this->description4;
    }

    /**
     * 表示用商品説明4を設定する<br>
     * @param string $description4 表示用商品説明4<br>
     */
    public function setDescription4($description4)
    {
        $this->description4 = $description4;
    }

    /**
     * 表示用商品金額4を取得する<br>
     * @return string 表示用商品金額4<br>
     */
    public function getValue4()
    {
        return $this->value4;
    }

    /**
     * 表示用商品金額4を設定する<br>
     * @param string $value4 表示用商品金額4<br>
     */
    public function setValue4($value4)
    {
        $this->value4 = $value4;
    }

    /**
     * 表示用商品数量4を取得する<br>
     * @return string 表示用商品数量4<br>
     */
    public function getQuantity4()
    {
        return $this->quantity4;
    }

    /**
     * 表示用商品数量4を設定する<br>
     * @param string $quantity4 表示用商品数量4<br>
     */
    public function setQuantity4($quantity4)
    {
        $this->quantity4 = $quantity4;
    }

    /**
     * 表示用商品イメージURL4を取得する<br>
     * @return string 表示用商品イメージURL4<br>
     */
    public function getImageUrl4()
    {
        return $this->imageUrl4;
    }

    /**
     * 表示用商品イメージURL4を設定する<br>
     * @param string $imageUrl4 表示用商品イメージURL4<br>
     */
    public function setImageUrl4($imageUrl4)
    {
        $this->imageUrl4 = $imageUrl4;
    }

    /**
     * 表示用商品説明5を取得する<br>
     * @return string 表示用商品説明5<br>
     */
    public function getDescription5()
    {
        return $this->description5;
    }

    /**
     * 表示用商品説明5を設定する<br>
     * @param string $description5 表示用商品説明5<br>
     */
    public function setDescription5($description5)
    {
        $this->description5 = $description5;
    }

    /**
     * 表示用商品金額5を取得する<br>
     * @return string 表示用商品金額5<br>
     */
    public function getValue5()
    {
        return $this->value5;
    }

    /**
     * 表示用商品金額5を設定する<br>
     * @param string $value5 表示用商品金額5<br>
     */
    public function setValue5($value5)
    {
        $this->value5 = $value5;
    }

    /**
     * 表示用商品数量5を取得する<br>
     * @return string 表示用商品数量5<br>
     */
    public function getQuantity5()
    {
        return $this->quantity5;
    }

    /**
     * 表示用商品数量5を設定する<br>
     * @param string $quantity5 表示用商品数量5<br>
     */
    public function setQuantity5($quantity5)
    {
        $this->quantity5 = $quantity5;
    }

    /**
     * 表示用商品イメージURL5を取得する<br>
     * @return string 表示用商品イメージURL5<br>
     */
    public function getImageUrl5()
    {
        return $this->imageUrl5;
    }

    /**
     * 表示用商品イメージURL5を設定する<br>
     * @param string $imageUrl5 表示用商品イメージURL5<br>
     */
    public function setImageUrl5($imageUrl5)
    {
        $this->imageUrl5 = $imageUrl5;
    }

    /**
     * 表示用商品説明6を取得する<br>
     * @return string 表示用商品説明6<br>
     */
    public function getDescription6()
    {
        return $this->description6;
    }

    /**
     * 表示用商品説明6を設定する<br>
     * @param string $description6 表示用商品説明6<br>
     */
    public function setDescription6($description6)
    {
        $this->description6 = $description6;
    }

    /**
     * 表示用商品金額6を取得する<br>
     * @return string 表示用商品金額6<br>
     */
    public function getValue6()
    {
        return $this->value6;
    }

    /**
     * 表示用商品金額6を設定する<br>
     * @param string $value6 表示用商品金額6<br>
     */
    public function setValue6($value6)
    {
        $this->value6 = $value6;
    }

    /**
     * 表示用商品数量6を取得する<br>
     * @return string 表示用商品数量6<br>
     */
    public function getQuantity6()
    {
        return $this->quantity6;
    }

    /**
     * 表示用商品数量6を設定する<br>
     * @param string $quantity6 表示用商品数量6<br>
     */
    public function setQuantity6($quantity6)
    {
        $this->quantity6 = $quantity6;
    }

    /**
     * 表示用商品イメージURL6を取得する<br>
     * @return string 表示用商品イメージURL6<br>
     */
    public function getImageUrl6()
    {
        return $this->imageUrl6;
    }

    /**
     * 表示用商品イメージURL6を設定する<br>
     * @param string $imageUrl6 表示用商品イメージURL6<br>
     */
    public function setImageUrl6($imageUrl6)
    {
        $this->imageUrl6 = $imageUrl6;
    }

    /**
     * 表示用商品説明7を取得する<br>
     * @return string 表示用商品説明7<br>
     */
    public function getDescription7()
    {
        return $this->description7;
    }

    /**
     * 表示用商品説明7を設定する<br>
     * @param string $description7 表示用商品説明7<br>
     */
    public function setDescription7($description7)
    {
        $this->description7 = $description7;
    }

    /**
     * 表示用商品金額7を取得する<br>
     * @return string 表示用商品金額7<br>
     */
    public function getValue7()
    {
        return $this->value7;
    }

    /**
     * 表示用商品金額7を設定する<br>
     * @param string $value7 表示用商品金額7<br>
     */
    public function setValue7($value7)
    {
        $this->value7 = $value7;
    }

    /**
     * 表示用商品数量7を取得する<br>
     * @return string 表示用商品数量7<br>
     */
    public function getQuantity7()
    {
        return $this->quantity7;
    }

    /**
     * 表示用商品数量7を設定する<br>
     * @param string $quantity7 表示用商品数量7<br>
     */
    public function setQuantity7($quantity7)
    {
        $this->quantity7 = $quantity7;
    }

    /**
     * 表示用商品イメージURL7を取得する<br>
     * @return string 表示用商品イメージURL7<br>
     */
    public function getImageUrl7()
    {
        return $this->imageUrl7;
    }

    /**
     * 表示用商品イメージURL7を設定する<br>
     * @param string $imageUrl7 表示用商品イメージURL7<br>
     */
    public function setImageUrl7($imageUrl7)
    {
        $this->imageUrl7 = $imageUrl7;
    }

    /**
     * 表示用商品説明8を取得する<br>
     * @return string 表示用商品説明8<br>
     */
    public function getDescription8()
    {
        return $this->description8;
    }

    /**
     * 表示用商品説明8を設定する<br>
     * @param string $description8 表示用商品説明8<br>
     */
    public function setDescription8($description8)
    {
        $this->description8 = $description8;
    }

    /**
     * 表示用商品金額8を取得する<br>
     * @return string 表示用商品金額8<br>
     */
    public function getValue8()
    {
        return $this->value8;
    }

    /**
     * 表示用商品金額8を設定する<br>
     * @param string $value8 表示用商品金額8<br>
     */
    public function setValue8($value8)
    {
        $this->value8 = $value8;
    }

    /**
     * 表示用商品数量8を取得する<br>
     * @return string 表示用商品数量8<br>
     */
    public function getQuantity8()
    {
        return $this->quantity8;
    }

    /**
     * 表示用商品数量8を設定する<br>
     * @param string $quantity8 表示用商品数量8<br>
     */
    public function setQuantity8($quantity8)
    {
        $this->quantity8 = $quantity8;
    }

    /**
     * 表示用商品イメージURL8を取得する<br>
     * @return string 表示用商品イメージURL8<br>
     */
    public function getImageUrl8()
    {
        return $this->imageUrl8;
    }

    /**
     * 表示用商品イメージURL8を設定する<br>
     * @param string $imageUrl8 表示用商品イメージURL8<br>
     */
    public function setImageUrl8($imageUrl8)
    {
        $this->imageUrl8 = $imageUrl8;
    }

    /**
     * 表示用商品説明9を取得する<br>
     * @return string 表示用商品説明9<br>
     */
    public function getDescription9()
    {
        return $this->description9;
    }

    /**
     * 表示用商品説明9を設定する<br>
     * @param string $description9 表示用商品説明9<br>
     */
    public function setDescription9($description9)
    {
        $this->description9 = $description9;
    }

    /**
     * 表示用商品金額9を取得する<br>
     * @return string 表示用商品金額9<br>
     */
    public function getValue9()
    {
        return $this->value9;
    }

    /**
     * 表示用商品金額9を設定する<br>
     * @param string $value9 表示用商品金額9<br>
     */
    public function setValue9($value9)
    {
        $this->value9 = $value9;
    }

    /**
     * 表示用商品数量9を取得する<br>
     * @return string 表示用商品数量9<br>
     */
    public function getQuantity9()
    {
        return $this->quantity9;
    }

    /**
     * 表示用商品数量9を設定する<br>
     * @param string $quantity9 表示用商品数量9<br>
     */
    public function setQuantity9($quantity9)
    {
        $this->quantity9 = $quantity9;
    }

    /**
     * 表示用商品イメージURL9を取得する<br>
     * @return string 表示用商品イメージURL9<br>
     */
    public function getImageUrl9()
    {
        return $this->imageUrl9;
    }

    /**
     * 表示用商品イメージURL9を設定する<br>
     * @param string $imageUrl9 表示用商品イメージURL9<br>
     */
    public function setImageUrl9($imageUrl9)
    {
        $this->imageUrl9 = $imageUrl9;
    }

    /**
     * 表示用商品説明10を取得する<br>
     * @return string 表示用商品説明10<br>
     */
    public function getDescription10()
    {
        return $this->description10;
    }

    /**
     * 表示用商品説明10を設定する<br>
     * @param string $description10 表示用商品説明10<br>
     */
    public function setDescription10($description10)
    {
        $this->description10 = $description10;
    }

    /**
     * 表示用商品金額10を取得する<br>
     * @return string 表示用商品金額10<br>
     */
    public function getValue10()
    {
        return $this->value10;
    }

    /**
     * 表示用商品金額10を設定する<br>
     * @param string $value10 表示用商品金額10<br>
     */
    public function setValue10($value10)
    {
        $this->value10 = $value10;
    }

    /**
     * 表示用商品数量10を取得する<br>
     * @return string 表示用商品数量10<br>
     */
    public function getQuantity10()
    {
        return $this->quantity10;
    }

    /**
     * 表示用商品数量10を設定する<br>
     * @param string $quantity10 表示用商品数量10<br>
     */
    public function setQuantity10($quantity10)
    {
        $this->quantity10 = $quantity10;
    }

    /**
     * 表示用商品イメージURL10を取得する<br>
     * @return string 表示用商品イメージURL10<br>
     */
    public function getImageUrl10()
    {
        return $this->imageUrl10;
    }

    /**
     * 表示用商品イメージURL10を設定する<br>
     * @param string $imageUrl10 表示用商品イメージURL10<br>
     */
    public function setImageUrl10($imageUrl10)
    {
        $this->imageUrl10 = $imageUrl10;
    }

    /**
     * 配送先抑止フラグを取得する<br>
     * @return string 配送先抑止フラグ<br>
     */
    public function getSuppressShippingAddress()
    {
        return $this->suppressShippingAddress;
    }

    /**
     * 配送先抑止フラグを設定する<br>
     * @param string $suppressShippingAddress 配送先抑止フラグ<br>
     */
    public function setSuppressShippingAddress($suppressShippingAddress)
    {
        $this->suppressShippingAddress = $suppressShippingAddress;
    }

    /**
     * 配送先許可エリアを取得する<br>
     * @return string 配送先許可エリア<br>
     */
    public function getShippingLocationProfile()
    {
        return $this->shippingLocationProfile;
    }

    /**
     * 配送先許可エリアを設定する<br>
     * @param string $shippingLocationProfile 配送先許可エリア<br>
     */
    public function setShippingLocationProfile($shippingLocationProfile)
    {
        $this->shippingLocationProfile = $shippingLocationProfile;
    }

    /**
     * 3Dセキュアを取得する<br>
     * @return string 3Dセキュア<br>
     */
    public function getD3Flag()
    {
        return $this->d3Flag;
    }

    /**
     * 3Dセキュアを設定する<br>
     * @param string $d3Flag 3Dセキュア<br>
     */
    public function setD3Flag($d3Flag)
    {
        $this->d3Flag = $d3Flag;
    }

    /**
     * 認証完了時URLを取得する<br>
     * @return string 認証完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 認証完了時URLを設定する<br>
     * @param string $successUrl 認証完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 認証キャンセル時URLを取得する<br>
     * @return string 認証キャンセル時URL<br>
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * 認証キャンセル時URLを設定する<br>
     * @param string $cancelUrl 認証キャンセル時URL<br>
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * 認証エラー時URLを取得する<br>
     * @return string 認証エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * 認証エラー時URLを設定する<br>
     * @param string $errorUrl 認証エラー時URL<br>
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
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
