<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ $subTitleData }} - {{ __(env('APP_NAME')) }}</title>

        <meta name="description" content="{{ $subTitleData }} - {{ __(env('APP_NAME')) }} created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')

        {{ $jetStrapStylesheets ?? "" }}

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" href="{{ asset('/js/plugins/select2/css/select2.css') }}">
        <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">
        <link rel="stylesheet" href="{{ asset('/js/plugins/sweetalert2/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('js/plugins/summernote/summernote-bs4.css') }}">        
        <link href="{{ asset('plugins/filepond/dist/filepond.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('js/plugins/vakata-jstree/themes/default/style.min.css') }}" />

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
        @yield('css_after')
        <style>
            .table-bordered thead th{
                border-bottom: 2px solid #e4e7ed;
            }
            .img-lightbox img{
                height: 100%; 
            }
            .img-lightbox:hover {
                transform: scale(1.4);
                opacity: 0.75;
            }
            .select2-results__option[aria-disabled=true]{
                display: none;
            }            
            .select2-container--default .select2-results__option[aria-disabled=true] {
                display: none;
            }        
            .nav-main li{
                display: none;
            }     
            img.img-flag {
                margin: 0 5px 0 0px !important;
                display: inherit !important;
                height: 15px;
                width: 18px;
            }
            .select2-container {
                width: 100% !important;
            }             
        </style>
        @if(!auth()->user()->can("create $permissionsData"))
            <style>
                a[href*={{ $permissionsData }}][href*=create]{
                    display: none;
                }
            </style>      
        @endif
        @if(!auth()->user()->can("edit $permissionsData"))
            <style>
                a[href*={{ $permissionsData }}][href*=edit]{
                    display: none;
                }
            </style>
        @endif        
        @if(!auth()->user()->can("delete $permissionsData"))
            <style>            
                a.delete{
                    display: none;
                }
            </style>                    
        @endif               

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
        @livewireStyles
    </head>
    <body>
        <form id="form" action="{{route('logout')}}" method="POST">@csrf</form>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="javascript:void(0)">
                                <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="javascript:void(0)">John Smith</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <p>
                        Content..
                    </p>
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            @include('backend.partials.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                                <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                                <h6 class="dropdown-header">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-2 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="{{ mix('/css/themes/elegance.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="{{ mix('/css/themes/pulse.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="{{ mix('/css/themes/flat.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="{{ mix('/css/themes/corporate.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="{{ mix('/css/themes/earth.css') }}" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Header</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Sidebar</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                                    </div>
                                </div>
                                <div class="d-none d-xl-block">
                                    <h6 class="dropdown-header">Main Content</h6>
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                </div>
                            </div>
                        </div>
                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    @livewire('header-section')
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="/dashboard" method="POST">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <div class="content">
                    <h2 class="content-heading">{{ $titleData }}</h2>
                    @yield('content')
                    {{ $slot ?? ""}}
                </div>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="{{ mix('js/codebase.app.js') }}"></script>
        <script src="{{ asset('/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/summernote/summernote-image-attributes.js?11') }}"></script>
        <script src="{{ asset('/js/plugins/summernote/lang/summernote-image-attributes-zh-TW.js?1') }}"></script>
        <script src="{{ asset('js/jquery.form.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/dist/filepond.js') }}"></script>
        <script src="{{ asset('plugins/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js') }}"></script>
        <script src="{{ asset('plugins/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js') }}"></script>
        <script src="{{ asset('plugins/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js') }}"></script>
        <script src="{{ asset('plugins/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js') }}"></script>
        <script src="{{ asset('js/plugins/vakata-jstree/jstree.min.js') }}"></script>
        <script>
            function decodeEntities(encodedString) {
                console.log(encodedString);
                var div = document.createElement('div');
                div.innerHTML = encodedString;
                return div.textContent;
            }  
            
            function addDom(relations_table = []){
                relations_table.forEach(item => {
                    var table = $(`#${ item } table`).DataTable({
                        paging: false,
                        ordering: false,
                        searching: false
                    });

                    $(document).on("click",`#${ item } .add-btn`,function() {    
                        cloneDom();
                    });

                    $(document).on("click",`#${ item } .rm-btn`,function() {
                        table.row($(this).parents('tr')).remove().draw();
                    });   
                    
                    function cloneDom() {
                        let add = $(`#${ item }`).find('.add').clone();
                        let count = 0;
                        if($(`#${ item } tbody tr:last td`).eq(0).find('[name]').attr('name')){
                            count = $(`#${ item } tbody tr:last td`).eq(0).find('[name]').attr('name').match(/.*\[(?<lastcount>\d*)\].*/).groups.lastcount;
                        }

                        var addDom = [];
                        add.children('div').each(function(){
                            $(this).find('[name]').each(function(){
                                let name = $(this).attr('name').replace(0, parseInt(count) + 1)
                                $(this).attr('name', name).attr('disabled', false);
                            })
                            addDom.push($(this).html()) 
                        })

                        table.row.add(addDom.concat([
                            `<div class="form-group col-md-1 justify-content-center align-items-end d-flex delete">
                                <button type="button" class="rm-btn btn btn-danger mr-5 mb-5">
                                    <i class="fa fa-times"></i>
                                </button>    
                            </div>`
                        ])).draw();
                    }
                })
            }              
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        ajax: 1
                    }
                });

                $( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
                    if(thrownError === 'abort'){
                        return;
                    }                
                    var meessage = [];
                    if(jqxhr.responseJSON && jqxhr.responseJSON.errors){
                        $.each(jqxhr.responseJSON.errors,function(key,value){
                            meessage.push(value.shift());
                        })
                    }else if(jqxhr.responseJSON && jqxhr.responseJSON.message){
                        meessage.push(jqxhr.responseJSON.message);
                    }else{
                        meessage.push(thrownError);
                    }            
                    Swal.fire({ html: meessage.join('<br />'), icon: 'error' })
                });

                $.extend( true, $.fn.dataTable.defaults, {
                    language: { url: '{{ asset('zh-Hant.json') }}' },
                    fnDrawCallback: function () {
                        Codebase.helpers('magnific-popup');
                    },
                } );     

                Codebase.helpers(['summernote']);  
                Codebase.helpers('magnific-popup');
                Codebase.helpers('select2');
                FilePond.registerPlugin(
                    FilePondPluginImagePreview,
                    FilePondPluginImageExifOrientation,
                    FilePondPluginFileValidateType,
                );       
                FilePond.setOptions({
                    allowPaste: false,
                    storeAsFile: true,
                });
                
                $('.summernote').each(function(){
                    let _this = $(this);
                    _this.summernote({
                        lang:'zh-TW',
                        popover: {
                            image: [
                                ['custom', ['imageAttributes']],
                                ['imagesize', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                                ['remove', ['removeMedia']]
                            ],
                        },
                        imageAttributes:{
                            icon:'<i class="note-icon-pencil"/>',
                            removeEmpty:false, // true = remove attributes | false = leave empty if present
                            disableUpload: true // true = don't display Upload Options | Display Upload Options
                        },
                        callbacks: {
                            onImageUpload: function(files,editor) {
                                var form_data = new FormData();
                                form_data.append('image', files[0]);
                                $.ajax({
                                    data: form_data,
                                    type: "POST",
                                    url: '{{ route('backend.upload.store') }}',
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
                                        var url = data.path;
                                        var image = $('<img>').attr('src', url);
                                        _this.summernote("insertNode", image[0]);
                                        // $summernote.summernote('insertNode', url);
                                        // $(this).summernote('editor.insertImage', url);
                                    }
                                });
                                
                            }
                        }
                    });  
                });              
                     
                $('form .css-switch input[type="checkbox"]').change(function(){
                    var status = $(this).prop('checked') ? 1 : 0;
                    $(this).next().val(status);
                })
         
                function chageLanguage(change = ''){
                    var language_id = $('select[name="language_id"]').val() ;
                    $('.js-select2:not([not-language])').find(`option, optgroup`).attr('disabled', 'disabled');
                    $('.js-select2:not([not-language])').find(`option[data-language_id=${ language_id }], optgroup[data-language_id=${ language_id }]`).attr('disabled', false);
                    if(change){
                        $('.js-select2').val([]).trigger('change');
                    }
                }

                $('select[name="language_id"]').change(function() {
                    chageLanguage(true);
                })    

                // chageLanguage(false);
                
                function checkMenu(menus) {
                    var check = false;
                    menus.each(function() {
                        let menu = $(this);
                        let child = $(this).children('ul').children('li');
                        if(child.length > 0){
                            child.each(function() {
                                if($(this).children('a:not(.nav-submenu)').length > 0) {
                                    menu.show();
                                    $(this).show();
                                    check = true;
                                }
                                if($(this).children('a.nav-submenu').length > 0) {
                                    if(checkMenu($(this))){
                                        menu.show();
                                        $(this).show();
                                        check = true;
                                    }
                                }
                            })
                        }else{
                            $(this).show();
                            check = true;
                        }
                    })

                    return check;
                }

                checkMenu($('.nav-main > li'));
  
                
                $('.js-select2[data-url]').each(function(){
                    $(this).select2({        		
                        allowClear: true,	
                        ajax: {
                            url: $(this).data('url'),
                            data: function (params) {
                                return { search: params.term };
                            },
                            processResults: function(data, page) {                								
                                return { 
                                    results: data.map(item => { return { 
                                        id: item.id,
                                        text: item.name['zh-Hant'] || item.name
                                    } }) 
                                }
                            },
                        }
                    });
                })                   
            });
        </script>

        <!-- Laravel Scaffolding JS -->
        <!-- <script src="{{ mix('js/laravel.app.js') }}"></script> -->
        @yield('js_after')

        @stack('scripts')
        @livewireScripts
    </body>
</html>
