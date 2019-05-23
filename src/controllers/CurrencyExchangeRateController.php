<?php

namespace codexten\yii\modules\currency\controllers;

use Yii;
use codexten\yii\modules\currency\models\CurrencyExchangeRate;
use codexten\yii\web\CrudController;

/**
 * CurrencyExchangeRateController implements the CRUD actions for CurrencyExchangeRate model.
 */
class CurrencyExchangeRateController extends CrudController
{
    public $modelClass = CurrencyExchangeRate::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();

        return $actions;
    }

}
