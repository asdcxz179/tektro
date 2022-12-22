<?php

return [
    [ 'active' => 'users_setting/*', 'icon' => 'si si-users', 'title' => 'users_setting', 'child' =>
        [
            [ 'active' => 'users_setting/roles*', 'name' => 'roles', 'title' => 'roles', 'routeId' => 'role', 'permissions' => 'roles' ],
            [ 'active' => 'users_setting/users*', 'name' => 'users', 'title' => 'users', 'routeId' => 'user', 'permissions' => 'users' ],
        ]
    ],
    [ 'active' => 'test/*', 'icon' => 'si si-users', 'title' => 'test', 'child' => 
        [
            [ 'active' => 'test/template', 'name' => 'template', 'title' => 'template', 'routeId' => 'template', 'permissions' => 'users' ],
        ] 
    ]              
];
