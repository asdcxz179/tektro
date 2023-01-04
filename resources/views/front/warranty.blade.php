@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_warranty_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.warranty_terms')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.warranty_terms')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container">
    <div class="row mb-12 mb-md-20">
        <div class="offset-md-1 col-md-10">
            <div class="html_editor">
                <p>
                {{__('front.terms1')}}
                </p>
                <br>
                <h5>{{__('front.terms2')}}</h5>
                <p>{{__('front.terms3')}}</p>
                <p>{{__('front.terms4')}}</p>
                <br>
                <h5>{{__('front.terms5')}}</h5>
                <p>{{__('front.terms6')}}</p>
            </div>
        </div>
    </div>
</div>
@endsection