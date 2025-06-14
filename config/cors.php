<?php

return [
    'paths' => ['api/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [env('CORS_ALLOWED_ORIGINS', 'https://chattic-backend-api-v1.hf.space')],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => env('CORS_MAX_AGE', 0),
    'supports_credentials' => false,
];
