<?php

/** @var yii\web\View $this */

/** @var string $content */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use frontend\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$lang = Yii::$app->language;
AppAsset::register($this);
$baseUrl = Yii::$app->request->baseUrl;
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.svg')]);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap"
          rel="stylesheet">
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<nav class="navigation top">
    <a href="<?= Yii::$app->homeUrl ?>" id="brand">
        <img src="<?= "$baseUrl/images/logo.png" ?>"
             alt="Bierfabriek Amsterdam - Brewery &amp; Restaurant">
    </a>
    <ul id="menu-desktop-menu-en">
        <li class="menu-item our-menu"><a
                    href="<?= Url::to(['menu/index']) ?>"><?= Yii::$app->params['Our Menu'][$lang] ?></a></li>
        <li class="menu-item  tap-tables"><a
                    href="<?= Url::to(['site/events']) ?>"><?= Yii::$app->params['Events'][$lang] ?></a></li>
        <li class="menu-item  groups"><a
                    href="<?= Url::to(['site/beers']) ?>"><?= Yii::$app->params['Beers'][$lang] ?></a></li>
        <li class="menu-item  contact-visit"><a
                    href="#contacts"><?= Yii::$app->params['Contact'][$lang] ?></a></li>
        <?= MultiLanguageWidget::widget([
            'addCurrentLang' => true, // add current lang
            'calling_controller' => $this->context,
            'image_type' => 'classic', // classic or rounded
            'link_home' => true, // true or false
            'widget_type' => 'classic', // classic or selector
            'width' => '28'
        ]); ?>
    </ul>
</nav>
<a href="#ft-open" class="book-button">
    Reserveer</a>
<a class="main-menu-trigger" data-bs-toggle="collapse" href="#mobile-header-collapse" role="button"
   aria-expanded="false" aria-controls="mobile-header-collapse">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</a>
<a href="tel:<?= Yii::$app->params['adminPhone'] ?>" class="mobile-route">
    <svg width="19px" height="19px" viewBox="0 0 19 19" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M18.9554296,14.964356 C18.9956151,15.2722263 18.9017942,15.5399111 18.6743606,15.7674104 L16.0042047,18.4173915 C15.8837466,18.5512339 15.7265146,18.6650983 15.5324431,18.7586896 C15.3383716,18.8524121 15.147679,18.9126412 14.9603653,18.9393768 C14.946981,18.9393768 14.9067299,18.9428213 14.8397759,18.9495134 C14.7729531,18.9561727 14.6859555,18.9595844 14.5788816,18.9595844 C14.3245155,18.9595844 13.9129173,18.9160856 13.3440871,18.8290553 C12.7752569,18.7420249 12.0793092,18.5278443 11.2562441,18.1866118 C10.4329821,17.8453136 9.4994642,17.3333009 8.4555263,16.6507702 C7.4115884,15.9682724 6.30066369,15.03131 5.12285059,13.8400799 C4.1859538,12.9165673 3.40966789,12.0332075 2.79399286,11.1900332 C2.17831783,10.3467933 1.68310096,9.56716133 1.30834225,8.8511045 C0.933550726,8.13504767 0.65248169,7.48591204 0.465102333,6.90369761 C0.277722976,6.32148317 0.150572698,5.81957418 0.0836514988,5.39797063 C0.0167302998,4.97636707 -0.0100381799,4.64510714 0.00334605995,4.40419082 C0.0167302998,4.16327451 0.0234224197,4.02943211 0.0234224197,4.00266363 C0.0501908993,3.81528427 0.110419978,3.62455885 0.204109657,3.43048738 C0.297799336,3.2364159 0.411565374,3.07915108 0.545407772,2.95869292 L3.21556361,0.288537084 C3.40294297,0.101157727 3.61709081,0.00746804836 3.85800712,0.00746804836 C4.03200224,0.00746804836 4.185921,0.0576589476 4.3197634,0.158040746 C4.45360579,0.258422545 4.56737183,0.382226763 4.66106151,0.529453401 L6.809232,4.60495442 C6.92969016,4.81910226 6.96315076,5.05332645 6.9096138,5.30762701 C6.85607684,5.56192757 6.7423108,5.7760754 6.56831568,5.95007052 L5.58457406,6.93381215 C5.55780558,6.96058063 5.53438316,7.0040794 5.5143068,7.06430848 C5.49423044,7.12453756 5.48419226,7.17472846 5.48419226,7.21488118 C5.53772922,7.49595022 5.65818738,7.81717197 5.84556673,8.17854645 C6.00617761,8.4997682 6.25378605,8.89125722 6.58839204,9.35301349 C6.92299804,9.81476976 7.39813855,10.3467605 8.01381358,10.9490513 C8.61610437,11.5647919 9.15147396,12.0432129 9.61992236,12.3845766 C10.0882723,12.7257435 10.4798926,12.9767964 10.7944222,13.1374073 C11.1089518,13.2980182 11.3498682,13.3950539 11.5171383,13.4284161 L11.7680272,13.4786398 C11.7947957,13.4786398 11.8383929,13.4685688 11.8985564,13.4485253 C11.9587855,13.4284161 12.0022842,13.4050265 12.0290855,13.3782252 L13.1734052,12.2137963 C13.4144528,11.9996813 13.6953906,11.8926074 14.0166451,11.8926074 C14.2442428,11.8926074 14.4248316,11.9327273 14.558674,12.0130655 L14.5787176,12.0130655 L18.4534222,14.3017705 C18.7345897,14.4758969 18.9018599,14.6966712 18.9554296,14.964356 Z"
                  id="Path" fill="#FFFFFF" fill-rule="nonzero"></path>
        </g>
    </svg>
</a>
<div class="collapse" id="mobile-header-collapse" style=" position:absolute;">
    <nav class="navigation main">
        <div class="overlay"></div>
        <div class="contain">
            <ul class="lang-switcher">
                <li class="lang-item lang-item-2 lang-item-nl lang-item-first">
                    <a lang="nl-NL" hreflang="nl-NL" href="#">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAY1BMVEX/AAD8AADzAADqAAD/fYz+dYT6aHr7XG36VGb6R1f4L0H/ECz+mKXw8fH9/f36+vr19vbW1tbS0tIAG493n89cjcZNgsA/eLkzcbUpaLAcYKwAAFEAA4ANU6UAADsAAHgAAGcSgiW+AAAAS0lEQVR4AQXBiQ3CQBAAMc/dConQf688SoIdBIIyQiR9R0tCuM2rNxHpMqsDIWiBEE4NgnBiHhVJcs48P0uSjXsPl4hLmH2EHzb4A7DPDGppZMSwAAAAAElFTkSuQmCC"
                             alt="Nederlands" width="16" height="11" style="width: 16px; height: 11px;">
                    </a>
                </li>
            </ul>
            <ul id="menu-mobiel-engels">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5621 tap-tables">
                    <a href="<?= Yii::$app->homeUrl ?>"> Home </a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5621 tap-tables">
                    <a href="<?= Url::to(['menu/index']) ?>"> Our Menu</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5621 tap-tables">
                    <a href="<?= Url::to(['site/events']) ?>"> Events</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5621 tap-tables">
                    <a href="<?= Url::to(['site/beers']) ?>"> Beers</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5621 tap-tables">
                    <a href="#contacts"> Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<?= $content ?>
<footer id="contacts">
    <div class="socialmedia">
        <a href="<?= Yii::$app->params['instagram_link'] ?>" target="_blank" class="instagram"><img
                    src="<?= "$baseUrl/images/icon-instagram.svg" ?>"
                    alt="Instagram"></a>
        <a href="<?= Yii::$app->params['facebook_link'] ?>" target="_blank" class="facebook"><img
                    src="<?= "$baseUrl/images/icon-facebook.svg" ?>"
                    alt="Facebook"></a>
        <a href="mailto:<?= Yii::$app->params['adminEmail'] ?>" target="_blank" class="mail"><img
                    src="<?= "$baseUrl/images/icon-mail.svg" ?>"
                    alt="Email"></a>
    </div>
    <div class="contain container">
        <nav class="navigation footer">
            <ul id="menu-footer-eng">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2722 current_page_item menu-item-has-children menu-item-4000 active bierfabriek active">
                    <a href="<?= Yii::$app->homeUrl ?>" aria-current="page"><?= Yii::$app->params['Home'][$lang] ?></a>
                    <ul class="sub-menu">
                        <li class="menu-item our-menu mt-5"><a
                                    href="<?= Url::to(['menu/index']) ?>"><?= Yii::$app->params['Our Menu'][$lang] ?></a>
                        </li>
                        <li class="menu-item brewery"><a
                                    href="<?= Url::to(['site/events']) ?>"><?= Yii::$app->params['Events'][$lang] ?></a>
                        </li>
                        <li class="menu-item our-beers"><a href="<?= Url::to(['site/beers']) ?>">
                                <?= Yii::$app->params['Beers'][$lang] ?></a></li>
                        <li class="menu-item tap-tables"><a
                                    href="#contacts"><?= Yii::$app->params['Contact'][$lang] ?></a>
                        </li>

                        <li class="menu-item vote-for-us">
                            <h3><?= Yii::$app->params['VOTE FOR US'][$lang] ?></h3>
                            <a href="https://untappd.com/Khmelnov" class="footer-logo" target="_blank">
                                UNTAPPD
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6802 information">
                    <a href="#"><?= Yii::$app->params['Information'][$lang] ?></a>
                    <ul class="sub-menu">
                        <li class="menu-item mt-5 menu-item-type-post_type menu-item-object-page menu-item-6809 contact-visit">
                            <a href="#contacts"><?= Yii::$app->params['Contact &amp; visit'][$lang] ?></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6805 privacy"><a
                                    href="#"><?= Yii::$app->params['Privacy'][$lang] ?></a></li>
                    </ul>
                </li>
                <li class="address">
                    <p>
                        <a href="#"><?= Yii::$app->params['Address'][$lang] ?></a><br>
                        <br>
                        <?= Yii::$app->params['Rowing canal'][$lang] ?><br>
                        <?= Yii::$app->params['Samarkand'][$lang] ?><br>
                        <?= Yii::$app->params['Uzbekistan'][$lang] ?><br>
                        <?= Yii::$app->params['tel:'][$lang] ?> <?= Yii::$app->params['adminPhone'] ?><br>
                        <a href="mailto:<?= Yii::$app->params['adminEmail'] ?>"><?= Yii::$app->params['adminEmail'] ?></a>
                    </p>
                </li>
                <li class="times">
                    <h4><?= Yii::$app->params['Opening hours'][$lang] ?></h4>
                    <?= Yii::$app->params['footer_schedule'][$lang] ?>
                    <section class="agenda-soon"></section>
                    <section class="info-blocks">
                        <div class="container"></div>
                    </section>
                </li>
            </ul>
        </nav>
    </div>
    <p class="developed-by">Powered by:
        <a href="https://silkroad-samarkand.com" title="SilkRoad-Samarkand" target="_blank">SilkRoad Samarkand</a>
    </p>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
