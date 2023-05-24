<?php

use yii\db\Migration;

/**
 * Class m230524_095010_inventory
 */
class m230524_095010_inventory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable('inventory',[
                'name' => $this->string()->notNull(),
                'description' => $this->text(100),
                'created_by' => $this->integer(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230524_095010_inventory cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_095010_inventory cannot be reverted.\n";

        return false;
    }
    */
}
