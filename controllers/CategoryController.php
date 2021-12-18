<?php

namespace app\controllers;

use app\models\Good;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $goods = new Good();
        $allGoods = $goods->getAllGoods();
        return $this->render('index', compact('allGoods'));
    }

    /**
     * $productId получается из представления виджета меню
     */
    public function actionView($productId)
    {
        $goods = new Good();
        $goodsByCategory = $goods->getGoodsByCategory($productId);
        return $this->render('view', ['goodsByCategory' => $goodsByCategory, 'product' => $productId]);
    }

    public function actionSearch()
    {
        $search = Yii::$app->request->get('searchInput');
        $goods = new Good();
        $goodSearchResults = $goods->getSearchResults($search);
        return $this->render('search',
            [
                'goodSearchResults' => $goodSearchResults,
                'search' => $search
            ]);
    }
}