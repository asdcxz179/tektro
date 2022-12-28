@extends('front.layouts.main')
@section('content')
<!-- breadcrumb -->
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url({{asset($brand->banner)}});">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-lg-12">
            <h2 class="breadcrumb_title">{{$category->name}}</h2>
            <ul class="breadcrumb_nav">
                <li>
                    <a href="index.html" class="text-white-50">首頁</a>
                </li>
                <li class="text-white-50">品牌產品</li>
                <li class="text-white-50">
                    <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>$brand->id])}}" class="text-white-50">{{$brand->name}}</a>
                </li>
                <li class="text-white text-truncate">{{$category->name}}</li>
            </ul>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb end -->

<section class="container mb-25">
<div class="row">
    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
        <ul class="row">
            @foreach($products as $product)
            <li class="col-6 col-md-4">
                <a href="{{route('front.product.show',['lang'=>$lang,'product'=>$product->id])}}" class="box">
                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                        <div class="ratio_inner bg-cover" style="background-image: url('{{asset($product->banner)}}');">
                            <div class="box_img_overlay">
                                <span class="text-white fw-bold mb-3">{{$product->name}}</span>
                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                            </div>
                        </div>
                        <!-- <div class="box_img">
                            <img src="assets/images/products/EVO-Gold-Family-Main.jpg" alt="EVO-Gold-Family-Main">
                        </div> -->
                    </div>
                    <h2 class="box_title">{{$product->name}}</h2>
                    <span class="box_text">{{$product->description}}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="row">
    <div class="d-flex justify-content-center">
        {{$products->links()}}
    </div>
</div>
</section>
@endsection