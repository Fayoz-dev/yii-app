<?php

namespace api\models;
class User extends \common\models\User
{
    public function fields()
    {
        return [
             'id',
            'username' ,
            'email',
            'name' => function($model) {
            return $model->username . ' ' . $model->email ;
            }
        ];
    }
}