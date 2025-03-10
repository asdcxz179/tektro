@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('edit') }}</h3>
    </div>
    <div class="block-content block-content-full">
        <div class="d-none" id="template">
            @foreach($languageData as $language)
            <div class="form-group col-md-3">
                <label>{{ __("backend.$routeNameData.relation.*.big_title") }}({{ $language->name }})</label>
                <input type="text" name="relation[0][big_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.big_title") }}">
            </div> 
            <div class="form-group col-md-3">
                <label>{{ __("backend.$routeNameData.relation.*.small_title") }}({{ $language->name }})</label>
                <input type="text" name="relation[0][small_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.small_title") }}">
            </div>
            <div class="form-group col-md-3">
                <label>{{ __("backend.$routeNameData.relation.*.button_link") }}({{ $language->name }})</label>
                <input type="text" name="relation[0][button_link][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.button_link") }}">
            </div>
            @endforeach                            
            <div class="form-group col-md-3">
                <label>{{ __("backend.$routeNameData.relation.*.sort") }}</label>
                <input type="text" name="relation[0][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
            </div>
            <div class="form-group col-md-3">
                <label>{{ __("backend.$routeNameData.relation.*.type") }}</label>
                <div class="custom-control custom-radio mb-5">
                    <input type="radio" name="relation[0][type]" class="custom-control-input" id="type_image_[0]" value="image" checked >
                    <label class="custom-control-label" for="type_image_[0]">圖片</label>
                </div>
                <div class="custom-control custom-radio mb-5">
                    <input type="radio" name="relation[0][type]" class="custom-control-input" id="type_video_[0]" value="video">
                    <label class="custom-control-label" for="type_video_[0]">影片</label>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>{{ __("backend.$routeNameData.relation.*.youtube_key") }}</label>
                        <input type="text" name="relation[0][youtube_key]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.youtube_key") }}">
                    </div>
                    <div class="form-group col-md-8 filepond-dom">
                        <label>{{ __("backend.$routeNameData.relation.*.path") }}</label>
                        <div class="text-danger">{{ __('suggested_size', ['width' => 1920, 'height' => 1080]) }}</div>
                        <fieldset class="image">
                            <input type="file" name="relation[0][path]" accept="image/*" />
                        </fieldset>  
                    </div>  
                </div>
            </div>
            <div class="form-group col-md-1 justify-content-center align-items-end d-flex delete">
                <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                    <i class="fa fa-times"></i>
                </button>    
            </div> 
            <div class="form-group col-md-12">
                <h2 class="content-heading col-md-12"></h2>
            </div>                               
        </div>
        <form id="form-edit" action="{{ route('backend.'.$routeNameData.'.update',[$routeIdData => $data->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block">                      
                <div class="block-content tab-content">
                    <div class="form-row">           
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.home_type_id") }}</label>
                            <select class="js-select2 form-control" disabled name="home_type_id">
                                @foreach($types as $value)
                                <option value="{{ $value->id }}" {{ $value->id == request()->home_type_id ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>             
                        <div class="form-group col-md-12" >
                            <div class="form-row">
                                <h2 class="content-heading col-md-12"></h2>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 text-right">
                                    <button type="button" class="add-btn btn btn-success mr-5 mb-5">
                                        <i class="fa fa-plus mr-5"></i>{{ __('add') }}
                                    </button>                                          
                                </div>
                            </div>
                            
                            <div id="content">
                                @isset($data->relation)
                                @foreach($data->relation as $key => $value)
                                <div class="form-row area"> 
                                    <input type="hidden" name="relation[{{ $key }}][id]" value="{{ $value->id }}">
                                    @foreach($languageData as $language) 
                                    <div class="form-group col-md-3">
                                        <label>{{ __("backend.$routeNameData.relation.*.big_title") }}({{ $language->name }})</label>
                                        <input type="text" value="{{ $value->getTranslation('big_title', $language->lang,false) }}" name="relation[{{ $key }}][big_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.big_title") }}">
                                    </div> 
                                    <div class="form-group col-md-3">
                                        <label>{{ __("backend.$routeNameData.relation.*.small_title") }}({{ $language->name }})</label>
                                        <input type="text" value="{{ $value->getTranslation('small_title', $language->lang,false) }}" name="relation[{{ $key }}][small_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.small_title") }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>{{ __("backend.$routeNameData.relation.*.button_link") }}({{ $language->name }})</label>
                                        <input type="text" value="{{ $value->getTranslation('button_link', $language->lang,false) }}" name="relation[{{ $key }}][button_link][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.button_link") }}">
                                    </div>
                                    @endforeach                            
                                    <div class="form-group col-md-3">
                                        <label>{{ __("backend.$routeNameData.relation.*.sort") }}</label>
                                        <input type="text" value="{{ $value->sort }}" name="relation[{{ $key }}][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>{{ __("backend.$routeNameData.relation.*.type") }}</label>
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" name="relation[{{ $key }}][type]" class="custom-control-input" value="image" id="item_type_image_[{{ $key }}]" @if($value->type == 'image') checked @endif>
                                            <label class="custom-control-label" for="item_type_image_[{{ $key }}]">圖片</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" name="relation[{{ $key }}][type]" class="custom-control-input" value="video" id="item_type_video_[{{ $key }}]"  @if($value->type == 'video') checked @endif>
                                            <label class="custom-control-label" for="item_type_video_[{{ $key }}]">影片</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>{{ __("backend.$routeNameData.relation.*.youtube_key") }}</label>                                    
                                                <input type="text" value="{{ $value->youtube_key }}" name="relation[{{ $key }}][youtube_key]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.youtube_key") }}">
                                            </div>
                                            <div class="form-group col-md-8 filepond-dom">
                                                <label>{{ __("backend.$routeNameData.relation.*.path") }}</label>       
                                                <div class="text-danger">{{ __('suggested_size', ['width' => 1920, 'height' => 1080]) }}</div>                             
                                                <fieldset class="image">
                                                    @isset($value->path)
                                                    <input value="{{ asset($value->path) }}" checked type="checkbox" />{{ asset($value->path) }}
                                                    @endisset

                                                    <input type="file" name="relation[{{ $key }}][path]" accept="image/*" />  
                                                </fieldset>  
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1 justify-content-center align-items-end d-flex delete">
                                        <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                                            <i class="fa fa-times"></i>
                                        </button>    
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <h2 class="content-heading col-md-12"></h2>
                                    </div>                                                                   
                                </div>     
                                @endforeach
                                @endisset     
                            </div>
                        </div>                                                                                         
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.status") }}<span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <label class="css-control css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" {{ $data->status == 1 ? 'checked' : '' }}>
                                    <input type="hidden" required name="status" value="{{ $data->status }}">
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>         
                </div>       
            </div>
            <a href="{{ route('backend.'.$routeNameData.'.index') }}" class="btn btn-secondary">{{ __('back') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('edit') }}</button>
        </form>
    </div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateType,
    );       
    FilePond.setOptions({
        allowPaste: false
    });
    var path = '{{ route('backend.'.$routeNameData.'.index') }}';
    var formEdit = $('#form-edit');
    document.querySelectorAll('form fieldset.image').forEach(item => FilePond.create(item, {
        storeAsFile: true,
    }))
    $(".nav-item a").eq(0).click();
    $(".form-group").each(function(){
        let checked = true;
        $(this).children('.add').each(function(){
            if(checked){
                $(this).find('.delete').addClass('d-none').removeClass('d-flex'); 
                checked = false;
            }
        })
    })    
    formEdit.ajaxForm({
        beforeSubmit: function(arr, $form, options) {    
            formEdit.find('button[type=submit]').attr('disabled',true);
            swal.fire({
                showCancelButton: false,
                showConfirmButton: false,
                allowOutsideClick: false,
                title: 'Loading...',
                icon: 'warning',                
            });               
        },
        success: function(data) {
            Swal.fire({ text: data.message, icon: 'success' }).then(function() {
                location.href = path;
            });
        },
        complete: function() {
            formEdit.find('button[type=submit]').attr('disabled',false);
        }
    }); 
});
$(document).on('click', '#content .delete', function(){
    $(this).parents('.area').remove();
});
$('.add-btn').click(function(){
    let html = $('#template').html();
    let count = $('.area').length;
    
    $('#content').append(`<div class="form-row area">${html.replace(/\[0\]/g, `[${count}]`)}</div>`);
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item, {
        storeAsFile: true,
    }))
});
</script>
@endpush
