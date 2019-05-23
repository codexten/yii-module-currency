<?php

use codexten\yii\web\widgets\Page;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model codexten\yii\modules\currency\models\CurrencyExchangeRate */

$this->title = $model->id;
?>

<?php $page = Page::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('content') ?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'source_currency_id',
        'target_currency_id',
        'ratio',
    ],
]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
