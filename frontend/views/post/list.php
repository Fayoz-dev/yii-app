<?php

use yii\helpers\Html;

echo Html::tag('h1', Html::encode('hunter'), ['class'=> 'bu-username']);

echo Html::beginForm(['order/update', 'id' => 12], 'post', ['enctype'=>'multipart/form-data']);

echo Html::input('text', 'username', 'hunter', ["class" => "class-hunter"]);

echo Html::submitButton('Submit', ['class'=> 'submit']);

echo Html::endForm();

echo Html::checkbox('agree', true , ['label' => 'i agree']);