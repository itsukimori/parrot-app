@extends('layouts.master')
@section('title', 'Parrot')
@section('content')
<div class="">
    <div class="toppage-backImage">
        <h1 class="toppage-title">
            神になるには<br>
            <span class="gradient-text1">情熱</span>、<span class="gradient-text2">努力</span>、<span class="gradient-text3">練習</span><br>
            が必要だ。
        </h1>
        <div class="container">
            <div class="row toppage-column">
                <div class="toppage-heightLine-parent toppage-heightLine-parent-left text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a href="{{ route('drawing') }}">
                            <button class="btn btn-outline-light">Drawing start</button>
                        </a>
                        <p class="">やり方が分からない<br>人はDrawing lecture<br>見て下さい</p>
                    </div>
                </div>
                <div class="toppage-heightLine-parent text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a  href="#lecturepage">
                            <button class="btn btn-outline-light">Drawing lecture</button>
                        </a>
                        <p class="">Parrotサイトの<br>ドローイングコンテンツ<br>使用方法</p>
                    </div>
                </div>
                <div class="toppage-heightLine-parent text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a href="#illustrationLesson">
                            <button class="btn btn-outline-light">Learn to Draw</button>
                        </a>
                        <p class="">Youtubeやブログ<br>の情報を部位ごとに<br>まとめてあります</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-fade-in">
            <div class="toppage-drawingContent-button">
                <a href="{{ route('drawing') }}">
                    <img src="/toppage_image/IMG_0039.png" alt="" class="toppage-drawingContent-button-img">
                </a>
            </div>
        </div>
    </div>
    <div class="lecturepage-background" id="lecturepage">
        <p class="lecturepage-sub-title">Drawing Lecture</p>
        <h1 class="lecturepage-title">ドローイングコンテンツ</h1>
        <div class="container">
            <img src="/images/image-processing.png" alt="" class="lecturepage-imagesDisplay-icon">
            <h2>Parrotは多様な部位の画像を提供できます。<span class="count-under-line">現在は合計で{{ $imagesCount }}枚</span>の画像を提供しています。あなたの画力向上に役立てることができます。画像の一覧をご覧になりたい方は、以下を参照してください</h2>
            <div class="row text-center lecturepage-alert-column">
                <div class="alert alert-light col-md-4 " role="alert" class="">
                    <img src="/images/head.png" alt="" style="height:34px; width:34px;">
                    の画像は<a href="{{ route('displayFace') }}" class="alert-link">こちら</a>をクリックしてください
                </div>
                <div class="alert alert-light col-md-4 " role="alert" class="">
                    <img src="/images/hello.png" alt="" style="height:34px; width:34px;">
                    の画像は<a href="{{ route('displayHand') }}" class="alert-link">こちら</a>をクリックしてください
                </div>
                <div class="alert alert-light col-md-4 " role="alert" class="">
                    <img src="/images/footicon.png" alt="" style="height:34px; width:34px;">
                    の画像は<a href="{{ route('displayFoot') }}" class="alert-link">こちら</a>をクリックしてください
                </div>
            </div>
        </div>
        {{-- 画像スライダー --}}
        <div class="image-slider">
            <div class="image-slider__wrap">
                <ul class="image-slider__list image-slider__list--left">
                    <li class="image-slider__item"><img src="/drawing-images/hand/adult-1868109__340.webp" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/away-763918__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/adult-1867889__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/align-fingers-71282__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/baby-179377__340-1.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/africa-1994846__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/apple-2391__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/feet-423092__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/autumn-2010387__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/arm-1284248__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/baby-218193__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/baby-933097__340.jpg" alt></li>
                </ul>
            </div>
        </div>
        <div class="image-slider">
            <div class="image-slider__wrap">
                <ul class="image-slider__list image-slider__list--right">
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/people-3279475__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/woman-3220835__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/love-316640__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/baby-501336__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/woman-2537564__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/piano-4841121__340-1.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/baby-1178539__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/sad-4133121__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/tin-can-238488__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/foot/baby-1595389__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/face/man-930397__340.jpg" alt></li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="illustrationLessonPage-background" id="illustrationLesson">
        <div class="illustrationLessonPage-padding">
            <p class="illustrationLessonPage-sub-title">Illustration Lesson</p>
            <h1>Youtubeやブログで学ぼう</h1>
        </div>
        <div class="container illustrationLessonPage-content">
            <div class="row">
                <div class="col-md-6">
                    <img src="/toppage_image/illustlesson.svg" alt="" class="illustrationLessonPage-img">
                </div>
                <div class="col-md-6">
                    <div class="illustrationLessonPage-column1">
                        <h2 class="illustrationLessonPage-column1-margin">プロの技術を見て成長加速</h2>
                        <div class="illustrationLessonPage-column1-margin_col row">
                            <div class="illustrationLessonPage-column1-icons4 col">
                                <div class="illustrationLessonPage-column-flex">
                                    <div class="illustrationLessonPage-icon-flex">
                                        <span class="material-symbols-outlined">youtube_activity</span>
                                        <p class="">動画で<br>身につける</p>
                                    </div>
                                    <div class="illustrationLessonPage-icon-flex">
                                        <span class="material-symbols-outlined">demography</span>
                                        <p>優良な<br>記事を提供</p>
                                    </div>
                                </div>
                                <div class="illustrationLessonPage-column-flex">
                                    <div class="illustrationLessonPage-icon-flex">
                                        <span class="material-symbols-outlined">accessibility_new</span>
                                        <p>部位選<br>択ができる</p>
                                    </div>
                                    <div class="illustrationLessonPage-icon-flex">
                                        <span class="material-symbols-outlined">pin</span>
                                        <p>初心者<br>でも学べる</p>
                                    </div>
                                </div>
                                <p class="illustrationLessonPage-content-text">コンテンツを開始するには、ボタンをクリックしてください↓</p>
                                <a href="{{ route('illustLesson') }}"><button type="button" class="btn btn-outline-danger">Lesson start</button></a>
                            </div>
                            <img src="/toppage_image/undraw_mobile_search_p2ka.svg" alt="" class="col illustrationLessonPage-column1-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer container">
        <div class="row">
            <div class="footer-col col">
                <p class="footer-col-border"></p>
                <h1>PARROT<br>DRAWING</h1>
                <p>絵師成長応援サイト</p>
                <img src="/toppage_image/logo.png" alt="" class="footer-logo">
            </div>
            <div class="footer-col col">
                <p class="footer-col-border"></p>
                <h1>SITEMAP</h1>
                <a href="{{ route('drawing') }}">Drawingコンテンツ</a>
                <a href="#lecturepage">コンテンツ解説</a>
                <a href="{{ route('illustLesson') }}">イラストレッスン</a>
                <a href="{{ route('credit') }}">クレジット</a>
                <a href="{{ route('impPlan') }}">Parrot運営募集</a>
            </div>
            <div class="footer-col col">
                <p id="footer-col-border-last" class="footer-col-border"></p>
                <p class="footer-col-border_mobile"></p>
                <h1>Content & Support</h1>
                <div class="footer-support-col">
                    <p>ドローイングコンテンツ</p>
                    <a href="{{ route('drawing') }}">
                        <button type="button" class="btn btn-outline-light">DRAWNG</button>
                    </a>
                </div>
                <div>
                    <p>お問い合わせ</p>
                    <a href="{{ route('contact.contact') }}">
                        <button type="button" class="btn btn-outline-light">CONTACT</button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// スクロールしたらDrawingContentButtonが表示される処理
window.addEventListener("scroll", function () {
    const elements = document.querySelectorAll(".scroll-fade-in");
    for (const element of elements) {
        const elementPosition = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        const revealPoint = 300; // スクロール位置の指定 (100px)

        if (elementPosition < windowHeight - revealPoint) {
            element.style.opacity = "1";
            element.style.pointerEvents = "auto";
        } else {
            element.style.opacity = "0";
            element.style.pointerEvents = "none";
        }
    }
});
// 指定コンテンツが表示された場合.toppage-drawingContent-buttonの非表示処理
const target = document.querySelector('.footer'); /*クラスを指定*/
const button = document.querySelector('.toppage-drawingContent-button');

const targetContent = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            button.style.display = 'none';
        } else {
            button.style.display = 'block';
        }
    });
});
targetContent.observe(target);
</script>
@endsection