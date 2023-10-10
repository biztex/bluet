<?php

namespace tgMdk\dto;

/**
 * 不正検知ReD詳細結果応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionRdResponseDto
{

    /**
     * 結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：11<br/>
     * 「ddd.ddd.ddd」のフォーマットで設定される結果コードです。<br/>
     */
    private $code;

    /**
     * リクエストID<br>
     * 半角数字<br/>
     * 最大桁数：16<br/>
     * ReDが生成する一意のリクエストID。<br/>
     */
    private $requestId;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：255<br/>
     * ベリトランスからReDに送信された、一意の取引ID。<br/>
     */
    private $orderId;

    /**
     * トランザクションステータスコード<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * トランザクションステータスコード。<br/>
     */
    private $riskStatusCode;

    /**
     * トランザクションスクリーニング結果<br>
     * 半角英字<br/>
     * 最大桁数：9<br/>
     * トランザクションスクリーニングの結果。<br/>
     * ACCEPT：承認<br/>
     * DENY：拒否<br/>
     * CHALLENGE：保留<br/>
     * ERROR：エラー<br/>
     * ENETFP：接続不可<br/>
     * ETMOUT：タイムアウト<br/>
     * EIVINF：リクエストフォーマット異常<br/>
     * <br/>
     */
    private $riskFraudStatusCode;

    /**
     * ReDレスポンスコード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * ReDレスポンスコード。<br/>
     */
    private $riskResponseCode;

    /**
     * ReD取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * ReDが生成する一意の取引ID。<br/>
     */
    private $riskOrderId;

    /**
     * ニューラルスコア<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * ニューラルスコア。ニューラルスコアリングサービスをご利用時に設定されます。<br/>
     */
    private $riskNeuralScore;

    /**
     * ルール該当コード一覧<br>
     * 半角英数字<br/>
     * 最大桁数：400<br/>
     * トランザクションがルールに該当した場合の、ルールIDに設定したコード（RCF）一覧<br/>
     */
    private $riskRuleCategory;


    /**
     * 結果コードを取得する<br>
     * @return string 結果コード<br>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 結果コードを設定する<br>
     * @param string $code 結果コード<br>
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * リクエストIDを取得する<br>
     * @return string リクエストID<br>
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * リクエストIDを設定する<br>
     * @param string $requestId リクエストID<br>
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * トランザクションステータスコードを取得する<br>
     * @return string トランザクションステータスコード<br>
     */
    public function getRiskStatusCode()
    {
        return $this->riskStatusCode;
    }

    /**
     * トランザクションステータスコードを設定する<br>
     * @param string $riskStatusCode トランザクションステータスコード<br>
     */
    public function setRiskStatusCode($riskStatusCode)
    {
        $this->riskStatusCode = $riskStatusCode;
    }

    /**
     * トランザクションスクリーニング結果を取得する<br>
     * @return string トランザクションスクリーニング結果<br>
     */
    public function getRiskFraudStatusCode()
    {
        return $this->riskFraudStatusCode;
    }

    /**
     * トランザクションスクリーニング結果を設定する<br>
     * @param string $riskFraudStatusCode トランザクションスクリーニング結果<br>
     */
    public function setRiskFraudStatusCode($riskFraudStatusCode)
    {
        $this->riskFraudStatusCode = $riskFraudStatusCode;
    }

    /**
     * ReDレスポンスコードを取得する<br>
     * @return string ReDレスポンスコード<br>
     */
    public function getRiskResponseCode()
    {
        return $this->riskResponseCode;
    }

    /**
     * ReDレスポンスコードを設定する<br>
     * @param string $riskResponseCode ReDレスポンスコード<br>
     */
    public function setRiskResponseCode($riskResponseCode)
    {
        $this->riskResponseCode = $riskResponseCode;
    }

    /**
     * ReD取引IDを取得する<br>
     * @return string ReD取引ID<br>
     */
    public function getRiskOrderId()
    {
        return $this->riskOrderId;
    }

    /**
     * ReD取引IDを設定する<br>
     * @param string $riskOrderId ReD取引ID<br>
     */
    public function setRiskOrderId($riskOrderId)
    {
        $this->riskOrderId = $riskOrderId;
    }

    /**
     * ニューラルスコアを取得する<br>
     * @return string ニューラルスコア<br>
     */
    public function getRiskNeuralScore()
    {
        return $this->riskNeuralScore;
    }

    /**
     * ニューラルスコアを設定する<br>
     * @param string $riskNeuralScore ニューラルスコア<br>
     */
    public function setRiskNeuralScore($riskNeuralScore)
    {
        $this->riskNeuralScore = $riskNeuralScore;
    }

    /**
     * ルール該当コード一覧を取得する<br>
     * @return string ルール該当コード一覧<br>
     */
    public function getRiskRuleCategory()
    {
        return $this->riskRuleCategory;
    }

    /**
     * ルール該当コード一覧を設定する<br>
     * @param string $riskRuleCategory ルール該当コード一覧<br>
     */
    public function setRiskRuleCategory($riskRuleCategory)
    {
        $this->riskRuleCategory = $riskRuleCategory;
    }


}
