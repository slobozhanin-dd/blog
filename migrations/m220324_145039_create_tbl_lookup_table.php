<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_lookup}}`.
 */
class m220324_145039_create_tbl_lookup_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_lookup', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'code' => $this->integer(),
            'type' => $this->string(),
            'position' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_lookup');
    }
}
