<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">
    {{-- icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- favicon -->
    <link rel="icon" href="/favicon/favicon.ico">
</head>
<style>
    body {
        background-color: #000;
        margin: 0;
        padding: 0;
    }
    a {
        color: #fff;
        text-decoration: none;
    }
    ul {
        list-style-type: none;
    }
</style>
<body>
    <div class="header ">
        <a href="{{ route('index') }}" class="header-title custom-link"><img src="/toppage_image/logo.png" alt="" class="header-logoImg"></a>
        <div id="humMenu">
            <input id="humCheck" type="checkbox">
            <label id="humOpen" for="humCheck"><img src="/icons/btn03-25.png" alt="メニュー" width="40" height="40"></label>
            <label id="humClose" for="humCheck"></label>
            <nav>
              <ul class="inner">
                <li><a href="{{ route('index') }}">トップページ</a></li>
                <li><a href="{{ route('drawing') }}">ドローイングコンテンツ</a></li>
                <li><a href="#lecturepage">コンテンツ解説</a></li>
                <li><a href="{{ route('illustLesson') }}">イラストレッスン</a></li>
                <li><a href="{{ route('contact.contact') }}">お問い合わせ</a></li>
                <li><a href="{{ route('impPlan') }}">Parrot運営募集</a></li>
              </ul>
            </nav>
        </div>
    </div>
    @yield('content')
</body>
<script>
    // Bootstrap トースト
    function showToast() {
        var toastEl = document.getElementById('myToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    }
</script>
</html>