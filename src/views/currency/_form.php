<?php

use codexten\yii\modules\currency\models\Currency;
use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use Symfony\Component\Intl\Currencies;

/* @var $this yii\web\View */
/* @var $model Currency */
?>

<div class="row">
    <div class="col-md-6">

        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'code')
            ->widget(Select2::class, [
                'data' => Currencies::getNames(),
                'language' => 'de',
                'options' => ['placeholder' => Yii::t('codexten:module:locale', 'Select Currency')],
                'disabled' => !$model->isNewRecord,
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('codexten:module:currency', 'Create') : Yii::t('codexten:module:currency',
                    'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>