<?php

namespace tgMdk\dto;

/**
 * 会員基本情報のクラス
 *
 * @author Created automatically by DtoCreator
 *
 */
class AccountBasicParam
{

    /**
     * 入会年月日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * YYYYMMDD形式<br/>
     */
    private $createDate;

    /**
     * 退会年月日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * YYYYMMDD形式<br/>
     */
    private $deleteDate;

    /**
     * 強制退会フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 継続課金中であっても強制的に退会するか否か指定するフラグ<br/>
     * "1"：強制的に終了する。（以降課金は継続課金は発生しない。）<br/>
     * "0"：継続課金中の場合、退会できない。（未設定時は"0"として扱う）<br/>
     */
    private $forceDeleteDate;

    /**
     * カード情報削除フラグ<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 退会時にカード情報を削除するか否かを設定するフラグ<br/>
     * "1"：カード情報を削除する。<br/>
     * "0"：カード情報を削除しない。(未設定時は"0"として扱う)<br/>
     */
    private $deleteCardInfo;

    /**  
     * カード情報追加フラグ<br>  
     * 半角数字<br/>  
     * 最大桁数：1<br/>  
     * 登録済の会員IDにカード情報を追加するか否かを設定するフラグ<br/>  
     * "1"：カード情報を追加する。<br/>  
     * "0"：カード情報を追加しない。(未設定時は"0"として扱う)<br/>  
     */
    private $addCardInfo;

    /**  
     * 元会員ID退会フラグ<br>  
     * 半角数字<br/>  
     * 最大桁数：1<br/>  
     * 元会員IDを退会するか否かを設定するフラグ<br/>  
     * "1"：元会員IDを退会する。<br/>  
     * "0"：元会員IDを退会しない。(未設定時は"0"として扱う)<br/>  
     */
    private $deleteOriginalAccountId;

    /**  
     * 標準カード限定フラグ<br>  
     * 半角数字<br/>  
     * 最大桁数：1<br/>  
     * 標準カードのみ追加するか否か指定するフラグ<br/>  
     * "1"：元会員に紐づく標準カードのみ追加する。<br/>  
     * "0"：元会員に紐づく全てのカード情報を追加する。(未設定時は"0"として扱う)<br/>  
     */
    private $defaultCardOnly;

    /**  
     * 洗替設定フラグ<br>  
     * 半角数字<br/>  
     * 最大桁数：1<br/>  
     * カード情報を洗替するか否か指定するフラグ<br/>  
     * "1"：洗替する。(未設定時は"1"として扱う)<br/>  
     * "0"：洗替しない。<br/>  
     */
    private $cleaningConfig;

    /**
     * 入会年月日を設定する<br>
     * @param string $createDate 入会年月日<br>
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * 入会年月日を取得する<br>
     * @return string 入会年月日<br>
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * 退会年月日を設定する<br>
     * @param string $deleteDate 退会年月日<br>
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;
    }

    /**
     * 退会年月日を取得する<br>
     * @return string 退会年月日<br>
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }

    /**
     * 強制退会フラグを設定する<br>
     * @param string $forceDeleteDate 強制退会フラグ<br>
     */
    public function setForceDeleteDate($forceDeleteDate)
    {
        $this->forceDeleteDate = $forceDeleteDate;
    }

    /**
     * 強制退会フラグを取得する<br>
     * @return string 強制退会フラグ<br>
     */
    public function getForceDeleteDate()
    {
        return $this->forceDeleteDate;
    }

    /**
     * カード情報削除フラグを設定する<br>
     * @param string $deleteCardInfo カード情報削除フラグ<br>
     */
    public function setDeleteCardInfo($deleteCardInfo)
    {
        $this->deleteCardInfo = $deleteCardInfo;
    }

    /**
     * カード情報削除フラグを取得する<br>
     * @return string カード情報削除フラグ<br>
     */
    public function getDeleteCardInfo()
    {
        return $this->deleteCardInfo;
    }

    /**
     * カード情報追加フラグを設定する<br>
     * @param string $addCardInfo カード情報追加フラグ<br>
     */
    public function setAddCardInfo($addCardInfo)
    {
        $this->addCardInfo = $addCardInfo;
    }

    /**
     * カード情報追加フラグを取得する<br>
     * @return string カード情報追加フラグ<br>
     */
    public function getAddCardInfo()
    {
        return $this->addCardInfo;
    }

    /**
     * 元会員ID退会フラグを設定する<br>
     * @param string $deleteOriginalAccountId 元会員ID退会フラグ<br>
     */
    public function setDeleteOriginalAccountId($deleteOriginalAccountId)
    {
        $this->deleteOriginalAccountId = $deleteOriginalAccountId;
    }

    /**
     * 元会員ID退会フラグを取得する<br>
     * @return string 元会員ID退会フラグ<br>
     */
    public function getDeleteOriginalAccountId()
    {
        return $this->deleteOriginalAccountId;
    }

    /**
     * 標準カード限定フラグを設定する<br>
     * @param string $defaultCardOnly 標準カード限定フラグ<br>
     */
    public function setDefaultCardOnly($defaultCardOnly)
    {
        $this->defaultCardOnly = $defaultCardOnly;
    }

    /**
     * 標準カード限定フラグを取得する<br>
     * @return string 標準カード限定フラグ<br>
     */
    public function getDefaultCardOnly()
    {
        return $this->defaultCardOnly;
    }

    /**
     * 洗替設定フラグを設定する<br>
     * @param string $cleaningConfig 洗替設定フラグ<br>
     */
    public function setCleaningConfig($cleaningConfig)
    {
        $this->cleaningConfig = $cleaningConfig;
    }

    /**
     * 洗替設定フラグを取得する<br>
     * @return string 洗替設定フラグ<br>
     */
    public function getCleaningConfig()
    {
        return $this->cleaningConfig;
    }


}
