@extends('adminlte::page')

@section('title', '基本情報')

@section('content_header')
@stop

@section('content')
<p class="pt-3">
基本情報
</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">変更したい項目を編集後、「変更する」ボタンを押してください</div>
                <div class="card-body">
                    {{--成功もしくは失敗のメッセージ--}}
                    @if (Session::has('message'))
                    <div class="alert alert-primary">
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
                    <form action="/client/companies/update/{{ $companies->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="id" class="col-md-2 col-form-label text-md-right">{{ __('ID') }}</label>
                            <div class="col-md-6">
                                <input id="id" class="input-group-text text-md-left" type="text" name="id" value="{{ old('$companies->id', $companies->id) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('会社名') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name',$companies->name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('都道府県') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="prefecture" value="{{ old('prefecture',$companies->prefecture) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('エリア') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="area" value="{{ old('area',$companies->area) }}" placeholder="札幌／ススキノ・大通">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('郵便番号') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="postal_code" value="{{ old('postal_code',$companies->postal_code) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('住所') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="address" value="{{ old('address',$companies->address) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('マンション・ビル名') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="buildings" value="{{ old('buildings',$companies->buildings) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('問合せ先TEL') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tel_inquiry" value="{{ old('tel_inquiry',$companies->tel_inquiry) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('問合せ先URL') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="url" value="{{ old('url',$companies->url) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">問合せ先備考</label>
                            <div class="col-md-6">
                                <textarea id="name" type="textarea" class="form-control" name="memo" rows="5">{{ old('memo',$companies->memo) }}</textarea>
                            </div>
                        </div>
<!--
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('ロゴ画像') }}</label>
                            <div id="div-img1" class="col-md-4">
                              @empty ($companies->file_path1)
                              <input type="file" name="file_path1">
                              @else
                              <img id="img1" src="/public/uploads/{{ $companies->file_path1 }}" width="auto" height="150px">
                              <input id="hidden1" type="hidden" name="old_file_path1" value="{{ old('file_path1',$companies->file_path1) }}">
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
                            <label class="col-md-2 col-form-label text-md-right">{{ __('ロゴ画像') }}<br /><small>（ダークモード用）</small></label>
                            <div id="div-img2" class="col-md-4">
                              @empty ($companies->file_path2)
                              <input type="file" name="file_path2">
                              @else
                              <img id="img2" src="/public/uploads/{{ $companies->file_path2 }}" width="auto" height="150px">
                              <input id="hidden2" type="hidden" name="old_file_path2" value="{{ old('file_path2',$companies->file_path2) }}">
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
-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name='action' value='edit'>
                                    {{ __('変更する') }}
                                </button>
<!--
                                <a href="/client/companies" class="btn btn-secondary">戻る</a>
-->
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
<script>
function clearFile(i) {
    $('input[name="file_path' + i + '"]').val(null);
}
function deleteFile(i) {
    $('#img' + i).remove();
    $('#deletebtn' + i).remove();
    $('#hidden' + i).remove();
    $('#div-img' + i).append('<input type="file" name="file_path' + i + '">');    
    $('#div-button' + i).append('<input type="button" id="clearbtn' + i + '" class="btn btn-light btn-sm" value="画像選択を解除" onClick="clearFile(' + i + ')"/>');    
}
</script>
@stop

