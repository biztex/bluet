<?php

namespace tgMdk;

/**
 *
 * マーチャント向けセキュリティ関連ユーティリティクラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author VeriTrans Inc.
 */
class TGMDK_MerchantUtility
{
    /**
     * ３者間通信用にメッセージダイジェストを取得する
     * @return string ３者間通信用にメッセージダイジェスト
     * @throws TGMDK_Exception
     */
    public static function getTripartiteAuthHash(): string
    {
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getTransactionParameters();

        // ハッシュ生成に必要な情報の取得
        $merchant_cc_id = $array[TGMDK_Config::MERCHANT_CC_ID];      // マーチャントID
        $now = TGMDK_Util::get_now();                   // 現在日時
        $merchant_secret_key = $array[TGMDK_Config::MERCHANT_SECRET_KEY]; // マーチャントパスワード

        // ハッシュ生成
        $hash = TGMDK_Util::get_hash_256($merchant_cc_id . $now . $merchant_secret_key);

        // base64エンコード用クラス
        $cipher = new TGMDK_Cipher();

        // エンコードしながら文字列連結
        $return_string = $cipher->base64Enc($merchant_cc_id) . "-";
        $return_string .= $cipher->base64Enc($now) . "-";
        $return_string .= $cipher->base64Enc($hash);

        return $return_string;
    }

    /**
     * Content-HMAC文字列からマーチャントシークレットを取得する。
     *
     * @access public
     * @static
     * @param string $sContentHmac 検証の対象となる署名文字列
     * @return bool|string マーチャントシークレット文字列
     */
    public static function getSecret($sContentHmac)
    {
        // パラメータ【$sContentHmac】の入力チェック
        if (empty($sContentHmac)) {
            return "";
        }

        // 区切り文字列
        $delimiterS = ";s=";
        $delimiterV = ";v=";

        // 区切り文字の位置を算出
        $posS = strpos($sContentHmac, $delimiterS);
        $posV = strpos($sContentHmac, $delimiterV);

        // 区切り文字が見つからない場合
        if ($posS == FALSE) {
            return FALSE;
        }
        if ($posV == FALSE) {
            return FALSE;
        }

        // パラメータからシークレット部分の文字列のみを取得する
        $s_pos = $posS + strlen($delimiterS);
        $l_pos = $posV - $posS - strlen($delimiterS);
        return substr($sContentHmac, $s_pos, $l_pos);
    }

    /**
     * 署名を検証する。
     * @param string $msgBody 署名の元となる文字列
     * @param string $sContentHmac 検証の対象となる署名文字列
     * @return bool 検証の対象となる署名文字列
     * @throws TGMDK_Exception
     */
    public static function checkMessage(string $msgBody, string $sContentHmac): bool
    {
        // パラメータ【$msgBody】の入力チェック
        // パラメータ【$sContentHmac】の入力チェック
        if (!self::checkParametersEmpty($msgBody, $sContentHmac)) {
            return false;
        }

        // 区切り文字列
        $delimiter = ";v=";

        // 区切り文字の位置を算出
        $pos = strpos($sContentHmac, $delimiter);

        // 区切り文字が見つからない場合
        if ($pos == FALSE) {
            return FALSE;
        }

        // パラメータからHmac部分の文字列のみを取得する
        $s_pos = $pos + strlen($delimiter);
        $param_hmac = substr($sContentHmac, $s_pos);

        // Hmacの算出
        $hmac = self::calcHmac($msgBody);
        if (empty($hmac)) {
            return FALSE;
        }

        // Hmacが一致したかチェック
        if ($param_hmac == $hmac) {
            return TRUE;
        }

        return FALSE;
    }


    /**
     * 引数がすべてempty()でなければtrueを返す。1つでもemptyがあればfalseを返す。
     * @param string ...$parameters
     * @return bool
     */
    private static function checkParametersEmpty(...$parameters): bool
    {
        foreach ($parameters as $parameter) {
            if (empty($parameter)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 署名を検証する。
     * @param string $secretKey マーチャント認証鍵
     * @param string $msgBody 署名の元となる文字列
     * @param string $sContentHmac 検証の対象となる署名文字列
     * @return bool
     * @throws TGMDK_Exception
     */
    public static function checkMessageBySecretKey(string $secretKey, string $msgBody, string $sContentHmac): bool
    {
        // パラメータ【$secretKey】の入力チェック
        // パラメータ【$msgBody】の入力チェック
        // パラメータ【$sContentHmac】の入力チェック
        if (!self::checkParametersEmpty($secretKey, $msgBody, $sContentHmac)) {
            return false;
        }

        // 区切り文字列
        $delimiter = ";v=";

        // 区切り文字の位置を算出
        $pos = strpos($sContentHmac, $delimiter);

        // 区切り文字が見つからない場合
        if ($pos == FALSE) {
            return FALSE;
        }

        // パラメータからHmac部分の文字列のみを取得する
        $s_pos = $pos + strlen($delimiter);
        $param_hmac = substr($sContentHmac, $s_pos);

        // Hmacの算出
        $hmac = self::calcHmacBySecretKey($secretKey, $msgBody);
        if (empty($hmac)) {
            return FALSE;
        }

        // Hmacが一致したかチェック
        if ($param_hmac == $hmac) {
            return TRUE;
        }

        return FALSE;
    }

    /**
     * Hmacのハッシュを求める。
     *
     * @access private
     * @static
     * @param string $msgBody
     * @return string 求めたHmacハッシュ値
     * @throws TGMDK_Exception
     */
    private static function calcHmac($msgBody)
    {
        if (empty($msgBody)) {
            throw new TGMDK_Exception("MA99");
        }

        // コンフィグ生成
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getConnectionParameters();

        // マーチャントパスワード
        $merchant_secret_key = $array[TGMDK_Config::MERCHANT_SECRET_KEY];

        // バイナリ文字列に変更
        $encryptionKeyBytes = pack('H*', $merchant_secret_key);

        // ハッシュ生成
        return hash_hmac("sha256", $msgBody, $encryptionKeyBytes);
    }

    /**
     * Hmacのハッシュを求める
     *
     * @access private
     * @static
     * @param string $secretKey
     * @param string $msgBody
     * @return string 求めたHmacハッシュ値
     * @throws TGMDK_Exception
     */
    private static function calcHmacBySecretKey($secretKey, $msgBody)
    {
        if (empty($secretKey)) {
            throw new TGMDK_Exception("MA99");
        }
        if (empty($msgBody)) {
            throw new TGMDK_Exception("MA99");
        }

        // マーチャントパスワード
        $merchant_secret_key = $secretKey;

        // バイナリ文字列に変更
        $encryptionKeyBytes = pack('H*', $merchant_secret_key);

        // ハッシュ生成
        return hash_hmac("sha256", $msgBody, $encryptionKeyBytes);
    }

    /**
     * 引数文字列よりメッセージダイジェストを算出する。
     * @access public
     * @static
     * @param string $value メッセージダイジェスト算出の対象となる文字列
     * @param string $key メッセージダイジェスト算出キー
     * @return string ダイジェスト値
     * @throws TGMDK_Exception
     */
    public static function sign($value, $key)
    {
        // 引数チェック
        if (empty($value)) {
            throw new TGMDK_Exception("MA99");
        }
        if (empty($key)) {
            throw new TGMDK_Exception("MA99");
        }

        // マーチャントID
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getTransactionParameters();
        $merchant_cc_id = $array[TGMDK_Config::MERCHANT_CC_ID];      // マーチャントID

        $msg = $merchant_cc_id;
        $msg .= ":";
        $msg .= $key;
        $msg .= ":";
        $msg .= $value;

        //メッセージダイジェスト算出
        return sha1($msg);
    }

    /**
     * valueで指定された文字列からダイジェスト値を算出し、originalDigest値と比較する。
     * @param string $value メッセージダイジェスト算出の基になる文字列
     * @param string $key メッセージダイジェスト算出キー
     * @param string $originalDigest 事前に算出済のダイジェスト値
     * @return bool true 一致 or false 不一致
     * @throws TGMDK_Exception
     */
    public static function verifySign(string $value, string $key, string $originalDigest): bool
    {
        if (empty($originalDigest)) {
            return FALSE;
        }
        $digest = self::sign($value, $key);
        // Hmacが一致したかチェック
        if ($originalDigest == $digest) {
            return TRUE;
        }
        return FALSE;
    }

    /**
     * マーチャントデータ（MD）を生成する。
     * @param array $data マーチャントデータを生成するためにマーチャントが設定したデータ
     * @return string マーチャントデータ
     * @throws TGMDK_Exception
     */
    public static function createMerchantData(array $data): string
    {

        $str_md = "";
        $separator = "";

        foreach ($data as $key => $value) {
            $str_md .= $separator;

            if (empty($key)) {
                // キーが設定されていない場合は無視
                continue;

            } else if (is_string($key) && strlen(trim($key)) == 0) {
                // ブランクの場合は無視
                continue;
            }

            if (empty($value)) {
                $value = "";
            }

            $str_md .= urlencode($key);
            $str_md .= "=";
            $str_md .= urlencode($value);
            $separator = "&";
        }

        // マーチャントパスワードを取得する。
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getTransactionParameters();
        $merchant_secret_key = $array[TGMDK_Config::MERCHANT_SECRET_KEY];

        // ダイジェストを生成する。
        $digest = self::sign($str_md, $merchant_secret_key);

        // マーチャントデータの先頭にダイジェストを追加する。
        if (empty($str_md)) {
            $str_md = $digest;
        } else {
            $str_md = $digest . "&" . $str_md;
        }
        return base64_encode($str_md);
    }

    /**
     * マーチャントデータ（MD）の解析をする。
     * @param string $md マーチャントデータ
     * @return array|null マーチャントデータの元情報<br>ハッシュコードが一致しなかった場合はNULLを返す
     * @throws TGMDK_Exception
     */
    public static function analyzeMerchantData(string $md): ?array
    {

        // マーチャントデータを復号する。
        $decoded_md = base64_decode($md);

        // ハッシュコードを切り出す。
        $original_digest = null;
        $source = null;
        $first_index = strpos($decoded_md, "&");
        if ($first_index == false) {
            $original_digest = $decoded_md;
            $source = "";
        } else {
            $original_digest = substr($decoded_md, 0, $first_index);
            $source = substr($decoded_md, $first_index + 1);
        }

        // マーチャントパスワードを取得する。
        $conf = TGMDK_Config::getInstance();
        $array = $conf->getTransactionParameters();
        $merchant_secret_key = $array[TGMDK_Config::MERCHANT_SECRET_KEY];

        // ダイジェストをチェックする。
        if (self::verifySign($source, $merchant_secret_key, $original_digest) == FALSE) {
            // 改竄されている。
            return NULL;
        }

        $results = array();
        $tok = strtok($source, "&");
        while (!is_bool($tok) && $tok !== FALSE) {
            $index = strpos($tok, "=");
            $length = strlen($tok);

            if ($index == FALSE) {
                // キーとなる文字列が存在しない場合はスルーする。
                continue;
            }

            // keyを取得する。
            $key = substr($tok, 0, $index);
            $key = urldecode($key);
            if (empty($key)) {
                // キーがブランクの場合は無視する。
                continue;
            }

            // valueを取得する。
            $value = null;
            if ($index + 1 < $length) {
                $value = substr($tok, $index + 1);
                $value = urldecode($value);
            } else {
                $value = "";
            }
            $results[$key] = $value;
            $tok = strtok("&");

        }
        return $results;
    }
}
