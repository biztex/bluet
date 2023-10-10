<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：MasterPass、コマンド名：与信の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MasterpassAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "masterpass";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：80<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数字、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 99999999(8桁) 以下<br/>
     */
    private $amount;

    /**
     * 支払い種別<br>
     * 半角英数字<br/>
     * 最大桁数：83<br/>
     * "10"　（一括払い）<br/>
     * "21"　（ボーナス一括）<br/>
     * "61Cxx"　（分割払い、xxに分割回数指定）<br/>
     * "80"　（リボルビング払い）<br/>
     * ※指定が無い場合は、"10"（一括払い）が適用されます。<br/>
     */
    private $jpo;

    /**
     * 与信同時売上フラグ<br>
     * 英字（boolean）<br/>
     * - true : 与信同時売上<br/>
     * - false: 与信のみ<br/>
     * ※ 未指定の場合は、false:与信のみ。<br/>
     */
    private $withCapture;

    /**
     * 初回請求年月<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * JPOが31,34,61で与信同時売上フラグ=trueの場合に初回請求月をYYMM形式で指定します。JPOが上記以外、または与信同時売上フラグがfalseの場合は設定されているとエラーになります。<br/>
     * 指定がない場合には初回請求年月を指定せずに売上を行います（JPOパラメータ内の数値で補完されません）。<br/>
     * <br/>
     */
    private $firstPayment;

    /**
     * ボーナス初回年月<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * JPOが24,34で与信同時売上フラグ=trueの場合にボーナス初回月をYYMM形式で指定します。JPOが上記以外、または与信同時売上フラグがfalseの場合は設定されているとエラーになります。<br/>
     * 指定がない場合にはボーナス初回月を指定せずに売上を行います（JPOパラメータ内の数値で補完されません）。<br/>
     * <br/>
     */
    private $bonusFirstPayment;


    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済金額を設定する<br>
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 支払い種別を取得する<br>
     * @return string 支払い種別<br>
     */
    public function getJpo()
    {
        return $this->jpo;
    }

    /**
     * 支払い種別を設定する<br>
     * @param string $jpo 支払い種別<br>
     */
    public function setJpo($jpo)
    {
        $this->jpo = $jpo;
    }

    /**
     * 与信同時売上フラグを取得する<br>
     * @return string 与信同時売上フラグ<br>
     */
    public function getWithCapture()
    {
        return $this->withCapture;
    }

    /**
     * 与信同時売上フラグを設定する<br>
     * @param string $withCapture 与信同時売上フラグ<br>
     */
    public function setWithCapture($withCapture)
    {
        $this->withCapture = $withCapture;
    }

    /**
     * 初回請求年月を取得する<br>
     * @return string 初回請求年月<br>
     */
    public function getFirstPayment()
    {
        return $this->firstPayment;
    }

    /**
     * 初回請求年月を設定する<br>
     * @param string $firstPayment 初回請求年月<br>
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
    }

    /**
     * ボーナス初回年月を取得する<br>
     * @return string ボーナス初回年月<br>
     */
    public function getBonusFirstPayment()
    {
        return $this->bonusFirstPayment;
    }

    /**
     * ボーナス初回年月を設定する<br>
     * @param string $bonusFirstPayment ボーナス初回年月<br>
     */
    public function setBonusFirstPayment($bonusFirstPayment)
    {
        $this->bonusFirstPayment = $bonusFirstPayment;
    }


    /**
     * ログ用文字列(マスク済み)を設定する<br>
     * @param string $maskedLog ログ用文字列(マスク済み)<br>
     */
    public function _setMaskedLog($maskedLog)
    {
        $this->maskedLog = $maskedLog;
    }

    /**
     * ログ用文字列(マスク済み)を取得する<br>
     * @return string ログ用文字列(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->maskedLog;
    }

}
