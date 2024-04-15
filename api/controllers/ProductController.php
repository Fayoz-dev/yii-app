<?php

namespace api\controllers;

use yii\data\ActiveDataProvider;
use yii\web\Response;

class ProductController extends MyController
{
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['view', 'index'],  // in a controller
                // if in a module, use the following IDs for user actions
                // 'only' => ['user/view', 'user/index']
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
                'languages' => [
                    'en',
                    'de',
                ],
            ],
            'verbs' => [
                'class' => \yii\filters\VerbFilter::class,
                'actions' => [
                    'index'  => ['GET'],
                    'view'   => ['GET'],
                    'create' => ['GET', 'POST'],
                    'update' => ['GET', 'PUT', 'POST'],
                    'delete' => ['POST', 'DELETE'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(array(
           'query' => \api\models\Product::find()
        ));

        return $dataProvider;
   }

    public function actionCreate()
    {
        $model = new \api\models\Product();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()){
           return $model;
        }
   }
}