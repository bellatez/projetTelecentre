<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            ''
        ],
        'hospital' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'council' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',

        ],
        'school' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'youth_center' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'women_center' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],


        
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
