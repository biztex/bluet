<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：MPI、コマンド名：認可の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MpiAuthorizeRequestDto extends AbstractPaymentCreditRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "mpi";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * サービスオプションタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * "mpi-none" ： MPI 単体サービス<br/>
     * "mpi-complete" ： 完全認証<br/>
     * "mpi-company" ： 通常認証（カード会社リスク負担）<br/>
     * "mpi-merchant" ： 通常認証（カード会社、加盟店リスク負担）<br/>
     */
    private $serviceOptionType;

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
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 決済金額を指定します。<br/>
     * 1 以上かつ 99999999 以下である必要があります。<br/>
     */
    private $amount;

    /**
     * カード番号<br>
     * 半角数字、記号<br/>
     * 最大桁数：26<br/>
     * クレジットカード番号を指定します。<br/>
     * 記号はハイフン、ブランク、ピリオドが使用可能<br/>
     *  （ハイフンを含んでも含まなくても同様に処理が可能）<br/>
     */
    private $cardNumber;

    /**
     * カード有効期限<br>
     * 半角数字、記号<br/>
     * 最大桁数：5<br/>
     * クレジットカードの有効期限を指定します。<br/>
     * MM/YY （月 + "/" + 年）の形式<br/>
     */
    private $cardExpire;

    /**
     * カード接続センター<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * カード接続センターを指定します。<br/>
     * "jcn"： Jcn接続<br/>
     * "cafis"： CAFIS接続<br/>
     * ※ 未指定の場合は、デフォルトの接続センターを検証<br/>
     */
    private $cardCenter;

    /**
     * 仕向け先コード<br>
     * 半角英数字<br/>
     * 最大桁数：2<br/>
     * 仕向け先カード会社コードを指定します。<br/>
     * （店舗が加盟店契約をしているカード会社）<br/>
     * ※ 最終的に決済を行うカード発行会社ではなく、決済要求電文が最初に仕向けられる加盟店管理会社となります。<br/>
     */
    private $acquirerCode;

    /**
     * 支払種別<br>
     * 半角英数字<br/>
     * 最大桁数：138<br/>
     * JPOを指定します。<br/>
     * "10"<br/>
     * "21"+"支払詳細"<br/>
     * "22"+"支払詳細"<br/>
     * "23"+"支払詳細"<br/>
     * "24"+"支払詳細"<br/>
     * "25"+"支払詳細"<br/>
     * "31"+"支払詳細"<br/>
     * "32"+"支払詳細"<br/>
     * "33"+"支払詳細"<br/>
     * "34"+"支払詳細"<br/>
     * "61"+"支払詳細"<br/>
     * "62"+"支払詳細"<br/>
     * "63"+"支払詳細"<br/>
     * "69"+"支払詳細"<br/>
     * ※ 未指定の場合は、10（一括払い）<br/>
     */
    private $jpo;

    /**
     * 売上フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 売上フラグを指定します。（任意指定）<br/>
     * "true"： 与信・売上<br/>
     * "false"： 与信のみ<br/>
     * ※ 未指定の場合は、false:与信のみ<br/>
     */
    private $withCapture;

    /**
     * 売上日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 売上日を指定します。<br/>
     * YYYYMMDD形式<br/>
     */
    private $salesDay;

    /**
     * 商品コード<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     * 商品コードを指定します。<br/>
     */
    private $itemCode;

    /**
     * セキュリティコード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * セキュリティコードを指定します。<br/>
     */
    private $securityCode;

    /**
     * 誕生日<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 誕生日を指定します。<br/>
     * カード接続センターがsln以外の場合は利用できません。<br/>
     */
    private $birthday;

    /**
     * 電話番号<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 電話番号を指定します。<br/>
     * カード接続センターがsln以外の場合は利用できません。<br/>
     */
    private $tel;

    /**
     * 名前（名）カナ<br>
     * 半角カナ<br/>
     * 最大桁数：15<br/>
     * 名前（名）カナ を指定します。<br/>
     * 半角カナ（ｱ～ﾝ）、半濁点が使用できます。<br/>
     * カード接続センターがsln以外の場合は利用できません。<br/>
     */
    private $firstKanaName;

    /**
     * 名前（姓）カナ<br>
     * 半角カナ<br/>
     * 最大桁数：15<br/>
     * 名前（姓）カナ を指定します。<br/>
     * 半角カナ（ｱ～ﾝ）、半濁点が使用できます。<br/>
     * カード接続センターがsln以外の場合は利用できません。<br/>
     */
    private $lastKanaName;

    /**
     * 通貨単位<br>
     * 英字<br/>
     * 最大桁数：3<br/>
     * 通貨単位を指定します。<br/>
     */
    private $currencyUnit;

    /**
     * リダイレクションURI<br>
     * 半角英数字<br/>
     * 最大桁数：1024<br/>
     * 検証結果を返すURIを指定します。<br/>
     * ※ 未指定の場合は、マスタに登録されたURIを用います。<br/>
     */
    private $redirectionUri;

    /**
     * HTTPアクセプト<br>
     * 文字列<br/>
     * 最大桁数：-<br/>
     * コンシューマのブラウザ情報でアプリケーションサーバから取得して設定します。<br/>
     */
    private $httpAccept;

    /**
     * HTTPユーザエージェント<br>
     * 文字列<br/>
     * 最大桁数：-<br/>
     * コンシューマのブラウザ情報でアプリケーションサーバから取得して設定します。<br/>
     */
    private $httpUserAgent;

    /**
     * 初回請求年月<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 初回請求年月を指定します。<br/>
     * YYMM（年月）の形式<br/>
     */
    private $firstPayment;

    /**
     * ボーナス初回年月<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * ボーナス初回年月を指定します。<br/>
     * YYMM（年月）の形式<br/>
     */
    private $bonusFirstPayment;

    /**
     * 決済金額（多通貨）<br>
     * 半角数字、小数点<br/>
     * 最大桁数：9<br/>
     * 決済金額（多通貨）を指定します。<br/>
     * 1 以上かつ 99999999 以下である必要があります。<br/>
     */
    private $mcAmount;

    /**
     * プッシュURL<br>
     * URL<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * ※ 未指定の場合は、マスタに登録された値を使用します。<br/>
     */
    private $pushUrl;

    /**
     * 端末種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     *  0:PC<br/>
     *  1:mobile<br/>
     * ※ 未指定の場合は、0:PC<br/>
     */
    private $browserDeviceCategory;

    /**
     * 詳細パラメータ連携フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     *  0:パラメータ連携しない<br/>
     *  1:パラメータ連携する<br/>
     *  2:パラメータ連携しない(GET)<br/>
     * ※ 未指定の場合は、マスタに登録された値を使用します。<br/>
     */
    private $verifyResultLink;

    /**
     * 仮登録フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     *  0:仮登録しない<br/>
     *  1:仮登録する<br/>
     */
    private $tempRegistration;

    /**
     * 不正検知評価取引情報<br>
     * -<br/>
     * 最大桁数：-<br/>
     * 不正検知取引情報<br/>
     */
    private $fraudDetectionRequest;

    /**
     * 不正検知実施フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 不正検知実施フラグを指定します。<br/>
     * "true"： 実施する<br/>
     * "false"： 実施しない<br/>
     */
    private $withFraudDetection;

    /**
     * 本人認証有効期限<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 消費者が本人認証処理を完了するまでの有効期限（分単位）を指定します。<br/>
     * 1 以上かつ 999 以下である必要があります。<br/>
     * ※ 未指定の場合は、有効期限のチェックを行いません。<br/>
     */
    private $verifyTimeout;

    /**
     * デバイスチャネル<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * デバイスチャネルを指定します。<br/>
     *  01:アプリベース<br/>
     *  02:ブラウザベース<br/>
     *  03:3DSリクエスター（3RI）<br/>
     * ※ 未指定の場合は、マスタに登録された値を使用します。<br/>
     *     マスタにも値が設定されていない場合は、3Dセキュア 1.0.2として扱います。<br/>
     */
    private $deviceChannel;

    /**
     * アカウントタイプ<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * アカウントの種類を指定します。<br/>
     *  01:該当なし<br/>
     *  02:クレジット<br/>
     *  03:デビット<br/>
     */
    private $accountType;

    /**
     * 認証要求タイプ<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 認証要求のタイプを指定します。<br/>
     *  01:支払い<br/>
     *  02:リカーリング<br/>
     *  03:分割<br/>
     *  04:カード追加<br/>
     *  05:有効性確認<br/>
     *  06:カード保有者確認<br/>
     *  07:請求確認<br/>
     * ※ 未指定の場合は、01:支払い<br/>
     */
    private $authenticationIndicator;

    /**
     * メッセージカテゴリ<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * メッセージのカテゴリを指定します。<br/>
     *  01:PA（支払い認証）<br/>
     *  02:NPA（支払い無しの認証）<br/>
     * ※ サービスオプションタイプがmpi-complete、mpi-company、mpi-merchantの場合は、"01"のみ指定可能です。<br/>
     */
    private $messageCategory;

    /**
     * カード保有者名<br>
     * 半角英数字記号<br/>
     * 最大桁数：45<br/>
     * カード保有者名を指定します。2桁以上。<br/>
     * ※ 3Dセキュア 2.0の場合は（カード保有者名省略フラグをtrueで設定しない限り）必須です。<br/>
     */
    private $cardholderName;

    /**
     * カード保有者名省略フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * "true"： カード保有者名を省略可能<br/>
     * "false"： カード保有者名は必須<br/>
     * ※未指定の場合は、false： カード保有者名は必須<br/>
     */
    private $cardholderNameOmitFlag;

    /**
     * カード保有者メールアドレス<br>
     * 半角英数字記号<br/>
     * 最大桁数：254<br/>
     * カード保有者メールアドレスを指定します。<br/>
     */
    private $cardholderEmail;

    /**
     * カード保有者自宅電話番号国コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * カード保有者自宅電話番号の国コードを指定します。<br/>
     */
    private $cardholderHomePhoneCountry;

    /**
     * カード保有者自宅電話番号<br>
     * 半角数字<br/>
     * 最大桁数：15<br/>
     * カード保有者自宅電話番号を指定します。<br/>
     */
    private $cardholderHomePhoneNumber;

    /**
     * カード保有者携帯電話番号国コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * カード保有者携帯電話番号の国コードを指定します。<br/>
     */
    private $cardholderMobilePhoneCountry;

    /**
     * カード保有者携帯電話番号<br>
     * 半角数字<br/>
     * 最大桁数：15<br/>
     * カード保有者携帯電話番号を指定します。<br/>
     */
    private $cardholderMobilePhoneNumber;

    /**
     * カード保有者勤務先電話番号国コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * カード保有者勤務先電話番号の国コードを指定します。<br/>
     */
    private $cardholderWorkPhoneCountry;

    /**
     * カード保有者勤務先電話番号<br>
     * 半角数字<br/>
     * 最大桁数：15<br/>
     * カード保有者勤務先電話番号を指定します。<br/>
     */
    private $cardholderWorkPhoneNumber;

    /**
     * 請求先住所_市区町村<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 請求先住所の市区町村を指定します。<br/>
     */
    private $billingAddressCity;

    /**
     * 請求先住所_国<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 請求先住所の国を指定します。<br/>
     * ISO 3166-1 numericで定義されているコードを設定します。<br/>
     */
    private $billingAddressCountry;

    /**
     * 請求先住所1<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 請求先住所1を指定します。<br/>
     */
    private $billingAddressLine1;

    /**
     * 請求先住所2<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 請求先住所2を指定します。<br/>
     */
    private $billingAddressLine2;

    /**
     * 請求先住所3<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 請求先住所3を指定します。<br/>
     */
    private $billingAddressLine3;

    /**
     * 請求先郵便番号<br>
     * 半角数字<br/>
     * 最大桁数：16<br/>
     * 請求先郵便番号を指定します。<br/>
     */
    private $billingPostalCode;

    /**
     * 請求先住所_都道府県<br>
     * 半角英数字<br/>
     * 最大桁数：3<br/>
     * 請求先住所の都道府県を指定します。<br/>
     * ISO 3166-2で定義されているコードを設定します。<br/>
     */
    private $billingAddressState;

    /**
     * 配送先住所_市区町村<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 配送先住所の市区町村を指定します。<br/>
     */
    private $shippingAddressCity;

    /**
     * 配送先住所_国<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 配送先住所の国を指定します。<br/>
     * ISO 3166-1 numericで定義されているコードを設定します。<br/>
     */
    private $shippingAddressCountry;

    /**
     * 配送先住所1<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 配送先住所1を指定します。<br/>
     */
    private $shippingAddressLine1;

    /**
     * 配送先住所2<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 配送先住所2を指定します。<br/>
     */
    private $shippingAddressLine2;

    /**
     * 配送先住所3<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 配送先住所3を指定します。<br/>
     */
    private $shippingAddressLine3;

    /**
     * 配送先郵便番号<br>
     * 半角数字<br/>
     * 最大桁数：16<br/>
     * 配送先郵便番号を指定します。<br/>
     */
    private $shippingPostalCode;

    /**
     * 配送先住所_都道府県<br>
     * 半角英数字<br/>
     * 最大桁数：3<br/>
     * 配送先住所の都道府県を指定します。<br/>
     * ISO 3166-2で定義されているコードを設定します。<br/>
     */
    private $shippingAddressState;

    /**
     * 消費者IPアドレス<br>
     * 半角英数字記号<br/>
     * 最大桁数：45<br/>
     * コンシューマのブラウザ情報でアプリケーションサーバから取得して設定します。<br/>
     * 半角英数字以外に、".(ドット)"が使用可能です。<br/>
     */
    private $customerIp;

    /**
     * チャレンジ認証フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * チャレンジ認証を行うかどうかを指定します。（任意指定）<br/>
     * "true"： チャレンジ認証を行う<br/>
     * "false"： チャレンジ認証を行わない<br/>
     * ※ 未指定の場合は、true： チャレンジ認証を行う<br/>
     */
    private $withChallenge;

    /**
     * 認証データ<br>
     * 半角英数字記号<br/>
     * 最大桁数：2048<br/>
     * プロトコルバージョン2.2.0時点では予約項目のため、設定不要です。<br/>
     */
    private $authData;

    /**
     * 認証メソッド<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * カード保有者の加盟店サイトへの認証方式に応じた値を指定します。<br/>
     * 下記はプロトコルバージョン2.2.0時点の内容となります。<br/>
     *  01：No 3DS Requestor authentication occurred (i.e. cardholder “logged in” as guest)<br/>
     *  02：Login to the cardholder account at the 3DS Requestor system using 3DS Requestor’s own credentials<br/>
     *  03：Login to the cardholder account at the 3DS Requestor system using federated ID<br/>
     *  04：Login to the cardholder account at the 3DS Requestor system using issuer credentials<br/>
     *  05：Login to the cardholder account at the 3DS Requestor system using third-party authentication<br/>
     *  06：Login to the cardholder account at the 3DS Requestor system using FIDO Authenticator<br/>
     *  07：Login to the cardholder account at the 3DS Requestor system using FIDO Authenticator (FIDO assurance data signed) <br/>
     *  08：SRC Assurance Data<br/>
     *  09–79：Reserved for EMVCo future use (values invalid until defined by EMVCo)<br/>
     *  80–99：Reserved for DS use<br/>
     * <br/>
     */
    private $authMethod;

    /**
     * 認証タイムスタンプ<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     * カード保有者の加盟店サイトへの認証実施日時を指定します。（JST）<br/>
     * YYYYMMDDhhmm形式<br/>
     */
    private $authTimestamp;

    /**
     * アカウント所持期間インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * カード所有者が加盟店サイトにアカウントを持っている期間。<br/>
     *  01：アカウントなし（ゲストチェックアウト）<br/>
     *  02：このトランザクション中に作成された<br/>
     *  03：30日未満<br/>
     *  04：30〜60日<br/>
     *  05：61日以上<br/>
     */
    private $accountAgeIndicator;

    /**
     * アカウント最終変更日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 加盟店サイトのカード保有者のアカウントが最後に変更された日付。<br/>
     * YYYYMMDD形式<br/>
     */
    private $accountChangeDate;

    /**
     * アカウント変更インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 加盟店サイトのカード保有者のアカウント情報が最後に変更されてからの期間。<br/>
     *  01：このトランザクション中に変更された<br/>
     *  02：30日未満<br/>
     *  03：30〜60日<br/>
     *  04：61日以上<br/>
     */
    private $accountChangeIndicator;

    /**
     * アカウント開設日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * カード保有者が加盟店サイトにアカウントを開設した日付。<br/>
     * YYYYMMDD形式<br/>
     */
    private $accountDate;

    /**
     * アカウントパスワード最終変更日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * カード保有者の加盟店サイトのアカウントがパスワード変更、またはアカウントがリセットされた日付。<br/>
     * YYYYMMDD形式<br/>
     */
    private $accountPasswordChangeDate;

    /**
     * アカウントパスワード変更インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * カード保有者の加盟店サイトのアカウントで、パスワード変更やアカウントリセットが行われてからの期間。<br/>
     *  01：変化なし<br/>
     *  02：このトランザクション中に変更された<br/>
     *  03：30日未満<br/>
     *  04：30〜60日<br/>
     *  05：61日以上<br/>
     */
    private $accountPasswordChangeIndicator;

    /**
     * アカウント購入数<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 過去6ヶ月間にこのカード保有者アカウントで購入した商品の数。<br/>
     */
    private $accountPurchaseCount;

    /**
     * カード追加試行回数<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 過去24時間のこのカード保有者アカウントに対するカード追加の試行回数。<br/>
     */
    private $accountProvisioningAttempts;

    /**
     * 前日アカウント購入数<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 過去24時間に行われた、このカード保有者アカウントとその支払いアカウントすべての、加盟店サイト上の取引数（成功および放棄）。<br/>
     */
    private $accountDayTransactions;

    /**
     * 前年アカウント購入数<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 過去1年間に行われた、このカード保有者アカウントとその支払いアカウントすべての、加盟店サイト上の取引数（成功および放棄）。<br/>
     */
    private $accountYearTransactions;

    /**
     * 支払いアカウント登録日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 支払アカウントが加盟店サイトのカード保有者のアカウントに登録された日付。<br/>
     * YYYYMMDD形式<br/>
     */
    private $paymentAccountAge;

    /**
     * 支払いアカウント所持期間インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 支払アカウントが加盟店サイトのカード保有者アカウントに登録されていた期間。<br/>
     *  01：アカウントなし（ゲストチェックアウト）<br/>
     *  02：このトランザクション中に作成された<br/>
     *  03：30日未満<br/>
     *  04：30〜60日<br/>
     *  05：61日以上<br/>
     */
    private $paymentAccountAgeIndicator;

    /**
     * 配送先住所初回使用日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * このトランザクションに使用された配送先住所が、加盟店サイトで初めて使用された日付。<br/>
     * YYYYMMDD形式<br/>
     */
    private $shipAddressUsageDate;

    /**
     * 配送先住所利用状況インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * この取引に使用された配送先住所が、加盟店サイトで初めて使用されてからの期間。<br/>
     *  01：このトランザクションが初めて<br/>
     *  02：30日未満<br/>
     *  03：30〜60日<br/>
     *  04：61日以上<br/>
     */
    private $shipAddressUsageIndicator;

    /**
     * 配送先名インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * アカウントに登録されているカード保有者名が、この取引で使用された配送名と同一であるかどうか。<br/>
     *  01：配送名と同じアカウント名<br/>
     *  02：配送名とは異なるアカウント名<br/>
     */
    private $shipNameIndicator;

    /**
     * 不審アカウントアクティビティ<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 加盟店サイトがカード保有者アカウントで疑わしい行為（過去の不正行為を含む）を経験したことがあるかどうか。<br/>
     *  01：疑わしい活動は観察されていない<br/>
     *  02：不審な活動が観察された<br/>
     */
    private $suspiciousAccountActivity;

    /**
     * リクエスターチャレンジインジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * リクエスターチャレンジインジケーターを指定します。<br/>
     */
    private $requestorChallengeIndicator;

    /**
     * 商品お届け先メールアドレス<br>
     * 半角英数字記号<br/>
     * 最大桁数：254<br/>
     * 商品お届け先メールアドレスを指定します。<br/>
     */
    private $deliveryEmailAddress;

    /**
     * プレオーダー購入インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * プレオーダー購入インジケーターを指定します。<br/>
     */
    private $preOrderPurchaseIndicator;

    /**
     * 再注文商品インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 再注文商品インジケーターを指定します。<br/>
     */
    private $reorderItemsIndicator;

    /**
     * 配送方法インジケーター<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     * 配送方法インジケーターを指定します。<br/>
     */
    private $shipIndicator;


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
     * 支払種別を取得する<br>
     * @return string 支払種別<br>
     */
    public function getJpo()
    {
        return $this->jpo;
    }

    /**
     * 支払種別を設定する<br>
     * @param string $jpo 支払種別<br>
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
     * 誕生日を取得する<br>
     * @return string 誕生日<br>
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * 誕生日を設定する<br>
     * @param string $birthday 誕生日<br>
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $tel 電話番号<br>
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * 名前（名）カナを取得する<br>
     * @return string 名前（名）カナ<br>
     */
    public function getFirstKanaName()
    {
        return $this->firstKanaName;
    }

    /**
     * 名前（名）カナを設定する<br>
     * @param string $firstKanaName 名前（名）カナ<br>
     */
    public function setFirstKanaName($firstKanaName)
    {
        $this->firstKanaName = $firstKanaName;
    }

    /**
     * 名前（姓）カナを取得する<br>
     * @return string 名前（姓）カナ<br>
     */
    public function getLastKanaName()
    {
        return $this->lastKanaName;
    }

    /**
     * 名前（姓）カナを設定する<br>
     * @param string $lastKanaName 名前（姓）カナ<br>
     */
    public function setLastKanaName($lastKanaName)
    {
        $this->lastKanaName = $lastKanaName;
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
     * リダイレクションURIを取得する<br>
     * @return string リダイレクションURI<br>
     */
    public function getRedirectionUri()
    {
        return $this->redirectionUri;
    }

    /**
     * リダイレクションURIを設定する<br>
     * @param string $redirectionUri リダイレクションURI<br>
     */
    public function setRedirectionUri($redirectionUri)
    {
        $this->redirectionUri = $redirectionUri;
    }

    /**
     * HTTPアクセプトを取得する<br>
     * @return string HTTPアクセプト<br>
     */
    public function getHttpAccept()
    {
        return $this->httpAccept;
    }

    /**
     * HTTPアクセプトを設定する<br>
     * @param string $httpAccept HTTPアクセプト<br>
     */
    public function setHttpAccept($httpAccept)
    {
        $this->httpAccept = $httpAccept;
    }

    /**
     * HTTPユーザエージェントを取得する<br>
     * @return string HTTPユーザエージェント<br>
     */
    public function getHttpUserAgent()
    {
        return $this->httpUserAgent;
    }

    /**
     * HTTPユーザエージェントを設定する<br>
     * @param string $httpUserAgent HTTPユーザエージェント<br>
     */
    public function setHttpUserAgent($httpUserAgent)
    {
        $this->httpUserAgent = $httpUserAgent;
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
     * プッシュURLを取得する<br>
     * @return string プッシュURL<br>
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * プッシュURLを設定する<br>
     * @param string $pushUrl プッシュURL<br>
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * 端末種別を取得する<br>
     * @return string 端末種別<br>
     */
    public function getBrowserDeviceCategory()
    {
        return $this->browserDeviceCategory;
    }

    /**
     * 端末種別を設定する<br>
     * @param string $browserDeviceCategory 端末種別<br>
     */
    public function setBrowserDeviceCategory($browserDeviceCategory)
    {
        $this->browserDeviceCategory = $browserDeviceCategory;
    }

    /**
     * 詳細パラメータ連携フラグを取得する<br>
     * @return string 詳細パラメータ連携フラグ<br>
     */
    public function getVerifyResultLink()
    {
        return $this->verifyResultLink;
    }

    /**
     * 詳細パラメータ連携フラグを設定する<br>
     * @param string $verifyResultLink 詳細パラメータ連携フラグ<br>
     */
    public function setVerifyResultLink($verifyResultLink)
    {
        $this->verifyResultLink = $verifyResultLink;
    }

    /**
     * 仮登録フラグを取得する<br>
     * @return string 仮登録フラグ<br>
     */
    public function getTempRegistration()
    {
        return $this->tempRegistration;
    }

    /**
     * 仮登録フラグを設定する<br>
     * @param string $tempRegistration 仮登録フラグ<br>
     */
    public function setTempRegistration($tempRegistration)
    {
        $this->tempRegistration = $tempRegistration;
    }

    /**
     * 不正検知評価取引情報を取得する<br>
     * @return FraudDetectionRequestDto 不正検知評価取引情報<br>
     */
    public function getFraudDetectionRequest()
    {
        return $this->fraudDetectionRequest;
    }

    /**
     * 不正検知評価取引情報を設定する<br>
     * @param FraudDetectionRequestDto $fraudDetectionRequest 不正検知評価取引情報<br>
     */
    public function setFraudDetectionRequest($fraudDetectionRequest)
    {
        $this->fraudDetectionRequest = $fraudDetectionRequest;
    }

    /**
     * 不正検知実施フラグを取得する<br>
     * @return string 不正検知実施フラグ<br>
     */
    public function getWithFraudDetection()
    {
        return $this->withFraudDetection;
    }

    /**
     * 不正検知実施フラグを設定する<br>
     * @param string $withFraudDetection 不正検知実施フラグ<br>
     */
    public function setWithFraudDetection($withFraudDetection)
    {
        $this->withFraudDetection = $withFraudDetection;
    }

    /**
     * 本人認証有効期限を取得する<br>
     * @return string 本人認証有効期限<br>
     */
    public function getVerifyTimeout()
    {
        return $this->verifyTimeout;
    }

    /**
     * 本人認証有効期限を設定する<br>
     * @param string $verifyTimeout 本人認証有効期限<br>
     */
    public function setVerifyTimeout($verifyTimeout)
    {
        $this->verifyTimeout = $verifyTimeout;
    }

    /**
     * デバイスチャネルを取得する<br>
     * @return string デバイスチャネル<br>
     */
    public function getDeviceChannel()
    {
        return $this->deviceChannel;
    }

    /**
     * デバイスチャネルを設定する<br>
     * @param string $deviceChannel デバイスチャネル<br>
     */
    public function setDeviceChannel($deviceChannel)
    {
        $this->deviceChannel = $deviceChannel;
    }

    /**
     * アカウントタイプを取得する<br>
     * @return string アカウントタイプ<br>
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * アカウントタイプを設定する<br>
     * @param string $accountType アカウントタイプ<br>
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * 認証要求タイプを取得する<br>
     * @return string 認証要求タイプ<br>
     */
    public function getAuthenticationIndicator()
    {
        return $this->authenticationIndicator;
    }

    /**
     * 認証要求タイプを設定する<br>
     * @param string $authenticationIndicator 認証要求タイプ<br>
     */
    public function setAuthenticationIndicator($authenticationIndicator)
    {
        $this->authenticationIndicator = $authenticationIndicator;
    }

    /**
     * メッセージカテゴリを取得する<br>
     * @return string メッセージカテゴリ<br>
     */
    public function getMessageCategory()
    {
        return $this->messageCategory;
    }

    /**
     * メッセージカテゴリを設定する<br>
     * @param string $messageCategory メッセージカテゴリ<br>
     */
    public function setMessageCategory($messageCategory)
    {
        $this->messageCategory = $messageCategory;
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
     * カード保有者名省略フラグを取得する<br>
     * @return string カード保有者名省略フラグ<br>
     */
    public function getCardholderNameOmitFlag()
    {
        return $this->cardholderNameOmitFlag;
    }

    /**
     * カード保有者名省略フラグを設定する<br>
     * @param string $cardholderNameOmitFlag カード保有者名省略フラグ<br>
     */
    public function setCardholderNameOmitFlag($cardholderNameOmitFlag)
    {
        $this->cardholderNameOmitFlag = $cardholderNameOmitFlag;
    }

    /**
     * カード保有者メールアドレスを取得する<br>
     * @return string カード保有者メールアドレス<br>
     */
    public function getCardholderEmail()
    {
        return $this->cardholderEmail;
    }

    /**
     * カード保有者メールアドレスを設定する<br>
     * @param string $cardholderEmail カード保有者メールアドレス<br>
     */
    public function setCardholderEmail($cardholderEmail)
    {
        $this->cardholderEmail = $cardholderEmail;
    }

    /**
     * カード保有者自宅電話番号国コードを取得する<br>
     * @return string カード保有者自宅電話番号国コード<br>
     */
    public function getCardholderHomePhoneCountry()
    {
        return $this->cardholderHomePhoneCountry;
    }

    /**
     * カード保有者自宅電話番号国コードを設定する<br>
     * @param string $cardholderHomePhoneCountry カード保有者自宅電話番号国コード<br>
     */
    public function setCardholderHomePhoneCountry($cardholderHomePhoneCountry)
    {
        $this->cardholderHomePhoneCountry = $cardholderHomePhoneCountry;
    }

    /**
     * カード保有者自宅電話番号を取得する<br>
     * @return string カード保有者自宅電話番号<br>
     */
    public function getCardholderHomePhoneNumber()
    {
        return $this->cardholderHomePhoneNumber;
    }

    /**
     * カード保有者自宅電話番号を設定する<br>
     * @param string $cardholderHomePhoneNumber カード保有者自宅電話番号<br>
     */
    public function setCardholderHomePhoneNumber($cardholderHomePhoneNumber)
    {
        $this->cardholderHomePhoneNumber = $cardholderHomePhoneNumber;
    }

    /**
     * カード保有者携帯電話番号国コードを取得する<br>
     * @return string カード保有者携帯電話番号国コード<br>
     */
    public function getCardholderMobilePhoneCountry()
    {
        return $this->cardholderMobilePhoneCountry;
    }

    /**
     * カード保有者携帯電話番号国コードを設定する<br>
     * @param string $cardholderMobilePhoneCountry カード保有者携帯電話番号国コード<br>
     */
    public function setCardholderMobilePhoneCountry($cardholderMobilePhoneCountry)
    {
        $this->cardholderMobilePhoneCountry = $cardholderMobilePhoneCountry;
    }

    /**
     * カード保有者携帯電話番号を取得する<br>
     * @return string カード保有者携帯電話番号<br>
     */
    public function getCardholderMobilePhoneNumber()
    {
        return $this->cardholderMobilePhoneNumber;
    }

    /**
     * カード保有者携帯電話番号を設定する<br>
     * @param string $cardholderMobilePhoneNumber カード保有者携帯電話番号<br>
     */
    public function setCardholderMobilePhoneNumber($cardholderMobilePhoneNumber)
    {
        $this->cardholderMobilePhoneNumber = $cardholderMobilePhoneNumber;
    }

    /**
     * カード保有者勤務先電話番号国コードを取得する<br>
     * @return string カード保有者勤務先電話番号国コード<br>
     */
    public function getCardholderWorkPhoneCountry()
    {
        return $this->cardholderWorkPhoneCountry;
    }

    /**
     * カード保有者勤務先電話番号国コードを設定する<br>
     * @param string $cardholderWorkPhoneCountry カード保有者勤務先電話番号国コード<br>
     */
    public function setCardholderWorkPhoneCountry($cardholderWorkPhoneCountry)
    {
        $this->cardholderWorkPhoneCountry = $cardholderWorkPhoneCountry;
    }

    /**
     * カード保有者勤務先電話番号を取得する<br>
     * @return string カード保有者勤務先電話番号<br>
     */
    public function getCardholderWorkPhoneNumber()
    {
        return $this->cardholderWorkPhoneNumber;
    }

    /**
     * カード保有者勤務先電話番号を設定する<br>
     * @param string $cardholderWorkPhoneNumber カード保有者勤務先電話番号<br>
     */
    public function setCardholderWorkPhoneNumber($cardholderWorkPhoneNumber)
    {
        $this->cardholderWorkPhoneNumber = $cardholderWorkPhoneNumber;
    }

    /**
     * 請求先住所_市区町村を取得する<br>
     * @return string 請求先住所_市区町村<br>
     */
    public function getBillingAddressCity()
    {
        return $this->billingAddressCity;
    }

    /**
     * 請求先住所_市区町村を設定する<br>
     * @param string $billingAddressCity 請求先住所_市区町村<br>
     */
    public function setBillingAddressCity($billingAddressCity)
    {
        $this->billingAddressCity = $billingAddressCity;
    }

    /**
     * 請求先住所_国を取得する<br>
     * @return string 請求先住所_国<br>
     */
    public function getBillingAddressCountry()
    {
        return $this->billingAddressCountry;
    }

    /**
     * 請求先住所_国を設定する<br>
     * @param string $billingAddressCountry 請求先住所_国<br>
     */
    public function setBillingAddressCountry($billingAddressCountry)
    {
        $this->billingAddressCountry = $billingAddressCountry;
    }

    /**
     * 請求先住所1を取得する<br>
     * @return string 請求先住所1<br>
     */
    public function getBillingAddressLine1()
    {
        return $this->billingAddressLine1;
    }

    /**
     * 請求先住所1を設定する<br>
     * @param string $billingAddressLine1 請求先住所1<br>
     */
    public function setBillingAddressLine1($billingAddressLine1)
    {
        $this->billingAddressLine1 = $billingAddressLine1;
    }

    /**
     * 請求先住所2を取得する<br>
     * @return string 請求先住所2<br>
     */
    public function getBillingAddressLine2()
    {
        return $this->billingAddressLine2;
    }

    /**
     * 請求先住所2を設定する<br>
     * @param string $billingAddressLine2 請求先住所2<br>
     */
    public function setBillingAddressLine2($billingAddressLine2)
    {
        $this->billingAddressLine2 = $billingAddressLine2;
    }

    /**
     * 請求先住所3を取得する<br>
     * @return string 請求先住所3<br>
     */
    public function getBillingAddressLine3()
    {
        return $this->billingAddressLine3;
    }

    /**
     * 請求先住所3を設定する<br>
     * @param string $billingAddressLine3 請求先住所3<br>
     */
    public function setBillingAddressLine3($billingAddressLine3)
    {
        $this->billingAddressLine3 = $billingAddressLine3;
    }

    /**
     * 請求先郵便番号を取得する<br>
     * @return string 請求先郵便番号<br>
     */
    public function getBillingPostalCode()
    {
        return $this->billingPostalCode;
    }

    /**
     * 請求先郵便番号を設定する<br>
     * @param string $billingPostalCode 請求先郵便番号<br>
     */
    public function setBillingPostalCode($billingPostalCode)
    {
        $this->billingPostalCode = $billingPostalCode;
    }

    /**
     * 請求先住所_都道府県を取得する<br>
     * @return string 請求先住所_都道府県<br>
     */
    public function getBillingAddressState()
    {
        return $this->billingAddressState;
    }

    /**
     * 請求先住所_都道府県を設定する<br>
     * @param string $billingAddressState 請求先住所_都道府県<br>
     */
    public function setBillingAddressState($billingAddressState)
    {
        $this->billingAddressState = $billingAddressState;
    }

    /**
     * 配送先住所_市区町村を取得する<br>
     * @return string 配送先住所_市区町村<br>
     */
    public function getShippingAddressCity()
    {
        return $this->shippingAddressCity;
    }

    /**
     * 配送先住所_市区町村を設定する<br>
     * @param string $shippingAddressCity 配送先住所_市区町村<br>
     */
    public function setShippingAddressCity($shippingAddressCity)
    {
        $this->shippingAddressCity = $shippingAddressCity;
    }

    /**
     * 配送先住所_国を取得する<br>
     * @return string 配送先住所_国<br>
     */
    public function getShippingAddressCountry()
    {
        return $this->shippingAddressCountry;
    }

    /**
     * 配送先住所_国を設定する<br>
     * @param string $shippingAddressCountry 配送先住所_国<br>
     */
    public function setShippingAddressCountry($shippingAddressCountry)
    {
        $this->shippingAddressCountry = $shippingAddressCountry;
    }

    /**
     * 配送先住所1を取得する<br>
     * @return string 配送先住所1<br>
     */
    public function getShippingAddressLine1()
    {
        return $this->shippingAddressLine1;
    }

    /**
     * 配送先住所1を設定する<br>
     * @param string $shippingAddressLine1 配送先住所1<br>
     */
    public function setShippingAddressLine1($shippingAddressLine1)
    {
        $this->shippingAddressLine1 = $shippingAddressLine1;
    }

    /**
     * 配送先住所2を取得する<br>
     * @return string 配送先住所2<br>
     */
    public function getShippingAddressLine2()
    {
        return $this->shippingAddressLine2;
    }

    /**
     * 配送先住所2を設定する<br>
     * @param string $shippingAddressLine2 配送先住所2<br>
     */
    public function setShippingAddressLine2($shippingAddressLine2)
    {
        $this->shippingAddressLine2 = $shippingAddressLine2;
    }

    /**
     * 配送先住所3を取得する<br>
     * @return string 配送先住所3<br>
     */
    public function getShippingAddressLine3()
    {
        return $this->shippingAddressLine3;
    }

    /**
     * 配送先住所3を設定する<br>
     * @param string $shippingAddressLine3 配送先住所3<br>
     */
    public function setShippingAddressLine3($shippingAddressLine3)
    {
        $this->shippingAddressLine3 = $shippingAddressLine3;
    }

    /**
     * 配送先郵便番号を取得する<br>
     * @return string 配送先郵便番号<br>
     */
    public function getShippingPostalCode()
    {
        return $this->shippingPostalCode;
    }

    /**
     * 配送先郵便番号を設定する<br>
     * @param string $shippingPostalCode 配送先郵便番号<br>
     */
    public function setShippingPostalCode($shippingPostalCode)
    {
        $this->shippingPostalCode = $shippingPostalCode;
    }

    /**
     * 配送先住所_都道府県を取得する<br>
     * @return string 配送先住所_都道府県<br>
     */
    public function getShippingAddressState()
    {
        return $this->shippingAddressState;
    }

    /**
     * 配送先住所_都道府県を設定する<br>
     * @param string $shippingAddressState 配送先住所_都道府県<br>
     */
    public function setShippingAddressState($shippingAddressState)
    {
        $this->shippingAddressState = $shippingAddressState;
    }

    /**
     * 消費者IPアドレスを取得する<br>
     * @return string 消費者IPアドレス<br>
     */
    public function getCustomerIp()
    {
        return $this->customerIp;
    }

    /**
     * 消費者IPアドレスを設定する<br>
     * @param string $customerIp 消費者IPアドレス<br>
     */
    public function setCustomerIp($customerIp)
    {
        $this->customerIp = $customerIp;
    }

    /**
     * チャレンジ認証フラグを取得する<br>
     * @return string チャレンジ認証フラグ<br>
     */
    public function getWithChallenge()
    {
        return $this->withChallenge;
    }

    /**
     * チャレンジ認証フラグを設定する<br>
     * @param string $withChallenge チャレンジ認証フラグ<br>
     */
    public function setWithChallenge($withChallenge)
    {
        $this->withChallenge = $withChallenge;
    }

    /**
     * 認証データを取得する<br>
     * @return string 認証データ<br>
     */
    public function getAuthData()
    {
        return $this->authData;
    }

    /**
     * 認証データを設定する<br>
     * @param string $authData 認証データ<br>
     */
    public function setAuthData($authData)
    {
        $this->authData = $authData;
    }

    /**
     * 認証メソッドを取得する<br>
     * @return string 認証メソッド<br>
     */
    public function getAuthMethod()
    {
        return $this->authMethod;
    }

    /**
     * 認証メソッドを設定する<br>
     * @param string $authMethod 認証メソッド<br>
     */
    public function setAuthMethod($authMethod)
    {
        $this->authMethod = $authMethod;
    }

    /**
     * 認証タイムスタンプを取得する<br>
     * @return string 認証タイムスタンプ<br>
     */
    public function getAuthTimestamp()
    {
        return $this->authTimestamp;
    }

    /**
     * 認証タイムスタンプを設定する<br>
     * @param string $authTimestamp 認証タイムスタンプ<br>
     */
    public function setAuthTimestamp($authTimestamp)
    {
        $this->authTimestamp = $authTimestamp;
    }

    /**
     * アカウント所持期間インジケーターを取得する<br>
     * @return string アカウント所持期間インジケーター<br>
     */
    public function getAccountAgeIndicator()
    {
        return $this->accountAgeIndicator;
    }

    /**
     * アカウント所持期間インジケーターを設定する<br>
     * @param string $accountAgeIndicator アカウント所持期間インジケーター<br>
     */
    public function setAccountAgeIndicator($accountAgeIndicator)
    {
        $this->accountAgeIndicator = $accountAgeIndicator;
    }

    /**
     * アカウント最終変更日を取得する<br>
     * @return string アカウント最終変更日<br>
     */
    public function getAccountChangeDate()
    {
        return $this->accountChangeDate;
    }

    /**
     * アカウント最終変更日を設定する<br>
     * @param string $accountChangeDate アカウント最終変更日<br>
     */
    public function setAccountChangeDate($accountChangeDate)
    {
        $this->accountChangeDate = $accountChangeDate;
    }

    /**
     * アカウント変更インジケーターを取得する<br>
     * @return string アカウント変更インジケーター<br>
     */
    public function getAccountChangeIndicator()
    {
        return $this->accountChangeIndicator;
    }

    /**
     * アカウント変更インジケーターを設定する<br>
     * @param string $accountChangeIndicator アカウント変更インジケーター<br>
     */
    public function setAccountChangeIndicator($accountChangeIndicator)
    {
        $this->accountChangeIndicator = $accountChangeIndicator;
    }

    /**
     * アカウント開設日を取得する<br>
     * @return string アカウント開設日<br>
     */
    public function getAccountDate()
    {
        return $this->accountDate;
    }

    /**
     * アカウント開設日を設定する<br>
     * @param string $accountDate アカウント開設日<br>
     */
    public function setAccountDate($accountDate)
    {
        $this->accountDate = $accountDate;
    }

    /**
     * アカウントパスワード最終変更日を取得する<br>
     * @return string アカウントパスワード最終変更日<br>
     */
    public function getAccountPasswordChangeDate()
    {
        return $this->accountPasswordChangeDate;
    }

    /**
     * アカウントパスワード最終変更日を設定する<br>
     * @param string $accountPasswordChangeDate アカウントパスワード最終変更日<br>
     */
    public function setAccountPasswordChangeDate($accountPasswordChangeDate)
    {
        $this->accountPasswordChangeDate = $accountPasswordChangeDate;
    }

    /**
     * アカウントパスワード変更インジケーターを取得する<br>
     * @return string アカウントパスワード変更インジケーター<br>
     */
    public function getAccountPasswordChangeIndicator()
    {
        return $this->accountPasswordChangeIndicator;
    }

    /**
     * アカウントパスワード変更インジケーターを設定する<br>
     * @param string $accountPasswordChangeIndicator アカウントパスワード変更インジケーター<br>
     */
    public function setAccountPasswordChangeIndicator($accountPasswordChangeIndicator)
    {
        $this->accountPasswordChangeIndicator = $accountPasswordChangeIndicator;
    }

    /**
     * アカウント購入数を取得する<br>
     * @return string アカウント購入数<br>
     */
    public function getAccountPurchaseCount()
    {
        return $this->accountPurchaseCount;
    }

    /**
     * アカウント購入数を設定する<br>
     * @param string $accountPurchaseCount アカウント購入数<br>
     */
    public function setAccountPurchaseCount($accountPurchaseCount)
    {
        $this->accountPurchaseCount = $accountPurchaseCount;
    }

    /**
     * カード追加試行回数を取得する<br>
     * @return string カード追加試行回数<br>
     */
    public function getAccountProvisioningAttempts()
    {
        return $this->accountProvisioningAttempts;
    }

    /**
     * カード追加試行回数を設定する<br>
     * @param string $accountProvisioningAttempts カード追加試行回数<br>
     */
    public function setAccountProvisioningAttempts($accountProvisioningAttempts)
    {
        $this->accountProvisioningAttempts = $accountProvisioningAttempts;
    }

    /**
     * 前日アカウント購入数を取得する<br>
     * @return string 前日アカウント購入数<br>
     */
    public function getAccountDayTransactions()
    {
        return $this->accountDayTransactions;
    }

    /**
     * 前日アカウント購入数を設定する<br>
     * @param string $accountDayTransactions 前日アカウント購入数<br>
     */
    public function setAccountDayTransactions($accountDayTransactions)
    {
        $this->accountDayTransactions = $accountDayTransactions;
    }

    /**
     * 前年アカウント購入数を取得する<br>
     * @return string 前年アカウント購入数<br>
     */
    public function getAccountYearTransactions()
    {
        return $this->accountYearTransactions;
    }

    /**
     * 前年アカウント購入数を設定する<br>
     * @param string $accountYearTransactions 前年アカウント購入数<br>
     */
    public function setAccountYearTransactions($accountYearTransactions)
    {
        $this->accountYearTransactions = $accountYearTransactions;
    }

    /**
     * 支払いアカウント登録日を取得する<br>
     * @return string 支払いアカウント登録日<br>
     */
    public function getPaymentAccountAge()
    {
        return $this->paymentAccountAge;
    }

    /**
     * 支払いアカウント登録日を設定する<br>
     * @param string $paymentAccountAge 支払いアカウント登録日<br>
     */
    public function setPaymentAccountAge($paymentAccountAge)
    {
        $this->paymentAccountAge = $paymentAccountAge;
    }

    /**
     * 支払いアカウント所持期間インジケーターを取得する<br>
     * @return string 支払いアカウント所持期間インジケーター<br>
     */
    public function getPaymentAccountAgeIndicator()
    {
        return $this->paymentAccountAgeIndicator;
    }

    /**
     * 支払いアカウント所持期間インジケーターを設定する<br>
     * @param string $paymentAccountAgeIndicator 支払いアカウント所持期間インジケーター<br>
     */
    public function setPaymentAccountAgeIndicator($paymentAccountAgeIndicator)
    {
        $this->paymentAccountAgeIndicator = $paymentAccountAgeIndicator;
    }

    /**
     * 配送先住所初回使用日を取得する<br>
     * @return string 配送先住所初回使用日<br>
     */
    public function getShipAddressUsageDate()
    {
        return $this->shipAddressUsageDate;
    }

    /**
     * 配送先住所初回使用日を設定する<br>
     * @param string $shipAddressUsageDate 配送先住所初回使用日<br>
     */
    public function setShipAddressUsageDate($shipAddressUsageDate)
    {
        $this->shipAddressUsageDate = $shipAddressUsageDate;
    }

    /**
     * 配送先住所利用状況インジケーターを取得する<br>
     * @return string 配送先住所利用状況インジケーター<br>
     */
    public function getShipAddressUsageIndicator()
    {
        return $this->shipAddressUsageIndicator;
    }

    /**
     * 配送先住所利用状況インジケーターを設定する<br>
     * @param string $shipAddressUsageIndicator 配送先住所利用状況インジケーター<br>
     */
    public function setShipAddressUsageIndicator($shipAddressUsageIndicator)
    {
        $this->shipAddressUsageIndicator = $shipAddressUsageIndicator;
    }

    /**
     * 配送先名インジケーターを取得する<br>
     * @return string 配送先名インジケーター<br>
     */
    public function getShipNameIndicator()
    {
        return $this->shipNameIndicator;
    }

    /**
     * 配送先名インジケーターを設定する<br>
     * @param string $shipNameIndicator 配送先名インジケーター<br>
     */
    public function setShipNameIndicator($shipNameIndicator)
    {
        $this->shipNameIndicator = $shipNameIndicator;
    }

    /**
     * 不審アカウントアクティビティを取得する<br>
     * @return string 不審アカウントアクティビティ<br>
     */
    public function getSuspiciousAccountActivity()
    {
        return $this->suspiciousAccountActivity;
    }

    /**
     * 不審アカウントアクティビティを設定する<br>
     * @param string $suspiciousAccountActivity 不審アカウントアクティビティ<br>
     */
    public function setSuspiciousAccountActivity($suspiciousAccountActivity)
    {
        $this->suspiciousAccountActivity = $suspiciousAccountActivity;
    }

    /**
     * リクエスターチャレンジインジケーターを取得する<br>
     * @return string リクエスターチャレンジインジケーター<br>
     */
    public function getRequestorChallengeIndicator()
    {
        return $this->requestorChallengeIndicator;
    }

    /**
     * リクエスターチャレンジインジケーターを設定する<br>
     * @param string $requestorChallengeIndicator リクエスターチャレンジインジケーター<br>
     */
    public function setRequestorChallengeIndicator($requestorChallengeIndicator)
    {
        $this->requestorChallengeIndicator = $requestorChallengeIndicator;
    }

    /**
     * 商品お届け先メールアドレスを取得する<br>
     * @return string 商品お届け先メールアドレス<br>
     */
    public function getDeliveryEmailAddress()
    {
        return $this->deliveryEmailAddress;
    }

    /**
     * 商品お届け先メールアドレスを設定する<br>
     * @param string $deliveryEmailAddress 商品お届け先メールアドレス<br>
     */
    public function setDeliveryEmailAddress($deliveryEmailAddress)
    {
        $this->deliveryEmailAddress = $deliveryEmailAddress;
    }

    /**
     * プレオーダー購入インジケーターを取得する<br>
     * @return string プレオーダー購入インジケーター<br>
     */
    public function getPreOrderPurchaseIndicator()
    {
        return $this->preOrderPurchaseIndicator;
    }

    /**
     * プレオーダー購入インジケーターを設定する<br>
     * @param string $preOrderPurchaseIndicator プレオーダー購入インジケーター<br>
     */
    public function setPreOrderPurchaseIndicator($preOrderPurchaseIndicator)
    {
        $this->preOrderPurchaseIndicator = $preOrderPurchaseIndicator;
    }

    /**
     * 再注文商品インジケーターを取得する<br>
     * @return string 再注文商品インジケーター<br>
     */
    public function getReorderItemsIndicator()
    {
        return $this->reorderItemsIndicator;
    }

    /**
     * 再注文商品インジケーターを設定する<br>
     * @param string $reorderItemsIndicator 再注文商品インジケーター<br>
     */
    public function setReorderItemsIndicator($reorderItemsIndicator)
    {
        $this->reorderItemsIndicator = $reorderItemsIndicator;
    }

    /**
     * 配送方法インジケーターを取得する<br>
     * @return string 配送方法インジケーター<br>
     */
    public function getShipIndicator()
    {
        return $this->shipIndicator;
    }

    /**
     * 配送方法インジケーターを設定する<br>
     * @param string $shipIndicator 配送方法インジケーター<br>
     */
    public function setShipIndicator($shipIndicator)
    {
        $this->shipIndicator = $shipIndicator;
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
