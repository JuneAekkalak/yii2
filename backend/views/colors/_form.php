<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Colors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colors-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'color_name') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'color_code')->input('color') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList(
                ["1"=>"Active", "2"=>"Inactive"],           // Flat array ('id'=>'label')
                ['prompt'=>'Select Status']    // options
            ) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
