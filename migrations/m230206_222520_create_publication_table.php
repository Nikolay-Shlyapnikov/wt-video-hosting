<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publication}}`.
 */
class m230206_222520_create_publication_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publication}}', [
            'id' => $this->primaryKey()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'video_path' => $this->string(128)->notNull()->unique(),
            'title' => $this->string(128)->notNull(),
            'desc' => $this->text()->null(),
            'view_count' => $this->integer()->notNull()->defaultValue(0),
            'user_id' => $this->integer()->unsigned()->notNull(),
            'category_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'category_id'
        $this->createIndex(
            'idx-publication-category_id',
            'publication',
            'category_id'
        );

        // creates foreign key for table 'category'
        $this->addForeignKey(
            '{{%fk-publication-user_id}}',
            '{{%publication}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );

        // creates index for column 'user_id'
        $this->createIndex(
            'idx-publication-user_id',
            'publication',
            'user_id'
        );

        // creates foreign key for table 'user'
        $this->addForeignKey(
            '{{%fk-publication-user_id}}',
            '{{%publication}}',
            'user_id',
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
        $this->dropTable('{{%publication}}');
    }
}
