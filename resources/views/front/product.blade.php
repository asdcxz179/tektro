@extends('front.layouts.main')
@section('content')
    <section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(assets/images/breadcrumb_trp.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-12">
                    <h2 class="breadcrumb_title">{{$product->name}}</h2>
                    <ul class="breadcrumb_nav">
                        <li>
                            <a href="index.html" class="text-white-50">首頁</a>
                        </li>
                        <li class="text-white-50">品牌產品</li>
                        <li class="text-white-50">
                            <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>$brand->id])}}" class="text-white-50">{{$brand->name}}</a>
                        </li>
                        <li class="text-white-50">
                            <a href="{{route('front.category.show',['lang'=>$lang,'category'=>$category->id])}}" class="text-white-50">{{$category->name}}</a>
                        </li>
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
                            <img src="{{asset($product->product_images->first()->path)}}" alt="" class="active">
                        </div>
                    </div>
                    <div class="col-md-3 pe-3 offset-md-1">
                        <div class="d-flex flex-md-column gallery_list">
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
                            <span class="fs-7 fs-md-6 text-muted d-inline-block mb-3 mb-md-4">DH / RACE</span>
                            <ul class="product_icons mb-3 mb-md-4">
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/2.3.png')}}" alt="">
                                </li>
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/New Adapters.png')}}" alt="">
                                </li>
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/Ergonomic Levers.png')}}"alt="">
                                </li>
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/5mm Brake Line.png')}}" alt="">
                                </li>
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/Performance Mineral Oil.png')}}" alt="">
                                </li>
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/E-Brake Adapter.png')}}" alt="">
                                </li>
                                <li class="product_icons_item">
                                    <img src="{{asset('front/assets/images/products/9mm Lever Piston.png')}}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="c_btn btn_dark">FIDE A DEALER</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- tab start -->
                    <ul class="nav nav-fill main_nav_fill justify-content-start mb-12 p-0">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#details" type="button"
                                role="tab" aria-selected="false">DETAILS</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#technology" type="button"
                                role="tab" aria-selected="false">TECHNOLOGY</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test" type="button"
                                role="tab" aria-selected="false">TEST &amp; REVIEWS</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#related" type="button"
                                role="tab" aria-selected="false">RELATED PRODUCTS</button>
                        </li>
                    </ul>
                    <!-- tab end -->
                    <!-- tab-content start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" role="tabpanel" id="details">
                            <div class="row">
                                {!!$product->details!!}
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="technology">
                            <div class="row">
                                {!!$product->technology!!}
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="test">
                            <div class="row">
                                {!!$product->test_reviews!!}
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="related">
                            <div class="row">
                                {!!$product->related_products!!}
                            </div>
                        </div>
                    </div>
                    <!-- tab-content end -->
                </div>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- download -->
    <section class="download_block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="accordion" id="accordionDownload">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header mb-3" id="downloadList">
                                <button class="btn_download accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSingle" aria-expanded="false"
                                    aria-controls="collapseSingle">
                                    DOWNLOADS
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
    })
</script>
@endpush/