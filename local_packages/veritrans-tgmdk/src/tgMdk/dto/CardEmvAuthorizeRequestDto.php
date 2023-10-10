<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：カード、コマンド名：申込の要求Dtoクラス（EMV用）
 *
 * @author Veritrans, Inc.
 *
 */
class CardEmvAuthorizeRequestDto extends AbstractPaymentCreditRequestDto
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
    private $SERVICE_COMMAND = "Authorize";

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
     * 決済金額<br>
     * 半角数字<br>
     * 8 桁以内<br>
     * 決済金額を指定します。<br>
     * 1 以上かつ 99999999 以下である必要があります。<br>
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
     * カードオプションタイプ<br>
     * 半角英数字<br>
     * 10 文字以内<br>
     * カードオプションタイプを指定します。<br>
     * "mpi"： <br>
     * "house"： <br>
     * "elio"： <br>
     * ※ 指定が無い場合は、デフォルトのカードオプション<br>
     * カードオプションタイプ毎の必須項目については<br>
     * 「（別紙）パラメータ組み合わせ」を参照ください<br>
     */
    private $cardOptionType;

    /**
     * カード接続センター<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * カード接続センターを指定します。（任意指定）<br>
     * "sln"： Sln接続"<br>
     * "jcn"： Jcn接続<br>
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
     * 08 株式会社 ジャックス  <br>
     * 09 三菱UFJニコス株式会社（旧日本信販）<br>
     * 10 株式会社 オリエントコーポレーション<br>
     * 11 株式会社 セントラルファイナンス<br>
     * 12 株式会社　アプラス<br>
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
     * 32 株式会社　JALカード<br>
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
     * 売上フラグ<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * 売上フラグを指定します。（任意指定）<br>
     * "true"： 与信・売上<br>
     * "false"： 与信のみ<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $withCapture;

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
     * 商品コード<br>
     * 半角数字<br>
     * 7 桁以内<br>
     * 商品コードを指定します。（任意指定）<br>
     * ※ 指定が無い場合は、デフォルトの商品コード<br>
     */
    private $itemCode;

    /**
     * セキュリティコード<br>
     * 半角数字<br>
     * 4 桁以内<br>
     * セキュリティコードを指定します。<br>
     */
    private $securityCode;

    /**
     * 認証コード（eLIO）<br>
     * 半角数字<br>
     * 7 桁以内<br>
     * SLN認証アシストサービス用パラメータ[ 認証コード（eLIO） ]<br>
     * eLIO決済時に採番されるeLIO認証子を設定します。<br>
     * カード接続センター(No.7)がjcnと設定しているときは利用できません。<br>
     * カードオプションタイプ（No.6)がelio以外の場合は利用できません。<br>
     */
    private $authFlag;

    /**
     * 通貨単位<br>
     * 英字3桁<br>
     */
    private $currencyUnit;

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
     * 決済金額（多通貨）<br>
     * 半角数字＋小数点<br>
     * 半角数字は 8 桁以内<br>
     * 決済金額（多通貨）を指定します。<br>
     * 0 より大きくかつ 99999999 以下である必要があります。<br>
     */
    private $mcAmount;

    /**
     * ICカードデータ<br>
     * 半角英数＋特殊文字点<br>
     * 350桁以内<br>
     * ICカードデータを指定します。<br>
     * 最大255桁のバイナリをBase64にて変換した値を指定します。<br>
     * paymentType=emvj1またはemvj2の場合に指定します。<br>
     */
    private $emvData;

    /**
     * オフライン取引指定<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * オフライン取引指定を指定します。（任意指定）<br>
     * "true"： オフライン取引<br>
     * "false"： オンライン取引<br>
     * paymentType=emvj1またはemvj2の場合に指定します。<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $isOffline;

    /**
     * アドバイス取引指定<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * アドバイス取引指定を指定します。<br>
     * "true"： アドバイス取引<br>
     * "false"： 通常取引<br>
     * paymentType=emvj1またはemvj2の場合に指定します。<br>
     * オフライン取引指定がtrueの場合、必ずtrueを指定します。<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $isAdvice;

    /**
     * 与信日時<br>
     * 半角数字<br>
     * 14 桁<br>
     * 与信日時を指定します。<br>
     * YYYYMMDDHH24MISS （年月日時分秒）の形式<br>
     * paymentType=emvj1またはemvj2の場合で、アドバイス取引の場合に指定します。<br>
     */
    private $authDatetime;

    /**
     * レスポンスコード<br>
     * 半角英数字<br>
     * 3桁<br>
     * レスポンスコードを指定します。<br>
     * "   "：取引承認<br>
     * "G14"：取引拒否<br>
     * "G15"：取引拒否<br>
     * "G16"：取引拒否<br>
     * "G17"：取引拒否<br>
     * "G18"：取引拒否<br>
     * "G12"：取引拒否<br>
     * "G92"：取引拒否<br>
     * paymentType=emvj1またはemvj2の場合で、アドバイス取引の場合に指定します。<br>
     */
    private $responseCode;

    /**
     * チップコンディションコード<br>
     * 半角英数字<br>
     * 1桁<br>
     * チップコンディションを指定します。<br>
     * "0"：IC対応端末における磁気ストライプ取引<br>
     * "1"：最新のIC読取に成功したが磁気ストライプにフォールバックした取引<br>
     * "2"：最新のIC読取に失敗し、磁気ストライプにフォールバックした取引<br>
     * " "：上記以外<br>
     * paymentType=jis1またはjis2の場合で、
     * IC端末で磁気ストライプ取引を行った場合に指定します。
     */
    private $chipConditionCode;

    /**
     * 強制オンライン<br>
     * 半角数字<br>
     * 1桁<br>
     * 強制オンラインを指定します。<br>
     * "0"：未実施<br>
     * "1"：強制オンラインによる取引<br>
     * paymentType=emvj1またはemvj2の場合で、アドバイス取引の場合に指定します。<br>
     */
    private $forcedOnline;

    /**
     * 強制承認<br>
     * 半角数字<br>
     * 1桁<br>
     * 強制承認を指定します。<br>
     * "0"：未実施<br>
     * "1"：強制承認による取引<br>
     * paymentType=emvj1またはemvj2の場合で、アドバイス取引の場合に指定します。<br>
     */
    private $forcedApproval;

    /**
     * オフライン区分<br>
     * 半角数字<br>
     * 1桁<br>
     * オフライン区分を指定します。<br>
     * "0"：Tag8Aが「オフライン承認」「オフライン拒否」<br>
     * "1"：Tag8Aが「オンライン処理不可時のオフライン承認」「オンライン処理不可時のオフライン拒否」<br>
     * paymentType=emvj1またはemvj2の場合で、オフライン取引の場合に指定します。<br>
     */
    private $offlineType;

    /**
     * 非接触取引指定<br>
     * 半角英数字<br>
     * 5 文字以内<br>
     * 非接触取引指定を指定します。<br>
     * "true"： 非接触取引<br>
     * "false"： 通常取引<br>
     * paymentType=emvj1またはemvj2の場合に指定します。<br>
     * ※ 指定が無い場合は、false<br>
     */
    private $isContactless;

    /**
     * 非接触区分<br>
     * 半角数字<br>
     * 1桁<br>
     * 非接触区分を指定します。<br>
     * "1"：非接触IC EMV相当<br>
     * "2"：非接触IC MS相当<br>
     * paymentType=emvj1またはemvj2の場合で、非接触取引の場合に指定します。<br>
     */
    private $contactlessType;

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
     * 売上フラグを取得する<br>
     * @return string 売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 売上フラグを設定する<br>
     * @param string $withCapture 売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
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
     * セキュリティコードを取得する<br>
     * @return string セキュリティコード<br>
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * セキュリティコードを設定する<br>
     * @param string $securityCode セキュリティコード<br>
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
    }

    /**
     * 認証コード（eLIO）を取得する<br>
     * @return string 認証コード（eLIO）<br>
     */
    public function getAuthFlag()
    {
        return $this->authFlag;
    }

    /**
     * 認証コード（eLIO）を設定する<br>
     * @param string $authFlag 認証コード（eLIO）<br>
     */
    public function setAuthFlag($authFlag)
    {
        $this->authFlag = $authFlag;
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
     * ICカードデータを取得する<br>
     * @return string ICカードデータ<br>
     */
    public function getEmvData()
    {
        return $this->emvData;
    }

    /**
     * ICカードデータを設定する<br>
     * @param string $emvData ICカードデータ<br>
     */
    public function setEmvData($emvData)
    {
        $this->emvData = $emvData;
    }

    /**
     * オフライン取引指定を取得する<br>
     * @return string オフライン取引指定<br>
     */
    public function getIsOffline()
    {
        return $this->isOffline;
    }

    /**
     * オフライン取引指定を設定する<br>
     * @param string $isOffline オフライン取引指定<br>
     */
    public function setIsOffline($isOffline)
    {
        $this->isOffline = $isOffline;
    }

    /**
     * アドバイス取引指定を取得する<br>
     * @return string アドバイス取引指定<br>
     */
    public function getIsAdvice()
    {
        return $this->isAdvice;
    }

    /**
     * アドバイス取引指定を設定する<br>
     * @param string $isAdvice アドバイス取引指定<br>
     */
    public function setIsAdvice($isAdvice)
    {
        $this->isAdvice = $isAdvice;
    }

    /**
     * 与信日時を取得する<br>
     * @return string 与信日時<br>
     */
    public function getAuthDatetime()
    {
        return $this->authDatetime;
    }

    /**
     * 与信日時を設定する<br>
     * @param string $authDatetime 与信日時<br>
     */
    public function setAuthDatetime($authDatetime)
    {
        $this->authDatetime = $authDatetime;
    }

    /**
     * レスポンスコードを取得する<br>
     * @return string レスポンスコード<br>
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * レスポンスコードを設定する<br>
     * @param string $responseCode レスポンスコード<br>
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
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
     * 強制オンラインを取得する<br>
     * @return string 強制オンライン<br>
     */
    public function getForcedOnline()
    {
        return $this->forcedOnline;
    }

    /**
     * 強制オンラインを設定する<br>
     * @param string $forcedOnline 強制オンライン<br>
     */
    public function setForcedOnline($forcedOnline)
    {
        $this->forcedOnline = $forcedOnline;
    }

    /**
     * 強制承認を取得する<br>
     * @return string 強制承認<br>
     */
    public function getForcedApproval()
    {
        return $this->forcedApproval;
    }

    /**
     * 強制承認を設定する<br>
     * @param string $forcedApproval 強制承認<br>
     */
    public function setForcedApproval($forcedApproval)
    {
        $this->forcedApproval = $forcedApproval;
    }

    /**
     * オフライン区分を取得する<br>
     * @return string オフライン区分<br>
     */
    public function getOfflineType()
    {
        return $this->offlineType;
    }

    /**
     * オフライン区分を設定する<br>
     * @param string $offlineType オフライン区分<br>
     */
    public function setOfflineType($offlineType)
    {
        $this->offlineType = $offlineType;
    }

    /**
     * 非接触取引指定を取得する<br>
     * @return string 非接触取引指定<br>
     */
    public function getIsContactless()
    {
        return $this->isContactless;
    }

    /**
     * 非接触取引指定を設定する<br>
     * @param string $isContactless 非接触取引指定<br>
     */
    public function setIsContactless($isContactless)
    {
        $this->isContactless = $isContactless;
    }

    /**
     * 非接触区分を取得する<br>
     * @return string 非接触区分<br>
     */
    public function getContactlessType()
    {
        return $this->contactlessType;
    }

    /**
     * 非接触区分を設定する<br>
     * @param string $contactlessType 非接触区分<br>
     */
    public function setContactlessType($contactlessType)
    {
        $this->contactlessType = $contactlessType;
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
