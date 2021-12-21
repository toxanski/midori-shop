<?php

namespace app\controllers;
use app\models\Cart;
use app\models\Good;
use app\models\Order;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    public function actionOrder()
    {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        if ($order->load(Yii::$app->request->post())) {
            $order->date = date('Y-m-d H:i:s');
            $order->sum = $session['cart.totalSummary'];
            if ($order->save()) {
                Yii::$app->mailer->compose()
                    ->setFrom(['1111aaa@mail.ru' => 'test test'])
                    ->setTo('admin@mail.ru')
                    ->setSubject('Ваш заказ принят')
                    ->send();
                $session->remove('cart');
                $session->remove('cart.totalSummary');
                $session->remove('cart.totalQuantity');
                return $this->render('success', compact('session'));
            }
        }

        $this->layout = 'empty-layout';
        return $this->render('order', compact('session', 'order'));
    }

    public function actionRemove($id)
    {
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalcCart($id);
        return $this->renderPartial('add', compact('session'));
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.totalSummary');
        $session->remove('cart.totalQuantity');
        return $this->renderPartial('add', compact('session'));
    }

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