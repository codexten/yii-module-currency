<?php

namespace codexten\yii\modules\currency\helpers;

class CurrencyHelper
{
    public static function getNamesById()
    {
        $items = [];
        foreach (\codexten\yii\modules\currency\models\Currency::find()->all() as $model) {
            $items[$model->id] = $model->name;
        }

        return $items;
    }
}