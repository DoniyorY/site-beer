<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php $form = ActiveForm::begin(); ?>
    <div class="menu-form modal-body">

        <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\MenuCategory::find()->all(), 'id', 'name_ru'), ['prompt' => 'Choose the category']) ?>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <?= $form->field($model, 'desc_ru')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'desc_en')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'desc_uz')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'price')->textInput() ?>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>