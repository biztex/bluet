@extends('adminlte::page')

@section('title', '車両管理')

@section('content_header')
@stop

@section('content')


<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>車両管理</p>
  </div>
  <div class="col-sm-6 mt-3">
    <a href="/admin/publishers/create" class="btn btn-primary float-right">新規追加</a>　
  </div>
</div>
<div id="result"></div>
<div class="row mb-2">
  <div class="col-sm-12 mt-4">
    <form method="post" name="form" action="/admin/publishers/destroy-selected">
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
      'previous': '前ページ',
      'next': '次ページ',
    },
    'loading': 'ロード中...',
    'noRecordsFound': 'データはありません',
    'error': 'データの取得に失敗しました',
  },
  pagination: {
    limit: 30
  },
  sort: true,
  search: true,
  style: {
    td: {
      padding: '5px 10px'
    }
  },
  columns: [
    { 
      id: 'id',
      name: gridjs.html('<span class="select-items">全選択</span>'),
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
    'パブリッシャー名','サイトタイトル','URL', '公開日',
    { 
      name: 'データ操作',
      sort: false,
      formatter: (_, row) => gridjs.html(`
        <div class="row ml-2">
          <a href="/admin/publishers/edit/${row.cells[1].data}" class="btn btn-warning btn-sm">編集</a>　
          <a href="/admin/publishers/replicate/${row.cells[1].data}" class="btn btn-info btn-sm">複製</a>　
          <form method="post" name="form" action="/publishers/destroy/${row.cells[1].data}">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onClick="return confirmDelete()">削除</button>
          </form>
        </div>
      `)
    }
  ],
  server: {
    url: '/admin/publishers/json',
    then: data => data.map(data => 
      [ '', data.id, data.name, data.title, data.link, data.pubdate.slice(0, 25)]
    )
  } 
}).render(document.getElementById('result'));
</script>
@stop

@section('css')
@stop

@section('js')
@stop

