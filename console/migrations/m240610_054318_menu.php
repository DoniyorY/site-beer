<?php

use yii\db\Migration;

/**
 * Class m240610_054318_menu
 */
class m240610_054318_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title_ru'=>$this->string(255)->notNull(),
            'title_en'=>$this->string(255)->notNull(),
            'title_uz'=>$this->string(255)->notNull(),
            'desc_ru'=>$this->text()->notNull(),
            'desc_en'=>$this->text()->notNull(),
            'desc_uz'=>$this->text()->notNull(),
            'created'=>$this->integer()->notNull()->defaultValue(time()),
            'status'=>$this->smallInteger()->notNull()->defaultValue(0),
            'price'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240610_054318_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240610_054318_menu cannot be reverted.\n";

        return false;
    }
    */
}
