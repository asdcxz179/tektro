@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('create') }}</h3>
    </div>
    <div class="block-content block-content-full">            
        <form id="form-edit" action="{{ route('backend.'.$routeNameData.'.update',[$routeIdData => $data->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>{{ __('language_id') }}<span class="text-danger">*</span></label>
                    <select class="form-control" required name="language_id">
                        @foreach($languageData as $value)
                            <option value="{{ $value->id }}" {{ $value->id == $data->language_id ? 'selected' : '' }}>{{ $value->name }}</option>
                        @endforeach
                    </select>                      
                </div>                                                       
                <div class="form-group col-md-6">
                    <label>{{ __('name') }}<span class="text-danger">*</span></label>
                    <input type="text" required name="name" class="form-control" value="{{ $data->name }}" placeholder="{{ __('name') }}">
                </div>              
                <div class="form-group col-md-6">
                    <label>{{ __('image') }}</label>    
                    <fieldset class="images">
                        <input type="file" multiple data-allow-reorder="true" name="images[]" accept="image/*" />    
                    </fieldset>                    
                </div>   
                <div class="form-group col-md-6">
                    <label>{{ __('sort') }}<span class="text-danger">*</span></label>
                    <input type="text" required name="sort" class="form-control" value="{{ $data->sort }}" placeholder="{{ __('sort') }}">
                </div>    
                <div class="form-group col-md-6">
                    <label>{{ __('status') }}<span class="text-danger">*</span></label>
                    <div class="col-md-12">
                        <label class="css-control css-control-primary css-switch">
                            <input type="checkbox" class="css-control-input" {{ $data->status == 1 ? 'checked' : '' }}>
                            <input type="hidden" required name="status" value="{{ $data->status }}">
                            <span class="css-control-indicator"></span>
                        </label>
                    </div>                      
                </div>      
                <div class="form-group col-md-12">
                    <label>{{ __('content') }}</label>
                    <textarea name="content" class="form-control summernote">{{ $data->content }}</textarea>
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
    FilePond.create(document.querySelector('fieldset.images'))
    formEdit.ajaxForm({
        beforeSubmit: function(arr, $form, options) {    
            if(arr.find(item => ['images[]'].includes(item.name) && item.type == 'hidden' && item.value == '')){
                Swal.fire({ text: '{{ __('file loading or file error') }}', icon: 'error' });
                return false;
            }                
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
