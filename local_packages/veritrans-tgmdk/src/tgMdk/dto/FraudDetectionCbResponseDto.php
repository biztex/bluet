<?php

namespace tgMdk\dto;

/**
 * 不正検知Cafis Brain詳細結果応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionCbResponseDto
{

    /**
     * ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * 取引情報を特定するための一意な ID 文字列。<br/>
     */
    private $id;

    /**
     * モデルコード<br>
     * 半角英数字<br/>
     * 最大桁数：25<br/>
     * スコアリングを実施したモデルコード。<br/>
     */
    private $modelCode;

    /**
     * モデルバージョン番号<br>
     * 半角英数字<br/>
     * 最大桁数：20<br/>
     * スコアリングを実施したモデルのバージョン番号。<br/>
     */
    private $modelVersion;

    /**
     * 組織コード<br>
     * 文字列<br/>
     * 最大桁数：25<br/>
     * 組織コード。<br/>
     */
    private $orgCode;

    /**
     * 実施日時<br>
     * 半角英数字<br/>
     * 最大桁数：24<br/>
     * スコアリング実施日時。<br/>
     */
    private $time;

    /**
     * 結果点数<br>
     * 半角英数字<br/>
     * 最大桁数：22<br/>
     * スコアリング結果点数。<br/>
     */
    private $score;

    /**
     * デバイスID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     * CAFIS Brain が割り当てた一意なデバイス ID。<br/>
     */
    private $deviceId;

    /**
     * TDL値<br>
     * 半角英数字<br/>
     * 最大桁数：22<br/>
     * TDL 値（ミリ秒）<br/>
     * ※JSCで取得するエンドユーザ側のデバイスタイムスタンプとベリトランス側のサーバタイムスタンプとの時間差<br/>
     */
    private $tdl;

    /**
     * 推奨アクション<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * リスクエンジンの結果とモデルの閾値設定によって判断された推奨アクション。<br/>
     * APPROVE：承認<br/>
     * INVESTIGATE：調査<br/>
     * REJECT：却下<br/>
     */
    private $systemResponse;

    /**
     * 決定アクション<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 運用担当者のアクション、システムレスポンスによって判断された推奨アクション。<br/>
     * 「システム」または、運用担当者により決定された最終アクション。<br/>
     * APPROVE：承認<br/>
     * CANCEL：取消<br/>
     * WAIT：保留<br/>
     * 「WAIT：保留」の場合は、運用担当者が判断の上、「APPROVE：承認」または「CANCEL：取消」として下さい。<br/>
     */
    private $fulfillmentAction;

    /**
     * 監査証跡<br>
     * FraudDetectionCbAuditTrailDtoの配列<br/>
     * 監査証跡オブジェクト<br/>
     */
    private $auditTrail;

    /**
     * リスクレベル<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * systemResponse の結果と auditTrail データによって導き出されたリスクレベル。<br/>
     * LOW：低<br/>
     * MEDIUM：中<br/>
     * HIGH：高<br/>
     */
    private $riskLevel;

    /**
     * 警告<br>
     * FraudDetectionCbWarningDtoの配列<br/>
     * 警告オブジェクト<br/>
     */
    private $warnings;


    /**
     * IDを取得する<br>
     * @return string ID<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * IDを設定する<br>
     * @param string $id ID<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * モデルコードを取得する<br>
     * @return string モデルコード<br>
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }

    /**
     * モデルコードを設定する<br>
     * @param string $modelCode モデルコード<br>
     */
    public function setModelCode($modelCode)
    {
        $this->modelCode = $modelCode;
    }

    /**
     * モデルバージョン番号を取得する<br>
     * @return string モデルバージョン番号<br>
     */
    public function getModelVersion()
    {
        return $this->modelVersion;
    }

    /**
     * モデルバージョン番号を設定する<br>
     * @param string $modelVersion モデルバージョン番号<br>
     */
    public function setModelVersion($modelVersion)
    {
        $this->modelVersion = $modelVersion;
    }

    /**
     * 組織コードを取得する<br>
     * @return string 組織コード<br>
     */
    public function getOrgCode()
    {
        return $this->orgCode;
    }

    /**
     * 組織コードを設定する<br>
     * @param string $orgCode 組織コード<br>
     */
    public function setOrgCode($orgCode)
    {
        $this->orgCode = $orgCode;
    }

    /**
     * 実施日時を取得する<br>
     * @return string 実施日時<br>
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * 実施日時を設定する<br>
     * @param string $time 実施日時<br>
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * 結果点数を取得する<br>
     * @return string 結果点数<br>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * 結果点数を設定する<br>
     * @param string $score 結果点数<br>
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * デバイスIDを取得する<br>
     * @return string デバイスID<br>
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * デバイスIDを設定する<br>
     * @param string $deviceId デバイスID<br>
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * TDL値を取得する<br>
     * @return string TDL値<br>
     */
    public function getTdl()
    {
        return $this->tdl;
    }

    /**
     * TDL値を設定する<br>
     * @param string $tdl TDL値<br>
     */
    public function setTdl($tdl)
    {
        $this->tdl = $tdl;
    }

    /**
     * 推奨アクションを取得する<br>
     * @return string 推奨アクション<br>
     */
    public function getSystemResponse()
    {
        return $this->systemResponse;
    }

    /**
     * 推奨アクションを設定する<br>
     * @param string $systemResponse 推奨アクション<br>
     */
    public function setSystemResponse($systemResponse)
    {
        $this->systemResponse = $systemResponse;
    }

    /**
     * 決定アクションを取得する<br>
     * @return string 決定アクション<br>
     */
    public function getFulfillmentAction()
    {
        return $this->fulfillmentAction;
    }

    /**
     * 決定アクションを設定する<br>
     * @param string $fulfillmentAction 決定アクション<br>
     */
    public function setFulfillmentAction($fulfillmentAction)
    {
        $this->fulfillmentAction = $fulfillmentAction;
    }

    /**
     * 監査証跡を取得する<br>
     * @return FraudDetectionCbAuditTrailDto[] 監査証跡<br>
     */
    public function getAuditTrail()
    {
        return $this->auditTrail;
    }

    /**
     * 監査証跡を設定する<br>
     * @param FraudDetectionCbAuditTrailDto[] $auditTrail 監査証跡<br>
     */
    public function setAuditTrail($auditTrail)
    {
        $this->auditTrail = $auditTrail;
    }

    /**
     * リスクレベルを取得する<br>
     * @return string リスクレベル<br>
     */
    public function getRiskLevel()
    {
        return $this->riskLevel;
    }

    /**
     * リスクレベルを設定する<br>
     * @param string $riskLevel リスクレベル<br>
     */
    public function setRiskLevel($riskLevel)
    {
        $this->riskLevel = $riskLevel;
    }

    /**
     * 警告を取得する<br>
     * @return FraudDetectionCbWarningDto[] 警告<br>
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * 警告を設定する<br>
     * @param FraudDetectionCbWarningDto[] $warnings 警告<br>
     */
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }

    /**
     * プロパティ名と対応するクラス名のリストを取得する<br>
     * @return array
     */
    public function getPropertyClassNameList()
    {
        return array('auditTrail' => 'FraudDetectionCbAuditTrailDto', 'warnings' => 'FraudDetectionCbWarningDto');
    }

}
