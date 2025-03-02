<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(isset($seo) && $seo->getTranslation('title', $lang,false)){{$seo->getTranslation('title', $lang,false)}}@else{{$web_setting?->getTranslation('title', $lang,false)}}@endif</title>
    <meta name="description" content="@if(isset($seo) && $seo->getTranslation('description', $lang,false)){{$seo->getTranslation('description', $lang,false)}}@else{{$web_setting?->getTranslation('description', $lang,false)}}@endif">
    <meta name="keywords" content="@if(isset($seo) && $seo->getTranslation('keyword', $lang,false)){{$seo->getTranslation('keyword', $lang,false)}}@else{{$web_setting?->getTranslation('keyword', $lang,false)}}@endif">
    <meta name="author" content="{{$web_setting?->getTranslation('author', $lang,false)}}">
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon3.ico')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-utilities.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.css')}}">
    <!-- bootstrap end -->
    <link rel="stylesheet" href="{{asset('front/assets/css/base.css?v7')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/custom.css?v28')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700&family=Poppins:wght@400;700&display=swap;" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.css')}}">

    <script src="{{asset('front/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('front/assets/js/slick.min.js')}}"></script>
    <!-- <script src="{{asset('front/assets/js/bootstrap.js')}}"></script> -->
    <script src="{{asset('front/assets/js/bootstrap.bundle.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.3/jarallax.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('front/assets/js/jquery.cookie.js')}}"></script>
    <!-- <script src="{{asset('front/assets/js/jquery.elevatezoom.min.js')}}"></script> -->
    <script src="{{asset('front/assets/js/image-zoom.js?')}}"></script>
    <script src="{{asset('front/assets/js/main.js?v12')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
    @yield('og')
    @stack('style')
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2SMC50QY51"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2SMC50QY51');
    </script>

   
</head>

<body>

    <!-- header_section -->
    <header class="header_section custom_header sticky_header clearfix">
        <div class="header_content_wrap d-flex align-items-center clearfix">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between">

                    <div class="">
                        <div class="brand_logo">
                            <div class="d-flex align-items-center">
                                <a id="tektro-logo" href="{{route('front.brand.show',['lang'=>$lang,'brand'=>'Tektro'])}}" class="link-tektro d-block"><img src="{{asset('front/assets/images/TEKTRO_w.png')}}"
                                        alt="TEKTRO logo"></a>
                                <div class="logo_divider"></div>
                                <a id="trp-logo" href="{{route('front.brand.show',['lang'=>$lang,'brand'=>'Trp'])}}" class="link-trp d-block"><img src="{{asset('front/assets/images/TRP_w.svg')}}"
                                        alt="TRP logo"></a>
                            </div>

                        </div>
                    </div>

                    <ul class="mh_action_btns ul_li clearfix">
                        <li>
                            <button type="button" class="mobile_menu_btn">
                                <!-- <i class='bx bx-menu'></i> -->
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                    </ul>
                    <!-- <div class=""> -->
                    <nav class="main_menu clearfix">
                        <ul class="ul_li_right text-uppercase clearfix flex-nowrap">
                            <li class="menu_item"><a href="{{route('front.index',['lang'=>$lang])}}">{{__('front.home')}}</a></li>
                            <li class="menu_item_has_child">
                                <a href="#" class="menu_item_link">{{__('front.information')}}</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group informationLink">
                                                        <li class="menu_item_has_child info_li" data-target="info_new">
                                                            <a href="{{route('front.news.index',['lang'=>$lang])}}" class="page_link">{{__('front.news')}}</a>
                                                        </li>
                                                                            {{-- @Ivan MODIFIED 2025/02/14 --}}
                                                        {{-- <li class="menu_item_has_child info_li" data-target="info_recruit">
                                                            <a href="{{route('front.recruit.index',['lang'=>$lang])}}" class="page_link">{{__('front.recruit')}}</a>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div class="info_banner" id="info_new">
                                                        <img src="{{asset(($headers['front.new.index']??'front/assets/images/information_news_thumbnail.jpg'))}}" alt="information_thumbnail" >
                                                    </div>
                                                    <div class="info_banner" id="info_recruit" style="display:none;">
                                                        <img src="{{asset(($headers['front.recruit.index']??'front/assets/images/information_news_thumbnail.jpg'))}}" alt="information_thumbnail" >
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">{{__('front.about_us')}}</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group aboutLink">
                                                        @foreach($abouts as $about)
                                                        <li class="menu_item_has_child about_li" data-target="about_{{$about->id}}">
                                                            <a href="{{route('front.about.show',['lang'=>$lang,'about'=>$about->id])}}" class="page_link">{{$about->name}}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    @foreach($abouts as $key => $about)
                                                    <div class="about_banner" @if($key != 0) style="display:none;" @endif id="about_{{$about->id}}">
                                                        <img src="{{asset($about->banner)}}" alt="about_thumbnail">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">{{__('front.brand_product')}}</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-2">
                                                    <ul class="ps-0 page_link_group productLink">
                                                        @foreach($brands as $brand)
                                                        <li class="menu_item_has_child" data-id="brand_{{$brand->id}}">
                                                            <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>$brand->code])}}" class="page_link">
                                                                {{$brand->name}}
                                                                <i class='bx bxs-chevron-right align-middle ms-2'></i>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-8" id="productContent">
                                                    @foreach($brands as $key => $brand)
                                                    <div id="brand_{{$brand->id}}" @if($key!=0) style="display:none;" @endif>
                                                        <div
                                                            class="d-flex w-100 justify-content-between align-items-start">
                                                            <div class="col-6 px-3">
                                                                <div class="text-muted border-bottom border-gray pb-3 mb-3">{{__('front.product_category')}}</div>
                                                                <ul class="list-unstyled d-flex flex-wrap w-100">
                                                                    @foreach($brand->categories as $category)
                                                                    <li class="col-6">
                                                                        <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}" class="d-inline-block py-2 fw-light">{{$category->name}}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <div class="col-6 px-3">
                                                                <div class="text-muted border-bottom border-gray pb-3 mb-3">{{__('front.bike_category')}}</div>
                                                                <ul class="list-unstyled d-flex flex-wrap w-100">
                                                                    @foreach($brand->tags()->where(['type'=>1])->get() as $tag)
                                                                    <li class="col-6">
                                                                        <a href="{{route('front.tag.show',['lang'=>$lang,'tag'=>$tag->id])}}" class="d-inline-block py-2 fw-light">{{$tag->name}}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">{{__('front.support')}}</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group supportLink">
                                                        <li class="menu_item_has_child support_li" data-target="support_support">
                                                            <a href="{{route('front.support.show',['support'=>'all','lang'=>$lang])}}" class="page_link">
                                                            {{__('front.technology_manual')}}
                                                            </a>
                                                        </li>
                                                        <li class="menu_item_has_child support_li" data-target="support_video">
                                                            <a href="{{route('front.video.index',['lang'=>$lang])}}" class="page_link">
                                                            {{__('front.video_share')}}
                                                            </a>
                                                        </li>
                                                        <li class="menu_item_has_child support_li" data-target="support_faq">
                                                            <a href="{{route('front.faq.index',['lang'=>$lang])}}" class="page_link">
                                                            {{__('front.common_question')}}
                                                            </a>
                                                        </li>
                                                        <li class="menu_item_has_child support_li" data-target="support_warranty">
                                                            <a href="{{route('front.warranty.index',['lang'=>$lang])}}" class="page_link">
                                                            {{__('front.warranty_terms')}}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div class="support_banner" id="support_support">
                                                        <img src="{{asset(($headers['front.support.index']??'front/assets/images/support_downloads_thumbnail.jpg'))}}" alt="support_thumbnail" >
                                                    </div>
                                                    <div class="support_banner" id="support_video" style="display:none;">
                                                        <img src="{{asset(($headers['front.video.index']??'front/assets/images/support_downloads_thumbnail.jpg'))}}" alt="support_thumbnail" >
                                                    </div>
                                                    <div class="support_banner" id="support_faq" style="display:none;">
                                                        <img src="{{asset(($headers['front.faq.index']??'front/assets/images/support_downloads_thumbnail.jpg'))}}" alt="support_thumbnail" >
                                                    </div>
                                                    <div class="support_banner" id="support_warranty" style="display:none;">
                                                        <img src="{{asset(($headers['front.warranty.index']??'front/assets/images/support_downloads_thumbnail.jpg'))}}" alt="support_thumbnail" >
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">{{__('front.contact')}}</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group connectLink">
                                                        <li class="menu_item_has_child contact_li" data-target="contact_contact">
                                                            <a href="{{route('front.contact.index',['lang'=>$lang])}}" class="page_link">
                                                            {{__('front.contact_form')}}
                                                            </a>
                                                        </li>
                                                        <li class="menu_item_has_child contact_li" data-target="contact_global">
                                                            <a href="{{route('front.global.index',['lang'=>$lang])}}" class="page_link">
                                                            {{__('front.global_base')}}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div class="contact_banner" id="contact_contact">
                                                        <img src="{{asset(($headers['front.contact.index']??'front/assets/images/connect_connect_thumbnail.jpg'))}}" alt="connect_thumbnail" >
                                                    </div>
                                                    <div class="contact_banner" id="contact_global" style="display:none;">
                                                        <img src="{{asset(($headers['front.global.index']??'front/assets/images/connect_connect_thumbnail.jpg'))}}" alt="connect_thumbnail" >
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="nav_divider"></div>
                        <div class="me-2">
                            <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class='bx bx-search text-white fs-4 align-bottom'></i>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle btn_lang text-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                @if($lang == 'zh-Hant')
                                台灣（繁體）
                                @elseif($lang =='en')
                                English(US)
                                @elseif($lang =='de')
                                Deutsch
                                @endif
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'zh-Hant'])}}">台灣（繁體）</a></li>
                                <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'en'])}}">English(US)</a></li>
                                <!-- <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'de'])}}">Deutsch</a></li> -->
                            </ul>
                        </div>
                    </nav>

                    <!-- </div> -->

                </div>
            </div>


        </div>

    </header>
    <!-- end header_section -->

    <!-- sidebar mobile menu -->
    <div class="sidebar-menu-wrapper">

        <div class="sidebar_mobile_menu">
            <button type="button" class="close_btn">
                <!-- <i class='bx bx-x'></i> -->
                <span></span>
                <span></span>
            </button>

            <div class="msb_widget brand_logo text-center">
                <div class="d-flex align-items-center">
                    <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>'Tektro'])}}" class="link-tektro d-block">
                        <img src="{{asset('front/assets/images/TEKTRO_w.png')}}" alt="TEKTRO logo">
                    </a>
                    <div class="logo_divider"></div>
                    <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>'Trp'])}}" class="link-trp d-block">
                        <img src="{{asset('front/assets/images/TRP_w.svg')}}" alt="TRP logo">
                    </a>
                </div>
            </div>

            <form class="form-group d-block d-flex position-relative search_box mb-4" action="{{route('front.search.index',['lang'=>$lang])}}" name="search">
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text ps-3 bg-white border-0">
                        <i class='bx bx-search'></i>
                    </span>
                    <input class="form-control border-0 ps-0 fs-6" type="search" name="word" placeholder="{{__('front.search')}}" id="mobile_search" autocomplete="off">
                </div>
            </form>
            @if($keywords)
            <div class="px-3 pb-3 pt-3 bg-white rounded-1" style="position: relative;top: -24px;display:none" id="mobile_keyword">
                <div class="row record" style="display:none;">
                    <div class="col-md-12">
                        <span class="text-secondary">{{__('front.search_record')}}</span>
                    </div>
                    <div class="search_record"></div>
                </div>
                <div class="">
                    <div class="col-md-12 mb-2">
                        <span class="text-secondary">{{__('front.popluar_search')}}</span>
                    </div>
                    @foreach($keywords as $keyword)
                    <div class="col-md-12 mb-2">
                        <a href="{{route('front.search.index',['lang'=>$lang,'word'=>$keyword->name])}}">{{$keyword->name}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="msb_widget mobile_menu_list clearfix">
                <ul class="clearfix list-unstyled">
                    <li><a class="text-white" href="{{route('front.index',['lang'=>$lang])}}">{{__('front.home')}}</a></li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="position-relative text-white">{{__('front.information')}}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('front.news.index',['lang'=>$lang])}}">{{__('front.news')}}</a>
                            </li>
                                                {{-- @Ivan MODIFIED 2025/02/14 --}}
                            {{-- <li>
                                <a href="{{route('front.recruit.index',['lang'=>$lang])}}">{{__('front.recruit')}}</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="position-relative text-white">{{__('front.about_us')}}</a>
                        <ul class="dropdown-menu">
                            @foreach($abouts as $about)
                            <li>
                                <a href="{{route('front.about.show',['lang'=>$lang,'about'=>$about->id])}}">{{$about->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="position-relative text-white">{{__('front.brand_product')}}</a>
                        <ul class="dropdown-menu">
                            @foreach($brands as $key => $brand)
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$brand->name}}</a>
                                <ul class="dropdown-menu">
                                    <p class="p-4 mb-0 fs-7 text-white-50">{{__('front.product_category')}}</p>
                                    @foreach($brand->categories as $category)
                                    <li><a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}">{{$category->name}}</a></li>
                                    @endforeach
                                    <p class="p-4 mb-0 fs-7 text-white-50">{{__('front.bike_category')}}</p>
                                    @foreach($brand->tags as $tag)
                                    <li><a href="{{route('front.tag.show',['lang'=>$lang,'tag'=>$tag->id])}}">{{$tag->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="position-relative text-white">{{__('front.support')}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('front.support.show',['support'=>'all','lang'=>$lang])}}">{{__('front.technology_manual')}}</a></li>
                            <li><a href="{{route('front.video.index',['lang'=>$lang])}}">{{__('front.video_share')}}</a></li>
                            <li><a href="{{route('front.faq.index',['lang'=>$lang])}}">{{__('front.common_question')}}</a></li>
                            <li><a href="{{route('front.warranty.index',['lang'=>$lang])}}">{{__('front.warranty_terms')}}</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="position-relative text-white">{{__('front.contact')}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('front.contact.index',['lang'=>$lang])}}">{{__('front.contact_form')}}</a></li>
                            <li><a href="{{route('front.global.index',['lang'=>$lang])}}">{{__('front.global_base')}}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle btn_lang text-primary fs-7" data-bs-toggle="dropdown" aria-expanded="false">
                    @if($lang == 'zh-Hant')
                    台灣（繁體）
                    @elseif($lang =='en')
                    English(US)
                    @elseif($lang =='de')
                    Deutsch
                    @endif
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item fs-7" href="{{route('front.index',['lang'=>'zh-Hant'])}}">台灣（繁體）</a></li>
                    <li><a class="dropdown-item fs-7" href="{{route('front.index',['lang'=>'en'])}}">English(US)</a></li>
                    <!-- <li><a class="dropdown-item fs-7" href="{{route('front.index',['lang'=>'de'])}}">Deutsch</a></li> -->
                </ul>
            </div>

        </div>

        <div class="overlay"></div>
    </div>
    <!-- end sidebar mobile menu -->
    @yield('content')
    <!-- cookie box   -->
    <div class="row" id="cookieAcceptBar">
        <div class="cookie_box">
            <div class="p-3 p-md-5">
                <form name="set_cookie">
                    <p class="mb-4 text-center">{{__('front.cookie.title1')}}
                        <br>
                        {{__('front.cookie.title2')}}
                    </p>
                    <div class="mb-4" id="cookie-selection" style="display: none;">
                        <div class="form-check form-switch mb-4 position-relative">
                            <input class="form-check-input" type="checkbox" role="switch" id="SwitchFunctifonalCookie" name="normal" checked disabled>
                            <label class="form-check-label fw-bold ps-3" for="SwitchFunctionalCookie">{{__('front.cookie.function')}}
                                <br>
                                <span class="fs-7 fw-normal">{{__('front.cookie.title3')}}</span>
                            </label>
                            
                        </div>
                        <div class="form-check form-switch mb-4 position-relative">
                            <input class="form-check-input" type="checkbox" role="switch" id="SwitchAnalyticalCookie" name="no_an" checked>
                            <label class="form-check-label fw-bold ps-3" for="SwitchAnalyticalCookie">{{__('front.cookie.analysis')}}
                                <br>
                                <span class="fs-7 fw-normal">{{__('front.cookie.title4')}}</span>
                            </label>
                            
                        </div>
                        <div class="form-check form-switch mb-4 position-relative">
                            <input class="form-check-input" type="checkbox" role="switch" id="SwitchAdCookie" name="no_ad" checked>
                            <label class="form-check-label fw-bold ps-3" for="SwitchAdCookie">{{__('front.cookie.marketing')}}</label>
                            <p class="fs-7 ps-3">{{__('front.cookie.title5')}}</p>
                        </div>
                    </div>
                        <!-- <a href="#" class="text-decoration-underline"> 隱私權保護政策</a>。 -->
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-center">
                        <button class="c_btn btn_dark mb-2 mb-sm-0 me-sm-3" id="cookie-agree" value="agree" type="submit">{{__('front.accept_cookie')}}</button>
                        <button class="c_btn btn_dark mb-2 mb-sm-0 me-sm-3" id="cookie-agree-selected" value="" style="display: none;"  type="submit">{{__('front.save_setting')}}</button>
                        <button class="c_btn btn_white me-sm-3" id="cookie-disagree" value="disagree">{{__('front.reject_cookie')}}</button>
                        <button class="c_btn border-0 bg-transparent text-decoration-underline fw-normal hover_opacity" id="cookie-selection-trigger">{{__('front.setting_cookie')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- search Modal start-->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top: 75px;">
            <div class="modal-content">
                <form class="form-group d-block d-flex position-relative search_box" action="{{route('front.search.index',['lang'=>$lang])}}" name="search">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text ps-3 bg-white border-0">
                            <i class='bx bx-search'></i>
                        </span>
                        <input class="form-control border-0 ps-0 fs-6" type="search" name="word" placeholder="{{__('front.search')}}">
                    </div>
                </form>
                @if($keywords)
                <div class="px-3 pb-2 pt-3">
                    <div class="row record" style="display:none;">
                        <div class="col-md-12">
                            <span class="text-secondary">{{__('front.search_record')}}</span>
                        </div>
                        <div class="search_record"></div>
                    </div>
                    <div class="">
                        <div class="col-md-12 mb-2">
                            <span class="text-secondary">{{__('front.popluar_search')}}</span>
                        </div>
                        @foreach($keywords as $keyword)
                        <div class="col-md-12 mb-2">
                            <a href="{{route('front.search.index',['lang'=>$lang,'word'=>$keyword->name])}}">{{$keyword->name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- search Modal end-->


    <!-- footer -->
    <div class="ratio_outer" style="padding-bottom: 7%;margin-bottom: -1px;">
        <div class="ratio_inner"
            style="background: url('{{asset('front/assets/images/divider02.svg')}}') no-repeat center bottom; background-size: cover;">
        </div>
    </div>
    <footer class="position-relative bg-dark text-white pt-5 pb-12">
        <!-- <img src="assets/images/divider02.svg" alt="img_not_found" class="position-absolute w-100" style="top: -50%;"> -->
        <div class="container">
            <div class="row mb-4 mb-md-5">
                <div class="col-12 col-md-2">
                    <a href="{{route('front.index',['lang'=>$lang])}}" class="d-block text-center">
                        <img src="{{asset('front/assets/images/groupLogo_w.png')}}" alt="TEKTRO logo" class="footer_logo">
                    </a>
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">{{__('front.information')}}</h5>
                    <div>
                        <a href="{{route('front.news.index',['lang'=>$lang])}}" class="footer_link">{{__('front.news')}}</a>
                    </div>
                    {{-- @Ivan MODIFIED 2025/02/14 --}}
                    {{-- <div>
                        <a href="{{route('front.recruit.index',['lang'=>$lang])}}" class="footer_link">{{__('front.recruit')}}</a>
                    </div> --}}
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">{{__('front.about_us')}}</h5>
                    @foreach($abouts as $about)
                    <div>
                        <a href="{{route('front.about.show',['lang'=>$lang,'about'=>$about->id])}}" class="footer_link">{{$about->name}}</a>
                    </div>
                    @endforeach
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">{{__('front.brand_product')}}</h5>
                    @foreach($brands as $brand)
                    <div>
                        <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>$brand->code])}}" class="footer_link">{{$brand->name}}</a>
                    </div>
                    @endforeach
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">{{__('front.support')}}</h5>
                    <div>
                        <a href="{{route('front.support.show',['support'=>'all','lang'=>$lang])}}" class="footer_link">{{__('front.technology_manual')}}</a>
                    </div>
                    <div>
                        <a href="{{route('front.video.index',['lang'=>$lang])}}" class="footer_link">{{__('front.video_share')}}</a>
                    </div>
                    <div>
                        <a href="{{route('front.faq.index',['lang'=>$lang])}}" class="footer_link">{{__('front.common_question')}}</a>
                    </div>
                    <div>
                        <a href="{{route('front.warranty.index',['lang'=>$lang])}}" class="footer_link">{{__('front.warranty_terms')}}</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">{{__('front.contact')}}</h5>
                    <div>
                        <a href="{{route('front.contact.index',['lang'=>$lang])}}" class="footer_link">{{__('front.contact_form')}}</a>
                    </div>
                    <div>
                        <a href="{{route('front.global.index',['lang'=>$lang])}}" class="footer_link">{{__('front.global_base')}}</a>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 d-none d-md-flex footer_logo_group justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>'Tektro'])}}" class="link-tektro d-block">
                            <img src="{{asset('front/assets/images/TEKTRO_w.png')}}" alt="TEKTRO logo">
                        </a>
                        <div class="logo_divider"></div>
                        <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>'Trp'])}}" class="link-trp d-block">
                            <img src="{{asset('front/assets/images/TRP_w.svg')}}" alt="TRP logo">
                        </a>
                    </div>
                    <div class="btn-group dropup">
                        <button type="button" class="btn dropdown-toggle btn_lang text-primary" data-bs-toggle="dropdown" aria-expanded="false">
                            @if($lang == 'zh-Hant')
                            台灣（繁體）
                            @elseif($lang =='en')
                            English(US)
                            @elseif($lang =='de')
                            Deutsch
                            @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'zh-Hant'])}}">台灣（繁體）</a></li>
                            <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'en'])}}">English(US)</a></li>
                            <!-- <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'de'])}}">Deutsch</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="mb-4 mb-md-0 footer_media_group">
                        <!-- <span class="text-white opacity-50 fs-7 d-none d-dm-inline-block me-4">FOLLOW US</span> -->
                        @if($community->instagram)
                        <a href="{{$community->instagram}}" target="_blank" class="d-inline-block me-3">
                            <i class='bx bxl-instagram text-white fs-1 fs-md-3 align-middle'></i>
                        </a>
                        @endif
                        @if($community->facebook)
                        <a href="{{$community->facebook}}" target="_blank" class="d-inline-block me-3">
                            <i class='bx bxl-facebook text-white fs-1 fs-md-3 align-middle'></i>
                        </a>
                        @endif
                        @if($community->youtube)
                        <a href="{{$community->youtube}}" target="_blank" class="d-inline-block">
                            <i class='bx bxl-youtube text-white fs-1 fs-md-3 align-middle'></i>
                        </a>
                        @endif
                    </div>
                    <div class="text-white fs-7 opacity-50 text-center">
                        {{$web_setting->getTranslation('copyright', $lang,false)}} 

                            <a href="https://www.masoudesign.com.tw/" style="color:#fff !important; visibility: hidden"></a>
                    </div>
                </div>
            </div>
    </footer>
    <!-- footer end -->

    <!-- btn fix -->
    <div class="btnGroup">
        <a href="#" class="btnGroup_link btnGroup_top mb-4">
        </a>
        <a href="{{route('front.contact.index',['lang'=>$lang])}}" target="_blank" class="btnGroup_link btnGroup_contact">
        </a>
    </div>
    <!-- end btn fix -->

    <script>
        $(document).ready(function () {

            // header product
            $('.productLink .menu_item_has_child').hover(function () {
                $("[id^=brand]").hide();
                $(`#${$(this).data('id')}`).show();
            });
            

            

            $('.index_news_slick').slick({
                dots: false,
                arrows: true,
                infinite: true,
                // speed: 300,
                // fade: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                // autoplay: true,
                // autoplaySpeed: 4000,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            swipeToSlide: false
                        }
                    }
                ]
            })
        })

        $('form[name="set_cookie"]').submit(function(){
            console.log($(this).serialize());
            return false;
        });
        $('#mobile_search').focus(function(){
            $('#mobile_keyword').show();
        });
        $('#mobile_search').blur(function(){
            $('#mobile_keyword').hide();
        });
        const recordKey = 'history';
        let record = localStorage.getItem(recordKey);
        if(!record) {
            record = [];
        }else{
            record = JSON.parse(record);
        }
        if(record.length > 0) {
            let str = '';
            record.map((item) => {
                str += `<div class="col-md-12 mb-2">
                            <a href="{{route('front.search.index',['lang'=>$lang])}}?word=${item}">${item}</a>
                        </div>`;
            });
            $('.search_record').html(str);
            $('.record').show();
        }
        $('.about_li').hover(function(){
            let target = $(this).data('target');
            $('.about_banner').hide();
            $(`#${target}`).show();
        });
        $('.info_li').hover(function(){
            let target = $(this).data('target');
            $('.info_banner').hide();
            $(`#${target}`).show();
        });
        $('.support_li').hover(function(){
            let target = $(this).data('target');
            $('.support_banner').hide();
            $(`#${target}`).show();
        });
        $('.contact_li').hover(function(){
            let target = $(this).data('target');
            $('.contact_banner').hide();
            $(`#${target}`).show();
        });
    </script>

{{-- @Ivan MODIFIED 2025/02/14 --}}
<style>
    #trp-logo,#tektro-logo {
        transition: transform 0.3s ease-in-out;
    }
</style>
<script async>
    const trpLogo = document.querySelector('#trp-logo')
    const tektroLogo = document.querySelector('#tektro-logo')

    if (trpLogo) {
        trpLogo.addEventListener('mouseover', () => {
            trpLogo.style.transform = "scale(1.1)";
        });

        trpLogo.addEventListener('mouseout', () => {
            trpLogo.style.transform = "scale(1)";
        });
    }

    if (tektroLogo) {
        tektroLogo.addEventListener('mouseover', () => {
            tektroLogo.style.transform = "scale(1.1)";
        });

        tektroLogo.addEventListener('mouseout', () => {
            tektroLogo.style.transform = "scale(1)";
        });
    }
</script>

    @stack('javascript')
</body>

</html>