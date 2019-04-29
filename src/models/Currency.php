<?php

namespace codexten\yii\modules\currency\models;

use Symfony\Component\Intl\Currencies;
use Yii;

/**
 * This is the model class for table "{{%currency}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property string $code
 * @property int $created_at
 * @property int $updated_at
 */
class Currency extends \codexten\yii\db\ActiveRecord
{
    //const STATUS_ACTIVE = 1;
    //const STATUS_INACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%currency}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['code'], 'required'],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('codexten:module:currency', 'ID'),
            'code' => Yii::t('codexten:module:currency', 'Code'),
            'created_at' => Yii::t('codexten:module:currency', 'Created At'),
            'updated_at' => Yii::t('codexten:module:currency', 'Updated At'),
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Currencies::getName($this->code);
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
     * @return \codexten\yii\modules\currency\models\query\CurrencyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \codexten\yii\modules\currency\models\query\CurrencyQuery(get_called_class());
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
