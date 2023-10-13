<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/public/css/template.css">
</head>
<body class="bg-light">
    <div class="header">
        <img src="{{asset('img/logo.png')}}" alt="BlueTourismHokkaido" width="200">
    </div>
    <div class="container p-3">

    @yield('content')
    <footer class="pt-4 my-md-5 pt-md-5 ">
        <div class="row">
            <div class="col-12 copy">Copyright © BlueTourismHokkaido All rights reserved</div>
        </div>
    </footer>

    </div>
<script src=" {{ mix('js/app.js') }} "></script>
<script src=" {{ asset('js/menu.js') }} "></script>
</body>
</html>
