<?php

namespace app\widgets;

use yii\base\Widget;

class CartWidget extends Widget
{
    public $data;
    public $category;
    public $dataTemplate;

    public function run()
    {
        $this->dataTemplate = $this->cartToTemplate();
        return $this->dataTemplate;
    }

    // буферизация для корректной связи виджета с его представлением
    public function cartToTemplate()
    {
        ob_start();
        include __DIR__ . '/template/cart.php';
        return ob_get_clean();
    }
}