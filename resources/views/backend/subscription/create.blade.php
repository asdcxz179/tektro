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
                            <label>語言</label>
                            <select class="form-control" name="lang">
                                @foreach($languageData as $language) 
                                <option value="{{ $language->lang }}">
                                    {{ $language->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>                                                 
                        <div class="form-group col-md-6">
                            <label>標題<span class="text-danger">*</span></label>
                            <input type="text" required name="title" class="form-control" placeholder="標題" value="">
                        </div>                    
                        <div class="form-group col-md-12">
                            <label>內容</label>                                
                            <textarea name="content" class="form-control summernote"></textarea>
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