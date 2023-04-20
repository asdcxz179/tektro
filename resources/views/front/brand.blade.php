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
                <h2 class="title mb-3 mb-md-5">{{$brand->getTranslation('advertise_title', $lang,false)}}</h2>
                <p>{!!nl2br($brand->getTranslation('advertise_subtitle', $lang,false))!!}</p>
                @if( $brand->file_data_name)
                <a href="{{route('front.download',['name'=> $brand->file_data_name])}}" class="c_btn btn_dark mt-3 mt-md-5" download>{{__('front.category_download')}}</a>
                @endif
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
                role="tab" aria-selected="false">{{__('front.product_category')}}</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#index_tektro_b" type="button" role="tab"
                aria-selected="false">{{__('front.bike_category')}}</button>
        </li>
    </ul>
    <!-- tab end-->
    <!-- tabpanel start -->
    <div class="tab-content">
        <div class="tab-pane fade show active" role="tabpanel" id="index_tektro_a">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                        <ul class="d-flex flex-wrap mb-0 break-word">
                            @foreach($brand->categories as $category)
                            <li class="col-6 col-sm-4 col-lg-3 mb-4 mb-md-5">
                                <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}" class="d-flex flex-column flex-sm-row align-items-center hover_color_none">
                                    <img src="{{asset($category->path??'front/assets/images/trp_category_img01.png')}}" class="me-0 me-sm-3" alt="{{$category->name}}">
                                    <span class="text-center text-sm-start fs-7">{{$category->name}}</span>
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
                    <div class="col-10 offset-1 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                        <ul class="d-flex flex-wrap mb-0 break-word">
                            @foreach($brand->tags()->where(['type'=>1])->get() as $tag)
                            <li class="col-6 col-sm-4 col-lg-3 mb-4 mb-md-5">
                                <a href="{{route('front.tag.show',['lang'=>$lang,'tag'=>$tag->id])}}" class="d-flex flex-column flex-sm-row align-items-center hover_color_none">
                                    <img src="{{asset($tag->path??'front/assets/images/trp_category_img01.png')}}" class="me-0 me-sm-3" alt="{{$tag->name}}">
                                    <span class="text-center text-sm-start fs-7">{{$tag->name}}</span>
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
            <div class="col-10 offset-1 col-md-5 offset-md-2">
                <h3 class="title text-white mb-4">{{$brand->below_advertise_title}}</h3>
                <p class="fs-7 fs-md-6 text-white mb-5">
                    {!!nl2br($brand->getTranslation('below_advertise_subtitle', $lang,false))!!}
                </p>
                @if($brand->below_advertise_link)
                <a href="{{str_replace('zh-Hant',$lang,$brand->below_advertise_link)}}" class="c_btn @if($brand->below_advertise_switch=='黑') btn_dark @else btn_white @endif ">{{__('front.see_more')}}</a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection