<?php

use SMSkin\IdentityServiceClient\Enums\Scopes;
use SMSkin\IdentityServiceClient\Models\User;

return [
    'debug' => env('IDENTITY_SERVICE_CLIENT_DEBUG', false),
    'parser' => [
        'cookies' => [
            'decrypt' => env('IDENTITY_SERVICE_CLIENT_PARSER_COOKIES_DECRYPT', false)
        ]
    ],
    'classes' => [
        'models' => [
            'user' => User::class
        ]
    ],
    'scopes' => [
        'initial' => Scopes::SYSTEM_CHANGE_SCOPES,
        'uses' => [
            Scopes::SYSTEM_CHANGE_SCOPES
        ]
    ],
    'guards' => [
        'jwt' => [
            'name' => 'identity-service-client-jwt-guard',
            'driver' => [
                'name' => 'identity-service-client-jwt'
            ]
        ],
        'session' => [
            'name' => 'identity-service-client-session-guard',
            'driver' => [
                'name' => 'identity-service-client-session'
            ]
        ]
    ],
    'host' => [
        'host' => env('IDENTITY_SERVICE_CLIENT_HOST'),
        'prefix' => 'identity-service',
        'api_token' => env('IDENTITY_SERVICE_CLIENT_HOST_API_TOKEN')
    ]
];
