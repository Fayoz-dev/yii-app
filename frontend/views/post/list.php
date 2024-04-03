<h1>Bu POst List sahifasi ?</h1>
<?php

/**
 * @var \frontend\models\MyLogin
 */


use yii\helpers\Html;


echo Html::beginForm();

echo Html::label("First name");
echo Html::input('text', 'first_name', $model->first_name);

echo "<br>";

echo Html::label("Email");
echo Html::input('text', 'email', $model->email);

echo "<br>";

echo Html::label("Age");
echo Html::input('text', 'age', $model->age);

echo "<br>";

echo Html::submitButton('Submit', ['class'=> 'submit']);
echo Html::endForm();
