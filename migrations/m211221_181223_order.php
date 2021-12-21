<?php

use yii\db\Migration;

/**
 * Class m211221_181223_order
 */
class m211221_181223_order extends Migration
{
//    /**
//     * {@inheritdoc}
//     */
//    public function safeUp()
//    {
//
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function safeDown()
//    {
//        echo "m211221_181223_order cannot be reverted.\n";
//
//        return false;
//    }

//
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->integer(),
            'address' => $this->text(),
            'sum' => $this->integer(),
            'status' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('order');
    }

}
