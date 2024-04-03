<?php

namespace frontend\models;

use yii\base\Model;

class MyLogin extends Model
{
   public $email;
   public $first_name;
   public $age;

    public function rules()
    {
        return [
            [['email', 'first_name', 'age'], 'required'],
            ['age', 'integer'],
            ['first_name','string', 'length' => 5 , 'min' =>2]
        ];
   }

   public function myFunction(){
       echo $this->age;
   }
}