<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\AttributeValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'attribute_id')->textInput() ?>

    <?= $form->field($model, 'value_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'value_float')->textInput() ?>

    <?= $form->field($model, 'value_int')->textInput() ?>

    <?= $form->field($model, 'value_date')->textInput() ?>

    <?= $form->field($model, 'value_bool')->textInput() ?>

    <?= $form->field($model, 'value_enum_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
