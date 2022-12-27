@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('edit') }}</h3>
    </div>
    <div class="block-content block-content-full">
        <form id="form-edit" action="{{ route('backend.'.$routeNameData.'.update',[$routeIdData => $data->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                                <input type="text" value="{{ $data->getTranslation('name', $language->lang) }}" name="name[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.name.*") }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.description.*") }}</label>
                                <input type="text" value="{{ $data->getTranslation('description', $language->lang) }}" name="description[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.description.*") }}">
                            </div>                                                                                        
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.content.*") }}</label>                                
                                <textarea name="content[{{ $language->lang }}]" class="form-control">{{ $data->getTranslation('content', $language->lang) }}</textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.details.*") }}</label>                                
                                <textarea name="details[{{ $language->lang }}]" class="form-control summernote">{{ $data->getTranslation('details', $language->lang) }}</textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.technology.*") }}</label>                                
                                <textarea name="technology[{{ $language->lang }}]" class="form-control summernote">{{ $data->getTranslation('technology', $language->lang) }}</textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.test_reviews.*") }}</label>                                
                                <textarea name="test_reviews[{{ $language->lang }}]" class="form-control summernote">{{ $data->getTranslation('test_reviews', $language->lang) }}</textarea>
                            </div>              
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.related_products.*") }}</label>                                
                                <textarea name="related_products[{{ $language->lang }}]" class="form-control summernote">{{ $data->getTranslation('related_products', $language->lang) }}</textarea>
                            </div>                              
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_categories") }}</label>
                            <select data-url="{{ route('backend.product_categories.select') }}" class="js-select2 form-control" multiple name="product_categories[]" data-placeholder="{{ __("backend.$routeNameData.product_categories") }}">
                                @foreach($data->product_categories as $item)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_tags") }}</label>
                            <select data-url="{{ route('backend.product_tags.select') }}" class="js-select2 form-control" multiple name="product_tags[]" data-placeholder="{{ __("backend.$routeNameData.product_tags") }}">
                                @foreach($data->product_tags as $item)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>                                
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.banner") }}</label>    
                            <!-- <div class="text-danger">{{ __('suggested_size', ['width' => 60, 'height' => 60]) }}</div> -->
                            <fieldset class="image">
                                @isset($data->banner)
                                <input value="{{ asset($data->banner) }}" checked type="checkbox" />{{ asset($data->banner) }}
                                @endisset

                                <input type="file" name="banner" accept="image/*" />    
                            </fieldset>  
                        </div>               
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.product_images.*") }}</label>    
                            <!-- <div class="text-danger">{{ __('suggested_size', ['width' => 236, 'height' => 236]) }}</div> -->
                            <fieldset class="image">
                                @isset($data->product_images)
                                    @foreach($data->product_images as $value)
                                    <input value="{{ asset($value['path']) }}" checked type="checkbox" />{{ asset($value['path']) }}
                                    @endforeach
                                @endisset                                
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
                            @isset($data->product_files)
                            @foreach($data->product_files as $key => $value)                     
                            <div class="add form-row"> 
                                <input type="hidden" name="product_files[{{ $key }}][id]" value="{{ $value->id }}">
                                @foreach($languageData as $language) 
                                <div class="form-group col-md-2">
                                    <label>{{ __("backend.$routeNameData.product_files.*.name") }}({{ $language->name }})</label>
                                    <input type="text" value="{{ $value->getTranslation('name', $language->lang) }}" name="product_files[{{ $key }}][name][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.product_files.*.name") }}">
                                </div>  
                                @endforeach                            
                                <div class="form-group col-md-3">
                                    <label>{{ __("backend.$routeNameData.product_files.*.sort") }}</label>                                    
                                    <input type="text" value="{{ $value->sort }}" name="product_files[{{ $key }}][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                                </div>                                   
                                <div class="form-group col-md-4 filepond-dom">
                                    <label>{{ __("backend.$routeNameData.product_files.*.path") }}</label>                                    
                                    <fieldset class="image">        
                                        @isset($value->path)
                                        <input value="{{ asset($value->path) }}" checked type="checkbox" />{{ asset($value->path) }}
                                        @endisset                                                                
                                        <input type="file" name="product_files[{{ $key }}][path]"/>    
                                    </fieldset>  
                                </div>  
                                <div class="form-group col-md-1 justify-content-center align-items-end d-none delete">
                                    <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                                        <i class="fa fa-times"></i>
                                    </button>    
                                </div>                                  
                            </div>   
                            @endforeach
                            @endisset                                                                                                               
                        </div>                                                 
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.sort") }}<span class="text-danger">*</span></label>
                            <input type="text" required name="sort" class="form-control" value="{{ $data->sort }}" placeholder="{{ __("backend.$routeNameData.sort") }}">
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
    var path = '{{ route('backend.'.$routeNameData.'.index') }}';
    var formEdit = $('#form-edit');
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item))
    $(".nav-item a").eq(0).click();
    formEdit.ajaxForm({
        beforeSubmit: function(arr, $form, options) {    
            formEdit.find('button[type=submit]').attr('disabled',true);
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
</script>    
@endpush
