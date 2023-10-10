<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アクティビティ一覧 | ブルーツーリズム北海道 </title>
</head>
<body>
    <div class="header"><a href="list.php"><img src ="https://blue-tourism-hokkaido.website/img/logo.png"></a></div>
    <div class="flex-container-plans">
    <?php
    $url = "http://blue-tourism-hokkaido.website/api/plans/json/1";
    $json = file_get_contents($url);
    $plans = json_decode($json,true);

    for ($i = 0 ; $i < count($plans) ; $i++) {
        echo '<div class="flex-item-plans"><a href="https://blue-tourism-hokkaido.website/public/detail.php?page_id=2622&plan_id=' . $plans[$i][id] . '"><img src="https://blue-tourism-hokkaido.website/public/uploads/' . $plans[$i][file_path1] . '"><p>' . $plans[$i][name] . '</p></a></div>';
    }
    ?>
    </div>

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
    </style>

    <footer class="footer_wrap">
        <a href="company.php">会社概要</a>
        <a href="tradelaw.php">特定商取引法に基づく表記</a>
        <a href="privacy.php">プライバシーポリシー</a>
    </footer>
    <div class="copy">Copyright © BlueTourismHokkaido All rights reserved</div>
</body>
</html>