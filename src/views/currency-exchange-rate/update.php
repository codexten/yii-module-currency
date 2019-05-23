<?php

use codexten\yii\web\widgets\UpdatePage;

/* @var $this yii\web\View */
/* @var $model codexten\yii\modules\currency\models\CurrencyExchangeRate */

$this->title = Yii::t('codexten:module:currency', 'Update Currency Exchange Rate: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
?>
<?php $page = UpdatePage::begin() ?>

<?php $page->beginContent('form') ?>

<?= $this->render('_form', ['model' => $model]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
