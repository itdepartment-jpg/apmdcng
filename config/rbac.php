<?php

return [
    'permissions' => [
        'view users',
        'create users',
        'edit users',
        'delete users',
        'impersonate users',
        'manage roles',
        'edit_leadership',
        'manage_news',
        'manage-news',
        'manage projects',
        'manage project categories',
        'manage client projects',
        'manage notes',
    ],

    'roles' => [
        'super-admin' => [
            '*',
        ],
        'admin' => [
            'view users',
            'create users',
            'edit users',
            'delete users',
            'impersonate users',
            'manage roles',
            'edit_leadership',
            'manage_news',
            'manage-news',
            'manage projects',
            'manage project categories',
            'manage client projects',
            'manage notes',
        ],
        'editor' => [
            'edit_leadership',
            'manage_news',
            'manage-news',
            'manage projects',
            'manage project categories',
            'manage client projects',
            'manage notes',
        ],
    ],
];
