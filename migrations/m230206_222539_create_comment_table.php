<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m230206_222539_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'text' => $this->text()->notNull(),
            'user_id' => $this->integer()->unsigned()->notNull(),
            'publication_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'user_id'
        $this->createIndex(
            'idx-comment-user_id',
            'comment',
            'user_id'
        );

        // creates foreign key for table 'user'
        $this->addForeignKey(
            '{{%fk-comment-user_id}}',
            '{{%comment}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column 'publication_id'
        $this->createIndex(
            'idx-comment-publication_id',
            'comment',
            'publication_id'
        );

        // creates foreign key for table 'publication'
        $this->addForeignKey(
            '{{%fk-comment-publication_id}}',
            '{{%comment}}',
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
        $this->dropTable('{{%comment}}');
    }
}
