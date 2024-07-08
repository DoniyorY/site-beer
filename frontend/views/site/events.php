<?php

use yii\helpers\Url;
use yii\helpers\Html;
$y_params=Yii::$app->params;
$lang = Yii::$app->language;
$this->title = Yii::$app->params['Events'][$lang];
$baseUrl = Yii::$app->request->baseUrl;
?>

<div class="breadcrumbs">
    <div class="breadcrumbs-image" style="background-image: url(/images/events-breadcrumbs.png)"></div>
    <div class="breadcrumbs-content text-center">
        <h1><?= Html::encode($this->title) ?></h1>
        <h2><?=Yii::$app->params['Host Your Gathering at Our Brewery'][$lang]?></h2>
    </div>
</div>
<section class="events-main">
    <div class="container">
        <div class="event-item row">
            <div class="item-left col-md-4 col-12">
                <img src="<?= "$baseUrl/images/event-item-1.png" ?>" alt="event-item">
            </div>
            <div class="item-right col-md-8 col-12">
                <div class="title">
                    <h2 style="margin-bottom: 10px;"><?=Yii::$app->params['Host Your Gathering'][$lang]?></h2>
                    <h2 style="color:#CD8A33"><?=Yii::$app->params['At Our Brewery'][$lang]?></h2>
                </div>
                <div class="item-content">
                    <p>
                        <?=Yii::$app->params['events_content1'][$lang]?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <?=$y_params['events_title_2'][$lang]?>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 item-right">
                <div class="title">
                    <h2 style="color:#CD8A33"><?=$y_params['Spacious and Versatile Venue'][$lang]?></h2>
                </div>
                <div class="item-content">
                    <p>
                        <?=$y_params['events_content2'][$lang]?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 item-left">
                <img src="<?= "$baseUrl/images/event-item-2.png" ?>" alt="event-item"
                     style="height: 250px; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container-fluid d-none d-md-block">
        <div class="row position-relative">
            <div class="left-bordered-event">
                <img src="<?= "$baseUrl/images/left-bordered-beer.png" ?>" alt="img">
            </div>
            <div class="right-bordered-event">
                <div class="title">
                    <h2 class="yellow"><?=$y_params['Craft Beer Selection'][$lang]?></h2>
                    <p>
                       <?=$y_params['Craft Beer Selection Content'][$lang]?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="background-yellow"></div>
    <div class="event-background-image">
        <div class="back-image"></div>
        <div class="back-content text-center">
            <h2 class="yellow"><?=$y_params['Delicious Food Options'][$lang]?>:</h2>
            <p style="color: #fff">
               <?=$y_params['Delicious Food Options Content'][$lang]?>
            </p>
        </div>
    </div>
    <div class="event-content">
        <div class="title">
            <h2 class="yellow"><?=$y_params['Dedicated Event Planning'][$lang]?></h2>
            <p>
                <?=$y_params['Dedicated Event Planning Content'][$lang]?>
            </p>
        </div>
        <div class="event-item mt-5">
            <div class="item-left">
                <img src="<?= "$baseUrl/images/Mask-group.png" ?>" alt="event-item">
            </div>
            <div class="item-right rr">
                <div class="title">
                    <h2 style="color:#CD8A33"><?=$y_params['Unique Ambiance'][$lang]?></h2>
                </div>
                <div class="item-content">
                    <p>
                       <?=$y_params['Unique Ambiance Content'][$lang]?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pre-footer">
    <img src="<?= "$baseUrl/images/3.png" ?>" alt="prefooter" style="width: 100%; object-fit: cover; opacity: 1">

</section>