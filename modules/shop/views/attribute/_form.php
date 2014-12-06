<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\shop\models\Type;
use app\modules\shop\models\Attribute;
use app\modules\shop\models\Enumgroup;


/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\Attribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->all(),'id','name'),['prompt'=>'Выберите тип']) ?> ?>

    <?= $form->field($model, 'datatype')->dropDownList(Attribute::getDataType(),['prompt'=>'Выберите тип']) ?>

    <?= $form->field($model, 'enum_group_id')->dropDownList(ArrayHelper::map(Enumgroup::find()->all(),'id','name'),['prompt'=>'Выберите выпадабщий список']) ?> ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
