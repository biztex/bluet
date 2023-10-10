<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：カード、コマンド名：決済取消の要求Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class CardCancelRequestDto extends AbstractPaymentCreditRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "card";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Cancel";

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
     * 元取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * マーチャントで過去の取引を表す注文管理IDを指定します。<br>
     * 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br>
     */
    private $originalOrderId;

    /**
     * 決済金額<br>
     * 半角数字<br>
     * 8 桁以内<br>
     * 決済金額を指定します。<br>
     * 指定なしの場合：全額取消となります。<br>
     */
    private $amount;

    /**
     * カード番号<br>
     * 半角英数字、ハイフン、ブランク、ピリオド<br>
     * 26 文字以内<br>
     * クレジットカード番号を指定します。<br>
     * 例） クレジットカード番号は19桁まで処理が可能。<br>
     * （ハイフンを含んでも含まなくても同様に処理が可能）<br>
     * 戻り値としては､上2桁/下4桁の計6桁が返ります。<br>
     */
    private $cardNumber;

    /**
     * カード有効期限<br>
     * 半角数字、スラッシュ<br>
     * 5 文字固定<br>
     * クレジットカードの有効期限を指定します。<br>
     * MM/YY （月 + "/" + 年）の形式<br>
     * 例） "11/09"<br>
     */
    private $cardExpire;

    /**
     * カード保有者名<br>
     * 半角英数字<br>
     * 2 文字以上 45 文字以内<br>
     * クレジットカードに印字されている保有者名を指定します。<br>
     */
    private $cardholderName;

    /**
     * カードオプションタイプ<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * カードオプションタイプを指定します。<br>
     * "mpi"： 指定できません<br>
     * "house"： <br>
     * "elio"： 指定できません<br>
     * ※ 指定が無い場合は、デフォルトのカードオプション<br>
     */
    private $cardOptionType;

    /**
     * カード接続センター<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * カード接続センターを指定します。（任意指定）<br>
     * "sln"： Sln接続"<br>
     * "jcn""： Jcn接続<br>
     * ※ 指定が無い場合は、デフォルトの接続センターを検証<br>
     */
    private $cardCenter;

    /**
     * 仕向け先コード<br>
     * 半角数字<br>
     * 2 桁固定<br>
     * 仕向け先カード会社コードを指定します。<br>
     * （店舗が加盟店契約をしているカード会社）<br>
     * ※ 最終的に決済を行うカード発行会社ではなく、決済要求電文が最初に仕向けられる加盟店管理会社となります。<br>
     * 01 シティカードジャパン株式会社（ダイナースカード）<br>
     * 02 株式会社 ジェーシービー <br>
     * 03 三菱UFJニコス株式会社（旧DCカード）<br>
     * 04 三井住友カード株式会社（りそなカード株式会社などVISAジャパングループ）<br>
     * 05 三菱UFJニコス株式会社（旧UFJカード）<br>
     * 06 ユーシーカード株式会社<br>
     * 07 アメリカン・エキスプレス・インターナショナル<br>
     * 08 株式会社 ジャックス<br>
     * 09 三菱UFJニコス株式会社（旧日本信販）<br>
     * 10 株式会社 オリエントコーポレーション<br>
     * 11 株式会社 セントラルファイナンス<br>
     * 12 株式会社 アプラス<br>
     * 13 株式会社 ライフ<br>
     * 14 楽天KC株式会社<br>
     * 17 三菱UFJニコス株式会社（旧協同クレジット）<br>
     * 20 GEコンシューマー・ファイナンス株式会社（ジーシーカード）<br>
     * 21 株式会社 クレディセゾン<br>
     * 22 ポケットカード 株式会社<br>
     * 23 株式会社オーエムシーカード<br>
     * 24 イオンクレジットサービス株式会社<br>
     * 28 株式会社 バンクカードサービス<br>
     * 31 トヨタファイナンス 株式会社<br>
     * 32 株式会社 JALカード<br>
     * 36 株式会社クオーク<br>
     * 37 GEコンシューマー・ファイナンス株式会社（GEカード）<br>
     * 38 東急カード株式会社（TOPカード）<br>
     * 40 （株）UCS<br>
     * 47 （株）ほくせん<br>
     * 48 （株）ソニーファイナンスインターナショナル<br>
     * 49 ヤフー（株）<br>
     * 50 （株）ゆめカード<br>
     * 51 （株）オークス<br>
     * 52 東日本旅客鉄道（株）（ビューカード）<br>
     */
    private $acquirerCode;

    /**
     * 新規フラグ<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * 新規フラグを指定します。（任意指定）<br>
     * "true"： 新規返品<br>
     * "false"： 取消・返品<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $withNew;

    /**
     * 直接返品フラグ<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * 直接返品フラグを指定します。（任意指定）<br>
     * "true"： 直接返品<br>
     * "false"： 取消・返品<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $withDirect;

    /**
     * 取消日<br>
     * 半角数字<br>
     * 8 桁固定<br>
     * 取消日を指定します。<br>
     * YYYYMMDD の形式<br>
     * 例） "20090905"<br>
     */
    private $cancelDay;

    /**
     * 商品コード<br>
     * 半角数字<br>
     * 7 桁固定<br>
     * 商品コードを指定します。<br>
     * ※ 指定が無い場合は、デフォルトの商品コード<br>
     */
    private $itemCode;

    /**
     * 通貨単位<br>
     * 半角英字<br>
     * 3桁固定<br>
     * 通貨単位を設定します。<br>
     * 新規返品フラグがfalseの場合は設定されているとエラーになります<br>
     */
    private $currencyUnit;

    /**
     * 売上日<br>
     * 半角数字<br>
     * 8 桁固定<br>
     * 売上日を指定します。（任意指定）<br>
     * YYYYMMDD の形式<br>
     * 例） "20090905"<br>
     * 売上フラグ（No.11)がfalseの場合は利用できません。<br>
     */
    private $salesDay;

    /**
     * PIN<br>
     */
    private $pin;

    /**
     * 支払タイプ<br>
     */
    private $paymentType;

    /**
     * JIS Ⅰ第2トラック情報<br>
     */
    private $jis1SecondTrack;

    /**
     * JIS Ⅱトラック情報<br>
     */
    private $jis2Track;

    /**
     * 元取引利用フラグ<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * 元取引利用フラグを指定します。（任意指定）<br>
     * 新規フラグがtrueの場合に限り有効です。<br>
     * "true"： 元取引を利用する<br>
     * "false"： 元取引を利用しない<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $useOriginalOrder;

    /**
     * JPO<br>
     * 半角英数字<br>
     * 138 文字以内<br>
     * JPOを指定します。（任意指定）<br>
     * "10"<br>
     * "21"+"支払詳細"<br>
     * "22"+"支払詳細"<br>
     * "23"+"支払詳細"<br>
     * "24"+"支払詳細"<br>
     * "25"+"支払詳細"<br>
     * "31"+"支払詳細"<br>
     * "32"+"支払詳細"<br>
     * "33"+"支払詳細"<br>
     * "34"+"支払詳細"<br>
     * "61"+"支払詳細"<br>
     * "62"+"支払詳細"<br>
     * "63"+"支払詳細"<br>
     * "69"+"支払詳細"<br>
     * ※ 指定が無い場合は、デフォルトのJPO（一括払い：パターン"10"）<br>
     * 支払詳細については「（別紙）支払詳細」を参照ください。<br>
     */
    private $jpo;

    /**
     * 初回請求年月<br>
     * 半角数字<br>
     * 4 文字固定<br>
     * 初回請求年月を指定します。<br>
     * YYMM （年月）の形式<br>
     * 例） "1310"<br>
     */
    private $firstPayment;

    /**
     * ボーナス初回年月<br>
     * 半角数字<br>
     * 4 文字固定<br>
     * ボーナス初回年月を指定します。<br>
     * YYMM （年月）の形式<br>
     * 例） "1312"<br>
     */
    private $bonusFirstPayment;

    /**
     * 失敗時直接取引実施フラグ<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * 失敗時直接取引実施フラグを指定します。（任意指定）<br>
     * 新規フラグがtrueの場合に限りtrueを指定できます。<br>
     * "true"：取引失敗時、直接取引を実施します。<br>
     * "false"：取引失敗時、何もしません。<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $withDirectOnFailure;

    /**
     * 決済金額（多通貨）<br>
     * 半角数字＋小数点<br>
     * 半角数字は 8 桁以内<br>
     * 決済金額（多通貨）を指定します。<br>
     * 指定なしの場合：全額取消となります。<br>
     */
    private $mcAmount;

    /**
     * POSデータコード<br>
     * 半角英数字<br>
     * 12 桁固定<br>
     * POSデータコードを指定します。<br>
     */
    private $posDataCode;

    /**
     * 端末識別番号<br>
     * 半角数字<br>
     * 13 桁固定<br>
     * 端末識別番号を指定します。<br>
     */
    private $terminalId;

    /**
     * チップコンディションコード<br>
     * 半角英数字<br>
     * 1 文字以内<br>
     * チップコンディションを指定します。<br>
     * "0"：IC対応端末における磁気ストライプ取引<br>
     * " "：上記以外<br>
     * paymentType=jis1またはjis2の場合で、<br>
     * IC端末で磁気ストライプ取引を行った場合に指定します。<br>
     */
    private $chipConditionCode;

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
     * 元取引IDを取得する<br>
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        return $this->originalOrderId;
    }

    /**
     * 元取引IDを設定する<br>
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->originalOrderId = $originalOrderId;
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
     * カード番号を取得する<br>
     * @return string カード番号<br>
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * カード番号を設定する<br>
     * @param string $cardNumber カード番号<br>
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * カード有効期限を取得する<br>
     * @return string カード有効期限<br>
     */
    public function getCardExpire()
    {
        return $this->cardExpire;
    }

    /**
     * カード有効期限を設定する<br>
     * @param string $cardExpire カード有効期限<br>
     */
    public function setCardExpire($cardExpire)
    {
        $this->cardExpire = $cardExpire;
    }

    /**
     * カード保有者名を取得する<br>
     * @return string カード保有者名<br>
     */
    public function getCardholderName()
    {
        return $this->cardholderName;
    }

    /**
     * カード保有者名を設定する<br>
     * @param string $cardholderName カード保有者名<br>
     */
    public function setCardholderName($cardholderName)
    {
        $this->cardholderName = $cardholderName;
    }

    /**
     * カードオプションタイプを取得する<br>
     * @return string カードオプションタイプ<br>
     */
    public function getCardOptionType()
    {
        return $this->cardOptionType;
    }

    /**
     * カードオプションタイプを設定する<br>
     * @param string $cardOptionType カードオプションタイプ<br>
     */
    public function setCardOptionType($cardOptionType)
    {
        $this->cardOptionType = $cardOptionType;
    }

    /**
     * カード接続センターを取得する<br>
     * @return string カード接続センター<br>
     */
    public function getCardCenter()
    {
        return $this->cardCenter;
    }

    /**
     * カード接続センターを設定する<br>
     * @param string $cardCenter カード接続センター<br>
     */
    public function setCardCenter($cardCenter)
    {
        $this->cardCenter = $cardCenter;
    }

    /**
     * 仕向け先コードを取得する<br>
     * @return string 仕向け先コード<br>
     */
    public function getAcquirerCode()
    {
        return $this->acquirerCode;
    }

    /**
     * 仕向け先コードを設定する<br>
     * @param string $acquirerCode 仕向け先コード<br>
     */
    public function setAcquirerCode($acquirerCode)
    {
        $this->acquirerCode = $acquirerCode;
    }

    /**
     * 新規フラグを取得する<br>
     * @return string 新規フラグ<br>
     */
    public function getWithNew()
    {
        return $this->withNew;
    }

    /**
     * 新規フラグを設定する<br>
     * @param string $withNew 新規フラグ<br>
     */
    public function setWithNew($withNew)
    {
        $this->withNew = $withNew;
    }

    /**
     * 直接返品フラグを取得する<br>
     * @return string 直接返品フラグ<br>
     */
    public function getWithDirect()
    {
        return $this->withDirect;
    }

    /**
     * 直接返品フラグを設定する<br>
     * @param string $withDirect 直接返品フラグ<br>
     */
    public function setWithDirect($withDirect)
    {
        $this->withDirect = $withDirect;
    }

    /**
     * 取消日を取得する<br>
     * @return string 取消日<br>
     */
    public function getCancelDay()
    {
        return $this->cancelDay;
    }

    /**
     * 取消日を設定する<br>
     * @param string $cancelDay 取消日<br>
     */
    public function setCancelDay($cancelDay)
    {
        $this->cancelDay = $cancelDay;
    }

    /**
     * 商品コードを取得する<br>
     * @return string 商品コード<br>
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * 商品コードを設定する<br>
     * @param string $itemCode 商品コード<br>
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
    }

    /**
     * 通貨単位を取得する<br>
     * @return string 通貨単位<br>
     */
    public function getCurrencyUnit()
    {
        return $this->currencyUnit;
    }

    /**
     * 通貨単位を設定する<br>
     * @param string $currencyUnit 通貨単位<br>
     */
    public function setCurrencyUnit($currencyUnit)
    {
        $this->currencyUnit = $currencyUnit;
    }

    /**
     * 売上日を取得する<br>
     * @return string 売上日<br>
     */
    public function getSalesDay()
    {
        return $this->salesDay;
    }

    /**
     * 売上日を設定する<br>
     * @param string $salesDay 売上日<br>
     */
    public function setSalesDay($salesDay)
    {
        $this->salesDay = $salesDay;
    }

    /**
     * PINを取得する<br>
     * @return string PIN<br>
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * PINを設定する<br>
     * @param string $pin PIN<br>
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    /**
     * 支払タイプを取得する<br>
     * @return string 支払タイプ<br>
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * 支払タイプを設定する<br>
     * @param string $paymentType 支払タイプ<br>
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * JIS Ⅰ第2トラック情報を取得する<br>
     * @return string JIS Ⅰ第2トラック情報<br>
     */
    public function getJis1SecondTrack()
    {
        return $this->jis1SecondTrack;
    }

    /**
     * JIS Ⅰ第2トラック情報を設定する<br>
     * @param string $jis1SecondTrack JIS Ⅰ第2トラック情報<br>
     */
    public function setJis1SecondTrack($jis1SecondTrack)
    {
        $this->jis1SecondTrack = $jis1SecondTrack;
    }

    /**
     * JIS Ⅱトラック情報を取得する<br>
     * @return string JIS Ⅱトラック情報<br>
     */
    public function getJis2Track()
    {
        return $this->jis2Track;
    }

    /**
     * JIS Ⅱトラック情報を設定する<br>
     * @param string $jis2Track JIS Ⅱトラック情報<br>
     */
    public function setJis2Track($jis2Track)
    {
        $this->jis2Track = $jis2Track;
    }

    /**
     * 元取引利用フラグを取得する<br>
     * @return string 元取引利用フラグ<br>
     */
    public function getUseOriginalOrder()
    {
        return $this->useOriginalOrder;
    }

    /**
     * 元取引利用フラグを設定する<br>
     * @param string $useOriginalOrder 元取引利用フラグ<br>
     */
    public function setUseOriginalOrder($useOriginalOrder)
    {
        $this->useOriginalOrder = $useOriginalOrder;
    }

    /**
     * JPOを取得する<br>
     * @return string JPO<br>
     */
    public function getJpo()
    {
        return $this->jpo;
    }

    /**
     * JPOを設定する<br>
     * @param string $jpo JPO<br>
     */
    public function setJpo($jpo)
    {
        $this->jpo = $jpo;
    }

    /**
     * 初回請求年月を取得する<br>
     * @return string 初回請求年月<br>
     */
    public function getFirstPayment()
    {
        return $this->firstPayment;
    }

    /**
     * 初回請求年月を設定する<br>
     * @param string $firstPayment 初回請求年月<br>
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
    }

    /**
     * ボーナス初回年月を取得する<br>
     * @return string ボーナス初回年月<br>
     */
    public function getBonusFirstPayment()
    {
        return $this->bonusFirstPayment;
    }

    /**
     * ボーナス初回年月を設定する<br>
     * @param string $bonusFirstPayment ボーナス初回年月<br>
     */
    public function setBonusFirstPayment($bonusFirstPayment)
    {
        $this->bonusFirstPayment = $bonusFirstPayment;
    }

    /**
     * 失敗時直接取引実施フラグを取得する<br>
     * @return string 失敗時直接取引実施フラグ<br>
     */
    public function getWithDirectOnFailure()
    {
        return $this->withDirectOnFailure;
    }

    /**
     * 失敗時直接取引実施フラグを設定する<br>
     * @param string $withDirectOnFailure 失敗時直接取引実施フラグ<br>
     */
    public function setWithDirectOnFailure($withDirectOnFailure)
    {
        $this->withDirectOnFailure = $withDirectOnFailure;
    }

    /**
     * 決済金額（多通貨）を取得する<br>
     * @return string 決済金額（多通貨）<br>
     */
    public function getMcAmount()
    {
        return $this->mcAmount;
    }

    /**
     * 決済金額（多通貨）を設定する<br>
     * @param string $mcAmount 決済金額（多通貨）<br>
     */
    public function setMcAmount($mcAmount)
    {
        $this->mcAmount = $mcAmount;
    }

    /**
     * POSデータコードを取得する<br>
     * @return string POSデータコード<br>
     */
    public function getPosDataCode()
    {
        return $this->posDataCode;
    }

    /**
     * POSデータコードを設定する<br>
     * @param string $posDataCode POSデータコード<br>
     */
    public function setPosDataCode($posDataCode)
    {
        $this->posDataCode = $posDataCode;
    }

    /**
     * 端末識別番号を取得する<br>
     * @return string 端末識別番号<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 端末識別番号を設定する<br>
     * @param string $terminalId 端末識別番号<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * チップコンディションコードを取得する<br>
     * @return string チップコンディションコード<br>
     */
    public function getChipConditionCode()
    {
        return $this->chipConditionCode;
    }

    /**
     * チップコンディションコードを設定する<br>
     * @param string $chipConditionCode チップコンディションコード<br>
     */
    public function setChipConditionCode($chipConditionCode)
    {
        $this->chipConditionCode = $chipConditionCode;
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
