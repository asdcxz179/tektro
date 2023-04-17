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
                <div class="form-group col-md-12">
                    <label>{{ __("backend.$routeNameData.home_type_id") }}</label>
                    <select class="js-select2 form-control" name="home_type_id">
                        @foreach($types as $value)
                        @if($value->id != 1)
                        <option value="{{ $value->id }}" {{ $value->id == request()->home_type_id ? 'selected' : '' }}>{{ $value->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>   
                <div class="form-group col-md-12">   
                    <div class="form-row">                        
                        @foreach([1, 2] as $key)       
                        <div class="form-group col-md-12"> 
                            <div class="form-row">
                                <h2 class="content-heading  col-md-12">{{ __("backend.$routeNameData.relation.*.brand") }}{{ $key }}</h2>
                            </div>                                
                            <ul class="nav nav-tabs nav-tabs-block border" data-toggle="tabs" role="tablist">
                                @foreach($languageData as $language) 
                                <li class="nav-item">
                                    <a class="nav-link" href="#btabs{{ $key }}{{ $language->name }}">{{ $language->name }}</a>
                                </li>
                                @endforeach
                            </ul>         
                            <div class="block-content tab-content border mb-4">
                                @foreach($languageData as $language) 
                                <div class="tab-pane" id="btabs{{ $key }}{{ $language->name }}" role="tabpanel">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>{{ __("backend.$routeNameData.relation.*.big_title") }}({{ $language->name }})</label>
                                            <input type="text" name="relation[{{ $key }}][big_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.big_title") }}">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label>{{ __("backend.$routeNameData.relation.*.small_title") }}({{ $language->name }})</label>
                                            <input type="text" name="relation[{{ $key }}][small_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.small_title") }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> 
                            <div class="form-row"> 
                                <div class="form-group col-md-12">
                                    <label>{{ __("backend.$routeNameData.relation.*.link") }}</label>
                                    <input type="text" name="relation[{{ $key }}][link]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.link") }}">
                                </div>                                                            
                            </div>                            
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>{{ __("backend.$routeNameData.relation.*.path") }}</label>    
                                    <!-- <div class="text-danger">{{ __('suggested_size', ['width' => 60, 'height' => 60]) }}</div> -->
                                    <fieldset class="image">
                                        <input type="file" name="relation[{{ $key }}][path]" accept="image/*" />    
                                    </fieldset>  
                                </div>                                       
                            </div>                                 
                        </div>                            
                        @endforeach                       
                    </div>                        
                </div>                       
                <div class="form-group col-md-12">                                   
                    <div class="form-row">                                                                                                        
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
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item,{
        storeAsFile: true,
    }))
    $(".form-group > ul > li:first-child a").click();
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