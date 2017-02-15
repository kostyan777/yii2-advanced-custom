<?php
Yii::setAlias('@common', dirname(__DIR__) . '/common');
Yii::setAlias('@frontend', dirname(__DIR__) . '/frontend');
Yii::setAlias('@backend', dirname(__DIR__) . '/backend');
Yii::setAlias('@console', dirname(__DIR__) . '/console');
Yii::setAlias('logs', dirname(__DIR__) . '/common/logs');

Yii::setAlias('front-web', 'http://' . $_SERVER["SERVER_NAME"]);
Yii::setAlias('back-web', 'http://' . $_SERVER["SERVER_NAME"] . '/admin/');
Yii::setAlias('upload_repo', 'http://' . $_SERVER["SERVER_NAME"] . '/admin/');

