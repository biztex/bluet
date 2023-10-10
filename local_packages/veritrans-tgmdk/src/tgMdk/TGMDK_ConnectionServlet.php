<?php

namespace tgMdk;


use Throwable;

/**
 *
 * サーブレットによるSSL通信管理クラス。
 *
 * SSL通信に関わる処理を取りまとめる。
 * Proxyを経由した通信にも対応。
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author  VeriTrans Inc.
 */
class TGMDK_ConnectionServlet
{

    /** データ送信時のチャンクサイズ */
    private $chunk_size = 8192;

    /** プロキシを使用するかを示すフラグ */
    private $useProxy = FALSE;
    /** プロキシのホスト */
    private $proxy_host = null;
    /** プロキシのポート */
    private $proxy_port = null;
    /** プロキシのユーザ */
    private $proxy_username = null;
    /** プロキシのユーザのパスワード */
    private $proxy_password = null;

    /** 接続ターゲットのプロトコル */
    private $target_protocol = null;

    /** User-Agent情報 */
    private $user_agent = null;

    /** 接続タイムアウト */
    private $connection_timeout = 0;
    /** 読み取りタイムアウト */
    private $read_timeout = 0;

    /** 公開鍵ファイルパス */
    private $ca_cert_file = null;
    /** 秘密鍵ファイルパス */
    private $client_cert_file = null;
    /** 秘密鍵を扱うためのパスフレーズ */
    private $client_cert_password = null;

    /**
     * コンストラクタ。
     * コンフィグファイルからデータを取得して当クラスを使用できる状態にする。
     * パラメータ$use_default_confがFALSEの場合はデフォルト値を設定しない。
     * @param bool $use_default_conf デフォルトのConfigファイルからデータを取得するかを指定するフラグ
     * @throws TGMDK_Exception
     */
    public function __construct($use_default_conf = TRUE)
    {
        if ($use_default_conf) {
            $this->set_default_config();
        }
    }

    /**
     * デストラクタ。
     * エラーハンドラを破棄する。
     */
    public function __destruct()
    {
    }

    /**
     * 当クラスをConfigファイルを使用して値を設定する。
     *
     * @access private
     * @throws TGMDK_Exception
     */
    private function set_default_config()
    {
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getConnectionParameters();

        if (array_key_exists(TGMDK_Config::PROXY_SERVER_URL, $array)) {
            $proxy_url = $array[TGMDK_Config::PROXY_SERVER_URL]; // ProxyサーバURL

            // ProxyのURLが指定されていない場合はProxyを使用しない
            if (!empty($proxy_url)) {
                $proxy_url_array = parse_url($proxy_url);

                $connection_conf_data["PROXY_HOST"] = $proxy_url_array["host"]; // ProxyサーバHOST
                $connection_conf_data["PROXY_PORT"] = $proxy_url_array["port"]; // ProxyサーバPORT

                // Proxy使用フラグ
                if (!empty($connection_conf_data["PROXY_HOST"]) && !empty($connection_conf_data["PROXY_PORT"])) {
                    $connection_conf_data["USE_ROXY"] = TRUE;
                } else {
                    $connection_conf_data["USE_ROXY"] = FALSE;
                }

                if (array_key_exists(TGMDK_Config::PROXY_USERNAME, $array) and array_key_exists(TGMDK_Config::PROXY_PASSWORD, $array)) {
                    $connection_conf_data["PROXY_USERNAME"] = $array[TGMDK_Config::PROXY_USERNAME]; // Proxyユーザ
                    $connection_conf_data["PROXY_PASSWORD"] = $array[TGMDK_Config::PROXY_PASSWORD]; // Proxyユーザパスワード
                }
            }
        }

        // User-Agent情報を生成
        $user_agent = $conf->getUserAgent();
        $connection_conf_data["USER_AGENT"] = $user_agent; // User-Agent情報

        $connection_conf_data["CONNECTION_TIMEOUT"] = $array[TGMDK_Config::CONNECTION_TIMEOUT]; // 接続タイムアウト
        $connection_conf_data["READ_TIMEOUT"] = $array[TGMDK_Config::READ_TIMEOUT]; // 読み取りタイムアウト

        $connection_conf_data["CA_CERT_FILE"] = $array[TGMDK_Config::CA_CERT_FILE]; // 公開鍵ファイルパス
        if (isset($array[TGMDK_Config::CLIENT_CERT_FILE])) {
            $connection_conf_data["CLIENT_CERT_FILE"] = $array[TGMDK_Config::CLIENT_CERT_FILE]; // 秘密鍵ファイルパス
        }
        if (isset($array[TGMDK_Config::CLIENT_CERT_PASSWORD])) {
            $connection_conf_data["CLIENT_CERT_PASSWORD"] = $array[TGMDK_Config::CLIENT_CERT_PASSWORD]; // 秘密鍵を扱うためのパスフレーズ
        }

        // グローバル変数に値を設定する
        $this->set_config($connection_conf_data);
    }

    /**
     * TGMDK_Configファイルからデータを取得しないでパラメータによって当クラスを使用できる状態にする。
     *
     * @access public
     * @param array $connection_conf_data TGMDK_Config同様のデータを格納した配列。
     */
    public function set_config($connection_conf_data)
    {
        if (!empty($connection_conf_data["USE_ROXY"])) {
            $this->useProxy = $connection_conf_data["USE_ROXY"]; // Proxy使用フラグ
        }

        if ($this->useProxy) {
            $this->proxy_host = $connection_conf_data["PROXY_HOST"]; // ProxyサーバHOST
            $this->proxy_port = $connection_conf_data["PROXY_PORT"]; // ProxyサーバPORT
            if (array_key_exists(TGMDK_Config::PROXY_USERNAME, $connection_conf_data) and array_key_exists(TGMDK_Config::PROXY_PASSWORD, $connection_conf_data)) {
                $this->proxy_username = $connection_conf_data["PROXY_USERNAME"]; // Proxyユーザ
                $this->proxy_password = $connection_conf_data["PROXY_PASSWORD"]; // Proxyユーザパスワード
            }
        }

        $this->user_agent = $connection_conf_data["USER_AGENT"]; // User-Agent情報

        if (!empty($connection_conf_data["CONNECTION_TIMEOUT"])) {
            $this->connection_timeout = $connection_conf_data["CONNECTION_TIMEOUT"]; // 接続タイムアウト
        }
        if (!empty($connection_conf_data["READ_TIMEOUT"])) {
            $this->read_timeout = $connection_conf_data["READ_TIMEOUT"]; // 読み取りタイムアウト
        }

        $this->ca_cert_file = realpath($connection_conf_data["CA_CERT_FILE"]); // 公開鍵ファイルパス
        if (isset($connection_conf_data[TGMDK_Config::CLIENT_CERT_FILE])) {
            $this->client_cert_file = realpath($connection_conf_data["CLIENT_CERT_FILE"]); // 秘密鍵ファイルパス
        }
        if (isset($connection_conf_data[TGMDK_Config::CLIENT_CERT_PASSWORD])) {
            $this->client_cert_password = $connection_conf_data["CLIENT_CERT_PASSWORD"]; // 秘密鍵を扱うためのパスフレーズ
        }
    }

    /**
     * Servlet接続メソッド。
     *
     * @access public
     * @param string $param 送信するパラメータ
     * @param string $url GWのURL
     * @return string 処理結果
     * @throws TGMDK_Exception
     */
    public function execute($param, $url)
    {
        /** 接続ターゲットのホスト */
        $target_host = null;
        /** 接続ターゲットのポート */
        $target_port = null;
        /** 接続ターゲットURL(コンテキストルート以降) */
        $target_path = null;

        try {
            $url_array = parse_url($url);
            $connection_conf_data["TARGET_HOST"] = $url_array["host"]; // 通信先サーバHOST
            $connection_conf_data["TARGET_PORT"] = $url_array["port"]; // 通信先サーバPORT
            $connection_conf_data["TARGET_PATH"] = $url_array["path"]; // 通信先サーバのパス
            $target_host = $connection_conf_data["TARGET_HOST"];                 // 通信先サーバHOST
            $target_port = $connection_conf_data["TARGET_PORT"];                 // 通信先サーバPORT
            $target_path = $connection_conf_data["TARGET_PATH"];                 // 通信先サーバのPATH
            $context = stream_context_create();
            stream_context_set_option($context, "ssl", "verify_host", true);
            stream_context_set_option($context, "ssl", "verify_peer", true);
            stream_context_set_option($context, "ssl", "peer_name", $target_host);
            stream_context_set_option($context, "ssl", "cafile", $this->ca_cert_file);
            if (!empty($this->client_cert_file)) {
                stream_context_set_option($context, "ssl", "local_cert", $this->client_cert_file);
                if (!empty($this->client_cert_file)) {
                    stream_context_set_option($context, "ssl", "passphrase", $this->client_cert_password);
                }
            }

            $road = null;
            $connect_host = null;
            if ($this->useProxy) {
                $road = 1;
                $connect_host = "tcp://" . $this->proxy_host . ":" . $this->proxy_port;
            } else {
                $road = 2;
                $connect_host = "ssl://" . $target_host . ":" . $target_port;
            }

            try {
                $fp = stream_socket_client($connect_host, $errno, $errstr, $this->connection_timeout, STREAM_CLIENT_CONNECT, $context);

                // SSL通信時にstream_set_timeoutでタイムアウトできないため、
                // 自力でタイムアウトを実装するための設定
                // #28: Proxy 接続時に問題が発生したのでコメントアウト
                //stream_set_blocking($fp, 0);
            } catch (Throwable $try_error) {
                $message = null;
                if ($road == 1) {
                    $message = TGMDK_Exception::MF01_PROXY_ERROR;
                } else {
                    $message = TGMDK_Exception::MF02_CANNOT_CONNECT_TO_GW;
                }
                throw new TGMDK_Exception($try_error, $message);
            }

            // Proxyを使用する場合の処理
            if ($this->useProxy) {
                // Proxyとの通信タイムアウト設定
                stream_set_timeout($fp, $this->read_timeout);

                $req = "";
                $req .= "CONNECT " . $target_host . ":" . $target_port . " HTTP/1.0\r\n";
                $req .= "Host: " . $target_host . ":" . $target_port . "\r\n";
                $req .= "User-Agent: " . $this->user_agent . "\r\n";
                if (!empty($this->proxy_username) and !empty($this->proxy_password)) {
                    $req .= "Proxy-Authorization: basic " . base64_encode($this->proxy_username . ":" . $this->proxy_password) . "\r\n";
                }
                $req .= "\r\n";

                fwrite($fp, $req);
                fflush($fp);

                // Proxyサーバの処理結果を読み込む
                $header_string = "";
                while ($header = trim(fgets($fp))) {
                    $header_string .= $header . "\n";
                }
                // PROXYでエラーの場合のエラーハンドリング
                // PROXYとの通信がタイムアウトしたときは$header_stringが取得できない
                if (empty($header_string)) {
                    throw new TGMDK_Exception(TGMDK_Exception::MF01_PROXY_ERROR);
                }
                // HTTPステータスコードが取得できた場合
                preg_match("/^[^\\s]*\\s\\d{3}\\s/", $header_string, $header_matches);
                if (!is_null($header_matches) && 0 < count($header_matches)) {
                    preg_match("/\\d{3}/", $header_matches[0], $result_matches);
                    $result_code = $result_matches[0];
                    if ($result_code <> "200") {
                        throw new TGMDK_Exception(TGMDK_Exception::MF01_PROXY_ERROR);
                    }
                }

                try {
                    // 接続済みのソケットについて暗号化をONにする
                    stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_SSLv23_CLIENT);
                } catch (Throwable $ssl_exception) {
                    throw new TGMDK_Exception($ssl_exception, TGMDK_Exception::MB03_SSLSOCKET_CREATION_FAILED);
                }
            }
            // 2012.02.06: #28
            // ノンブロッキングモードにするのはこのタイミング
            stream_set_blocking($fp, 0);

            if ($this->target_protocol == "GET") {
                // GET送信
                $req = "";
                $req .= "GET " . $target_path . "?" . $param . " HTTP/1.0\r\n";
                $req .= "Host: " . $target_host . ":" . $target_port . "\r\n";
                $req .= "User-Agent: " . $this->user_agent . "\r\n";
                $req .= "Accept-Language: ja\r\n";
                $req .= "\r\n";

                fwrite($fp, $req);
                fflush($fp);
            } else {
                // POST送信
                $req = "";
                $req .= "POST " . $target_path . " HTTP/1.0\r\n";
                $req .= "Host: " . $target_host . ":" . $target_port . "\r\n";
                $req .= "User-Agent: " . $this->user_agent . "\r\n";
                $req .= "Content-type: application/x-www-form-urlencoded\r\n";
                $req .= "Content-length: " . strlen($param) . "\r\n";
                $req .= "Accept-Language: ja\r\n";
                $req .= "\r\n";

                // send header
                fwrite($fp, $req);

                $cur_chunk_size = $this->chunk_size;
                if (function_exists('stream_set_chunk_size')) {
                    $cur_chunk_size = stream_set_chunk_size($fp, $this->chunk_size);
                }
                // send body
                for ($written = 0; $written < strlen($param); $written += $write_size) {
                    usleep(100000);
                    $write_size = fwrite($fp, substr($param, $written, $this->chunk_size));
                }
                fflush($fp);
                if (function_exists('stream_set_chunk_size')) {
                    stream_set_chunk_size($fp, $cur_chunk_size);
                }
            }

            // 自力で接続タイムアウト
            $end_time = time() + $this->read_timeout; // タイムアウトする時間を算出
            $header_string = ""; // ヘッダ文字列を格納する変数
            $success_flg = False; // 正常に通信できたかを判別するフラグ
            while (time() <= $end_time) {
                $header_string = fgets($fp);
                if (!empty($header_string)) {
                    $success_flg = True;
                    break;
                }
                // 0.1秒のスリープ
                usleep(100000);
            }
            if (!$success_flg) {
                throw new TGMDK_Exception(TGMDK_Exception::MF03_SERVER_TIME_OUT);
            }

            // 結果のヘッダ情報の読み込み
            while ($header = trim(fgets($fp))) {
                $header_string .= $header . "\n";
            }
            // エラーの場合のエラーハンドリング
            preg_match("/^[^\\s]*\\s(\\d{3})\\s/", $header_string, $header_matches);
            if (!is_null($header_matches) && 0 < count($header_matches)) {
                preg_match("/\\d{3}/", $header_matches[0], $result_matches);
                $result_code = $result_matches[0];
                if ($result_code <> "200") {
                    throw new TGMDK_Exception(TGMDK_Exception::MF02_CANNOT_CONNECT_TO_GW);
                }
            }

            // 戻りの文字列インスタンス生成
            $rtnStr = "";

            try {
                // 結果のボディ情報の読み込み
                // #30: fgets が FALSE を返すケースを考慮
                while (!feof($fp)) {
                    $body = @fgets($fp);
                    if ($body !== FALSE) {
                        $rtnStr .= $body;
                    }
                }
            } catch (Throwable $e1) {
                // エラーの内容から無視できる例外を判定し、
                // 無視できる例外の場合は、処理を続行する。
                // それ以外は例外を呼び出しクラスに戻す。
                $message = $e1->getMessage();
                $pos = strrpos($message, "SSL: fatal protocol error");
                if ($pos === false) {
                    // 握りつぶししてはいけない例外
                    throw $e1;
                } else {
                    // 記録としてログに出力
                    TGMDK_Logger::getInstance()->info("SSL NOTICE：closing the connection without sending a close_notify indicator");
                }
            }

            fclose($fp);
            return $rtnStr;
        } catch (TGMDK_Exception $e) {
            throw $e;
        } catch (Throwable $e) {
            throw new TGMDK_Exception($e, TGMDK_Exception::MF99_SYSTEM_INTERNAL_ERROR);
        }
    }
}
