<?php

use yii\db\Migration;

/**
 * Class m240613_102829_menu_additional_weight
 */
class m240613_102829_menu_additional_weight extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu_additional', 'weight', $this->float()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240613_102829_menu_additional_weight cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240613_102829_menu_additional_weight cannot be reverted.\n";

        return false;
    }
    */
}
