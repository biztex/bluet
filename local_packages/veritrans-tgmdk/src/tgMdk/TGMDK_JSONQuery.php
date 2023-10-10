<?php

namespace tgMdk;

/*
 * マーチャントが設定した要求DTOよりJSON文字列を作成するクラス
 */

use tgMdk\dto\MdkBaseDto;

class TGMDK_JSONQuery
{

    /** N=V要素結合文字 */
    const PARAM_UNITE_CHAR = '&';
    /** N=V要素結合文字エスケープ文字列 */
    const PARAM_UNITE_CHAR_ESCAPE = '\&';
    /** ダブルクオート */
    const DQUOTE_CHAR = "\"";
    /** ダブルクオートエスケープ文字列 */
    const DQUOTE_CHAR_ESCAPE = "\\\"";
    /** N、V結合文字 */
    const NV_UNITE_CHAR = "=";
    /** BaseDto名 */
    const BASE_DTO_NAME = "MdkBaseDto";
    /** サービス固有要素前置詞 */
    const EXPARAM_PREPOSIT = "exparam";
    /** NAME部階層区切り文字 */
    const N_SEP = ".";
    /** サービスタイプのフィールド名 */
    const FIELD_NAME_SERVICE_TYPE = "SERVICE_TYPE";
    /** サービスコマンドのフィールド名 */
    const FIELD_NAME_SERVICE_COMMAND = "SERVICE_COMMAND";
    /** サーチパラメータのフィールド名 */
    const FIELD_NAME_SEARCH_PARAM = "SearchParameter";
    /** サーチの範囲指定フィールド名 */
    const FIELD_NAME_SEARCH_RANGE = "SearchRange";

    /** TGMDK_Configファイルの読み込み */
    private $conf;

    /** JSON文字 */
    private $jsonParame;

    /** ログ出力用文字列 */
    private $maskedLogString;
    /** サービスタイプ */
    private $serviceType;
    /** サービスコマンド */
    private $serviceCommand;

    /**
     * JSON文字列を取得する
     * @return string|bool
     */
    public function getJsonParam()
    {
        return $this->jsonParame;
    }

    /**
     * ログ出力用文字列を取得する
     * @return string
     */
    public function getMaskedLogString()
    {
        return $this->maskedLogString;
    }

    /**
     * サービスタイプを取得する
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * サービスコマンドを取得する
     */
    public function getServiceCommand()
    {
        return $this->serviceCommand;
    }

    /**
     * コンストラクタ。
     * コンフィグファイルからデータを取得して当クラスを使用できる状態にする。
     * TGMDK_JSONQuery constructor.
     * @throws TGMDK_Exception
     */
    public function __construct()
    {
        $myConf = TGMDK_Config::getInstance();
        $this->conf = $myConf->getRequestDtoParameters();
        $this->conf = array_merge($this->conf, $myConf->getResponseDtoParameters());
    }

    /**
     * リクエストDTOをJSON文字列に変換する
     * @param MdkBaseDto $requestDto リクエストDTO
     * @param string $className
     * @throws TGMDK_Exception
     */
    public function createJsonParameter(MdkBaseDto $requestDto, string $className)
    {
        $arrayData = (array)$requestDto;
        $maskedArrayData = (array)$requestDto;
        if (is_array($arrayData)) {
            foreach ($arrayData as $key => $value) {
                $orgKey = (string)$key;
                $workKey = str_replace($className, "", $orgKey);
                $replaceKey = preg_replace('/\W/', '', $workKey);
                if (is_object($value)) {
                    $arrayData[$replaceKey] = $this->createJsonSubObject($value, get_class($value), false);
                    $maskedArrayData[$replaceKey] = $this->createJsonSubObject($value, get_class($value), true);
                } elseif (is_array($value)) {
                    $arrayData[$replaceKey] = $this->createJsonSubObject($value, $className, false);
                    $maskedArrayData[$replaceKey] = $this->createJsonSubObject($value, $className, true);
                } else {
                    if (!is_null($value)) {
                        if (strpos($replaceKey, self::FIELD_NAME_SERVICE_TYPE) !== FALSE) {
                            $this->serviceType = $value;
                        } else if (strpos($replaceKey, self::FIELD_NAME_SERVICE_COMMAND) !== FALSE) {
                            $this->serviceCommand = $value;
                        } else {
                            $param = $value;
                            $arrayData[$replaceKey] = $param;
                            $maskedArrayData[$replaceKey] = TGMDK_Util::maskValue($replaceKey, $param);
                        }
                    }
                }
                if ($orgKey != $replaceKey) {
                    unset($arrayData[$orgKey]);
                    unset($maskedArrayData[$orgKey]);
                }
            }
        }
        $arrayData = array_filter($arrayData, array($this, 'shouldParseToJson'));
        $maskedArrayData = array_filter($maskedArrayData, array($this, 'shouldParseToJson'));
        // JSON文字列
        $this->jsonParame = json_encode($arrayData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        // マスク化したJSON文字列
        $maskedJsonParam = json_encode($maskedArrayData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        // ログ出力用文字列(マーチャントが指定する文字エンコードに変換する)
        $this->maskedLogString = $maskedJsonParam;
    }

    /**
     * サブオブジェクトを解析する。
     * @param mixed $subObject サブオブジェクト
     * @param string $className クラス名
     * @param bool $is_mask
     * @return array|null サブオブジェクト
     * @throws TGMDK_Exception
     */
    private function createJsonSubObject($subObject, string $className, bool $is_mask): ?array
    {
        $arrayData = (array)$subObject;
        foreach ($arrayData as $key => $value) {
            $orgKey = (string)$key;

            // SearchRangeがついているものは削除
            $wk = str_replace(self::FIELD_NAME_SEARCH_RANGE, "", $orgKey);
            // SearchParameterを後ろにつけてクラスが存在するか判定
            if (!class_exists($className)) {
                $wcn = $className . self::FIELD_NAME_SEARCH_PARAM;
                if (class_exists($wcn)) {
                    $className = $wcn;
                }
            }
            $workKey = preg_replace('/' . str_replace("\\", "\\\\", $className) . '/',
                '', $wk, 1);
            $replaceKey = preg_replace('/\W/', '', $workKey);
            if (is_object($value)) {
                $arrayData[$replaceKey] = $this->createJsonSubObject($value, get_class($value), $is_mask);
            } elseif (is_array($value)) {
                $arrayData[$replaceKey] = $this->createJsonSubObject($value, $className, $is_mask);
            } else {
                if (!is_null($value)) {
                    if ($is_mask) {
                        $arrayData[$replaceKey] = TGMDK_Util::maskValue($replaceKey, $value);
                    } else {
                        $arrayData[$replaceKey] = $value;
                    }
                }
            }
            if ($orgKey != $replaceKey) {
                unset($arrayData[$orgKey]);
            }
            if (isset($replaceKey) && array_key_exists($replaceKey, $arrayData)) {
                if (is_null($arrayData[$replaceKey])) {
                    unset($arrayData[$replaceKey]);
                }
            }
        }

        // カラ文字除去
        $arrayData = array_filter($arrayData, array($this, 'shouldParseToJson'));
        // サブオブジェクトの要素が0の場合nullを返す
        if (count($arrayData) == 0) {
            return null;
        }

        return $arrayData;
    }

    /**
     * JSONにパースすべきかどうかを判定する
     * <p>createJsonParameter または createJsonSubObject で使用</p>
     *
     * @access private
     * @param mixed $value 判定する値
     * @return bool 判定結果
     */
    private function shouldParseToJson($value)
    {
        return $value !== '' && isset($value) && $value !== array();
    }
}
