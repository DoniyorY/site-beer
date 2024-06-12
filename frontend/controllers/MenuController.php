<?php

namespace frontend\controllers;

use common\models\MenuCategory;
use yii\web\Controller;

class MenuController extends Controller
{
    public function actionIndex()
    {
        $category=MenuCategory::find()->all();
        return $this->render('index',[
            'category'=>$category
        ]);
    }
}