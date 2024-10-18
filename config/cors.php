<?php



return [

    'paths' => ['api/*'], // Atur path yang diizinkan (misalnya: API route)

    'allowed_methods' => ['*'], // Semua metode HTTP diizinkan (GET, POST, PUT, DELETE, dll.)

    'allowed_origins' => ['*'], // Izinkan semua origin (atau ganti dengan domain tertentu seperti ['http://localhost:61037'])

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Izinkan semua header (atau sesuaikan dengan header spesifik yang dibutuhkan)

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
