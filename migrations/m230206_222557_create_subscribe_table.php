<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subscribe}}`.
 */
class m230206_222557_create_subscribe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subscribe}}', [
            'id' => $this->primaryKey()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'user_id' => $this->integer()->unsigned()->notNull(),
            'subscriber_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'user_id'
        $this->createIndex(
            'idx-subscribe-user_id',
            'subscribe',
            'user_id'
        );

        // creates foreign key for table 'user'
        $this->addForeignKey(
            '{{%fk-subscribe-user_id}}',
            '{{%subscribe}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column 'subscriber_id'
        $this->createIndex(
            'idx-subscribe-publication_id',
            'subscribe',
            'subscriber_id'
        );

        // creates foreign key for table 'user'
        $this->addForeignKey(
            '{{%fk-subscribe-publication_id}}',
            '{{%subscribe}}',
            'subscriber_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subscribe}}');
    }
}
