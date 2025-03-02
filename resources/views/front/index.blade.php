@extends('front.layouts.main')
@section('content')
@foreach($modules as $module)
    @switch($module->home_type_id)
        @case(1)
        <!-- top banner -->
        <section class="position-relative">
            <div class="index_banner_slick">
                @foreach($module->home_carousels as $carousel)
                <div class="index_banner_slick_item d-flex align-items-center bg-cover" @if($carousel->type == 'image') style="background-image: url('{{asset($carousel->path)}}');" @endif>
                    @if($carousel->type == 'image')
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <h2 class="h1 text-uppercase text-white fw-bold lh-base mb-3">
                                        {{$carousel->big_title}}
                                    </h2>
                                    <p class="index_banner_text text-white">
                                        {!!nl2br($carousel->small_title)!!}
                                    </p>
                                    @if($carousel->button_link)
                                    <a href="{{$carousel->button_link}}" class="c_btn btn_white fw-normal mt-3" tabindex="0" target="_blank">{{__('front.see_more')}}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @elseif($carousel->type == 'video')
                        <div id="player_carousel_{{$carousel->youtube_key}}" class=" iframe_video banner_iframe_video d-block"></div>
                        <script>
                            $(document).ready(function(){
                                carousel_players['player_carousel_{{$carousel->youtube_key}}'] = '{{$carousel->youtube_key}}';
                            });
                        </script>
                    @endif
                </div>
                @endforeach
            </div>
            <img src="{{asset('front/assets/images/divider001.svg')}}" alt="" class="w-100 position-absolute" style="bottom: -1px;">
        </section>
        <!-- top banner end -->
        @break
        @case(2)
        <!-- news -->
        <section class="bg-dark py-5">
            <div class="container" data-aos="fade-up" data-aos-duration="800">
                <div class="row justify-content-center mb-5">
                    <div class="col-11 px-0">
                        <h3 class="title text-white fw-normal text-center text-md-start">{{$module->home_news[0]->title}}</h3>
                    </div>
                </div>
                <div class="index_news_slick mb-15">
                    @foreach($news as $new)
                    <div class="index_news_slick_item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <a href="{{route('front.news.show',['lang'=>$lang,'news'=>$new->id])}}" class="mb-5 mb-md-4 d-block overflow-hidden">
                                        <!-- <img src="{{asset($new->banner)}}" alt="" class="hover_transform_scale"> -->
                                        <div class="ratio_outer hover_transform_scale" style="padding-bottom: 66%;">
                                            <div class="ratio_inner bg-cover" style="background-image: url('{{asset($new->banner)}}')"></div>
                                        </div>
                                    </a>
                                    <div>
                                        <div class="text-primary fw-bold fs-7">{{$new->show_date}}</div>
                                        <div class="d-flex w-100 flex-column flex-md-row">
                                            <div class="col-md-5 border-top border-primary mt-2 mb-3 mb-md-0"></div>
                                            <div class="col-md-7 text-white ps-md-4">{{$new->name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="{{route('front.news.index',['lang'=>$lang])}}" class="c_btn btn_light fw-normal">{{__('front.see_more')}}</a>
                </div>
            </div>
        </section>
        <!-- news end -->
        @break
        @case(3)
        <div style="margin-top: -4px;">
            <div id="player_{{$module->home_videos[0]->youtube_key}}" class="iframe_video d-block video_area"></div>
            <!-- <iframe class="iframe_video" src="https://www.youtube.com/embed/{{$module->home_videos[0]->youtube_key}}?mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        </div>
        <script>
            $(document).ready(function(){
                players['player_{{$module->home_videos[0]->youtube_key}}'] = '{{$module->home_videos[0]->youtube_key}}';
                $('body').css = ('background-color','transparent');
            });
        </script>
        @break
        @case(4)
        <!-- plain text -->
        <section class="pt-12 pb-12 pt-md-25 pb-md-25" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="row offset-md-1">
                    <div class="col-12 col-md-10">
                        <h3 class="title text-center mb-4 text-center text-md-start">{{$module->home_webs[0]->big_title}}</h3>
                        <p>
                            {!!nl2br($module->home_webs[0]->small_title)!!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- plain text end -->
        @break
        @case(5)
        <!-- TEKTRO & TRP -->
        <section>
            <div class="duo_bg position-relative">
                <picture>
                    <source media="(min-width: 576px)" srcset="{{asset($module->path??'front/assets/images/index_bg.webp')}}">
                    <img src="{{asset('front/assets/images/index_duo_bg_s.jpg')}}" alt="img_not_found" class="w-100">
                </picture>
                <!-- <img src="assets/images/index_duo_bg.jpg" alt="img_not_found" class="w-100"> -->
                <div class="container duo_content">
                    <div class="row flex-column flex-md-row justify-content-md-around">
                        @if(isset($module->home_brands[0]))
                        <div class="col-12 col-md-6 col-lg-5 mb-3 mb-md-0">
                            <a href="{{$module->home_brands[0]->link}}" class="d-block">
                                <div class="ratio_outer duo_item" style="padding-bottom: 66%;">
                                    <div class="ratio_inner bg-cover p-4 d-flex justify-content-end align-items-start flex-column"
                                        style="background-image: url('{{asset($module->home_brands[0]->path)}}');">
                                        <div data-aos="fade-up" data-aos-duration="800">
                                            <h3 class="title text-white mb-3">{{$module->home_brands[0]->big_title}}</h3>
                                            <p class="text-white opacity-75 fs-7">{{$module->home_brands[0]->small_title}}</p>
                                            <i class='bx bx-right-arrow-alt text-primary fs-4'></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- <img src="assets/images/index_duo_TEKTRO.png" alt="img_not_found"> -->
                            </a>
                        </div>
                        @endif
                        @if(isset($module->home_brands[1]))
                        <div class="col-12 col-md-6 col-lg-5">
                            <a href="{{$module->home_brands[1]->link}}" class="d-block">
                                <div class="ratio_outer duo_item" style="padding-bottom: 66%;">
                                    <div class="ratio_inner bg-cover p-4 d-flex justify-content-end align-items-start flex-column"
                                        style="background-image: url('{{asset($module->home_brands[1]->path)}}');">
                                        <div data-aos="fade-up" data-aos-duration="800">
                                            <h3 class="title text-white mb-3">{{$module->home_brands[1]->big_title}}</h3>
                                            <p class="text-white opacity-75 fs-7">{{$module->home_brands[1]->small_title}}</p>
                                            <i class='bx bx-right-arrow-alt text-primary fs-4'></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- TEKTRO & TRP end -->
        @break
        @case(6)
        <!-- video or img -->
        <div class="">
            <img src="{{asset($module->home_images[0]->path)}}" alt="img_not_found" class="w-100">
        </div>
        <!-- video or img end -->
        @break
        @case(7)
        <!-- 可編輯輪播圖 start -->
        <section class="py-5">
            <div class="container" data-aos="fade-up" data-aos-duration="800">
                <div class="row justify-content-center mb-5">
                    <div class="col-11 px-0">
                        <h3 class="title fw-normal text-center text-md-start">{{$module->getTranslation('name', $lang,false)}}</h3>
                    </div>
                </div>
                <div class="index_news_slick nav_dark mb-15">
                    @foreach($module->home_news_carousels as $item)
                    <div class="index_news_slick_item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <a href="{{($item->button_link)?$item->button_link:'#'}}"
                                        class="mb-5 mb-md-4 d-block overflow-hidden">
                                        <div class="ratio_outer hover_transform_scale" style="padding-bottom: 66%;">
                                            <div class="ratio_inner bg-cover"
                                                style="background-image: url('{{asset($item->path)}}')">
                                            </div>
                                        </div>
                                    </a>
                                    <div>
                                        <div class="d-flex w-100 flex-column flex-md-row">
                                            <div class="col-md-5 mb-3 mb-md-0 fw-bold">
                                                {!!$item->big_title!!}
                                            </div>
                                            <div class="col-md-7 ps-md-4">{!!$item->small_title!!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- 可編輯輪播圖 end -->
        @break
        @case(8)
        <section class="container pt-5 mb-25">
            <div class="row">
                <div class="col-12">
                    <ul class="row justify-content-center">
                        <h3 class="title fw-normal text-center mb-5">{{$module->getTranslation('name', $lang,false)}}</h3>
                        @foreach($module->home_products as $product)
                        <li class="col-6 col-md-3">
                            @if($product->type =='upload')
                            <a href="{{($product->button_link)?$product->button_link:'#'}}" class="box p-4 mb-0">
                                <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                    <div class="ratio_inner bg-cover"
                                        style="background-image: url('{{asset($product->path)}}');">
                                        <div class="box_img_overlay">
                                            <span class="text-white fw-bold mb-3">{{$product->big_title}}</span>
                                            <div href="{{($product->button_link)?$product->button_link:'#'}}" class="c_btn btn_outline_white">{{__('front.VIEW ALL')}}</div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="box_title">{{$product->big_title}}</h2>
                                <span class="box_text">{{$product->small_title}}</span>
                            </a>
                            @elseif($product->type =='product')
                            @if($product->product_id)
                            <a href="{{route('front.product.show',['lang'=>$lang,'product'=>$product->product_id])}}" class="box p-4 mb-0">
                                <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                    <div class="ratio_inner bg-cover"
                                        style="background-image: url('{{asset($product->product->banner)}}');">
                                        <div class="box_img_overlay">
                                            <span class="text-white fw-bold mb-3">{{$product->product->name}}</span>
                                            <div href="{{route('front.product.show',['lang'=>$lang,'product'=>$product->product_id])}}" class="c_btn btn_outline_white">{{__('front.VIEW ALL')}}</div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="box_title">{{$product->product->name}}</h2>
                                <span class="box_text">{{$product->product->description}}</span>
                            </a>
                            @endif
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        @break
        @endswitch
        @endforeach
        <!-- new product start -->
        
        <!-- new product end -->
        
<!-- newsletter -->
<section class="newsletter jarallax bg-cover" style="background-image: url('{{asset('front/assets/images/index_newsletter.webp')}}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-primary text-uppercase title mb-4 mb-md-5">{{__('front.JoinOurNewsletter')}}</h3>
                <form action="{{route('front.subscription.store',['lang'=>$lang])}}" method="POST" class="d-flex w-100 flex-column flex-md-row align-items-start justify-content-md-start align-items-md-end">
                    @csrf
                    <input type="text" name="email" placeholder="{{__('front.YourE-mail')}}" class="form_transparent">
                    <button class="c_btn btn_transparent text-white pe-0 d-none d-md-inline-block" type="submit" name="">{{__('front.SUBSCRIBE')}}
                        <i class='bx bx-right-arrow-alt text-primary fs-4 align-middle text-white'></i>
                    </button>
                    <button class="c_btn btn_light d-md-none mt-5">{{__('front.SUBSCRIBE')}}</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- newsletter end -->
@endsection
@push('javascript')
<script>
	$(document).ready(function(){
		@if(Session::get('result') && Session::get('result')[0])
			alert('Subscription Success');
		@elseif(Session::get('result') && !Session::get('result')[0])
			alert('Subscription Error');
		@endif
	});
	@php
		Session::pull('result');
	@endphp
    const tag = document.createElement('script')
    tag.src = "https://www.youtube.com/iframe_api"
    const firstScriptTag = document.getElementsByTagName('script')[0]
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var players = {};
    var carousel_players = {};

    function onYouTubeIframeAPIReady() {
        Object.keys(players).map((key) => {
            setTimeout(() => {
                players[key] = new YT.Player(key, {
                    videoId: players[key],
                    playerVars: {
                        'playsinline': 1,
                        loop: 1,
                        controls:0,
                        playlist:players[key],
                        autohide:1,
                    },
                    events: {
                        'onReady': function(){
                            $(window).scroll(function(){
                                let window_top = $(window).scrollTop();
                                let window_bottom = $(window).scrollTop() + $(window).height();
                                Object.keys(players).map((key) => {
                                    let video = $(`#${key}`);
                                    let iframe_top = video.offset().top;
                                    let iframe_bottom = video.offset().top + video.height();
                                    if(window_bottom > iframe_top && window_top < iframe_bottom) {
                                        players[key].playVideo();
                                    }else{
                                        players[key].pauseVideo();
                                    }
                                });
                            });
                        },
                    }
                });
            }, 100);
        });
        Object.keys(carousel_players).map((key) => {
            setTimeout(() => {
                carousel_players[key] = new YT.Player(key, {
                    videoId: carousel_players[key],
                    playerVars: {
                        'playsinline': 1,
                        loop: 1,
                        controls:0,
                        playlist:carousel_players[key],
                        autohide:1,
                    },
                    events: {
                        'onReady': function(){
                            $(window).scroll(function(){
                                let window_top = $(window).scrollTop();
                                let window_bottom = $(window).scrollTop() + $(window).height();
                                Object.keys(carousel_players).map((key) => {
                                    let video = $(`#${key}`);
                                    let iframe_top = video.offset().top;
                                    let iframe_bottom = video.offset().top + video.height();
                                    if(window_bottom > iframe_top && window_top < iframe_bottom) {
                                        carousel_players[key].playVideo();
                                    }else{
                                        carousel_players[key].pauseVideo();
                                    }
                                });
                            });
                        },
                    }
                });
            }, 100);
        });

        // $('.index_banner_slick').on('init', function(event, slick, direction){
        //     let video = $(slick.$slides[0]).find('.iframe_video');
        //     if(video.length > 0) {
        //         setTimeout(() => {
        //             // carousel_players[video.attr('id')].mute();
        //             carousel_players[video.attr('id')].playVideo();
        //         }, 1000);
        //     }
        // })

        $('.index_banner_slick').slick({
            dots: false,
            arrows: true,
            infinite: true,
            // speed: 300,
            // fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            // autoplay: true,
            // autoplaySpeed: 4000
        });

        $('.index_banner_slick').on('afterChange', function(event, slick, direction){
            slick.$slides.map((index) => {
                let search = $(slick.$slides[index]).find('.iframe_video');
                if(search.length > 0) {
                    carousel_players[search.attr('id')].pauseVideo();
                }
            });
            let video = $(slick.$slides[direction]).find('.iframe_video');
            if(video.length > 0) {
                carousel_players[video.attr('id')].unMute();
                carousel_players[video.attr('id')].playVideo();
            }
        })
    }
</script>
@endpush
@push('style')
<style>
    .iframe_video {
        width:100%;
        /* height: calc(100vw/1.77); */
        height: calc(100vw * 0.5625 / 1.007);
    }
    @media(max-width: 1399px) {
        .iframe_video.banner_iframe_video{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: calc(100vh * 16/9);
            height: 100vh;
        }
    }
</style>
@endpush