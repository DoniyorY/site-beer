<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MenuCategory $model */

$this->title = 'Create Menu Category';
$this->params['breadcrumbs'][] = ['label' => 'Menu Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
