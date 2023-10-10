<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Search 要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class SearchRequestDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "search";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Search";

    /**
     * 決済サービスタイプを取得する<br>
     *
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     *
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
    }


    /**
     * リクエストID<br>
     */
    private $requestId;


    /**
     * 最新トランザクションのみフラグ<br>
     *
     * 「最新トランザクションのみフラグ」が有効な場合は、<br>
     *  最新トランザクションのみを検索対象とする。<br>
     *  カード決済で、「与信コマンド」、「売上コマンド」が成功している場合<br>
     *  本フラグを設定することにより「売上コマンド」のトランザクションを取得する。
     *
     */
    private $newerFlag;

    /**
     * ダミー決済対象フラグ<br>
     */
    private $containDummyFlag;

    /**
     * 検索最大件数<br>
     */
    private $maxCount;

    /**
     * マスタ名<br>
     */
    private $masterNames;

    /**
     * 検索キー<br>
     */
    private $searchParameters;

    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;


    /**
     * リクエストIDを取得する<br>
     *
     * @return string リクエストID<br>
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * リクエストIDを設定する<br>
     *
     * @param string $requestId リクエストID<br>
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * 決済サービスタイプ<br>
     */
    private $serviceTypeCd;

    /**
     * 決済サービスタイプを取得する<br>
     *
     * @return string[] 決済サービスタイプ<br>
     */
    public function getServiceTypeCd()
    {
        return $this->serviceTypeCd;
    }

    /**
     * 決済サービスタイプを設定する。<br>
     *
     * 複数指定を可能とする。<br>
     * 指定しない場合は全ての決済サービスタイプより検索されます。<br>
     *
     * @param string[] $serviceTypeCd 決済サービスタイプ<br>
     */
    public function setServiceTypeCd($serviceTypeCd)
    {
        $this->serviceTypeCd = $serviceTypeCd;
    }

    /**
     * 最新トランザクションのみフラグを取得する<br>
     *
     * @return string 最新トランザクションのみフラグ<br>
     */
    public function getNewerFlag()
    {
        return $this->newerFlag;
    }

    /**
     * 最新トランザクションのみフラグを設定する<br>
     *
     * @param string $newerFlag 最新トランザクションのみフラグ<br>
     */
    public function setNewerFlag($newerFlag)
    {
        $this->newerFlag = $newerFlag;
    }


    /**
     * ダミー決済対象フラグを取得する<br>
     *
     * @return string ダミー決済対象フラグ<br>
     */
    public function getContainDummyFlag()
    {
        return $this->containDummyFlag;
    }

    /**
     * ダミー決済対象フラグを設定する<br>
     *
     * @param string $containDummyFlag ダミー決済対象フラグ<br>
     */
    public function setContainDummyFlag($containDummyFlag)
    {
        $this->containDummyFlag = $containDummyFlag;
    }

    /**
     * 検索最大件数を取得する<br>
     *
     * @return string 検索最大件数<br>
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * 検索最大件数を設定する<br>
     *
     * @param string $maxCount 検索最大件数<br>
     */
    public function setMaxCount($maxCount)
    {
        $this->maxCount = $maxCount;
    }

    /**
     * マスタ名を取得する<br>
     *
     * @return string マスタ名<br>
     */
    public function getMasterNames()
    {
        return $this->masterNames;
    }

    /**
     * マスタ名を設定する<br>
     *
     * @param string $masterNames マスタ名<br>
     */
    public function setMasterNames($masterNames)
    {
        $this->masterNames = $masterNames;
    }

    /**
     * 検索キーを取得する<br>
     *
     * @return SearchParameters 検索キー<br>
     */
    public function getSearchParameters()
    {
        return $this->searchParameters;
    }

    /**
     * 検索キーを設定する<br>
     *
     * @param SearchParameters $searchParameters 検索キー<br>
     */
    public function setSearchParameters($searchParameters)
    {
        $this->searchParameters = $searchParameters;
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
        return $this->maskedLog;
    }

}
