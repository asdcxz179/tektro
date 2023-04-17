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
                </div>
            </form>
        </div>
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
    var path = '{{ route('backend.audits.index') }}';
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
        order: [[7, 'desc']],
        columns: [
            { data: 'null', title: '#', bSearchable: false, bSortable: false, render: function ( data, type, row , meta ) {
                return  meta.row + 1;
            }},
            // { data: 'product_categories', name: 'product_categories.name->zh-Hant', title: '{{ __("backend.$routeNameData.product_categories") }}', render: function ( data, type, row ){
			// 	return data.map(item => item.name['zh-Hant']).join(",");
			// } },
            { data: 'user.name', title: '使用者', defaultContent: '' },
            { data: 'event', title: '操作', defaultContent: '' },
            { data: 'auditable_type_name', title: '類型', defaultContent: '' },
            { data: 'auditable_id', title: '資料id', defaultContent: '' },
            { data: 'old_values', title: '舊資料', defaultContent: '', render:function(data,type,row) {
                return data.join('<br>');
            } },
            { data: 'new_values', title: '新資料', defaultContent: '', render:function(data,type,row) {
                return data.join('<br>');
            } },
            { data: 'created_at', title: '操作時間' },
            // { data: 'id', title: '{{ __('option') }}', bSortable: false, render:function(data,type,row) {
            //     return `<a class="edit" href="${ path }/${ data }/edit?{{http_build_query(request()->all())}}">{{ __('edit') }}</a>`;
            // }},
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
    $('select[name="brand"],select[name="category"]').change(function(){
        $('form[name="search"]').submit();
        // $('select[name="category"] option').hide();
        // $('select[name="category"] option[value=""]').show();
        // $('.brand_'+$(this).val()).show();
    });
});
</script>
@endpush
