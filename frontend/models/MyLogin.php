<?php

namespace frontend\models;

use yii\base\Model;

class MyLogin extends Model
{
   public $email;
   public $first_name;
   public $age;
   public $gender;
   const SONLAR = [1,2,3];

    public function rules()
    {
        return [
            [['email', 'first_name', 'age'], 'required'],
            ['age', 'integer'],
            ['gender', 'string'],
            ['first_name','string', 'length' => 5 , 'min' =>2]
        ];
   }

    public function validateMalumot($attribute, $params, $validator)
    {
        if (!in_array($this->$attribute, self::SONLAR)){
            $this->addError($attribute, 'boshqa qiymat kiriting');
        }
   }

    public function attributeLabels()
    {
        return [
          'age' => 'Yoshi',
          'first_name' => 'Ismi',
          'email' => 'Email'
        ];
   }
}