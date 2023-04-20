<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">
    {{-- icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
.lessonToppage-title {
    margin-top: 50px;
    margin-bottom: 50px;
    text-align: center;
}
.lessonContent-contentTitle {
    font-size: 40px;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
}
.lessonContent-contentSize {
    height: 250px;
    width: 237px;
}
/* ドロップダウン */
.lessonContent-dropdown {
    position: relative;
    display: inline-block;
    margin-top: 10px;
    margin-left: 10px;
  }
  
  .lessonContent-dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    background-color: white;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    min-width: 160px;
    z-index: 1;
  }
  
  .lessonContent-dropdown-menu .lessonContent-dropdown-item {
    display: block;
    color: black;
    text-decoration: none;
    padding: 12px 16px;
  }
  
  .lessonContent-dropdown-menu .lessonContent-dropdown-item:hover {
    background-color: #f1f1f1;
  }
  
  .lessonContent-dropdown:hover .lessonContent-dropdown-menu {
    display: block;
  }
  
  .lessonContent-dropdown-button {
    background-color: rgb(162, 162, 162);
    color: white;
    width: 160px;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    }
  
.lessonContent-dropdown-button:hover {
    background-color: rgb(98, 98, 98);
}
/* アイコン色 */
.lessonContent-pinterest-youtube-icon {
    color: red;
    width: 40px;
    height: 40px;
}
.lessonContent-blog-icon {
    color: rgb(17, 212, 127);
    width: 40px;
    height: 40px;
}
/* ハンバーガーメニュー */
#lessonContent-humMenu {
    padding: 12px;
}

#lessonContent-humCheck, #lessonContent-humClose { display:none; }
#lessonContent-humOpen {
    display: block;
    width: 58px;
    cursor: pointer;
}
#lessonContent-humOpen:hover {
    opacity: 0.5;
}
#lessonContent-humOpen img { display: block; }
#lessonContent-humClose, nav {
    position: fixed;
    right: 0;
    top: 0;
    height: 100%;
}
#lessonContent-humClose {
    z-index: 2;
    width: 100%;
    background: gray;
    opacity: 0.8;
    transition: 0.5s;
}
nav {
    z-index: 3;
    width: 330px;
    background: white;
    transition: 0.5s;
    transform: translateX(100%);
}
#lessonContent-humCheck:checked ~ #lessonContent-humClose { display: block; }
#lessonContent-humCheck:checked ~ nav {
    transform: translateX(0);
}
nav ul{
    overflow: hidden;
    list-style: none;
}
.lessonContent-inner li{
    padding: 15px 0;
    margin: 10px 0;
}
.lessonContent-inner li:hover{
    opacity: 0.5;
}
.lessonContent-inner li a{
    font-size: 20px;
    text-decoration: none;
    font-size: 20px;
    color: black;
}
/* レスポンシブ */
@media (max-width:478px) {
    /* コンテンツサイズ */
    .lessonContent-contentSize {
        height: 250px;
        width: 337px;
    }
}
</style>
<body>
    @yield('content')
</body>
</html>