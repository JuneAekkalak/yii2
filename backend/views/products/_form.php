<?php

use app\models\Colors;
use app\models\Sizes;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'image_url') ?>

    <?php $size_items = 
    ArrayHelper::map(Sizes::find()->where(['status'=>'1'])->all(), 'size_number', 'size_number'); ?>
    <?= $form->field($model, 'sizes[]')->dropDownList(
        $size_items,
        [
            'prompt'=>'Select Sizes',
            'multiple'=>'multiple'            
        ]             
    ) ?>

    <?php $color_items = 
    ArrayHelper::map(Colors::find()->where(['status'=>'1'])->all(), 'color_code', 'color_name'); ?>
    <?= $form->field($model, 'colors[]')->dropDownList(
        $color_items,
        [
            'prompt'=>'Select Colors',
            'multiple'=>'multiple'            
        ]             
    ) ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'status')->dropDownList(
        ["1"=>"Active", "2"=>"Inactive"],           // Flat array ('id'=>'label')
        ['prompt'=>'Select Status']    // options
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
