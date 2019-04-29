<?php

namespace codexten\yii\modules\currency\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%currency}}`.
 */
class M190429111156Create_currency_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%currency}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(50),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11)
,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%currency}}');
    }
}
