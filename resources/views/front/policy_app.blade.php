@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_warranty_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.policy_app')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.policy_app')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container">
    <div class="row mb-12 mb-md-20">
        <div class="offset-md-1 col-md-10">
            <div class="mb-5">
            Our Tektro and TRP Cycling Privacy Policy dictates the collection, use, and disclosure of information about you when you utilize your App. The comprehensive Privacy Policy is publicly accessible at www.tektro.com. Refer to both the Privacy Policy and the details provided below for a more thorough understanding of how Tektro and TRP Cycling gathers, utilizes, stores, and discloses information obtained through this app. For inquiries about our Privacy Policies, please reach out to us at:
            </div>
            <p class="title_h2">Tektro Technology Corp.</p>
            <ul class="list_group">
                <li>No. 138, Minzhu St., Xinshui Township, Changhua County 504, TAIWAN (R.O.C)</li>
                <li><div style="display:flex"><div style="word-break: break-all;flex: 4;"><a href="tel:+8867683999">+8867683999</a></div></div></li>
            </ul>
            <a href="{{route('front.policy.index',['lang'=>$lang])}}" class="c_btn btn_outline_dark mt-3 mt-md-5 d-flex">
                <i class="bx bx-left-arrow-alt fs-4 align-middle ms-2"></i>    
                <div>{{__('front.back')}}</div>
            </a>
        </div>
    </div>
</div>
@endsection