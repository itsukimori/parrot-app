@extends('layouts.illustLessonContent')
@section('title', 'Lesson')
@section('content')
<div class="conteiner">
    <div>
        <div id="lessonContent-humMenu">
            <input id="lessonContent-humCheck" type="checkbox">
            <label id="lessonContent-humOpen" for="lessonContent-humCheck"><img src="/icons/btn03-14.png" alt="メニュー" width="40" height="40"></label>
            <label id="lessonContent-humClose" for="lessonContent-humCheck"></label>
            <nav>
            <ul class="lessonContent-inner">
                <li><a href="{{ route('index') }}">トップページ</a></li>
                <li><a href="{{ route('drawing') }}">ドローイングコンテンツ</a></li>
                <li><a href="{{ route('index') }}#lecturepage">コンテンツ解説</a></li>
                <li><a href="{{ route('illustLesson') }}">イラストレッスン</a></li>
                <li><a href="{{ route('contact.contact') }}">お問い合わせ</a></li>
                <li><a href="{{ route('impPlan') }}">Parrot運営募集</a></li>
            </ul>
            </nav>
        </div>
    </div>
    
    
    <h1 class="lessonToppage-title">さまざまなコンテンツで身につけよう</h1>
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" href="#head-face" data-bs-toggle="tab">頭・顔</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#body" data-bs-toggle="tab">胴体</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#hand-arm" data-bs-toggle="tab">手・腕</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#leg-foot" data-bs-toggle="tab">脚・足</a>
        </li>
    </ul>
        <div class="tab-content">
        {{-- 頭と顔 --}}
        <div id="head-face" class="tab-pane active">
            <div>
                <div class="lessonContent-dropdown">
                    <button class="lessonContent-dropdown-button">MENU</button>
                    <div class="lessonContent-dropdown-menu">
                        <a class="lessonContent-dropdown-item" href="#youtube0">Youtube</a>
                        <a class="lessonContent-dropdown-item" href="#pinterest0">Pinterest</a>
                        <a class="lessonContent-dropdown-item" href="#pixiv0">Pixv</a>
                        <a class="lessonContent-dropdown-item" href="#blog0">Blog & Site</a>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="youtube0">
                    Youtube
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                    <span class="lessonContent-border"></span>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- Youtube --}}
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tyIm2OV8La4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/W9_ac4-zHFQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mWEKKwKZtWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/j2LioTVVf-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/HxA1yG5wyVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/4-RJPRJPbCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qAyDQQFp79U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Nuq2tA5JKvg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zLkSabFO5VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/I1TAOiACMZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pinterest0">
                    Pinterest
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- pinterest --}}
                        <div class="pinterest-wrapper">
                            <a data-pin-do="embedBoard" data-pin-lang="ja" data-pin-board-width="" data-pin-scale-height="" data-pin-scale-width="" href="https://www.pinterest.jp/parrotdrawingapp/headface/"></a>
                        </div>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pixiv0">
                    Pixiv
                    <img src="/images/logo_icon_r.png" alt="" width="40" height="40">
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="blog0">
                    Blog & Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill lessonContent-blog-icon" viewBox="0 0 16 16" class="lessonContent-icon">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- 胴体 --}}
        <div id="body" class="tab-pane">
            <div>
                <div class="lessonContent-dropdown">
                    <button class="lessonContent-dropdown-button">MENU</button>
                    <div class="lessonContent-dropdown-menu">
                        <a class="lessonContent-dropdown-item" href="#youtube1">Youtube</a>
                        <a class="lessonContent-dropdown-item" href="#pinterest1">Pinterest</a>
                        <a class="lessonContent-dropdown-item" href="#pixiv1">Pixv</a>
                        <a class="lessonContent-dropdown-item" href="#blog1">Blog & Site</a>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="youtube1">
                    Youtube
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                    <span class="lessonContent-border"></span>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- Youtube --}}
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pKmJb4c-F2U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/avcygKfCoXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/v-Ej9EIlfoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/W20Ks157pkc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZHJWjclAVnI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/LyUECa9th7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rfk62Pae8kE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9VHDwlfN2L8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pinterest1">
                    Pinterest
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- pinterest --}}
                        <div class="pinterest-wrapper">
                            <a data-pin-do="embedBoard" data-pin-lang="ja" data-pin-board-width="" data-pin-scale-height="" data-pin-scale-width="" href="https://www.pinterest.jp/parrotdrawingapp/body/"></a>
                        </div>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pixiv1">
                    Pixiv
                    <img src="/images/logo_icon_r.png" alt="" width="40" height="40">
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="blog1">
                    Blog & Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill lessonContent-blog-icon" viewBox="0 0 16 16" class="lessonContent-icon">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- 手と腕 --}}
        <div id="hand-arm" class="tab-pane">
            <div>
                <div class="lessonContent-dropdown">
                    <button class="lessonContent-dropdown-button">MENU</button>
                    <div class="lessonContent-dropdown-menu">
                        <a class="lessonContent-dropdown-item" href="#youtube2">Youtube</a>
                        <a class="lessonContent-dropdown-item" href="#pinterest2">Pinterest</a>
                        <a class="lessonContent-dropdown-item" href="#pixiv2">Pixv</a>
                        <a class="lessonContent-dropdown-item" href="#blog2">Blog & Site</a>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="youtube2">
                    Youtube
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                    <span class="lessonContent-border"></span>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- Youtube --}}
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bDBgK4Fl3Go" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5Ij8H3GlG9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BHQPCDlsAoQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WDOO72XA0uQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xxuJTCrvhh0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mEt991LKGuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZlOgFExfpmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dpJbttYmSK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-jqP9CnxY1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/z5pKUrxi2mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/D26F1gTgfvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yQe710ocYVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/eabPsiWaimE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PYuNu8WAySI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kIH3y89cF9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pinterest2">
                    Pinterest
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- pinterest --}}
                        <div class="pinterest-wrapper">
                            <a data-pin-do="embedBoard" data-pin-lang="ja" data-pin-board-width="" data-pin-scale-height="" data-pin-scale-width="" href="https://www.pinterest.jp/parrotdrawingapp/handarm/"></a>
                        </div>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pixiv2">
                    Pixiv
                    <img src="/images/logo_icon_r.png" alt="" width="40" height="40">
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="blog2">
                    Blog & Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill lessonContent-blog-icon" viewBox="0 0 16 16" class="lessonContent-icon">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- 脚と足 --}}
        <div id="leg-foot" class="tab-pane">
            <div>
                <div class="lessonContent-dropdown">
                    <button class="lessonContent-dropdown-button">MENU</button>
                    <div class="lessonContent-dropdown-menu">
                        <a class="lessonContent-dropdown-item" href="#youtube3">Youtube</a>
                        <a class="lessonContent-dropdown-item" href="#pinterest3">Pinterest</a>
                        <a class="lessonContent-dropdown-item" href="#pixiv3">Pixv</a>
                        <a class="lessonContent-dropdown-item" href="#blog3">Blog & Site</a>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="youtube3">
                    Youtube
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                    <span class="lessonContent-border"></span>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- Youtube --}}
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/t3v5YLkOmtQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bk1EVbayIZY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/a-qKPzvK-iI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/LchKOQnkCLI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/L-aBt-sMD5c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tmjfpKnh5mY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qbzPUIXpKik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-V2ZvDrOSAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dWlSbKv5-20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nsWTLqNBzSI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ICf5iXU5HBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="lessonContent-contentSize"></iframe>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pinterest3">
                    Pinterest
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest lessonContent-pinterest-youtube-icon " viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        {{-- pinterest --}}
                        <div class="pinterest-wrapper">
                            <a data-pin-do="embedBoard" data-pin-lang="ja" data-pin-board-width="" data-pin-scale-height="" data-pin-scale-width="" href="https://www.pinterest.jp/parrotdrawingapp/footleg/"></a>
                        </div>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="pixiv3">
                    Pixiv
                    <img src="/images/logo_icon_r.png" alt="" width="40" height="40">
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
                <h2 class="lessonContent-contentTitle" id="blog3">
                    Blog & Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill lessonContent-blog-icon" viewBox="0 0 16 16" class="lessonContent-icon">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                    </svg>
                </h2>
                <div class="row">
                    <div class="col-12 lessonContent-contentMargin text-center">
                        {{-- <iframe>にlessonContent-contentSizeクラスを定義せよ --}}
                        <p>※記事募集中</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const dropdownItems = document.querySelectorAll('a.lessonContent-dropdown-item');
      dropdownItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
          event.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        });
      });
    });
</script>
@endsection