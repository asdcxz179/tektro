@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-0" style="background-image: url(/front/assets/images/breadcrumb_info_news.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">最新消息</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">資訊</li>
                    <li>
                        <a href="info_news.html" class="text-white-50">最新消息</a>
                    </li>
                    <li class="text-white text-truncate">TRP EVO Brake Family – What’s the Best Brake for You?</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<section class="mb-12 mb-md-20">
    <div class="jarallax bg-cover d-flex justify-content-center align-items-center news_detail_header" style="background-image: url(/front/assets/images/info_news_img01.jpg);">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-white text-center fs-1 fw-bold mb-4">TRP EVO Brake Family – What’s the Best Brake for You?</h2>
                    <h3 class="text-white text-center fs-6 fw-bold">March 16, 2022</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row html_editor">
        <div class="col-md-10 offset-md-1">
            <!-- video start -->
            <div class="ratio_outer my-3" style="padding-bottom: 56.25%;">
                <div class="ratio_inner">
                    <iframe src="https://www.youtube.com/embed/UUlNelxXjUQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <!-- video end -->

            <p>
                “If you’ve seen many of our YouTube videos or reviews, it’s probably not a surprise that we’re fans of the TRP (Tektro Racing Products) EVO brake lineup. After a mediocre review on their G-Spec Quadiem brakes a couple years back, TRP took the gloves off and came back with what are some of our favorite brakes available. Taking the EVO brake line to the next level, TRP Cycling kept refining the EVO platform and now have a family of EVO brakes to suit a variety of riders and needs. In this feature we’re going to take a look at the three models currently available and the subtle differences and similarities between them all. ”
            </p>
            <a href="#">Read the full article at theloamwolf.com</a>
            <img src="/front/assets/images/info_news_img01.jpg" alt="">
            <p>
                TRP’s EVO brakes share the same dual 16mm pistons in burly 4-piston calipers. These calipers have 360-degrees of oil flow inside with a large internal volume. By eliminating any sharp turns for the fluid, TRP hopes to improve power distribution across the pads and facilitate easier bleeding as air bubbles can purge easier since they don’t have corners or nooks to hide in. A benefit of being able to pull more oil is that heat management is improved as it takes longer to heat up and boil. This also means you have to bleed your brakes less since they’re not degrading as quickly from reaching extremely hot temperatures as often.
            </p>
            <p>
                he fluid volume inside the calipers is maximized to reduce heat buildup and keep the brakes consistent on sustained descents, something we’ve raved about in our reviews. The TRP EVO brakes use a newly developed mineral oil with an increased boiling point of 230C to maintain brake performance under the harshest conditions. TRP Cycling also use 5mm housing for high oil flow rates with a Kevlar wrap that reduces hydraulic expansion when the brakes are being actuated, giving a firmer lever feel, instant power and eliminating that squishy feel, no matter how long your downhill run is.
            </p>
            <img src="/front/assets/images/info_news_detail_img01.jpg" alt="">
            <img src="/front/assets/images/info_news_detail_img02.jpg" alt="">
            <a href="#">Read the full article at theloamwolf.com</a>
        </div>
    </div>
    <div class="row mt-5 mb-4 mb-md-5">
        <div class="col-md-10 offset-md-1">
            <div class="share_block">
                <span class="fw-bold mb-4 mb-md-0">SHARE THIS ARTICLE</span>
                <div class="d-flex">
                    <a href="#" class="share_btn">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="#" class="share_btn">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-15 other_page">
        <div class="col-md-10 offset-md-1">
            <div class="row justify-content-between">
                <div class="col-4">
                    <a href="#" class="d-block">
                        <small class="fw-bold d-block mb-3">
                            <i class='bx bx-left-arrow-alt align-middle me-2'></i>
                            PREV
                        </small>
                        <span class="d-none d-md-block">
                            Introducing the Drive – Eminent Cycles All-New E-Bike
                        </span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#" class="d-block">
                        <small class="fw-bold d-block mb-3 text-end">
                            NEXT
                            <i class='bx bx-right-arrow-alt align-middle ms-2'></i>
                        </small>
                        <span class="d-none d-md-block text-end">
                            Hans Rey Explores Tasmania
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection