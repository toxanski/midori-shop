<?php

namespace app\controllers;
use app\models\Cart;
use app\models\Good;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    public function actionOpen()
    {
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
//        $session->remove('cart.totalSummary');
//        $session->remove('cart.totalQuantity');
        return $this->renderPartial('add', compact('session'));
    }

    public function actionAdd($name)
    {
        $good = new Good();
        $goodResult = $good->getOneGood($name);

        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
        $cart = new Cart();
        $cart->addToCart($goodResult);

        return $this->renderPartial('add', compact('goodResult', 'session'));
    }
}