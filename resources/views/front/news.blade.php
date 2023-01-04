@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(/front/assets/images/breadcrumb_info_news.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">最新消息</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">首頁</a>
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
        @if($news->count() > 0)
        <div class="row mb-12 mb-md-30">
            <div class="offset-md-1 col-md-10">
                <div class="mb-4 overflow-hidden">
                    <a href="{{route('front.news.show',['lang'=>$lang,'news'=>$news[0]->id])}}" class="ratio_outer" style="padding-bottom: 66%;">
                        <div class="ratio_inner bg-cover hover_transform_scale"
                            style="background-image: url('{{asset($news[0]->banner)}}');"></div>
                    </a>
                </div>
                <div class="d-flex flex-column flex-lg-row align-items-lg-start">
                    <div class="col-lg-4">
                        <h3 class="title_h2">{{$news[0]->name}}</h3>
                    </div>
                    <div class="col-lg-8 ps-lg-5">
                        <p class="text-muted fs-7 fs-md-6">{{$news[0]->description}}</p>
                        <a href="{{route('front.news.show',['lang'=>$lang,'news'=>$news[0]->id])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                            <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- latest end -->
        <div class="row mb-12 mb-md-20">
            <div class="offset-md-1 col-md-10">
                <div class="row">
                    @if($news->count() > 1)
                        @foreach($news as $key => $new)
                            @if($key != 0)
                            <div class="col-md-6 col-lg-4 mb-12 listBox moreBox" @if($key>6) style="display: none;" @endif>
                                <div class="mb-4 overflow-hidden">
                                    <a href="{{route('front.news.show',['lang'=>$lang,'news'=>$new->id])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                        <div class="ratio_inner bg-cover hover_transform_scale"
                                            style="background-image: url('{{asset($new->banner)}}');"></div>
                                    </a>
                                </div>
                                <div class="">
                                    <h3 class="title_h2">{{$new->name}}</h3>
                                    <p class="text-muted fs-7 fs-md-6">{{$new->description}}</p>
                                    <a href="{{route('front.news.show',['lang'=>$lang,'news'=>$new->id])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                        <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                                    </a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    @endif
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