<?php

namespace tgMdk;

use Exception;

/**
 * TGMDK_Exception ログ出力クラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 */
final class TGMDK_Exception extends Exception
{

    // 元の例外を保持する変数
    private $exception = null;

    /***************************************************************************
     * エラーコード定義
     ***************************************************************************/
    //  アプリケーション
    /** エラーを示す定数 ： プロパティファイル読み込みエラー */
    const MA01_CONFIG_MISSING = "MA01";
    /** エラーを示す定数 ： プロパティ書式エラー */
    const MA02_CONFIG_NOT_CORRECT = "MA02";
    /** エラーを示す定数 ： ファイル存在チェックエラー */
    const MA03_FILE_DOES_NOT_EXIST = "MA03";
    /** エラーを示す定数 ： 暗号化エラー */
    const MA04_MESSAGE_ENCRYPT_ERROR = "MA04";
    /** エラーを示す定数 ： エラーメッセージファイル読み込みエラー */
    const MA05_CONF_FILE_DOES_NOT_EXIST = "MA05";
    /** エラーを示す定数 ： 復号化エラー */
    const MA06_MESSAGE_DECRYPT_ERROR = "MA06";
    /** エラーを示す定数 ： DTOパラメータに文字列以外エラー */
    const MA07_INVALID_DTO_VALUE_TYPE = "MA07";
    /** エラーを示す定数 ： アプリケーション系の予期しないエラー */
    const MA99_SYSTEM_INTERNAL_ERROR = "MA99";

    //  設定関係
    /** エラーを示す定数 ： プロパティファイル読み込みエラー */
    const MB01_NOT_FOUND_CONFIG_FILE = "MB01";
    /** エラーを示す定数 ：  */
    const MB02_CANNOT_READ_CONFIG_FILE = "MB02";
    /** エラーを示す定数 ： SSL通信時の暗号に失敗 */
    const MB03_SSLSOCKET_CREATION_FAILED = "MB03";
    /** エラーを示す定数 ： 設定関係の予期しないエラー */
    const MB99_SYSTEM_INTERNAL_ERROR = "MB99";

    //  内部通信エラー
    /** エラーを示す定数 ： プロキシサーバへの接続エラー */
    const MF01_PROXY_ERROR = "MF01";
    /** エラーを示す定数 ： サーバへの接続エラー */
    const MF02_CANNOT_CONNECT_TO_GW = "MF02";
    /** エラーを示す定数 ： サーバへの接続タイムアウト */
    const MF03_SERVER_TIME_OUT = "MF03";
    /** エラーを示す定数 ： 通信系の予期しないエラー */
    const MF99_SYSTEM_INTERNAL_ERROR = "MF99";


    /**
     * コンストラクタ
     *
     * $errorがExceptionクラスの場合は当クラス内部に保持し、
     * $errorがStringの場合は通常通りに生成する。
     * 差は、トレースを取得するgetTraceMessageメソッドに差が出る。
     *
     * @access  public
     * @param mixed $error Exception or String
     */
    public function __construct($error /* 可変長引数 */)
    {
        $param_arr = func_get_args();

        //  第1引数 $error の判定
        if (is_string($error)) {
            //  string は、エラーコード
            $this->code = $error;

        } elseif ($error instanceof Exception) {
            $this->exception = $error;

            //  例外 は、2番目の要素をエラーコードとして扱う
            if (count($param_arr) > 1) {
                $this->code = $param_arr[1];
                array_shift($param_arr);    //  先頭（$error = 例外）の引数を削除

            } else {
                //  2番目の要素が無い場合は、システムエラーを定義
                $this->code = self::MA99_SYSTEM_INTERNAL_ERROR;
                $param_arr = array(self::MA99_SYSTEM_INTERNAL_ERROR);
            }

        } else {
            // それ以外は、システムエラーコードをセット
            $this->code = self::MA99_SYSTEM_INTERNAL_ERROR;
            array_unshift($param_arr, self::MA99_SYSTEM_INTERNAL_ERROR);
        }

        //  メッセージクラスにそのまま可変引数を渡す
        $emInstance = TGMDK_ErrorMessage::getInstance();
        $function = array($emInstance, "getMessage");
        $errmsg = call_user_func_array($function, $param_arr);

        parent::__construct($errmsg);
    }

    /**
     * 処理結果コードを返す
     *
     * エラーメッセージコードに必要な分の0埋めをした文字列
     *
     * @access public
     * @return string 処理結果コード
     */
    public function get_v_result_code()
    {
        return $this->code . "000000000000";
    }

    /**
     * トレースメッセージを取得する
     *
     * @access public
     * @return string トレースメッセージ
     */
    public function getTraceMessage()
    {
        if ($this->exception == null) {
            return $this->__toString();
        } else {
            return $this->exception->__toString();
        }
    }
}
