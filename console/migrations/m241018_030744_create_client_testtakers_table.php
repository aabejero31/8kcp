<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client_testtakers}}`.
 */
class m241018_030744_create_client_testtakers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%client_testtakers}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer()->notNull(),
            'testtaker_id' => $this->integer()->notNull()
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client_testtakers}}');
    }
}
