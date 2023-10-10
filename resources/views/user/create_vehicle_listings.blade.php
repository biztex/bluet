
<!DOCTYPE>
 lang="ja">
<head>
<meta http-equiv="Content-Type" content="text; charset=UTF-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>CARTEL | 車両掲載</title>
<meta name="keywords" content="キーワード">
<meta name="description" content="ディスクリプション">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui-1.9.2.custom.min.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.multiselect.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/prettify.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700&family=RedHat+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="create_vehicle_listings">
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
				<section class="privateUserWrap">
					<div class="inner inner_s">
						<h2 class="hdS"><span class="RedHat">CREATE VEHICLE LISTINGS</span>車両掲載</h2>
						<div class="privateUserArea">
							<form action="#">
								<table>
									<tbody>
										<tr>
											<th><p>掲載種別</p></th>
											<td><p class="vehicleInfo">通常掲載<span>※オークション出品は、一度通常掲載で保存した後に掲載種別を変更してください。</span></p></td>
										</tr>
										<tr>
											<th><p>車両画像<span>1枚必須</span><span class="nomore">(最大50枚)</span></p></th>
											<td>
												<ul class="fileUpLoadList">
												</ul>
												<p class="fileUpLoad"><span>画像をドラッグ&ドロップまたは</span><button class="fileUpLoadBtn" id="fileUpLoad">ファイルを選択</button><input type="file" accept='image/*' onchange="previewImage(this);"></p>
											</td>
										</tr>
										<tr>
											<th><p>車両名</p></th>
											<td><p class="fz14">「年式」＋「メーカー」＋「モデル」＋「フリーコメント」が表示されます。</p></td>
										</tr>
									</tbody>
								</table>
								<div class="tionTable">
									<table>
										<tbody>
											<tr>
												<th><p>年式<span>必須</span></p></th>
												<td><p class="valueBox"><input type="text"><span class="valueTxt">年</span></p></td>
											</tr>
											<tr>
												<th><p>メーカー<span>必須</span></p></th>
												<td class="select">
													<p>
														<select>
															<option value="">選択してください</option>
															<option value="">選択肢１</option>
															<option value="">選択肢２</option>
															<option value="">選択肢３</option>
														</select>
													</p>
													<a href="explore#exploreItem">管理者にメーカー追加を依頼する</a>
												</td>
											</tr>
											<tr>
												<th><p>モデル<span>必須</span></p></th>
												<td class="select">
													<p>
														<select>
															<option value="">選択してください</option>
															<option value="">選択肢１</option>
															<option value="">選択肢２</option>
															<option value="">選択肢３</option>
														</select>
													</p>
													<a href="explore#exploreItem">管理者にモデル追加を依頼する</a>
												</td>
											</tr>
											<tr>
												<th><p>フリーコメント</p></th>
												<td><p><input type="text" placeholder="フリーコメント（30文字まで）"></p></td>
											</tr>
										</tbody>
									</table>
								</div>
								<table>
									<tbody>
										<tr>
											<th><p>車両本体価格<span>必須</span></p></th>
											<td><div class="vehicleBox"><p class="eight"><span class="moey">¥</span><input type="text"></p></div></td>
										</tr>
										<tr>
											<th><p>参考諸経費<span>必須</span></p></th>
											<td>
												<p class="checkbox01">
													<label for="01" class="vehicleRadio"><input type="radio" name="radio01" id="01" checked>なし</label>
													<label for="02" class="vehicleRadio"><input type="radio" name="radio01" id="02">あり</label>
												</p>
												<p class="vehicleMess">内訳</p>
												<div class="vehicleBox">
													<ul>
														<li>金額</li>
														<li class="checkbox01">
															<label for="03" class="vehicleRadio"><input type="radio" name="radio02" id="03" checked>なし</label>
															<label for="04" class="vehicleRadio"><input type="radio" name="radio02" id="04">あり</label>
															<label for="05" class="vehicleRadio"><input type="radio" name="radio02" id="05">金額</label>
														</li>
														<li><p class="eight"><span class="moey">¥</span><input type="text"></p></li>
													</ul>
													<ul>
														<li>法定費用</li>
														<li class="checkbox01">
															<label for="13" class="vehicleRadio"><input type="radio" name="radio12" id="13" checked>なし</label>
															<label for="14" class="vehicleRadio"><input type="radio" name="radio12" id="14">あり</label>
															<label for="15" class="vehicleRadio"><input type="radio" name="radio12" id="15">金額</label>
														</li>
														<li><p class="eight"><span class="moey">¥</span><input type="text"></p></li>
													</ul>
													<ul>
														<li>リサイクル預託金</li>
														<li class="checkbox01">
															<label for="23" class="vehicleRadio"><input type="radio" name="radio22" id="23" checked>なし</label>
															<label for="24" class="vehicleRadio"><input type="radio" name="radio22" id="24">あり</label>
															<label for="25" class="vehicleRadio"><input type="radio" name="radio22" id="25">金額</label>
														</li>
														<li><p class="eight"><span class="moey">¥</span><input type="text"></p></li>
													</ul>
													<ul>
														<li>その他</li>
														<li class="checkbox01">
															<label for="33" class="vehicleRadio"><input type="radio" name="radio32" id="33" checked>なし</label>
															<label for="34" class="vehicleRadio"><input type="radio" name="radio32" id="34">あり</label>
															<label for="35" class="vehicleRadio"><input type="radio" name="radio32" id="35">金額</label>
														</li>
														<li><p class="eight"><span class="moey">¥</span><input type="text"></p></li>
													</ul>
													<p class="vehicleRadiTxt">コメント</p>
													<p class="vehicleRadiTextarea"><textarea></textarea></p>
													<p class="vehicleRadiTxt">注意事項</p>
													<p class="vehicleRadiBors"><textarea wrap="hard">※諸経費については概算です。&#13;※詳細は出品者にお問い合わせください。&#13;※諸経費は落札金額とは別に必要になりますのでご注意ください。</textarea>
													</p>
												</div>
											</td>
										</tr>
										<tr>
											<th><p>型式<span>必須</span></p></th>
											<td><p><input type="text" placeholder="E-964AK"></p></td>
										</tr>
										<tr>
											<th><p>車台番号<span>必須</span></p></th>
											<td><p><input type="text" placeholder="XXXX2938"></p></td>
										</tr>
										<tr>
											<th><p>エンジン番号<span>必須</span></p></th>
											<td><p><input type="text" placeholder="FFFF7243"></p></td>
										</tr>
										<tr>
											<th><p>排気量<span>必須</span></p></th>
											<td><p><input type="text" placeholder="2,200cc"></p></td>
										</tr>
										<tr>
											<th><p>ミッション<span>必須</span></p></th>
											<td class="select">
												<p>
													<select>
														<option value="">選択してください</option>
														<option value="">3速MT</option>
														<option value="">4速MT</option>
														<option value="">5速MT</option>
														<option value="">6速MT</option>
														<option value="">AT/CVT</option>
														<option value="">その他</option>
													</select>
												</p>
											</td>
										</tr>
										<tr>
											<th><p>走行距離<span>必須</span></p></th>
											<td>
												<p class="valueBox">
													<input type="text"><span class="valueTxt">km</span>
												</p>
												<div class="dataChange">
													<p class="dataChangeTitle">メーター交換</p>
													<p class="checkbox01">
														<label for="10_01" class="vehicleRadio"><input type="radio" name="radio10" id="10_01" checked>なし</label>
														<label for="10_02" class="vehicleRadio"><input type="radio" name="radio10" id="10_02">あり</label>
													</p>
													<p><input type="text" placeholder="交換前93,200km"></p>
												</div>
											</td>
										</tr>
										<tr>
											<th><p>外装色<span>必須</span></p></th>
											<td><p><input type="text" placeholder="シャンパンゴールド（全塗装2019年）"></p></td>
										</tr>
										<tr>
											<th><p>内装色<span>必須</span></p></th>
											<td><p><input type="text" placeholder="ベージュ"></p></td>
										</tr>
										<tr>
											<th><p>オプション<span>必須</span></p></th>
											<td><p><input type="text" placeholder="フリー入力"></p></td>
										</tr>
										<tr>
											<th><p>車検有無/記録簿<span>必須</span></p></th>
											<td><p><input type="text" placeholder="2022年11月/整備記録多数あり"></p></td>
										</tr>
										<tr>
											<th><p>コンディション<span>必須</span></p></th>
											<td class="select">
												<p>
													<select>
														<option value="">選択してください</option>
														<option value="">Excellent</option>
														<option value="">Very Good</option>
														<option value="">Good</option>
														<option value="">Fair</option>
														<option value="">Poor</option>
													</select>
												</p>
												<div class="fancyboxWrap">
													<p class="conditionBtn"><a href="#group_cond" rel="group01" class="fancybox">コンディション（状態）について</a></p>
												    <div class="hide">
												        <div id="group_cond">
												        	<p class="condSub"><span class="RedHat">ABOUT CONDITION</span>コンディション（状態）について</p>
												        	<div class="condBox">
												        		<div class="condInfo">
												        			<p class="condInfo_under">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<span>Excellent</span>
												        			</p>
												        			<p>新車同様で非常に良い状態。</p>
												        		</div>
												        		<div class="condInfo">
												        			<p class="condInfo_under">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
												        				<span>Very Good</span>
												        			</p>
												        			<p>使用感が少なく良い状態。</p>
												        		</div>
												        		<div class="condInfo">
												        			<p class="condInfo_under">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
												        				<span>Good</span>
												        			</p>
												        			<p>やや使用感があるが良い状態。</p>
												        		</div>
												        		<div class="condInfo">
												        			<p class="condInfo_under">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
												        				<span>Fair</span>
												        			</p>
												        			<p>傷やへこみなどの損傷がある状態。</p>
												        		</div>
												        		<div class="condInfo">
												        			<p class="condInfo_under">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
													        			<img src="{{ asset('img/detail/condition.svg') }}" alt="">
												        				<span>Poor</span>
												        			</p>
												        			<p>傷やへこみなどの損傷や使用感がある。</p>
												        		</div>
												        	</div>
												        </div>
												    </div><!-- hide -->
												</div>
											</td>
										</tr>
										<tr>
											<th><p>カテゴリー<span>必須</span><span class="nomore">(複数選択可)</span></p></th>
											<td>
												<div class="valueItem">
													<p class="select stylebox">
														<select id="multiSelectSample1" multiple="multiple" size="3">
															<option value="option2">選択肢１</option>
															<option value="option3">選択肢２</option>
															<option value="option4">選択肢３</option>
														</select>
													</p>
												</div>
											</td>
										</tr>
										<tr>
											<th><p>説明文<span>必須</span></p></th>
											<td><p><textarea></textarea></p></td>
										</tr>
										<tr>
											<th><p>YouTube動画URL</p></th>
											<td><p><input type="text" placeholder="https://www.youtube.com/○○○○○○○○"></p></td>
										</tr>
										<tr>
											<th><p>資料(PDF)</p></th>
											<td><p><input type="file" name="" id=""></p></td>
										</tr>
									</tbody>
								</table>
								<p class="privateUserBtn">
									<input type="reset" value="非公開で保存する">
									<input type="submit" value="掲載する">
								</p>
							</form>
						</div>
						<p class="mypageAtn RedHat"><a href="mypage">MY PAGE</a></p>
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
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.biggerlink.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/prettify.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
<script>
$(function(){
  $('.fancybox').fancybox({
      margin:40
    });

  $("#multiSelectSample1").multiselect({
		selectedList: 100,
		checkAllText: "全選択",
		uncheckAllText: "全選択解除",
		noneSelectedText: "選択してください",
		selectedText: "# 個選択"
	});

  $('#fileUpLoad').click(function(){
  	$('.fileUpLoad').find(':file').trigger('click');
  });
  fileImageClose();
});

function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		$('.fileUpLoadList').append('<li><p><img src="'+fileReader.result+'" alert=""><button class="fileImgClose">Close</button></p></li>');
		fileImageClose();
	});
	fileReader.readAsDataURL(obj.files[0]);
}

function fileImageClose()
{
	$('.fileImgClose').click(function(){
		$(this).parents('li').remove();
	});
}
</script>
</body>
<>

