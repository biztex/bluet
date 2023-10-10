<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>CARTEL | 会員情報の変更　PRIVATE USER</title>
<meta name="keywords" content="キーワード">
<meta name="description" content="ディスクリプション">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<link rel="stylesheet" type="text/css" href="style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/slick.css" media="all">
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700&family=RedHat+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="change">
<div id="wrapper">
	<header>
		<div id="header">
			<div id="headerIn">
				<h1 id="headerLogo"><a href="index.html" class="op"><img src="img/common/logo.svg" alt="CARTEL"></a></h1>
				<div id="headerBoxs">
					<form action="cars_for_sale.html" method="post">
						<div class="headerSelect">
							<span>
								<select name="" id="">
									<option value="">CATEGORY</option>
								</select>
							</span>
						</div>
						<div class="headerSubmit">
							<p><input type="text" placeholder="キーワードで検索"><input type="submit"></p>
						</div>
						<div class="headerBtn">
							<a href="register.html">会員登録</a>
							<a href="login.html">ログイン</a>
							<a href="mypage.html" class="bell"><img src="img/common/bell.svg" alt=""></a>
						</div>
					</form>
				</div>
			</div><!-- /.headerIn -->
			<div class="btnMenu" data-target=".gNavi"></div> 
			<div class="navBg"></div>
			<nav class="gNavi pc">
				<ul class="RedHat">
					<li><a href="cars_for_sale.html">AUCTIONS</a></li>
					<li><a href="cars_for_sale.html">CARS FOR SALE</a></li>
					<li><a href="#">SELL YOUR CAR</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="explore.html">EXPLORE</a></li>
				</ul>
			</nav><!-- /#gNavi -->
			<nav class="gNavi sp">
				<form action="cars_for_sale.html" method="post">
					<div class="headerSelect">
						<p class="private RedHat">PRIVATE USER</p>
						<div class="bannerBox">
							<dl>
								<dt></dt>
								<dd><p>ユーザー名 or 会社名</p></dd>
							</dl>
						</div>
						<span>
							<select name="" id="">
								<option value="">CATEGORY</option>
							</select>
						</span>
					</div>
					<div class="headerSubmit">
						<p><input type="text" placeholder="キーワードで検索"><input type="submit"></p>
					</div>
				</form>
				<ul class="RedHat">
					<li>
						<h2><a href="#">USER</a></h2>
						<div class="mypageWrap" id="mypageWrap">
							<p class="mypageBtn"><a href="register.html"><span>REGISTER or MY PAGE</span>新規会員登録 or マイページ</a><em class="mypageBtnDetail"></em></p>
							<div class="mypageBox">
								<div class="mypageItem">
									<p class="mypageLink"><a href="mypage.html"><em class="bell">お知らせ</em></a></p>
									<p class="mypageLink"><a href="edit_private_user.html">会員情報の変更</a></p>
									<p class="mypageLink"><a href="favorities.html">お気に入り</a></p>
									<p class="mypageLink"><a href="pay.html">お支払い方法</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Buy</p>
									<p class="mypageLink"><a href="bidding_history.html">入札車両一覧</a></p>
									<p class="mypageLink"><a href="purchase_history.html">購入車両一覧</a></p>
									<p class="mypageLink"><a href="purchase_inquiry_history.html">お問い合わせ履歴</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Listing</p>
									<p class="mypageLink"><a href="plans.html">ご契約プラン</a></p>
									<p class="mypageLink"><a href="create_vehicle_listings.html">車両掲載</a></p>
									<p class="mypageLink"><a href="inventory.html">掲載車両一覧</a></p>
									<p class="mypageLink"><a href="inquiry_history.html">お問い合わせ履歴</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Guide</p>
									<p class="mypageLink"><a href="cars_for_sale_faq.html">よくある質問</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Support</p>
									<p class="mypageLink"><a href="explore.html#exploreItem">お問い合わせ</a></p>
								</div>
							</div>
						</div>
						<p><a href="login.html"><span>LOG IN or LOG OUT</span>ログイン or ログアウト</a></p>
					</li>
					<li>
						<h2><a href="#">CONTENTES</a></h2>
						<p><a href="cars_for_sale_auction.html"><span>AUCTIONS</span>オークション</a></p>
						<p><a href="cars_for_sale.html"><span>CARS FOR SALE</span>厳選中古車情報</a></p>
						<p><a href=""><span>SELL YOUR CAR</span>車を売りたい方へ</a></p>
						<p><a href=""><span>SERVICES</span>サービス</a></p>
						<p><a href="explore.html"><span>EXPLORE</span>運営会社情報</a></p>
					</li>
					<li>
						<h2><a href="#">OTHER</a></h2>
						<p><a href="cars_for_sale_news.html"><span>NEWS</span>お知らせ</a></p>
					</li>
				</ul>
				<div class="headLinks"><a href="index.html#loginWrap"><input type="button" value="メルマガ登録"></a></div>
			</nav>
		</div><!-- /#header -->
	</header>
	<article>
		<div id="contents">
			<div id="main">
				<section class="mypageWraps">
					<div class="inner">
						<div class="mypageArea clearfix">
							<div class="mypageLeft">
								<div class="mypageBox">
									<div class="mypageBoxUnder">
										<p class="mypageUser RedHat">PRIVATE USER</p>
										<div class="mypageBanner">
											<dl>
												<dt></dt>
												<dd><p>ユーザー名</p></dd>
											</dl>
										</div>
									</div>
									<div class="mypageUl">
										<ul>
											<li><a href="mypage.html">お知らせ<span>2</span></a></li>
											<li><a href="edit_private_user.html">会員情報の変更</a></li>
											<li><a href="favorities.html">お気に入り</a></li>
											<li><a href="pay.html">お支払い方法</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Buy</span>購入</p>
										<ul>
											<li><a href="bidding_history.html">入札車両一覧</a></li>
											<li><a href="purchase_history.html">購入車両一覧</a></li>
											<li><a href="purchase_inquiry_history.html">お問い合わせ履歴</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Listing</span>掲載</p>
										<ul>
											<li><a href="plans.html">ご契約プラン</a></li>
											<li><a href="create_vehicle_listings.html">車両掲載</a></li>
											<li><a href="inventory.html">掲載車両一覧</a></li>
											<li><a href="inquiry_history.html">お問い合わせ履歴</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Guide</span>ガイド</p>
										<ul>
											<li><a href="cars_for_sale_faq.html">よくある質問</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Support</span>サポート</p>
										<ul>
											<li><a href="explore.html#exploreItem.html">お問い合わせ</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="mypageRight">
								<p class="mypageUser RedHat">PRIVATE USER</p>
								<h2 class="hdS"><span class="RedHat">EDIT PROFILE</span>会員情報の変更</h2>
								<div class="changeTion">
									<div class="privateUserArea">
										<form action="#">
											<p class="privateUserSub">基本情報</p>
											<table>
												<tbody>
													<tr>
														<th><p>メールアドレス<span>必須</span></p></th>
														<td><p><input type="email" placeholder="sample@example.com" value="sample@example.com"></p></td>
													</tr>
													<tr>
														<th><p>パスワード<span>必須</span></p></th>
														<td><p class="eight"><input type="password" placeholder="********"></p></td>
													</tr>
													<tr>
														<th><p>パスワード(確認)<span>必須</span></p></th>
														<td><p class="eight"><input type="password" placeholder="********"></p></td>
													</tr>
													<tr>
														<th><p>ユーザー名<span>必須</span></p></th>
														<td><p><input type="text" placeholder="ユーザー名" value="ユーザー名"></p></td>
													</tr>
													<tr>
														<th><p>ユーザーアイコン</p></th>
														<td>
															<p>
																<label class="fileBox" for="fileinp">
																	<input type="button" id="btn" value="ファイルを選択"><span id="text">usericon.jpg</span>
																	<input type="file" id="fileinp" accept='image/*' onchange="previewImage(this);">
																</label>
															</p>
															<p class="change01"><img id="preview" src="img/change/images01.jpg" style="max-width:60px;"></p>
														</td>
													</tr>
													<tr>
														<th><p>氏名<span>必須</span></p></th>
														<td>
															<p class="name">
																<span><input type="text" placeholder="山田" value="山田"><em>※非公開項目です</em></span>
																<span><input type="text" placeholder="太郎" value="太郎"></span>
															</p>
														</td>
													</tr>
													<tr>
														<th><p>電話番号<span>必須</span></p></th>
														<td><p><input type="tel" placeholder="000-0000-00000" value="000-0000-00000"></p></td>
													</tr>
													<tr>
														<th><p>郵便番号<span>必須</span></p></th>
														<td>
															<p class="number">
																<span><input type="text" placeholder="000" value="000"></span><em>-</em><span><input type="text" placeholder="0000" value="0000"></span>
															</p>
														</td>
													</tr>
													<tr>
														<th><p>住所<span>必須</span></p></th>
														<td class="select">
															<p><select><option value="">東京都</option></select></p>
															<p><input type="text" placeholder="市区町村名" value="市区町村名"></p>
															<p><input type="text" placeholder="番地・ビル名" value="番地・ビル名"></p>
														</td>
													</tr>
													<tr>
														<th><p>古物商許可証番号</p></th>
														<td><p><input type="text" placeholder="第999999999999号" value="第999999999999号"></p></td>
													</tr>
													<tr>
														<th><p>免許証番号<span>必須</span></p></th>
														<td><p><input type="text" placeholder="第〇〇〇〇〇〇〇〇〇〇〇〇号" value="第〇〇〇〇〇〇〇〇〇〇〇〇号"></p></td>
													</tr>
													<tr>
														<th><p>メールマガジン</p></th>
														<td>
															<p class="checkbox01"><label for="01"><input type="checkbox" name="01" id="01">購読する</label></p>
														</td>
													</tr>
												</tbody>
											</table>
											<p class="privateUserBtn"><input type="submit" value="変更する"></p>
										</form>
									</div>
									<p class="outForm"><a href="#">退会リクエストを送信する</a></p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div><!-- /#main -->
		</div><!-- /#contents -->
	</article>
	<footer>
    	<div id="footer">
    		<div class="footerIn">
	    		<div class="inner">
	    			<h2><a href="index.html" class="op"><img src="img/common/footer_font.svg" alt=""></a></h2>
	    			<ul class="RedHat">
	    				<li><a href="cars_for_sale.html">AUCTIONS</a></li>
	    				<li><a href="cars_for_sale.html">CARS FOR SALE</a></li>
	    				<li><a href="">SELL YOUR CAR</a></li>
	    				<li><a href="">SERVICES</a></li>
	    				<li><a href="explore.html">EXPLORE</a></li>
	    			</ul>
	    			<div class="linksBox">
	    				<a href="" target="_blank"><img src="img/common/icon_facebook.svg" alt=""></a>
	    				<a href="" target="_blank"><img src="img/common/icon_twitter.svg" alt=""></a>
	    				<a href="" target="_blank"><img src="img/common/icon_instagram.svg" alt=""></a>
	    				<a href="" target="_blank"><img src="img/common/icon_youtube.svg" alt=""></a>
	    				<a href="" target="_blank"><img src="img/common/icon_line.svg" alt=""></a>
	    			</div>
	    		</div>
	    	</div>
			<p id="copyright" class="RedHat">© 2021 CARTEL.</p>
        </div><!-- /#footer -->
	</footer>
</div><!-- /#wrapper -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="js/jquery.biggerlink.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script>
function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
}
$("#fileinp").change(function () {
    $("#text").html($("#fileinp").val());
})
</script>
</body>
</html>
