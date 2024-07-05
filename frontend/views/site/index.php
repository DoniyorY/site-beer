<?php

/** @var yii\web\View $this */

$this->title = 'Khmelnov Beer Factory';
$baseUrl = Yii::$app->request->baseUrl;
$lang = Yii::$app->language;
?>
<section class="b">
    <div class="banner-main" style="background-image: url(<?= "$baseUrl/images/banner-image.png" ?>);">
        <!--<div class="filter"></div>-->
    </div>
    <div class="heading">
        <?=Yii::$app->params['banner_title'][$lang]?>
    </div>
</section>

<section class="about-main">
    <div class="container">
        <div class="about-content">
            <div class="about-title">
                <?=Yii::$app->params['about_title'][$lang]?>
            </div>
            <div class="about-content">
                <p>
                   <?=Yii::$app->params['about_short'][$lang]?>
                </p>
            </div>
        </div>
        <div class="about-image">
            <div class="owl-carousel owl-carousel1">
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-1.png" ?>" alt="about-image">
                </div>
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-2.png" ?>" alt="about-image">
                </div>
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-3.png" ?>" alt="about-image">
                </div>
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-4.png" ?>" alt="about-image">
                </div>
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-5.png" ?>" alt="about-image">
                </div>
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-6.png" ?>" alt="about-image">
                </div>
                <div class="item mt-3 mt-md-0">
                    <img src="<?= "$baseUrl/images/about-image-7.png" ?>" alt="about-image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="maps-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5><?=Yii::$app->params['maps_title'][$lang]?></h5>
            </div>
            <div class="col-md-8">
                <img src="<?= "$baseUrl/images/map.png" ?>" alt="map" style="width: 100%;">
            </div>
            <div class="col-md-4 pt-5">
                <h3 class="yellow"><?=Yii::$app->params['left_map_title'][$lang]?></h3>
                <p>
                   <?=Yii::$app->params['left_map_content'][$lang]?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="events-main w-100">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 border_bottom">
                <hr>
            </div>
            <div class="col-md-4 text-center">
                <h3><?=Yii::$app->params['Current Events'][$lang]?></h3>
            </div>
            <div class="col-md-4 border_bottom">
                <hr>
            </div>
        </div>
        <div class="event-cards">
            <div class="event-card-jazz">
                <div class="card-image">
                    <img src="<?= "$baseUrl/images/jazz-image.png" ?>" alt="jazz-image">
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <h2><?=Yii::$app->params['Jazz evening'][$lang]?></h2>
                        </div>
                        <div class="col-md-6 col-6 text-end schedule">
                           <?=Yii::$app->params['jazz_schedule'][$lang]?>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                <?=Yii::$app->params['jazz_content'][$lang]?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="restaurant-banner">
        <div class="restaurant-image">
            <img src="<?= "$baseUrl/images/event-food.png" ?>" alt="event-food">
        </div>
        <div class="restaurant-content">
            <div class="row">
                <div class="col-md-12">
                    <p class="c-title">
                        <?=Yii::$app->params['Lamb Shank in Cream Sauce'][$lang]?>
                    </p>
                    <p class="c-content">
                        <?=Yii::$app->params['restaurant_content'][$lang]?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products">
    <div class="container">
        <a class="block" href="<?= \yii\helpers\Url::to(['menu/index']) ?>" target="_self">
            <img src="<?= "$baseUrl/images/our-menu-img.png" ?>" alt="">
            <div class="inner">
                <h2><?=Yii::$app->params['Our Menu'][$lang]?></h2>
                <p><?=Yii::$app->params['Find Out more about our menu'][$lang]?></p>
            </div>
        </a>
        <a class="block" href="<?= \yii\helpers\Url::to(['site/events']) ?>" target="_self">
            <img src="<?= "$baseUrl/images/events-img.png" ?>" alt="restaurant">
            <div class="inner">
                <h2><?=Yii::$app->params['Events'][$lang]?></h2>
                <p><?=Yii::$app->params['Hold an event with us'][$lang]?></p>
            </div>
        </a>
        <a class="block" href="<?= \yii\helpers\Url::to(['site/beers']) ?>" target="_self">
            <img src="<?= "$baseUrl/images/beer-img.png" ?>" alt="Beer pul">
            <div class="inner">
                <h2><?=Yii::$app->params['Beers'][$lang]?></h2>
                <p><?=Yii::$app->params['Brewery'][$lang]?></p>
            </div>
        </a>
    </div>
</section>
<section class="map-widget">
    <iframe src="https://yandex.uz/map-widget/v1/?ll=67.057832%2C39.660027&mode=poi&poi%5Bpoint%5D=67.056461%2C39.660513&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D72610729384&z=17.73"
            width="560" height="400" frameborder="1" allowfullscreen="true" style="width: 100%; height: 600px"></iframe>
</section>

