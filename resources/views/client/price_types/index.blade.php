@extends('adminlte::page')

@section('title', '料金区分管理')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>料金区分管理</p>
    <small>※表示順の数字をクリックすると順番を編集できます</small>
  </div>
  <div class="col-sm-6 mt-3">
    <a href="/client/price_types/create" class="btn btn-primary float-right">新規追加</a>　
  </div>
</div>
<div id="result"></div>
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
  search: true,
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
      name: '料金区分番号',
    },
    {
      name: '表示順',
      formatter: (_, row) => gridjs.html(`
        <div class="row sort-ajax-price-type" style="cursor: pointer; margin-left: 45px;" data-id="${row.cells[0].data}" data-sort="${row.cells[2].data}">${row.cells[2].data}</div>
        <input class="input-sort-ajax-price-type" type="number" min="1" max="999" name="input-sort-ajax-price-type" style="display:none;" data-id="${row.cells[0].data}" value="${row.cells[2].data}" />
      `)
    },
    {
      name: '料金区分名',
    },
    { 
      name: 'データ操作',
      sort: false,
        formatter: (_, row) => gridjs.html(`
          <div class="row">
            <a href="/client/price_types/edit/${row.cells[0].data}" class="btn btn-warning btn-sm">編集</a>　
          </div>
        `)
    }
  ],
  server: {
    url: '/client/price_types/json',
    then: data => data.map(data => 
      [data.id, data.number, data.sort, data.name]
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
