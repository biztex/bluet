<?php

namespace tgMdk;

use Exception;
use tgMdk\dto\MdkBaseDto;
use Throwable;

/**
 *
 * PHP版トランザクション実行処理管理クラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author VeriTrans Inc.
 */
class TGMDK_Transaction
{

    /** ロガー */
    private $logger;

    /** エンコードの種類を示す定数：暗号化 */
    const ENCODE_ENCRYPTION = 1;
    /** エンコードの種類を示す定数：Base64Encode */
    const ENCODE_BASE_64_ENCODE = 2;
    /** エンコードの種類を示す定数：HTMLEncode */
    const ENCODE_HTML_ENCODE = 3;
    /** エンコードの種類を示す定数：エンコードの必要なし */
    const ENCODE_NON = 0;
    /** URLの区切り文字 */
    const SLASH = "/";
    /** URLの区切り文字 */
    const HYPHEN = "-";
    /** サービスコマンド:Search */
    const SERVICE_COMMAND_SEARCH = "Search";
    /** 検索処理サーバURL付与文字列 */
    const SEARCH_SERVER = "search";
    /** ダミー処理サーバURL付与文字列 */
    const DUMMY_SERVER = "test";

    /**
     * コンストラクタ。
     * ロガーを取得する。
     */
    public function __construct()
    {
        // ロガーを取得
        $work = TGMDK_Logger::getInstance();
        $this->logger = $work;
    }

    /**
     * リクエストDTOから呼び出すパラメータを作成して送信し、
     * 結果をレスポンスDTOに格納して返す。
     *
     * @access  public
     * @param MdkBaseDto $requestDto 処理を行う各リクエストDTO
     * @param array|null $props マルチマーチャント用設定内容
     * @return mixed リクエストDTOに紐付くレスポンスDTO
     */
    public function execute($requestDto, ?array $props = null)
    {
        try {
            $this->logger->debug("TGMDK_Transaction.execute() start");

            // リクエストDTOクラス名からレスポンスDTOクラス名を取得
            $responseDtoName = str_replace("RequestDto", "ResponseDto", get_class($requestDto));

            // レスポンスDTOからクラスが生成できるかをチェック
            if (class_exists($responseDtoName) == false) {
                throw new Exception("Not found response dto class. [$responseDtoName]");
            }

            // TGMDK_Configファイルの読み込み
            $config = TGMDK_Config::getInstance();

            // エラーがある場合
            // エラー内容のログはcheck_config内で出力されているため
            // ここのtry～catchではログを出力せずにレスポンスDTOのみ生成して返却する。
            // throwしてしまうと、catch文で同じログの出力をおこなってしまうためthrowしない。
            try {
                // TGMDK_Configのチェック
                $this->check_config($config);
            } catch (TGMDK_Exception $conf_error) {
                try {
                    $this->logger->debug("TGMDK_Transaction.execute() end");

                    // リクエストDTOクラス名からレスポンスDTOクラス名を取得
                    return $this->set_error_response_dto($requestDto, $conf_error->get_v_result_code(), $conf_error->getMessage());
                } catch (Throwable $conf_error2) {
                    // ログ出力
                    $this->logger->error($conf_error2->getMessage());

                    return null;
                }
            }

            // トランザクション用のConfigを取得する
            $conf_array = $config->getTransactionParameters();

            // マーチャントCCIDのチェック＆上書き
            if (isset($props["merchant_ccid"])) {
                $conf_array[TGMDK_Config::MERCHANT_CC_ID] = $props["merchant_ccid"];
            }
            // マーチャントパスワードのチェック＆上書き
            if (isset($props["merchant_secret_key"])) {
                $conf_array[TGMDK_Config::MERCHANT_SECRET_KEY] = $props["merchant_secret_key"];
            }
            // ダミーリクエストのチェック＆上書き
            if (isset($props["dummy_request"])) {
                $conf_array[TGMDK_Config::DUMMY_REQUEST] = $props["dummy_request"];
            }


            // TGMDK_ConfigのMDK_ERROR_MODEが1の場合
            if ($conf_array[TGMDK_Config::MDK_ERROR_MODE] == "1") {
                return $this->set_ma99_exception($requestDto);
            }

            // JSONパラメータの生成
            $query = new TGMDK_JSONQuery();
            // JSON文字列生成メソッドを起動
            $query->createJsonParameter($requestDto, get_class($requestDto));

            // リクエストパラメータをJSON形式に変換
            $jsonParam = $query->getJsonParam();
            // マスク化したログ出力用文字列を生成
            $maskedLogString = $query->getMaskedLogString();

            // ログ出力用文字列（マスク化JSON文字列)を設定
            if (method_exists($requestDto, "_setMaskedLog")) {
                $requestDto->_setMaskedLog($maskedLogString);
            }

            // 接続パスの作成
            $url = $this->createSendUrl($query->getServiceType(), $query->getServiceCommand(), $conf_array);
            TGMDK_Logger::getInstance()->info("connect url   ==> " . $url);

            // User Agent
            $user_agent = $config->getUserAgent();
            $this->logger->info("user agent    ==> " . $user_agent);

            // 共通項目をJSON文字列に追加
            $jsonParam = $this->add_common_param($jsonParam, $conf_array, $maskedLogString);

            // 送信するパラメータ
            $param = "{\"params\":" . $jsonParam . "}";
            // URLエンコードする
            $param = urlencode($param);
            // 送信実行
            $connection = new TGMDK_Connection();
            $response = $connection->execute($param, $url);

            // JSONをレスポンスDTOクラスにマッピング
            $mdkContentHandler = new TGMDK_ContentHandler();

            // JSON形式を連想配列に変換する。
            $responseArray = json_decode($response, true);
            // JSONをレスポンスDTOにする
            $responseDto = $mdkContentHandler->parseDto($responseArray, new $responseDtoName);

            // 取得したJSONをマスク化
            $mask_response = $mdkContentHandler->maskedJsonResponse($responseArray);

            // マスク済みのJSONをレスポンスDTOに設定する
            if (method_exists($responseDto, "_setResultXml")) {
                $responseDto->_setResultXml($mask_response);
            }

            $this->logger->info("response data ==> " . TGMDK_Util::deleteRN($mask_response));

            $this->logger->debug("TGMDK_Transaction.execute() end");

            if (method_exists($responseDto, "getMstatus")) {
                $mstatus = $responseDto->getMstatus();
                if (!isset($mstatus)) {
                    $this->logger->debug("Response DTO has no mstatus");
                    throw new TGMDK_Exception(TGMDK_Exception::MF99_SYSTEM_INTERNAL_ERROR);
                }
            } else {
                $this->logger->debug("Response DTO has no mstatus");
                throw new TGMDK_Exception(TGMDK_Exception::MF99_SYSTEM_INTERNAL_ERROR);
            }

            return $responseDto;

        } catch (TGMDK_Exception $e) {
            try {
                // ログ出力
                @$this->logger->debug($e->getMessage());
                @$this->logger->fatal($e->getTraceMessage());

                @$this->logger->debug("TGMDK_Transaction.execute() end");

                // リクエストDTOクラス名からレスポンスDTOクラス名を取得
                return $this->set_error_response_dto($requestDto, $e->get_v_result_code(), $e->getMessage());
            } catch (Throwable $e2) {
                // ログ出力
                @$this->logger->fatal($e2->getMessage());
                @$this->logger->fatal($e2->__toString());

                return null;
            }
        } catch (Throwable $e) {
            try {
                // ログ出力
                @$this->logger->fatal($e->getMessage());
                @$this->logger->fatal($e->__toString());

                @$this->logger->debug("TGMDK_Transaction.execute() end");

                // リクエストDTOクラス名からレスポンスDTOクラス名を取得
                return $this->set_error_response_dto($requestDto, "MA99000000000000", "System internal error");
            } catch (Throwable $e2) {
                // ログ出力
                @$this->logger->fatal($e2->getMessage());
                @$this->logger->fatal($e2->__toString());

                return null;
            }
        }
    }

    /**
     * GWのURLを作成する
     * @param string $serviceType サービスタイプ
     * @param string $serviceCommand サービスコマンド
     * @param array $conf_array TGMDK_Configの連想配列
     * @return string GWのURL
     */
    private function createSendUrl($serviceType, $serviceCommand, $conf_array)
    {
        $url = $conf_array[TGMDK_Config::HOST_URL];
        $serviceName = $conf_array[TGMDK_Config::ADD_URL_PAYMENT];
        $version = $conf_array[TGMDK_Config::ADD_URL_PAYMENT_VERSION];
        $serviceTypeArray = preg_split("/,/", $conf_array[TGMDK_Config::PAYNOWID_SERVICE_TYPE]);
        if (in_array($serviceType, $serviceTypeArray)) {
            // PayNowIDのサービスタイプの場合はserviceNameとversionを上書き
            $serviceName = $conf_array[TGMDK_Config::ADD_URL_VTID];
            $version = $conf_array[TGMDK_Config::ADD_URL_VTID_VERSION];
        }
        if ($serviceName == $conf_array[TGMDK_Config::ADD_URL_PAYMENT]
            && $serviceCommand == self::SERVICE_COMMAND_SEARCH) {
            // サービスコマンドがSearchの場合はserviceNameを上書き
            $serviceName = $serviceName . self::HYPHEN . self::SEARCH_SERVER;
        }
        if ($conf_array[TGMDK_Config::DUMMY_REQUEST] == "1") {
            // ダミーリクエストがONの場合はserviceNameを上書き
            $serviceName = self::DUMMY_SERVER . self::HYPHEN . $serviceName;
        }
        return $url
            . self::SLASH . $serviceName
            . self::SLASH . $version
            . self::SLASH . $serviceCommand
            . self::SLASH . $serviceType;
    }

    /**
     * 共通項目を追加する。
     * @param string $jsonParam GWに送信するパラメータJSON文字列
     * @param array $conf_array TGMDK_Configの連想配列
     * @param string $maskedLogString マスク化したログ出力用文字列
     * @return string 共通項目を追加したJSON文字列
     * @throws TGMDK_Exception
     */
    private function add_common_param($jsonParam, $conf_array, $maskedLogString)
    {
        $add_param = array();
        $add_param["txnVersion"] = $conf_array[TGMDK_Config::MDK_DTO_VERSION];  // TXNバージョン
        $add_param["dummyRequest"] = $conf_array[TGMDK_Config::DUMMY_REQUEST];  // ダミーリクエスト
        $add_param["merchantCcid"] = $conf_array[TGMDK_Config::MERCHANT_CC_ID]; // マーチャントCCID
        $common_json_str = json_encode($add_param, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        // ログ出力
        $this->logger->info("request data  ==> " . substr($maskedLogString, 0, -1) . "," . substr($common_json_str, 1));

        // GWに投げるパラメータに追加
        $jsonParam = substr($jsonParam, 0, -1) . "," . substr($common_json_str, 1);
        // 認証ハッシュの生成
        $hash_param = $conf_array[TGMDK_Config::MERCHANT_CC_ID] . $jsonParam . $conf_array[TGMDK_Config::MERCHANT_SECRET_KEY];
        $hash_data = TGMDK_Util::get_hash_256($hash_param);

        // 認証ハッシュの追加
        return $jsonParam . "," . "\"authHash\":" . "\"" . $hash_data . "\"";
    }

    /**
     * MA99エラーが設定されたレスポンスDTOを返す。
     *
     * @access  private
     * @param MdkBaseDto $requestDto リクエストDTO
     * @return mixed MA99のエラー内容が設定されたレスポンスDTO
     */
    private function set_ma99_exception($requestDto)
    {
        $e = new TGMDK_Exception(TGMDK_Exception::MA99_SYSTEM_INTERNAL_ERROR);
        return $this->set_error_response_dto($requestDto, $e->get_v_result_code(), $e->getMessage());
    }

    /**
     * エラー用レスポンスDTOをセットする。
     *
     * @access  private
     * @param MdkBaseDto $requestDto リクエストDTO
     * @param string $code エラーコード
     * @param string $message エラーメッセージ
     * @return mixed エラー内容が設定されたレスポンスDTO
     */
    private function set_error_response_dto($requestDto, $code, $message)
    {
        $responseDtoName = str_replace("RequestDto", "ResponseDto", get_class($requestDto));

        // レスポンスDTOからクラスが生成できるかをチェック
        if (class_exists($responseDtoName) == false) {
            return null;
        }

        $error_res_instance = new $responseDtoName();
        if (method_exists($error_res_instance, "setVResultCode")) {
            $error_res_instance->setVResultCode($code);
        }
        if (method_exists($error_res_instance, "setMerrMsg")) {
            $error_res_instance->setMerrMsg($message);
        }
        if (method_exists($error_res_instance, "setMstatus")) {
            $error_res_instance->setMstatus("failure");
        }

        return $error_res_instance;
    }

    /**
     * TGMDK_Configファイルの記述内容チェックを行う
     * @param TGMDK_Config $config TGMDK_Config読み込みクラス
     * @throws TGMDK_Exception
     */
    private function check_config(TGMDK_Config $config)
    {
        // TGMDK_Configのチェック
        if ($config->validate(TRUE) === FALSE) {
            // エラー発生時
            // チェックエラーのリストを取得
            $error_list = $config->getErrors();
            foreach ($error_list as $exception) {
                // ログ出力
                $this->logger->error($exception->getMessage());
            }

            $ex = reset($error_list);
            if ($ex instanceof TGMDK_Exception) {
                throw $ex;
            } else {
                throw $ex;
            }
        }
    }
}
