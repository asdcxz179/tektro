<?php

return [
    [ 'active' => 'users_setting/*', 'icon' => 'si si-call-in', 'title' => 'users_setting', 'child' =>
        [
            [ 'active' => 'users_setting/roles*', 'name' => 'roles', 'title' => 'roles', 'routeId' => 'role', 'permissions' => 'roles' ],
            [ 'active' => 'users_setting/users*', 'name' => 'users', 'title' => 'users', 'routeId' => 'user', 'permissions' => 'users' ],
        ]
    ],  

    [ 'active' => 'info/*', 'icon' => 'si si-users', 'title' => 'info', 'child' =>
        [
            [ 'active' => 'info/news*', 'name' => 'news', 'title' => 'news', 'routeId' => 'news', 'permissions' => 'news' ],
            [ 'active' => 'info/talents*', 'name' => 'talents', 'title' => 'talents', 'routeId' => 'talents', 'permissions' => 'talents' ],
        ]
    ],  
    [ 'active' => 'abouts*', 'icon' => 'si si-book-open', 'name' => 'abouts', 'title' => 'abouts', 'routeId' => 'abouts', 'permissions' => 'abouts' ],

    [ 'active' => 'product_label/*', 'icon' => 'si si-users', 'title' => 'product_label', 'child' =>
        [
            [ 'active' => 'product_label/product_brands*',          'name' => 'product_brands'          , 'title' => 'product_brands'       , 'routeId' => 'product_brand'      , 'permissions' => 'product_brands' ],
            [ 'active' => 'product_label/product_categories*',      'name' => 'product_categories'      , 'title' => 'product_categories'   , 'routeId' => 'product_category'   , 'permissions' => 'product_categories' ],
            [ 'active' => 'product_label/product_tags*',            'name' => 'product_tags'            , 'title' => 'product_tags'         , 'routeId' => 'product_tag'        , 'permissions' => 'product_tags' ],
            [ 'active' => 'product_label/product_keywords*',        'name' => 'product_keywords'        , 'title' => 'product_keywords'     , 'routeId' => 'product_keyword'    , 'permissions' => 'product_keywords' ],
            [ 'active' => 'product_label/products*',                'name' => 'products'                , 'title' => 'products'             , 'routeId' => 'product'            , 'permissions' => 'products' ],
        ]
    ],       
    [ 'active' => 'users_setting/*', 'icon' => 'si si-users', 'title' => 'users_setting', 'child' =>
        [
            [ 'active' => 'users_setting/roles*', 'name' => 'roles', 'title' => 'roles', 'routeId' => 'role', 'permissions' => 'roles' ],
            [ 'active' => 'users_setting/users*', 'name' => 'users', 'title' => 'users', 'routeId' => 'user', 'permissions' => 'users' ],
        ]
    ],                 
    [ 'active' => 'users_setting/*', 'icon' => 'si si-users', 'title' => 'users_setting', 'child' =>
        [
            [ 'active' => 'users_setting/roles*', 'name' => 'roles', 'title' => 'roles', 'routeId' => 'role', 'permissions' => 'roles' ],
            [ 'active' => 'users_setting/users*', 'name' => 'users', 'title' => 'users', 'routeId' => 'user', 'permissions' => 'users' ],
        ]
    ],            
];
