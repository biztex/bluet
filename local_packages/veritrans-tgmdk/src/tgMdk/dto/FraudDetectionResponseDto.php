<?php

namespace tgMdk\dto;

/**
 * 不正検知評価応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionResponseDto
{

    /**
     * 不正検知評価結果<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * 不正検知評価結果。<br/>
     * この結果を元に後続処理をご判断ください。<br/>
     * 「accept, deny, challenge, error, timeout, internal_error」の何れかになります。<br/>
     * accept：承認<br/>
     * deny：拒否<br/>
     * challenge：保留<br/>
     * error：不正検知サービス先でエラー発生<br/>
     * timeout：不正検知サービスとの接続／応答タイムアウト<br/>
     * internal_error：ベリトランスでエラー発生<br/>
     */
    private $result;

    /**
     * 不正検知サービス<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 不正検知評価結果に採用した不正検知サービス。<br/>
     */
    private $service;

    /**
     * CAFIS Brain詳細結果応答<br>
     * FraudDetectionCbResponseDto<br/>
     * CAFIS Brainの詳細結果応答オブジェクト。<br/>
     * ※CAFIS Brainで不正検知評価を行った場合に設定されます。<br/>
     */
    private $cbResponse;

    /**
     * ReD詳細結果応答<br>
     * FraudDetectionRdResponseDto<br/>
     * ReDの詳細結果応答オブジェクト。<br/>
     * ※ReDで不正検知評価を行った場合に設定されます。<br/>
     */
    private $rdResponse;

    /**
     * Aegis詳細結果応答<br>
     * FraudDetectionAgResponseDto<br/>
     * Aegisの詳細結果応答オブジェクト。<br/>
     * ※Aegisで不正検知評価を行った場合に設定されます。<br/>
     */
    private $agResponse;


    /**
     * 不正検知評価結果を取得する<br>
     * @return string 不正検知評価結果<br>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * 不正検知評価結果を設定する<br>
     * @param string $result 不正検知評価結果<br>
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * 不正検知サービスを取得する<br>
     * @return string 不正検知サービス<br>
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * 不正検知サービスを設定する<br>
     * @param string $service 不正検知サービス<br>
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * CAFIS Brain詳細結果応答を取得する<br>
     * @return FraudDetectionCbResponseDto CAFIS Brain詳細結果応答<br>
     */
    public function getCbResponse()
    {
        return $this->cbResponse;
    }

    /**
     * CAFIS Brain詳細結果応答を設定する<br>
     * @param FraudDetectionCbResponseDto $cbResponse CAFIS Brain詳細結果応答<br>
     */
    public function setCbResponse($cbResponse)
    {
        $this->cbResponse = $cbResponse;
    }

    /**
     * ReD詳細結果応答を取得する<br>
     * @return FraudDetectionRdResponseDto ReD詳細結果応答<br>
     */
    public function getRdResponse()
    {
        return $this->rdResponse;
    }

    /**
     * ReD詳細結果応答を設定する<br>
     * @param FraudDetectionRdResponseDto $rdResponse ReD詳細結果応答<br>
     */
    public function setRdResponse($rdResponse)
    {
        $this->rdResponse = $rdResponse;
    }

    /**
     * Aegis詳細結果応答を取得する<br>
     * @return FraudDetectionAgResponseDto Aegis詳細結果応答<br>
     */
    public function getAgResponse()
    {
        return $this->agResponse;
    }

    /**
     * Aegis詳細結果応答を設定する<br>
     * @param FraudDetectionAgResponseDto $agResponse Aegis詳細結果応答<br>
     */
    public function setAgResponse($agResponse)
    {
        $this->agResponse = $agResponse;
    }

    /**
     * プロパティ名と対応するクラス名のリストを取得する<br>
     * @return array
     */
    public function getPropertyClassNameList()
    {
        return array('cbResponse' => 'FraudDetectionCbResponseDto', 'agResponse' => 'FraudDetectionAgResponseDto', 'rdResponse' => 'FraudDetectionRdResponseDto');
    }

}
