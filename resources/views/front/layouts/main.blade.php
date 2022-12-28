<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEKTRO</title>
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon3.ico')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-utilities.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.css')}}">
    <!-- bootstrap end -->
    <link rel="stylesheet" href="{{asset('front/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700&family=Poppins:wght@400;700&display=swap;" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.css')}}">

    <script src="{{asset('front/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('front/assets/js/slick.min.js')}}"></script>
    <!-- <script src="{{asset('front/assets/js/bootstrap.js')}}"></script> -->
    <script src="{{asset('front/assets/js/bootstrap.bundle.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.3/jarallax.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('front/assets/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js?1')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://">
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
                                <a href="tektro.html" class="link-tektro d-block"><img src="{{asset('front/assets/images/TEKTRO_w.png')}}"
                                        alt="TEKTRO logo"></a>
                                <div class="logo_divider"></div>
                                <a href="trp.html" class="link-trp d-block"><img src="{{asset('front/assets/images/TRP_w.svg')}}"
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
                        <ul class="ul_li_right text-uppercase clearfix">
                            <li class="menu_item"><a href="{{route('front.index',['lang'=>$lang])}}">首頁</a></li>
                            <li class="menu_item_has_child">
                                <a href="#" class="menu_item_link">資訊</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group informationLink">
                                                        <li class="menu_item_has_child">
                                                            <a href="{{route('front.news.index',['lang'=>$lang])}}" class="page_link">最新消息</a>
                                                        </li>
                                                        <li class="menu_item_has_child">
                                                            <a href="{{route('front.recruit.index',['lang'=>$lang])}}" class="page_link">人才招募</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <img src="{{asset('front/assets/images/information_news_thumbnail.jpg')}}"
                                                            alt="information_thumbnail" id="informationImage">
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">關於我們</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group aboutLink">
                                                        <li class="menu_item_has_child">
                                                            <a href="{{route('front.about.show',['lang'=>$lang,'about'=>'company'])}}" class="page_link">集團介紹</a>
                                                        </li>
                                                        <li class="menu_item_has_child"><a href="#"
                                                                class="page_link">品牌介紹</a>
                                                        </li>
                                                        <li class="menu_item_has_child"><a href="#"
                                                                class="page_link">社會責任 CSR</a></li>
                                                        <li class="menu_item_has_child"><a href="#"
                                                                class="page_link">創新價值</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <img src="{{asset('front/assets/images/about_company_thumbnail.jpg')}}"
                                                            alt="about_thumbnail" id="aboutImage">
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">品牌產品</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-2">
                                                    <ul class="ps-0 page_link_group productLink">
                                                        @foreach($brands as $brand)
                                                        <li class="menu_item_has_child" data-id="brand_{{$brand->id}}">
                                                            <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>$brand->id])}}" class="page_link">
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
                                                                <div class="text-muted border-bottom border-gray pb-3 mb-3">產品類別</div>
                                                                <ul class="list-unstyled d-flex flex-wrap w-100">
                                                                    @foreach($brand->categories as $category)
                                                                    <li class="col-6">
                                                                        <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}" class="d-inline-block py-2 fw-light">{{$category->name}}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <div class="col-6 px-3">
                                                                <div
                                                                    class="text-muted border-bottom border-gray pb-3 mb-3">
                                                                    自行車類別</div>
                                                                <ul class="list-unstyled d-flex flex-wrap w-100">
                                                                    @foreach($brand->tags as $tag)
                                                                    <li class="col-6">
                                                                        <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$tag->id])}}" class="d-inline-block py-2 fw-light">{{$tag->name}}</a>
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
                                <a href="javascript:void(0)" class="menu_item_link">支援</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group supportLink">
                                                        <li class="menu_item_has_child">
                                                            <a href="{{route('front.support.show',['support'=>'all','lang'=>$lang])}}" class="page_link">
                                                                技術手冊
                                                            </a>
                                                        </li>
                                                        <li class="menu_item_has_child"><a href="{{route('front.video.index',['lang'=>$lang])}}"
                                                                class="page_link">影音分享</a>
                                                        </li>
                                                        <li class="menu_item_has_child"><a href="{{route('front.faq.index',['lang'=>$lang])}}"
                                                                class="page_link">常見問題</a></li>
                                                        <li class="menu_item_has_child"><a href="{{route('front.warranty.index',['lang'=>$lang])}}"
                                                                class="page_link">保固條款</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <img src="{{asset('front/assets/images/support_downloads_thumbnail.jpg')}}" alt="support_thumbnail" id="supportImage">
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="javascript:void(0)" class="menu_item_link">聯絡</a>
                                <div class="mega_menu">
                                    <div class="background">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col"></div>
                                                <div class="col-3">
                                                    <ul class="ps-0 page_link_group connectLink">
                                                        <li class="menu_item_has_child"><a href="{{route('front.contact.index',['lang'=>$lang])}}"
                                                                class="page_link">聯絡表單</a>
                                                        </li>
                                                        <li class="menu_item_has_child"><a href="{{route('front.global.index',['lang'=>$lang])}}"
                                                                class="page_link">全球據點</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <img src="{{asset('front/assets/images/connect_connect_thumbnail.jpg')}}"
                                                            alt="connect_thumbnail" id="connectImage">
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
                        <div class="me-4">
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
                                <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'de'])}}">Deutsch</a></li>
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
                    <a href="tektro.html" class="link-tektro d-block"><img src="{{asset('front/assets/images/TEKTRO_w.png')}}"
                            alt="TEKTRO logo"></a>
                    <div class="logo_divider"></div>
                    <a href="trp.html" class="link-trp d-block"><img src="{{asset('front/assets/images/TRP_w.svg')}}" alt="TRP logo"></a>
                </div>
            </div>

            <form class="form-group d-block d-flex position-relative search_box mb-4">
                <div class="input-group input-group-lg">
                    <span class="input-group-text ps-3 bg-white border-0">
                        <i class='bx bx-search'></i>
                    </span>
                    <input class="form-control border-0 ps-0 fs-6" type="search" placeholder="Search...">
                </div>

            </form>

            <div class="msb_widget mobile_menu_list clearfix">
                <ul class="clearfix list-unstyled">
                    <li><a class="text-white" href="{{route('front.index',['lang'=>$lang])}}">首頁</a></li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="position-relative text-white">資訊</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('front.news.index',['lang'=>$lang])}}">最新消息</a>
                            </li>
                            <li>
                                <a href="{{route('front.recruit.index',['lang'=>$lang])}}">人才招募</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="position-relative text-white">關於我們</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('front.about.show',['lang'=>$lang,'about'=>'company'])}}">集團介紹</a></li>
                            <li><a href="#!">品牌介紹</a></li>
                            <li><a href="#!">社會責任 CSR</a></li>
                            <li><a href="#!">創新價值</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="position-relative text-white">品牌產品</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">TRKTRO</a>
                                <ul class="dropdown-menu">
                                    <p class="p-4 mb-0 fs-7 text-white-50">產品類別</p>
                                    <li><a href="#">碟煞</a></li>
                                    <li><a href="#">煞皮</a></li>
                                    <li><a href="#">夾器</a></li>
                                    <li><a href="#">零配件</a></li>
                                    <li><a href="#">手把</a></li>
                                    <li><a href="#">來令片</a></li>
                                    <p class="p-4 mb-0 fs-7 text-white-50">自行車類別</p>
                                    <li><a href="#">登山車</a></li>
                                    <li><a href="#">旅行車</a></li>
                                    <li><a href="#">公路車</a></li>
                                    <li><a href="#">表驗</a></li>
                                    <li><a href="#">林道越野車</a></li>
                                    <li><a href="#">電動車</a></li>
                                    <li><a href="#">三鐵/計時車</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TRP</a>
                                <ul class="dropdown-menu">
                                    <p class="p-4 mb-0 fs-7 text-white-50">產品類別</p>
                                    <li><a href="#">油壓</a></li>
                                    <li><a href="#">機碟</a></li>
                                    <li><a href="#">手把</a></li>
                                    <li><a href="#">碟盤</a></li>
                                    <li><a href="#">來令片</a></li>
                                    <p class="p-4 mb-0 fs-7 text-white-50">自行車類別</p>
                                    <li><a href="#">登山車</a></li>
                                    <li><a href="#">GRAVEL</a></li>
                                    <li><a href="#">PAVEMENT</a></li>
                                    <li><a href="#">SNOW</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="position-relative text-white">支援</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('front.support.show',['support'=>'all','lang'=>$lang])}}">技術手冊</a></li>
                            <li><a href="{{route('front.video.index',['lang'=>$lang])}}">影音分享</a></li>
                            <li><a href="{{route('front.faq.index',['lang'=>$lang])}}">常見問題</a></li>
                            <li><a href="{{route('front.warranty.index',['lang'=>$lang])}}">保固條款</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="position-relative text-white">聯絡</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('front.contact.index',['lang'=>$lang])}}">聯絡我們</a></li>
                            <li><a href="{{route('front.global.index',['lang'=>$lang])}}">全球據點</a></li>
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
                    <li><a class="dropdown-item fs-7" href="{{route('front.index',['lang'=>'de'])}}">Deutsch</a></li>
                </ul>
            </div>

        </div>

        <div class="overlay"></div>
    </div>
    <!-- end sidebar mobile menu -->
    @yield('content')
    
    <!-- cookie box end   -->

    <!-- search Modal start-->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top: 75px;">
            <div class="modal-content">

                <form class="form-group d-block d-flex position-relative search_box">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text ps-3 bg-white border-0">
                            <i class='bx bx-search'></i>
                        </span>
                        <input class="form-control border-0 ps-0 fs-6" type="search" placeholder="Search...">
                    </div>
                </form>

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
                    <h5 class="fs-6 fw-bold mb-4">資訊</h5>
                    <div>
                        <a href="{{route('front.news.index',['lang'=>$lang])}}" class="footer_link">最新消息</a>
                    </div>
                    <div>
                        <a href="{{route('front.recruit.index',['lang'=>$lang])}}" class="footer_link">人才招募</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">關於我們</h5>
                    <div>
                        <a href="{{route('front.about.show',['lang'=>$lang,'about'=>'company'])}}" class="footer_link">集團介紹</a>
                    </div>
                    <div>
                        <a href="#" class="footer_link">品牌介紹</a>
                    </div>
                    <div>
                        <a href="#" class="footer_link">社會責任 CSR</a>
                    </div>
                    <div>
                        <a href="#" class="footer_link">創新價值</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">品牌產品</h5>
                    <div>
                        <a href="tektro.html" class="footer_link">TEKTRO</a>
                    </div>
                    <div>
                        <a href="trp.html" class="footer_link">TRP</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">支援</h5>
                    <div>
                        <a href="{{route('front.support.show',['support'=>'all','lang'=>$lang])}}" class="footer_link">技術手冊</a>
                    </div>
                    <div>
                        <a href="{{route('front.video.index',['lang'=>$lang])}}" class="footer_link">影音分享</a>
                    </div>
                    <div>
                        <a href="{{route('front.faq.index',['lang'=>$lang])}}" class="footer_link">常見問題</a>
                    </div>
                    <div>
                        <a href="{{route('front.warranty.index',['lang'=>$lang])}}" class="footer_link">保固條款</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-2">
                    <h5 class="fs-6 fw-bold mb-4">聯絡</h5>
                    <div>
                        <a href="{{route('front.contact.index',['lang'=>$lang])}}" class="footer_link">聯絡我們</a>
                    </div>
                    <div>
                        <a href="{{route('front.global.index',['lang'=>$lang])}}" class="footer_link">全球據點</a>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 d-none d-md-flex footer_logo_group justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <a href="tektro.html" class="link-tektro d-block"><img src="{{asset('front/assets/images/TEKTRO_w.png')}}"
                                alt="TEKTRO logo"></a>
                        <div class="logo_divider"></div>
                        <a href="trp.html" class="link-trp d-block"><img src="{{asset('front/assets/images/TRP_w.svg')}}"
                                alt="TRP logo"></a>
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
                            <li><a class="dropdown-item" href="{{route('front.index',['lang'=>'de'])}}">Deutsch</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="mb-4 mb-md-0 footer_media_group">
                        <span class="text-white opacity-50 fs-7 d-none d-dm-inline-block me-4">FOLLOW US</span>
                        <a href="#" target="_blank" class="d-inline-block me-3"><i
                                class='bx bxl-instagram text-white fs-1 fs-md-3 align-middle'></i></a>
                        <a href="#" target="_blank" class="d-inline-block me-3"><i
                                class='bx bxl-facebook text-white fs-1 fs-md-3 align-middle'></i></a>
                        <a href="#" target="_blank" class="d-inline-block"><i
                                class='bx bxl-youtube text-white fs-1 fs-md-3 align-middle'></i></a>
                    </div>
                    <div class="text-white fs-7 opacity-50 text-center">© 2022 TEKTRO TECHNOLOGY CORP, ALL RIGHTS
                        RESERVED.
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
                            swipeToSlide: false
                        }
                    }
                ]
            })
        })

        

    </script>
    @stack('javascript')
</body>

</html>