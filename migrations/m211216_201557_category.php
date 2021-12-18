<?php

use yii\db\Migration;

/**
 * Class m211216_201557_category
 */
class m211216_201557_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211216_201557_category cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'cat_name' => $this->string(),
            'browser_name' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
