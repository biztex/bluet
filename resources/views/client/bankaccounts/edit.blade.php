@extends('adminlte::page')

@section('title', '口座登録')

@section('content_header')
@stop

@section('content')
<p class="pt-3">
口座登録
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
                    <form action="/client/bankaccounts/update/{{ $bankaccounts->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="id" class="col-md-2 col-form-label text-md-right">{{ __('ID') }}</label>
                            <div class="col-md-6">
                                <input id="id" class="input-group-text text-md-left" type="text" name="id" value="{{ old('$bankaccounts->id', $bankaccounts->id) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('金融機関名') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name',$bankaccounts->name) }}">
                            </div>
                        </div>
<!--
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('サイト公開') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="is_listed">
                                  <option disabled selected>必ずお選びください</option>
                                  <option value="1" @if(old('is_listed',$bankaccounts->is_listed)==1) selected  @endif>許可する</option>
                                  <option value="0" @if(old('is_listed',$bankaccounts->is_listed)==0) selected  @endif>許可しない</option>
                                </select>
                            </div>
                        </div>
-->
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('金融機関コード') }}</label>
                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="{{ old('code',$bankaccounts->code) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('店舗名称') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="branch_name" value="{{ old('branch_name',$bankaccounts->branch_name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('店舗コード') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="branch_code" value="{{ old('branch_code',$bankaccounts->branch_code) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('口座種別') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type">
                                  <option disabled selected>必ずお選びください</option>
                                  <option value="0" @if(old('type',$bankaccounts->type)==0) selected  @endif>普通</option>
                                  <option value="1" @if(old('type',$bankaccounts->type)==1) selected  @endif>当座</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('口座番号') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="account_number" value="{{ old('account_number',$bankaccounts->account_number) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('口座名義') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="account_name" value="{{ old('account_name',$bankaccounts->account_name) }}" placeholder="半角カタカナのみ">
                            </div>
                        </div>
			<!--
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">口座名義相違理由</label>
                            <div class="col-md-6">
                                <textarea id="name" type="textarea" class="form-control" name="diffmemo" rows="5" placeholder="（例）&#13;&#10;・代表者家族の口座名義のため（個人）&#13;&#10;・旧姓の口座名義のため（個人）&#13;&#10;・代金収納会社の口座を利用しているため（法人）">{{ old('diffmemo',$bankaccounts->diffmemo) }}</textarea>
                            </div>
                        </div>
			-->
                        <hr />
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('担当者名') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="staff" value="{{ old('staff',$bankaccounts->staff) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('部署名/役職') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="position" value="{{ old('position',$bankaccounts->position) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('連絡先電話番号') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="tel" value="{{ old('tel',$bankaccounts->tel) }}">
                            </div>
                        </div>
<!--
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('ロゴ画像') }}</label>
                            <div id="div-img1" class="col-md-4">
                              @empty ($bankaccounts->file_path1)
                              <input type="file" name="file_path1">
                              @else
                              <img id="img1" src="/public/uploads/{{ $bankaccounts->file_path1 }}" width="auto" height="150px">
                              <input id="hidden1" type="hidden" name="old_file_path1" value="{{ old('file_path1',$bankaccounts->file_path1) }}">
                              @endempty
                            </div>
                            <div id="div-button1" class="col-md-4 file_path1">
                              @empty ($bankaccounts->file_path1)
                              <input type='button' id="clearbtn1" class="btn btn-light btn-sm" value='画像選択を解除' onClick='clearFile(1)'/>
                              @else
                              <input type='button' id="deletebtn1" class="btn btn-danger btn-sm" value='画像を削除' onClick='deleteFile(1)'/>
                              @endempty
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('ロゴ画像') }}<br /><small>（ダークモード用）</small></label>
                            <div id="div-img2" class="col-md-4">
                              @empty ($bankaccounts->file_path2)
                              <input type="file" name="file_path2">
                              @else
                              <img id="img2" src="/public/uploads/{{ $bankaccounts->file_path2 }}" width="auto" height="150px">
                              <input id="hidden2" type="hidden" name="old_file_path2" value="{{ old('file_path2',$bankaccounts->file_path2) }}">
                              @endempty
                            </div>
                            <div id="div-button2" class="col-md-4 file_path2">
                              @empty ($bankaccounts->file_path2)
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
                                <a href="/client/mypage" class="btn btn-secondary">戻る</a>
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

