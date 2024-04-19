<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" type="text/css" href="/public/css/template.css">
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
<div class="header"><a href="/list.php"><img src ="{{ asset('img/logo.png')}}"></a></div>
<div class="container-plan">
    {{--成功もしくは失敗のメッセージ--}}
    @if (Session::has('message'))
    <div class="text-red alert alert-primary">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="text-red alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
    <form id="reservation-form" action="{{ url('reservations/store') }}" method="post">
    @csrf
    <input type="hidden" id="lang" name="lang" value="ja" />
    <input type="hidden" id="plan_name" name="plan_name" value="" />
    <input type="hidden" id="activity_name" name="activity_name" value="" />

    <div class="reservation">
        @if (request('is_request') == 0)
        <span class="page-title">予約内容の入力</span><small>-　 株式会社ブルーツーリズム北海道</small>
        @else
        <span class="page-title">リクエスト予約内容の入力</span><small>-　 株式会社ブルーツーリズム北海道</small>
        <div class="notice-request"><span class="text-red">リクエスト予約は即時予約ではありません。必ず実施会社と予約のやり取りをしてください。</span></div>
        @endif
        <div class="notice-input"><span class="text-red">※ は入力必須項目です</span></div>
        <p class="mid-title">予約プラン名</p>
        <div class="plan-image">
            <img src="/public/uploads/{{ $plan->file_path1 }}" />
            <div>
                <p id="plan-title" class="plan-title">{{ $plan->name }}</p>
                <p><strong>実施会社</strong>：株式会社ブルーツーリズム北海道</p>
                <p><strong>実施日時</strong></p>
@foreach($plan->activities as $activity)
  @if ($activity->is_overday == 1 && $activity->days_after != 00)
<small>・{{ date('Y年m月d日', strtotime($date)) }} {{ $activity->start_hour }}:{{ $activity->start_minute }} 〜 {{ date('Y年m月d日', strtotime($date . " " . substr($activity->days_after, 1, 2) . " day")) }} {{ $activity->end_hour }}:{{ $activity->end_minute }}</small><br />
  @else
<small>・{{ date('Y年m月d日', strtotime($date)) }} {{ $activity->start_hour }}:{{ $activity->start_minute }} 〜 {{ $activity->end_hour }}:{{ $activity->end_minute }}</small><br />
  @endif
@endforeach
            </div>
        </div>
        <p class="mid-title">予約数</p>
        <div class="content">
            <table>
                <tr>
                  <th>料金 <span class="text-red">※</span></th><td><hr />@php
foreach ($plan->prices as $i => $price) {
echo '<p>';
    if ($price->week_flag == 0) {
       echo $price->price_types->name . " / " . number_format($price->price) . " 円";
    }
    if ($price->week_flag == 1) {
       echo $price->price_types->name . " / " . number_format($price->{$weekday}) . " 円";
    }
    echo '<span class="number-text"> 人</span><input type="text" name="type' . $price->type . '_number" class="number" min="0" max="999" value="0"><hr /></p>';
}
@endphp
</td>
                </tr>
            </table>
        </div>
        <p class="mid-title">時間選択</p>
        <div class="content">
            <table>
                <tr>
                  <th>参加時間帯 <span class="text-red">※</span></th><td><select id="selected_activity" name="selected_activity" required><option value selected>選択してください</option>@foreach($plan->activities as $activity) @if ($activity->is_overday == 1 && $activity->days_after != 00)
<option value="{{ date('Y年m月d日', strtotime($date)) }} {{ $activity->start_hour }}:{{ $activity->start_minute }} 〜 {{ date('Y年m月d日', strtotime($date . " " . substr($activity->days_after, 1, 2) . " day")) }} {{ $activity->end_hour }}:{{ $activity->end_minute }}　（{{ $activity->name }})">{{ date('Y年m月d日', strtotime($date)) }} {{ $activity->start_hour }}:{{ $activity->start_minute }} 〜 {{ date('Y年m月d日', strtotime($date . " " . substr($activity->days_after, 1, 2) . " day")) }} {{ $activity->end_hour }}:{{ $activity->end_minute }}　（{{ $activity->name }})</option>
@else
<option value="{{ $activity->start_hour }}:{{ $activity->start_minute }}〜{{ $activity->end_hour }}:{{ $activity->end_minute }} （{{ $activity->name }})">{{ $activity->start_hour }}:{{ $activity->start_minute }}〜{{ $activity->end_hour }}:{{ $activity->end_minute }} （{{ $activity->name }}）</option>
@endif
@endforeach</td>
                </tr>
            </table>
        </div>
        <p class="mid-title">予約代表者情報</p>
        <div class="content">
            <table>
                <tr>
                  <th>予約代表者氏名 <span class="text-red">※</span></th><td>姓　<input type="text" name="name_last" value="{{ old('name_last') }}" required>　名　<input type="text" name="name_first" value="{{ old('name_first') }}" required></td>
                </tr>
                <tr>
                  <th>予約代表者氏名カナ <span class="text-red"></span></th><td>セイ　<input type="text" name="kana_last" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*"  value="{{ old('kana_last') }}">　メイ　<input type="text" name="kana_first" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" value="{{ old('kana_first') }}"></td>
                </tr>
                <tr>
                  <th>メールアドレス <span class="text-red">※</span></th><td><input type="email" name="email" class="width-half" value="{{ old('email') }}" required> <small>※予約確認メールをお送りします</small></td>
                </tr>
                <tr>
                  <th>住所または宿泊ホテル名 <span class="text-red">※</span></th>
                                    <td>your area&nbsp;<input type="radio" id="japan" name="area" value="japan" checked><label for="japan">Japan</label>&nbsp;<input type="radio" id="overseas" name="area" value="overseas"><label for="overseas">Overseas</label><br />
〒　<input type="text" name="postalcode" pattern="\d{3}-?\d{4}" value="{{ old('postalcode') }}"><br />
都道府県　<select name="prefecture" required>
                                    <option value>選択してください</option>
                                    <option value="北海道" @if(old('prefecture')=='北海道') selected @endif>北海道</option>
                                    <option value="青森県" @if(old('prefecture')=='青森県') selected @endif>青森県</option>
                                    <option value="岩手県" @if(old('prefecture')=='岩手県') selected @endif>岩手県</option>
                                    <option value="宮城県" @if(old('prefecture')=='宮城県') selected @endif>宮城県</option>
                                    <option value="秋田県" @if(old('prefecture')=='秋田県') selected @endif>秋田県</option>
                                    <option value="山形県" @if(old('prefecture')=='山形県') selected @endif>山形県</option>
                                    <option value="福島県" @if(old('prefecture')=='福島県') selected @endif>福島県</option>
                                    <option value="茨城県" @if(old('prefecture')=='茨城県') selected @endif>茨城県</option>
                                    <option value="栃木県" @if(old('prefecture')=='栃木県') selected @endif>栃木県</option>
                                    <option value="群馬県" @if(old('prefecture')=='群馬県') selected @endif>群馬県</option>
                                    <option value="埼玉県" @if(old('prefecture')=='埼玉県') selected @endif>埼玉県</option>
                                    <option value="千葉県" @if(old('prefecture')=='千葉県') selected @endif>千葉県</option>
                                    <option value="東京都" @if(old('prefecture')=='東京都') selected @endif>東京都</option>
                                    <option value="神奈川県" @if(old('prefecture')=='神奈川県') selected @endif>神奈川県</option>
                                    <option value="新潟県" @if(old('prefecture')=='新潟県') selected @endif>新潟県</option>
                                    <option value="富山県" @if(old('prefecture')=='富山県') selected @endif>富山県</option>
                                    <option value="石川県" @if(old('prefecture')=='石川県') selected @endif>石川県</option>
                                    <option value="福井県" @if(old('prefecture')=='福井県') selected @endif>福井県</option>
                                    <option value="山梨県" @if(old('prefecture')=='山梨県') selected @endif>山梨県</option>
                                    <option value="長野県" @if(old('prefecture')=='長野県') selected @endif>長野県</option>
                                    <option value="岐阜県" @if(old('prefecture')=='岐阜県') selected @endif>岐阜県</option>
                                    <option value="静岡県" @if(old('prefecture')=='静岡県') selected @endif>静岡県</option>
                                    <option value="愛知県" @if(old('prefecture')=='愛知県') selected @endif>愛知県</option>
                                    <option value="三重県" @if(old('prefecture')=='三重県') selected @endif>三重県</option>
                                    <option value="滋賀県" @if(old('prefecture')=='滋賀県') selected @endif>滋賀県</option>
                                    <option value="京都府" @if(old('prefecture')=='京都府') selected @endif>京都府</option>
                                    <option value="大阪府" @if(old('prefecture')=='大阪府') selected @endif>大阪府</option>
                                    <option value="兵庫県" @if(old('prefecture')=='兵庫県') selected @endif>兵庫県</option>
                                    <option value="奈良県" @if(old('prefecture')=='奈良県') selected @endif>奈良県</option>
                                    <option value="和歌山県" @if(old('prefecture')=='和歌山県') selected @endif>和歌山県</option>
                                    <option value="鳥取県" @if(old('prefecture')=='鳥取県') selected @endif>鳥取県</option>
                                    <option value="島根県" @if(old('prefecture')=='島根県') selected @endif>島根県</option>
                                    <option value="岡山県" @if(old('prefecture')=='岡山県') selected @endif>岡山県</option>
                                    <option value="広島県" @if(old('prefecture')=='広島県') selected @endif>広島県</option>
                                    <option value="山口県" @if(old('prefecture')=='山口県') selected @endif>山口県</option>
                                    <option value="徳島県" @if(old('prefecture')=='徳島県') selected @endif>徳島県</option>
                                    <option value="香川県" @if(old('prefecture')=='香川県') selected @endif>香川県</option>
                                    <option value="愛媛県" @if(old('prefecture')=='愛媛県') selected @endif>愛媛県</option>
                                    <option value="高知県" @if(old('prefecture')=='高知県') selected @endif>高知県</option>
                                    <option value="福岡県" @if(old('prefecture')=='福岡県') selected @endif>福岡県</option>
                                    <option value="佐賀県" @if(old('prefecture')=='佐賀県') selected @endif>佐賀県</option>
                                    <option value="長崎県" @if(old('prefecture')=='長崎県') selected @endif>長崎県</option>
                                    <option value="熊本県" @if(old('prefecture')=='熊本県') selected @endif>熊本県</option>
                                    <option value="大分県" @if(old('prefecture')=='大分県') selected @endif>大分県</option>
                                    <option value="宮崎県" @if(old('prefecture')=='宮崎県') selected @endif>宮崎県</option>
                                    <option value="鹿児島県" @if(old('prefecture')=='鹿児島県') selected @endif>鹿児島県</option>
                                    <option value="沖縄県" @if(old('prefecture')=='沖縄県') selected @endif>沖縄県</option>
                                    <option value="海外" @if(old('prefecture')=='海外') selected @endif>海外</option></select>
                    <br /><span id="label_address">以降住所</span>　<input type="text" name="address" class="width-half" value="{{ old('address') }}" required></td>
                </tr>
                <tr>
                  <th>電話番号 <span class="text-red">※</span></th><td><input type="text" name="tel" pattern="\d{2,4}-?\d{2,4}-\d{3,4}" value="{{ old('tel') }}" required placeholder="ハイフンありで入力"></td>
                </tr>
                <tr>
                    <th>生年月日 <span class="text-red">※</span></th>
                    <td>
                        <select name="birth_year">
                            <option value>選択してください</option>
                        @for ($i = (date('Y') - 150) ; $i <= (date('Y')) ; $i++) 
                            <option value="{{ $i }}" >{{ $i }}</option> 
                        @endfor
                        </select> 年　<select name="birth_month">
                        <option value>選択してください</option>
                        @for ($i = 1 ; $i <= 12 ; $i++) 
                            <option value="{{ $i }}" >{{ $i }}</option> 
                        @endfor
                        </select> 月　<select name="birth_day">
                        <option value>選択してください</option>
                        @for ($i = 1 ; $i <= 31 ; $i++) 
                            <option value="{{ $i }}" >{{ $i }}</option> 
                        @endfor
                        </select> 日
                    </td>
                </tr>
                <tr>
                  <th>当日緊急連絡先 <span class="text-red">※</span></th><td><input type="text" name="tel2" pattern="\d{2,4}-\d{2,4}-\d{3,4}" value="{{ old('tel2') }}" required placeholder="ハイフンありで入力"> <small>※必ずつながる電話番号をご入力ください</small></td>
                </tr>
                <input type="hidden" name="is_member" value="0">
<!--
                <tr>
                  <th>会員登録 <span class="text-red">※</span></th><td><input type="radio" class="is-member" name="is_member" value="1" checked> 上記内容で会員登録する <input type="radio" class="is-member" name="is_member" value="0"> 会員登録しない</td>
                </tr>
-->
            </table>
        </div>
        @if ($plan->question_flag == 1)
        <p class="mid-title">質問事項</p>
        <div class="content">
            <table>
                <tr>
                  <th>質問事項 @if ($plan->answer_flag == 1) <span class="text-red">※</span> @endif</th><td>{{ $plan->question_content }}<br /><textarea rows="5" name="answer" class="answer" @if ($plan->answer_flag == 1){{ 'required' }}@endif >{{ old('answer') }}</textarea></td>
                </tr>
            </table>
        </div>
        @endif
        @if (request('is_request') == 0)
        <p class="mid-title">料金決済</p>
        <div class="content">
            <table>
                <tr>
                  <th>お支払方法 <span class="text-red">※</span></th>
                  <td>
		  <select name="payment_method">
<!--
                      <option value="0" @if(old('payment_method')==0) selected @endif >現地払い</option>
-->
		      @if ($plan->spot == 1)
                      <option value="0" @if(old('payment_method')==0) selected @endif >現地払い</option>
		      @endif
		      @if ($plan->prepay == 1)
                      <option value="1" @if(old('payment_method')==1) selected @endif >事前払い</option>
		      @endif
		      @if ($plan->cvs == 1)
                      <option value="2" @if(old('payment_method')==2) selected @endif >事前コンビニ決済</option>
		      @endif
		      @if ($plan->card == 1)
                      <option value="3" @if(old('payment_method')==3) selected @endif >事前クレジットカード決済</option>
		      @endif
                  </select>
		  </td>
                </tr>
            </table>
        </div>
        @endif
        <p class="mid-title">ツアー・体験内容</p>
        <table class="content-activity">
            <tbody>
                <tr>
                  <th>実施会社</th><td>株式会社ブルーツーリズム北海道 （電話番号：011-252-2333）</td>
                </tr>
                <tr>
                  <th>プラン</th><td>{{ $plan->name }}</td>
                </tr>
                <tr>
                  <th>集合日時 / 集合場所</th><td><span class="text-red">集合時間に遅れる場合は、必ず実施会社へご連絡ください。</span><br />@if ($plan->meeting_point_flag == 1 && $plan->meeting_point_name)<strong class="meeting-point-placeholder"></strong><br />{{ $plan->meeting_point_name }}
〒{{ $plan->meeting_point_postalcode }}
{{ $plan->meeting_point_prefecture }}{{ $plan->meeting_point_address }}

アクセス：{{ $plan->meeting_point_access }}
@elseif ($plan->meeting_point_flag == 2)
@else
{{ $plan->place_name }}
〒{{ $plan->place_postalcode }}
{{ $plan->place_prefecture }}{{ $plan->place_address }}

アクセス：{{ $plan->place_access }}
@endif
</td>
                </tr>
                <tr>
                  <th>主な方面・場所</th><td><strong class="place-placeholder"></strong><br />{{ $plan->place_name }}
〒{{ $plan->place_postalcode }}{{ $plan->place_prefecture }}{{ $plan->place_address }}

アクセス：{{ $plan->place_access }}
</td>
                </tr>
                <tr>
                  <th>注意事項・その他</th><td>{{ $plan->caution_content }}</td>
                </tr>
                <tr>
                  <th>キャンセル締切</th><td>参加日1日前の17:00まで<br /><small>上記を過ぎた場合は、実施会社まで直接ご連絡ください。</small></td>
                </tr>
            </tbody>
        </table>
        <p class="mid-title">キャンセル規定</p>
        <div class="content">
            <table>
                <tr>
                  <th>キャンセル規定</th>
                  <td><hr />参加日の10日〜8日前 　：　遊び・体験料金の20%<br /><hr />参加日の1週間前〜前日　：　遊び・体験料金の30%<br /><hr />参加日の前日キャンセル　：　遊び・体験料金の40%<br /><hr />参加日の当日キャンセル　：　遊び・体験料金の50%<br /><hr />参加日の無連絡キャンセル：　遊び・体験料金の100%<hr /></td>
                </tr>
            </table>
        </div>
        <input type="hidden" name="plan_id" value="{{ request('plan_id')  }}">
        <input type="hidden" name="date" value="{{ request('date')  }}">
        <input type="hidden" name="is_request" value="{{ request('is_request')  }}">
        @if (request('is_request') == 0)
        <div class="confirm">
            <button type="submit">決済画面へ進む</button><br />
        </div>
        @else
        <div class="confirm">
            <button type="submit">リクエスト予約する</button><br /><small class="text-red">※リクエスト予約後、実施会社からの連絡を必ず確認してください</small>
        </div>
        @endif

    </div>
    </form>
</div>
<footer class="footer_wrap">
    <a href="../company.php">会社概要</a>
    <!-- <a href="../tradelaw.php">特定商取引法に基づく表記</a> -->
    <a href="../privacy.php">プライバシーポリシー</a>
    <!-- <div class="row">
        <div class="col-12 offset-sm-4 col-sm-8">Copyright © BlueTourismHokkaido All rights reserved</div>
    </div> -->
</footer>
<div class="copy">Copyright © BlueTourismHokkaido All rights reserved</div>
</body>
<style type="text/css">

.notice-request {
    text-align: left;
    font-size: 0.8rem;
}
.notice-input {
    text-align: right;
    font-size: 0.8rem;
}


.confirm {
    text-align: center;
    margin: 40px 0 60px 0;
}
.confirm button {
    font-size: 14.rem;
    font-weight: bold;
    padding: 10px 50px;
    background-color: #00b8c8;
    border: none;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}
.confirm button:hover {
    opacity: 0.7;
}

.answer {
    width: 99%;
    margin: 10px 0 0 0;
    border-radius: 5px;
}
.text-red {
    color: red;
}
table {
    width: 100%;
    border-spacing: 0;
    border: 1px solid #ccc;
    margin: 20px 0;
}
input.is-member {
    top: 2px;
    position: relative;
}
.content tr {
}
.content th {
    width: 25%;
    padding: 8px;
    font-size: 0.8rem;
    text-align: left;
    vertical-align: top;
    background-color: #ececec;
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.content tr:last-child th,
.content tr:last-child td {
    border-bottom: 0px;
}
.content td {
    width: 75%;
    padding: 8px;
    font-size: 0.8rem;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    white-space: pre-wrap;
}
.content-activity th {
    width: 25%;
    padding: 8px;
    font-size: 0.8rem;
    text-align: left;
    vertical-align: top;
    background-color: #ececec;
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.content-activity tr:last-child th,
.content-activity tr:last-child td {
    border-bottom: 0px;
}
.content-activity td {
    width: 75%;
    max-width: 600px;
　　overflow-wrap: break-word;
　　word-wrap: break-word;
    word-break:break-all;
    padding: 8px;
    font-size: 0.8rem;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    white-space: pre-wrap;
}

.plan-image {
    display: flex;
}
.plan-image img {
    margin: 20px 30px 0 0;
    width: 100%;
    max-width: 200px;
    max-height: 150px;
}
.plan-title {
    font-size:1.2rem;
    font-weight: bold;
}
.mid-title {
    margin: 30px 0 -10px 0;
    font-weight: bold;
    font-size: 1.2rem;
    color: #00b8c8;
    border-bottom: 2px solid #00b8c8;
}
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

.container-plan .reservation,
.container-plan .detail {
    margin: 30px 0 0 0;
}
.container-plan .page-title {
    padding: 0.2rem 1.3rem;
    border-left: 7px solid #00b8c8;
    font-size: 1.4rem;
    font-weight: bold;
}
.container-plan .price {
    margin: 30px 0;
}
.container-plan .price .type {
    margin: 30px 0 -10px 0 !important;
}
.container-plan .price .normal-price {
    font-size: 1.5rem;
    color: red;
    font-weight: bold;
}
.container-plan .price .before-price {
    font-size: 1.5rem;
}

.reservation_container {
    padding: 1em;
    background-color: #F0F8FF;
    border:1px solid #ccc;
    margin: 20px auto;
}
.width-half {
    width: 50%;
}
.number {
    width: 50px;
    float: right;
    text-align: right;
}
.number-text {
    display: block;
    float: right;
}
hr {
    border-top: 2px dotted #ccc;
    border-right: none;
    border-bottom: none;
    border-left: none;
}

@media screen and (max-width: 767px) {
    .header {
        text-align: center;
        margin: 0px;
    }
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
    .content td select{
    max-width: 250px;
}
}


</style>
<script>
$('select[name="selected-activity"]').change(function() {
    var val = $(this).children('option:selected').text();
    $('.meeting-point-placeholder').text(val);
    $('.place-placeholder').text(val);
});
$('input[name="area"]').change(function() {
    if($(this).val() == "japan"){
        $('input[name="postalcode"]').removeAttr('readonly');
        $('input[name="postalcode"]').removeAttr('style');
        $('select[name="prefecture"]').removeAttr('readonly');
        $('select[name="prefecture"]').removeAttr('style');
        $('select[name="prefecture"]').val(null);
        $('#label_address').text("以降住所");
        $('input[name="tel"]').attr('pattern', '\\d{2,4}-?\\d{2,4}-\\d{3,4}');
        $('input[name="tel"]').attr('placeholder', 'ハイフンありで入力');
        $('input[name="tel2"]').attr('pattern', '\\d{2,4}-?\\d{2,4}-\\d{3,4}');
        $('input[name="tel2"]').attr('placeholder', 'ハイフンありで入力');
    }else{
        $('input[name="postalcode"]').attr('readonly', 'readonly');
        $('input[name="postalcode"]').attr('style', 'background-color: lightgray;');
        $('select[name="prefecture"]').attr('readonly', 'readonly');
        $('select[name="prefecture"]').attr('style', 'background-color: lightgray;pointer-events: none;');
        $('select[name="prefecture"]').val("海外");
        $('#label_address').text("Name of the hotel");
        $('input[name="tel"]').attr('pattern', '\\+\\d{1,5}-?\\d{2,4}-?\\d{2,4}-\\d{3,4}');
        $('input[name="tel"]').attr('placeholder', '+81-90-0000-0000');
        $('input[name="tel2"]').attr('pattern', '\\+\\d{1,5}-?\\d{2,4}-?\\d{2,4}-\\d{3,4}');
        $('input[name="tel2"]').attr('placeholder', '+81-90-0000-0000');
    }
});

function readCookie(name) {
    var c = document.cookie.split('; '),
    cookies = {}, i, C;

    for (i = c.length - 1; i >= 0; i--) {
        C = c[i].split('=');
        cookies[C[0]] = C[1];
     }

     return cookies[name];
}

document.getElementById('reservation-form').addEventListener('submit', function (event) {
    event.preventDefault();

    // inject lang
    if (readCookie('googtrans')) {
        document.getElementById('lang').value = readCookie('googtrans').substring(4).replace('-', '_');
    }

    // inject plan name
    let planName = document.getElementById('plan-title').textContent;
    document.getElementById('plan_name').value = planName;

    // inject activity name
    let activityElement = document.getElementById('selected_activity');
    let activityValue = activityElement.value;
    let activityName = activityElement.options[activityElement.selectedIndex].text;
    document.getElementById('activity_name').value = activityName;

    this.submit();
});
</script>
</html>
