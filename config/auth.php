<?php

return [

    
// Authentication Defaults


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

//  Authentication Guards


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],



    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => 10800,

];
