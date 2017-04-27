<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

<<<<<<< HEAD
    'default' => env('FILESYSTEM_DRIVER', 'local'),
=======
    'default' => 'local',
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

<<<<<<< HEAD
    'cloud' => env('FILESYSTEM_CLOUD', 's3'),
=======
    'cloud' => 's3',
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
<<<<<<< HEAD
            'url' => env('APP_URL').'/storage',
=======
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
<<<<<<< HEAD
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
=======
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
        ],

    ],

];
