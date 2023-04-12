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
                <div class="toppage-heightLine-parent toppage-heightLine-parent-left text-center col-md-4 col-sm-12">
                    <div class="card-custom">
                        <a href="{{ route('drawing') }}">
                            <button class="btn btn-outline-light">Drawing start</button>
                        </a>
                        <p class="">やり方が分からない<br>人は隣のDrawing lecture<br>見てね</p>
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
                        <a href="{{ route('impPlan') }}">
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
    <div class="lecturepage-background" id="lecturepage">
        <h1 class="lecturepage-title">DRAWING CONTENT LECTURE</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 lecturepage-container lecturepage-content">
                    <img src="/toppage_image/undraw_making_art_re_ee8w.svg" alt="" class="lecturepage-img">
                </div>
                <div class="col-md-6 lecturepage-container lecturepage-content">
                    <div id="carouselExampleIndicators" class="carousel slide lecturepage-carousel" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="">
                                <h4 id="" class="text-center lecturepage-carousel-title">- STEP 1 - <br>画材の用意</h4>
                                <p class="lecturepage-carousel-text">ドローイングコンテンツを利用するには、アナログでもデジタルでも画材が必要です。アナログの場合は、描きやすいもの（鉛筆、色鉛筆、ペンなど）を選びましょう。デジタルの場合は、自分が使いやすいペンタブレットや液晶タブレット、ペン、ペイントソフトウェアを選ぶことが大切です。</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div>
                                <h4 id="scrollspyHeading2" class="text-center lecturepage-carousel-title">- STEP 2 - <br>Drawingコンテンツにアクセスする</h4>
                                <p class="lecturepage-carousel-text">「Drawing Start」ボタンまたは下にある「ドローイングコンテンツ」ボタンを押して、コンテンツにアクセスしましょう。</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div>
                                <h4 id="scrollspyHeading3" class="text-center lecturepage-carousel-title">- STEP 3 - <br>各種設定を選ぶ</h4>
                                <p class="lecturepage-carousel-text">当サイトのドローイングコンテンツでは、部位、枚数、時間を選択できます。自分に合った設定を選んで、画力向上を目指しましょう。初めての方は、難易度の低い設定を選ぶことをおすすめします。</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div>
                                <h4 id="scrollspyHeading4" class="text-center lecturepage-carousel-title">- STEP 4 - <br>記録を残す</h4>
                                <p class="lecturepage-carousel-text">練習で描いた作品を記録として残すことをおすすめします。これによって、自分の努力が可視化され、モチベーションにも繋がります。継続しなければ成長は望めませんので、ぜひ継続的な取り組みを心掛けましょう。</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
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
    <div class="footer container">
        <div class="row">
            <div class="footer-column col">
                <h1>PARROT<br>DRAWING</h1>
                <p>絵師成長応援サイト</p>
            </div>
            <div class="footer-col col">
                <h1>SITEMAP</h1>
                <a href="{{ route('drawing') }}">Drawingコンテンツ</a>
                <a href="#lecturepage">コンテンツ解説</a>
                <a href="{{ route('impPlan') }}">講座ブログ紹介</a>
                <a href="{{ route('impPlan') }}">クレジット</a>
                <a href="{{ route('impPlan') }}">Parrot運営募集</a>
            </div>
            <div class="footer-column col">
                <h1>Content & Support</h1>
                <div>
                    <p>ドローイングコンテンツ</p>
                    <a href="{{ route('drawing') }}">
                        {{-- <img src="" alt=""> --}}
                        <button>test</button>
                    </a>
                </div>
                <div>
                    <p>お問い合わせ</p>
                    <a href="{{ route('impPlan') }}">
                        {{-- <img src="" alt=""> --}}
                        <button>test</button>
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