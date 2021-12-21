<?php

use yii\db\Migration;

/**
 * Class m211221_181231_order_good
 */
class m211221_181231_order_good extends Migration
{

    public function up()
    {
        $this->createTable('order_good', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'name' => $this->string(),
            'price' => $this->integer(),
            'quantity' => $this->integer(),
            'sum' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('order_good');
    }
}
