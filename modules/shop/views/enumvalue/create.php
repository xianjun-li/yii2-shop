<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\Enumvalue */

$this->title = 'Create Enumvalue';
$this->params['breadcrumbs'][] = ['label' => 'Enumvalues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enumvalue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
