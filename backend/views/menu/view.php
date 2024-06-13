<?php

use common\models\MenuAdditional;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */
$menuAdditional = new MenuAdditional();
$this->title = $model->title_ru;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">
    <div class="row">
        <div class="col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-4 text-end">
            <div class="btn-group">
                <?= Html::a(Yii::$app->params['status'][$model->status], ['status', 'id' => $model->id, 'status' => ($model->status == 0) ? 1 : 0], ['class' => 'btn btn-warning']) ?>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="col-md-7">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    [
                        'attribute' => 'category_id',
                        'value' => function ($data) {
                            return $data->category->name_ru;
                        }
                    ],
                    'title_ru',
                    'title_en',
                    'title_uz',
                    'desc_ru:ntext',
                    'desc_en:ntext',
                    'desc_uz:ntext',
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
                ],
            ]) ?>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-8">
                    <h2>Allergens</h2>
                </div>
                <div class="col-md-4 text-end mt-2">
                    <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        Add Allergen
                    </a>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <?php $form = ActiveForm::begin(['action' => Url::to(['add-allergen', 'menu_id' => $model->id]), 'method' => 'post']); ?>
                            <div class="row">
                                <div class="col-md-10">
                                    <?= $form->field(new \common\models\Connector(), 'allergen_id')->dropDownList(ArrayHelper::map(\common\models\Allergens::find()->all(), 'id', 'name_ru'), ['prompt' => 'Choose The Allergen']) ?>
                                </div>
                                <div class="col-md-2 mt-4">
                                    <button type="submit" class="btn btn-success w-100">
                                        <i class="bi bi-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                    <table class="table-sm table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($conn as $c): ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $c->allergen->name_ru ?></td>
                                <td>
                                    <a href="<?= Url::to(['delete-allergen', 'id' => $c->id]) ?>"
                                       class="btn btn-danger btn-sm" data-method="post">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="col-md-8">
                    <h2>Addition</h2>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-success" data-bs-toggle="collapse" href="#Additional" role="button"
                       aria-expanded="false" aria-controls="Additional">
                        Add Additional
                    </a>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="Additional">
                        <div class="card card-body">
                            <?php $form = ActiveForm::begin(['action' => Url::to(['add-additional', 'menu_id' => $model->id]), 'method' => 'post']); ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <?= $form->field($menuAdditional, 'name_ru')->textInput() ?>
                                </div>
                                <div class="col-md-4">
                                    <?= $form->field($menuAdditional, 'name_en')->textInput() ?>
                                </div>
                                <div class="col-md-4">
                                    <?= $form->field($menuAdditional, 'name_uz')->textInput() ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($menuAdditional, 'weight')->textInput(['type' => 'number']) ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($menuAdditional, 'price')->textInput(['type' => 'number']) ?>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-success w-100">
                                        <i class="bi bi-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                    <table class="table table-sm table-bordered table-striped text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Weight</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                        foreach ($additional as $a): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $a->name_ru ?></td>
                                <td><?= $a->weight ?></td>
                                <td><?= Yii::$app->formatter->asDecimal($a->price, 0) ?></td>
                                <td>
                                    <a href="<?= Url::to(['delete-additional']) ?>" class="btn btn-sm btn-danger"
                                       data-method="post">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
