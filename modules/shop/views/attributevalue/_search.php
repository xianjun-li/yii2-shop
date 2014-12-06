<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\search\AttributeValueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-value-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'attribute_id') ?>

    <?= $form->field($model, 'value_text') ?>

    <?= $form->field($model, 'value_float') ?>

    <?php // echo $form->field($model, 'value_int') ?>

    <?php // echo $form->field($model, 'value_date') ?>

    <?php // echo $form->field($model, 'value_bool') ?>

    <?php // echo $form->field($model, 'value_enum_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
