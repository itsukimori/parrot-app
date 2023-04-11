@extends('layouts.master')
@section('title', 'Parrot')
@section('content')
<div class="toppage-backImage">
    <div>
        <h1 class="toppage-title">
            神になるには<br>
            <span class="gradient-text1">情熱</span>、<span class="gradient-text2">努力</span>、<span class="gradient-text3">練習</span><br>
            が必要だ。
        </h1>
        <div class="container">
            <div class="row toppage-column">
                <div class="toppage-heightLine-parent text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a href="{{ route('drawing') }}">
                            <button class="btn btn-outline-light">Drawing start</button>
                        </a>
                        <p class="">やり方が分からない<br>人は隣のDrawing lecture<br>見てね</p>
                    </div>
                </div>
                <div class="toppage-heightLine-parent text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a href="">
                            <button class="btn btn-outline-light">Drawing lecture</button>
                        </a>
                        <p class="">Parrotサイトの<br>ドローイングコンテンツ<br>使用方法</p>
                    </div>
                </div>
                <div class="toppage-heightLine-parent text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a href="">
                            <button class="btn btn-outline-light">Learn to Draw</button>
                        </a>
                        <p class="">Youtubeやブログ<br>の情報を部位ごとに<br>まとめてあります。</p>
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
    <div class="lecturepage-background">
        <h1 class="lecturepage-title">Drawing lecture</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/toppage_image/undraw_making_art_re_ee8w.svg" alt="" class="lecturepage-img">
                </div>
                <div class="lecturepage-navbar col-md-6">
                    <div
                        data-bs-spy="scroll"
                        data-bs-target="#navbar-example2"
                        data-bs-offset="0"
                        class="scrollspy-example lecturepage-navtext-margin"
                        tabindex="0"
                    >
                        <div class="">
                            <h4 id="scrollspyHeading1" class="text-center">- STEP 1 - <br>画材の用意</h4>
                            <p class="">ドローイングコンテンツを利用するには、アナログでもデジタルでも画材が必要です。アナログの場合は、描きやすいもの（鉛筆、色鉛筆、ペンなど）を選びましょう。デジタルの場合は、自分が使いやすいペンタブレットや液晶タブレット、ペン、ペイントソフトウェアを選ぶことが大切です。</p>
                        </div>
                        <div>
                            <h4 id="scrollspyHeading2" class="text-center">- STEP 2 - <br>Drawingコンテンツにアクセスする</h4>
                            <p>「Drawing Start」ボタンまたは下にある「ドローイングコンテンツ」ボタンを押して、コンテンツにアクセスしましょう。</p>
                        </div>
                        <div>
                            <h4 id="scrollspyHeading3" class="text-center">- STEP 3 - <br>各種設定を選ぶ</h4>
                            <p>当サイトのドローイングコンテンツでは、部位、枚数、時間を選択できます。自分に合った設定を選んで、画力向上を目指しましょう。初めての方は、難易度の低い設定を選ぶことをおすすめします。</p>
                        </div>
                        <div>
                            <h4 id="scrollspyHeading4" class="text-center">- STEP 4 - <br>記録を残す</h4>
                            <p>練習で描いた作品を記録として残すことをおすすめします。これによって、自分の努力が可視化され、モチベーションにも繋がります。継続しなければ成長は望めませんので、ぜひ継続的な取り組みを心掛けましょう。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-slider">
            <div class="image-slider__wrap">
                <ul class="image-slider__list image-slider__list--left">
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                </ul>
            </div>
        </div>
        <div class="image-slider">
            <div class="image-slider__wrap">
                <ul class="image-slider__list image-slider__list--right">
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                    <li class="image-slider__item"><img src="/drawing-images/hand/compass-1753659__340.jpg" alt></li>
                </ul>
            </div>
        </div>
    </div>
    <h1 class="target">非表示</h1>
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
const target = document.querySelector('.target');
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