<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="page">
    <aside class="side-menu">
        <div class="logo side-menu__logo">
            <a href="/"><img src="<?= Yii::getAlias('@img/Logo.png')?>" alt="logo"/></a>
        </div>
        <?= \app\widgets\MenuWidget::widget()?>
    </aside>
    <main class="main">
        <header class="header">
            <div class="header-phone header__phone">
                <p class="text-3xl font-bold underline text-green-500">123</p>
                <h3 class="header-phone__title">Наш телефон</h3>
                <h3 class="header-phone__phone-number">+7 987-414-44-44</h3>
                <div class="header-phone__work-hours">
                    <img src="<?= Yii::getAlias('@img/clock.svg')?>" class="header-phone__img" alt="" />
                    работаем с 10:00 до 00:00
                </div>
            </div>
            <div class="user-info header__user-info">
                <div class="city-info user-info__city">
                    <div class="city-info__title">Город:</div>
                    <div class="city-info__name text-green-500">Йошкар-Ола</div>
                </div>
                <div class="user-info__delivery"><a class="user-info__link link">Доставка и оплата</a></div>
                <img src="<?= Yii::getAlias('@img/Search_ico.png')?>" alt=""  class="search-ico__img" />
                <form class="search-ico user-info__search form-group" action="<?= Url::to(['category/search']) ?>" method="get">
                    <input type="text" class="input form-controlss" placeholder="Поиск..." name="searchInput" />
                </form>
            </div>
        </header>
        <section class="content">
            <?= $content?>
        </section>
        <section class="about">
            <h2 class="about__title">Заказать суши в Йошкар-Оле</h2>
            <p class="about__text text">
                Ресторан “Мидо́ри” предлагаем своим клиентам самые вкусные суши с доставкой на дом, приготовленные по классическим и адаптированным к европейской аудитории рецептам, а также собственным наработкам наших поваров. Мы ценим время наших клиентов, поэтому вы можете заказать суши в Йошкар-Оле с доставкой на дом или в офис.
            </p>
            <div class="list-container about__list-block text">
                <h6 class="list-container__title h6">В нашем меню более 20 видов суши:</h6>
                <ul class="list-block list-container__list">
                    <li class="list-block__item">Классические с сырым лососем, тунцом, окунем.</li>
                    <li class="list-block__item">Экзотические с тигровой креветкой, морским гребешком.</li>
                    <li class="list-block__item">Пикантные с копченым лососем, угрем.</li>
                </ul>
            </div>
            <p class="about__text text">
                В меню также представлены гунканы: с начинкой из красной икры и тобико, а также феликсы, где японский майонез сочетается с рыбой, морепродуктами, угрем. Любители острых блюд могут купить суши с соусом спайси. Популярные начинки — копченая курица, снежный краб, креветки, гребешки, тунец, лосось и окунь.
            </p>
        </section>
        <footer class="footer">

        </footer>
    </main>
    <aside class="cart-side-block">
        <section class="empty-cart cart-side-block__cart">
            <h2 class="empty-cart__title">Ваша корзина пуста.</h2>
            <h3 class="empty-cart__subtitle">Добавьте же скорее что-нибудь!</h3>
            <div class="empty-cart__delivery">
                <p class="empty-cart__delivery-text">Бесплатная доставка от 600руб.</p>
            </div>
        </section>
        <section class="fill-cart cart-side-block__cart">

        </section>
    </aside>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
