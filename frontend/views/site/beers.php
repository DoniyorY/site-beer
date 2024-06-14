<?php

use yii\helpers\Html;

$this->title = "Beer Brands";
$lang = Yii::$app->language;
$baseUrl = Yii::$app->request->baseUrl;
?>
<div class="breadcrumbs">
    <div class="breadcrumbs-image"></div>
    <div class="breadcrumbs-content text-center">
        <h1><?= Html::encode($this->title) ?></h1>
        <h2>Explore Our Signature Brews</h2>
    </div>
</div>
<section class="main-beers container">
    <div class="cards-container">
        <div class="container event-card-title">
            <p>
                We carefully selected our beer varieties to satisfy the diverse tastes of our customers. Each type of
                beer is crafted considering the preferences of both traditional and experimental flavor enthusiasts. We
                have chosen four main varieties that cover a wide range of aromas and styles, from light lagers to rich
                stouts.
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
                            <h2>Khmelnov Jasur STOUT</h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 5.8% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                Perceived Malt Aroma and Flavor: The character is primarily defined by pronounced
                                coffee-like roasted barley and moderate roasted malt aroma and flavor. The distinctive
                                feature of a dry stout — dry roastiness — is achieved through the use of roasted barley.
                                Initial malt and light caramel flavors give way to a recognizable roasted-dry bitterness
                                in the aftertaste.
                                Perceived Hop Aroma and Flavor: The character of European hops in both taste and aroma
                                can range from absent to mild.
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
                            <h2>Khmelnov IPAK YOLI</h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 5.4% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                Perceived Malt Aroma and Flavor: The malt characteristics in both taste and aroma range
                                from medium-weak to medium intensity.
                                Perceived Hop Aroma and Flavor: From strong to very strong, exhibiting a wide spectrum
                                of characteristics (including floral, citrus, fruity (berries, tropical, stone fruits,
                                and others), sulfuric, diesel-like, onion-garlic, catty, piney or resinous, and many
                                others).
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
                            <h2>Khmelnov Bahor helles</h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 5.0% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                Perceived Malt Aroma and Flavor: Pronounced malt aroma and flavor. There may be a small
                                amount of sulfuric aromas and flavors created by the yeast. The malt character is
                                sometimes bready, reminiscent of slightly toasted malted barley. There should be no
                                caramel character.
                                Perceived Hop Aroma and Flavor: Hop aroma ranges from absent to weak. Hop flavor ranges
                                from very weak to weak, created by noble-type hops.
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
                            <h2>Khmelnov Oq quyosh</h2>
                        </div>
                        <div class="col-md-4 text-end schedule">
                            <p> 4.8% </p>
                        </div>
                        <div class="col-md-12 event-card-content">
                            <p>
                                Perceived Malt Aroma and Flavor: In lighter styles, characteristics of pale malt are
                                present, ranging from weak to medium-weak. In darker styles, malt characteristics such
                                as cocoa, chocolate, caramel, toffee, or biscuit may be present, ranging from weak to
                                medium-weak. In darker styles, the astringency of roasted malt is acceptable if balanced
                                with malty sweetness.
                                Perceived Hop Aroma and Flavor: Ranges from weak to medium-strong.
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
    <h2>history in every sip</h2>
</section>
