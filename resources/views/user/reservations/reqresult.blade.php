@extends('layouts.parents')
@section('title', 'ブルーツーリズム北海道 - リクエスト予約完了')
@section('content')
    <div class="px-3 py-3 pt-md-5 mx-auto text-center">
        <ul class="list-unstyled">
            <li></li>
        </ul>
    </div>
    <h5 class="mb-3 p-2 rounded bg-primary text-light">リクエスト予約完了</h5>
    <hr>
    @if( isset($message) &&  $message != null)
        <p class="alert alert-danger">{{$message}}</p>
    @endif
    <table class="table table-striped">
        <tbody>
        <tr>
            <td>リクエスト予約内容をメールで送信しました。実施会社からの連絡をお待ちください。</td>
        </tr>
        </tbody>
    </table>

    <div class="row">

        <div class="col-md-12">
            <hr class="mb-4">
            <a class="btn btn-primary btn"
               href="http://blue-tourism-hokkaido.com/jp/">TOPに戻る</a>
        </div>
    </div>

@endsection
