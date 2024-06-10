<?php

use yii\db\Migration;

/**
 * Class m240610_054326_allergen
 */
class m240610_054326_allergen extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('allergens', [
            'id' => $this->primaryKey(),
            'name_ru'=>$this->string(255)->notNull(),
            'name_en'=>$this->string(255)->notNull(),
            'name_uz'=>$this->string(255)->notNull(),
            'logo'=>$this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240610_054326_allergen cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240610_054326_allergen cannot be reverted.\n";

        return false;
    }
    */
}
