<?php

use codexten\yii\web\widgets\IndexPage;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel */

$this->title = Yii::t('codexten:module:currency', 'Currencies');
?>

<?php $page = IndexPage::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('main-actions') ?>

<?= $page->renderButton('create', 'create', ['class' => ['btn-success']]) ?>

<?php $page->endContent() ?>

<?php $page->beginContent('table') ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'attribute' => 'code',
            'label' => Yii::t('codexten:module:currency', 'Code'),
        ],
        'name',
        [
            'class' => 'yii\grid\ActionColumn',
            'options' => ['style' => 'width: 5%'],
            'template' => '{update}',
        ],
    ],
]); ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
