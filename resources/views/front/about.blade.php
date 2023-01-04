@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(/front/assets/images/breadcrumb_about_company.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{$detail->name}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">關於我們</li>
                    <li class="text-white">{{$detail->name}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="container mb-20">
    <div class="row html_editor">
        <div class="col-md-10 offset-md-1">
            {!!$detail->content!!}
        </div>
    </div>
</section>
@endsection