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
                <div class="form-group col-md-12">
                    <label>{{ __("backend.$routeNameData.home_type_id") }}</label>
                    <select class="js-select2 form-control" disabled name="home_type_id">
                        @foreach($types as $value)
                        <option value="{{ $value->id }}" {{ $value->id == request()->home_type_id ? 'selected' : '' }}>{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>   
                <div class="form-group col-md-12">   
                    <div class="form-row">                        
                        @isset($data->relation)
                        @foreach($data->relation as $key => $value)    
                        @php $key++ @endphp        
                        <div class="form-group col-md-12"> 
                            <input type="hidden" name="relation[{{ $key }}][id]" value="{{ $value->id }}">
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
                                            <input type="text" value="{{ $value->getTranslation('big_title', $language->lang) }}" name="relation[{{ $key }}][big_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.big_title") }}">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label>{{ __("backend.$routeNameData.relation.*.small_title") }}({{ $language->name }})</label>
                                            <input type="text" value="{{ $value->getTranslation('small_title', $language->lang) }}" name="relation[{{ $key }}][small_title][{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.small_title") }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> 
                            <div class="form-row"> 
                                <div class="form-group col-md-12">
                                    <label>{{ __("backend.$routeNameData.relation.*.link") }}</label>
                                    <input type="text" value="{{ $value->link }}" name="relation[{{ $key }}][link]" class="form-control" placeholder="{{ __("backend.$routeNameData.relation.*.link") }}">
                                </div>                                                            
                            </div>                             
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>{{ __("backend.$routeNameData.relation.*.path") }}</label>    
                                    <!-- <div class="text-danger">{{ __('suggested_size', ['width' => 60, 'height' => 60]) }}</div> -->
                                    <fieldset class="image">
                                        @isset($value->path)
                                        <input value="{{ asset($value->path) }}" checked type="checkbox" />{{ asset($value->path) }}
                                        @endisset   

                                        <input type="file" name="relation[{{ $key }}][path]" accept="image/*" />    
                                    </fieldset>  
                                </div>                                       
                            </div>                                 
                        </div>                            
                        @endforeach 
                        @endisset                      
                    </div>                        
                </div>                       
                <div class="form-group col-md-12">                                   
                    <div class="form-row">                                                                                                        
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
    $(".form-group > ul > li:first-child a").click();
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
</script>    
@endpush
