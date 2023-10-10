@extends('layouts.parents')
@section('title', 'ブルーツーリズム北海道 - カード決済結果')
@section('content')
    <div class="px-3 py-3 pt-md-5 mx-auto text-center">
        <ul class="list-unstyled">
            <li></li>
        </ul>
    </div>
    <h5 class="mb-3 p-2 rounded bg-primary text-light">カード決済：取引結果</h5>
    <hr>
    @if( isset($message) &&  $message != null)
        <p class="alert alert-danger">{{$message}}</p>
    @endif
    <table class="table table-striped">
        <p>予約メールを送信しました。決済エラー時やキャンセルなどのお問い合わせは直接実施会社へご連絡ください。</p>
        <tbody>
        <tr>
            <td>取引ID</td>
            <td>{{$orderId}}</td>
        </tr>
        <tr>
            <td>取引ステータス</td>
            <td>{{$mstatus}}</td>
        </tr>
        <tr>
            <td>結果コード</td>
            <td>{{$vResultCode}}</td>
        </tr>
        <tr>
            <td>結果メッセージ</td>
            <td>{{$mErrMsg}}</td>
        </tr>
        <tr>
            <td>カード番号</td>
            <td>{{$reqCardNumber}}</td>
        </tr>
        <tr>
            <td>承認番号</td>
            <td>{{$resAuthCode}}</td>
        </tr>
        </tbody>
    </table>

    <div class="row">

        <div class="col-md-12">
            <hr class="mb-4">
            <a class="btn btn-primary btn"
               href="https://blue-tourism-hokkaido.com/jp">TOPページに戻る</a>
        </div>
    </div>

@endsection
