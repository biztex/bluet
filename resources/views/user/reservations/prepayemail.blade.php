{{ $name_last }} {{ $name_first }}　様

この度はブルーツーリズム北海道からのご予約、誠にありがとうございました。

以下の内容にて予約を承っておりますのでご確認ください。

※キャンセルをご希望の場合は直接実施会社へご連絡ください

【予約情報】
=====================================
予約番号　：　{{ $number }}
予約状況　：　予約確定
プラン名　：　{{ $plan }}　　
お名前　　：　{{ $name_last }} {{ $name_first }}　様
予約日　　：　{{ $date }}
予約時間　：　{{ $activity }}
電話番号　：　{{ $tel }}
メール　　：　{{ $email }}
決済方法　：　{{ $payment }}（下記口座へお振込ください）

振込先口座
----------------------------------------------------
金融機関名：　{{ $bank->name }} （金融機関コード：{{ $bank->code }}）
支店名　　：　{{ $bank->branch_name }}　(支店コード：{{ $bank->branch_code }})
口座種別　：　@if ($bank->type == 0){{'普通'}}@else{{'当座'}}@endif　
口座番号　：　{{ $bank->account_number }}
口座名義　：　{{ $bank->account_name }}
----------------------------------------------------
※恐れ入りますが振込手数料はお客様ご負担にてお願いしております
　
予約人数
----------------------------------------------------
@php
if ($reservation->created_at < date('Y-m-d H:i:s',strtotime('2022-06-29 22:00:00'))){
  foreach($reservation->plan->prices as $i => $price) {
      if ($price->week_flag == 0) {
        echo $price->price_types->name . " / " . number_format($price->price) . " 円 × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->price * $reservation->{'type'.$price->price_types->number.'_number'}) . ' 円' . "\n";
      }
      if ($price->week_flag == 1) {
        echo $price->price_types->name . " / " . number_format($price->{$weekday}) . " 円 × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->{$weekday} * $reservation->{'type'.$price->price_types->number.'_number'}) . ' 円' . "\n";
      }
  }
}else{
  $Number_of_reservations = json_decode($reservation->Number_of_reservations);
  foreach($reservation->plan->prices as $i => $price) {
    if(array_key_exists(sprintf('type%d_number', $price->price_types->number), $Number_of_reservations)){
      if ($price->week_flag == 0) {
        echo $price->price_types->name . " / " . number_format($price->price) . " 円 × " . $Number_of_reservations->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->price * $Number_of_reservations->{'type'.$price->price_types->number.'_number'}) . ' 円' . "\n";
      }
      if ($price->week_flag == 1) {
        echo $price->price_types->name . " / " . number_format($price->{$weekday}) . " 円 × " . $Number_of_reservations->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->{$weekday} * $Number_of_reservations->{'type'.$price->price_types->number.'_number'}) . ' 円' . "\n";
      }
    }
  }
}
@endphp

決済金額合計：{{ number_format($amount) }}円
----------------------------------------------------
=====================================

=====================================
株式会社ブルーツーリズム北海道

お問い合わせ先
メール　　：　blue@quality-t.com
電話番号　：　011-252-2333
公式サイト:　 https://blue-tourism-hokkaido.com/jp
=====================================
