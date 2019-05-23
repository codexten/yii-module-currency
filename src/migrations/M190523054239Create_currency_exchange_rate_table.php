<?php

namespace codexten\yii\modules\currency\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%currency_exchange_rate}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%currency}}`
 * - `{{%currency}}`
 */
class M190523054239Create_currency_exchange_rate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%currency_exchange_rate}}', [
            'id' => $this->primaryKey(),
            'source_currency_id' => $this->integer()->notNull(),
            'target_currency_id' => $this->integer()->notNull(),
            'ratio' => $this->decimal(10,5),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11)
,
        ]);

        // creates index for column `source_currency_id`
        $this->createIndex(
            '{{%idx-currency_exchange_rate-source_currency_id}}',
            '{{%currency_exchange_rate}}',
            'source_currency_id'
        );

        // add foreign key for table `{{%currency}}`
        $this->addForeignKey(
            '{{%fk-currency_exchange_rate-source_currency_id}}',
            '{{%currency_exchange_rate}}',
            'source_currency_id',
            '{{%currency}}',
            'id',
            'CASCADE'
        );

        // creates index for column `target_currency_id`
        $this->createIndex(
            '{{%idx-currency_exchange_rate-target_currency_id}}',
            '{{%currency_exchange_rate}}',
            'target_currency_id'
        );

        // add foreign key for table `{{%currency}}`
        $this->addForeignKey(
            '{{%fk-currency_exchange_rate-target_currency_id}}',
            '{{%currency_exchange_rate}}',
            'target_currency_id',
            '{{%currency}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%currency}}`
        $this->dropForeignKey(
            '{{%fk-currency_exchange_rate-source_currency_id}}',
            '{{%currency_exchange_rate}}'
        );

        // drops index for column `source_currency_id`
        $this->dropIndex(
            '{{%idx-currency_exchange_rate-source_currency_id}}',
            '{{%currency_exchange_rate}}'
        );

        // drops foreign key for table `{{%currency}}`
        $this->dropForeignKey(
            '{{%fk-currency_exchange_rate-target_currency_id}}',
            '{{%currency_exchange_rate}}'
        );

        // drops index for column `target_currency_id`
        $this->dropIndex(
            '{{%idx-currency_exchange_rate-target_currency_id}}',
            '{{%currency_exchange_rate}}'
        );

        $this->dropTable('{{%currency_exchange_rate}}');
    }
}
