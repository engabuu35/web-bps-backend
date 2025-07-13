<?php
return [
'paths' => ['api/*', 'sanctum/csrf-cookie'],
'allowed_methods' => ['*'],
'allowed_origins' => ['http://localhost:5173', 'https://web-bps-frontend-chi.vercel.app', 'https://web-bps-frontend-d662yvr5r-arif-budimans-projects-43063944.vercel.app'],
'allowed_origins_patterns' => [],
'allowed_headers' => ['*'],
'exposed_headers' => [],
'max_age' => 0,
'supports_credentials' => true,
];