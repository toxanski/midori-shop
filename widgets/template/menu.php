<?php
use \yii\helpers\Url;
?>

<ul class="navbar side-menu__navbar">
    <?php foreach ($data as $category) { ?>
    <li class="navbar__item">
        <!-- category(controller) / view(view of the controller), productId(param для отображения по категориям) -->
        <a href="<?= Url::to(['category/view', 'productId' => $category['cat_name']])?>" class="navbar__link link">

            <img src="<?= Yii::getAlias("@img/") . $category['img'] ?>" alt="" class="navbar__item-img">
            <div class="navbar__item-text"><?= $category['browser_name']; ?></div>

        </a>
    </li>
    <?php } ?>
</ul>
