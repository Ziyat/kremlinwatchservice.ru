<?php

/* @var $this yii\web\View */

$this->title = 'Кремлёвский часовой сервис | ремонт часов, диагностика часов, замена элементов питания часов, изготовление и замена стекол';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'ремонт часов в москве, диагностика часов в москве, замена элементов питания часов в москве'
]);
$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $this->title
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => '/img/kremlinwatchservice.jpg'
]);
$this->params['active'] = '';
?>
<section id="first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image">
                    <img src="/img/kws_images/kws_30.jpg" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <h4><a href="<?= \yii\helpers\Url::to('/site/services') ?>">РЕМОНТ ЧАСОВ</a></h4>
                        <p>Сервисный центр по ремонту и обслуживанию швейцарских часов.
                            Гарантийный Ремонт любых Часовых Механизмов.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="second-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <h4><a href="<?= \yii\helpers\Url::to('/site/services') ?>">ДИАГНОСТИКА ЧАСОВ</a></h4>
                        <p>Проверка точности, герметичности и восстановление в наручных часах с последующей регулировкой. Профилактический осмотр.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image">
                    <img src="/img/kws_images/kws_5.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image">
                    <img src="/img/kws_images/kws_7.jpg" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <h4><a href="<?= \yii\helpers\Url::to('/site/services') ?>">ЗАМЕНА ЭЛЕМЕНТОВ ПИТАНИЯ</a></h4>
                        <p>Быстрая замена батарейки в наручных часах. Оригинальные батарейки. Гарантия 24 месяца.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="second-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <h4><a href="<?= \yii\helpers\Url::to('/site/services') ?>">ИЗГОТОВЛЕНИЕ И ЗАМЕНА СТЕКОЛ</a></h4>
                        <p>Быстрая замена стекла наручных часов. Ремонт оригинальных сапфировых часовых стекол, изготавливаем стекла под заказ.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image">
                    <img src="/img/kws_images/kws_9.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image">
                    <img src="/img/kws_images/kws_1.jpg" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <h4><a href="<?= \yii\helpers\Url::to('/site/services') ?>">ПОДБОРКА РЕМЕШКА / УЛЬТРОЗВУКОВАЯ ЧИСТКА</a></h4>
                        <p>Подбор и продажа ремешка или браслета для наручных часов. Ультразвуковая чистка, полировка браслетов и корпуса часов.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="second-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="caption text-center">
                        <h4><a href="<?= \yii\helpers\Url::to('/site/services') ?>">РЕСТАВРАЦИЯ</a></h4>
                        <p>Наручных часов: настенных, напольных, карманных, каретных, каминных, антикварных, и современных с любым уровнем сложности механизма.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image">
                    <img src="/img/kws_images/kws_38.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<div id="contact-section">
    <div class="container">
        <div class="section-title center">
            <h2>Контакты</h2>
            <hr>
        </div>
        <div class="col-md-4">
            <!-- <h4>Контактная информация</h4> -->
            <div class="space"></div>
            <p><i class="fa fa-map-marker"></i>г. Москва, Никольская улица 17 строение 2</p>
            <div class="space"></div>
            <p><i class="fa fa-envelope-o"></i>didiamonds@mail.ru</p>
            <div class="space"></div>
            <p><i class="fa fa-phone"></i>
                8 (495) 799 07 07
            </p>
            <div class="space"></div>
            <p><i class="fa fa-phone"></i>
                8 (499) 344 04 00
            </p>
        </div>
        <div class="col-md-8">
            <iframe src="https://yandex.ru/map-widget/v1/-/CBB1ZXH8sD" width="100%" height="300" frameborder="0"></iframe>
        </div>
    </div>
</div>
