<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">
    <div class="row">
        <div class="col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create Menu
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo $this->render('_form', ['model' => new Menu()]); ?>

            </div>
        </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                    'attribute'=>'category_id',
                'value'=>function ($data) {
                    return $data->category->name_ru;
                }
            ],
            'title_ru',
            //'desc_ru:ntext',
            //'desc_en:ntext',
            //'desc_uz:ntext',
            [
                'attribute' => 'created',
                'value' => function ($data) {
                    return date('d.m.Y', $data->created);
                }
            ],
            [
                'attribute' => 'price',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDecimal($model->price, 0);
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    return Yii::$app->params['status'][$data->status];
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
