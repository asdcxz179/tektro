@extends('front.layouts.main')
@section('content')
<!-- breadcrumb -->
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url('{{asset('front/assets/images/breadcrumb_result.jpg')}}');">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">搜尋結果</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white text-truncate">搜尋結果</li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <!-- breadcrumb end -->

<section class="mb-15">
    <div class="container">
        <div class="row mb-12 mb-md-20">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">產品</span> 共有 <span class="text-primary fw-bold">{{$products->count()}}</span> 筆 <span>‘{{request('word')}}’</span> 搜尋結果
                    </h3>
                </div>
                <div class="bg-white pt-3 px-3 pt-md-5 px-md-5 shadow-sm">
                    <ul class="row">
                        @foreach($products as $product)
                        <li class="col-6 col-md-4">
                            <a href="{{route('front.product.show',['lang'=>$lang,'product'=>$product->id])}}" class="box">
                                <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                    <div class="ratio_inner bg-cover"
                                        style="background-image: url('{{asset($product->banner)}}');">
                                        <div class="box_img_overlay">
                                            <span class="text-white fw-bold mb-3">{{$product->name}}</span>
                                            <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="box_title">{{$product->name}}</h2>
                                <span class="box_text">{{$product->description}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-12 mb-md-20">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">技術手冊</span> 共有 <span class="text-primary fw-bold">{{$supports->count()}}</span> 筆 <span>‘{{request('word')}}’</span> 搜尋結果
                    </h3>
                </div>
                <div class="bg-white p-3 p-md-5 shadow-sm">
                    <ul class="row">
                        <div class="">
                        @foreach($supports as $key => $category)
                            @foreach($category->supports as $key2 => $type)
                            <div class="accordion_primary accordion accordion-flush" id="type_{{$key2}}">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filter_{{$key}}" aria-expanded="false" aria-controls="filter_{{$key}}">
                                            {{$type->name}}
                                        </button>
                                    </h2>
                                    <div id="filter_{{$key}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#type_{{$key2}}">
                                        <div class="accordion-body">
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">使用手冊</span>
                                                <ul>
                                                    @foreach($type->support_files as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 1 && $sub->path)
                                                        <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">BOM 清單</span>
                                                <ul>
                                                    @foreach($type->support_files as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 2 && $sub->path)
                                                        <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-12 mb-md-20">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">影音分享</span> 共有 <span class="text-primary fw-bold">{{$videos->count()}}</span> 筆 <span>‘{{request('word')}}’</span> 搜尋結果
                    </h3>
                </div>
                <div class="bg-white pt-3 px-3 pt-md-5 px-md-5 shadow-sm">
                    <ul class="row">
                        @foreach($videos as $key => $video)
                        <div class="col-md-6 col-lg-4 mb-12">
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
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">最新消息</span> 共有 <span class="text-primary fw-bold">{{$news->count()}}</span> 筆 <span>‘{{request('word')}}’</span> 搜尋結果
                    </h3>
                </div>
                <div class="bg-white pt-3 px-3 pt-md-5 px-md-5 shadow-sm">
                    <div class="row">
                        @foreach($news as $new)
                        <div class="col-md-6 col-lg-4 mb-12">
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
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection