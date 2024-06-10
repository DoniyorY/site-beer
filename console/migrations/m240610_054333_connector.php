<?php

use yii\db\Migration;

/**
 * Class m240610_054333_connector
 */
class m240610_054333_connector extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('connector', [
            'id' => $this->primaryKey(),
            'menu_id' => $this->integer(),
            'allergen_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240610_054333_connector cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240610_054333_connector cannot be reverted.\n";

        return false;
    }
    */
}
