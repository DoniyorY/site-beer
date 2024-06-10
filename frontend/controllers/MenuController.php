<?php

namespace frontend\controllers;

use yii\web\Controller;

class MenuController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}