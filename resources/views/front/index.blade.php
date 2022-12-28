@extends('front.layouts.main')
@section('content')
<!-- top banner -->
<section class="position-relative">
    <div class="index_banner_slick">
        <div class="index_banner_slick_item d-flex align-items-center bg-cover"
            style="background-image: url('{{asset('front/assets/images/index_banner01.jpg')}}');">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-md-6 col-lg-5">
                        <h2 class="h1 text-uppercase text-white fw-bold lh-base mb-3">
                            Work reliably Develop creatively
                        </h2>
                        <p class="index_banner_text text-white">Work reliably, develop creatively, manage
                            efficiently and produce at a consistently high level of quality.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="index_banner_slick_item d-flex align-items-center bg-cover"
            style="background-image: url('{{asset('front/assets/images/index_banner02.jpg')}}');">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-md-6 col-lg-5">
                        <h2 class="h1 text-uppercase text-white fw-bold lh-base mb-3">
                            Lorem ipsum dolor sit amet
                        </h2>
                        <p class="text-white">Work reliably, develop creatively, manage
                            efficiently and produce at a consistently high level of quality.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="index_banner_slick_item d-flex align-items-center bg-cover"
            style="background-image: url('{{asset('front/assets/images/index_banner03.jpg')}}');">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-md-6 col-lg-5">
                        <h2 class="h1 text-uppercase text-white fw-bold lh-base mb-3">
                            Work reliably
                        </h2>
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Ratione quae quod consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('front/assets/images/divider01.svg')}}" alt="" class="w-100 position-absolute bottom-0">
</section>
<!-- top banner end -->

<!-- news -->
<section class="bg-dark py-5">
    <div class="container" data-aos="fade-up" data-aos-duration="800">
        <div class="row justify-content-center mb-5">
            <div class="col-11 px-0">
                <h3 class="title text-white fw-normal text-center text-md-start">最新消息 &amp; 展會</h3>
                <!-- <h3 class="title text-white">NEWS & EVENTS</h3> -->
            </div>
        </div>
        <div class="index_news_slick mb-15">
            <div class="index_news_slick_item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <a href="#" class="mb-5 mb-md-4 d-block overflow-hidden">
                                <img src="{{asset('front/assets/images/index_news01.jpg')}}" alt="" class="hover_transform_scale">
                            </a>
                            <div>
                                <div class="text-primary fw-bold fs-7">2017-12-31</div>
                                <div class="d-flex w-100 flex-column flex-md-row">
                                    <div class="col-md-5 border-top border-primary mt-2 mb-3 mb-md-0"></div>
                                    <div class="col-md-7 text-white ps-md-4">贊助車隊 - DELKO</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index_news_slick_item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <a href="#" class="mb-5 mb-md-4 d-block overflow-hidden">
                                <img src="{{asset('front/assets/images/index_news02.jpg')}}" alt="" class="hover_transform_scale">
                            </a>
                            <div>
                                <div class="text-primary fw-bold fs-7">2017-12-31</div>
                                <div class="d-flex w-100 flex-column flex-md-row">
                                    <div class="col-md-5 border-top border-primary mt-2 mb-3 mb-md-0"></div>
                                    <div class="col-md-7 text-white ps-md-4">To sponsor - Aaron GwinA FOUR-TIME
                                        WORLD CUP OVERALL CHAMPION</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index_news_slick_item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <a href="#" class="mb-5 mb-md-4 d-block overflow-hidden">
                                <img src="https://fakeimg.pl/700x500" alt="" class="hover_transform_scale">
                            </a>
                            <div>
                                <div class="text-primary fw-bold fs-7">2017-12-31</div>
                                <div class="d-flex w-100 flex-column flex-md-row">
                                    <div class="col-md-5 border-top border-primary mt-2 mb-3 mb-md-0"></div>
                                    <div class="col-md-7 text-white ps-md-4">To sponsor - DELKO</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="#" class="c_btn btn_light fw-normal">瞭解更多</a>
        </div>

    </div>
</section>
<!-- news end -->

<!-- video or img -->
<div class="">
    <img src="{{asset('front/assets/images/index_video_img.png')}}" alt="img_not_found" class="w-100">
</div>
<!-- video or img end -->

<!-- plain text -->
<section class="pt-12 pb-12 pt-md-25 pb-md-25" data-aos="fade-up" data-aos-duration="800">
    <div class="container">
        <div class="row offset-md-1">
            <div class="col-12 col-md-10">
                <h3 class="title text-center mb-4 text-center text-md-start">WE AER TRKTRO</h3>
                <p>Founded in 1986, TEKTRO has more than 30 years of experience manufacturing the highest quality
                    brake systems in the bicycle industry.</p>
                <p>All TEKTRO products are made with extreme quality control. We believe man, with the help of
                    automated machines, can cooperate to produce the best products. Every product is closely
                    examined by a TEKTRO artisan who has more than a decade of experience.</p>
                <p>In the future, TEKTRO will continue our human precision philosophy to deliver the safest and best
                    performing brake products to the world.</p>
                <!-- 暫放測試資料 -->
                <div class="d-flex justify-content-center">
                    <a href="result.html" class="c_btn btn_dark me-5">搜尋結果</a>
                    <a href="404.html" class="c_btn btn_dark">404頁面</a>
                </div>
                <!-- 暫放測試資料 end -->
            </div>
        </div>
    </div>
</section>
<!-- plain text end -->

<!-- TEKTRO & TRP -->
<section>
    <div class="duo_bg position-relative">
        <picture>
            <source media="(min-width: 576px)" srcset="{{asset('front/assets/images/index_duo_bg.jpg')}}">
            <img src="{{asset('front/assets/images/index_duo_bg_s.jpg')}}" alt="img_not_found" class="w-100">
        </picture>
        <!-- <img src="assets/images/index_duo_bg.jpg" alt="img_not_found" class="w-100"> -->
        <div class="container duo_content">
            <div class="row flex-column flex-md-row justify-content-md-around">
                <div class="col-12 col-md-6 col-lg-5 mb-3 mb-md-0">
                    <a href="tektro.html" class="d-block">
                        <div class="ratio_outer duo_item" style="padding-bottom: 66%;">
                            <div class="ratio_inner bg-cover p-4 d-flex justify-content-end align-items-start flex-column"
                                style="background-image: url('{{asset('front/assets/images/index_duo_TEKTRO.png')}}');">
                                <div data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title text-white mb-3">TEKTRO</h3>
                                    <p class="text-white opacity-75 fs-7">The new Tektro HD-E745 Auriga Twin+
                                        was awarded Gold at the 2020 Taipei Cycle D&l Awards</p>
                                    <i class='bx bx-right-arrow-alt text-primary fs-4'></i>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="assets/images/index_duo_TEKTRO.png" alt="img_not_found"> -->
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <a href="trp.html" class="d-block">
                        <div class="ratio_outer duo_item" style="padding-bottom: 66%;">
                            <div class="ratio_inner bg-cover p-4 d-flex justify-content-end align-items-start flex-column"
                                style="background-image: url('{{asset('front/assets/images/index_duo_TRP.png')}}');">
                                <div data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title text-white mb-3">TRP</h3>
                                    <p class="text-white opacity-75 fs-7">Work reliably, develop creatively, manage
                                        efficiently and produce at a consistently high level of quality.</p>
                                    <i class='bx bx-right-arrow-alt text-primary fs-4'></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- TEKTRO & TRP end -->



<!-- newsletter -->
<section class="newsletter jarallax bg-cover" style="background-image: url('{{asset('front/assets/images/index_newsletter.png')}}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-primary text-uppercase title mb-4 mb-md-5">Join Our Newsletter</h3>
                <form action="" method=""
                    class="d-flex w-100 flex-column flex-md-row align-items-start justify-content-md-start align-items-md-end">
                    <input type="text" name="" placeholder="Your E-mail" class="form_transparent">
                    <button class="c_btn btn_transparent text-white pe-0 d-none d-md-inline-block" type="submit"
                        name="">SUBSCRIBE
                        <i class='bx bx-right-arrow-alt text-primary fs-4 align-middle text-white'></i>
                    </button>
                    <button class="c_btn btn_light d-md-none mt-5">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- newsletter end -->

<!-- cookie box   -->
<div class="row" id="cookieAcceptBar">
    <div class="cookie_box">
        <div class="p-3 p-md-5">
            <p class="mb-4 text-center">我們及第三方均在本站使用 cookie，記錄之資訊以提供客製化內容，優化使用體驗。
                <br>
                當您按下「cookie 設定」，即可選擇您想接受哪些 cookie。
            </p>
                <div class="mb-4" id="cookie-selection" style="display: none;">
                    <div class="form-check form-switch mb-4 position-relative">
                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchFunctionalCookie" checked disabled>
                        <label class="form-check-label fw-bold ps-3" for="SwitchFunctionalCookie">功能型 cookie
                            <br>
                            <span class="fs-7 fw-normal">這些 cookie 確保網站正常運行。</span>
                        </label>
                        
                    </div>
                    <div class="form-check form-switch mb-4 position-relative">
                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchAnalyticalCookie" checked>
                        <label class="form-check-label fw-bold ps-3" for="SwitchAnalyticalCookie">分析型 cookie
                            <br>
                            <span class="fs-7 fw-normal">分析型 cookie 讓我們深入瞭解本網站的使用情形，我們能基於這種資訊改善本網站。</span>
                        </label>
                        
                    </div>
                    <div class="form-check form-switch mb-4 position-relative">
                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchAdCookie" checked>
                        <label class="form-check-label fw-bold ps-3" for="SwitchAdCookie">行銷型 cookie</label>
                        <p class="fs-7 ps-3">行銷型 cookie 係用於向您提供跟您有關的廣告。</p>
                    </div>
                </div>
                <!-- <a href="#" class="text-decoration-underline"> 隱私權保護政策</a>。 -->
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-center">
                <button class="c_btn btn_dark mb-2 mb-sm-0 me-sm-3" id="cookie-agree" value="agree">接受 cookie</button>
                <button class="c_btn btn_dark mb-2 mb-sm-0 me-sm-3" id="cookie-agree-selected" value="" style="display: none;">儲存設定</button>
                <button class="c_btn btn_white me-sm-3" id="cookie-disagree" value="disagree">不接受 cookie</button>
                <button class="c_btn border-0 bg-transparent text-decoration-underline fw-normal hover_opacity" id="cookie-selection-trigger">設定 cookie</button>
            </div>
        </div>
    </div>
</div>
@endsection