@extends('adminlte::page')

@section('title', '予約編集')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>予約編集</p>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">変更したい項目を編集後、「変更する」ボタンを押してください</div>
                <div class="card-body">
                    {{--成功もしくは失敗のメッセージ--}}
                    @if (Session::has('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                    @endif
                    <form action="/client/reservations/update/{{ $reservations->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="id" class="col-md-2 col-form-label text-md-right">{{ __('ID') }}</label>
                            <div class="col-md-6">
                                <input id="id" class="input-group-text text-md-left" type="text" name="id" value="{{ old('$reservations->id', $reservations->id) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('プラン名') }}</label>
                            <div class="col-md-6">
                                <a target="_blank" class="font-weight-bold" style="line-height: 2.4;" href="/client/plans/edit/{{ $reservations->plan->id }}">{{ $reservations->plan->name }} <small>（別ページで開く）</small></i></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約番号') }}</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="" value="{{ $reservations->order_id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('受付タイプ') }}</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="" value="@if ($reservations->plan->res_type == '0') 即時 @elseif ($reservations->plan->res_type == '1') 即時・リクエスト併用 @else リクエスト予約 @endif" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約ステータス') }}</label>
                            <div class="col-md-3">
                                <select class="form-control" name="status">
                                  <option disabled selected>選択してください</option>
                                  <option value="予約確定" @if(old('status',$reservations->status)=='予約確定') selected  @endif>予約確定</option>
                                  <option value="リクエスト予約" @if(old('status',$reservations->status)=='リクエスト予約') selected  @endif>リクエスト予約</option>
                                  <option value="未決済" @if(old('status',$reservations->status)=='未決済') selected  @endif>未決済</option>
                                  <option value="キャンセル" @if(old('status',$reservations->status)=='キャンセル') selected  @endif>キャンセル</option>
                                </select>
                            </div>
                            <div class="col-md-4">
			        <small class="text-red">※クレジットカード決済の場合、決済日から60日を超えるとDGFT側の決済をキャンセルすることはできません</small>
                            </div>
                        </div>
                        @foreach ($reservations->plan->activities as $activity)
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">体験日時({{ $loop->index + 1 }})</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="" value="{{ $reservations->activity_date }}　 {{ $activity->start_hour }}:{{ $activity->start_minute }} 〜 {{ $activity->end_hour}}:{{ $activity->end_minute }}" disabled>
                            </div>
                        </div>
                        @endforeach
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約受付日時') }}</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="" value="{{ substr($reservations->created_at,0, 16) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約確定日時') }}</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="" value="{{ substr($reservations->fixed_datetime,0, 16) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約者') }}</label>
                            <div class="col-md-6">
                                <a target="_blank" class="font-weight-bold" style="line-height: 2.4;" href="/client/users/edit/{{ $reservations->user->id }}">{{ $reservations->user->name_last }} {{ $reservations->user->name_first }} <small>（別ページで開く）</small></i></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約者への質問') }}</label>
                            <div class="col-md-6">
                                <textarea id="name" type="text" class="form-control" name="" rows="5" disabled>{{ $reservations->plan->question_content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('予約者からの回答') }}</label>
                            <div class="col-md-6">
                                <textarea id="name" type="text" class="form-control" name="" rows="5" disabled>{{ $reservations->answer }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('支払方法') }}</label>
                            <div class="col-md-3">
			        <select name="payment_method" class="form-control">
				    <option value="" selected>選択してください</option>
				    <option value="0" @if(old('payment_method', $reservations->payment_method)=='0') selected @endif>現地払い</option>
				    <option value="1" @if(old('payment_method', $reservations->payment_method)=='1') selected @endif>事前払い</option>
				    <option value="2" @if(old('payment_method', $reservations->payment_method)=='2') selected @endif>事前コンビニ決済</option>
				    <option value="3" @if(old('payment_method', $reservations->payment_method)=='3') selected @endif>事前クレジットカード決済</option>
				</select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('その他 備考・特記事項') }}</label>
                            <div class="col-md-6">
                                <textarea id="name" type="text" class="form-control" name="memo" rows="5" placeholder="※登録された内容は、予約情報として保存されます。">{{ $reservations->memo }}</textarea>
                            </div>
                        </div>
                    <div class="form-group row mt-3 bg-dark">
                        <label class="col-md-10 col-form-label text-md-left"><span class="h5"><i class="fas fa-fw fa-th-list"></i> 料金情報</span></label>
                    </div>
                    <div class="form-group row mb-2 float-right">
                        <div class="col-md-2">
		    	<input type="button" class="update-price btn btn-sm btn-secondary" value="価格表更新">
                        </div>
                    </div>
                <table class="table table-bordered">
                  <thead class="bg-light">
                    <tr>
                      <th style="width: 40%; text-align: center;">料金区分</th>
                      <th style="width: 15%; text-align: center;">単価</th>
                      <th style="width: 15%; text-align: center;">人数</th>
                      <th style="width: 30%; text-align: center;">金額</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservations->plan->prices as $price)
                    <tr>
<td>
{{ $price->price_types->name }}
</td>

@if ($price->week_flag == 0)
<td style="text-align: right;">{{ number_format($price->price) }} 円</td>
<input type="hidden" id="price{{$loop->index + 1}}" value="{{ $price->price }}">
@else
<td style="text-align: right;">{{ number_format($price->{$weekday}) }} 円</td>
<input type="hidden" id="price{{$loop->index + 1}}" value="{{ $price->{$weekday} }}">
@endif
<td style="text-align: right; padding-left: 50px;"><div class="row"><input id="per-number{{ ($loop->index + 1) }}" class="number-input" name="type{{$price->type}}_number" value="@php $i = $price->type;echo $reservations->{'type' . $i . '_number'};@endphp"> <span style="line-height: 1.8;" class="col-md-1"> 名</span></div></td>
<input type="hidden" class="col-md-6 text-right" value="@php $i = $price->type;echo $reservations->{'type' . $i . '_number'};@endphp">

<td id="per-text-price{{ ($loop->index + 1) }}" style="text-align: right;">
@php
$i = $price->type;
$type_number = $reservations->{'type' . $i . '_number'};
if ($price->week_flag == 0) {
    $result = ($type_number * $price->price);
} else {
    $result = $type_number * $price->{$weekday};
}
echo $result . ' 円';
@endphp
</td>
<input type="hidden" id="per-price{{ ($loop->index + 1) }}" value="{{ $result }}">
                    </tr>
                    @endforeach

                    <tr>
                      <td colspan="2" class="bg-light font-weight-bold">人数・金額合計</td>
                      <td id="total-number" style="text-align: center;" class="font-weight-bold"></td>
                      <td id="total-price" style="text-align: right;" class="font-weight-bold"></td>
                    </tr>
                  </tbody>
                </table>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
				<input type="submit" class="submit btn btn-primary" data-action="/client/reservations/update/{{ $reservations->id }}" value="変更する">
				<input type="submit" class="submit-send btn btn-danger" data-action="/client/reservations/sendpaymentmail/{{ $reservations->id }}" value="決済メール送信">
                                <a href="/client/reservations/" class="btn btn-secondary">戻る</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
<script type="text/javascript" src="{{asset('js/default.js')}}"></script>
<script>
$(document).ready(function(){
    var totalNumber = 0,
        totalPrice = 0;
    for (var i = 1 ; i <= 6 ; i++) {
        if ($('#per-number' + i).val()) {
            var tmpPerNumber = $.trim($('#per-number' + i).val()),
                perNumber = parseInt(tmpPerNumber); 
                totalNumber += perNumber;
        }
        if ($('#per-price' + i).val()) {
            var tmpPerPrice = $.trim($('#per-price' + i).val()),
                perPrice = parseInt(tmpPerPrice); 
                totalPrice += perPrice;
        }
    }
    $('#total-number').text(totalNumber + ' 名');
    $('#total-price').text(totalPrice.toLocaleString() + ' 円');
});
$('.update-price').click(function() {
    var totalNumber = 0,
        totalPrice = 0;
    for (var i = 1 ; i <= 6 ; i++) {
        if ($('#per-number' + i).val()) {
            var tmpPerNumber = $.trim($('#per-number' + i).val()),
                perNumber = parseInt(tmpPerNumber); 
            totalNumber += perNumber;
            var tmpPrice = $.trim($('#price' + i).val()),
                price = parseInt(tmpPrice); 
            price = perNumber * price;
            $('#per-text-price' + i).text(price.toLocaleString() + " 円");
                totalPrice += price;
        }
    }
    $('#total-number').text(totalNumber + ' 名');
    $('#total-price').text(totalPrice.toLocaleString() + ' 円');
});

// 送信ボタン切り分け
$('.submit').click(function() {
  $(this).parents('form').attr('action', $(this).data('action'));
  $(this).parents('form').submit();
});
$('.submit-send').click(function() {
  var checked = confirm("【確認】送信してよろしいですか？");
  if (checked == true) {
      $(this).parents('form').attr('action', $(this).data('action'));
      $(this).parents('form').submit();
      return true;
  } else {
      return false;
  }
});
</script>
@stop

