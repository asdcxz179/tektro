@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_FAQ_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.common_question')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.common_question')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="mb-15">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 offset-md-4">
                <form action="" method="" class="d-flex w-100 justify-content-start align-items-end">
                    <input type="text" name="word" placeholder="{{__('front.please input keyword')}}" class="form_transparent_dark w-100">
                    <button class="c_btn btn_transparent_dark pe-0 fw-normal hover_opacity" type="submit" name=""
                        style="min-width: 120px;">{{__('front.search')}}
                        <i class='bx bx-search text-primary fs-4 align-middle text-dark ps-2'></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h5 class="page_aside_title bg-dark text-white fs-6 mb-0">{{__('front.category')}}</h5>
                <ul class="nav nav-fill page_aside bg-white flex-column mb-5 mb-md-0">
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link active" data-bs-toggle="tab" data-bs-target="#qaFilterAll" type="button"
                            role="tab" aria-selected="false">{{__('front.all')}}</button>
                    </li>
                    @foreach($brands as $brand)
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link" data-bs-toggle="tab" data-bs-target="#fad_{{$brand->id}}" type="button" role="tab" aria-selected="false">{{$brand->name}}</button>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8 offset-md-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel" id="qaFilterAll">
                        @foreach($brands as $brand)
                        <!-- tektro accordion start -->
                        <div class="accordion_primary accordion accordion-flush" id="collapseFilterTektro">
                            @foreach($brand->faqs as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all_{{$brand->id}}_{{$faq->id}}" aria-expanded="false" aria-controls="all_{{$brand->id}}_{{$faq->id}}">
                                        {{$faq->name}}
                                    </button>
                                </h2>
                                <div id="all_{{$brand->id}}_{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading01" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                        {!!$faq->content!!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    @foreach($brands as $brand)
                    <div class="tab-pane fade" role="tabpanel" id="fad_{{$brand->id}}">
                        <!-- tektro accordion start -->
                        <div class="accordion_primary accordion accordion-flush" id="collapseFilterTektro">
                            @foreach($brand->faqs as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_{{$brand->id}}_{{$faq->id}}" aria-expanded="false" aria-controls="faq_{{$brand->id}}_{{$faq->id}}">
                                        {{$faq->name}}
                                    </button>
                                </h2>
                                <div id="faq_{{$brand->id}}_{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading01" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                        {!!$faq->content!!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- tektro accordion end -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection