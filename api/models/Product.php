<?php

namespace api\models;

class Product extends \common\models\Product
{
    public function fields()
    {
        return [
          'id' ,'name' , 'description' , 'category_id', 'category'
        ];
    }
    public function extraFields()
    {
        return ['category'];
   }
}