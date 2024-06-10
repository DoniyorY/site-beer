<?php

use yii\db\Migration;

/**
 * Class m240610_082833_menu_addtional
 */
class m240610_082833_menu_addtional extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu_additional', [
            'id' => $this->primaryKey(),
            'menu_id' => $this->integer()->notNull(),
            'name_ru' => $this->string(255)->notNull(),
            'name_en' => $this->string(255)->notNull(),
            'name_uz' => $this->string(255)->notNull(),
            'price' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240610_082833_menu_addtional cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240610_082833_menu_addtional cannot be reverted.\n";

        return false;
    }
    */
}
