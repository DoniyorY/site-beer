<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Allergens $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php $form = ActiveForm::begin(); ?>
    <div class="allergens-form modal-body">
        <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'imageFile')->fileInput(['maxlength' => true, 'class'=>'mt-3']) ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>