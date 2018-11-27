<?php

/*
 * This file is part of the overtrue/laravel-youzan.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    // Default app name
    'default_app' => 'default',

    // Base configuration
    'base' => [
        'debug' => true,
    ],

    // Applications
    'apps' => [
        'default' => [
            'client_id' => 'XXXXXXXXX',
            'client_secret' => 'XXXXXXXXX',
            'kdt_id' => '10000000', // store_id
        ],
        // 'another_app' => [
        //     'client_id' => 'XXXXXXXXX',
        //     'client_secret' => 'XXXXXXXXX',
        //     'redirect_uri' => 'http://YOURSITE.com/',
        // ],
        //
        // 'platform_app' => [
        //     'client_id' => '',
        //     'client_secret' => '',
        //     'type' => \Hanson\Youzan\Youzan::PLATFORM,
        // ],
    ],
];
