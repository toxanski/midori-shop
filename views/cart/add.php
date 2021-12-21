<?php
use \yii\helpers\Url;

?>
<!--<pre>-->
<!--    --><?php //var_dump($session['cart']);?>
<!--</pre>-->
<?php if (!$session['cart']) {
    echo "<h3>Пусто :(</h3>";
} else { ?>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-s font-medium text-gray-500 uppercase tracking-wider">
                                Наименование
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-s font-medium text-gray-500 uppercase tracking-wider">
                                Композиция
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-s font-medium text-gray-500 uppercase tracking-wider">
                                Количество
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-s font-medium text-gray-500 uppercase tracking-wider">
                                Цена
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($session['cart'] as $id => $goodItem) { ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-40 w-40">
                                                <img
                                                    class="h-4/5 w-4/5 rounded-full object-fill"
                                                    src="<?= Yii::getAlias('@img/') . $goodItem['img'] ;?>"
                                                    alt="<?= $goodItem['name']?>"
                                                />
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-lg font-medium text-gray-900">
                                                    <?= $goodItem['name']?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-lg text-gray-900">
                                            <?= $goodItem['composition']?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-lg ml-8 leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                          <?= $goodItem['goodQuantity']; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
                                        <?= $goodItem['price'] * $goodItem['goodQuantity']; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 whitespace-nowrap flex items-end flex-col justify-center">
                <div class="cart-total">
                    <h3 class="text-lg font-medium inline-block mr-4">Всего товаров: </h3><span class="text-lg"><?= $session['cart.totalQuantity']; ?></span>
                </div>
                <div class="cart-summary">
                    <h3 class="text-lg font-medium inline-block mr-4">На сумму: </h3><span class="text-lg"><?= $session['cart.totalSummary']; ?></span>
                </div>
            </div>
        </div>
    </div>
<?php } ?>