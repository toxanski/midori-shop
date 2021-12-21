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
                <div class="user-info__delivery"><a href="#" class="user-info__link link">Доставка и оплата</a></div>
                <button class="modal-open bg-transparent text-black hover:text-orange-500 user-info__cart mr-4">
                    <img src="<?= Yii::getAlias('@img/shopping-cart.png')?>" alt="" class="user-info__cart-img">
                    <span class="user-info__cart-quantity">(<?= $_SESSION['cart.totalQuantity'] ? $_SESSION['cart.totalQuantity'] : 0;?>)</span>
                </button>
                
                <form class="search-ico user-info__search flex border-1 border-orange-500 rounded" action="<?= Url::to(['category/search']) ?>" method="get">
                    <input
                     type="text"
                     class="px-4 py-2 w-40 focus:outline outline-orange-500 border-orange-500 focus:border-orange-500 focus:shadow-none"
                     placeholder="Поиск..."
                     name="searchInput" />
                     <button type="submit" class="px-4 text-white bg-orange-500 border-l">
<!--                         <img src="--><?//= Yii::getAlias('@img/Search_ico.png')?><!--" alt=""  class="search-ico__img" />-->
                         <svg class="w-6 h-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24">
                             <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                         </svg>
                     </button>
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
        <footer class="footer pt-14 pb-10">
            <ul class="footer__titles flex justify-start items-start flex-col pl-12">
                <li class="footer__title-name my-2"><a href="#" class="footer__link link">О компании</a></li>
                <li class="footer__title-name my-2"><a href="#" class="footer__link link">Доставка и оплата</a></li>
                <li class="footer__title-name my-2"><a href="#" class="footer__link link">Лента материалов</a></li>
                <li class="footer__title-name my-2"><a href="#" class="footer__link link">Политика возврата</a></li>
            </ul>
            <div class="footer__social social flex flex-col justify-start items-start">
                <h4 class="social__title mb-3">Выберете удобный мессенджер для общения</h4>
                <div class="social__icons flex justify-center items-center">
                    <div class="social__button mx-3">
                        <img src="<?= Yii::getAlias('@img/telegram.png')?>" alt="" class="social__ico">
                    </div>
                    <div class="social__button mx-3">
                        <img src="<?= Yii::getAlias('@img/inst.png')?>" alt="" class="social__ico">
                    </div>
                    <div class="social__button mx-3">
                        <img src="<?= Yii::getAlias('@img/vk.png')?>" alt="" class="social__ico">
                    </div>
                </div>
            </div>
            <div class="footer__phone phone flex flex-col justify-start items-start">
                <span class="phone__text mb-3">Тел:+8 987-999-99-11</span>
                <span class="phone__text mb-3">Тел:+8 987-941-96-01</span>
                <span class="phone__text mb-3">Адрес:Палантая 85А</span>
            </div>
        </footer>
    </main>

    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-white opacity-95"></div>

        <div class="modal-container fixed w-full h-full z-50 overflow-y-auto ">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-black text-sm z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                (Esc)
            </div>

            <div class="modal-content container mx-auto h-auto text-left p-4">

                <div class="flex justify-between items-center pb-2">
                    <p class="text-2xl font-bold">Ваша корзина:</p>
                </div>

                <div class="modal-table cart">

                </div>

                <div class="flex justify-end pt-2">
                    <button class="modal-clear px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Очистить корзину</button>
                    <button class="modal-open-order px-4 bg-orange-500 p-3 rounded-lg text-white hover:bg-indigo-400 mr-2">Оформить заказ</button>
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Закрыть</button>
                </div>

            </div>
        </div>
    </div>
<!--    modal for order-->
    <div class="modal-order z-10 opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay-order absolute w-full h-full bg-white opacity-95"></div>

        <div class="modal-container fixed w-full h-full z-50 overflow-y-auto ">

            <div class="modal-close-order absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-black text-sm z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                (Esc)
            </div>

            <div class="modal-content container mx-auto h-auto text-left p-4">

                <div class="flex justify-between items-center pb-2">
                    <p class="text-2xl font-bold">Оформление заказа: </p>
                </div>

                <div class="modal-table order-container">

                </div>
            </div>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
