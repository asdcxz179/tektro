@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('create') }}</h3>
    </div>
    <div class="block-content block-content-full">
        <form id="form-create" action="{{ route('backend.'.$routeNameData.'.store') }}" method="post">
            @csrf
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-block border" data-toggle="tabs" role="tablist">
                    @foreach($languageData as $language) 
                    <li class="nav-item">
                        <a class="nav-link" href="#btabs{{ $language->name }}">{{ $language->name }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="block-content tab-content border">
                    @foreach($languageData as $language) 
                    <div class="tab-pane" id="btabs{{ $language->name }}" role="tabpanel">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.keyword.*") }}</label>
                                <input type="text" name="keyword[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.keyword.*") }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.name.*") }}</label>
                                <input type="text" name="name[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.name.*") }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.description.*") }}</label>
                                <input type="text" name="description[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.description.*") }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.*.dealer_link") }}</label>
                                <input type="text" name="dealer_link[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.*.dealer_link") }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.attribute.*") }}</label>
                                <input type="text" name="attribute[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.attribute.*") }}">
                            </div>                                                
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.content.*") }}</label>                                
                                <textarea name="content[{{ $language->lang }}]" class="form-control summernote"></textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.details.*") }}</label>                                
                                <textarea name="details[{{ $language->lang }}]" class="form-control summernote"></textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.technology.*") }}</label>                                
                                <textarea name="technology[{{ $language->lang }}]" class="form-control summernote"></textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.test_reviews.*") }}</label>                                
                                <textarea name="test_reviews[{{ $language->lang }}]" class="form-control summernote"></textarea>
                            </div>              
                            <!-- <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.related_products.*") }}</label>                                
                                <textarea name="related_products[{{ $language->lang }}]" class="form-control summernote"></textarea>
                            </div> -->
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_categories") }}</label>
                            <select data-url="{{ route('backend.product_categories.select') }}" class="js-select2 form-control" multiple name="product_categories[]" data-placeholder="{{ __("backend.$routeNameData.product_categories") }}">
                                <option></option>
                            </select>
                        </div>    
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_tags") }}</label>
                            <select data-url="{{ route('backend.product_tags.select') }}" class="js-select2 form-control" multiple name="product_tags[]" data-placeholder="{{ __("backend.$routeNameData.product_tags") }}">
                                <option></option>
                            </select>
                        </div>            
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.product_icons") }}</label>
                            <select data-url="{{ route('backend.product_icons.select') }}" class="js-select2 form-control" multiple name="product_icons[]" data-placeholder="{{ __("backend.$routeNameData.product_icons") }}">
                                <!-- <option></option> -->
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_relevants") }}</label>
                            <select data-url="{{ route('backend.products.select') }}" class="js-select2 form-control" multiple name="product_relevants[]" data-placeholder="{{ __("backend.$routeNameData.product_relevants") }}">
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.banner") }}</label>    
                            <div class="text-danger">{{ __('suggested_size', ['width' => 800, 'height' => 800]) }}</div>
                            <fieldset class="image">
                                <input type="file" name="banner" accept="image/*" />    
                            </fieldset>  
                        </div>               
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_images.*") }}</label>    
                            <div class="text-danger">{{ __('suggested_size', ['width' => 800, 'height' => 800]) }}</div>
                            <fieldset class="image">
                                <input type="file" multiple data-allow-reorder="true" name="product_images[]" accept="image/*" />       
                            </fieldset>  
                        </div>            
                        <div class="form-group col-md-12">                           
                            <div class="form-group col-md-12" id="product_files">
                                <div class="form-row">
                                    <h2 class="content-heading  col-md-12">{{ __("backend.$routeNameData.product_file") }}</h2>
                                </div>      
                                <div class="form-row">
                                    <div class="form-group col-md-12 text-right">
                                        <button type="button" class="add-btn btn btn-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>{{ __('add') }}
                                        </button>                                          
                                    </div>
                                </div>            
                                <div class="add d-none">
                                    @foreach($languageData as $language) 
                                    <div><input type="text" disabled name="product_files[0][name][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.product_files.*.name") }}"></div>
                                    @endforeach  
                                    <div><input type="number" disabled step="1" disabled name="product_files[0][sort]" class="form-control"  placeholder="{{ __("backend.$routeNameData.product_files.*.sort") }}"></div>                                
                                    <div><input type="file" disabled name="product_files[0][path]"/></div>                                
                                </div>               
                                <table class="display table" style="width:100%">
                                    <thead>
                                        <tr>
                                            @foreach($languageData as $language)
                                            <th>{{ __("backend.$routeNameData.product_files.*.name") }}({{ $language->name }})</th>
                                            @endforeach 
                                            <th>{{ __("backend.$routeNameData.product_files.*.sort") }}</th>
                                            <th>{{ __("backend.$routeNameData.product_files.*.path") }}</th>
                                            <th>{{ __('option') }}</th>
                                        </tr>
                                    </thead>
                                </table>                                                                                              
                            </div>                               
                        </div>                                                 
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.sort") }}<span class="text-danger">*</span></label>
                            <input type="text" required name="sort" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                        </div>                    
                        <div class="form-group col-md-2">
                            <label>{{ __("backend.$routeNameData.status") }}<span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <label class="css-control css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" checked>
                                    <input type="hidden" required name="status" value="1">
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label>{{ __("backend.$routeNameData.new") }}</label>
                            <div class="col-md-12">
                                <label class="css-control css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" checked>
                                    <input type="hidden" name="new" value="1">
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
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item))
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
    let format = function (state) {
        if (!state.id) {
            return state.text;
        }
        
        return $(`<span>
            <img src="/${ state.path }" class="img-flag" />${ state.name['zh-Hant'] }
        </span>`);
    };
    $(".js-select2[name='product_icons[]']").select2({
        allowClear: true,	
        ajax: {
            url: $(".js-select2[name='product_icons[]']").data('url'),
            data: function (params) {
                return { search: params.term };
            },
            processResults: function(data, page) {              								
                return { 
                    results: data.map(item => { return Object.assign(item, { 
                        text: item.name['zh-Hant'] 
                    }) })
                }
            },
        },
        templateSelection: function(state) {
            return format(state)
        },
        templateResult: function (state) {
            return format(state)
        }
    });
    addDom(['product_files']);
});
</script>
@endpush
