<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m191214_165135_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'section' => $this->string()->notNull(),
            'key' => $this->string()->notNull(),
            'value' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'rule' => $this->string()->notNull(),
            'tag' => $this->string()->notNull(),
            'createdAt' => $this->integer()->notNull(),
            'updatedAt' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
