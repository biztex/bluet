{{ $name_last }} {{ $name_first }}　様

この度はブルーツーリズム北海道からのリクエスト予約、誠にありがとうございました。

以下の内容にてリクエスト予約を承っておりますのでご確認ください。

※仮予約状態となっておりますので、必ず実施会社からの連絡をご確認ください

【リクエスト予約情報】
=====================================
予約番号　：　{{ $number }}
予約状況　：　リクエスト予約
プラン名　：　{{ $plan }}　　
お名前　　：　{{ $name_last }} {{ $name_first }}　様
予約日　　：　{{ $date }}
予約時間　：　{{ $activity }}
電話番号　：　{{ $tel }}
メール　　：　{{ $email }}
予約人数
----------------------------------------------------
@php
  foreach($reservation->plan->prices as $i => $price) {
      if ($price->week_flag == 0) {
        echo $price->price_types->name . " / " . number_format($price->price) . " 円 × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->price * $reservation->{'type'.$price->price_types->number.'_number'}) . ' 円' . "\n";
      }
      if ($price->week_flag == 1) {
        echo $price->price_types->name . " / " . number_format($price->{$weekday}) . " 円 × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->{$weekday} * $reservation->{'type'.$price->price_types->number.'_number'}) . ' 円' . "\n";
      }
  }
@endphp

合計：{{ number_format($amount) }}円　※本予約確定後に決済用メールが送られます
----------------------------------------------------
=====================================

=====================================
株式会社ブルーツーリズム北海道

お問い合わせ先
メール　　：　blue@quality-t.com
電話番号　：　011-252-2333
公式サイト:　 https://blue-tourism-hokkaido.com/jp
=====================================
