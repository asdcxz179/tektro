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
                                <input type="text" value="{{ $data->getTranslation('name', $language->lang,false) }}" name="name[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.name.*") }}">
                            </div>                                          
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">  
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.support_category_id") }}</label>
                            <select data-url="{{ route('backend.support_categories.select') }}" class="js-select2 form-control" name="support_category_id" data-placeholder="{{ __("backend.$routeNameData.support_category_id") }}">
                                <option value="{{ $data->support_category?->id }}" selected>{{ $data->support_category?->name }}</option>
                                <option></option>
                            </select>
                        </div>                           
                        @foreach($support_files_type_data as $type) 
                        <div class="form-group col-md-12" id="support_files{{ $type->key }}">
                            <div class="form-row">
                                <h2 class="content-heading  col-md-12">{{ $type->name }}</h2>
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
                                <div><input type="text" disabled name="support_files{{ $type->key }}[0][name][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.support_files.*.name") }}"></div>
                                @endforeach  
                                <div><input type="number" disabled step="1" disabled name="support_files{{ $type->key }}[0][sort]" class="form-control"  placeholder="{{ __("backend.$routeNameData.support_files.*.sort") }}"></div>                                
                                <div><input type="file" disabled name="support_files{{ $type->key }}[0][path]"/></div>                                
                            </div>               
                            <table class="display table" style="width:100%">
                                <thead>
                                    <tr>
                                        @foreach($languageData as $language)
                                        <th>{{ __("backend.$routeNameData.support_files.*.name") }}({{ $language->name }})</th>
                                        @endforeach 
                                        <th>{{ __("backend.$routeNameData.support_files.*.sort") }}</th>
                                        <th>{{ __("backend.$routeNameData.support_files.*.path") }}</th>
                                        <th>{{ __('option') }}</th>
                                    </tr>
                                </thead>
                                <tbody>     
                                    @foreach($data->support_files as $key => $value)       
                                    @if($type->id == $value->support_file_type_id) 
                                    <tr>
                                        <input type="hidden" name="support_files{{ $type->key }}[{{ $key }}][id]" value="{{ $value->id }}">
                                        @foreach($languageData as $language)                                
                                        <td><input type="text" value="{{ $value->getTranslation('name', $language->lang) }}" name="support_files{{ $type->key }}[{{ $key }}][name][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.support_files.*.name") }}"></td>
                                        @endforeach 
                                        <td><input type="text" value="{{ $value->sort }}" name="support_files{{ $type->key }}[{{ $key }}][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0"></td>
                                        <td>
                                            <input type="file" name="support_files{{ $type->key }}[{{ $key }}][path]"/>
                                            @isset($value->path)
                                            <div class="mt-2"><h6>{{ $value->file_name }}<h6></div>
                                            @endisset  
                                        </td>                                    
                                        <td>
                                            <div class="form-group col-md-1 justify-content-center align-items-end d-flex delete">
                                                <button type="button" class="rm-btn btn btn-danger mr-5 mb-5"><i class="fa fa-times"></i></button>    
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody> 
                            </table>                                                                                                                       
                        </div>   
                        @endforeach                           
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

    @foreach($support_files_type_data as $type) 
        addDom(['support_files{{ $type->key }}']);
    @endforeach    
});
</script>    
@endpush
