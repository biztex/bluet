@extends('adminlte::page')

@section('title', '作成')

@section('content_header')
@stop

@section('content')
<p>
パブリッシャー作成
</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">各項目をご入力の上、「追加する」ボタンを押してください</div>
                <div class="card-body">
                    {{--失敗のメッセージ--}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    <form action="/admin/companies/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('パブリッシャー名') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('サイトタイトル') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="スマートタイムス">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('URL') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="link" value="{{ old('link') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('サブタイトル') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="スマートなニュースをすべての人へ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('出稿日時') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="pubdate" value="{{ old('pubdate') }}" placeholder="Wed, 01 Sep 2021 15:00:00 +0900">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('コピーライト') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="copyright" value="{{ old('copyright') }}" placeholder="© SmartNews, Inc.">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('ロゴ画像') }}</label>
                            <div id="div-img1" class="col-md-4">
                              @empty ($companies->file_path1)
                              <input type="file" name="file_path1">
                              @else
                              <img id="img1" src="/public/uploads/{{ $companies->file_path1 }}" width="auto" height="150px">
                              <input id="hidden1" type="hidden" name="old_file_path1" value="{{ old('file_path1') }}">
                              @endempty
                            </div>
                            <div id="div-button1" class="col-md-4 file_path1">
                              @empty ($companies->file_path1)
                              <input type='button' id="clearbtn1" class="btn btn-light btn-sm" value='画像選択を解除' onClick='clearFile(1)'/>
                              @else
                              <input type='button' id="deletebtn1" class="btn btn-danger btn-sm" value='画像を削除' onClick='deleteFile(1)'/>
                              @endempty
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('ロゴ画像') }}<br /><small>（ダークモード用）</small></label>
                            <div id="div-img2" class="col-md-4">
                              @empty ($companies->file_path2)
                              <input type="file" name="file_path2">
                              @else
                              <img id="img2" src="/public/uploads/{{ $companies->file_path2 }}" width="auto" height="150px">
                              <input id="hidden2" type="hidden" name="old_file_path2" value="{{ old('file_path2') }}">
                              @endempty
                            </div>
                            <div id="div-button2" class="col-md-4 file_path2">
                              @empty ($companies->file_path2)
                              <input type='button' id="clearbtn2" class="btn btn-light btn-sm" value='画像選択を解除' onClick='clearFile(2)'/>
                              @else
                              <input type='button' id="deletebtn2" class="btn btn-danger btn-sm" value='画像2を削除' onClick='deleteFile(2)'/>
                              @endempty
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name='action' value='edit'>
                                    {{ __('追加する') }}
                                </button>
                                <a href="/admin/companies" class="btn btn-secondary">戻る</a>
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
@stop

