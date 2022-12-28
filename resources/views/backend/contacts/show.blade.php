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
                <div class="block-content tab-content">
                    <div class="form-row">            
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.area_id") }}<span class="text-danger">*</span></label>
                            <input type="text" disabled required name="area_id" class="form-control" value="{{ $data->areas->name }}" placeholder="{{ __("backend.$routeNameData.area_id") }}">
                        </div>                                                              
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.question") }}<span class="text-danger">*</span></label>
                            <input type="text" disabled required name="question" class="form-control" value="{{ $data->question }}" placeholder="{{ __("backend.$routeNameData.question") }}">
                        </div>                                                              
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.country") }}<span class="text-danger">*</span></label>
                            <input type="text" disabled required name="country" class="form-control" value="{{ $data->country }}" placeholder="{{ __("backend.$routeNameData.country") }}">
                        </div>                                                              
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.name") }}<span class="text-danger">*</span></label>
                            <input type="text" disabled required name="name" class="form-control" value="{{ $data->name }}" placeholder="{{ __("backend.$routeNameData.name") }}">
                        </div>                                                              
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.email") }}<span class="text-danger">*</span></label>
                            <input type="text" disabled required name="email" class="form-control" value="{{ $data->email }}" placeholder="{{ __("backend.$routeNameData.email") }}">
                        </div>                                                              
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.phone") }}<span class="text-danger">*</span></label>
                            <input type="text" disabled required name="phone" class="form-control" value="{{ $data->phone }}" placeholder="{{ __("backend.$routeNameData.phone") }}">
                        </div>                                                              
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.content") }}<span class="text-danger">*</span></label>                            
                            <textarea disabled name="content" class="form-control">{{ $data->content }}</textarea>
                        </div>                                                                                               
                    </div>         
                </div>       
            </div>
            <a href="{{ route('backend.'.$routeNameData.'.index') }}" class="btn btn-secondary">{{ __('back') }}</a>
            {{-- <button type="submit" class="btn btn-primary">{{ __('edit') }}</button> --}}
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
