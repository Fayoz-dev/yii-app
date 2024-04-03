<?php

namespace frontend\controllers;

use frontend\models\MyLogin;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionList()
    {
        $myLogin = new MyLogin();
        $myLogin->age = 22;
        $myLogin->email = "hunter@hunter.uz";
        $myLogin->first_name = "hunte";

        echo "<pre>";
        if ($myLogin->validate()){
            echo "hammasi ok";
        }
        else{
           print_r($myLogin->getErrors());
        }
        $myLogin->myFunction();
//        print_r($myLogin);
        die();

       return $this->render('list');
     }

    public function actionAdd()
    {
        return $this->render('add');
     }
}