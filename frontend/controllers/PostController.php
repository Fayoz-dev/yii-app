<?php

namespace frontend\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionList()
    {
       return $this->render('list');
     }

    public function actionAdd()
    {
        return $this->render('add');
     }
}