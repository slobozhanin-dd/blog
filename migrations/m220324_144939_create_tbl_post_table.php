<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_post}}`.
 */
class m220324_144939_create_tbl_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->string(),
            'tags' => $this->string(),
            'create_time' => $this->date(),
            'update_time' => $this->date(),
            'author_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-post-author_id',
            'tbl_post',
            'author_id'
        );

        // add foreing key for table 'author'

        $this->addForeignKey(
            'fk-post-author_id',
            'tbl_post',
            'author_id',
            'tbl_user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_post');
    }
}
