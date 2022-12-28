@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(/front/assets/images/breadcrumb_info_news.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">最新消息</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">資訊</li>
                    <li class="text-white">最新消息</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section>
    <div class="container">
        <!-- latest -->
        <div class="row mb-12 mb-md-30">
            <div class="offset-md-1 col-md-10">
                <div class="mb-4 overflow-hidden">
                    <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                        <div class="ratio_inner bg-cover hover_transform_scale"
                            style="background-image: url('/front/assets/images/info_news_img01.jpg');"></div>
                    </a>
                </div>
                <div class="d-flex flex-column flex-lg-row align-items-lg-start">
                    <div class="col-lg-4">
                        <h3 class="title_h2">TRP EVO Brake Family – What’s the Best Brake for You?</h3>
                    </div>
                    <div class="col-lg-8 ps-lg-5">
                        <p class="text-muted fs-7 fs-md-6">“If you’ve seen many of our YouTube videos or reviews, it’s probably
                            not a surprise…</p>
                        <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                            <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest end -->
        <div class="row mb-12 mb-md-20">
            <div class="offset-md-1 col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img02.png');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Introducing the Drive – Eminent Cycles All-New E-Bike</h3>
                            <p class="text-muted fs-7 fs-md-6">TRP Cycling Components is excited to announce the new Eminent Cycles ‘Drive” E-MTB coming standard…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img03.jpg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Richie Schley Video: Returning Home</h3>
                            <p class="text-muted fs-7 fs-md-6"></p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img04.jpg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">IFR Team Video from World Cup Finals – Snowshoe, West Virginia</h3>
                            <p class="text-muted fs-7 fs-md-6">Words to describe a World Cup. Rough. Yanky. Oooooh. Yeah. Scary. Just Cool. Familiar-ish. Those…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img05.jpg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Sending Queenstown with Reece Potter</h3>
                            <p class="text-muted fs-7 fs-md-6">“Reece and George were pretty keen to shoot a dad-cam(ish) shreddit and so I kinda…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img06.jpeg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Hans Rey Explores Tasmania</h3>
                            <p class="text-muted fs-7 fs-md-6">In March 2016 Hans Rey and Tyler McCaul met up at Blue Derby in Tasmania…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img07.jpeg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">TRP Hideaway Park Brewery Takeover</h3>
                            <p class="text-muted fs-7 fs-md-6">Photo credit: Hefel Photography Athlete autographs and a sneak peek DH7, the DHR 2.3mm brake…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox" style="display: none;">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img02.png');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Introducing the Drive – Eminent Cycles All-New E-Bike</h3>
                            <p class="text-muted fs-7 fs-md-6">TRP Cycling Components is excited to announce the new Eminent Cycles ‘Drive” E-MTB coming standard…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox" style="display: none;">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img03.jpg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Richie Schley Video: Returning Home</h3>
                            <p class="text-muted fs-7 fs-md-6"></p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox" style="display: none;">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img04.jpg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">IFR Team Video from World Cup Finals – Snowshoe, West Virginia</h3>
                            <p class="text-muted fs-7 fs-md-6">Words to describe a World Cup. Rough. Yanky. Oooooh. Yeah. Scary. Just Cool. Familiar-ish. Those…</p>
                            <a href="{{route('front.news.show',['lang'=>$lang,'news'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="javascript:void(0)" class="c_btn btn_outline_dark" id="loadMore">LOAD MORE</a>
                </div>
            </div>
        </div>
        <!-- <div class="row mb-12 mb-md-20">
            <div class="offset-md-1 col-md-10">
                <div class="row">
                </div>
            </div>
        </div> -->
    </div>

</section>
@endsection