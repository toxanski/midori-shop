<?php

use yii\db\Migration;

/**
 * Class m211215_212138_good
 */
class m211215_212138_good extends Migration
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
//        echo "m211215_212138_good cannot be reverted.\n";
//
//        return false;
//    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('good', [
            'id' => $this->primaryKey(),
            'category' => $this->string(),
            'name' => $this->string(),
            'composition' => $this->text(),
            'price' => $this->integer(),
            'descr' => $this->text(),
            'img' => $this->string(),
            'link_name' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('good');
    }

}
