{{ $name_last }} {{ $name_first }}　様

この度はブルーツーリズム北海道からの予約、誠にありがとうございました。

以下予約情報をご確認の上、以下決済URLからお手続きください。

【決済用URL】
=====================================
● クレジットカード決済URL　　：{{ $url_card }}
=====================================

【予約情報】
=====================================
予約番号　：　{{ $number }}
予約状況　：　決済待ち
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


@lang('この度はブルーツーリズム北海道からの予約、誠にありがとうございました。')


@lang('以下予約情報をご確認の上、以下決済URLからお手続きください。')


【@lang('決済用URL')】
=====================================
● @lang('クレジットカード決済URL')　　：{{ $url_card }}
=====================================

【@lang('予約情報')】
=====================================
@lang('予約番号')　：　{{ $number }}
@lang('予約状況')　：　@lang('決済待ち')

@lang('プラン名')　：　{{ $plan }}　　
@lang('お名前')　　：　@lang(':lastName :firstName 様', ['lastName' => $name_last, 'firstName' => $name_first])

@lang('予約日')　　：　{{ $date }}
@lang('予約時間')　：　{{ $activity }}
@lang('電話番号')　：　{{ $tel }}
@lang('メール')　　：　{{ $email }}
@lang('予約人数')


----------------------------------------------------
@php
foreach($reservation->plan->prices as $i => $price) {
    if ($price->week_flag == 0) {
        echo __($price->price_types->name) . " / " . number_format($price->price) . ' ' . __('円') . " × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->price * $reservation->{'type'.$price->price_types->number.'_number'}) . ' ' . __('円') . "\n";
    }
    if ($price->week_flag == 1) {
        echo __($price->price_types->name) . " / " . number_format($price->{$weekday}) . ' ' . __('円') . " × " . $reservation->{'type'.$price->price_types->number.'_number'} . ' = ' . number_format($price->{$weekday} * $reservation->{'type'.$price->price_types->number.'_number'}) . ' ' . __('円') . "\n";
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
