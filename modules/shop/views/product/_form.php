<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\shop\models\Type;
use app\modules\shop\models\Category;


/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sku')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 10]) ?>
    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(Type::find()->all(),'id','name'),['prompt'=>'Выберите тип']) ?>
    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(),'id','title'),['prompt'=>'Выберите категорию']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
