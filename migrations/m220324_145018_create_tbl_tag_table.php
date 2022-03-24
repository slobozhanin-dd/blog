<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_tag}}`.
 */
class m220324_145018_create_tbl_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_tag', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'frequency' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_tag');
    }
}
