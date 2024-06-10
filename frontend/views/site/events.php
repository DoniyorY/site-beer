<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Events';
$lang = Yii::$app->language;
$baseUrl = Yii::$app->request->baseUrl;
?>

<div class="breadcrumbs">
    <div class="breadcrumbs-image" style="background-image: url(/images/events-breadcrumbs.png)"></div>
    <div class="breadcrumbs-content text-center">
        <h1><?= Html::encode($this->title) ?></h1>
        <h2>Host Your Gathering at Our Brewery</h2>
    </div>
</div>
<section class="events-main">
    <div class="container">
        <div class="event-item">
            <div class="item-left">
                <img src="<?= "$baseUrl/images/event-item-1.png" ?>" alt="event-item">
            </div>
            <div class="item-right">
                <div class="title">
                    <h2 style="margin-bottom: 10px;">Host Your Gathering</h2>
                    <h2 style="color:#CD8A33">At Our Brewery</h2>
                </div>
                <div class="item-content">
                    <p>
                        Looking for the perfect venue to host your next group event? Our brewery offers a unique and
                        inviting atmosphere for gatherings of all kinds. Whether you’re planning a corporate outing, a
                        family reunion, a birthday celebration, or a casual get-together with friends, we have
                        everything you need to make your event memorable.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h2>Why Choose <span style="color: #CD8A33">Our Brewery</span> For Your Event</h2>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 item-right">
                <div class="title">
                    <h2 style="color:#CD8A33">Spacious and Versatile Venue</h2>
                </div>
                <div class="item-content">
                    <p>
                        Looking for the perfect venue to host your next group event? Our brewery offers a unique and
                        inviting atmosphere for gatherings of all kinds. Whether you’re planning a corporate outing, a
                        family reunion, a birthday celebration, or a casual get-together with friends, we have
                        everything you need to make your event memorable.
                    </p>
                </div>
            </div>
            <div class="col-md-4 item-left">
                <img src="<?= "$baseUrl/images/event-item-2.png" ?>" alt="event-item"
                     style="height: 250px; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="left-bordered-event">
                <img src="<?= "$baseUrl/images/left-bordered-beer.png" ?>" alt="img">
            </div>
            <div class="right-bordered-event">
                <div class="title">
                    <h2 class="yellow">Craft Beer Selection</h2>
                    <p>
                        Treat your guests to an exceptional selection of craft beers brewed on-site. From classic lagers
                        to innovative ales, our diverse range of beers caters to all tastes. We also offer tasting
                        sessions and brewery tours to enhance your event experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="background-yellow"></div>
    <div class="event-background-image">
        <div class="back-image"></div>
        <div class="back-content text-center">
            <h2 class="yellow">Delicious Food Options:</h2>
            <p style="color: #fff">
                Pair our exceptional beers with a variety of delicious food options from our kitchen. Our menu includes
                appetizers, main courses, and desserts, all crafted to complement our brews. Customizable catering
                packages are available to suit your event’s needs.
            </p>
        </div>
    </div>
    <div class="event-content">
        <div class="title">
            <h2 class="yellow">Dedicated Event Planning</h2>
            <p>
                Our experienced event planning team is here to assist you every step of the way. From initial planning
                to execution, we’ll work with you to ensure every detail is perfect. We offer customizable event
                packages and can accommodate special requests to make your event truly unique.
            </p>
        </div>
        <div class="event-item mt-5">
            <div class="item-left">
                <img src="<?= "$baseUrl/images/Mask-group.png" ?>" alt="event-item">
            </div>
            <div class="item-right">
                <div class="title">
                    <h2 style="color:#CD8A33">Unique Ambiance</h2>
                </div>
                <div class="item-content">
                    <p>
                        Our brewery provides a distinctive backdrop for your event, combining rustic charm with modern
                        amenities. Your guests will enjoy the warm and welcoming atmosphere, making it a celebration to
                        remember.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pre-footer" >
    <img src="<?= "$baseUrl/images/3.png" ?>" alt="prefooter" style="width: 100%; object-fit: cover; opacity: 1">

</section>