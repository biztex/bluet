@extends('adminlte::page')

@section('title', '予約管理')

@section('content_header')
@stop

@section('content')
<div class="row mb-2">
  <div class="col-sm-6 mt-3">
    <p>予約管理</p>
  </div>
</div>
<div id="result"></div>
<div class="row mb-2">
  <div class="col-sm-12 mt-4">
    <form method="post" name="form" action="/client/reservations/destroy-selected">
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
        <div class="row">
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
      name: '予約番号',
      sort: {
        enabled: true
      },
      formatter: (_, row) => gridjs.html(`
      <a href="/client/reservations/edit/${row.cells[1].data}" class="row">${row.cells[2].data}</a>
      `)
    }
    ,'予約状況',' 名前',
    {
      name: 'プラン名',
      minWidth: '411px',
      sort: {
        enabled: true
      },
      formatter: (_, row) => gridjs.html(`
      <div class="row">
      ${row.cells[5].data}
      </div>
      `)
    },
    '予約受付日時', '予約確定日時', '決済方法',
    {
      name: 'データ操作',
      sort: false,
        formatter: (_, row) => gridjs.html(`
          <div class="row">
            <a href="/client/reservations/edit/${row.cells[1].data}" class="btn btn-warning btn-sm">編集</a>
            <form method="post" name="form" action="/client/reservations/destroy/${row.cells[1].data}">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm" onClick="return confirmDelete()">削除</button>
            </form>
          </div>
        `)
    }
  ],
  server: {
    url: '/client/reservations/json',
    then: data => data.map(data =>
      ['', data.id, data.order_id, data.status, data.user.name_last + ' ' + data.user.name_first, data.plan.name, data.created_at.slice(0, 10), data.fixed_datetime.slice(0, 10), displayPaymentMethod(data.payment_method)]
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

<script>
function displayPaymentMethod(val) {
  var name = '';
  switch (val){
  case 0:
    name = '現地払い';
    break;
  case 1:
    name = '事前払い';
    break;
  case 2:
    name = 'コンビニ決済';
    break;
  case 3:
    name = 'クレジット決済';
    break;
  }
  return name;
}
</script>
@stop

