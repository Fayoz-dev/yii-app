<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var \frontend\models\MyLogin
 */

$form = ActiveForm::begin([
    'id' => 'active-form',
    'options' => [
        'enctype' => 'multipart/form-data'
    ],
]);

echo $form->field($model , 'first_name')->hint('ey bola yoz bu yerga');
echo $form->field($model , 'email')->input('email');
echo $form->field($model , 'age');
echo $form->field($model, 'gender')->radioList(['erkak' => 'Erkak' , 'ayol' => 'Ayol'])->label('Jinsi');
echo $form->field($model, 'gender')->dropDownList(['erkak' => 'Erkak' , 'ayol' => 'Ayol'], ['prompt'=> 'Tanlang....']);
?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
         <?= Html::submitButton('Yubor', ['class' => 'btn btn-primary'])?>
    </div>
</div>

<?php ActiveForm::end();?>
