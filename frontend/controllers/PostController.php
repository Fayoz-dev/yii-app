<?php

namespace frontend\controllers;

use frontend\models\MyLogin;
use frontend\models\Post;
use Yii;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionList()
    {
        $model = Post::find()->leftJoin('category', 'category.id=post.category_id')->all();
//        echo "<pre>";
//
//        print_r($model); die();

        return $this->render('list', ['model' => $model]);
     }

    public function actionAdd()
    {
        $myLogin = new MyLogin();
        return $this->render('add', ['model' => $myLogin]);
     }
}