<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\EnumgroupValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enumgroup-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enumgroup_id')->textInput() ?>

    <?= $form->field($model, 'enumvalue_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
