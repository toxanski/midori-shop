<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "good".
 *
 * @property int $id
 * @property string|null $category
 * @property string|null $name
 * @property string|null $composition
 * @property int|null $price
 * @property string|null $descr
 * @property string|null $img
 * @property string|null $link_name
 */
class Good extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'good';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['composition', 'descr'], 'string'],
            [['price'], 'integer'],
            [['category', 'name', 'img', 'link_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'name' => 'Name',
            'composition' => 'Composition',
            'price' => 'Price',
            'descr' => 'Descr',
            'img' => 'Img',
            'link_name' => 'Link Name',
        ];
    }

    public function getAllGoods() {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, '10');
        }
        return $goods;
    }

    public function getGoodsByCategory($productId)
    {
        $goodsCategory = Good::find()
            ->where(['category' => $productId])
            ->asArray()
            ->all();
        return $goodsCategory;
    }

    public function getSearchResults($search)
    {
        // $search - символы юзера
        $searchResult = Good::find()
            ->where(['like', 'name', $search])
            ->asArray()
            ->all();
        return $searchResult;
    }
}
