<?php
$params       = array_merge(
    require(__DIR__ . '/parameters.php')
);
$commonConfig = require(__DIR__ . '/config.php');

return [
    'id'                  => 'app-frontend',
    'basePath'            => '@frontend',
    'bootstrap'           => ['log', 'gii'],
    'defaultRoute'        => '/main/index',
    'controllerNamespace' => 'frontend\controllers',
    'modules'             => [
        'gii'   => [
            'class'      => 'yii\gii\Module',
            'allowedIPs' => ['*', '192.168.10.10'] // adjust this to your needs
        ],
        'debug' => 'yii\debug\Module',
    ],
    'components'          => [
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],
            ],
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
        ],
//        'eauth'        => [
//            'class'       => 'nodge\eauth\EAuth',
//            'popup'       => true, // Use the popup window instead of redirecting.
//            'cache'       => false, // Cache component name or false to disable cache. Defaults to 'cache' on production environments.
//            'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
//            'httpClient'  => [
//                // uncomment this to use streams in safe_mode
//                //'useStreamsFallback' => true,
//            ],
//            'services'    => [ // You can change the providers and their classes.
//                'facebook'  => [
//                    // register your app here: https://developers.facebook.com/apps/
//                    'class'        => 'nodge\eauth\services\FacebookOAuth2Service',
//                    'clientId'     => '1115803978464955',
//                    'clientSecret' => '04e4f41645151a7a66c161c69e1f01c9',
//                ],
//                'vkontakte' => [
//                    // register your app here: https://vk.com/editapp?act=create&site=1
//                    'class'        => 'nodge\eauth\services\VKontakteOAuth2Service',
//                    'clientId'     => '5269605',
//                    'clientSecret' => '0WNysGpHp1lSanVb6Qhm',
//                ],
//            ],
//        ],
        'mailer'       => [
            'class'            => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
        'urlManager'   => [
            'showScriptName'  => false,
            'enablePrettyUrl' => true,
            'rules'           => require('routes.frontend.php'),
        ],
        'request'      => [
            'baseUrl' => '',
        ],

        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'main/error',
        ],
        'db'           => $commonConfig['components']['db'],
    ],
    'params'              => $params,
];
