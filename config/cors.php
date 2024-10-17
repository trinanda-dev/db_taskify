<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Mengizinkan akses ke rute API dan Sanctum jika digunakan

    'allowed_methods' => ['*'],  // Mengizinkan semua metode HTTP

    'allowed_origins' => ['http://localhost:*'],  // Mengizinkan semua port di localhost

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],  // Mengizinkan semua header

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,  // Mendukung cookie/credensial
];