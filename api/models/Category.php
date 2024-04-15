<?php

namespace api\models;

class Category extends \common\models\Category
{
   function rules()
   {
       return [
           ['name', 'string'],
           ['name', 'required']
       ];
   }
}