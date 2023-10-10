<?php

namespace tgMdk\dto;

/**
 * 検索条件:MPI検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class MpiSearchParameter
{

    /**
     * 詳細取引決済状態<br>
     */
    private $detailOrderType;

    /**
     * 応答3D トランザクションID<br>
     */
    private $res3dTransactionId;

    /**
     * 応答3D トランザクションステータス<br>
     */
    private $res3dTransactionStatus;

    /**
     * 応答3D ECI<br>
     */
    private $res3dEci;

    /**
     * デバイスチャネル<br>
     */
    private $deviceChannel;

    /**
     * アカウントタイプ<br>
     */
    private $accountType;

    /**
     * 認証要求タイプ<br>
     */
    private $authenticationIndicator;

    /**
     * メッセージカテゴリ<br>
     */
    private $messageCategory;

    /**
     * 詳細取引決済状態を取得する<br>
     *
     * @return string[] 詳細取引決済状態<br>
     */
    public function getDetailOrderType()
    {
        return $this->detailOrderType;
    }

    /**
     * 詳細取引決済状態を設定する<br>
     *
     * @param string[] $detailOrderType 詳細取引決済状態<br>
     */
    public function setDetailOrderType($detailOrderType)
    {
        $this->detailOrderType = $detailOrderType;
    }

    /**
     * 応答3DトランザクションIDを取得する<br>
     *
     * @return string 応答3DトランザクションID<br>
     */
    public function getRes3dTransactionId()
    {
        return $this->res3dTransactionId;
    }

    /**
     * 応答3DトランザクションIDを設定する<br>
     *
     * @param string $res3dTransactionId 応答3DトランザクションID<br>
     */
    public function setRes3dTransactionId($res3dTransactionId)
    {
        $this->res3dTransactionId = $res3dTransactionId;
    }

    /**
     * 応答3Dトランザクションステータスを取得する<br>
     *
     * @return string 応答3Dトランザクションステータス<br>
     */
    public function getRes3dTransactionStatus()
    {
        return $this->res3dTransactionStatus;
    }

    /**
     * 応答3Dトランザクションステータスを設定する<br>
     *
     * @param string $res3dTransactionStatus 応答3Dトランザクションステータス<br>
     */
    public function setRes3dTransactionStatus($res3dTransactionStatus)
    {
        $this->res3dTransactionStatus = $res3dTransactionStatus;
    }

    /**
     * 応答3D ECIを取得する<br>
     *
     * @return string 応答3D ECI<br>
     */
    public function getRes3dEci()
    {
        return $this->res3dEci;
    }

    /**
     * 応答3D ECIを設定する<br>
     *
     * @param string $res3dEci 応答3D ECI<br>
     */
    public function setRes3dEci($res3dEci)
    {
        $this->res3dEci = $res3dEci;
    }

    /**
     * デバイスチャネルを取得する<br>
     *
     * @return string[] デバイスチャネル<br>
     */
    public function getDeviceChannel()
    {
        return $this->deviceChannel;
    }

    /**
     * デバイスチャネルを設定する<br>
     *
     * @param string[] $deviceChannel デバイスチャネル<br>
     */
    public function setDeviceChannel($deviceChannel)
    {
        $this->deviceChannel = $deviceChannel;
    }

    /**
     * アカウントタイプを取得する<br>
     *
     * @return string[] アカウントタイプ<br>
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * アカウントタイプを設定する<br>
     *
     * @param string[] $accountType アカウントタイプ<br>
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * 認証要求タイプを取得する<br>
     *
     * @return string[] 認証要求タイプ<br>
     */
    public function getAuthenticationIndicator()
    {
        return $this->authenticationIndicator;
    }

    /**
     * 認証要求タイプを設定する<br>
     *
     * @param string[] $authenticationIndicator 認証要求タイプ<br>
     */
    public function setAuthenticationIndicator($authenticationIndicator)
    {
        $this->authenticationIndicator = $authenticationIndicator;
    }

    /**
     * メッセージカテゴリを取得する<br>
     *
     * @return string[] メッセージカテゴリ<br>
     */
    public function getMessageCategory()
    {
        return $this->messageCategory;
    }

    /**
     * メッセージカテゴリを設定する<br>
     *
     * @param string[] $messageCategory メッセージカテゴリ<br>
     */
    public function setMessageCategory($messageCategory)
    {
        $this->messageCategory = $messageCategory;
    }

}
