<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MenuCategory $model */

$this->title = 'Update Menu Category: ' . $model->name_en;
$this->params['breadcrumbs'][] = ['label' => 'Menu Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
