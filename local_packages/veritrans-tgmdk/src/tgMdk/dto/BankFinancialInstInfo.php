<?php

namespace tgMdk\dto;

/**
 * 金融機関マスタ情報<br>
 *
 * @author Veritrans, Inc.
 */
class BankFinancialInstInfo
{

    /**
     * 金融機関コード<br>
     */
    private $bankCode;
    /**
     * デバイスコード<br>
     */
    private $deviceCode;
    /**
     * 金融機関名称<br>
     */
    private $bankName;
    /**
     * 金融機関カナ<br>
     */
    private $bankKana;
    /**
     * カナ頭文字<br>
     */
    private $bankIndexChar1;
    /**
     * カナ行頭文字<br>
     */
    private $bankIndexChar2;
    /**
     * 登録日時<br>
     */
    private $startDatetime;

    /**
     * 金融機関コードを取得する<br>
     *
     * @return string 金融機関コード<br>
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * 金融機関コードを設定する<br>
     *
     * @param string $bankCode 金融機関コード<br>
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * デバイスコードを取得する<br>
     *
     * @return string デバイスコード<br>
     */
    public function getDeviceCode()
    {
        return $this->deviceCode;
    }

    /**
     * デバイスコードを設定する<br>
     *
     * @param string $deviceCode デバイスコード<br>
     */
    public function setDeviceCode($deviceCode)
    {
        $this->deviceCode = $deviceCode;
    }

    /**
     * 金融機関名称を取得する<br>
     *
     * @return string 金融機関名称<br>
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * 金融機関名称を設定する<br>
     *
     * @param string $bankName 金融機関名称<br>
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }

    /**
     * 金融機関カナを取得する<br>
     *
     * @return string 金融機関カナ<br>
     */
    public function getBankKana()
    {
        return $this->bankKana;
    }

    /**
     * 金融機関カナを設定する<br>
     *
     * @param string $bankKana 金融機関カナ<br>
     */
    public function setBankKana($bankKana)
    {
        $this->bankKana = $bankKana;
    }

    /**
     * カナ頭文字を取得する<br>
     *
     * @return string カナ頭文字<br>
     */
    public function getBankIndexChar1()
    {
        return $this->bankIndexChar1;
    }

    /**
     * カナ頭文字を設定する<br>
     *
     * @param string $bankIndexChar1 カナ頭文字<br>
     */
    public function setBankIndexChar1($bankIndexChar1)
    {
        $this->bankIndexChar1 = $bankIndexChar1;
    }

    /**
     * カナ行頭文字を取得する<br>
     *
     * @return string カナ行頭文字<br>
     */
    public function getBankIndexChar2()
    {
        return $this->bankIndexChar2;
    }

    /**
     * カナ行頭文字を設定する<br>
     *
     * @param string $bankIndexChar2 カナ行頭文字<br>
     */
    public function setBankIndexChar2($bankIndexChar2)
    {
        $this->bankIndexChar2 = $bankIndexChar2;
    }

    /**
     * 登録日時(yyyymmddhhmmss)を取得する<br>
     *
     * @return string 登録日時<br>
     */
    public function getStartDatetime()
    {
        return $this->startDatetime;
    }

    /**
     * 登録日時を設定する<br>
     *
     * @param string $startDatetime 登録日時<br>
     */
    public function setStartDatetime($startDatetime)
    {
        $this->startDatetime = $startDatetime;
    }
}
