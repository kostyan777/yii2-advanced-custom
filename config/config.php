<?php
return [
    'vendorPath'      => dirname(__DIR__) . '/vendor',
    'language'        => 'ru-RU',
    'charset'         => 'UTF-8',
    'name'            => 'Uptown',
    'timeZone'        => 'Europe/Moscow',
    'components'      => [
        'elephantio' => [
            'class' => 'common\libraries\ElephantIo',
            'host'  => 'http://localhost:3000',
        ],
        'mailer'     => [
            'class'            => 'yii\swiftmailer\Mailer',
            'viewPath'         => '@common/mail',
            'useFileTransport' => false,
            'transport'        => [
                'class'      => 'Swift_SmtpTransport',
                'host'       => 'smtp.gmail.com',
                'username'   => 'uptownnoreplay@gmail.com',
                'password'   => 'uptownnoreplay1',
                'port'       => '587',
                'encryption' => 'tls',
            ],
        ],
        'formatter'    => [
            'nullDisplay' => ''
        ],
//        'cache' => [
//            'class' => 'yii\caching\MemCache',
//            'useMemcached'=>true,
//            'servers' => [
//                [
//                    'host' => 'localhost',
//                    'port' => 11211,
//                ],
//            ],
//        ],
        'i18n'       => [
            'translations' => [
                'app'   => [
                    'class'    => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'yii'   => [
                    'class'    => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'eauth' => [
                    'class'    => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@eauth/messages',
                ],
            ],
        ],
        'db'         => require('db.php'),
    ],
];
