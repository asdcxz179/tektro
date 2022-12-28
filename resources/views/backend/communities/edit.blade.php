@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">{{ __('edit') }}</h3>
    </div>
    <div class="block-content block-content-full">            
        <form id="form-edit" action="{{ route('backend.'.$routeNameData.'.store') }}" method="post">
            @csrf
            <div class="form-row">  
                <div class="form-group col-md-12">
                    <label>{{ __("backend.$routeNameData.facebook") }}</label>
                    <input type="string" name="facebook" class="form-control" value="{{ $data->facebook ?? '' }}" placeholder="{{ __("backend.$routeNameData.facebook") }}">
                </div>                                                                
                <div class="form-group col-md-12">
                    <label>{{ __("backend.$routeNameData.instagram") }}</label>
                    <input type="string" name="instagram" class="form-control" value="{{ $data->instagram ?? '' }}" placeholder="{{ __("backend.$routeNameData.instagram") }}">
                </div>                                                                
                <div class="form-group col-md-12">
                    <label>{{ __("backend.$routeNameData.youtube") }}</label>
                    <input type="string" name="youtube" class="form-control" value="{{ $data->youtube ?? '' }}" placeholder="{{ __("backend.$routeNameData.youtube") }}">
                </div>                                                                
            </div>
            <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
        </form>
    </div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    var path = '{{ route('backend.'.$routeNameData.'.index') }}';
    var formCreate = $('#form-edit');
    document.querySelectorAll('fieldset.image').forEach(item => FilePond.create(item))
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