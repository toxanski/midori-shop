<div class="product-list-container">
    <h1 class="product-list-container__title">Сеты</h1>
    <div class="product-list">
        <?php foreach ($allGoods as $good) { ?>
        <div class="product product-list__product">
            <img src="<?= Yii::getAlias('@img/') . $good['img']?>" alt="" class="product__img">
            <h2 class="product__name">
                <a href="/<?= $good['link_name']?>" class="link"><?= $good['name']?></a>
            </h2>
            <span class="product__description"><?= $good['descr']?></span>
            <div class="product__footer">
                <span class="product__price"><?= $good['price']?> руб.</span>
                <button class="product__button button-primary">Хочу</button>
            </div>
        </div>
        <?php } ?>
    </div>
</div>