<?php

namespace codexten\yii\modules\currency\models\query;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\currency\models\CurrencyExchangeRate]].
 *
 * @see \codexten\yii\modules\currency\models\CurrencyExchangeRate
 */
class CurrencyExchangeRateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\currency\models\CurrencyExchangeRate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\currency\models\CurrencyExchangeRate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
