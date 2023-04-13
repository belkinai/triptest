<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . env('DB_AIRPORTS_HOST') . ';dbname=' . env('DB_AIRPORTS_NAME'),
    'username' => env('DB_AIRPORTS_USER'),
    'password' => env('DB_AIRPORTS_PASS'),
    'charset' => 'utf8',
];
