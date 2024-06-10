<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Allergens $model */

$this->title = 'Create Allergens';
$this->params['breadcrumbs'][] = ['label' => 'Allergens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allergens-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
