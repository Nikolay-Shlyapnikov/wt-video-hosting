<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%like}}`.
 */
class m230206_222608_create_like_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%like}}', [
            'id' => $this->primaryKey()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'user_id' => $this->integer()->unsigned()->notNull(),
            'publication_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'user_id'
        $this->createIndex(
            'idx-like-user_id',
            'like',
            'user_id'
        );

        // creates foreign key for table 'user'
        $this->addForeignKey(
            '{{%fk-like-user_id}}',
            '{{%like}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column 'publication_id'
        $this->createIndex(
            'idx-like-publication_id',
            'like',
            'publication_id'
        );

        // creates foreign key for table 'publication'
        $this->addForeignKey(
            '{{%fk-like-publication_id}}',
            '{{%like}}',
            'publication_id',
            '{{%publication}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%like}}');
    }
}
