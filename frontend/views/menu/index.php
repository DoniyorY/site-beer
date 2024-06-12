<?php
$this->title = 'Beer Restaurant Menu';
$baseUrl = Yii::$app->request->baseUrl;
$lang=Yii::$app->language;
use yii\helpers\Url;
use yii\helpers\Html;

?>
<section class="intro menu-breadcrumbs">
    <div style="background-image: url('<?= "$baseUrl/images/menu-breadcrumbs.png" ?>'); height: 60vh; opacity: .6"></div>
    <div class="title">
        <h1><?= $this->title ?></h1>
        <h3 style="color: white;"><span class="yellow">A Culinary Journey</span> with Craft Brews</h3>
    </div>
</section>
<section class="main-menu">
    <div class="container">
        <ul class="nav owl-carousel owl-carousel2 nav-pills justify-content-between mb-3" id="pills-tab owl-carousel" role="tablist">
            <?php $i=0; foreach ($category as $item):?>
            <li class="nav-item item" role="presentation">
                <button class="nav-link <?=($i==0)?'active':''?>" id="<?=$item->id?>-tab" data-bs-toggle="pill" data-bs-target="#<?=$item->id?>" type="button" role="tab" aria-controls="<?=$item->id?>" aria-selected="true"><?=$item->{"name_$lang"}?></button>
            </li>
            <?php $i++; endforeach;?>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="menu-item">
                    <div class="row">
                        <div class="col-6">
                            <div class="menu-item-title">
                                <h2>NUTS MIX</h2>
                            </div>
                        </div>
                        <div class="col-md-3 text-end d-none d-md-block">
                            <button class="btn btn-allergen"><img src="<?="$baseUrl/images/gluten-free.png"?>" alt="">
                                <img src="<?="$baseUrl/images/lactose-free.png"?>" alt="">
                                <img src="<?="$baseUrl/images/contain-the-allergen.png"?>" alt="">
                                <img src="<?="$baseUrl/images/summer-kitchen.png"?>" alt=""></button>
                        </div>
                        <div class="col-md-3 col-6 text-center">
                            <h3>100 000 uzs</h3>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Glazed peanuts, soft shell almonds and local specialty “Dona Shurak” salt-baked apricot hearts.(150 g)
                            </p>
                        </div>
                        <div class="col-md-3 col-12 text-end d-block d-md-none">
                            <button class="btn w-100 btn-allergen">
                                <img src="<?="$baseUrl/images/gluten-free.png"?>" alt="">
                                <img src="<?="$baseUrl/images/lactose-free.png"?>" alt="">
                                <img src="<?="$baseUrl/images/contain-the-allergen.png"?>" alt="">
                                <img src="<?="$baseUrl/images/summer-kitchen.png"?>" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="row">
                        <div class="col-6">
                            <div class="menu-item-title">
                                <h2>NUTS MIX</h2>
                            </div>
                        </div>
                        <div class="col-md-3 text-end d-none d-md-block">
                            <button class="btn btn-allergen">Allergen</button>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p>
                                        Glazed peanuts, soft shell almonds and local specialty “Dona Shurak” salt-baked apricot hearts.(150 g)
                                    </p>
                                </div>
                                <div class="col-md-6 d-none d-md-block"></div>
                                <div class="col-6 text-center menu-addition">
                                    <p>Company set</p>
                                    <p>Mini set</p>
                                </div>
                                <div class="col-md-3 d-none d-md-block"></div>
                                <div class="col-md-3 col-6 text-center">
                                    <h3>100 000 uzs</h3>
                                    <h3>150 000 uzs</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-12 text-end d-block d-md-none">
                            <button class="btn w-100 btn-allergen">Allergen</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="{{category_id}}" role="tabpanel" aria-labelledby="{{category_id}}-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
        </div>
    </div>

</section>

