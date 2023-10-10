@extends('adminlte::page')

@section('title', '会員管理')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>会員管理</p>
  </div>
  <div class="col-sm-6 mt-3">
    <a href="/client/users/create" class="btn btn-primary float-right">新規追加</a>　
    <a href="/client/users/csv" class="btn btn-success float-right mr-3">CSVダウンロード</a>　
  </div>
</div>
<div id="result"></div>
<div class="row mb-2">
  <div class="col-sm-12 mt-4">
    <form method="post" name="form" action="/client/users/destroy-selected">
      @csrf
      <input type="hidden" name="ids">
      <button type="submit" id="delete-selected" class="btn btn-secondary float-right" onClick="return confirmDeleteSelected()" >選択データを削除</button>　
    </form>
  </div>
</div>
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
    limit: 10
  },
  sort: true,
  search: true,
  style: {
    td: {
      padding: '7px 24px'
    }
  },
  columns: [
    { 
      id: 'id',
      name: gridjs.html('<span class="select-items">全選択/解除</span>'),
      width: '0px',
      sort: false,
      formatter: (_, row) => gridjs.html(`
        <div class="text-center">
          <input id="row-data" type="checkbox" name="row-data" value="${row.cells[1].data}">
        </div>
      `),
    },
    { 
      name: 'ID',
      sort: {
        enabled: true
      },
      width: '80px',
      formatter: (_, row) => gridjs.html(`
        <div class="text-center">
          ${row.cells[1].data}
        </div>
      `)
    },
    {
      name: 'メールアドレス',
      width: '320px',
    },
    {
      name: '氏名',
      width: '300px',
    },
    '登録日',
    { 
      name: 'データ操作',
      sort: false,
        formatter: (_, row) => gridjs.html(`
          <div class="row">
            <a href="/client/users/edit/${row.cells[1].data}" class="btn btn-warning btn-sm">編集</a>　
            <form method="post" name="form" action="/client/users/destroy/${row.cells[1].data}">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm" onClick="return confirmDelete()">削除</button>
            </form>
          </div>
        `)
    }
  ],
  server: {
    url: '/client/users/json',
    then: data => data.map(data => 
      ['', data.id, data.email, data.name_last + ' ' + data.name_first, data.created_at.slice(0, 10)]
    )
  } 
}).render(document.getElementById('result'));


</script>

@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@stop

@section('js')
<script type="text/javascript" src="{{asset('js/default.js')}}"></script>
@stop
