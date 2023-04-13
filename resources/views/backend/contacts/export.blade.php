@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">匯出資料</h3>
    </div>
    <div class="block-content block-content-full">
        <form id="form-edit" action="{{ route('backend.'.$routeNameData.'.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <div class="block-content tab-content">
                    <div class="form-row">            
                        <div class="form-group col-md-4">
                            <label>詢問開始時間<span class="text-danger">*</span></label>
                            <input type="date" required name="start" class="form-control" value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>詢問結束時間<span class="text-danger">*</span></label>
                            <input type="date" required name="end" class="form-control" value="{{ date('Y-m-d') }}">
                        </div>                                                          
                    </div>         
                </div>       
            </div>
            <a href="{{ route('backend.'.$routeNameData.'.index') }}" class="btn btn-secondary">{{ __('back') }}</a>
            <button type="submit" class="btn btn-primary">匯出</button>
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
    // formEdit.ajaxForm({
    //     beforeSubmit: function(arr, $form, options) {    
    //         formEdit.find('button[type=submit]').attr('disabled',true);
    //     },
    //     success: function(data) {
    //         Swal.fire({ text: data.message, icon: 'success' }).then(function() {
    //             location.href = path;
    //         });
    //     },
    //     complete: function() {
    //         formEdit.find('button[type=submit]').attr('disabled',false);
    //     }
    // });   
});
</script>    
@endpush
