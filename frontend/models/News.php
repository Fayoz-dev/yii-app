<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * @property $name string
 */

class News extends ActiveRecord
{
    public static function tableName()
    {
       return "news";
    }

    public function rules()
    {
      return  [
          [['name', 'family_name', 'middle_name'], 'string'],
          [['name', 'family_name', 'middle_name'], 'required'],
        ];
    }

    public function beforeSave($insert)
    {
        $this->name = "Lalala";
        return parent::beforeSave($insert);
    }
}