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
                                <label>{{ __("backend.$routeNameData.*.show") }}<span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <label class="css-control css-control-primary css-switch">
                                        <input type="checkbox" class="css-control-input" checked>
                                        <input type="hidden" required name="show[{{ $language->lang }}]" value="1">
                                        <span class="css-control-indicator"></span>
                                    </label>
                                </div>
                            </div>                         
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.content.*") }}</label>                                
                                <textarea name="content[{{ $language->lang }}]" class="form-control summernote"></textarea>
                            </div>  
                            
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.show_date") }}</label>
                            <input type="date" name="show_date" class="form-control" placeholder="{{ __("backend.$routeNameData.show_date") }}">
                        </div>                         
                        <div class="form-group col-md-6">
                            <label>{{ __("backend.$routeNameData.banner") }}</label>    
                            <div class="text-danger">{{ __('suggested_size', ['width' => 700, 'height' => 500]) }}</div>
                            <fieldset class="image">
                                <input type="file" name="banner" accept="image/*" />    
                            </fieldset>  
                        </div> 
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.up_image") }}</label>    
                            <div class="text-danger">{{ __('suggested_size', ['width' => 1024, 'height' => 800]) }}</div>
                            <fieldset class="image">
                                <input type="file" name="up_image" accept="image/*" />    
                            </fieldset>  
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
    
});
</script>
@endpush