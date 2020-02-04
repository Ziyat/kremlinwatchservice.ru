<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\assets\HeadAppAsset;
use app\assets\LtAppAsset;
use app\widgets\Alert;
use yii\helpers\Html;

AppAsset::register($this);
HeadAppAsset::register($this);
LtAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300;subset=cyrillic' rel='stylesheet' type='text/css'>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N99LG9S');</script>
    <!-- End Google Tag Manager -->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N99LG9S"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="<?= \yii\helpers\Url::to('/') ?>">Главная</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?= isset($this->params['active']) && $this->params['active'] == 'dictionary' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/dictionary') ?>" class="page-scroll">Cловарь Часовщика</a></li>
                <li <?= isset($this->params['active']) && $this->params['active'] == 'price' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/price') ?>" class="page-scroll">Стоимость Ремонта</a></li>
                <li <?= isset($this->params['active']) && $this->params['active'] == 'services' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/services') ?>" class="page-scroll">Услуги Сервиса</a></li>
                <li <?= isset($this->params['active']) && $this->params['active'] == 'contact' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/contact') ?>" class="page-scroll">Контакты</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header  name="home">
    <div class="container">
        <div class="row intro-text d-flex">
            <div class="col-md-4 intro-text-left d-flex align-items-center">
                <h3>Кремлёвский часовой<br>сервис</h3>
            </div>
            <div class="col-md-4 intro-text-center">
                <img src="/img/Gerb-wt.png" style="max-width: 180px; margin: 15px 0">
                <br>
                <a href="<?= \yii\helpers\Url::to('/contact') ?>" class="btn btn-default btn-lg page-scroll">Оставить заявку</a>
                <br>
                <br>
                <p class="phone">
                    <a target="_blank" href="tel:88007007959" class="phones">8 800 700 79 59</a> | <a target="_blank" href="https://wa.me/79037990707" class="phones">+7 903 799 07 07</a></p>
                <p>Никольская, 10, БЦ Никольская Плаза <br> Этаж второй.
                </p>
            </div>
            <div class="col-md-4 intro-text-right d-flex align-items-center">
                <h3>Авторизованный <br> сервисный <br> центр</h3>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
        <!-- <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> </div> -->
</header>
        <div class="container">
            <?= Alert::widget() ?>
        </div>
        <?= $content ?>

<div id="social-section">
    <div class="container">
        <div class="social">
            <ul>
                <li><a href="https://vk.com/public167452355"><i class="fa fa-vk"></i></a></li>
                <li><a href="https://www.instagram.com/kremlinwatchservice"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <p>Copyright &copy; 2017 | kremlinwatchservice.ru</p>
    </div>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50956268 = new Ya.Metrika2({
                    id:50956268,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");


</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50956268" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</div>
<?php $this->endBody() ?>

<!-- PhoneTrack counter -->
<script type="text/javascript">
    (function(w, d, e, h) {
        var jsHost = (("https:" == w.location.protocol)? "https://": "http://") + h,
            m = d.cookie.match(/(?:^|;)\s*_pt_uid=([^;]*)/), u = (m? decodeURIComponent(m[1]): ""),
            s = d.createElement(e); s.async = 1; s.src = jsHost+"/api/shoko/client.js?cid=466046&uid="+u+"&src=";
        if(m = d.cookie.match(/(?:^|;)\s*_pt_source=([^;]*)/)) {s.src += decodeURIComponent(m[1])}
        else if(m = w.location.search.match(/(?:\?|&)utm_source=([^&]*)/i)) {s.src += decodeURIComponent(m[1])}
        else if(d.referrer) {var r = d.referrer.replace(/^[a-z]+:\/\/([^\/]+).*$/, "$1");
            if (r && r != w.location.host) {s.src += decodeURIComponent(r)}}
        if(typeof w.replacePhoneNumbers === "undefined") {d.head.appendChild(s)}
    })(window, document, "script", "services.completo.ru");
</script>
<!--// PhoneTrack counter -->

</body>
</html>
<?php $this->endPage() ?>

<?php

$script = <<<JS
$('.phones').on('click', function(){
    ym(50956268, 'reachGoal', 'telClick');
    gtag('event', 'telClick');
});
JS;

$this->registerJs($script);

