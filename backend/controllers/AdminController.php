<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    public function init()
    {
        parent::init();
        if (\Yii::$app->user->isGuest) {
            return $this->redirect('/admin/auth/login');
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
