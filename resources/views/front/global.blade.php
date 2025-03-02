@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/connect_partner_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.global_base')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.contact')}}</li>
                    <li class="text-white text-truncate">{{__('front.global_base')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="container">
    <div class="row mb-12 mb-md-25">
        <div class="col-10 offset-1">
            <h2 class="text-center title mb-4 mb-md-5">{{__('front.Find a Distributor or Warranty Center')}}</h2>
            <form action="" method="" class="global_form_group">

                <div class="mb-4 mb-md-4">
                    <div class="d-flex align-items-md-center justify-content-md-center flex-column flex-md-row">
                        <!-- <label class="form-label fw-bold d-block ">地區</label> -->
                        <div class="text-nowrap w-15 mb-2 mb-md-0 fw-bold fs-6">{{__('front.area')}}</div>
                        <select class="form-select" aria-label="Default select" data-live-search="true" name="area">
                            <option selected value="">{{__('front.all')}}</option>
                            @foreach($areas as $area)
                            <option value="{{$area->id}}" @if(request('area')==$area->id) selected @endif>{{$area->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4 mb-md-5">
                    <!-- <label class="form-label fw-bold">品牌</label> -->
                    <div class="d-flex align-items-md-center justify-content-md-center flex-column flex-md-row">
                        <div class="text-nowrap w-15 mb-2 mb-md-0 fw-bold fs-6">{{__('front.brand')}}</div>
                        <select class="form-select" aria-label="Default select" data-live-search="true" name="brand">
                            <option selected value="">{{__('front.all')}}</option>
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}" @if(request('brand')==$brand->id) selected @endif>{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="{{__('front.search')}}" class="c_btn btn_dark">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                @foreach($dealers as $key => $dealer)
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5  listBox moreBox"  @if($key>8) style="display: none;" @endif>
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">{{$dealer->country}}</h5>
                    <ul class="list_group">
                        <li @if(!$dealer->company) class="d-none" @endif>{{$dealer->company}}</li>
                        <li @if(!$dealer->phone) class="d-none" @endif><div style="display:flex"><div class="me-1"></div><div style="word-break: break-all;flex: 4;">{!!nl2br($dealer->phone)!!}</div></div></li>
                        <li @if(!$dealer->email) class="d-none" @endif><div style="display:flex"><div class="me-1"></div><div style="word-break: break-all;flex: 4;">{!!nl2br($dealer->email)!!}</div></div></li>
                        <li @if(!$dealer->website) class="d-none" @endif>{{$dealer->website}}</li> 
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="javascript:void(0)" class="c_btn btn_outline_dark" id="loadMore">{{__('front.LOAD MORE')}}</a>
            </div>
        </div>
    </div>
</section>
@endsection