<?php

use Illuminate\Support\Str;

return [



    'driver' => env('SESSION_DRIVER', 'database'),

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),



    'encrypt' => env('SESSION_ENCRYPT', false),


    'files' => storage_path('framework/sessions'),


    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table to
    | be used to store sessions. Of course, a sensible default is defined
    | for you; however, you're welcome to change this to another table.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),



    'store' => env('SESSION_STORE'),



    'lottery' => [2, 100],


    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug((string) env('APP_NAME', 'laravel')).'-session'
    ),



    'path' => env('SESSION_PATH', '/'),



    'domain' => env('SESSION_DOMAIN'),



    'secure' => env('SESSION_SECURE_COOKIE'),



    'http_only' => env('SESSION_HTTP_ONLY', true),


    'same_site' => env('SESSION_SAME_SITE', 'lax'),



    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
