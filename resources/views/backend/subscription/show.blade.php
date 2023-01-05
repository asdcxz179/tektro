@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">內容</h3>
    </div>
    <div class="block-content block-content-full">
        <div class="block">
            <div class="block-content tab-content">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>語言</label>
                        <div>
                        {{$info->language->name}}
                        </div>
                    </div>                                                 
                    <div class="form-group col-md-6">
                        <label>標題<span class="text-danger">*</span></label>
                        <div>
                        {{$info->title}}
                        </div>
                    </div>                    
                    <div class="form-group col-md-12">
                        <label>內容</label>     
                        <div>
                            <iframe src="{{ route('backend.'.$routeNameData.'.show',['show'=>1,'subscription'=>request('subscription')]) }}" frameborder="0" style="width:100%;height:50vh">
                            </iframe>
                        </div>                           
                    </div>  
                </div>         
            </div>       
        </div>
        <a href="{{ route('backend.'.$routeNameData.'.index') }}" class="btn btn-secondary">{{ __('back') }}</a>
    </div>
</div>
@stop