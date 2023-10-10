<?php

namespace tgMdk\dto;

/**
 * 不正検知デバイスDtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionDeviceDto
{

    /**
     * IPアドレス<br>
     * IPアドレスに使用可能な半角英数字<br/>
     * 最大桁数：40<br/>
     * IPv4・IPv6 を文字列で設定してください。<br/>
     * IPv4については半角数字（0～9）および、"."（ドット）を使用できます。<br/>
     * IPv6については16進数の半角英数字（0～9、A～F）および、":"（コロン）を使用できます。<br/>
     */
    private $ip;

    /**
     * HTTPヘッダ情報<br>
     * FraudDetectionHeaderDtoの配列<br/>
     * 貴社サーバとエンドユーザ間での、HTTP通信時のHTTPヘッダ情報を任意の要素名にて設定してください。<br/>
     * 貴社 Web サイトとエンドユーザの PC・Android/iOS端末間のHTTP通信時のすべての「HTTPヘッダフィールド」値を、各要素名・値で設定してください。<br/>
     */
    private $headers;

    /**
     * Cookie情報<br>
     * FraudDetectionUserIdentityCookieDtoの配列<br/>
     * 貴社サーバとエンドユーザ間での、HTTP通信時の cookie 情報を任意の要素名にて設定してください。<br/>
     * 貴社 Web サイトとエンドユーザの PC・Android/iOS 端末間の HTTP 通信時の「cookie 情報」値を、各要素名・値で設定してください。<br/>
     */
    private $userIdentityCookies;

    /**
     * ユーザ生成データ<br>
     * 半角英数字<br/>
     * 最大桁数：4000<br/>
     * エンドユーザのPC・Android/iOS端末上で生成されたデータを、そのまま設定してください。<br/>
     * いかなる場合も、データを改変、エンコード・デコードしないでください。<br/>
     */
    private $devicePrint;


    /**
     * IPアドレスを取得する<br>
     * @return string IPアドレス<br>
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * IPアドレスを設定する<br>
     * @param string $ip IPアドレス<br>
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * HTTPヘッダ情報を取得する<br>
     * @return FraudDetectionHeaderDto[] HTTPヘッダ情報<br>
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * HTTPヘッダ情報を設定する<br>
     * @param FraudDetectionHeaderDto[] $headers HTTPヘッダ情報<br>
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * Cookie情報を取得する<br>
     * @return FraudDetectionUserIdentityCookieDto[] Cookie情報<br>
     */
    public function getUserIdentityCookies()
    {
        return $this->userIdentityCookies;
    }

    /**
     * Cookie情報を設定する<br>
     * @param FraudDetectionUserIdentityCookieDto[] $userIdentityCookies Cookie情報<br>
     */
    public function setUserIdentityCookies($userIdentityCookies)
    {
        $this->userIdentityCookies = $userIdentityCookies;
    }

    /**
     * ユーザ生成データを取得する<br>
     * @return string ユーザ生成データ<br>
     */
    public function getDevicePrint()
    {
        return $this->devicePrint;
    }

    /**
     * ユーザ生成データを設定する<br>
     * @param string $devicePrint ユーザ生成データ<br>
     */
    public function setDevicePrint($devicePrint)
    {
        $this->devicePrint = $devicePrint;
    }


}
