<?php

namespace frontend\controllers;

use frontend\models\MyLogin;
use Yii;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionList()
    {
        $myLogin = new MyLogin();
       if (\Yii::$app->request->isPost){
           $myLogin->load(\Yii::$app->request->post(), '');
           if ($myLogin->validate()){
            Yii::$app->session->setFlash("success", "validatsiyadan o'tdi");
           }
        else{
              Yii::$app->session->setFlash("danger", $myLogin->getErrorSummary(false)[0]);
            }
       }
       return $this->render('list', ['model' => $myLogin]);
     }

    public function actionAdd()
    {
        $myLogin = new MyLogin();
        return $this->render('add', ['model' => $myLogin]);
     }
}