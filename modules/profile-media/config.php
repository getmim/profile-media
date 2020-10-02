<?php

return [
    '__name' => 'profile-media',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/profile-media.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/profile-media' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-upload' => NULL
            ],
            [
                'profile' => NULL
            ],
            [
                'profile-auth' => NULL 
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProfileMedia\\Library' => [
                'type' => 'file',
                'base' => 'modules/profile-media/library'
            ]
        ],
        'files' => []
    ],
    'libUpload' => [
        'authorizer' => [
            'profile' => 'ProfileMedia\\Library\\Auth'
        ]
    ]
];