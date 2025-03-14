<?php

return [
    [ 'active' => 'homes*', 'icon' => 'si si-home', 'name' => 'homes', 'title' => 'homes', 'routeId' => 'home', 'permissions' => 'homes' ],
    [ 'active' => 'header_banners*', 'icon' => 'fa fa-image', 'name' => 'header_banners', 'title' => 'header_banners', 'routeId' => 'header_banner', 'permissions' => 'header_banners' ],
    [ 'active' => 'info/*', 'icon' => 'si si-energy', 'title' => 'info', 'child' =>
        [
            [ 'active' => 'info/news*', 'name' => 'news', 'title' => 'news', 'routeId' => 'news', 'permissions' => 'news' ],
            [ 'active' => 'info/talents*', 'name' => 'talents', 'title' => 'talents', 'routeId' => 'talent', 'permissions' => 'talents' ],
        ]
    ],  
    [ 'active' => 'abouts*', 'icon' => 'si si-book-open', 'name' => 'abouts', 'title' => 'abouts', 'routeId' => 'about', 'permissions' => 'abouts' ],
    [ 'active' => 'product_label/*', 'icon' => 'si si-handbag', 'title' => 'product_label', 'child' =>
        [
            [ 'active' => 'product_label/product_brands*'          ,'name' => 'product_brands'          , 'title' => 'product_brands'       , 'routeId' => 'product_brand'      , 'permissions' => 'product_brands' ],
            [ 'active' => 'product_label/product_categories*'      ,'name' => 'product_categories'      , 'title' => 'product_categories'   , 'routeId' => 'product_category'   , 'permissions' => 'product_categories' ],
            [ 'active' => 'product_label/product_tags*'            ,'name' => 'product_tags'            , 'title' => 'product_tags'         , 'routeId' => 'product_tag'        , 'permissions' => 'product_tags' ],            
            [ 'active' => 'product_label/product_special*'            ,'name' => 'product_special'            , 'title' => 'product_special'         , 'routeId' => 'product_special'        , 'permissions' => 'product_special' ],            
            [ 'active' => 'product_label/product_icons*'            ,'name' => 'product_icons'          , 'title' => 'product_icons'        , 'routeId' => 'product_icon'       , 'permissions' => 'product_icons' ],
            [ 'active' => 'product_label/products*'                ,'name' => 'products'                , 'title' => 'products'             , 'routeId' => 'product'            , 'permissions' => 'products' ],
            [ 'active' => 'product_label/product_keywords*'        ,'name' => 'product_keywords'        , 'title' => 'product_keywords'     , 'routeId' => 'product_keyword'    , 'permissions' => 'product_keywords' ],
        ]
    ],       
    [ 'active' => 'assist/*', 'icon' => 'fa fa-ticket', 'title' => 'assist', 'child' =>
        [
            [ 'active' => 'assist/support_categories*'             ,'name' => 'support_categories'      , 'title' => 'support_categories'   , 'routeId' => 'support_category'   , 'permissions' => 'support_categories' ],
            [ 'active' => 'assist/supports*'                       ,'name' => 'supports'                , 'title' => 'supports'             , 'routeId' => 'support'            , 'permissions' => 'supports' ],
            [ 'active' => 'assist/video_settings*'                 ,'name' => 'video_settings'          , 'title' => 'video_settings'       , 'routeId' => 'video_setting'      , 'permissions' => 'video_settings' ],
            [ 'active' => 'assist/commons*'                        ,'name' => 'commons'                 , 'title' => 'commons'              , 'routeId' => 'common'             , 'permissions' => 'commons' ],            
            [ 'active' => 'assist/warranty_settings*'              ,'name' => 'warranty_settings'       , 'title' => 'warranty_settings'    , 'routeId' => 'warranty_setting'   , 'permissions' => 'warranty_settings' ],
        ]
    ],            
    [ 'active' => 'connect/*', 'icon' => 'si si-call-in', 'title' => 'connect', 'child' =>
        [
            [ 'active' => 'connect/contacts*'                      ,'name' => 'contacts'                , 'title' => 'contacts'             , 'routeId' => 'contact'            , 'permissions' => 'contacts' ],
            [ 'active' => 'connect/contact_settings*'              ,'name' => 'contact_settings'        , 'title' => 'contact_settings'     , 'routeId' => 'contact_setting'    , 'permissions' => 'contact_settings' ],        
            [ 'active' => 'connect/dealers*'                      ,'name' => 'dealers'                  , 'title' => 'dealers'              , 'routeId' => 'dealer'             , 'permissions' => 'dealers' ],         
            [ 'active' => 'connect/subscription*'                      ,'name' => 'subscription'                  , 'title' => 'subscription'              , 'routeId' => 'dealer'             , 'permissions' => 'subscription' ],         
        ]
    ],       
    [ 'active' => 'communities*', 'icon' => 'fa fa-users', 'name' => 'communities', 'title' => 'communities', 'routeId' => 'community', 'permissions' => 'communities' ],
    [ 'active' => 'web_setting*', 'icon' => 'fa fa-wrench', 'name' => 'web_setting', 'title' => 'web_setting', 'routeId' => 'web_setting', 'permissions' => 'web_setting' ],
    [ 'active' => 'seo*', 'icon' => 'fa fa-key', 'name' => 'seo', 'title' => 'seo', 'routeId' => 'seo', 'permissions' => 'seo' ],
    [ 'active' => 'users_setting/*', 'icon' => 'si si-users', 'title' => 'users_setting', 'child' =>
        [
            [ 'active' => 'users_setting/roles*', 'name' => 'roles', 'title' => 'roles', 'routeId' => 'role', 'permissions' => 'roles' ],
            [ 'active' => 'users_setting/users*', 'name' => 'users', 'title' => 'users', 'routeId' => 'user', 'permissions' => 'users' ],
        ]
    ],            
];
