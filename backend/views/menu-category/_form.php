<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MenuCategory $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php $form = ActiveForm::begin(); ?>
    <div class="menu-category-form modal-body">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>