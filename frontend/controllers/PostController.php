<?php

namespace frontend\controllers;

use frontend\models\MyLogin;
use frontend\models\Post;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionList()
    {
        $query = Post::find();
        $total_count = $query->count();

        $pagination = new Pagination([
             'totalCount' => $total_count,
             'pageSize' => 2,
        ]);
        $posts = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('list',
            [
                'model' => $posts,
                'pagination' => $pagination,
            ]);
     }

//    public function actionAdd()
//    {
//        $myLogin = new MyLogin();
//        return $this->render('add', ['model' => $myLogin]);
//     }
}