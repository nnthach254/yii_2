<?php
use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m240705_113912_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'subject' => $this->string()->notNull(),
            'body' => $this->string()->notNull(),
        ], $tableOptions);
        $this->createIndex(
            'index_contact_email', 
            '{{%contact}}', 
            'email', 
            false 
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact}}');
    }
}
