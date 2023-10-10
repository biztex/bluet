<?php

namespace tgMdk;

use tgMdk\dto\MdkBaseDto;

/**
 *
 * GW処理結果JSONから応答Dtoに変換するクラス<br>
 *
 * 対応する応答Dtoのプロパティ属性<br>
 * ・String<br>
 * ・String[]<br>
 * ・Dto<br>
 * ・Dto[]<br>
 * ※上記以外の属性に対するparse処理については動作対象外とする。<br>
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author VeriTrans Inc.
 */
class TGMDK_ContentHandler
{

    // 区切り文字
    const SLASH = "/";
    // 決済コマンド共通部ルートエレメント
    const ELEM_RESULT_ROOT = "result";
    // 決済オプションリザルトエレメントパス
    const ELEM_OPTION_RESULTS_PATH = "result/optionResults";

    const NAMESPACE = "tgMdk\\dto\\";

    /** TGMDK_Configファイルの読み込み */
    private $conf;

    /**
     * コンストラクタ。
     * コンフィグファイルからデータを取得して当クラスを使用できる状態にする。
     * @access public
     * @throws TGMDK_Exception
     */
    public function __construct()
    {
        TGMDK_Config::getInstance();
    }

    /**
     * GW処理結果JSONを解析し、指定した応答Dtoの各プロパティに設定する。
     *
     * @access public
     * @param mixed $hashData JSON形式から連想配列に変換したGW処理結果
     * @param MdkBaseDto $responseDto 応答Dto
     * @return MdkBaseDto JSONを設定した応答Dto
     */
    public function parseDto($hashData, $responseDto)
    {

        $this->parseHash("", $hashData, $responseDto, array(self::SLASH . self::ELEM_RESULT_ROOT));
        $this->parseHash(self::SLASH . self::ELEM_RESULT_ROOT, $hashData[self::ELEM_RESULT_ROOT],
            $responseDto, array(self::SLASH . self::ELEM_OPTION_RESULTS_PATH));
        return $responseDto;
    }

    /**
     * ハッシュデータを指定した応答Dtoの各プロパティに設定する。
     *
     * @access private
     * @param string $parentPath 親要素のパス
     * @param mixed|array $hashData ハッシュデータ
     * @param MdkBaseDto $responseDto 応答Dto
     * @param array $ignoreList 無視する項目（パス）の配列
     * @return MdkBaseDto JSONを設定した応答Dto
     */
    private function parseHash($parentPath, $hashData, $responseDto, $ignoreList)
    {

        if (is_null($hashData) || !is_array($hashData)) {
            return $responseDto;
        }

        if (is_null($ignoreList) || !is_array($ignoreList)) {
            $ignorePaths = array();
        } else {
            $ignorePaths = $ignoreList;
        }

        foreach ($hashData as $key => $value) {
            $currentPath = $parentPath . self::SLASH . $key;
            if (in_array($currentPath, $ignorePaths)) {
                continue;
            }

            // Element名よりsetter名生成
            $setterName = "set" . ucfirst($key);

            // インスタンス変数の存在確認
            if (method_exists($responseDto, $setterName)) {
                // valueのクラスによって処理を変更
                if (is_null($value)) {
                    $responseDto->$setterName(null);

                } else if (is_string($value)) {
                    // valueが文字列の場合
                    $responseDto->$setterName($value);

                } else if (is_int($value)) {
                    // valueが数値の場合
                    $responseDto->$setterName($value);

                } else if (is_bool($value)) {
                    // valueがbool型の場合
                    $responseDto->$setterName($value);

                } else if ($this->isHash($value)) {
                    // valueが連想配列の場合
                    $attrClassName = $this->getAttrAccessorClassName($responseDto, $key);

                    if (!empty($attrClassName)) {
                        $instance = new $attrClassName;

                        // 処理中ノードとDtoクラスを基に再帰処理を実行
                        $this->parseHash($currentPath, $value, $instance, $ignoreList);
                        // オブジェクトをDTOプロパティに設定
                        $responseDto->$setterName($instance);
                    }
                } else if (is_array($value)) {
                    // valueが配列の場合
                    if (empty($value)) {
                        // 要素が存在しない場合
                        continue;
                    }

                    // keyから型を特定
                    $attrClassName = $this->getAttrAccessorClassName($responseDto, $key);
                    if (empty($attrClassName)) {
                        // 型が特定できない場合
                        $instanceList = array();

                        foreach ($value as $element) {
                            if (!is_null($element)) {
                                array_push($instanceList, $element);
                            }
                        }
                        // オブジェクト配列をDTOプロパティに設定
                        $responseDto->$setterName($instanceList);

                    } else {
                        // 配列の要素が上記以外の配列の場合
                        $instanceList = array();

                        foreach ($value as $element) {
                            if (!is_null($element)) {
                                $instance = new $attrClassName;

                                // 処理中ノードとDtoクラスを基に再帰処理を実行
                                $this->parseHash($currentPath, $element, $instance, $ignoreList);
                                array_push($instanceList, $instance);
                            }
                        }
                        // オブジェクト配列をDTOプロパティに設定
                        $responseDto->$setterName($instanceList);
                    }
                }
            }
        }
        return $responseDto;
    }

    /**
     * レスポンスデータをマスク化してJSON形式で返却する。
     * @param mixed $responseArray 連想配列にしたGWの処理結果
     * @return string マスク化したJSON形式のGW処理結果
     * @throws TGMDK_Exception
     */
    public function maskedJsonResponse($responseArray): string
    {
        $maskJsonArray = $this->maskedResponse($responseArray);
        return json_encode($maskJsonArray, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * レスポンスデータをマスク化する
     * @param mixed $responseArray 連想配列にしたGWの処理結果
     * @return array マスク化した連想配列のGW処理結果
     * @throws TGMDK_Exception
     */
    private function maskedResponse($responseArray)
    {

        $maskJsonArray = array();
        foreach ($responseArray as $key => $value) {
            if (is_null($value)) {
                $maskJsonArray[$key] = null;
            } else if (is_array($value)) {
                $maskJsonArray[$key] = $this->maskedResponse($value);
            } else if (is_string($value)) {
                $maskJsonArray[$key] = TGMDK_Util::maskValue($key, $value);
            } else if (is_int($value)) {
                $maskJsonArray[$key] = TGMDK_Util::maskValue($key, $value);
            } else if (is_bool($value)) {
                $maskJsonArray[$key] = TGMDK_Util::maskValue($key, $value);
            }
        }
        return $maskJsonArray;
    }

    /**
     * 指定した配列が連想配列であるかを判定する。
     *
     * @access private
     * @param mixed $array 配列
     * @return bool 連想配列である場合はtrueを取得する。それ以外の場合はfalseを取得する。
     */
    private function isHash($array)
    {
        $i = 0;
        foreach ($array as $k => $dummy) {
            if ($k !== $i++) return true;
        }
        return false;
    }

    /**
     * 指定したオブジェクトのアクセサメソッドの型の名称を取得する。<br>
     * 該当するクラスが存在しない場合はnullを取得する。
     *
     * @access private
     * @param mixed $obj オブジェクト
     * @param string $attrAccessorName アクセサメソッド名
     * @return string アクセサメソッドの型の名称
     */
    private function getAttrAccessorClassName($obj, $attrAccessorName)
    {

        if (is_null($obj) || empty($attrAccessorName)) {
            return null;
        }
        if (method_exists($obj, 'getPropertyClassNameList') && array_key_exists($attrAccessorName, $obj->getPropertyClassNameList())) {
            $classNameList = $obj->getPropertyClassNameList();
            $className = $classNameList[$attrAccessorName];
        } else {
            $className = ucfirst($attrAccessorName);
        }
        if (!class_exists(self::NAMESPACE . $className)) {
            return null;
        }
        return self::NAMESPACE . $className;
    }
}
