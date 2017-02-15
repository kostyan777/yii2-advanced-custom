<?php
$params = array_merge(
    require(__DIR__ . '/parameters.php')
);

return [
    'id'                  => 'app-backend',
    'basePath'            => '@backend',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap'           => ['log'],
    'defaultRoute'        => 'admin/index',
    'modules'             => [
    ],
    'components'          => [
        'request'      => [
            'baseUrl' => '/admin',
        ],
        'urlManager'   => [
            'showScriptName'  => false,
            'enablePrettyUrl' => true,
            'rules'           => [
                '<controller>/<action>' => '<controller>/<action>',
            ],
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                [
                    'class'   => 'yii\log\FileTarget',
                    'levels'  => ['info'],
                    'logFile' => '@logs/info.log',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'admin/error',
        ],
    ],
    'controllerMap'       => [
        'elfinder' => [
            'class'  => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root'   => [
                'baseUrl'  => '@web',
                'basePath' => '@webroot',
                'path'     => 'upload',
                'name'     => 'Global',
            ],
        ],
    ],
    'params'              => $params,
];
