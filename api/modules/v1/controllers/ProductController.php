<?php

namespace api\modules\v1\controllers;

use api\controllers\MyController;
use yii\data\ActiveDataProvider;

class ProductController extends MyController
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(array(
            'query' => \api\models\Product::find()
        ));

        return $dataProvider;
  }

}