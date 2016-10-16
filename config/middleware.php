<?php

return [
    'db_host' => env('MIDDLEWARE_DB_HOST', '127.0.0.1'),
    'name' => env('MIDDLEWARE_NAME', 'I1820'),
    'image_name' => env('MIDDLWARE_IMAGE_NAME', 'aolab/i1820'),
    'image_tag' => env('MIDDLEWARE_IMAGE_TAG', 'latest'),
    'db_port' => env('MIDDLEWARE_DB_PORT', '8086'),
    'db_username' => env('MIDDLEWARE_DB_USERNAME', 'root'),
    'db_password' => env('MIDDLEWARE_DB_PASSWORD', 'root'),
    'image' => env('MIDDLWARE_IMAGE_NAME', 'aolab/i1820') . ':' . env('MIDDLEWARE_IMAGE_TAG', 'latest'),
    'mqtt_host' => env('MQTT_HOST', '127.0.0.1'),
    'mqtt_port' => env('MQTT_PORT', '1883')
];
