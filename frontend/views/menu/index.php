<?php
$this->title = 'Beer Restaurant Menu';
$baseUrl = Yii::$app->request->baseUrl;
$lang = Yii::$app->language;

use common\models\Connector;
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
        <ul class="nav owl-carousel owl-carousel2 nav-pills justify-content-between mb-3" id="pills-tab owl-carousel"
            role="tablist">
            <?php $i = 0;
            foreach ($category as $item): ?>
                <li class="nav-item item" role="presentation">
                    <button class="nav-link <?= ($i == 0) ? 'active' : '' ?>" id="<?= $item->id ?>-tab"
                            data-bs-toggle="pill" data-bs-target="#<?= $item->id ?>" type="button" role="tab"
                            aria-controls="<?= $item->id ?>" aria-selected="true"><?= $item->{"name_$lang"} ?></button>
                </li>
                <?php $i++; endforeach; ?>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <?php $i = 0;
            foreach ($category as $item): ?>
                <div class="tab-pane fade <?= ($i === 0) ? 'show active' : '' ?>" id="<?= $item->id ?>" role="tabpanel"
                     aria-labelledby="<?= $item->id ?>-tab"
                     tabindex="0">
                    <?php $menu = \common\models\Menu::findAll(['category_id' => $item->id]);
                    foreach ($menu as $m): $addtional = \common\models\MenuAdditional::findAll(['menu_id' => $m->id]); ?>
                        <?php if ($addtional): ?>
                            <div class="menu-item">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="menu-item-title">
                                            <h2><?= $m->{"title_$lang"} ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-end d-none d-md-block">
                                        <?php $imgs = Connector::findAll(['menu_id' => $m->id]);
                                        if ($imgs): ?>
                                            <button class="btn btn-allergen">
                                                <?php foreach ($imgs as $img): ?>
                                                    <img src="<?= "$baseUrl/uploads/allergens/{$img->allergen->logo}" ?>"
                                                         alt="">
                                                <?php endforeach; ?>
                                            </button>
                                        <?php else: ?>
                                            <button class="btn btn-allergen">Allergen</button>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <p>
                                                    <?= $m->{"desc_$lang"} ?>
                                                </p>
                                            </div>
                                            <?php
                                            if ($addtional): ?>
                                                <div class="col-md-6 d-none d-md-block"></div>
                                                <div class="col-6 text-center menu-addition">
                                                    <?php foreach ($addtional as $add): ?>
                                                        <p><?= $add->{"name_$lang"} ?> <span style="font-size: 24px;">(<?=$add->weight?>g)</span></p>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="col-md-3 d-none d-md-block"></div>
                                                <div class="col-md-3 col-6 text-end">
                                                    <?php foreach ($addtional as $add): ?>
                                                        <h3><?= Yii::$app->formatter->asDecimal($add->price, 0) ?>
                                                            uzs</h3>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-12 text-end d-block d-md-none">
                                        <?php $imgs = Connector::findAll(['menu_id' => $m->id]);
                                        if ($imgs): ?>
                                            <button class="btn btn-allergen w-100">
                                                <?php foreach ($imgs as $img): ?>
                                                    <img src="<?= "$baseUrl/uploads/allergens/{$img->allergen->logo}" ?>"
                                                         alt="">
                                                <?php endforeach; ?>
                                            </button>
                                        <?php else: ?>
                                            <button class="btn btn-allergen">Allergen</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="menu-item">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="menu-item-title">
                                            <h2><?= $m->{"title_$lang"} ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-end d-none d-md-block">
                                        <button class="btn btn-allergen">
                                            <?php $imgs = Connector::findAll(['menu_id' => $m->id]);
                                            if ($imgs): ?>
                                                <?php foreach ($imgs as $img): ?>
                                                    <img src="<?= "$baseUrl/uploads/allergens/{$img->allergen->logo}" ?>"
                                                         alt="">
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <button class="btn btn-allergen">Allergen</button>
                                            <?php endif; ?>
                                        </button>
                                    </div>
                                    <div class="col-md-3 col-6 text-end">
                                        <h3 style="margin-right: 15px;"><?= Yii::$app->formatter->asDecimal($m->price, 0) ?> uzs</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <?= $m->{"desc_$lang"} ?>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-12 text-end d-block d-md-none">
                                        <button class="btn w-100 btn-allergen">
                                            <?php $imgs = Connector::findAll(['menu_id' => $m->id]);
                                            if ($imgs): ?>
                                                <?php foreach ($imgs as $img): ?>
                                                    <img src="<?= "$baseUrl/uploads/allergens/{$img->allergen->logo}" ?>"
                                                         alt="">
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <button class="btn btn-allergen">Allergen</button>
                                            <?php endif; ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php $i++; endforeach; ?>
        </div>
    </div>

</section>

