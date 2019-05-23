<?php

namespace codexten\yii\modules\currency\models;

use codexten\yii\db\ActiveRecord;
use codexten\yii\modules\currency\models\query\CurrencyExchangeRateQuery;
use Yii;
use yii\db\ActiveQuery;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%currency_exchange_rate}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property int $source_currency_id
 * @property int $target_currency_id
 * @property string $ratio
 * @property int $created_at
 * @property int $updated_at
 *
 * Defined properties:
 *
 * @property array $meta
 *
 * Defined relations:
 *
 * @property Currency $sourceCurrency
 * @property Currency $targetCurrency
 */
class CurrencyExchangeRate extends ActiveRecord
{
    //const STATUS_ACTIVE = 1;
    //const STATUS_INACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%currency_exchange_rate}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source_currency_id', 'target_currency_id', 'ratio'], 'required'],
            [['source_currency_id', 'target_currency_id', 'created_at', 'updated_at'], 'integer'],
            [['ratio'], 'number'],
            [
                ['source_currency_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Currency::class,
                'targetAttribute' => ['source_currency_id' => 'id'],
            ],
            [
                ['target_currency_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Currency::class,
                'targetAttribute' => ['target_currency_id' => 'id'],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('codexten:module:currency', 'ID'),
            'source_currency_id' => Yii::t('codexten:module:currency', 'Source Currency'),
            'target_currency_id' => Yii::t('codexten:module:currency', 'Target Currency'),
            'ratio' => Yii::t('codexten:module:currency', 'ratio'),
            'created_at' => Yii::t('codexten:module:currency', 'Created At'),
            'updated_at' => Yii::t('codexten:module:currency', 'Updated At'),
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getSourceCurrency()
    {
        return $this->hasOne(Currency::class, ['id' => 'source_currency_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getTargetCurrency()
    {
        return $this->hasOne(Currency::class, ['id' => 'target_currency_id']);
    }


    /**
     *{@inheritdoc}
     */
    public function canUpdate()
    {
        //if (!Yii::$app->user->can('partner.update')) {
        //    return false;
        //}

        return parent::canUpdate();
    }

    /**
     *{@inheritdoc}
     */
    public function canView()
    {
        //if (!Yii::$app->user->can('partner.view')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     *{@inheritdoc}
     */
    public function canDelete()
    {
        //if (!Yii::$app->user->can('partner.delete')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $meta = parent::getMeta();

        //if ($this->canView()) {
        //    $meta['viewUrl'] = Url::to(['@partner/view', 'id' => $this->id]);
        //}
        //if ($this->canUpdate()) {
        //    $meta['updateUrl'] = Url::to(['@partner/update', 'id' => $this->id]);
        //}

        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        $fields = parent::fields();

        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function extraFields()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     * @return CurrencyExchangeRateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CurrencyExchangeRateQuery(get_called_class());
    }

    ///**
    //* statuses
    //* @return array
    //*/
    //public static function statuses()
    //{
    //    return [
    //        self::STATUS_ACTIVE => Yii::t('app', 'Active'),
    //        self::STATUS_INACTIVE => Yii::t('app', 'Inactive'),
    //    ];
    //}
}
