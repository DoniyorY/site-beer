<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Connector $model */

$this->title = 'Create Connector';
$this->params['breadcrumbs'][] = ['label' => 'Connectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="connector-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
