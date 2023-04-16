@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('create') }}</h3>
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
                    <input type="radio" name="relation[0][type]" class="custom-control-input" id="type_upload_[0]" value="upload" checked >
                    <label class="custom-control-label" for="type_upload_[0]">上傳</label>
                </div>
                <div class="custom-control custom-radio mb-5">
                    <input type="radio" name="relation[0][type]" class="custom-control-input" id="type_product_[0]" value="product">
                    <label class="custom-control-label" for="type_product_[0]">產品</label>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>{{ __("backend.$routeNameData.relation.*.product_id") }}</label>
                        <select class="form-control" name="relation[0][product_id]" data-placeholder="{{ __("backend.$routeNameData.*.product_id") }}">
                            <option value=""></option>
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-8 filepond-dom">
                        <label>{{ __("backend.$routeNameData.relation.*.path") }}</label>
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
        <form id="form-create" action="{{ route('backend.'.$routeNameData.'.store') }}" method="post">
            @csrf
            <div class="block">                      
                <div class="block-content tab-content">
                    <div class="form-row">           
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.home_type_id") }}</label>
                            <select class="js-select2 form-control" name="home_type_id">
                                @foreach($types as $value)
                                <option value="{{ $value->id }}" {{ $value->id == request()->home_type_id ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>             
                        <div class="form-group col-md-12">
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
                            </div>
                        </div>                                                                                         
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.sort") }}<span class="text-danger">*</span></label>
                            <input type="text" required name="sort" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                        </div>                    
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.status") }}<span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <label class="css-control css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" checked>
                                    <input type="hidden" required name="status" value="1">
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>         
                </div>       
            </div>
            <a href="{{ route('backend.'.$routeNameData.'.index') }}" class="btn btn-secondary">{{ __('back') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
        </form>
    </div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    var path = '{{ route('backend.'.$routeNameData.'.index') }}';
    var formCreate = $('#form-create');
    document.querySelectorAll('form fieldset.image').forEach(item => FilePond.create(item, {
        storeAsFile: true,
    }))
    $(".nav-item a").eq(0).click();
    formCreate.ajaxForm({
        beforeSubmit: function(arr, $form, options) {
            formCreate.find('button[type=submit]').attr('disabled',true);
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
            formCreate.find('button[type=submit]').attr('disabled',false);
        }
    });  

    $('select[name="home_type_id"]').change(function() {
        location.href = `${ path }/create?home_type_id=${ $(this).val() }`
    })
});
$(document).on('click', '#content .delete', function(){
    $(this).parents('.area').remove();
});
$('.add-btn').click(function(){
    let html = $('#template').html();
    let count = $('.area').length + 1;
    
    $('#content').append(`<div class="form-row area">${html.replace(/\[0\]/g, `[${count}]`)}</div>`);
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item, {
        storeAsFile: true,
    }));
        $(this).select2({        		
            allowClear: true,	
            ajax: {
                url: $(this).data('url'),
                data: function (params) {
                    return { search: params.term };
                },
                processResults: function(data, page) {                								
                    return { 
                        results: data.map(item => { return { 
                            id: item.id,
                            text: item.name['zh-Hant'] || item.name
                        } }) 
                    }
                },
            }
        });
});
</script>
@endpush