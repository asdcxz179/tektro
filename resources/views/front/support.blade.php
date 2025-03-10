@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url('{{asset('front/assets/images/support_downloads_thumbnail.jpg')}}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.technology_manual')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.information')}}</li>
                    <li class="text-white text-truncate">{{__('front.technology_manual')}}</li>
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
                    <input type="text" name="word" placeholder="{{__('front.please input keyword')}}" class="form_transparent_dark w-100" value="{{request('word')}}">
                    <button class="c_btn btn_transparent_dark pe-0 fw-normal hover_opacity text-end" type="submit" name=""
                        style="min-width: 180px;">{{__('front.search')}}
                        <i class='bx bx-search text-primary fs-4 align-middle text-dark ps-2'></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="mb-5">
                    <h5 class="page_aside_title bg-dark text-white fs-6 mb-0">{{__('front.brand')}}</h5>
                    <ul class="nav nav-fill page_aside bg-white flex-column mb-5 mb-md-0">
                    <li class="nav-item">
                            <a href="{{route('front.support.show',['support' => 'all','lang'=>$lang])}}" class="page_aside_filter nav-link @if(request()->support == 'all') active @endif">{{__('front.all')}}</a>
                        </li>
                        @foreach($brands as $brand)
                        <li class="nav-item">
                            <a href="{{route('front.support.show',['support' => $brand->id,'lang'=>$lang])}}" class="page_aside_filter nav-link @if(request()->support == $brand->id) active @endif">{{$brand->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h5 class="page_aside_title bg-dark text-white fs-6 mb-0">{{__('front.category')}}</h5>
                    <ul class="nav nav-fill page_aside bg-white flex-column mb-5 mb-md-0">
                        <li class="nav-item">
                            <button class="page_aside_filter nav-link active" data-bs-toggle="tab" data-bs-target="#downloadFilterAll" type="button" role="tab" aria-selected="false">{{__('front.all')}}</button>
                        </li>
                        @foreach($categories as $key => $category)
                        @if($category->search_supports->filter(function($item){
                            return $item->getTranslation('show', request()->lang,false) && $item->status;
                        })->count()>0)  
                        <li class="nav-item">
                            <button class="page_aside_filter nav-link" data-bs-toggle="tab" data-bs-target="#support_{{$key}}" type="button" role="tab" aria-selected="false">{{$category->name}}</button>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-8 offset-md-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel" id="downloadFilterAll">
                        @foreach($categories as $key => $category)
                            @foreach($category->search_supports->filter(function($item){
                                return $item->getTranslation('show', request()->lang,false) && $item->status;
                            }) as $key2 => $type)
                            <div class="accordion_primary accordion accordion-flush" id="type_{{$key2}}">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filter_{{$key}}_{{$key2}}" aria-expanded="false" aria-controls="filter_{{$key}}_{{$key2}}">
                                            {{$type->getTranslation('name', request()->lang,false)}}
                                        </button>
                                    </h2>
                                    <div id="filter_{{$key}}_{{$key2}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                                    <!-- data-bs-parent="#type_{{$key2}}" -->
                                        <div class="accordion-body">
                                            @if($type->support_files()->where('support_file_type_id',1)->get()->filter(function($item){
                                                return $item->getTranslation('show', request()->lang,false);
                                            })->count() > 0)
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">{{__('front.manual')}}</span>
                                                <ul>
                                                    @foreach($type->support_files->filter(function($item){
                                                        return $item->getTranslation('show', request()->lang,false);
                                                    }) as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 1 && ($sub->files->count() > 0))
                                                        <li class="mb-3">
                                                            <div class="accordion-item border-0">
                                                                <h2 class="accordion-header" id="subHeadingOne">
                                                                    <button class="accordion-button collapsed sub p-0" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#subFilter_{{$key}}_{{$key2}}_{{$key3}}" aria-expanded="false" aria-controls="subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                        <i class="bx bxs-file-pdf me-1"></i>{{$sub->name}}
                                                                    </button>
                                                                </h2>
                                                                <div id="subFilter_{{$key}}_{{$key2}}_{{$key3}}" class="accordion-collapse collapse" aria-labelledby="subHeadingOne"
                                                                    data-bs-parent="#subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                    <div class="accordion-body">
                                                                        @foreach($sub->files as $file)
                                                                        <a target="_blank" href="{{route('front.download',['name'=>$file->file_name])}}" class="d-block py-2" target="_blank">{{$file->file_name}}</a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li> --}}
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            @if($type->support_files()->where('support_file_type_id',2)->get()->filter(function($item){
                                                return $item->getTranslation('show', request()->lang,false);
                                            })->count() > 0)
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">{{__('front.BOM List')}}</span>
                                                <ul>
                                                    @foreach($type->support_files->filter(function($item){
                                                        return $item->getTranslation('show', request()->lang,false);
                                                    }) as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 2 && ($sub->files->count() > 0))
                                                        <li class="mb-3">
                                                            <div class="accordion-item border-0">
                                                                <h2 class="accordion-header" id="subHeadingOne">
                                                                    <button class="accordion-button collapsed sub p-0" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#subFilter_{{$key}}_{{$key2}}_{{$key3}}" aria-expanded="false" aria-controls="subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                        <i class="bx bxs-file-pdf me-1"></i>{{$sub->name}}
                                                                    </button>
                                                                </h2>
                                                                <div id="subFilter_{{$key}}_{{$key2}}_{{$key3}}" class="accordion-collapse collapse" aria-labelledby="subHeadingOne"
                                                                    data-bs-parent="#subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                    <div class="accordion-body">
                                                                        @foreach($sub->files as $file)
                                                                        <a target="_blank" href="{{route('front.download',['name'=>$file->file_name])}}" class="d-block py-2" target="_blank">{{$file->file_name}}</a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li> --}}
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                    @foreach($categories as $key => $category)
                        <div class="tab-pane fade" role="tabpanel" id="support_{{$key}}">
                            <div class="accordion_primary accordion accordion-flush" id="collapseFilterOne">
                                @foreach($category->search_supports->filter(function($item){
                                    return $item->getTranslation('show', request()->lang,false) && $item->status;
                                }) as $key2 => $type)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sub_filter_{{$key}}_{{$key2}}" aria-expanded="false" aria-controls="sub_filter_{{$key}}_{{$key2}}">
                                            {{$type->getTranslation('name', request()->lang,false)}}
                                        </button>
                                    </h2>
                                    <div id="sub_filter_{{$key}}_{{$key2}}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne">
                                        <!-- data-bs-parent="#collapseFilterOne" -->
                                        <div class="accordion-body">
                                            @if($type->support_files()->where('support_file_type_id',1)->get()->filter(function($item){
                                                return $item->getTranslation('show', request()->lang,false);
                                            })->count() > 0)
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">{{__('front.manual')}}</span>
                                                <ul>
                                                    @foreach($type->support_files->filter(function($item){
                                                        return $item->getTranslation('show', request()->lang,false);
                                                    }) as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 1 && ($sub->files->count() > 0))
                                                        <li class="mb-3">
                                                            <div class="accordion-item border-0">
                                                                <h2 class="accordion-header" id="subHeadingOne">
                                                                    <button class="accordion-button collapsed sub p-0" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#subFilter_{{$key}}_{{$key2}}_{{$key3}}" aria-expanded="false" aria-controls="subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                        <i class="bx bxs-file-pdf me-1"></i>{{$sub->name}}
                                                                    </button>
                                                                </h2>
                                                                <div id="subFilter_{{$key}}_{{$key2}}_{{$key3}}" class="accordion-collapse collapse" aria-labelledby="subHeadingOne"
                                                                    data-bs-parent="#subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                    <div class="accordion-body">
                                                                        @foreach($sub->files as $file)
                                                                        <a target="_blank" href="{{route('front.download',['name'=>$file->file_name])}}" class="d-block py-2" target="_blank">{{$file->file_name}}</a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li> --}}
                                                        @endif
                                                    @endforeach
                                                </ul>

                                            </div>
                                            @endif
                                            @if($type->support_files()->where('support_file_type_id',2)->get()->filter(function($item){
                                                return $item->getTranslation('show', request()->lang,false);
                                            })->count() > 0)
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">{{__('front.BOM List')}}</span>
                                                <ul>
                                                    @foreach($type->support_files->filter(function($item){
                                                        return $item->getTranslation('show', request()->lang,false);
                                                    }) as $key3 => $sub)
                                                        @if($sub->support_file_type_id == 2 && ($sub->files->count() > 0))
                                                        <li class="mb-3">
                                                            <div class="accordion-item border-0">
                                                                <h2 class="accordion-header" id="subHeadingOne">
                                                                    <button class="accordion-button collapsed sub p-0" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#subFilter_{{$key}}_{{$key2}}_{{$key3}}" aria-expanded="false" aria-controls="subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                        <i class="bx bxs-file-pdf me-1"></i>{{$sub->name}}
                                                                    </button>
                                                                </h2>
                                                                <div id="subFilter_{{$key}}_{{$key2}}_{{$key3}}" class="accordion-collapse collapse" aria-labelledby="subHeadingOne"
                                                                    data-bs-parent="#subFilter_{{$key}}_{{$key2}}_{{$key3}}">
                                                                    <div class="accordion-body">
                                                                        @foreach($sub->files as $file)
                                                                        <a target="_blank" href="{{route('front.download',['name'=>$file->file_name])}}" class="d-block py-2" target="_blank">{{$file->file_name}}</a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- <li class="mb-3">
                                                            <i class='bx bxs-file-pdf'></i>
                                                            <a target="_blank" href="{{route('front.download',['name'=>$sub->file_name])}}">{{$sub->name}}</a>
                                                        </li> --}}
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection