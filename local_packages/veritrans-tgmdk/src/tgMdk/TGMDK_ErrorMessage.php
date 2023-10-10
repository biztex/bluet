<?php

namespace tgMdk;

use Exception;

/**
 * TGMDK_ErrorMessage 管理クラス
 *
 * エラーメッセージを取得し管理するクラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 */
class TGMDK_ErrorMessage
{

    // define const
    /** エラー文字列が見つからない場合に返す文字列 */
    const UNKNOWN = "-01";

    // fields
    /** エラー情報を保持する変数 */
    private static $m_error = null;
    /** エラーメッセージを保持する変数 */
    private $m_msg;

    private const ERROR_MESSAGE_PROPERTIES = "[ApplicationError]
MA01 = Section << #1 >>, Key - #2 : missing in the Config file
MA02 = Section << #1 >>, Key - #2 : value #3 in the Config file is not correct
MA03 = Section << #1 >>, Key - #2 : file does not exist at #3
MA04 = Message body encryption error
MA05 = #1 file does not exist as #2.
MA07 = The DTO value of << #1 >> is invalid type. < ex. is not String >
MA99 = System internal error

[ConfigError]
MB01 = Not found the Config file #1
MB02 = Could not read the Config file
MB03 = SSLSocketFactory creation failed
MB99 = System internal error

[ConnectionError]
MF01 = Could not connect socket to the Proxy Server
MF02 = Could not connect socket to the GW Server
MF03 = Connection to server timed out
MF99 = System internal error";


    /**
     * コンストラクタ。
     *
     * @access private
     */
    private function __construct()
    {
        $this->m_msg = parse_ini_string(self::ERROR_MESSAGE_PROPERTIES, FALSE);
    }

    /**
     *
     *  TGMDK_ErrorMessageクラスの静的なインスタンスを取得する
     *
     * @access public
     * @static
     * @return TGMDK_ErrorMessage|null TGMDK_ErrorMessageクラスのインスタンス
     */
    public static function getInstance()
    {
        if (self::$m_error == null) {
            self::$m_error = new TGMDK_ErrorMessage();
        }
        return self::$m_error;
    }

    /**
     *
     * エラーメッセージを取得する
     *
     * @access public
     * @param mixed $messageId メッセージID
     * @return mixed|string 取得したメッセージ
     */
    public function getMessage($messageId)
    {

        if (!array_key_exists($messageId, $this->m_msg)) {
            return self::UNKNOWN;
        }

        $retVal = $this->m_msg[$messageId];

        if (func_num_args() > 1) {  //  可変個引数が存在する場合引数の型をチェックする

            $pattern = array();
            $replacement = array();
            $idx = 0;

            $args = func_get_args();
            array_shift($args); //  先頭要素（$messageId）を削除

            foreach ($args as $key => $val) {
                if ($val instanceof Exception) {
                    //  例外クラス（および、その派生クラス）なら
                    //  スタックトレースを取得し連結します
                    $retVal .= PHP_EOL . $val;
//                    $retVal .= PHP_EOL . $val->getTraceAsString();

                } elseif (is_array($val)) {
                    //  配列ならそのまま文字列として連結します
                    $retVal .= PHP_EOL . implode(PHP_EOL, $val);

                } else {
                    ++$idx;
                    //  配列以外は、メッセージパラメータに設定する値として保存する
                    $regex = "/#" . $idx . "/";     // 正規表現を作成 /#1/, /#2/, /#3/...
                    array_push($pattern, $regex);
                    array_push($replacement, $val);
                }
            }

            // #1, #2..を置き換える
            $retVal = preg_replace($pattern, $replacement, $retVal);
        }

        return $retVal;
    }

    /**
     * 静的なインスタンスを破棄する（単体テスト用）
     *
     * @access public
     * @static
     */
    public static function __reset()
    {
        self::$m_error = NULL;
    }
}
