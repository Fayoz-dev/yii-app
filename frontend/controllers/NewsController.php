<?php

namespace frontend\controllers;


use frontend\models\News;
use yii\web\Controller;
use Yii;

class NewsController extends Controller{
    public function actionIndex()
    {
        $news = new News();
        if (\Yii::$app->request->isPost){
            $news->load(\Yii::$app->request->post());
            $news->save();
        }
        return $this->render('index', ['model' => $news]);
    }

    public function actionOne()
    {
        $model = News::find()->one();

        return $this->render('one', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = News::findOne($id);
        if (Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if ($model->save()){
                return $this->redirect('one');
            }
        }
        return $this->render('index', ['model' => $model]);
    }
}