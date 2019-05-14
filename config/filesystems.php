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

    'default' => env('FILESYSTEM_DRIVER', 'local'),

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

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

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
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        
        'oss' => [
            'driver' => 'oss',
            'access_key' => env('OSS_ACCESS_KEY'),
            'secret_key' => env('OSS_SECRET_KEY'),
            'endpoint'   => env('OSS_ENDPOINT'), // 使用 ssl 这里设置如: https://oss-cn-beijing.aliyuncs.com
            'bucket'     => env('OSS_BUCKET'),
            'isCName'    => env('OSS_IS_CNAME', false), // 如果 isCname 为 false，endpoint 应配置 oss 提供的域名如：`oss-cn-beijing.aliyuncs.com`，否则为自定义域名，，cname 或 cdn 请自行到阿里 oss 后台配置并绑定 bucket
        ],
        
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

        'qiniu' => [
            'driver'  => 'qiniu',
            'domains' => [
                'default'   => 'o95vn3gtk.bkt.clouddn.com', //你的七牛域名
                'https'     => '',         //你的HTTPS域名
                'custom'    => '',                //Useless 没啥用，请直接使用上面的 default 项
            ],
            'access_key'=> '1JdLd1hJq8j99yKGwgPgE_p0s8PAQ3UNZIKtLXaV',  //AccessKey
            'secret_key'=> 'e-mpwUbtfF8cv0aCUOvqimlIdexaavYtV_yjyhQG',  //SecretKey
            'bucket'    => 'muzilong',  //Bucket名字
            'notify_url'=> '',  //持久化处理回调地址
            'access'    => 'public'  //空间访问控制 public 或 private
        ],

    ],

];
