{{ $name_last }} {{ $name_first }}　様

This message is for booking confirmation presented by blue tourism Hokkaido co.,Ltd.

For foreigners : We will send you in detail in English later.

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
決済方法　：　{{ $payment }} （現地にてご案内いたします）
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
    if(array_key_exists(sprintf('type%d_number', $price->price_types->number), json_decode($reservation->Number_of_reservations, true))){
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

{{-- Translated text for another language --}}
@if (app()->getLocale() !== 'ja')
________________________________________________________________________________________
@lang(':lastName :firstName 様', ['lastName' => $name_last, 'firstName' => $name_first])


@lang('この度はブルーツーリズム北海道からのご予約、誠にありがとうございました。')


@lang('以下の内容にて予約を承っておりますのでご確認ください。')


※@lang('キャンセルをご希望の場合は直接実施会社へご連絡ください')


【@lang('予約情報')】
=====================================
@lang('予約番号')　：　{{ $number }}
@lang('予約状況')　：　@lang('予約確定')

@lang('プラン名')　：　{{ $plan }}
@lang('お名前')　　：　@lang(':lastName :firstName 様', ['lastName' => $name_last, 'firstName' => $name_first])

@lang('予約日')　　：　{{ $date }}
@lang('予約時間')　：　{{ $activity }}
@lang('電話番号')　：　{{ $tel }}
@lang('メール')　　：　{{ $email }}
@lang('決済方法')　：　@lang($payment) （@lang('現地にてご案内いたします')）
@lang('予約人数')

----------------------------------------------------
@php
if ($reservation->created_at < date('Y-m-d H:i:s',strtotime('2022-06-29 22:00:00'))){
foreach($reservation->plan->prices as $i => $price) {
    if ($price->week_flag == 0) {
        echo __($price->price_types->name) . " / " . number_format($price->price) . ' ' . __('円') . " × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->price * $reservation->{'type'.$price->price_types->number.'_number'}) . ' ' . __('円') . "\n";
    }
    if ($price->week_flag == 1) {
        echo __($price->price_types->name) . " / " . number_format($price->{$weekday}) . ' ' . __('円') . " × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->{$weekday} * $reservation->{'type'.$price->price_types->number.'_number'}) . ' ' . __('円') . "\n";
    }
}
}else{
$Number_of_reservations = json_decode($reservation->Number_of_reservations);
foreach($reservation->plan->prices as $i => $price) {
    if(array_key_exists(sprintf('type%d_number', $price->price_types->number), json_decode($reservation->Number_of_reservations, true))){
    if ($price->week_flag == 0) {
        echo __($price->price_types->name) . " / " . number_format($price->price) . ' ' . __('円') . " × " . $Number_of_reservations->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->price * $Number_of_reservations->{'type'.$price->price_types->number.'_number'}) . ' ' . __('円') . "\n";
    }
    if ($price->week_flag == 1) {
        echo __($price->price_types->name) . " / " . number_format($price->{$weekday}) . ' ' . __('円') . " × " . $Number_of_reservations->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->{$weekday} * $Number_of_reservations->{'type'.$price->price_types->number.'_number'}) . ' ' . __('円') . "\n";
    }
    }
}
}
@endphp

@lang('決済金額合計')：{{ number_format($amount) }}@lang('円')

----------------------------------------------------
=====================================

=====================================
@lang('株式会社ブルーツーリズム北海道')

@lang('お問い合わせ先')

@lang('メール')　　：　blue@quality-t.com
@lang('電話番号')　：　011-252-2333
@lang('公式サイト'):　 https://blue-tourism-hokkaido.com/jp
=====================================
@endif
