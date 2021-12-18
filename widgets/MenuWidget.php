<?php

namespace app\widgets;

use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $data;
    public $category;
    public $dataTemplate;

    public function run()
    {
        $this->category = new Category();
        $this->data = $this->category->getCategories();
        $this->dataTemplate = $this->categoryToTemplate($this->data);
        return $this->dataTemplate;
    }

    // буферизация для корректной связи виджета с его представлением
    public function categoryToTemplate($data)
    {
        ob_start();
        include __DIR__ . '/template/menu.php';
        return ob_get_clean();
    }
}