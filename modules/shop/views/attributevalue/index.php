<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\shop\models\search\AttributeValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attribute Values';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-value-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Attribute Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_id',
            'attribute_id',
            'value_text:ntext',
            'value_float',
            // 'value_int',
            // 'value_date',
            // 'value_bool',
            // 'value_enum_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
