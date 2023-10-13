@extends('adminlte::page')

@section('title', '会員編集')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>会員編集</p>
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
                    <form action="/client/users/update/{{ $users->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('ID') }}</label>
                            <div class="col-md-6">
                                <input id="id" class="input-group-text text-md-left" type="text" name="id" value="{{ old('$users->id', $users->id) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('姓') }}</label>
                            <div class="col-md-2">
                                <input id="" type="text" class="form-control" name="name_last" value="{{ old('name_last',$users->name_last) }}">
                            </div>
                            <label class="col-md-1 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('名') }}</label>
                            <div class="col-md-2">
                                <input id="" type="text" class="form-control" name="name_first" value="{{ old('name_first',$users->name_first) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"> {{ __('セイ') }}</label>
                            <div class="col-md-2">
                                <input id="" type="text" class="form-control" name="kana_last" value="{{ old('kana_last',$users->kana_last) }}">
                            </div>
                            <label class="col-md-1 col-form-label text-md-right"> {{ __('メイ') }}</label>
                            <div class="col-md-2">
                                <input id="" type="text" class="form-control" name="kana_first" value="{{ old('kana_first',$users->kana_first) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('電話番号') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="tel" value="{{ old('tel',$users->tel) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('電話番号2') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="tel2" value="{{ old('tel2',$users->tel2) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('メールアドレス') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="email" value="{{ old('email',$users->email) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('メールアドレス2') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="email2" value="{{ old('email2',$users->email2) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('お客様番号') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="customer_number" value="{{ old('customer_number',$users->customer_number) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('性別') }}</label>
                            <div class="col-md-3">
                                <select class="form-control" name="gender">
                                  <option disabled selected>選択してください</option>
                                  <option value="0" @if(old('gender',$users->gender)==0) selected  @endif>回答しない</option>
                                  <option value="1" @if(old('gender',$users->gender)==1) selected  @endif>男性</option>
                                  <option value="2" @if(old('gender',$users->gender)==2) selected  @endif>女性</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('生年月日') }}</label>
                            <div class="col-md-3">
                                <input id="" type="date" class="form-control" name="birth_day" value="{{ old('birth_day',$users->birth_day) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"> {{ __('郵便番号') }}</label>
                            <div class="col-md-3">
                                <input id="" type="text" class="form-control" name="postal_code" value="{{ old('postal_code',$users->postal_code) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> 都道府県</label>
                            <div class="col-md-3">
                                <select class="form-control" name="prefecture">
                                    <option value="">選択してください</option>
                                    <option value="北海道" @if(old('prefecture',$users->prefecture)=='北海道') selected @endif>北海道</option>
                                    <option value="青森県" @if(old('prefecture',$users->prefecture)=='青森県') selected @endif>青森県</option>
                                    <option value="岩手県" @if(old('prefecture',$users->prefecture)=='岩手県') selected @endif>岩手県</option>
                                    <option value="宮城県" @if(old('prefecture',$users->prefecture)=='宮城県') selected @endif>宮城県</option>
                                    <option value="秋田県" @if(old('prefecture',$users->prefecture)=='秋田県') selected @endif>秋田県</option>
                                    <option value="山形県" @if(old('prefecture',$users->prefecture)=='山形県') selected @endif>山形県</option>
                                    <option value="福島県" @if(old('prefecture',$users->prefecture)=='福島県') selected @endif>福島県</option>
                                    <option value="茨城県" @if(old('prefecture',$users->prefecture)=='茨城県') selected @endif>茨城県</option>
                                    <option value="栃木県" @if(old('prefecture',$users->prefecture)=='栃木県') selected @endif>栃木県</option>
                                    <option value="群馬県" @if(old('prefecture',$users->prefecture)=='群馬県') selected @endif>群馬県</option>
                                    <option value="埼玉県" @if(old('prefecture',$users->prefecture)=='埼玉県') selected @endif>埼玉県</option>
                                    <option value="千葉県" @if(old('prefecture',$users->prefecture)=='千葉県') selected @endif>千葉県</option>
                                    <option value="東京都" @if(old('prefecture',$users->prefecture)=='東京都') selected @endif>東京都</option>
                                    <option value="神奈川県" @if(old('prefecture',$users->prefecture)=='神奈川県') selected @endif>神奈川県</option>
                                    <option value="新潟県" @if(old('prefecture',$users->prefecture)=='新潟県') selected @endif>新潟県</option>
                                    <option value="富山県" @if(old('prefecture',$users->prefecture)=='富山県') selected @endif>富山県</option>
                                    <option value="石川県" @if(old('prefecture',$users->prefecture)=='石川県') selected @endif>石川県</option>
                                    <option value="福井県" @if(old('prefecture',$users->prefecture)=='福井県') selected @endif>福井県</option>
                                    <option value="山梨県" @if(old('prefecture',$users->prefecture)=='山梨県') selected @endif>山梨県</option>
                                    <option value="長野県" @if(old('prefecture',$users->prefecture)=='長野県') selected @endif>長野県</option>
                                    <option value="岐阜県" @if(old('prefecture',$users->prefecture)=='岐阜県') selected @endif>岐阜県</option>
                                    <option value="静岡県" @if(old('prefecture',$users->prefecture)=='静岡県') selected @endif>静岡県</option>
                                    <option value="愛知県" @if(old('prefecture',$users->prefecture)=='愛知県') selected @endif>愛知県</option>
                                    <option value="三重県" @if(old('prefecture',$users->prefecture)=='三重県') selected @endif>三重県</option>
                                    <option value="滋賀県" @if(old('prefecture',$users->prefecture)=='滋賀県') selected @endif>滋賀県</option>
                                    <option value="京都府" @if(old('prefecture',$users->prefecture)=='京都府') selected @endif>京都府</option>
                                    <option value="大阪府" @if(old('prefecture',$users->prefecture)=='大阪府') selected @endif>大阪府</option>
                                    <option value="兵庫県" @if(old('prefecture',$users->prefecture)=='兵庫県') selected @endif>兵庫県</option>
                                    <option value="奈良県" @if(old('prefecture',$users->prefecture)=='奈良県') selected @endif>奈良県</option>
                                    <option value="和歌山県" @if(old('prefecture',$users->prefecture)=='和歌山県') selected @endif>和歌山県</option>
                                    <option value="鳥取県" @if(old('prefecture',$users->prefecture)=='鳥取県') selected @endif>鳥取県</option>
                                    <option value="島根県" @if(old('prefecture',$users->prefecture)=='島根県') selected @endif>島根県</option>
                                    <option value="岡山県" @if(old('prefecture',$users->prefecture)=='岡山県') selected @endif>岡山県</option>
                                    <option value="広島県" @if(old('prefecture',$users->prefecture)=='広島県') selected @endif>広島県</option>
                                    <option value="山口県" @if(old('prefecture',$users->prefecture)=='山口県') selected @endif>山口県</option>
                                    <option value="徳島県" @if(old('prefecture',$users->prefecture)=='徳島県') selected @endif>徳島県</option>
                                    <option value="香川県" @if(old('prefecture',$users->prefecture)=='香川県') selected @endif>香川県</option>
                                    <option value="愛媛県" @if(old('prefecture',$users->prefecture)=='愛媛県') selected @endif>愛媛県</option>
                                    <option value="高知県" @if(old('prefecture',$users->prefecture)=='高知県') selected @endif>高知県</option>
                                    <option value="福岡県" @if(old('prefecture',$users->prefecture)=='福岡県') selected @endif>福岡県</option>
                                    <option value="佐賀県" @if(old('prefecture',$users->prefecture)=='佐賀県') selected @endif>佐賀県</option>
                                    <option value="長崎県" @if(old('prefecture',$users->prefecture)=='長崎県') selected @endif>長崎県</option>
                                    <option value="熊本県" @if(old('prefecture',$users->prefecture)=='熊本県') selected @endif>熊本県</option>
                                    <option value="大分県" @if(old('prefecture',$users->prefecture)=='大分県') selected @endif>大分県</option>
                                    <option value="宮崎県" @if(old('prefecture',$users->prefecture)=='宮崎県') selected @endif>宮崎県</option>
                                    <option value="鹿児島県" @if(old('prefecture',$users->prefecture)=='鹿児島県') selected @endif>鹿児島県</option>
                                    <option value="沖縄県" @if(old('prefecture',$users->prefecture)=='沖縄県') selected @endif>沖縄県</option>
                                    <option value="海外" @if(old('prefecture',$users->prefecture)=='海外') selected @endif>海外</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> {{ __('住所') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="address" value="{{ old('address',$users->address) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">{{ __('メモ（社内用）') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="memo" value="{{ old('memo',$users->memo) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('新パスワード') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="※入力がない場合パスワードは更新されません">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('パスワード確認') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info" name='action' value='edit'>
                                    {{ __('変更する') }}
                                </button>
                                <a href="/client/users" class="btn btn-secondary">戻る</a>
                            </div>
                        </div>
                    </form>
                    <hr />
                    <div class="form-group row mt-3 bg-dark">
                        <label class="col-md-10 col-form-label text-md-left"><span class="h5"><i class="fas fa-fw fa-calendar-check"></i> 会員予約履歴</span></label>
                    </div>
                    <div id="result"></div> 
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

new gridjs.Grid ({
  language: {
    'search': {
      'placeholder': '検索キーワード'
    },
    'pagination': {
      'previous': '前のページ',
      'next': '次のページ',
    },
    'loading': 'ロード中...',
    'noRecordsFound': 'データはありません',
    'error': 'データの取得に失敗しました',
  },
  pagination: {
    limit: 20
  },
  sort: true,
//  search: true,
  style: {
    td: {
      padding: '7px 24px'
    }
  },
  columns: [
    { 
      name: 'ID',
      sort: {
        enabled: true
      },
      width: '80px',
      formatter: (_, row) => gridjs.html(`
        <div class="text-center">
          ${row.cells[0].data}
        </div>
      `)
    },
    { 
      name: '予約番号',
      formatter: (_, row) => gridjs.html(`
        <a href="/client/reservations/edit/${row.cells[0].data}" >
          ${row.cells[1].data}
        </a>
      `)
    },
    '予約ステータス',' 名前','プラン名','予約受付日時'
  ],
  server: {
    url: "/client/reservations/json/{{ $users->id }}",
    then: data => data.map(data => 
      [data.id, data.order_id == null ? '未登録' : data.order_id, data.status, data.user.name_last + ' ' + data.user.name_first, data.plan.name.slice(0, 15), data.created_at.slice(0, 10)]
    )
  } 
}).render(document.getElementById('result'));


</script>
@stop

