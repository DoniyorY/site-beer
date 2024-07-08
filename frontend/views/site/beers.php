<?php

use yii\helpers\Html;
$lang = Yii::$app->language;
$params=Yii::$app->params;
$this->title = $params['Beer Brands'][$lang];
$baseUrl = Yii::$app->request->baseUrl;
?>
<div class="breadcrumbs">
    <div class="breadcrumbs-image"></div>
    <div class="breadcrumbs-content text-center">
        <h1><?= Html::encode($this->title) ?></h1>
        <h2><?=$params['Explore Our Signature Brews'][$lang]?></h2>
    </div>
</div>
<section class="main-beers container">
    <div class="cards-container">
        <div class="container event-card-title">
            <p>
                <?=$params['Beers short'][$lang]?>
            </p>
        </div>
        <div class="event-cards">
            <div class="event-card-jazz">
                <div class="card-image">
                    <img src="<?= "$baseUrl/images/jasur.png" ?>" alt="jazz-image">
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h2><?=$params['Khmelnov Jasur STOUT'][$lang]?></h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 5.8% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                <?=$params['Khmelnov Jasur STOUT Content'][$lang]?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-cards">
            <div class="event-card-jazz">
                <div class="card-image">
                    <img src="<?= "$baseUrl/images/ipak-yoli.png" ?>" alt="jazz-image">
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h2><?=$params['Khmelnov IPAK YOLI'][$lang]?></h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 5.4% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                <?=$params['Khmelnov IPAK YOLI Content'][$lang]?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-cards">
            <div class="event-card-jazz">
                <div class="card-image">
                    <img src="<?= "$baseUrl/images/bahor-helles.png" ?>" alt="jazz-image">
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h2><?=$params['Khmelnov Bahor helles'][$lang]?></h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 5.0% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                <?=$params['Khmelnov Bahor helles Content'][$lang]?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-cards">
            <div class="event-card-jazz">
                <div class="card-image">
                    <img src="<?= "$baseUrl/images/oq-quyosh.png" ?>" alt="jazz-image">
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h2><?=$params['Khmelnov Oq quyosh'][$lang]?></h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 4.8% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                <?=$params['Khmelnov Oq quyosh Content'][$lang]?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pre-footer">
    <img src="<?= "$baseUrl/images/pre-footer-beer.png" ?>" alt="prefooter" style="width: 100%; object-fit: cover">
    <h2><?=$params['history in every sip'][$lang]?></h2>
</section>
