<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_comment}}`.
 */
class m220324_145001_create_tbl_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_comment', [
            'id' => $this->primaryKey(),
            'content' => $this->string(),
            'status' => $this->integer(),
            'create_time' => $this->date(),
            'author' => $this->string(),
            'email' => $this->string(),
            'url' => $this->string(),
            'post_id' => $this->integer(),
        ]);


        // creates index for column 'post_id'
        $this->createIndex(
            'idx-post-post_id',
            'tbl_comment',
            'post_id'
        );

        // add foreing key for table 'tbl_post'

        $this->addForeignKey(
            'fk-post-post_id',
            'tbl_comment',
            'post_id',
            'tbl_post',
            'id',
            'CASCADE'
        );
    }
    public function safeDown()
    {
        $this->dropTable('tbl_comment');
    }
}
