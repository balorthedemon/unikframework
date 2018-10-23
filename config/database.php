<?php
define('APP_PATH',__DIR__);
return [
    'doctrine' => [
        // if true, metadata caching is forcefully disabled
        'dev_mode' => true,

        // path where the compiled metadata info will be cached
        // make sure the path exists and it is writable
        'cache_dir' => APP_PATH.'/../storage/framework/cache/data',

        // you should add any other path containing annotated entity classes
        'metadata_dirs' => [APP_PATH.'/../app/Entity'],
        'default' => getenv('DB_CONNECTION', 'mysql'),
        'connection' => [
            'driver' => 'pdo_mysql',
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT'),
            'dbname' => getenv('DB_DATABASE'),
            'user' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'charset' => 'utf8'
        ]
    ]
];