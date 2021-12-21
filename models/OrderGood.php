<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_good".
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $product_id
 * @property string|null $name
 * @property int|null $price
 * @property int|null $quantity
 * @property int|null $sum
 */
class OrderGood extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'order_good';
    }


    public function rules()
    {
        return [
            [['order_id', 'product_id', 'price', 'quantity', 'sum'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }
}
