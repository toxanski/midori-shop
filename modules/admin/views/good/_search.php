<?php
use app\assets\AdminAsset;
AdminAsset::register($this);
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GoodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="good-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'composition') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'link_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
