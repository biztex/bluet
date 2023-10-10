<!DOCTYPE>
 lang="ja">
<head>
<meta http-equiv="Content-Type" content="text; charset=UTF-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>CARTEL | お取引画面</title>
<meta name="keywords" content="キーワード">
<meta name="description" content="ディスクリプション">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700&family=RedHat+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="transaction">
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
										<p class="mypageUser RedHat">DEALER</p>
										<div class="mypageBanner mypageBanner02">
											<dl>
												<dt></dt>
												<dd><p>ショップ名</p></dd>
											</dl>
										</div>
									</div>
									<div class="mypageUl">
										<ul>
											<li><a href="mypage">お知らせ<span>2</span></a></li>
											<li><a href="edit_dealer">会員情報の変更</a></li>
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
								<h2 class="hdS"><span class="RedHat">TRANSACTION SCREEN</span>お取引画面</h2>
								<div class="purchaseArea">
									<div class="tabItem">
										<p class="purchaseTime RedHat">2021.4.5  19:00</p>
										<h2>車両名が入りますDealer-Serviced, One-Owner 2015 Mercedes-Benz</h2>
										<p class="tabFont RedHat">¥ 1,000,000</p>
										<dl>
											<dt><p><img src="img/detail/images_03.jpg" alt=""></p></dt>
											<dd>
												<p class="tabTxt">商品説明商テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ…</p>
												<p class="tabName pc"><span class="Private">Dealers</span></p>
												<div class="tabList">
													<p class="tabName sp">
														<span class="addInfo">商品説明商テキストテキストテキストテキストテキストテキストテキスト…</span>
														<span class="Private">Dealers</span>
													</p>
													<div class="tabBtn"><a href="cars_for_sale_dealers" class="tabLinks RedHat">プレビュー</a></div>
												</div>
											</dd>
										</dl>
									</div>
									<div class="purchaseItem">
										<div class="purchaseList purchaseLeft">
											<p class="purchase01">通常掲載</p>
											<dl>
												<dt>車両本体価格</dt>
												<dd><p class="RedHat">¥ 1,000,000</p></dd>
											</dl>
											<dl>
												<dt>手付金 10%（支払済）</dt>
												<dd><p class="RedHat">-¥ 100,000</p></dd>
											</dl>
											<dl class="purchase04">
												<dt><b>差し引き金額</b></dt>
												<dd><p class="RedHat purchase04">¥900,000</p></dd>
											</dl>
											<p class="transactionRed">※CARTEL.への手付金は既に購入者よりお支払い頂いています。</p>
											<p class="purchase02">あなたが購入者に請求する金額は<span class="RedHat">¥900,000</span>です。</p>
											<p class="purchase03">※諸経費がある場合は、取引メッセージで詳細をお伝えください。</p>
										</div>
										<div class="purchaseList">
											<div class="purchaseRight">
												<h3>注意事項</h3>
												<p>お手続き、お支払い、配送などに関しましては本ページの取引メッセージ機能を使用して購入者と直接やりとりをお願い致します。CARTEL.は購入・落札後のお取引には関与できません。</p>
											</div>
										</div>
									</div>
									<div class="purchaseSeller">
										<p class="sellerSub RedHat">BUYER INFO</p>
										<dl>
											<dt><p class="sellerImg02"></p></dt>
											<dd>
												<div class="sellerBox">
													<p class="mypageUser RedHat">PRIVATE USER or DEALER </p>
													<p class="seller011">ユーザー名 or ショップ名テキストテキストテキスト</p>
													<p class="seller0111">会社名テキスト</p>
													<p class="seller022">〒173-0033 東京都板橋区大山西町3-12 ○○ビル１F(住所、TEL、MOREボタンディーラーの場合のみ表示)</p>
													<p class="seller033"><a href="tel: 0570-031-261" class="RedHat">TEL: 0570-031-261</a></p>
													<p class="seller044"><a href="cars_for_sale_dealer_showroom" class="RedHat">MORE</a></p>
												</div>
											</dd>
										</dl>
									</div>
									<div class="purchaseSeller">
										<p class="sellerSub RedHat">TRANSACTION MESSAGE</p>
										<dl>
											<dt><p class="sellerImg"></p></dt>
											<dd>
												<div class="sellerBox">
													<p class="seller055">購入ユーザー名 or ショップ名</p>
													<div class="sellerList">
														<p class="seller066">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
														<p class="seller077 RedHat">2021.4.5  20:00</p>
													</div>
												</div>
											</dd>
										</dl>
										<dl>
											<dt><p class="sellerImg02"></p></dt>
											<dd>
												<div class="sellerBox">
													<p class="seller055">購入ユーザー名 or ショップ名</p>
													<div class="sellerList">
														<p class="seller066">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
														<p class="seller077 RedHat">2021.4.5  20:00</p>
													</div>
												</div>
											</dd>
										</dl>
										<dl>
											<dt><p class="sellerImg"></p></dt>
											<dd>
												<div class="sellerBox">
													<p class="seller055">購入ユーザー名 or ショップ名</p>
													<div class="sellerList">
														<p class="seller067">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
														<p class="seller077 RedHat">2021.4.5  20:00</p>
													</div>
												</div>
											</dd>
										</dl>
										<dl>
											<dt><p class="sellerImg02"></p></dt>
											<dd>
												<div class="sellerBox">
													<p class="seller055">購入ユーザー名 or ショップ名</p>
													<div class="sellerList">
														<p class="seller066">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
														<p class="seller077 RedHat">2021.4.5  20:00</p>
													</div>
												</div>
											</dd>
										</dl>
										<form action="#">
											<p class="seller088"><textarea placeholder="取引メッセージを入力してください"></textarea></p>
											<p class="sellerLink"><input type="submit" value="送信する"></p>
										</form>
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
	    				<li><a href="cars_for_sale_auction">AUCTIONS</a></li>
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
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.biggerlink.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
</body>
<>
