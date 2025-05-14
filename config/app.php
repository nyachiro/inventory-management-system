<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

//   Application Name


    'name' => env('APP_NAME', 'Laravel'),

    
    //  Application Environment


    'env' => env('APP_ENV', 'production'),

// Application Debug Mode

    'debug' => (bool) env('APP_DEBUG', false),

// Application URL


    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

//  Application Timezone


    'timezone' => 'Nairobi',

// Application Locale Configuration


    'locale' => 'en',

// Application Fallback Locale


    'fallback_locale' => 'en',

// Faker Locale


    'faker_locale' => 'en_US',

// Encryption Key


    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

//  Maintenance Mode Driver


    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

// Autoloaded Service Providers


    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */
        Barryvdh\DomPDF\ServiceProvider::class,
        Yajra\DataTables\DataTablesServiceProvider::class,
        Spatie\Permission\PermissionServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Maatwebsite\Excel\ExcelServiceProvider::class,
    ])->toArray(),

// Class Aliases


    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
        'PDF' => Barryvdh\DomPDF\Facade::class,
        'Excel' => Maatwebsite\Excel\Facades\Excel::class,
    ])->toArray(),

];
