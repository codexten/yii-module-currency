<?php

namespace codexten\yii\modules\currency\models\query;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\currency\models\Currency]].
 *
 * @see \codexten\yii\modules\currency\models\Currency
 */
class CurrencyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\currency\models\Currency[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\currency\models\Currency|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
