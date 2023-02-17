@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_videos_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.video_share')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.video_share')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container">
    <div class="row mb-12 mb-md-20">
        <div class="offset-md-1 col-md-10">
            <div class="row">
                @foreach($videos as $key => $video)
                <div class="col-md-6 col-lg-4 mb-12 listBox moreBox" @if($key>8) style="display: none;" @endif>
                    <div class="mb-4 overflow-hidden">
                        <a href="#" class="ratio_outer" style="padding-bottom: 56.25%;">
                            <iframe class="ratio_inner" src="https://www.youtube.com/embed/{{$video->youtube_key}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </a>
                    </div>
                    <div class="">
                        <h3 class="fw-bold fs-6">{{$video->name}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="javascript:void(0)" class="c_btn btn_outline_dark" id="loadMore">{{__('front.LOAD MORE')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection