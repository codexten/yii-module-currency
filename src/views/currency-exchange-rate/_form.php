<?php

use codexten\yii\modules\currency\helpers\CurrencyHelper;
use codexten\yii\modules\currency\models\CurrencyExchangeRate;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model CurrencyExchangeRate */
?>

<div class="row">
    <div class="col-md-6">

        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'source_currency_id')
            ->dropDownList(CurrencyHelper::getNamesById(), [
                'prompt' => '',
                'disabled' => !$model->isNewRecord,
            ])
        ?>

        <?= $form->field($model, 'target_currency_id')
            ->dropDownList(CurrencyHelper::getNamesById(), [
                'prompt' => '',
                'disabled' => !$model->isNewRecord,
            ])
        ?>

        <?= $form->field($model, 'ratio') ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('codexten:module:currency', 'Create') : Yii::t('codexten:module:currency',
                    'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>