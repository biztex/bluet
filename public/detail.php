<?php
if ($_GET["plan_id"]) {
    $plan_id = $_GET["plan_id"];
}
if ($_GET["preview"] == 1) {
    $url = "http://localhost/api/plan/json/" . $plan_id . '/1';
} else {
    $url = "http://localhost/api/plan/json/" . $plan_id;
}
$array = file_get_contents($url);
$plan = json_decode($array,true);
if (!$plan) {
    header('Location: https://blue-tourism-hokkaido.website/public/list.php');
}
$plan_json = json_encode($array, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
$plan_json = str_replace('¥u0022', '¥¥¥"', $plan_json);
$plan_json = str_replace('"', '', $plan_json);

if ($_GET["year"] && $_GET["month"]) {
    $current_date = new DateTime($_GET["year"] . '-' . $_GET["month"]);
    $current_y = $current_date->format('Y');
    $current_m = $current_date->format('m');
    $next_m_date = $current_date->modify('first day of next month')->modify('last day of');
} else {
    $current_date = new DateTime();
    $current_y = $current_date->format('Y');
    $current_m = $current_date->format('m');
    $next_m_date = $current_date->modify('first day of next month')->modify('last day of');
}
$next_y = $next_m_date->format('Y');
$next_m = $next_m_date->format('m');

$url_stocks = "http://localhost/api/stocks/json/" . $current_y . '/' . $current_m . '/' . $plan_id;
$json_stocks = file_get_contents($url_stocks);
$stocks = json_decode($json_stocks,true);
$url_stocks_next = "http://localhost/api/stocks/json/" . $next_y . '/' . $next_m . '/' . $plan_id;
$json_stocks_next = file_get_contents($url_stocks_next);
$stocks_next = json_decode($json_stocks_next,true);
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../public/css/template.css">
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='dashicons-css'  href='https://blue-tourism-hokkaido.com/wp/wp-includes/css/dashicons.min.css?ver=4.9.19' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='https://blue-tourism-hokkaido.com/wp/wp-includes/css/admin-bar.min.css?ver=4.9.19' type='text/css' media='all' />
<style id='admin-bar-inline-css' type='text/css'>

			.admin-bar {
				position: inherit !important;
				top: auto !important;
			}
			.admin-bar .goog-te-banner-frame {
				top: 32px !important
			}
			@media screen and (max-width: 782px) {
				.admin-bar .goog-te-banner-frame {
					top: 46px !important;
				}
			}
			@media screen and (max-width: 480px) {
				.admin-bar .goog-te-banner-frame {
					position: absolute;
				}
			}
		
</style>
<link rel='stylesheet' id='astra-theme-css-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/themes/astra/assets/css/minified/style.min.css?ver=1.3.2' type='text/css' media='all' />
<style id='astra-theme-css-inline-css' type='text/css'>
html{font-size:93.75%;}a,.page-title{color:#0274be;}a:hover,a:focus{color:#3a3a3a;}body,button,input,select,textarea{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;font-weight:inherit;font-size:15px;font-size:1rem;}blockquote{border-color:rgba(2,116,190,0.05);}.site-title{font-size:35px;font-size:2.33333333333rem;}#masthead .site-logo-img .custom-logo-link img{max-width:600px;}.astra-logo-svg{width:600px;}.ast-archive-description .ast-archive-title{font-size:40px;font-size:2.66666666667rem;}.site-header .site-description{font-size:15px;font-size:1rem;}.entry-title{font-size:30px;font-size:2rem;}.comment-reply-title{font-size:24px;font-size:1.6rem;}.ast-comment-list #cancel-comment-reply-link{font-size:15px;font-size:1rem;}h1,.entry-content h1,.entry-content h1 a{font-size:48px;font-size:3.2rem;}h2,.entry-content h2,.entry-content h2 a{font-size:42px;font-size:2.8rem;}h3,.entry-content h3,.entry-content h3 a{font-size:30px;font-size:2rem;}h4,.entry-content h4,.entry-content h4 a{font-size:20px;font-size:1.33333333333rem;}h5,.entry-content h5,.entry-content h5 a{font-size:18px;font-size:1.2rem;}h6,.entry-content h6,.entry-content h6 a{font-size:15px;font-size:1rem;}.ast-single-post .entry-title,.page-title{font-size:30px;font-size:2rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:15px;font-size:1rem;}::selection{background-color:#00b8c9;color:#000000;}body,h1,.entry-title a,.entry-content h1,.entry-content h1 a,h2,.entry-content h2,.entry-content h2 a,h3,.entry-content h3,.entry-content h3 a,h4,.entry-content h4,.entry-content h4 a,h5,.entry-content h5,.entry-content h5 a,h6,.entry-content h6,.entry-content h6 a{color:#3a3a3a;}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:#0274be;background-color:#0274be;}.main-header-menu a,.ast-header-custom-item a{color:#3a3a3a;}.main-header-menu li:hover > a,.main-header-menu li:hover > .ast-menu-toggle,.main-header-menu .ast-masthead-custom-menu-items a:hover,.main-header-menu li.focus > a,.main-header-menu li.focus > .ast-menu-toggle,.main-header-menu .current-menu-item > a,.main-header-menu .current-menu-ancestor > a,.main-header-menu .current_page_item > a,.main-header-menu .current-menu-item > .ast-menu-toggle,.main-header-menu .current-menu-ancestor > .ast-menu-toggle,.main-header-menu .current_page_item > .ast-menu-toggle{color:#0274be;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:#0274be;}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:#0274be;background-color:#0274be;box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:#0274be;border-color:#0274be;}.ast-small-footer > .ast-footer-overlay{background-color:#00b8c9;}.ast-small-footer a:hover{color:#ffc300;}.footer-adv-overlay{background-color:#3a9df9;}.ast-comment-meta{line-height:1.666666667;font-size:12px;font-size:0.8rem;}.single .nav-links .nav-previous,.single .nav-links .nav-next,.single .ast-author-details .author-title,.ast-comment-meta{color:#0274be;}.menu-toggle,button,.ast-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"]{border-radius:2px;padding:10px 40px;color:#000000;border-color:#00b8c9;background-color:#00b8c9;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.button:hover,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus{color:#ffc300;border-color:#3a3a3a;background-color:#3a3a3a;}.search-submit,.search-submit:hover,.search-submit:focus{color:#ffffff;background-color:#0274be;}.entry-meta,.entry-meta *{line-height:1.45;color:#0274be;}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *{color:#3a3a3a;}blockquote,blockquote a{color:#000000;}.ast-404-layout-1 .ast-404-text{font-size:200px;font-size:13.3333333333rem;}.widget-title{font-size:21px;font-size:1.4rem;color:#3a3a3a;}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:#0274be;}.secondary .calendar_wrap #today,.ast-progress-val span{background:#0274be;}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:#0274be;border-color:#0274be;}.calendar_wrap #today > a{color:#ffffff;}.ast-pagination a,.page-links .page-link,.single .post-navigation a{color:#0274be;}.ast-pagination a:hover,.ast-pagination a:focus,.ast-pagination > span:hover:not(.dots),.ast-pagination > span.current,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:#3a3a3a;}@media (min-width:545px){.ast-page-builder-template .comments-area,.single.ast-page-builder-template .entry-header,.single.ast-page-builder-template .post-navigation{max-width:1240px;margin-left:auto;margin-right:auto;}}@media (max-width:768px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1,.entry-content h1 a{font-size:30px;}h2,.entry-content h2,.entry-content h2 a{font-size:25px;}h3,.entry-content h3,.entry-content h3 a{font-size:20px;}.ast-single-post .entry-title,.page-title{font-size:30px;}}@media (max-width:544px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1,.entry-content h1 a{font-size:30px;}h2,.entry-content h2,.entry-content h2 a{font-size:25px;}h3,.entry-content h3,.entry-content h3 a{font-size:20px;}.ast-single-post .entry-title,.page-title{font-size:30px;}}@media (max-width:768px){html{font-size:85.5%;}}@media (max-width:544px){html{font-size:85.5%;}}@media (min-width:769px){.ast-container{max-width:1240px;}}@font-face {font-family: "Astra";src: url( https://blue-tourism-hokkaido.com/wp/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"),url( https://blue-tourism-hokkaido.com/wp/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"),url( https://blue-tourism-hokkaido.com/wp/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");font-weight: normal;font-style: normal;}@media (max-width:920px){.ast-404-layout-1 .ast-404-text{font-size:100px;font-size:6.66666666667rem;}}
.ast-header-break-point .site-header {border-bottom-width:0;border-bottom-color:;}@media (min-width: 769px) {.main-header-bar {border-bottom-width:0;border-bottom-color:;}}
.main-header-bar-wrap {content: '921';}@media all and ( min-width: 921px ) {.main-header-bar-wrap {content: '';}}@media (min-width:921px){#masthead .ast-container{max-width:100%;padding-left:35px;padding-right:35px;}}
</style>
<link rel='stylesheet' id='astra-contact-form-7-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/themes/astra/assets/css/minified/compatibility/contact-form-7.min.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=2.1.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=2.1.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=2.0.16' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/uploads/elementor/css/global.css?ver=1532330034' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack-widget-social-icons-styles-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/jetpack/modules/widgets/social-icons/social-icons.css?ver=20170506' type='text/css' media='all' />
<link rel='stylesheet' id='duplicate-post-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/duplicate-post/duplicate-post.css?ver=3.2.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-tables-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/tables-for-elementor/assets/css/frontend.min.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=4.9.19' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://blue-tourism-hokkaido.com/wp/wp-content/plugins/jetpack/css/jetpack.css?ver=6.3.5' type='text/css' media='all' />
<script type='text/javascript' src='https://blue-tourism-hokkaido.com/wp/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://blue-tourism-hokkaido.com/wp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://blue-tourism-hokkaido.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://blue-tourism-hokkaido.com/wp/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://blue-tourism-hokkaido.com/wp/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.19" />
<link rel='shortlink' href='https://wp.me/P9W5cl-FU' />
<link rel="alternate" type="application/json+oembed" href="https://blue-tourism-hokkaido.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fblue-tourism-hokkaido.com%2F%3Fpage_id%3D2598" />
<link rel="alternate" type="text/xml+oembed" href="https://blue-tourism-hokkaido.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fblue-tourism-hokkaido.com%2F%3Fpage_id%3D2598&#038;format=xml" />
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
.front {
	text-align:center;
}
.front.schedule {
	margin: 0;
}</style>
<!-- end Simple Custom CSS and JS -->
  <script> var fixed_header_class   = '';
           var fixed_header_scroll   = '';
           jQuery(window).scroll(function(){
           if(jQuery(document).scrollTop() > fixed_header_scroll){
             jQuery(fixed_header_class).addClass("myfixedHeader");
           }else{
               jQuery(fixed_header_class).removeClass("myfixedHeader");	 
                }
   });</script> <style type="text/css">
    .myfixedHeader{background-color: !important;}
    .myfixedHeader, .myfixedHeader a { color: !important;}
	.myfixedHeader { height: ;}
	.myfixedHeader { padding: !important;}
    .myfixedHeader {margin: 0 auto !important; width:100% !important; position:fixed; z-index:99999; transition:all 0.7s ease; left:0; right:0; top:0; text-align:center !important; }
    { transition:all 0.7s ease; }</style>	
<link rel='dns-prefetch' href='//v0.wordpress.com'/>
<style type='text/css'>img#wpstats{display:none}</style><style type="text/css" media="print">#wpadminbar { display:none; }</style>
<!-- <style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style> -->
<style type='text/css'>
#wpadminbar .quicklinks li#wp-admin-bar-stats {
	height: 32px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a {
	height: 32px;
	padding: 0;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a div {
	height: 32px;
	width: 95px;
	overflow: hidden;
	margin: 0 10px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a:hover div {
	width: auto;
	margin: 0 8px 0 10px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a img {
	height: 24px;
	padding: 4px 0;
	max-width: none;
	border: none;
}
</style>
<style type="text/css" id="wp-custom-css">
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select
    {
    background-color: #fff;
    color: #000;
    width: 80%;
    }			
</style>
</head>

<body>
<div id="glang">
	<div id="google_translate_element"></div>
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'ja', includedLanguages: 'en,ja,ko,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<div class="header"><a href="list.php"><img src ="https://blue-tourism-hokkaido.website/img/logo.png"></a></div>
<div class="container-plan">
	<div class="title">
		<span><?=$plan[0][name]?></span>
	</div>
	<div class="price">
	<?php 
            foreach ($plan[0][prices] as $i => $price) {
		echo '<p class="type">' . $price[price_types][name]. '</p>'; 
		if ($plan[0][prices][$i][week_flag] == 0) {
		    $normal_price = $price[price];
                    $before_price = $price[before_price];
                    if ($before_price) {
                    	echo '<span class="before-price"><strike>' . number_format($before_price) . '円</strike> </span><span class="normal-price">' . number_format($normal_price) . '円</span>';
                    } else {
                    	echo '<span class="normal-price">' . number_format($normal_price) . '円</span>';
                    }
		} else {
                    $prices = [];
	            $prices[] = $price[monday];
	            $prices[] = $price[tuesday];
	            $prices[] = $price[wednesday];
	            $prices[] = $price[thursday];
	            $prices[] = $price[friday];
	            $prices[] = $price[saturday];
	            $prices[] = $price[sunday];
	            $prices[] = $price[holiday];
                    $min_price = min($prices);
                    $max_price = max($prices);
                    $before_price = $price[before_price];
                    if ($before_price) {
                    	echo '<span class="before-price"><strike>' . number_format($before_price) . '円</strike> </span><span class="normal-price">' . number_format($min_price) . '円〜' . number_format($max_price)  . '円</span>';
                    } else {
                    	echo '<span class="normal-price">' . number_format($min_price) . '円〜' . number_format($max_price) . '円</span>';
                    }
		}
	    }
	?>
	</div>
    <div class="catchphrase"><span><?=$plan[0][catchphrase]?></span></div>
	<div class="picture">
        <ul class="slider thumb-item">
	<?php 
	    for ($i = 1; $i <= 10; $i++) {
         	$index_name = "file_path" . $i;
		if ($plan[0][$index_name]) {
	            echo "<li><img src='/public/uploads/{$plan[0][$index_name]}' alt=></li>";
		}
            }
	?>
        </ul>
        <ul class="slider thumb-item-nav">
	<?php 
	    $img_count = 0;
	    for ($i = 1; $i <= 10; $i++) {
         	$index_name = "file_path" . $i;
		if ($plan[0][$index_name]) {
	            echo "<li><img src='/public/uploads/{$plan[0][$index_name]}' alt=></li>";
	            $img_count++;
		}
            }
	?>
        </ul>
	</div>
	<div class="calendar">
        <span id="anchor-calendar">空き状況</span>
        <div class="calendar_container"> 
        	<p>参加出発希望日を選択し、詳細を確認して申し込みを行ってください。</p>
        	<div class="flex-calendar">
            <p><i class="prev-month fas fa-arrow-alt-circle-left"></i></p>
        	<table class="schedule">
                <thead>
                    <tr>
                    	<th class="year-text" colspan="7">
                    	<?php
                    	foreach ($stocks[dates] as $date) {
                  		    $current_date = new DateTime(substr($date, 0, 10));
                  		    $y = (int)$current_date->format('Y');
                  		    $m = $current_date->format('m');
                  		    $d = $current_date->format('j');
                  	        if ($d == 15) {
                  	            echo $y . '年' . $m . '月';
                  	        }
                        }
                    	?>
                    	</th>
                    </tr>
                    <tr>
                       <?php 
                       foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek) {
                       	echo '<th class="bg-light text-center">' . $dayOfWeek . '</th>';
                       }
                       ?>
                    </tr>
                </thead>
                <tbody>
                	<?php
                	$week = ['日', '月', '火', '水', '木', '金', '土'];
                	foreach ($stocks[dates] as $date) {
                		$current_date = new DateTime(substr($date, 0, 10));
                		$w = (int)$current_date->format('w');
                		$d = $current_date->format('j');
                	    if ($w == 0) {
                	    	echo '<tr>';
                	    }
                	    $count = 0;
                	    foreach ($stocks[stocks] as $stock) {
                	    	if ($current_date->format('Y-m-d') == $stock[res_date] && $stock[is_active] == 1) {
					// 現在時刻
					$now = new DateTime();
			                // 受付開始日計算
			                $time1 = sprintf('%02d', $plan[0][res_before_time]);
			                $res_before_datetime = new DateTime($stock[res_date] . " " . $time1 . ":00");
			                $res_before_datetime = $res_before_datetime->modify('-' . $plan[0][res_before_day]. ' day')->format('Y-m-d H:i');
			                //////
			                //// 受付締切日計算（即時予約）
			                $time2 = sprintf('%02d', $plan[0][res_end_time]);
			                $res_end_datetime = new DateTime($stock[res_date] . " " . $time2 . ":00");
			                $res_end_datetime = $res_end_datetime->modify('-' . ($plan[0][res_end_day]) . ' day');
			                //////
			                //// 受付締切日計算（リクエスト予約）
			                $time3 = sprintf('%02d', $plan[0][req_before_time]);
			                $req_before_datetime = new DateTime($stock[res_date] . " " . $time3 . ":00");
			                $req_before_datetime = $req_before_datetime->modify('-' . ($plan[0][req_before_day]) . ' day');
			                ////
                	    		//if ($stock[res_type] == 0 && $stock[res_date] > date("Y-m-d")) {
                	    		if ($stock[res_type] == 0 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $res_end_datetime) {
                	    		    echo '<td>' . $d . '<br />';
                                            if ($stock[limit_number] > 0) {
                	    		    	echo '<a class="selected-date" style="cursor:pointer;">○</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
                	    		    } else if ($stock[limit_number] == 0) {
                   	                        echo '×';
                	    		    } else {
                   	                        echo '-';
                	    		    }
					    $count++;
                	    		} else if ($stock[res_type] == 1) {
                	    		    echo '<td>' . $d . '<br />';
                	    		    if ($stock[limit_number] > 0 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $res_end_datetime) {
                	    		    	echo '<a class="selected-date" style="cursor:pointer;">○</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
                	    		    } else if ($stock[limit_number] == 0 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $req_before_datetime) {
                	    		    	echo '<a class="selected-date" style="cursor:pointer;">□</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
                	    		    } else {
                   	                        echo '-';
                	    		    }
					    $count++;
                	    		} else if ($stock[res_type] == 2 && $stock[res_date] >= date("Y-m-d")  && date("Y-m-d H:i") >= $res_before_datetime && $now <= $req_before_datetime) {
                	    		    echo '<td>' . $d . '<br />';
                                            echo '<a class="selected-date" style="cursor:pointer;">□</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
					    $count++;
                	    		} else {
                   	                    echo '<td style="background-color: #777">' . $d . '<br />-</td>';
					    $count++;
					}
                	    		echo '</td>';
                	        }
                	    }
                	    if ($count == 0) {
                   	        echo '<td style="background-color: #777">' . $d . '<br />-</td>';
                	    }
                        if ($w == 6) {
                	    	echo '</tr>';
                	    }
                    }
                    ?>
                </tbody>
            </table>
            <table class="schedule">
                <thead>
                    <tr>
                    	<th class="year-text" colspan="7">
                    	<?php
                    	foreach ($stocks_next[dates] as $date_next) {
                  		    $current_date = new DateTime(substr($date_next, 0, 10));
                  		    $y = (int)$current_date->format('Y');
                  		    $m = $current_date->format('m');
                  		    $d = $current_date->format('j');
                  	        if ($d == 15) {
                  	            echo $y . '年' . $m . '月';
                  	        }
                        }
                    	?>
                    	</th>
                    </tr>
                    <tr>
                       <?php 
                       foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek) {
                       	echo '<th class="bg-light text-center">' . $dayOfWeek . '</th>';
                       }
                       ?>
                    </tr>
                </thead>
                <tbody>
                	 <?php
                	$week = ['日', '月', '火', '水', '木', '金', '土'];
                	foreach ($stocks_next[dates] as $date) {
                		$current_date = new DateTime(substr($date, 0, 10));
				//$current_date = $current_date->modify("-1 months");
                		$w = (int)$current_date->format('w');
                		$d = $current_date->format('j');
                	    if ($w == 0) {
                	    	echo '<tr>';
                	    }
                	    $count = 0;
                	    foreach ($stocks[stocks] as $stock) {
                	    	if ($current_date->format('Y-m-d') == $stock[res_date] && $stock[is_active] == 1) {
					// 現在時刻
					$now = new DateTime();
			                // 受付開始日計算
			                $time1 = sprintf('%02d', $plan[0][res_before_time]);
			                $res_before_datetime = new DateTime($stock[res_date] . " " . $time1 . ":00");
			                $res_before_datetime = $res_before_datetime->modify('-' . $plan[0][res_before_day]. ' day')->format('Y-m-d H:i');
			                //////
			                //// 受付締切日計算（即時予約）
			                $time2 = sprintf('%02d', $plan[0][res_end_time]);
			                $res_end_datetime = new DateTime($stock[res_date] . " " . $time2 . ":00");
			                $res_end_datetime = $res_end_datetime->modify('-' . ($plan[0][res_end_day]) . ' day');
			                //////
			                //// 受付締切日計算（リクエスト予約）
			                $time3 = sprintf('%02d', $plan[0][req_before_time]);
			                $req_before_datetime = new DateTime($stock[res_date] . " " . $time3 . ":00");
			                $req_before_datetime = $req_before_datetime->modify('-' . ($plan[0][req_before_day]) . ' day');
			                ////
                	    		//if ($stock[res_type] == 0 && $stock[res_date] > date("Y-m-d")) {
                	    		if ($stock[res_type] == 0 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $res_end_datetime) {
                	    		    echo '<td>' . $d . '<br />';
                                            if ($stock[limit_number] > 0) {
                	    		    	echo '<a class="selected-date" style="cursor:pointer;">○</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
                	    		    } else if ($stock[limit_number] == 0) {
                   	                        echo '×';
                	    		    } else {
                   	                        echo '-';
                	    		    }
					    $count++;
                	    		} else if ($stock[res_type] == 1) {
                	    		    echo '<td>' . $d . '<br />';
                	    		    if ($stock[limit_number] > 0 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $res_end_datetime) {
                	    		    	echo '<a class="selected-date" style="cursor:pointer;">○</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
                	    		    } else if ($stock[limit_number] == 0 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $req_before_datetime) {
                	    		    	echo '<a class="selected-date" style="cursor:pointer;">□</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
                	    		    } else {
                   	                        echo '-';
                	    		    }
					    $count++;
                	    		} else if ($stock[res_type] == 2 && $stock[res_date] >= date("Y-m-d") && date("Y-m-d H:i") >= $res_before_datetime && $now <= $req_before_datetime) {
                	    		    echo '<td>' . $d . '<br />';
                                            echo '<a class="selected-date" style="cursor:pointer;">□</a><input type="hidden" value="' . $current_date->format('Y-m-d') . '">';
					    $count++;
                	    		} else {
                   	                    echo '<td style="background-color: #777">' . $d . '<br />-</td>';
					    $count++;
					}
                	    		echo '</td>';
                	        }
                	    }
                	    if ($count == 0) {
                   	        echo '<td style="background-color: #777">' . $d . '<br />-</td>';
                	    }
                        if ($w == 6) {
                	    	echo '</tr>';
                	    }
                    }
                    ?>
                </tbody>
            </table>
            <p class="next-month"><i class="fas fa-arrow-alt-circle-right"></i></p>
            </div>
            <div class="reserve-arrow" style="display:none;">
            	<i class="fas fa-angle-double-down"></i>
            </div>
            <div class="reserve-box" style="display:none;">
                <table>
                    <tr>
                      <th>出発</th>
                      <th>集合時間</th>
                      <th>参加時間</th>
                      <th>料金</th>
                      <th>予約</th>
                    </tr>
                    <tr>
                      <td class="res-date"></td><input type="hidden" name="res-date"><input type="hidden" name="res-type">
                      <td class="meeting-time"></td>
                      <td class="activity-time"></td>
                      <td class="price-cell"></td>
                      <td><button class="reserve-button">予約へ進む</button></td>
                    </tr>
                </table>            
            </div>

            <p>空き状況： <a>○</a> 即時予約可 / <a>□</a> リクエスト予約可 / × 空きなし / － 受付対象外</p>
        	<p>※リクエストが完了しても予約が確定したわけではありません。リクエスト予約は仮予約の状態となります。<br />
        	実施会社の確認連絡をもって予約の確定としています。予めご了承ください。<br/>
        	※予約枠ごとに料金が異なる場合がございます。
            </p>

            <table>
            	<p class="table-comment">支払い方法、キャンセルについて</p>
                <tr>
                  <th>お支払方法</th><td><?php if ($plan[0][spot] == 1) {
                      echo '現地払い<br />';
                  }
		  if ($plan[0][prepay] == 1) {
                      echo '事前払い<br />';
                  }
		  if ($plan[0][cvs] == 1) {
                      echo '事前コンビニ決済<br />';
                  }
		  if ($plan[0][card] == 1) {
                      echo '事前クレジットカード決済<br/ >';
                  } ?></td>
                </tr>
                <tr>
                  <th>お支払い方法の補足・詳細</th><td><?=$plan[0][payment_comment]?></td>
                </tr>
                <tr>
                  <th>キャンセル締切</th><td>旅行および体験の1日前の17:00まで</td>
                </tr>
                <tr>
                  <th>キャンセル規定</th><td><!--参加日の10日～8日前：　旅行代金および体験料金の20％<br />-->参加日の7日～2日前：　旅行代金および体験料金の30％<br />参加日の1日前：　旅行代金および体験料金の40％<br />参加日の当日：　旅行代金および体験料金の50％<br />参加日の無連絡キャンセル：　旅行代金および体験料金の100％ </td>
                </tr>
            </table>
        </div>
	</div>
	<div class="detail">
        <span>詳細情報</span>
        <div class="tab_container">
            <input id="tab1" type="radio" name="tab_item" checked>
            <label class="tab_item" for="tab1">プラン情報</label>
            <input id="tab2" type="radio" name="tab_item">
            <label class="tab_item" for="tab2">集合場所・参加場所</label>
            <input id="tab3" type="radio" name="tab_item">
            <label class="tab_item" for="tab3">注意事項・その他</label>
            <div class="tab_content" id="tab1_content">
              <div class="tab_content_description">
                <p class="description-title"><?=$plan[0][name]?></p>
                <p class="content"><?=$plan[0][description]?></p>
                <table>
                    <tr>
                      <th>開催期間</th><td><?=date('Y年n月j日', strtotime($plan[0][start_day]))?>〜<?=date('Y年n月j日', strtotime($plan[0][end_day]))?></td>
                    </tr>
                    <tr>
                      <th>所要時間</th><td><?=$plan[0][time_hour]?>時間<?=$plan[0][time_minute]?>分</td>
                    </tr>
                    <tr>
                      <th>料金に含まれるもの</th><td><?=$plan[0][included_item]?></td>
                    </tr>
                    <tr>
                      <th>1予約あたりの予約可能人数</th><td><?=$plan[0][min_number]?>人〜<?=$plan[0][max_number]?>人</td>
                    </tr>
                </table>
              </div>
            </div>
            <div class="tab_content" id="tab2_content">
              <div class="tab_content_description">
                <table>
                    <tr>
                      <th>集合場所</th>
                         <td><?php
                      	  if ($plan[0][meeting_point_flag] == 0) {
                      	  	  echo $plan[0][place_name] . '<br />〒' . $plan[0][place_postalcode] . '<br />' . $plan[0][place_prefecture] . $plan[0][place_address] . '<br />' . $plan[0][place_access];
                              echo '<input type="hidden" id="lat" value="' . $plan[0][place_latitude] . '">';
                              echo '<input type="hidden" id="lng" value="' . $plan[0][place_longitude] . '">';
                              echo '<div id="map-wrapper"><div id="map-canvas"></div></div>';                      	  	  
                      	  } else if ($plan[0][meeting_point_flag] == 1){
                              echo $plan[0][meeting_point_name] . '<br />〒' . $plan[0][meeting_point_postalcode] . '<br />' . $plan[0][meeting_point_prefecture] . $plan[0][meeting_point_address] . '<br />' . $plan[0][meeting_point_access];
                              echo '<input type="hidden" id="lat" value="' . $plan[0][meeting_point_latitude] . '">';
                              echo '<input type="hidden" id="lng" value="' . $plan[0][meeting_point_longitude] . '">';
                              echo '<div id="map-wrapper"><div id="map-canvas"></div></div>';
                      	  } else {
                      	  	  echo '-';
                      	  }
                      	  ?></td>
                    </tr>
                    <tr>
                      <th>体験場所</th><td><?=$plan[0][place_name]?><br />〒<?=$plan[0][place_postalcode]?><br /><?=$plan[0][place_prefecture]?><?=$plan[0][place_address]?><br /><?=$plan[0][place_access]?><br /><?php
                              echo '<input type="hidden" id="lat2" value="' . $plan[0][place_latitude] . '">';
                              echo '<input type="hidden" id="lng2" value="' . $plan[0][place_longitude] . '">';
                              echo '<div id="map-wrapper"><div id="map-canvas2"></div></div>';?></td>
                    </tr>
                </table>
              </div>
            </div>
            <div class="tab_content" id="tab3_content">
              <div class="tab_content_description">
                <table>
                    <tr>
                      <th>対象年齢</th><td><?=$plan[0][age_from]?>歳〜<?=$plan[0][age_to]?>歳</td>
                    </tr>
                    <tr>
                      <th>服装</th><td><?=$plan[0][item]?></td>
                    </tr>
                    <tr>
                      <th>持ち物</th><td><?=$plan[0][wear]?></td>
                    </tr>
                    <tr>
                      <th>注意事項・その他</th><td><?=$plan[0][caution_content]?></td>
                    </tr>
                </table>
              </div>
            </div>
        </div>
	</div>

    <footer class="footer_wrap">
        <a href="company.php">会社概要</a>
        <!-- <a href="tradelaw.php">特定商取引法に基づく表記</a> -->
        <a href="privacy.php">プライバシーポリシー</a>
    </footer>
    <div class="copy">Copyright © BlueTourismHokkaido All rights reserved</div>
</div>

<style type="text/css">

.price {
	text-align: center;
}
.title {
	text-align: center;
    margin: 30px 0 0 0;
}
.title span {
    padding: 0.2rem 1.3rem;
    border-left: 7px solid #00b8c8;
    font-size: 1.8rem;
    font-weight: bold;
    color: #0D3965;
}
.container-plan {
	width: 60%;
        height: 450px;
	margin: 0 auto;
}
.container-plan .catchphrase {
	text-align: center;
}
.container-plan .catchphrase span {
}
.container-plan .picture {
	text-align: center;
}
.container-plan .picture ul {
	text-align: center;
	margin: 0 auto;
}
.container-plan .picture img {
	text-align: center;
	margin: 20px auto 0;
}

.container-plan .calendar {
    margin: 50px 0 0 0;
}
.container-plan .detail {
    margin: 50px 0;
}
.container-plan .calendar span,
.container-plan .detail span {
    padding: 0.2rem 1.3rem;
    border-left: 7px solid #00b8c8;
    font-size: 1.4rem;
    font-weight: bold;
}
.container-plan .price {
    margin: 30px 0;
}
.container-plan .price .type {
    margin: 5px 0 -10px 0 !important;
    font-weight: bold;
}
.container-plan .price .normal-price {
    font-size: 1.3rem;
    color: red;
    font-weight: bold;
}
.container-plan .price .before-price {
    font-size: 1.1rem;
}

.calendar_container {
    padding: 1em;
    background-color: #F0F8FF;
    border:1px solid #ccc;
    margin: 20px auto;
}
.calendar_container .prev-month,
.calendar_container .next-month {
    font-size: 1.5rem;
    color: #00b8c9;
    cursor: pointer;
}
.calendar_container .prev-month {
    margin: 10px 0 0 0;
}
.calendar table {
	margin :20px 0;
}
.calendar_container table {
	margin: 0;
}
.calendar_container p.table-comment {
	font-weight: bold;
}
.calendar_container th {
	background-color: #ececec;
	width: 25%;
}
.calendar_container td {
	width: 75%;
	background-color: #fff;
    white-space: pre-wrap;
}
.calendar_container table.schedule {
	margin: 0 10px 10px;
}
.calendar_container .schedule th {
	background-color: #ececec;
	width: 50px;
	text-align: center;
}
.calendar_container .schedule td {
	background-color: #fff;
    white-space: pre-wrap;
	width: 50px;
	text-align: center;
}
.calendar_container p.table-comment {
	margin: 4px 0;
}
.calendar_container .flex-calendar {
	display: flex;
}

.tab_container {
    padding-bottom: 1em;
    background-color: #fff;
    border:1px solid #ccc;
    margin: 20px auto;
}
.tab_item {
    width: calc(100%/3);
    padding:5px 0;
    border-top: 2px solid #00b8c8 ;
    background-color: #ececec;
    text-align: center;
    color: #0D3965 ;
    display: block;
    float: left;
    text-align: center;
    font-weight: bold;
    transition: all 0.2s ease;
}
.tab_item:hover {
    opacity: 0.75;
    cursor: pointer;
}
input[name="tab_item"] {
    display: none;
}
.tab_content {
    display: none;
    padding: 1em 1em 0;
    clear: both;
    overflow: hidden;
}
#tab1:checked ~ #tab1_content,
#tab2:checked ~ #tab2_content,
#tab3:checked ~ #tab3_content {
    display: block;
}
.tab_container input:checked + .tab_item {
    background-color: #00b8c8;
    color: #fff;
}
#tab1_content .description-title {
	font-weight: bold;
	margin: 5px 0;
}
#tab1_content .content {
    white-space: pre-wrap;
}
#tab1_content th,
#tab2_content th,
#tab3_content th {
	background-color: #ececec;
	width: 25%;
}
#tab1_content td,
#tab2_content td,
#tab3_content td {
	width: 75%;
    white-space: pre-wrap;
}

#map-wrapper {
    width:100%;
    height: 500px;
    padding-top:50%;
    position: relative;
    margin:auto;
}
 
#map-canvas,
#map-canvas2 {
    position: absolute;
    width: 100%;
    height: 500px;
    top: 0;
}

.thumb-item-nav {
    width: 600px;
    text-align: center;
    margin: 0 auto;
}

.thumb-item-nav li {
    max-width: 145px;
    margin: 0 !important;
    padding: 0 !important;
    cursor: pointer;
}

.thumb-item-nav img {
    height: 100px;
    margin: 5px 0 0 0 !important;
    padding: 0 !important;
}

.thumb-item-nav .slick-current img {
	border:5px solid #00b8c9;
}

.slick-slide {
	padding: 0 5px;
        height: 100%;
}
.slick-arrow {
   //display:none !important;
   top: 55px;
}

.slick-prev,
.slick-next,
.slick-prev:hover,
.slick-next:hover,
.slick-prev:link,
.slick-next:link,
.slick-prev:visited,
.slick-next:visited,
.slick-prev:active,
.slick-next:active,
.slick-prev:focus,
.slick-next:focus {
    background-color: #ccc;
    height: 100px;
}

.reserve-box th,
.reserve-box td  {
	width: 0px;
	padding: 3px 3px 10px 3px;
	text-align: center;
}
.reserve-button {
	margin: 7px 0 0 0;
	padding: 0px 5px;
	border-radius: 5px;
	color: #fff;
}
.reserve-arrow {
    text-align: center;
    font-size: 3rem;
    font-weight: bold;
    color: #00b8c9;
}
#tab3_content td {
    max-width: 600px;
    word-break: break-all;    
}

@media screen and (max-width: 767px) {
    .container-plan {
        width: 100%;
    }
    .plan-image {
        flex-direction: column;
    }
    .reservation small {
        display: block;
    }
    .notice-input {
        text-align:left;
    }
    .thumb-item-nav {
        max-width: 80%;
    }
    .thumb-item-nav img {
        height:auto;
    }
    .slick-initialized .slick-slide {
        height: auto;
    }
    .container-plan .calendar {
        margin-top: 30px;
    }
    .calendar_container .flex-calendar {
        flex-direction:column;
    }
    .calendar_container table.schedule {
        width: 95%;
        box-sizing: border-box;
    }
}

</style>

</body>
<script src='https://maps.google.com/maps/api/js?key=AIzaSyCG9SfPt8adGSdlgWkq8jdbt64mYaPRkaM' type="text/javascript"></script>
<script>
// マップ1設定
if (document.getElementById('lat') && document.getElementById('lng')) {
    var lat = document.getElementById('lat'),
        lng = document.getElementById('lng'),
        latlng = new google.maps.LatLng(lat.value, lng.value);
    
    var opt = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scaleControl: true
    };
    
    var map = new google.maps.Map( document.getElementById('map-canvas'), opt);
    map.setCenter( latlng );
    
    var marker = new google.maps.Marker({
        position: latlng,
        map: map
    });
}

// マップ2設定
var lat = document.getElementById('lat2'),
    lng = document.getElementById('lng2'),
    latlng = new google.maps.LatLng(lat.value, lng.value);

var opt = {
  zoom: 15,
  center: latlng,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  scaleControl: true
};

var map = new google.maps.Map( document.getElementById('map-canvas2'), opt);
map.setCenter( latlng );

var marker = new google.maps.Marker({
  position: latlng,
  map: map
});

// スライダー設定
$(function() {
    $('.thumb-item').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.thumb-item-nav'
    });
    var numberOfImages = 4,
        imgCount = "<?php echo $img_count; ?>";
    if (imgCount < 5) {
        numberOfImages = imgCount -1;
    }
    if (imgCount == 1) {
        numberOfImages = imgCount;
    }
    console.log("count is " + numberOfImages);
    $('.thumb-item-nav').slick({
        accessibility: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 400,
        arrows: true,
        infinite: true,
        slidesToShow: numberOfImages,
        slidesToScroll: 1,
        asNavFor: '.thumb-item',
        focusOnSelect: true,
    });
});

// カレンダー送り設定
$(function() {
	$('.prev-month').click(function () {
        let year = "<?= $current_y ?>",
            month = "<?= $current_m ?>",
            planId = '<?= $plan_id ?>';
        let date = new Date(year,month);
        date.setMonth(date.getMonth() - 2); // ここで1ヶ月前をセット
        let prevMonthYear = date.getFullYear();
        let prevMonth = date.getMonth() + 1;
        location.href = 'https://blue-tourism-hokkaido.website/public/detail.php/?page_id=2622&year=' + prevMonthYear + '&month=' + prevMonth + '&plan_id=' + planId + '#anchor-calendar';
    });
    $('.next-month').click(function () {
        let year = "<?= $current_y ?>",
            month = "<?= $current_m ?>",
            planId = '<?= $plan_id ?>';
        let date = new Date(year,month);
        date.setMonth(date.getMonth() + 1); // ここで1ヶ月後をセット
        let nextMonthYear = date.getFullYear();
        let nextMonth = date.getMonth();
        location.href = 'https://blue-tourism-hokkaido.website/public/detail.php/?page_id=2622&year=' + nextMonthYear + '&month=' + nextMonth + '&plan_id=' + planId + '#anchor-calendar';
    });
});

// 日付選択時
$(function() {
	$('.selected-date').click(function () {
		// 事前リセット
		$('.meeting-time').text('');
		$('.activity-time').text('');
		$('.price-cell').text('');

		// 日付代入
		var date = $(this).next('input').val(),
		    date = new Date(date),
		    year = date.getFullYear(),
            month = date.getMonth() + 1,
            day = date.getDate(),
            dayOfWeekStr = [ "日", "月", "火", "水", "木", "金", "土" ][date.getDay()];
		$('.res-date').text(year + '年' + month + '月' + day + '日（' + dayOfWeekStr + '）');
        $('input[name="res-date"]').val(year + '-' + month + '-' + day);
        $('input[name="res-type"]').val($(this).text());
		// 集合時間代入、体験時間代入
		var plans = '<?= $plan_json ?>';
		    plans = JSON.parse(plans),
		    startHour = plans[0].activities[0].start_hour,
		    startMinute = plans[0].activities[0].start_minute,
		    endHour = plans[0].activities[0].end_hour,
		    endMinute = plans[0].activities[0].end_minute;
        $.each(plans[0].activities, function(i, value) {
            $('.meeting-time').append('・' + value.start_hour + ':' +  value.start_minute + '<br />');
            if (value.is_overday && value.days_after != 00) {
                $('.activity-time').append('・' + value.start_hour + ':' +  value.start_minute + ' 〜 (' + value.days_after.substr(1, 2) + '日後の)' + value.end_hour + ':' + value.end_minute + '<br />');
            } else {
                $('.activity-time').append('・' + value.start_hour + ':' +  value.start_minute + ' 〜 ' + value.end_hour + ':' + value.end_minute + '<br />');
            }
        })
		// 料金代入
		var prices = [];
		$.each(plans[0].prices, function(i, value) {
		    if (value.week_flag == 1) {
		        var week_prices = [];
                        week_prices.push(value.monday);
                        week_prices.push(value.tuesday);
                        week_prices.push(value.wednesday);
                        week_prices.push(value.thursday);
                        week_prices.push(value.friday);
                        week_prices.push(value.saturday);
                        week_prices.push(value.sunday);
		        var minWeekVal = Math.min.apply(null, week_prices);
                        prices.push(minWeekVal);
		    } else {
                        prices.push(value.price);
		    }
		})
		var minVal = Math.min.apply(null, prices);
        $('.price-cell').append(minVal.toLocaleString() + '円');

		// 予約ボックス表示＆アンカー移動
		$('.reserve-arrow, .reserve-box').show();
		$('html,body').animate({
            scrollTop : $('.year-text').offset().top
        }, 'fast');

        return false;
    });
});
// 予約ボタンクリック時
$('.reserve-button').click(function () {
    var planId = '<?= $plan_id ?>',
        date = $('input[name="res-date"]').val(),
        resType = $('input[name="res-type"]').val();
    if (resType == '○') {
        resType = 0;
    } else {
        resType = 1;
    }
	open( "https://blue-tourism-hokkaido.website/reservations/create?plan_id=" + planId + "&date=" + date + '&is_request=' + resType, "_blank" ) ;
});

</script>


