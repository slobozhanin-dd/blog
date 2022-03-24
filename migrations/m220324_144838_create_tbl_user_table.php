<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_user}}`.
 */
class m220324_144838_create_tbl_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'password' => $this->string(),
            'email' => $this->string()->defaultValue(null),
            'isAdmin' => $this->integer()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_user');
    }
}
