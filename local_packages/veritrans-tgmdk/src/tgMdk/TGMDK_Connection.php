<?php

namespace tgMdk;

/**
 *
 * SSL通信管理クラス。
 * Servlet通信を行う。
 *
 * SSL通信に関わる処理を取りまとめる。Proxyを経由した通信にも対応
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author  VeriTrans Inc.
 */
class TGMDK_Connection
{

    /**
     * 接続メソッド。<br>
     * 処理を分岐して、Servletにて接続を行う。
     * @param string $param 送信するパラメータ
     * @param string $url GWのURL
     * @return string 処理結果
     * @throws TGMDK_Exception
     */
    public function execute(string $param, string $url)
    {
        $connection = new TGMDK_ConnectionServlet();
        return $connection->execute($param, $url);
    }
}
