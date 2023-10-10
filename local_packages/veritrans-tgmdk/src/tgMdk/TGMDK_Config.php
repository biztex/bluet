<?php

namespace tgMdk;

/**
 *
 * 設定情報管理クラス
 *
 * 設定ファイルの読み取り、設定ファイルを使用する各クラスへのインターフェイスを提供する
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 */
class TGMDK_Config
{

    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // >>>> インスタンス変数、スタティック（クラス）変数
    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    /** 当クラスのインスタンスを保持する変数 */
    private static $instance = null;    //  このクラスへの静的なアクセス
    /** プロパティの情報を保持する変数 */
    private static $m_config = null;    // プロパティ連想配列（2次元連想配列）
    /** 例外を配列で保持する変数 */
    private $valids;                    //  Validateエラーの内容を保持する配列
    /** 呼び出すプロパティファイルパスを格納する変数 */
    private $conf_file_name;

    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // >>>> 定数 - セクション
    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    /** プロパティから取得するためのセクション情報 － Service */
    const SERVICE_SECTION = "Service";                // FOR [Service]
    /** プロパティから取得するためのセクション情報 － Cipher */
    const CIPHER_SECTION = "Cipher";                 // FOR [TGMDK_Cipher]
    /** プロパティから取得するためのセクション情報 － Connection */
    const CONNECTION_SECTION = "Connection";             // FOR [TGMDK_Connection]
    /** プロパティから取得するためのセクション情報 － RequestDto */
    const REQUEST_DTO_SECTION = "RequestDto";             // FOR [RequestDto]
    /** プロパティから取得するためのセクション情報 － ResponseDto */
    const RESPONSE_DTO_SECTION = "ResponseDto";            // FOR [ResponseDto]
    /** プロパティから取得するためのセクション情報 － Url */
    const URL_SECTION = "Url";                    // FOR [Url]


    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // >>>> 定数 - パラメータキー
    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //  [Service] - 3gpsmdk.properties
    /** プロパティから取得するためのパラメータキー ： ダミーリクエスト */
    const DUMMY_REQUEST = "DUMMY_REQUEST";                // ダミーモード（テスト時のみ指定）
    /** プロパティから取得するためのパラメータキー ： エラーモード */
    const MDK_ERROR_MODE = "MDK_ERROR_MODE";               // MDK固有エラーモード(テスト時のみ指定）
    //  [Service] - internal.properties
    /** プロパティから取得するためのパラメータキー ： MDKバージョン */
    const MDK_VERSION = "MDK_VERSION";                  //  MDKバージョン
    //  [Service] - dto.properties
    /** プロパティから取得するためのパラメータキー ： MDK DTO バージョン */
    const MDK_DTO_VERSION = "MDK_DTO_VERSION";              //  MDK DTOバージョン

    //  [Cipher] - 3gpsmdk.properties
    /** プロパティから取得するためのパラメータキー ： エンドポイント暗号化のサーバ公開鍵 */
    const TRUST_CERT_FILE = "TRUST_CERT_FILE";              // ENDPOINT暗号化用 公開鍵ファイル名
    /** プロパティから取得するためのパラメータキー ： エンドポイント暗号化のクライアント秘密鍵 */
    const PRIVATE_CERT_FILE = "PRIVATE_CERT_FILE";            // Endpoint暗号化用 マーチャント鍵ペアファイル名
    /** プロパティから取得するためのパラメータキー ： エンドポイント暗号化のクライアント公開鍵 */
    const PRIVATE_CERT_PUBLIC_FILE = "PRIVATE_CERT_PUBLIC_FILE";     // Endpoint暗号化用 マーチャント鍵公開ファイル名

    /** プロパティから取得するためのパラメータキー ： エンドポイント暗号化のクライアント秘密鍵のパスワード */
    const PRIVATE_CERT_PASSWORD = "PRIVATE_CERT_PASSWORD";        // ENDPOINT暗号化用 秘密鍵パスワード
    //  [Cipher] - internal.properties
    /** プロパティから取得するためのパラメータキー ： メッセージダイジェストのアルゴリズム */
    const MESSAGE_DIGEST_TYPE = "MESSAGE_DIGEST_TYPE";          // メッセージダイジェストのアルゴリズム

    //  [Connection] - 3gpsmdk.properties
    /** プロパティから取得するためのパラメータキー ： GWのURL */
    const HOST_URL = "HOST_URL";                     // GWのURL
    /** プロパティから取得するためのパラメータキー ： プロキシサーバドメイン */
    const PROXY_SERVER = "PROXY_SERVER";                 // PROXYサーバ
    /** プロパティから取得するためのパラメータキー ： プロキシサーバポート */
    const PROXY_PORT = "PROXY_PORT";                   // PROXYポート
    /** プロパティから取得するためのパラメータキー ： プロキシサーバ ユーザ名 */
    const PROXY_USERNAME = "PROXY_USERNAME";               // PROXY認証ユーザ
    /** プロパティから取得するためのパラメータキー ： プロキシサーバ パスワード */
    const PROXY_PASSWORD = "PROXY_PASSWORD";               // PROXY認証パスワード
    /** プロパティから取得するためのパラメータキー ： プロキシサーバURL */
    const PROXY_SERVER_URL = "PROXY_SERVER_URL";             // PROXYサーバのURL
    /** プロパティから取得するためのパラメータキー ： マーチャントCCID */
    const MERCHANT_CC_ID = "MERCHANT_CC_ID";               // マーチャントCCID
    /** プロパティから取得するためのパラメータキー ： マーチャントパスワード */
    const MERCHANT_SECRET_KEY = "MERCHANT_SECRET_KEY";          // マーチャントパスワード
    /** プロパティから取得するためのパラメータキー ： SSL用サーバ公開鍵 */
    const CA_CERT_FILE = "CA_CERT_FILE";                 // 認証局  CA証明書ファイル名
    /** プロパティから取得するためのパラメータキー ： SSL用クライアント秘密鍵 */
    const CLIENT_CERT_FILE = "CLIENT_CERT_FILE";             // SSL Client Auth 証明書ファイル
    /** プロパティから取得するためのパラメータキー ： SSL用クライアント秘密鍵のパスワード */
    const CLIENT_CERT_PASSWORD = "CLIENT_CERT_PASSWORD";         // SSL Client Auth 証明書パスワード
    /** プロパティから取得するためのパラメータキー ： サーバ鍵のエイリアス名 */
    const BODY_ENCRYPT_SVR_ALIAS_NAME = "BODY_ENCRYPT_SVR_ALIAS_NAME";  // サーバキーエイリアス名
    /** プロパティから取得するためのパラメータキー ： クライアント鍵のエイリアス名 */
    const BODY_ENCRYPT_MDK_ALIAS_NAME = "BODY_ENCRYPT_MDK_ALIAS_NAME";  // マーチャントキーエイリアス名
    //  [Connection] - internal.properties
    /** プロパティから取得するためのパラメータキー ： 接続タイムアウト時間 */
    const CONNECTION_TIMEOUT = "CONNECTION_TIMEOUT";           // 接続タイムアウト
    /** プロパティから取得するためのパラメータキー ： 読み取りタイムアウト時間 */
    const READ_TIMEOUT = "READ_TIMEOUT";                 // 読み取りタイムアウト
    //  [RequestDto] - internal.properties
    /** プロパティから取得するためのパラメータキー ： 共通項目 */
    const COMMON_ITEM = "COMMON_ITEM";                  //  RequestDto共通項目バージョン
    //  [ResponseDto] - internal.properties
    /** プロパティから取得するためのパラメータキー ： マスク項目 */
    const MASK_ITEM = "MASK_ITEM";                    //  ResponseDto伏字対象項目
    // [Url] - internal.properties
    /** プロパティから取得するためのパラメータキー : 決済のバージョン */
    const ADD_URL_PAYMENT_VERSION = "ADD_URL_PAYMENT_VERSION";
    /** プロパティから取得するためのパラメータキー : VTIDのバージョン */
    const ADD_URL_VTID_VERSION = "ADD_URL_VTID_VERSION";
    /** プロパティから取得するためのパラメータキー : 決済のURL付加情報 */
    const ADD_URL_PAYMENT = "ADD_URL_PAYMENT";
    /** プロパティから取得するためのパラメータキー : VTIDのURL付加情報 */
    const ADD_URL_VTID = "ADD_URL_VTID";
    /** プロパティから取得するためのパラメータキー : VTIDのサービスタイプ */
    const PAYNOWID_SERVICE_TYPE = "PAYNOWID_SERVICE_TYPE";

    /**
     *  コンストラクタ。
     *
     * @param string|null $configFileName 読み込むコンフィグファイル名
     * @throws TGMDK_Exception コンフィグファイルの読み取り失敗で例外発生
     */
    private function __construct(?string $configFileName = null)
    {
        if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);                       //  DS ディレクトリセパレータ省略形
        if (!defined('LF')) define('LF', PHP_EOL);                                   //  OS依存の改行

        if (!defined('MDK_DIR')) define('MDK_DIR', dirname(__FILE__));                    //  MDKインストールディレクトリ
        if (!defined('MDK_DTO_DIR')) define('MDK_DTO_DIR', MDK_DIR . DS . "dto");

        $this->resetErrors();
        $err = array();

        //  コンフィグファイルの指定がある場合は、デフォルトコンフィグファイル名を変更する
        if ($configFileName == null) {
            $this->conf_file_name = MDK_DIR . DS . "3GPSMDK.properties";
        } else {
            $this->conf_file_name = $configFileName;
        }

        $intconf_filename = MDK_DIR . DS . "mdkinternal.properties";
        $dtoconf_filename = MDK_DTO_DIR . DS . "dto.properties";

        if (is_readable($this->conf_file_name)) {
            self::$m_config = @parse_ini_file($this->conf_file_name, true);

        } else {
            $ex = new TGMDK_Exception(TGMDK_Exception::MA05_CONF_FILE_DOES_NOT_EXIST,
                "Mdk properties", $this->conf_file_name);
            $msg = $ex->getMessage();
            if (TGMDK_ErrorMessage::UNKNOWN == $msg) {
                // エラーメッセージファイルが読めない可能性もあるため
                // 代替の英語メッセージをセットしておく
                $msg = "Mdk properties file does not exist at " . $this->conf_file_name;
            }
            array_push($err, $msg . "\n");
        }

        if (is_readable($intconf_filename)) {
            $tempMap = @parse_ini_file($intconf_filename, true);
            self::$m_config = @array_merge_recursive(self::$m_config, $tempMap);

        } else {
            $ex = new TGMDK_Exception(TGMDK_Exception::MA05_CONF_FILE_DOES_NOT_EXIST,
                "Mdk internal properties", $intconf_filename);
            $msg = $ex->getMessage();
            if (TGMDK_ErrorMessage::UNKNOWN == $msg) {
                // エラーメッセージファイルが読めない可能性もあるため
                // 代替の英語メッセージをセットしておく
                $msg = "Mdk internal properties file does not exist at " . $intconf_filename;
            }
            array_push($err, $msg . "\n");
        }

        if (is_readable($dtoconf_filename)) {
            $dtoMap = @parse_ini_file($dtoconf_filename, true);
            self::$m_config = @array_merge_recursive(self::$m_config, $dtoMap);

        } else {
            $ex = new TGMDK_Exception(TGMDK_Exception::MA05_CONF_FILE_DOES_NOT_EXIST,
                "Mdk DTO properties", $dtoconf_filename);
            $msg = $ex->getMessage();
            if (TGMDK_ErrorMessage::UNKNOWN == $msg) {
                // エラーメッセージファイルが読めない可能性もあるため
                // 代替の英語メッセージをセットしておく
                $msg = "Mdk DTO properties file does not exist at " . $dtoconf_filename;
            }
            array_push($err, $msg . "\n");
        }

        /* ====================================================== */
        /* 動的マーチャント処理                                   */
        /* TGMDK_MerchantSettingContextが設定されている場合の処理 */
        /* ====================================================== */
        // マーチャントID
        $merchant_ccid = TGMDK_MerchantSettingContext::get_merchant_ccid();       // マーチャントCCID
        $merchant_secret_key = TGMDK_MerchantSettingContext::get_merchant_secret_key(); // マーチャントパスワード
        $connection_timeout = TGMDK_MerchantSettingContext::get_connection_timeout();  // 接続タイムアウト
        $read_timeout = TGMDK_MerchantSettingContext::get_read_timeout();        // 読み取りタイムアウト
        $dummy_request = TGMDK_MerchantSettingContext::get_dummy_request();       // ダミーリクエスト

        // マーチャントCCIDのチェック＆上書き
        if (isset($merchant_ccid))
            self::$m_config[self::CONNECTION_SECTION][self::MERCHANT_CC_ID] = $merchant_ccid;
        // マーチャントパスワードのチェック＆上書き
        if (isset($merchant_secret_key))
            self::$m_config[self::CONNECTION_SECTION][self::MERCHANT_SECRET_KEY] = $merchant_secret_key;
        // 接続タイムアウトのチェック＆上書き
        if (isset($connection_timeout))
            self::$m_config[self::CONNECTION_SECTION][self::CONNECTION_TIMEOUT] = $connection_timeout;
        // 読み取りタイムアウトのチェック＆上書き
        if (isset($read_timeout)) {
            self::$m_config[self::CONNECTION_SECTION][self::READ_TIMEOUT] = $read_timeout;
        }
        // ダミーリクエストのチェック＆上書き
        if (isset($dummy_request))
            self::$m_config[self::SERVICE_SECTION][self::DUMMY_REQUEST] = $dummy_request;

        //  エラーメッセージの有無を判断してエラーを出力
        if (!empty($err)) {
            throw new TGMDK_Exception(TGMDK_Exception::MB01_NOT_FOUND_CONFIG_FILE, implode(PHP_EOL, $err));
            //throw new Exception(implode(PHP_EOL, $err));
        }
    }

    /**
     *
     * TGMDK_Config クラスをインスタンス化する
     *
     * @param string|null $configFileName コンフィグファイル
     * @return TGMDK_Config 静的なコンフィグクラスのインスタンス
     * @throws TGMDK_Exception コンフィグファイルの読み取り失敗で例外発生
     */
    public static function getInstance(?string $configFileName = null)
    {
        if (self::$instance == NULL) {
            self::$instance = new TGMDK_Config($configFileName);
        }
        return self::$instance;
    }

    /**
     * コンフィグファイルの各パラメータの検証を行う
     *
     * @param bool $validOnly エラー発生時、TRUEは例外をスローしない、FALSEは例外をスローする
     * @return bool パラメータの検証に成功: TRUE、それ以外: FALSE
     */
    public function validate($validOnly = FALSE)
    {
        /***********************************************************************
         * Service セクションのキーと値の確認
         ***********************************************************************/
        //  DUMMY_REQUEST
        $this->presence_of(self::SERVICE_SECTION, self::DUMMY_REQUEST);
        $this->numeric_of(self::SERVICE_SECTION, self::DUMMY_REQUEST);

        //  MDK_ERROR_MODE
        $this->presence_of(self::SERVICE_SECTION, self::MDK_ERROR_MODE);
        $this->numeric_of(self::SERVICE_SECTION, self::MDK_ERROR_MODE);

        //  MDK_VERSION
        $this->presence_of(self::SERVICE_SECTION, self::MDK_VERSION);

        //  MDK_DTO_VERSION
        $this->presence_of(self::SERVICE_SECTION, self::MDK_DTO_VERSION);

        /***********************************************************************
         * Connection セクションのキーと値の確認
         ***********************************************************************/
        //  MERCHANT_CC_ID
        $this->presence_of(self::CONNECTION_SECTION, self::MERCHANT_CC_ID);

        //  MERCHANT_SECRET_KEY
        $this->presence_of(self::CONNECTION_SECTION, self::MERCHANT_SECRET_KEY);

        //  CA_CERT_FILE
        $this->presence_of(self::CONNECTION_SECTION, self::CA_CERT_FILE);
        $this->exist_of(self::CONNECTION_SECTION, self::CA_CERT_FILE);

        // 定義があり値がある場合のみチェックを行う
        if (isset(self::$m_config[self::CONNECTION_SECTION][self::CLIENT_CERT_FILE])) {
            //  CLIENT_CERT_FILE
            $this->presence_of(self::CONNECTION_SECTION, self::CLIENT_CERT_FILE);
            $this->exist_of(self::CONNECTION_SECTION, self::CLIENT_CERT_FILE);

            //  CLIENT_CERT_PASSWORD
            $this->presence_of(self::CONNECTION_SECTION, self::CLIENT_CERT_PASSWORD);
        }

        //  CONNECTION_TIMEOUT
        $this->presence_of(self::CONNECTION_SECTION, self::CONNECTION_TIMEOUT);
        $this->numeric_of(self::CONNECTION_SECTION, self::CONNECTION_TIMEOUT);

        //  READ_TIMEOUTは値がある場合のみチェックを行う
        if (isset(self::$m_config[self::CONNECTION_SECTION][self::READ_TIMEOUT])) {
            $this->presence_of(self::CONNECTION_SECTION, self::READ_TIMEOUT);
            $this->numeric_of(self::CONNECTION_SECTION, self::READ_TIMEOUT);
        }

        /***********************************************************************
         * RequestDto セクションのキーと値の確認
         ***********************************************************************/
        //  COMMON_ITEM
        $this->presence_of(self::REQUEST_DTO_SECTION, self::COMMON_ITEM);

        /***********************************************************************
         * ResponseDto セクションのキーと値の確認
         ***********************************************************************/
        //  MASK_ITEM
        $this->presence_of(self::RESPONSE_DTO_SECTION, self::MASK_ITEM);


        // メソッドの戻り値を設定 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        if ($validOnly == TRUE) {
            // 検証のみ
            if (empty($this->valids)) {
                //  エラーなし
                return TRUE;
            } else {
                //  エラーあり
                return FALSE;
            }
        } else {
            //  例外を発生
            if (empty($this->valids)) {
                //  エラーなし
                return TRUE;
            } else {
                //  エラーあり（例外発生）
                //  とりあえず最初のエラーを返す(resetは配列の先頭要素を返す)
                //  全部取得する場合は、getErrors()で配列を取得
                throw reset($this->valids);
            }
        }
    }

    //  数値を表している場合 TRUE、それ以外は FALSE
    private function numeric_of($section, $key)
    {
        if (is_numeric(self::$m_config[$section][$key])) {
            return TRUE;
        }

        //  書式のエラー
        $this->addError(new TGMDK_Exception(TGMDK_Exception::MA02_CONFIG_NOT_CORRECT,
            $section, $key, self::$m_config[$section][$key]));
        return FALSE;
    }

    //  ファイルもしくはディレクトリが存在する場合は TRUE、それ以外は FALSE
    private function exist_of($section, $key)
    {
        if (file_exists(self::$m_config[$section][$key])) {
            return TRUE;
        }

        //  Does not exist エラー
        $this->addError(new TGMDK_Exception(TGMDK_Exception::MA03_FILE_DOES_NOT_EXIST,
            $section, $key, self::$m_config[$section][$key]));
        return FALSE;
    }

    //  パラメータに値が設定されている場合は TRUE、 それ以外は FALSE
    private function presence_of($section, $key)
    {
        $var = self::$m_config[$section][$key];
        //if (!empty(self::$m_config[$section][$key])) {
        if (!is_null($var) && $var !== '') {
            return TRUE;
        }

        //  設定なしエラー
        $this->addError(new TGMDK_Exception(TGMDK_Exception::MA01_CONFIG_MISSING,
            $section, $key, self::$m_config[$section][$key]));
        return FALSE;
    }

    //  Error原因を保存する配列をリセットする
    private function resetErrors()
    {
        unset ($this->valids);
        $this->valids = array();
    }

    /**
     * Error原因を配列に保存する
     * @param TGMDK_Exception $cause
     */
    private function addError(TGMDK_Exception $cause)
    {
        array_push($this->valids, $cause);
    }

    /**
     *
     *  validate時に発生した例外を返却する
     *
     * @return TGMDK_Exception[] validate時に発生した例外の配列
     */
    public function getErrors(): array
    {
        return $this->valids;
    }

    /**
     * サービスに必要なパラメータを連想配列で返す
     *
     * @return array パラメータ（連想配列）
     */
    public function getServiceParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getServiceSection());
        return $retMap;
    }

    /**
     * 電文暗号化に必要なパラメータを連想配列で返す
     *
     * @return array パラメータ（連想配列）
     */
    public function getCipherParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getCipherSection());
        return $retMap;
    }

    /**
     * 通信に必要なパラメータを連想配列で返す
     *
     * @return array パラメータ（連想配列）
     */
    public function getConnectionParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getServiceSection());
        $retMap = array_merge($retMap, $this->getConnectionSection(TRUE));
        return $retMap;
    }

    /**
     * RequestDto に必要なパラメータを連想配列で返す
     *
     * @return array パラメータ（連想配列）
     */
    public function getRequestDtoParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getRequestDtoSection());
        return $retMap;
    }

    /**
     * メイン動作(Transaction)に必要なパラメータを連想配列で返す
     *
     * @return array パラメータ（連想配列）
     */
    public function getTransactionParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getServiceSection());
        $retMap = array_merge($retMap, $this->getConnectionSection(TRUE));
        $retMap = array_merge($retMap, $this->getCipherSection());
        $retMap = array_merge($retMap, $this->getUrlSection());
        return $retMap;
    }

    /**
     * ResponseDto に必要なパラメータを連想配列で返す
     *
     * @return array パラメータ（連想配列）
     */
    public function getResponseDtoParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getResponseDtoSection());
        return $retMap;
    }

    /**
     * Urlに必要なパラメータの連想配列を返す
     * @return array パラメータ（連想配列）
     */
    public function getUrlParameters()
    {
        $retMap = array();
        $retMap = array_merge($retMap, $this->getUrlSection());
        return $retMap;
    }

    // Service Sectionの連想配列を返す
    private function getServiceSection()
    {
        return self::$m_config[self::SERVICE_SECTION];
    }

    // Cipher Sectionの連想配列を返す
    private function getCipherSection()
    {
        return self::$m_config[self::CIPHER_SECTION];
    }

    // Connection Sectionの連想配列を返す
    // @param boolean $fillReadTimeout READ_TIMEOUTの値がない場合にREAD_TIMEOUTの値にCONNECTION_TIMEOUTの値を代入して返す
    private function getConnectionSection($fillReadTimeout = FALSE)
    {
        if ($fillReadTimeout == TRUE) {
            $retMap = self::$m_config[self::CONNECTION_SECTION];
            if (!isset($retMap[self::READ_TIMEOUT])) {
                $retMap[self::READ_TIMEOUT] = $retMap[self::CONNECTION_TIMEOUT];
            }
            return $retMap;
        }
        return self::$m_config[self::CONNECTION_SECTION];
    }

    // RequestDto Sectionの連想配列を返す
    private function getRequestDtoSection()
    {
        return self::$m_config[self::REQUEST_DTO_SECTION];
    }

    // ResponseDto Sectionの連想配列を返す
    private function getResponseDtoSection()
    {
        return self::$m_config[self::RESPONSE_DTO_SECTION];
    }

    // Url Sectionの連想配列を返す
    private function getUrlSection()
    {
        return self::$m_config[self::URL_SECTION];
    }

    /**
     * 電文のヘッダ情報に載せるuser-agent情報の文字列を返す
     *
     * @return string user-agent情報
     */
    public function getUserAgent()
    {
        return
            "VeriTrans 4GMDK/" .
            self::$m_config[self::SERVICE_SECTION][self::MDK_VERSION] . "/" .
            self::$m_config[self::SERVICE_SECTION][self::MDK_DTO_VERSION] .
            " (PHP " . phpversion() . "; " . ")";
    }

    /**
     * インスタンス生成時のコンフィグファイル名取得（UNITテスト用）
     *
     * @return string コンフィグファイル名
     */
    public function __getConfigFileName()
    {
        return $this->conf_file_name;
    }

    /**
     * 静的なインスタンスを破棄する（UNITテスト用）
     */
    public static function __reset()
    {
        self::$m_config = NULL;
        self::$instance = NULL;
    }
}
