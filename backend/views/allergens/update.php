<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Allergens $model */

$this->title = 'Update Allergens: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Allergens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="allergens-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
