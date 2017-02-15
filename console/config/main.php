<?php
$params       = array_merge(
    require(__DIR__ . '/../../config/parameters.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
$commonConfig = require(__DIR__ . '/../../config/config.php');

return [
    'id'                  => 'app-console',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'console\controllers',
    'components'          => [
        'log' => [
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'  => $commonConfig['components']['db'],
    ],
    'params'              => $params,
];
