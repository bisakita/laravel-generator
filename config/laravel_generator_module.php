<?php

return [
    'name' => 'Generator',

    /*
    |--------------------------------------------------------------------------
    | Override Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => base_path('Modules/{Module}/Database/Migrations/'),

        'model'             => base_path('Modules/{Module}/Entities/'),

        'datatables'        => base_path('Modules/{Module}/DataTables/'),

        'repository'        => base_path('Modules/{Module}/Database/Repositories/'),

        'routes'            => base_path('Modules/{Module}/Routes/web.php'),

        'api_routes'        => base_path('Modules/{Module}/Routes/api.php'),

        'request'           => base_path('Modules/{Module}/Http/Requests/'),

        'api_request'       => base_path('Modules/{Module}/Http/Requests/API/'),

        'controller'        => base_path('Modules/{Module}/Http/Controllers/'),

        'api_controller'    => base_path('Modules/{Module}/Http/Controllers/API/'),

        'test_trait'        => base_path('Modules/{Module}/Tests/traits/'),

        'repository_test'   => base_path('Modules/{Module}/Tests/'),

        'api_test'          => base_path('Modules/{Module}/Tests/'),

        'views'             => base_path('Modules/{Module}/Resources/views/'),

        'schema_files'      => base_path('Modules/{Module}/Resources/model_schemas/'),

        'templates_dir'     => resource_path('templates/module-generator-templates/'),

        'seeder'            => base_path('Modules/{Module}/Database/Seeders/'),

        'modelJs'           => base_path('Modules/{Module}/Resources/assets/js/models/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Override Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'Modules\{Module}\Entities',

        'datatables'        => 'Modules\{Module}\DataTables',

        'repository'        => 'Modules\{Module}\Database\Repositories',

        'controller'        => 'Modules\{Module}\Http\Controllers',

        'api_controller'    => 'Modules\{Module}\Http\Controllers\API',

        'request'           => 'Modules\{Module}\Http\Requests',

        'api_request'       => 'Modules\{Module}\Http\Requests\API',
    ],

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Illuminate\Database\Eloquent\Model',

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates'         => 'core-templates',

    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    'add_on' => [

        'swagger'       => true,

        'tests'         => true,

        'datatables'    => false,

        'menu'          => [

            'enabled'       => false,

            'menu_file'     => 'layouts/menu.blade.php',
        ],
    ],
];
