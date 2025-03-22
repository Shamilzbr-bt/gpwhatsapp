<?php
return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    
    'Security' => [
        'salt' => env('SECURITY_SALT', '__SALT__'),
    ],
    
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'gupshup_bitrix',
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
        ],
    ],
    
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
