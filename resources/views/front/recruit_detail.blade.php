@extends('front.layouts.main')
@section('og')
<meta property="og:title" content="{{$detail->name}}">
<meta property="og:description" content="{{$detail->description}}">
<meta property="og:image" content="{{asset($detail->banner)}}">
@endsection
@section('content')
<section class="breadcrumb mb-0" style="background-image: url(/front/assets/images/breadcrumb_info_career.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.recruit')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.information')}}</li>
                    <li>
                        <a href="{{route('front.recruit.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.recruit')}}</a>
                    </li>
                    <li class="text-white text-truncate">{{$detail->name}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<section class="mb-12 mb-md-20">
    <div class="jarallax bg-cover d-flex justify-content-center align-items-center news_detail_header" style="background-image: url('{{asset(($detail->up_image)?$detail->up_image:'/front/assets/images/info_news_img06.jpeg')}}');">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-white text-center fs-1 fw-bold mb-4">{{$detail->name}}</h2>
                    @if($detail->show_date)
                    <h3 class="text-white text-center fs-6 fw-bold">{{date('M d, Y',strtotime($detail->show_date))}}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row html_editor">
        {!!$detail->content!!}
    </div>
    <div class="row mt-5 mb-4 mb-md-5">
        <div class="col-md-10 offset-md-1">
            <div class="share_block">
                <span class="fw-bold mb-4 mb-md-0">{{__('front.SHARE THIS ARTICLE')}}</span>
                <div class="d-flex">
                    <!-- <a href="#" class="share_btn">
                        <i class='bx bxl-instagram'></i>
                    </a> -->
                    <a href="javascript:void(0)" class="share_btn" onclick="window.open('//www.facebook.com/sharer/sharer.php?u='+'{{url()->full()}}','facebook-share-dialog','width=626,height=436');">
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
                @if($prev)
                    <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>$prev->id])}}" class="d-block">
                        <small class="fw-bold d-block mb-3">
                            <i class='bx bx-left-arrow-alt align-middle me-2'></i>
                            {{__('front.PREV')}}
                        </small>
                        <span class="d-none d-md-block">
                            {{$prev->name}}
                        </span>
                    </a>
                @endif
                </div>
                <div class="col-4">
                @if($next)
                    <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>$next->id])}}" class="d-block">
                        <small class="fw-bold d-block mb-3 text-end">
                            {{__('front.NEXT')}}
                            <i class='bx bx-right-arrow-alt align-middle ms-2'></i>
                        </small>
                        <span class="d-none d-md-block text-end">
                            {{$next->name}}
                        </span>
                    </a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection