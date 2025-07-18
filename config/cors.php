
<?php
return [
    'paths' => ['api/*', 'login', 'logout'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'https://web-bps-frontend-ten.vercel.app',
        'http://localhost:5173'
    ],
    'allowed_origins_patterns' => ['https://web-bps-frontend-ten.vercel.app'],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
