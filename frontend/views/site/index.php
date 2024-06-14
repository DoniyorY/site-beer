<?php

/** @var yii\web\View $this */

$this->title = 'Main Page';
$baseUrl = Yii::$app->request->baseUrl;
$lang = Yii::$app->language;
?>
<section class="b">
    <div class="banner-main" style="background-image: url(<?= "$baseUrl/images/banner-image.png" ?>);">
        <!--<div class="filter"></div>-->
    </div>
    <div class="heading">
        <h1 style="text-align: center"><span class="white">The History and Art of Brewing:</span>
            <br>
            <span class="yellow" style="color: #FFA025">From Traditions to Modern Trends</span></h1>
    </div>
</section>

<section class="about-main">
    <div class="container">
        <div class="about-content">
            <div class="about-title">
                <h2 class="text-center "><span> The Brewery's History: </span> <span class="yellow"> From Origins to the Present Day </span>
                </h2>
            </div>
            <div class="about-content">
                <p>
                    Khmelnov Brewery began its operations in 2021. Since then, we have been tirelessly improving our
                    recipes and technologies to delight our customers with excellent beer.
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
                <h5>The equipment of the company "Czech Brewmaster"</h5>
            </div>
            <div class="col-md-8">
                <img src="<?= "$baseUrl/images/map.png" ?>" alt="map" style="width: 100%;">
            </div>
            <div class="col-md-4 pt-5">
                <h3 class="yellow">Geography of Raw Materials</h3>
                <p>
                    For brewing our beer, we use high-quality ingredients from various regions around the world. Our
                    malt and hops are sourced from the best brewing regions in New Zealand, Denmark, Germany, Austria,
                    USA, and Russia, allowing us to achieve unique flavor characteristics.
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
                <h3>Current Events</h3>
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
                            <h2>Jazz evening</h2>
                        </div>
                        <div class="col-md-6 col-6 text-end schedule">
                            <p> Every Saturday <br> 20:00 </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                Join us for an unforgettable Jazz Night at our beer restaurant! Immerse yourself in an
                                evening of smooth melodies, delicious craft beers, and a warm, inviting atmosphere. On
                                [date], we are excited to host an exceptional live jazz performance that promises to
                                captivate and entertain.
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
                        Lamb Shank in Cream Sauce
                    </p>
                    <p class="c-content">
                        Our signature Lamb Shank in Cream Sauce is a culinary masterpiece crafted for true gourmets. The
                        tenderness of the lamb combined with the richness of the cream sauce will delight even the most
                        discerning palates. Slowly braised until tender, the lamb shank is generously drenched in a
                        fragrant cream sauce, promising a burst of flavors and unforgettable gastronomic experiences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map-widget">
    <iframe src="https://yandex.uz/map-widget/v1/?ll=67.057832%2C39.660027&mode=poi&poi%5Bpoint%5D=67.056461%2C39.660513&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D72610729384&z=17.73"
            width="560" height="400" frameborder="1" allowfullscreen="true" style="width: 100%; height: 600px"></iframe>
</section>
<section class="products">
    <div class="container">
        <a class="block" href="<?= \yii\helpers\Url::to(['menu/index']) ?>" target="_self">
            <img src="<?= "$baseUrl/images/our-menu-img.png" ?>" alt="">
            <div class="inner">
                <h2>Our Menu</h2>
                <p>Find Out more about our menu</p>
            </div>
        </a>
        <a class="block" href="<?= \yii\helpers\Url::to(['site/events']) ?>" target="_self">
            <img src="<?= "$baseUrl/images/events-img.png" ?>" alt="restaurant">
            <div class="inner">
                <h2>Events</h2>
                <p>Hold an event with us</p>
            </div>
        </a>
        <a class="block" href="<?= \yii\helpers\Url::to(['site/beers']) ?>" target="_self">
            <img src="<?= "$baseUrl/images/beer-img.png" ?>" alt="Beer pul">
            <div class="inner">
                <h2>Beers</h2>
                <p>Brewery</p>
            </div>
        </a>
    </div>
</section>
