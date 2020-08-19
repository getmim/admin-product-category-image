<?php

return [
    '__name' => 'admin-product-category-image',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/admin-product-category-image.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-product-category-image' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-category-image' => NULL
            ],
            [
                'admin-product-category' => NULL
            ],
            [
                'lib-upload' => NULL 
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.product-category.edit' => [
                'image' => [
                    'label' => 'Image',
                    'type' => 'image',
                    'form' => 'std-image',
                    'rules' => [],
                    'xpos' => 'left-bottom-left'
                ]
            ]
        ]
    ]
];