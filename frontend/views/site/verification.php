<?php

use yii\helpers\Url;

$this->title = 'Verification';
?>
<style>

    .modal {
        display: block;
    }

    .modal-age-button button {
        height: 50px;
        font-size: 24px;
    }
</style>
<div class="modal" id="ageModal" tabindex="-1" aria-labelledby="ageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content text-center ">
            <div class="modal-body row align-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-6 row">
                    <div class="col-12">
                        <h2 class="modal-title" id="ageModalLabel">Age Verification</h2>
                    </div>
                    <div class="col-12">
                        <h5>Вам есть 21?</h5>
                    </div>
                    <div class="col-6 mt-3 modal-age-button">
                        <a href="<?= Url::to(['site/verify', 'verify' => 1]) ?>" data-method="post" type="button"
                           class="btn btn-primary w-50 btn-lg">Да</a>
                    </div>
                    <div class="col-6 mt-3 modal-age-button">
                        <a href="<?= Url::to(['site/verify', 'verify' => 2]) ?>" data-method="post" type="button"
                           class="btn btn-secondary w-50 btn-lg">Нет</a>
                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
    </div>
</div>
