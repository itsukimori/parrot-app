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
    .drawingContent-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: azure;
        font-size: 45px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 70px;
        z-index: 9999;
    }
    /* ハンバーガーメニュー */
    #drawingContent-humMenu {
        padding: 12px;
    }

    #drawingContent-humCheck, #drawingContent-humClose { display:none; }
    #drawingContent-humOpen {
        display: block;
        width: 58px;
        cursor: pointer;
    }
    #drawingContent-humOpen:hover {
        opacity: 0.5;
    }
    #drawingContent-humOpen img { display: block; }
    #drawingContent-humClose, .drawingContent-nav {
        position: fixed;
        right: 0;
        top: 0;
        height: 100%;
    }
    #drawingContent-humClose {
        z-index: 2;
        width: 100%;
        background: gray;
        opacity: 0.8;
        transition: 0.5s;
    }
    .drawingContent-nav {
        z-index: 3;
        width: 330px;
        background: white;
        transition: 0.5s;
        transform: translateX(100%);
    }
    #drawingContent-humCheck:checked ~ #drawingContent-humClose { display: block; }
    #drawingContent-humCheck:checked ~ .drawingContent-nav {
        transform: translateX(0);
    }
    .drawingContent-nav ul{
        overflow: hidden;
        list-style: none;
    }
    .drawingContent-nav li{
        padding: 15px 0;
        margin: 10px 0;
    }
    .drawingContent-nav li:hover{
        opacity: 0.5;
    }
    .drawingContent-nav li a{
        font-size: 20px;
        text-decoration: none;
        font-size: 20px;
        color: black;
    }

</style>
<body>
    <div class="drawingContent-menu">
        <div id="drawingContent-humMenu">
            <input id="drawingContent-humCheck" type="checkbox">
            <label id="drawingContent-humOpen">
                <a href="{{ route('index') }}">
                    <img src="/icons/chevron.png" alt="メニュー" width="40" height="40">
                </a> 
            </label>
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