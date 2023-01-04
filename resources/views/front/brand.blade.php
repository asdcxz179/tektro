@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-0" style="background-image: url({{asset($brand->banner)}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{$brand->name}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.brand_product')}}</li>
                    <li class="text-white">{{$brand->name}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- 左圖右文 start -->
<section class="container-fluid g-0">
    <div class="row g-0">
        <div class="col-md-7">
            <img src="{{asset($brand->advertise_image)}}" alt="trp brake" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="col-md-5 d-flex justify-content-center flex-column">
            <div class="px-3 px-md-5 py-5" data-aos="fade-up" data-aos-duration="800">
                <h2 class="title mb-3 mb-md-5">{{$brand->advertise_title}}</h2>
                {!!nl2br($brand->advertise_subtitle)!!}
            </div>
        </div>
    </div>
</section>
<!-- 左圖右文 end -->

<!-- category discipline start-->
<section class="bg-light pt-12 pb-12">
    <!-- tab start-->
    <ul class="nav main_nav mb-15 mb-md-20">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#index_tektro_a" type="button"
                role="tab" aria-selected="false">{{__('front.BY CATEGORY')}}</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#index_tektro_b" type="button" role="tab"
                aria-selected="false">{{__('front.BY DISCIPLINE')}}</button>
        </li>
    </ul>
    <!-- tab end-->
    <!-- tabpanel start -->
    <div class="tab-content">
        <div class="tab-pane fade show active" role="tabpanel" id="index_tektro_a">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
                        <ul class="d-flex flex-wrap mb-0">
                            @foreach($brand->categories as $category)
                            <li class="col-6 col-sm-4 col-md-3 mb-4 mb-md-5">
                                <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}" class="d-flex flex-column flex-sm-row align-items-center hover_color_none">
                                    <img src="{{asset($category->path)}}" class="me-0 me-sm-3" alt="{{$category->name}}">
                                    <span class="text-center text-sm-start fs-7 fs-md-6">{{$category->name}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" role="tabpanel" id="index_tektro_b">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
                        <ul class="d-flex flex-wrap mb-0">
                            @foreach($brand->tags as $tag)
                            <li class="col-6 col-sm-4 col-md-3 mb-4 mb-md-5">
                                <a href="#" class="d-flex flex-column flex-sm-row align-items-center hover_color_none">
                                    <img src="{{asset($tag->path)}}" class="me-0 me-sm-3" alt="{{$tag->name}}">
                                    <span class="text-center text-sm-start fs-7 fs-md-6">{{$tag->name}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- tabpanel end -->
</section>
<!-- category discipline end-->

<!-- bottom_jumbotron start -->
<section class="jarallax bg-cover bottom_jumbotron" style="background-image: url({{asset($brand->below_advertise_image)}});">
    <div class="container-fluid" data-aos="fade-up" data-aos-duration="800">
        <div class="row">
            <div class="col-md-5 offset-md-2">
                <h3 class="title text-white mb-4">{{$brand->below_advertise_title}}</h3>
                <p class="fs-7 fs-md-6 text-white mb-5">
                    {!!nl2br($brand->below_advertise_subtitle)!!}
                </p>
                @if($brand->below_advertise_link)
                <a href="{{$brand->below_advertise_link}}" class="c_btn @if($brand->below_advertise_switch=='黑') btn_dark @else btn_white @endif ">{{__('front.see_more')}}</a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection