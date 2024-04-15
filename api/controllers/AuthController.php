<?php

namespace api\controllers;

use api\models\LoginForm;
use yii\rest\Controller;

class AuthController extends Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post(), '') && ($token = $model->login())){
        return ['access_token' => $token];
        }

        return null;

   }
}