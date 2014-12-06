<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\shop\models\Enumgroup */

$this->title = 'Create Enumgroup';
$this->params['breadcrumbs'][] = ['label' => 'Enumgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enumgroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
