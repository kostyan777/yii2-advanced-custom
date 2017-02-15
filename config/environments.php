<?php
//if ($_SERVER["SERVER_NAME"] === 'server.prod' ) {
//    $debug = true;
//    $env   = 'dev';
//} else {
//    $debug = true;
//    $env   = 'dev';
//}

$debug = true;
$env   = 'dev';

defined('YII_DEBUG') or define('YII_DEBUG', $debug);
defined('YII_ENV') or define('YII_ENV', $env);