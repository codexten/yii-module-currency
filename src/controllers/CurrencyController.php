<?php

namespace codexten\yii\modules\currency\controllers;

use Yii;
use codexten\yii\modules\currency\models\Currency;
use codexten\yii\web\CrudController;
use yii\helpers\ArrayHelper;

/**
 * CurrencyController implements the CRUD actions for Currency model.
 */
class CurrencyController extends CrudController
{
    public $modelClass = Currency::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();
        ArrayHelper::remove($actions, 'delete');

        return $actions;
    }

}
