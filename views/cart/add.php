<?php
use \yii\helpers\Url;

?>
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
                    <tr>
                        <td class="px-6 py-8 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-40 w-40">
                                    <img
                                        class="h-4/5 w-4/5 rounded-full object-fill"
                                        src="<?= Yii::getAlias('@img/') . $goodResult['img'] ;?>"
                                        alt="<?= $goodResult['name']?>"
                                    />
                                </div>
                                <div class="ml-4">
                                    <div class="text-lg font-medium text-gray-900">
                                        <?= $goodResult['name']?>
                                    </div>
<!--                                    <div class="text-sm text-gray-500">-->
<!--                                        jane.cooper@example.com-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-lg text-gray-900">
                                <?= $goodResult['composition']?>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-lg leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                              ...
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
                            <?= $goodResult['price']?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
