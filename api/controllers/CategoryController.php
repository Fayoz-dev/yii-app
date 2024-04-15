<?php

namespace api\controllers;

use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
  public $modelClass = "common\models\Category";

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
  }

    public function actionIndex()
    {
        return "salom";
  }
}