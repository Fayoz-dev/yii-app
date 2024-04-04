<?php

/**
 * @var \frontend\models\News
 */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$form = ActiveForm::begin([
    'id' => 'active-form',
    'options' => [
        'enctype' => 'multipart/form-data'
    ],
]);

echo $form->field($model , 'name')->hint('ey bola yoz bu yerga');
echo $form->field($model , 'family_name');
echo $form->field($model , 'middle_name');
//echo $form->field($model , 'age');
//echo $form->field($model, 'gender')->radioList(['erkak' => 'Erkak' , 'ayol' => 'Ayol'])->label('Jinsi');
//echo $form->field($model, 'gender')->dropDownList(['erkak' => 'Erkak' , 'ayol' => 'Ayol'], ['prompt'=> 'Tanlang....']);
?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Yubor', ['class' => 'btn btn-primary'])?>
    </div>
</div>

<?php ActiveForm::end();?>
