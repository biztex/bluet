<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会社概要 | ブルーツーリズム北海道 </title>

    <style type="text/css">
    .header {
        margin: 0 61px;
        padding: 8px 0 10px 0;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }
    .header img {
        width: 200px;
    }
    .flex-container-plans {
        justify-content: center;
        flex-wrap: wrap;
        display: flex;
        margin:  20px 0 0 0;
    }
    .flex-item-plans {
        width: 320px;
        height: 260px;
        margin: 20px;
        background-color: #000;
        color: #fff;
        border-radius: 15px;
        position: relative;
    }
    .flex-item-plans  a {
        position: absolute;
        top: 0;
        left: 0;
        height:100%;
        width: 100%;
        color:  white;
    }
    .flex-item-plans  a:hover,
    .flex-item-plans  a:link {
        color:  white;
    }
    .flex-item-plans img {
        top: 20px;
        height: 100%;
            max-width: 320px; 
        border-radius: 15px;
        opacity: 0.7;
    }
    .flex-item-plans p {
        text-align: center;
        position: absolute;
        top: 42%;
        left: 50%;
        width: 90%;
        transform: translate(-50%, -50%);
        font-size: 22px;
        font-weight: bold;
    }
    body {
            font-family: "Hiragino Kaku Gothic ProN","メイリオ", sans-serif;
        }
    @media screen and (max-width: 767px) {
        .header {
            text-align: center;
            margin: 0px;
        }
        .flex-item-plans {
            width: 100%;
            height: 200px;
        }
        .flex-item-plans a {
            overflow: hidden;
        }
        .flex-item-plans img {
            top: 0px;
            height: auto;
            max-width: 100%;
        }
        .flex-item-plans p {
            font-size:18px;
        }
    }

    /*footer2022-02-16*/
    .footer_wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 60px;
    }
    .footer_wrap a {
        margin-right:30px;
    }
    .footer_wrap a:nth-last-child(1) {
        margin-right:0px;
    }
    .copy {
        text-align:center;
        margin-top:15px;
    }
    @media screen and (max-width: 767px) {
        .footer_wrap {
        flex-direction:column;
    }
    }

    /*company2022-02-16*/
    .company_wrap tr th {
        width: 25%;
        padding: 5px 5px 5px 20px;
        background: #cccccc;
    }
    .company_wrap tr td {
        width: 75%;
        padding: 5px;
    }
    .company_wrap table {
        margin: 60px auto;
    }
    </style>
</head>
<body>
    <div class="header">
        <a href="list.php"><img src ="https://blue-tourism-hokkaido.website/img/logo.png"></a>
    </div>

    <div class="company_wrap">
        <table>
            <tbody>
                <tr>
                    <th>会社名</th>
                    <td>株式会社　ブルーツーリズム北海道</td>
                </tr>
                <tr>
                    <th>本社所在地</th>
                    <td>〒066-0013　北海道千歳市柏台1390番地-218</td>
                </tr>
                <tr>
                    <th>営業所所在地</th>
                    <td>〒060-0052　北海道札幌市中央区南2条東1丁目1-13南2条ビル7階<br>
                TEL 011-252-2333　FAX 011-211-4884</td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td>平成25年4月24日</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>800万円</td>
                </tr>
                <tr>
                    <th>代表者</th>
                    <td>浦口 宏之　納谷 達也</td>
                </tr>
                <tr>
                    <th>取締役</th>
                    <td>3名</td>
                </tr>
                <tr>
                    <th>従業員</th>
                    <td>9名</td>
                </tr>
                <tr>
                    <th>旅行登録番号</th>
                    <td>北海道知事登録旅行業第2-644号　ANTA全国旅行業協会会員</td>
                </tr>
                <tr>
                    <th>総合旅行業務取扱管理者</th>
                    <td>浦口　宏之<br>
                （北海道観光マスター・札幌シティガイド・旅客自動車運送事業運行管理者・インバウンド実務主任者）</td>
                </tr>
                <tr>
                    <th>その他の事業</th>
                    <td>観光ガイド業、遊漁船斡旋、水産加工品の販売、レジャー用品の販売とレンタル、海鮮料理店 札幌二条市場小熊商店 の経営</td>
                </tr>
                <tr>
                    <th>関連会社</th>
                    <td>有限会社ウイングサービス</td>
                </tr>
                <tr>
                    <th>主要取引銀行</th>
                    <td>北洋銀行・北門信用金庫</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="footer_wrap">
        <a href="company.php">会社概要</a>
        <a href="tradelaw.php">特定商取引法に基づく表記</a>
        <a href="privacy.php">プライバシーポリシー</a>
    </footer>
    <div class="copy">Copyright © BlueTourismHokkaido All rights reserved</div>
</body>
</html>