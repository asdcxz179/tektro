@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('edit') }}</h3>
    </div>
    <div class="block-content block-content-full">
        <form id="form-edit" action="{{ route('backend.'.$routeNameData.'.update',[$routeIdData => 1]) }}" method="post" enctype="multipart/form-data">
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
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.title.*") }}</label>
                                <input type="text" name="title[{{ $language->lang }}]" value="{{ $data->getTranslation('title', $language->lang,false) }}" class="form-control" placeholder="{{ __("backend.$routeNameData.title.*") }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.keyword.*") }}</label>
                                <input type="text" name="keyword[{{ $language->lang }}]" value="{{ $data->getTranslation('keyword', $language->lang,false) }}" class="form-control" placeholder="{{ __("backend.$routeNameData.keyword.*") }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.description.*") }}</label>
                                <textarea name="description[{{ $language->lang }}]" id="" cols="30" rows="10" class="form-control" placeholder="{{ __("backend.$routeNameData.description.*") }}">{{ $data->getTranslation('description', $language->lang,false) }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.author.*") }}</label>
                                <input type="text" name="author[{{ $language->lang }}]" value="{{ $data->getTranslation('author', $language->lang,false) }}" class="form-control" placeholder="{{ __("backend.$routeNameData.author.*") }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.copyright.*") }}</label>
                                <textarea name="copyright[{{ $language->lang }}]" id="" cols="30" rows="10" class="form-control" placeholder="{{ __("backend.$routeNameData.copyright.*") }}">{{ $data->getTranslation('copyright', $language->lang,false) }}</textarea>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
