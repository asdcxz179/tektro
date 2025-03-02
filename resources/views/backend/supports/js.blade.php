@push('scripts')
<script>
    $(document).on('click','.file_add' , function() {
        let parent = $(this).parents('.parent');
        let name = $(this).attr('name');
        let area = parent.find('.file_area');
        
        let length = area.find('.files').length;
        name = name.replace(/\$i/g, length)
        let file = `<div class="pt-1 d-flex mb-1 file_item">
                        <div>
                            <input type="file" name="${name}" class=" files"/>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="file_delete text-danger">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>`;
        area.append(file);
    }).on('click', '.file_delete', function(){
        $(this).parents('.file_item').remove();
    });
</script>
@endpush