<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'r,u,d',
            'products' => 'r,u,d',
            'announcement' => 'c,r,u,d',
            'books' => 'r,u,d',
            'profile' => 'r,u'
        ],
        
        'hospital' => [
            'announcement' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'council' => [
            'announcement' => 'c,r,u,d',
            'profile' => 'r,u',

        ],
        'school' => [
            'announcement' => 'c,r,u,d',
            'books' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'youth_center' => [
            'announcement' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'women_center' => [
            'announcement' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'telecentre' => [
            'announcement' => 'c,r,u,d',
            'profile' => 'r,u',
        ],

        'users' => [
            'profile' => 'c',
            'products' => 'c,r,u,d',
            'announcement' => 'r',
            'books' => 'r',
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
