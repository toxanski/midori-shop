<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $name
 * @property string|null $email
 * @property int|null $phone
 * @property string|null $address
 * @property int|null $sum
 * @property string|null $status
 */
class Order extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['phone', 'sum'], 'integer'],
            [['address'], 'string'],
            [['name', 'email', 'status'], 'string', 'max' => 255],
            [['name', 'email', 'phone', 'address'], 'required'],
            [['email'], 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }
}
