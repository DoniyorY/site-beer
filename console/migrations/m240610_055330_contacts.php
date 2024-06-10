<?php

use yii\db\Migration;

/**
 * Class m240610_055330_contacts
 */
class m240610_055330_contacts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'subject' => $this->string(255)->notNull(),
            'message' => $this->string(255)->notNull(),
            'created' => $this->integer()->notNull()->defaultValue(time()),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240610_055330_contacts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240610_055330_contacts cannot be reverted.\n";

        return false;
    }
    */
}
