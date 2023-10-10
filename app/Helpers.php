<?php


namespace App;


class Helpers
{
    /**
     * @return string 時刻から取引IDを自動生成する関数
     */
    public static function generateOrderId(): string
    {
        return "dummy" . time() . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
    }

    /**
     * @param string | null $jpo1 10,21,61,80
     * @param string | null $jpo2 分割回数
     * @return string | null DTOにセットするjpo(支払種別)を作成する関数
     */
    public static function generateJpo(?string $jpo1, ?string $jpo2): ?string
    {
        if (empty($jpo1)) return null;

        if (in_array($jpo1, array("10", "21", "80"))) {
            return $jpo1;
        }

        if ($jpo1 == "61" && !empty($jpo2)) {
            return "61C" . $jpo2;
        }

        return null;
    }

}
