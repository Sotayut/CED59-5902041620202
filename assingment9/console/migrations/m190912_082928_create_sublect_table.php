<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sublect}}`.
 */
class m190912_082928_create_sublect_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sublect}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'section' => $this->string(),
            'teach_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sublect}}');
    }
}
