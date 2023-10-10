@extends('adminlte::page')

@section('title', '販売管理')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>販売管理</p>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><small>・プランを選択の上、変更したい項目を編集後、「変更する」ボタンを押してください<br />・URLの年と月を書き換えるとその年月のカレンダーに直接移動できます　 例）2022/8/プランID<br />・在庫はプランのデフォルト在庫で充足されます。またプラン設定の販売期間外はデフォルトで「売止」となります</small></div>
                <div class="card-header">
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
                    <form action="/client/stocks/update/{{ $default_plan->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-3 row">
                        <label class="col-md-2 col-form-label text-md-right">対象プラン</label>
                        <div class="col-md-8">
                            <select class="form-control" id="submit_select"name="plan_id">
                              @foreach ($plans as $plan)
                              <option value="{{ $plan->id }}" @if(old('plan_id',$plan->id)==$default_plan->id) selected  @endif>（ @if($plan->is_listed == 0) 休止 @else 掲載中 @endif ）{{ $plan->name }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 mt-2">
                            <small><a href="/client/plans/edit/{{ $default_plan->id }}" target=_blank >(プランを別ページで開く)</a></small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 h4"><a id="prev-month" href=""><i class="fas fa-fw fa-arrow-left"></i></a></div>
                        <div class="col-md-10 center h4 font-weight-bold text-center"><span id="disp-year">{{ $year }}</span> <small class="font-weight-bold">年</small>　<span id="disp-month">{{ $month }}</span> <small class="font-weight-bold">月</small></div>
                        <input type="hidden" id="year">
                        <input type="hidden" id="month">
                        <div class="col-md-1 h4 text-right"><a href="" id="next-month"><i class="fas fa-fw fa-arrow-right"></i></a></div>
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          @foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek)
                          <th class="bg-light text-center">{{ $dayOfWeek }}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dates as $date)
                        @if ($date->dayOfWeek == 0)
                        <tr>
                        @endif
                          <input type="hidden" id="day" name="days[]" value="{{ substr($date, 0 ,10) }}">
                          <td
                            @if ($date->month != date('m'))
                            class=""
                            @endif
                          >
                            <p class="h5" style="margin:0">{{ $date->day }}</p>
                            <hr style="margin:7px 0 7px 0" />
                            <p style="margin:0 0 5px 0"><small>在庫　
                            @foreach ($stocks as $stock)
                              @isset($stock)
                              @if (substr($date, 0 ,10) == $stock->res_date)
                                <input class="text-right" style="width: 50px" name="limit_number[]" value="{{ $stock->limit_number }}" type="text" />
                                @break
                              @endif
                              @endisset
                            @endforeach
                            @isset($stock)
                            @if (substr($date, 0 ,10) != $stock->res_date)
                              <input class="text-right" style="width: 50px" name="limit_number[]" value="{{ $default_plan->res_limit_number }}" type="text" />
                            @endif
                            @else
                              <input class="text-right" style="width: 50px" name="limit_number[]" value="{{ $default_plan->res_limit_number }}" type="text" />
                            @endisset
                              /{{ $default_plan->res_limit_number }}
                            @if($default_plan->res_limit_flag == 0) 人 @else 件 @endif
                            </small></p>
                            <small>販売ステータス</small>
                            <select class="form-control" name="is_active[]">
                            @php
                            $option_count = 0;
                            foreach ($stocks as $stock) {
                                if(isset($stock)) {
                                    if (substr($date, 0 ,10) == $stock->res_date) {
                                        if ($stock->is_active == '1') {
                                             echo'<option value="1" selected>販売</option>';
                                             echo'<option value="0">売止</option>';
                                             $option_count++;
                                        } else if ($stock->is_active == '0') {
                                             echo'<option value="1">販売</option>';
                                             echo'<option value="0" selected>売止</option>';
                                             $option_count++;
                                        }
                                    }
                                }
                            }
                            if ($option_count == 0) {
                                echo'<option value="1">販売</option>';
                                echo'<option value="0" selected>売止</option>';
                            }
                            @endphp
                            </select>
                            <small class="mt-3">予約受付タイプ</small>
                            <select class="form-control" name="res_type[]">
                            @php
                            $option_count = 0;
                            foreach ($stocks as $stock) {
                                if (isset($stock)) {
                                    if (substr($date, 0 ,10) == $stock->res_date) {
                                        if ($stock->res_type == '0') {
                                            echo'<option value="0" selected>即時</option>';
                                            echo'<option value="2">リクエスト</option>';
                                            echo'<option value="1">併用</option>';
                                            $option_count++;
                                        } else if ($stock->res_type == '2') {
                                            echo'<option value="0">即時</option>';
                                            echo'<option value="2" selected>リクエスト</option>';
                                            echo'<option value="1">併用</option>';
                                            $option_count++;
                                        } else if ($stock->res_type == '1') {
                                            echo'<option value="0">即時</option>';
                                            echo'<option value="2">リクエスト</option>';
                                            echo'<option value="1" selected>併用</option>';
                                            $option_count++;
                                        }
                                    }
                                }
                            }
                            if ($option_count == 0) {
                                if ($default_plan->res_type == '0') {
                                    echo'<option value="0" selected>即時</option>';
                                    echo'<option value="2">リクエスト</option>';
                                    echo'<option value="1">併用</option>';
                                } else if ($default_plan->res_type == '2') {
                                    echo'<option value="0">即時</option>';
                                    echo'<option value="2" selected>リクエスト</option>';
                                    echo'<option value="1">併用</option>';
                                } else if ($default_plan->res_type == '1') {
                                    echo'<option value="0">即時</option>';
                                    echo'<option value="2">リクエスト</option>';
                                    echo'<option value="1" selected>併用</option>';
                                }
                            }
                            @endphp
                            </select>
                          </td>
                        @if ($date->dayOfWeek == 6)
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="col-md-6 offset-md-5">
                    <button type="submit" class="btn btn-info" name='action' value='edit'>
                        {{ __('変更する') }}
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@stop

@section('js')
<script type="text/javascript" src="{{asset('js/default.js')}}"></script>
<script>
$(document).ready(function(){
    $('#year').val($('#disp-year').text());
    $('#month').val($('#disp-month').text());
    var planId = $('#submit_select').val();
    if ($('#month').val() == '12') {
        $('#prev-month').attr('href', '/client/stocks/' + $('#year').val() + '/' + (parseInt($('#month').val()) -1 ) + '/' + planId);
        $('#next-month').attr('href', '/client/stocks/' + (parseInt($('#year').val()) + 1) + '/' + '1' + '/' + planId);
    } else if ($('#month').val() == '1'){
        $('#prev-month').attr('href', '/client/stocks/' + (parseInt($('#year').val()) - 1) + '/' + '12' + '/' + planId);
        $('#next-month').attr('href', '/client/stocks/' + $('#year').val() + '/' + (parseInt($('#month').val()) +1 ) + '/' + planId);
    } else {
        $('#prev-month').attr('href', '/client/stocks/' + $('#year').val() + '/' + (parseInt($('#month').val()) -1 ) + '/' + planId);
        $('#next-month').attr('href', '/client/stocks/' + $('#year').val() + '/' + (parseInt($('#month').val()) +1 ) + '/' + planId);
    }
    // プランセレクトしたらPOST
    $("#submit_select").change(function(){
        let planId = $('#submit_select').val();
        window.location.href = '/client/stocks/' + $('#year').val() + '/' + $('#month').val() + '/' + planId;
    });
});

</script>
@stop

