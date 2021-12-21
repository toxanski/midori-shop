<?php
use \yii\helpers\Url;
use \yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($order, 'name')->textInput(['class' => 'px-4 py-2 my-2 w-40 border border-indigo-500 focus:outline outline-indigo-500 border-indigo-500 focus:border-indigo-500 focus:shadow-none']) ?>
<?= $form->field($order, 'email')->textInput(['class' => 'px-4 py-2 my-2 w-40 border border-indigo-500 focus:outline outline-indigo-500 border-indigo-500 focus:border-indigo-500 focus:shadow-none']) ?>
<?= $form->field($order, 'phone')->textInput(['class' => 'px-4 py-2 my-2 w-40 border border-indigo-500 fo mt-6cus:outline outline-indigo-500 border-indigo-500 focus:border-indigo-500 focus:shadow-none']) ?>
<?= $form->field($order, 'address')->textInput(['class' => 'px-4 py-2 my-2 w-40 border border-indigo-500 focus:outline outline-indigo-500 border-indigo-500 focus:border-indigo-500 focus:shadow-none']) ?>
<button class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Оформить заказ</button>

<?php ActiveForm::end() ?>

