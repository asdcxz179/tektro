@extends('front.layouts.main')
@section('content')
    <section class="breadcrumb mb-12 mb-sm-20" style="background-image: url('{{asset('front/assets/images/breadcrumb_trp.jpg')}}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-12">
                    <h2 class="breadcrumb_title">{{$product->name}}</h2>
                    <ul class="breadcrumb_nav">
                        <li>
                            <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                        </li>
                        <li class="text-white-50">{{__('front.brand_product')}}</li>
                        @if($brand)
                        <li class="text-white-50">
                            <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>$brand->id])}}" class="text-white-50">{{$brand->name}}</a>
                        </li>
                        @endif
                        @if($category)
                        <li class="text-white-50">
                            <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}" class="text-white-50">{{$category->name}}</a>
                        </li>
                        @endif
                        <li class="text-white text-truncate">{{$product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- gallery start -->
    <section class="container mb-30">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row mb-5">
                    <div class="col-md-8">
                        <div class="gallery_main">
                            @if($product->product_images->first())
                            <img src="{{asset($product->product_images->first()->path)}}" alt="" class="active">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 pe-3 offset-md-1">
                        <div class="d-flex flex-wrap flex-md-column gallery_list">
                            @foreach($product->product_images as $key => $image)
                            <div class="gallery_item">
                                <img src="{{asset($image->path)}}" alt="" @if($key==0) class="focus" @endif>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h2 class="fs-2 fw-bold">{{$product->name}}</h2>
                        <p class="fs-7 fs-md-5 text-secondary mb-3 mb-md-4">{{$product->description}}</p>
                        <p class="fs-7 fs-md-6">{!!$product->content!!}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end pt-4 pt-md-5">
                            <span class="fs-7 fs-md-6 text-muted d-inline-block mb-3 mb-md-4">{{$product->attribute}}</span>
                            <ul class="product_icons mb-3 mb-md-4">
                                @foreach($product->product_icons()->where('status',1)->orderby('sort')->get() as $icon)
                                <li class="product_icons_item">
                                    <img src="{{asset($icon->path)}}" alt="">
                                </li>
                                @endforeach
                            </ul>
                            <a href="{{route('front.global.index',['lang'=>$lang])}}" class="c_btn btn_dark">{{__('front.FIND A DEALER')}}</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- tab start -->
                    <ul class="nav nav-fill main_nav_fill justify-content-start mb-12 p-0">
                        @if(strip_tags($product->details))
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#details" type="button"
                                role="tab" aria-selected="false">{{__('front.DETAILS')}}</button>
                        </li>
                        @endif
                        @if(strip_tags($product->technology))
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#technology" type="button"
                                role="tab" aria-selected="false">{{__('front.TECHNOLOGY')}}</button>
                        </li>
                        @endif
                        @if(strip_tags($product->test_reviews))
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test" type="button"
                                role="tab" aria-selected="false">{{__('front.TEST & REVIEWS')}}</button>
                        </li>
                        @endif
                        @if(strip_tags($product->related_products))
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#related" type="button"
                                role="tab" aria-selected="false">{{__('front.RELATED PRODUCTS')}}</button>
                        </li>
                        @endif
                    </ul>
                    <!-- tab end -->
                    <!-- tab-content start -->
                    <div class="tab-content">
                        @if($product->details)
                        <div class="tab-pane fade show active" role="tabpanel" id="details">
                            <div class="row">
                                {!!$product->details!!}
                            </div>
                        </div>
                        @endif
                        @if($product->technology)
                        <div class="tab-pane fade" role="tabpanel" id="technology">
                            <div class="row">
                                {!!$product->technology!!}
                            </div>
                        </div>
                        @endif
                        @if($product->test_reviews)
                        <div class="tab-pane fade" role="tabpanel" id="test">
                            <div class="row">
                                {!!$product->test_reviews!!}
                            </div>
                        </div>
                        @endif
                        @if($product->related_products)
                        <div class="tab-pane fade" role="tabpanel" id="related">
                            <div class="row">
                                {!!$product->related_products!!}
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- tab-content end -->
                </div>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- download -->
    @if($product->files->count()>0)
    <section class="download_block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="accordion" id="accordionDownload">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header mb-3" id="downloadList">
                                <button class="btn_download accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSingle" aria-expanded="false" aria-controls="collapseSingle">
                                    {{__('front.DOWNLOADS')}}
                                </button>
                            </h2>
                            <div id="collapseSingle" class="accordion-collapse collapse" aria-labelledby="downloadList" data-bs-parent="#accordionDownload">
                                <ul class="accordion-body bg-white rounded-1">
                                    @foreach($product->files as $key => $file)
                                    <li class="mb-3">
                                        <a href="/{{$file->path}}" class="hover_color_trp" target="_blank">
                                            <i class='bx bx-download me-2'></i>{{$file->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection
@push('javascript')
<script>
    const activeImage = document.querySelector(".gallery_main .active");
    const productImages = document.querySelectorAll(".gallery_list img");
    var galleryList = document.querySelector(".gallery_item");

    function changeImage(e) {
        activeImage.src = e.target.src;
    }

    productImages.forEach(image => image.addEventListener("click", changeImage));

    $(document).ready(function () {

        $('.gallery_item img').click(function () {
            $('.gallery_list img').removeClass('focus');
            $(this).addClass('focus');
        })
        $('.nav-item').eq(0).click();
    })
</script>
@endpush/