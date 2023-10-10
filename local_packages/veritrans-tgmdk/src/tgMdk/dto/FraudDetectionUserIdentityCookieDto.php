<?php

namespace tgMdk\dto;

/**
 * 不正検知Cookie情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionUserIdentityCookieDto
{

    /**
     * Cookie要素名<br>
     * 半角英数字<br/>
     * 最大桁数：4000<br/>
     * Cookie要素名<br/>
     */
    private $cookieName;

    /**
     * Cookie値<br>
     * 半角英数字<br/>
     * 最大桁数：4000<br/>
     * 値<br/>
     */
    private $cookieValue;


    /**
     * Cookie要素名を取得する<br>
     * @return string Cookie要素名<br>
     */
    public function getCookieName()
    {
        return $this->cookieName;
    }

    /**
     * Cookie要素名を設定する<br>
     * @param string $cookieName Cookie要素名<br>
     */
    public function setCookieName($cookieName)
    {
        $this->cookieName = $cookieName;
    }

    /**
     * Cookie値を取得する<br>
     * @return string Cookie値<br>
     */
    public function getCookieValue()
    {
        return $this->cookieValue;
    }

    /**
     * Cookie値を設定する<br>
     * @param string $cookieValue Cookie値<br>
     */
    public function setCookieValue($cookieValue)
    {
        $this->cookieValue = $cookieValue;
    }


}
