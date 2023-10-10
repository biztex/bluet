<?php

namespace tgMdk;

/**
 *
 * レスポンスをパースし、指定のタグの値を取得する<br>
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author VeriTrans Inc.
 */
class TGMDK_ResElementProcessor
{

    /** 連想配列にした結果 */
    private $data_array;

    /**
     * コンストラクタ。<br>
     * JSON文字列を連想配列に設定する。
     *
     * @access  public
     * @param string $json_str JSON文字列
     */
    public function __construct($json_str)
    {
        // JSON文字列を変換して連想配列にする。
        $this->data_array = json_decode($json_str);
    }

    /**
     * 引数のパス文字列に紐付く値を配列で返す。
     *
     * @access  public
     * @param string $path データに紐付くパス文字列
     * @return null|mixed 取得された値の配列
     */
    public function get_list($path)
    {
        // 取得パスを分割splitする
        $targetKeys = explode("/", $path);
        return $this->get_value($this->data_array, $targetKeys, 1);
    }

    /**
     * 値を取得する。<br>
     * サブオブジェクトの場合は再帰的に実施する。
     * @param mixed $data
     * @param mixed $keys
     * @param int $level
     * @return null|mixed
     */
    public function get_value($data, $keys, $level)
    {

        $str = "";
        if (is_null($data)) {
            return null;
        }
        foreach ($data as $key => $value) {
            if ($keys[$level] === $key) {
                if ($key === "optionResults" && isset($value[0])) {
                    $str = $this->get_value($value[0], $keys, $level + 1);
                    break;
                } else if (is_object($value)) {
                    $str = $this->get_value($value, $keys, $level + 1);
                    break;
                } else if (is_array($value)) {
                    $str = $this->get_value($value, $keys, $level + 1);
                    break;
                } else if (is_string($value)) {
                    $str = $value;
                    break;
                }
            }
        }
        return $str;
    }

    /**
     * 引数のパス文字列に紐付く値の配列の一番目を返す。
     *
     * @access  public
     * @param string $path データに紐付くパス文字列
     * @return null|mixed 取得された配列の一番目の文字列
     */
    public function get_first($path)
    {
        $array = $this->get_list($path);

        // 取得したデータが1件もない場合はnullを返却
        if (is_null($array) || count($array) == 0) {
            return null;
        }

        // 1件以上の場合は先頭を返却する
        return $array[0];
    }
}
