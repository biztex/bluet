@extends('layouts.parents')
@section('title', 'ブルーツーリズム北海道 - 決済方法選択')
@section('content')
    <main class="container">
        <div class="px-3 py-3 pt-md-5 mx-auto text-center">
            <p class="display-6">決済方法選択</p>
            <p class="">予約番号：{{ $reservation->number }}</p>
            <p class="lead">決済方法をお選びください</p>
        </div>
        <div class="row mb-3 text-center">
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal"><i class="far fa-credit-card"></i> カード</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>&nbsp</li>
                            <li>クレジットカード決済</li>
                            <li>&nbsp</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary"
                                onclick="location.href='{{ url('/card/') }}'">
                            決済手続きへ
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal"><i class="fas fa-store-alt"></i> コンビニ</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>&nbsp</li>
                            <li>コンビニ決済申し込み</li>
                            <li>&nbsp</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary"
                                onclick="location.href='{{ url('/cvs/') }}'">決済手続きへ
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
