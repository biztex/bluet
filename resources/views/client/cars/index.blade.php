@extends('adminlte::page')

@section('title', '車両管理')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6">
    <p>車両管理</p>
    </div>
    <div class="col-sm-6">
      <a href="/publishers/create" class="btn btn-success float-right">新規追加</a>　
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
    limit: 30
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
      name: '選択',
      sort: false,
        formatter: (_, row) => gridjs.html(`
          <div class="row">
            <input type="checkbox" value="${row.cells[1].data}">
          </div>
        `)
    },
    'ID','パブリッシャー名','サイトタイトル','URL',
    { 
      name: 'データ操作',
      sort: false,
        formatter: (_, row) => gridjs.html(`
          <div class="row">
            <a href="/publishers/edit/${row.cells[0].data}" class="btn btn-warning btn-sm">編集</a>　
            <form method="post" name="form" action="/publishers/destroy/${row.cells[0].data}">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm" onClick="return confirmDelete()">削除</button>
            </form>
          </div>
        `)
    }
  ],
  server: {
    url: '/admin/cars/json',
    then: data => data.map(data => 
      [data.id, data.name, data.title, data.link]
    )
  } 
}).render(document.getElementById('result'));
</script>
@stop

@section('css')
@stop

@section('js')
<script type="text/javascript">
  function confirmDelete(){
      var checked = confirm("【確認】本当に削除してよろしいですか？");
      if (checked == true) {
          return true;
      } else {
          return false;
      }
  }
</script>
@stop

