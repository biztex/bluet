@extends('layouts.parents')
@section('title', 'ブルーツーリズム北海道 - クレジットカード決済')
@section('content')
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">予約料金内訳</span>
                <span class="badge badge-secondary badge-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <h6 class="my-0"><strong>プラン名：{{ $reservation->plan->name }}</strong></h6>
                    </div>
                </li>
@php
  foreach($reservation->plan->prices as $i => $price) {
      echo '<li class="list-group-item d-flex justify-content-between">';
      echo '<div>';
      echo '<h6 class="my-0">';
      if ($price->week_flag == 0) {
        echo $price->price_types->name . " / &yen;" . number_format($price->price) . " × " . $reservation->{'type'.$price->price_types->number.'_number'};
        echo '</h6>';
        echo '</div>';
        echo '<span class="text-muted">&yen;' . number_format($price->price * $reservation->{'type'.$price->price_types->number.'_number'}) . '</span>';
      }
      if ($price->week_flag == 1) {
        echo $price->price_types->name . " / &yen;" . number_format($price->{$weekday}) . " × " . $reservation->{'type'.$price->price_types->number.'_number'};
        echo '</h6>';
        echo '</div>';
        echo '<span class="text-muted">&yen;' . number_format($price->{$weekday} * $reservation->{'type'.$price->price_types->number.'_number'}) . '</span>';
      }
      echo '</li>';
  }
@endphp
                <li class="list-group-item d-flex justify-content-between">
                    <strong>合計金額</strong>
                    <strong>&yen;{{ number_format($amount) }}</strong>
                </li>
            </ul>
        </div>

        <div class="col-md-8 order-md-1">
<!--
            <div class="alert alert-danger">
            </div>
-->
            <h5 class="mb-3 p-2 rounded bg-primary text-light">カード決済：決済請求</h5>
            <div class="row">
                <div class="col-1 col-sm-1 h2"><i class="fab fa-cc-visa"></i></div>
                <div class="col-1 col-sm-1 h2"><i class="fab fa-cc-mastercard"></i></div>
                <div class="col-1 col-sm-1 h2"><i class="fab fa-cc-jcb"></i></div>
                <div class="col-1 col-sm-1 h2"><i class="fab fa-cc-diners-club"></i></div>
                <div class="col-1 col-sm-1 h2"><i class="fab fa-cc-amex"></i></div>
            </div>
            <hr class="mb-4">
            <form method="post" action="{{ url('/card') }}" class="needs-validation" onclick="return false;"
                  id="token_form" novalidate>
                @csrf
                <input type="hidden" id="token_api_key" value="{{ $tokenApiKey }}">
                <input type="hidden" id="token" name="token" value="">


                <div class="mb-3">
                    <label for="orderId">予約番号</label>
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <input type="text" class="form-control" id="reservation_id" name="resevation_id" value="{{ $orderId }}" readonly>
                            <input type="hidden" class="form-control" id="orderId" name="orderId" value="{{ $orderId }}" maxlength="100">
                        </div>
                    </div>

                </div>
<!--
                <div class="mb-3">
                    <label for="amount">金額</label>
                    <input type="hidden" class="form-control" id="amount" name="amount" value="" maxlength="8" required>
                </div>
                <div class="mb-3">
                    <label for="withCapture">与信方法</label>
                    <select class="form-select" id="withCapture" name="withCapture">
                        <option value="false">与信のみ(与信成功後に売上処理を行う必要があります)</option>
                        <option value="true">与信売上(与信と同時に売上処理も行います)</option>
                    </select>
                </div>
-->

                <div class="mb-3">
                    <label for="card_number">クレジットカード番号</label>
                    <input type="text" inputmode="numeric" class="form-control" id="card_number" placeholder="" pattern="[0-9]{14,16}"
                           maxlength="16" required>
                </div>

                <div class="mb-3">
                    <label for="cc_exp">有効期限</label>
                    <input type="text" class="form-control" id="cc_exp" placeholder="MM/YY" pattern="[0-9/]{4,5}"
                           maxlength="5" required>
                    <p class="text-warning">※形式：MM/YY</p>
                </div>

                <div class="mb-3">
                    <label for="cc_csc">セキュリティコード</label>
                    <input type="text" inputmode="numeric" class="form-control" id="cc_csc" placeholder="" pattern="[0-9]{3,4}"
                           maxlength="4" required>
                </div>

                <div class="mb-3">
                    <label for="jpo1">支払方法</label>
                    <select class="form-select" id="jpo1" name="jpo1">
                        <option value="10">一括払い(支払回数の設定は不要)</option>
                        <option value="21">ボーナス一括(支払回数の設定は不要)</option>
                        <option value="61">分割払い(支払回数を設定してください)</option>
                        <option value="80">リボ払い(支払回数の設定は不要)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jpo2">支払回数</label>
                    <input type="text" class="form-control" id="jpo2" name="jpo2" placeholder="" pattern="[0-9]{2}"
                           maxlength="2" required>
                    <p class="text-warning">※一桁の場合は数値の前に"0"をつけてください。(例:01)</p>
                </div>

                <hr class="mb-4">
                <input type="hidden" class="form-control" id="amount" name="amount" value="{{ $amount }}">
                <input type="hidden" class="form-control" id="withCapture" name="withCapture" value="true">
                <input type="hidden" class="form-control" id="reservation_id" name="reservation_id" value="{{ $reservation->id }}">
                <button class="btn btn-success btn" id="proceed_payment" type="submit">決済して予約確定</button>
            </form>
        </div>

    </div>
@endsection
