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
                            <div class="add form-row"> 
                                @foreach($languageData as $language) 
                                <div class="form-group col-md-3">
                                    <label>{{ __("backend.$routeNameData.relation.*.big_title") }}({{ $language->name }})</label>
                                    <input type="text" name="relation[1][big_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.big_title") }}">
                                </div> 
                                <div class="form-group col-md-3">
                                    <label>{{ __("backend.$routeNameData.relation.*.small_title") }}({{ $language->name }})</label>
                                    <input type="text" name="relation[1][small_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.small_title") }}">
                                </div>                                  
                                @endforeach                            
                                <div class="form-group col-md-3">
                                    <label>{{ __("backend.$routeNameData.relation.*.sort") }}</label>                                    
                                    <input type="text" name="relation[1][sort]" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="0">
                                </div>                                   
                                <div class="form-group col-md-8 filepond-dom">
                                    <label>{{ __("backend.$routeNameData.relation.*.path") }}</label>
                                    <div class="text-danger">{{ __('suggested_size', ['width' => 700, 'height' => 500]) }}</div>
                                    <fieldset class="image">                                
                                        <input type="file" name="relation[1][path]" accept="image/*" />    
                                    </fieldset>  
                                </div>  
                                <div class="form-group col-md-1 justify-content-center align-items-end d-none delete">
                                    <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                                        <i class="fa fa-times"></i>
                                    </button>    
                                </div> 
                                <div class="form-group col-md-12">
                                    <h2 class="content-heading col-md-12"></h2>
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
</script>
@endpush