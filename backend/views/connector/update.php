<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Connector $model */

$this->title = 'Update Connector: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Connectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="connector-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
