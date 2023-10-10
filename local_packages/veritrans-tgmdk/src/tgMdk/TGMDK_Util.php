<?php

namespace tgMdk;

/**
 *
 * ユーティリティクラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author VeriTrans Inc.
 */
class TGMDK_Util
{

    /** 特殊マスク項目：カード番号 */
    const ITEM_CARDNUMBER = "CARDNUMBER";
    /** 特殊マスク項目：メールアドレス */
    const ITEM_MAILADDR = "MAILADDR";
    /** 特殊マスク項目：メールアドレス */
    const ITEM_MAILADDRESS = "MAILADDRESS";
    /** 特殊マスク項目：Reqカード番号 */
    const ITEM_REQ_CARDNUMBER = "REQCARDNUMBER";
    /** 特殊マスク項目：マーチャントメールアドレス */
    const ITEM_MERCHANT_MAILADDR = "MERCHANTMAILADDR";
    /** マスク文字列 */
    const MASKED_VALUE = "*";

    /**
     * パラメータをsha256でハッシュ生成して返却する
     * @param $hash_param
     * @return string ハッシュ文字列
     * @throws TGMDK_Exception
     */
    public static function get_hash_256($hash_param)
    {
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getCipherParameters();

        return hash($array[TGMDK_Config::MESSAGE_DIGEST_TYPE], $hash_param, FALSE);
    }

    /**
     * 現在日付(例：20000101010101000)をグリニッジ標準時間で取得する。
     *
     * @access public
     * @return string 現在日付
     */
    public static function get_now()
    {
        // 1000分の1秒までの現在日付を取得
        $mil = (float)microtime();
        $mil = $mil * 1000;
        $mil = sprintf('%2d', $mil);
        $mil = sprintf("%03d", $mil);
        return gmdate('YmdHis') . $mil;
    }

    /**
     * 引数から改行コードを取り除いた値を返す。
     *
     * @access public
     * @param string $data 改行を取り除く前のデータ
     * @return array|string|string[]|null 改行を取り除いたデータ
     */
    public static function deleteRN($data)
    {
        $tmp = preg_replace("/\r\n/", "", $data);
        $tmp = preg_replace("/\n/", "", $tmp);
        return $tmp;
    }

    /**
     * 設定値のマスク化を行う
     * @param string $name 項目名
     * @param string $value VALUE値
     * @return string マスク処理後の設定値
     * @throws TGMDK_Exception
     */
    public static function maskValue(string $name, string $value): string
    {

        //設定ファイルよりマスク化項目リストを取得。
        $conf = TGMDK_Config::getInstance();
        $response_item = $conf->getResponseDtoParameters();
        //カンマで区切り、配列に格納
        $maskItems = preg_split("/,/", strtoupper($response_item[TGMDK_Config::MASK_ITEM]));

        //項目名を大文字へ変換
        $upperName = strtoupper($name);
        if (in_array($upperName, $maskItems)) {
            //--------------------------------------------------
            // 特殊なマスク処理は以下へIF文を追加
            //--------------------------------------------------
            //カード番号は頭４桁は表示
            if ($upperName === self::ITEM_CARDNUMBER || $upperName === self::ITEM_REQ_CARDNUMBER) {
                $value = str_replace("-", "", $value);
                return mb_substr($value, 0, 6) . str_pad("", mb_strlen(mb_substr($value, 6, -2)), self::MASKED_VALUE) . mb_substr($value, -2);
            } else if ($upperName === self::ITEM_MAILADDR || $upperName === self::ITEM_MAILADDRESS || $upperName === self::ITEM_MERCHANT_MAILADDR) {
                return str_pad("", mb_strlen(mb_substr($value, 0, strpos($value, "@"))), self::MASKED_VALUE) . mb_substr($value, strpos($value, "@"));
            }
            return str_pad("", mb_strlen($value), self::MASKED_VALUE);
        } else {
            return $value;
        }
    }
}
