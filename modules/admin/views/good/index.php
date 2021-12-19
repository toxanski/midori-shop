<?php
use app\assets\AdminAsset;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
AdminAsset::register($this);

$this->title = 'Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="good-index">
  <!-- <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2"> -->
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Good', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <!-- <?php echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <!-- <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white"> -->
      <?= GridView::widget([
          'dataProvider' => $dataProvider,
          'filterModel' => $searchModel,
          'columns' => [
              ['class' => 'yii\grid\SerialColumn'],

              'id',
              'category',
              'name',
              'composition:ntext',
              'price',
              //'descr:ntext',
              //'img',
              //'link_name',

              ['class' => 'yii\grid\ActionColumn']
          ],
      ]); ?>
    <!-- </div> -->
  <!-- </div> -->

</div>
