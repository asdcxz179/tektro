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
                                <label>{{ __("backend.$routeNameData.name.*") }}</label>
                                <input type="text" name="name[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.name.*") }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.description.*") }}</label>
                                <input type="text" name="description[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.description.*") }}">
                            </div>                            
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.content.*") }}</label>
                                <input type="text" name="content[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.content.*") }}">
                            </div>                            
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.details.*") }}</label>
                                <input type="text" name="details[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.details.*") }}">
                            </div>                            
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.technology.*") }}</label>
                                <input type="text" name="technology[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.technology.*") }}">
                            </div>                            
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.test_reviews.*") }}</label>
                                <input type="text" name="test_reviews[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.test_reviews.*") }}">
                            </div>              
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.related_products.*") }}</label>
                                <input type="text" name="related_products[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.related_products.*") }}">
                            </div>                                             
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.banner") }}</label>    
                            <!-- <div class="text-danger">{{ __('suggested_size', ['width' => 60, 'height' => 60]) }}</div> -->
                            <fieldset class="image">
                                <input type="file" name="banner" accept="image/*" />    
                            </fieldset>  
                        </div>               
                        <div class="form-group col-md-6 filepond-dom">
                            <label>{{ __("backend.$routeNameData.product_images.*") }}</label>    
                            <!-- <div class="text-danger">{{ __('suggested_size', ['width' => 236, 'height' => 236]) }}</div> -->
                            <fieldset class="image">
                                <input type="file" multiple data-allow-reorder="true" name="product_images[]" accept="image/*" />       
                            </fieldset>  
                        </div>            
                        <div class="form-group col-md-12">
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
                            <div class="add form-row"> 
                                <div class="form-group col-md-4">
                                    <label>{{ __("backend.$routeNameData.product_files.*.name") }}</label>
                                    <input type="text" name="product_files[1][name]" class="form-control" placeholder="{{ __("backend.$routeNameData.product_files.*.name") }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>{{ __("backend.$routeNameData.product_files.*.sort") }}</label>                                    
                                    <input type="text" required name="product_files[1][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                                </div>                                   
                                <div class="form-group col-md-4">
                                    <label>{{ __("backend.$routeNameData.product_files.*.path") }}</label>                                    
                                    <fieldset class="image">                                
                                        <input type="file" name="images[1][path]" accept="image/*" />    
                                    </fieldset>  
                                </div>  
                                <div class="form-group col-md-1 justify-content-center align-items-end d-none delete">
                                    <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                                        <i class="fa fa-times"></i>
                                    </button>    
                                </div>                                  
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
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item))
    $(".nav-item a").eq(0).click();
    formCreate.ajaxForm({
        beforeSubmit: function(arr, $form, options) {
            formCreate.find('button[type=submit]').attr('disabled',true);
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

    $('.js-select2').each(function(){
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
                            text: item.name
                        } }) 
                    }
                },
            }
        });
    })    
});
</script>
@endpush