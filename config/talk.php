<?php
return [
    'user' => [
        'model' => 'App\User',
        'foreignKey' => null,
        'ownerKey' => null,
    ],


    'broadcast' => [
        'enable' => true,
        'app_name' => 'talk-example',
        'pusher' => [
            'app_id'        => env('PUSHER_APP_ID', ''),
            'app_key'       => env('PUSHER_APP_KEY', ''),
            'app_secret'    => env('PUSHER_APP_SECRET', ''),
            'options' => [
                'cluster' => 'ap2',
                'encrypted' => true
            ]
        ],
    'oembed' => [
        'enabled' => true,
        'url' => '',
        'key' => ''
    ]

    ]
];
