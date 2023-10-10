<?php

namespace tgMdk\dto;

/**
 * 不正検知Httpヘッダ情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionHeaderDto
{

    /**
     * ヘッダー要素名<br>
     * 半角英数字<br/>
     * 最大桁数：1024<br/>
     * ヘッダー要素名<br/>
     */
    private $headerName;

    /**
     * ヘッダー値<br>
     * 半角英数字<br/>
     * 最大桁数：1024<br/>
     * 値<br/>
     */
    private $headerValue;


    /**
     * ヘッダー要素名を取得する<br>
     * @return string ヘッダー要素名<br>
     */
    public function getHeaderName()
    {
        return $this->headerName;
    }

    /**
     * ヘッダー要素名を設定する<br>
     * @param string $headerName ヘッダー要素名<br>
     */
    public function setHeaderName($headerName)
    {
        $this->headerName = $headerName;
    }

    /**
     * ヘッダー値を取得する<br>
     * @return string ヘッダー値<br>
     */
    public function getHeaderValue()
    {
        return $this->headerValue;
    }

    /**
     * ヘッダー値を設定する<br>
     * @param string $headerValue ヘッダー値<br>
     */
    public function setHeaderValue($headerValue)
    {
        $this->headerValue = $headerValue;
    }


}
