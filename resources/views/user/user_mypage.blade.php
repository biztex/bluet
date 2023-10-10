<!DOCTYPE>
 lang="ja">
<head>
<meta http-equiv="Content-Type" content="text; charset=UTF-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>CARTEL | お知らせ（マイページトップ）</title>
<meta name="keywords" content="キーワード">
<meta name="description" content="ディスクリプション">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700&family=RedHat+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="mypage">
<div id="wrapper">
	<header>
		<div id="header">
			<div id="headerIn">
				<h1 id="headerLogo"><a href="index" class="op"><img src="{{ asset('img/common/logo.svg') }}" alt="CARTEL"></a></h1>
				<div id="headerBoxs">
					<form action="cars_for_sale" method="post">
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
							<a href="register">会員登録</a>
							<a href="login">ログイン</a>
							<a href="mypage" class="bell"><img src="{{ asset('img/common/bell.svg') }}" alt=""></a>
						</div>
					</form>
				</div>
			</div><!-- /.headerIn -->
			<div class="btnMenu" data-target=".gNavi"></div> 
			<div class="navBg"></div>
			<nav class="gNavi pc">
				<ul class="RedHat">
					<li><a href="cars_for_sale">AUCTIONS</a></li>
					<li><a href="cars_for_sale">CARS FOR SALE</a></li>
					<li><a href="#">SELL YOUR CAR</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="explore">EXPLORE</a></li>
				</ul>
			</nav><!-- /#gNavi -->
			<nav class="gNavi sp">
				<form action="cars_for_sale" method="post">
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
							<p class="mypageBtn"><a href="register"><span>REGISTER or MY PAGE</span>新規会員登録 or マイページ</a><em class="mypageBtnDetail"></em></p>
							<div class="mypageBox">
								<div class="mypageItem">
									<p class="mypageLink"><a href="mypage"><em class="bell">お知らせ</em></a></p>
									<p class="mypageLink"><a href="edit_private_user">会員情報の変更</a></p>
									<p class="mypageLink"><a href="favorities">お気に入り</a></p>
									<p class="mypageLink"><a href="pay">お支払い方法</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Buy</p>
									<p class="mypageLink"><a href="bidding_history">入札車両一覧</a></p>
									<p class="mypageLink"><a href="purchase_history">購入車両一覧</a></p>
									<p class="mypageLink"><a href="purchase_inquiry_history">お問い合わせ履歴</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Listing</p>
									<p class="mypageLink"><a href="plans">ご契約プラン</a></p>
									<p class="mypageLink"><a href="create_vehicle_listings">車両掲載</a></p>
									<p class="mypageLink"><a href="inventory">掲載車両一覧</a></p>
									<p class="mypageLink"><a href="inquiry_history">お問い合わせ履歴</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Guide</p>
									<p class="mypageLink"><a href="cars_for_sale_faq">よくある質問</a></p>
								</div>
								<div class="mypageItem">
									<p class="mypageInfo">Support</p>
									<p class="mypageLink"><a href="explore#exploreItem">お問い合わせ</a></p>
								</div>
							</div>
						</div>
						<p><a href="login"><span>LOG IN or LOG OUT</span>ログイン or ログアウト</a></p>
					</li>
					<li>
						<h2><a href="#">CONTENTES</a></h2>
						<p><a href="cars_for_sale_auction"><span>AUCTIONS</span>オークション</a></p>
						<p><a href="cars_for_sale"><span>CARS FOR SALE</span>厳選中古車情報</a></p>
						<p><a href=""><span>SELL YOUR CAR</span>車を売りたい方へ</a></p>
						<p><a href=""><span>SERVICES</span>サービス</a></p>
						<p><a href="explore"><span>EXPLORE</span>運営会社情報</a></p>
					</li>
					<li>
						<h2><a href="#">OTHER</a></h2>
						<p><a href="cars_for_sale_news"><span>NEWS</span>お知らせ</a></p>
					</li>
				</ul>
				<div class="headLinks"><a href="index#loginWrap"><input type="button" value="メルマガ登録"></a></div>
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
											<li><a href="mypage">お知らせ<span>2</span></a></li>
											<li><a href="edit_private_user">会員情報の変更</a></li>
											<li><a href="favorities">お気に入り</a></li>
											<li><a href="pay">お支払い方法</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Buy</span>購入</p>
										<ul>
											<li><a href="bidding_history">入札車両一覧</a></li>
											<li><a href="purchase_history">購入車両一覧</a></li>
											<li><a href="purchase_inquiry_history">お問い合わせ履歴</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Listing</span>掲載</p>
										<ul>
											<li><a href="plans">ご契約プラン</a></li>
											<li><a href="create_vehicle_listings">車両掲載</a></li>
											<li><a href="inventory">掲載車両一覧</a></li>
											<li><a href="inquiry_history">お問い合わせ履歴</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Guide</span>ガイド</p>
										<ul>
											<li><a href="cars_for_sale_faq">よくある質問</a></li>
										</ul>
									</div>
									<div class="mypageUl">
										<p class="mypageTxt"><span>Support</span>サポート</p>
										<ul>
											<li><a href="explore#exploreItem">お問い合わせ</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="mypageRight">
								<h2 class="hdS"><span class="RedHat">INFORMATION</span>お知らせ</h2>
								<div class="mypageTion">
									<div class="mypageTop">
										<p class="mypageTop01"><span>200</span>件</p>
										<p class="mypageTop02"><a href="#">全て既読にする</a></p>
									</div>
									<div class="mypageMiddle">
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="new RedHat">NEW</span><span class="RedHat">2021.4.5  20:00</span></p>
												<p class="mypageMiddle02"><a href="">〇〇〇〇〇〇さんからお問い合わせがありました。</a></p>
												<p class="mypageMiddleBtn"><a href="">既読にする</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span></p>
												<p class="mypageMiddle02"><a href="">〇〇〇〇〇〇さんからのお問い合わせが終了しました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">〇〇〇〇〇〇さんが○○○○○○○○を購入しました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">車両名〇〇〇〇〇〇〇〇〇〇〇〇に初めての入札がありました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">車両名〇〇〇〇〇〇〇〇〇〇〇〇が落札されました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">車両名〇〇〇〇〇〇〇〇〇〇〇〇オークションが終了しました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">〇〇〇〇〇〇さんから取引メッセージが届きました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio02.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">運営からのお知らせ<br>お知らせメッセージタイトルテキストテキストテキストテキスト</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">〇〇〇〇〇〇さんからお問い合わせがありました。</a></p>
											</dd>
										</dl>
										<dl>
											<dt><img src="img/mypage/cabrio.jpg" alt=""></dt>
											<dd>
												<p class="mypageMiddle01"><span class="RedHat">2021.4.5  20:00</span><span class="text02">ユーザー名 or ショップ名</span></p>
												<p class="mypageMiddle02"><a href="">〇〇〇〇〇〇さんが○○○○○○○○を購入しました。</a></p>
											</dd>
										</dl>
									</div>
									<div class="mypageNumber">
										<p class="active">1</p>
										<p><a href="">2</a></p>
										<p><a href="">3</a></p>
										<p>…</p>
										<p><a href="">30</a></p>
										<p><a href="">NEXT</a></p>
									</div>
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
	    			<h2><a href="index" class="op"><img src="{{ asset('img/common/footer_font.svg') }}" alt=""></a></h2>
	    			<ul class="RedHat">
	    				<li><a href="cars_for_sale">AUCTIONS</a></li>
	    				<li><a href="cars_for_sale">CARS FOR SALE</a></li>
	    				<li><a href="">SELL YOUR CAR</a></li>
	    				<li><a href="">SERVICES</a></li>
	    				<li><a href="explore">EXPLORE</a></li>
	    			</ul>
	    			<div class="linksBox">
	    				<a href="" target="_blank"><img src="{{ asset('img/common/icon_facebook.svg') }}" alt=""></a>
	    				<a href="" target="_blank"><img src="{{ asset('img/common/icon_twitter.svg') }}" alt=""></a>
	    				<a href="" target="_blank"><img src="{{ asset('img/common/icon_instagram.svg') }}" alt=""></a>
	    				<a href="" target="_blank"><img src="{{ asset('img/common/icon_youtube.svg') }}" alt=""></a>
	    				<a href="" target="_blank"><img src="{{ asset('img/common/icon_line.svg') }}" alt=""></a>
	    			</div>
	    		</div>
	    	</div>
			<p id="copyright" class="RedHat">© 2021 CARTEL.</p>
        </div><!-- /#footer -->
	</footer>
</div><!-- /#wrapper -->
<script type="text/javascript" src="{{ ('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/jquery.matchHeight-min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/jquery.biggerlink.min.js' ) }}"></script>
<script type="text/javascript" src="{{ ('js/slick.js') }}"></script>
<script type="text/javascript" src="{{ ('js/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ ('js/common.js') }}"></script>
 <script>
$(function () {            
    $(".button").click(function () {
        $(this).toggleClass('cs');                
    })
})
</script>
</body>
<>
