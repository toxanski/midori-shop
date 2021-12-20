<?php

namespace app\controllers;
use app\models\Good;
use yii\web\Controller;

class CartController extends Controller
{
    // действие - Add; представление cart
//    public function actionAdd($name)
//    {
//        $good = new Good();
//        $good = $good->getOneGood($name);
//        $this->renderPartial('add', compact('good'));
//    }
    public function actionAdd($name) {
        $good = new Good();
        $goodResult = $good->getOneGood($name);
        return $this->renderPartial('add', compact('goodResult'));
    }
}