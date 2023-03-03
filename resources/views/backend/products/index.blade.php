@extends('backend.layouts.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <div class="block-title">
            <form action="" name="search">
                <div class="row">
                    <div class="col-1">
                        <h3 class="block-title">{{ __('list') }}</h3>
                    </div>
                    
                        <div class="col-3">
                            <select name="brand" id="" class="form-control">
                                <option value="">品牌</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="category" id="" class="form-control">
                                <option value="">產品分類</option>
                                @foreach($categories as $key => $category)
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}" class="brand_{{$key}}" style="display:none;">{{$item->name}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                </div>
            </form>
        </div>
        <a href="{{ route('backend.'.$routeNameData.'.create') }}" class="btn btn-primary">{{ __('create') }}</a>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full nowrap" id="data-table" style="width:100%">
            <thead>
            </thead>
        </table>
    </div>
</div>
@stop

@push('scripts')
<script>
$(function() {
    var path = '{{ route('backend.'.$routeNameData.'.index') }}';
    var tableList = $('#data-table');
    var formCreate = $('#form-create');
    var table = tableList.DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        scrollX: true,
        ajax: {
            url: path,
            data: function ( d ) {
                return $.extend( {}, d, $('form[name="search"]').serializeArray()
                    .reduce(function (json, { name, value }) {
                    json[name] = value;
                    return json;
                    }, {}));
            }
        },
        order: [[5, 'desc']],
        columns: [
            { data: 'null', title: '#', bSearchable: false, bSortable: false, render: function ( data, type, row , meta ) {
                return  meta.row + 1;
            }},
            { data: 'name.zh-Hant', name: 'name->zh-Hant', title: '{{ __("backend.$routeNameData.name.*") }}', defaultContent: '' },
            { 
                data: 'sort', title: '{{ __("backend.$routeNameData.sort") }}',
                render: function ( data, type, row ) {   
                    return`<input data-id="${ row.id }" type="text" required name="sort" class="form-control" placeholder="{{ __("backend.$routeNameData.sort") }}" value="${ data }">`;            
                },
            },
            {
                data: "status", title: '{{ __('status') }}',
                render: function ( data, type, row ) {   
                    return`
                        <label class="css-control css-control-sm css-control-primary css-switch">
                            <input type="checkbox" data-id="${ row.id }" class="status css-control-input" ${ data == 1 ? 'checked' : '' }>
                            <span class="css-control-indicator"></span>
                        </label>`;            
                },
                className: "dt-body-center"
            },            
            { data: 'created_at', title: '{{ __('created_at') }}' },
            { data: 'updated_at', title: '{{ __('updated_at') }}' },
            { data: 'id', title: '{{ __('option') }}', bSortable: false, render:function(data,type,row) {
                return `<a class="edit" href="${ path }/${ data }/edit">{{ __('edit') }}</a> |
                    <a class="copy" href="${ path }/${ data }/edit?action=copy">{{ __('copy') }}</a> |
                    <a data-id="${ data }" class="delete" href="javascript:;">{{ __('delete') }}</a>`;
            }},
        ]
    });

    tableList.on('change','[name="sort"]', sort_status)
    tableList.on('click','.css-switch input[type="checkbox"]', sort_status)
    
    function sort_status() {
        var id = $(this).data('id');
        var tr = $(this).parents('tr');
        $.get(`${ path }/${ id }`, function(row) {
            row.sort = tr.find('[name="sort"]').val()
            row.status = tr.find('.css-switch input[type="checkbox"]').prop('checked') ? 1 : 0;
            console.log(row);
            $.ajax({
                url: `${ path }/status/${ id }`,
                type: 'PUT',
                dataType: 'json',
                data: row,
                success: function(data) {
                    Swal.fire({ text: data.message, icon: 'success' }).then(function() {
                        if(id == {{ Auth::user()->id }}){
                            location.reload();
                            return;
                        }
                        table.ajax.reload(null, false);
                    }); 
                },
            }); 
        })  
    }
    tableList.on('click','.delete',function(){
        var id = $(this).data('id');
        Swal.fire({ 
            text: '{{ __('confirm_delete') }}',
            icon: 'warning',
            showCancelButton: true, 
            confirmButtonText: '{{ __('sure') }}',
            cancelButtonText: '{{ __('cancel') }}'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: `${ path }/${ id }`,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        Swal.fire({ text: data.message, icon: 'success' }).then(function() {
                            table.ajax.reload(null, false);
                        }); 
                    },
                });
            }
        });
    })
    $('select[name="brand"],select[name="category"]').change(function(){
        table.ajax.reload(null, false);
    });
    $('select[name="brand"]').change(function(){
        $('select[name="category"] option').hide();
        $('.brand_'+$(this).val()).show();
    });
});
</script>
@endpush
