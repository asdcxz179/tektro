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
                                <label>{{ __("backend.$routeNameData.name.*") }}</label>
                                <input type="text" value="{{ $data->getTranslation('name', $language->lang,false) }}" name="name[{{ $language->lang }}]" class="form-control" placeholder="{{ __("backend.$routeNameData.name.*") }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>{{ __("backend.$routeNameData.content.*") }}</label>                                
                                <textarea name="content[{{ $language->lang }}]" class="form-control summernote">{{ $data->getTranslation('content', $language->lang,false) }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __("backend.$routeNameData.*.show") }}<span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <label class="css-control css-control-primary css-switch">
                                        <input type="checkbox" class="css-control-input" {{ $data->getTranslation('show', $language->lang,false) == 1 ? 'checked' : '' }}>
                                        <input type="hidden" required name="show[{{ $language->lang }}]" value="{{ $data->getTranslation('show', $language->lang,false) }}">
                                        <span class="css-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block-content tab-content">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>{{ __("backend.$routeNameData.product_brands") }}</label>
                            <select data-url="{{ route('backend.product_brands.select') }}" class="js-select2 form-control" multiple name="product_brands[]" data-placeholder="{{ __("backend.$routeNameData.product_brands") }}">
                                @foreach($data->product_brands as $item)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>                                                
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
