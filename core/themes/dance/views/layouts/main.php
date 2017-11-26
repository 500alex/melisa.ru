<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href='/css/bootstrap.css' type="text/css"/>
    <link rel="stylesheet" href='/css/default.css' type="text/css"/>
    <link rel="stylesheet" href='/css/template.css' type="text/css"/>
    <link rel="stylesheet" href='/css/touch.gallery.css' type="text/css"/>
    <link rel="stylesheet" href='/css/responsive.css' type="text/css"/>
    <link rel="stylesheet" href='/css/komento.css' type="text/css"/>
    <link rel="stylesheet" href='/css/camera.css' type="text/css"/>
    <link rel="stylesheet" href='/css/superfish.css' type="text/css"/>
    <link rel="stylesheet" href='/css/superfish-navbar.css' type="text/css"/>
    <link rel="stylesheet" href='/css/superfish-vertical.css' type="text/css"/>
    <script src='/js/mootools-core.js' type="text/javascript"></script>
    <script src='/js/core.js' type="text/javascript"></script>
    <script src='/js/caption.js' type="text/javascript"></script>
    <script src='/js/jquery.min.js' type="text/javascript"></script>
    <script src='/js/jquery.mobile.customized.min.js' type="text/javascript"></script>
    <script src='/js/jquery.easing.1.3.js' type="text/javascript"></script>
    <script src='/js/bootstrap.js' type="text/javascript"></script>
    <script src='/js/jquery.isotope.min.js' type="text/javascript"></script>
    <script src='/js/touch.gallery.js' type="text/javascript"></script>
    <script src='/js/scripts.js' type="text/javascript"></script>
    <script src='/js/camera.min.js' type="text/javascript"></script>
    <script src='/js/jquery.mobile.customized.min.js' type="text/javascript"></script>
    <script src='/js/jquery.easing.1.3.js' type="text/javascript"></script>
    <script src='/js/superfish.js' type="text/javascript"></script>
    <script src='/js/jquery.mobilemenu.js' type="text/javascript"></script>
    <script src='/js/jquery.hoverIntent.js' type="text/javascript"></script>
    <script src='/js/supersubs.js' type="text/javascript"></script>
    <script src='/js/sftouchscreen.js' type="text/javascript"></script>
    <script type="text/javascript">
        window.addEvent('load', function() {
            new JCaption('img.caption');
        });
        window.addEvent('domready', function() {
            $$('.hasTip').each(function(el) {
                var title = el.get('title');
                if (title) {
                    var parts = title.split('::', 2);
                    el.store('tip:title', parts[0]);
                    el.store('tip:text', parts[1]);
                }
            });
            var JTooltips = new Tips($$('.hasTip'), {"maxTitleChars": 50,"fixed": false});
        });
        jQuery.noConflict()
    </script>
    <link href='//fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="com_content view-category task- itemid-167 body__">
<?php $this->beginBody() ?>
<div id="wrapper">
    <div class="wrapper-inner">
        <div class="top_container">

            <!-- Top -->

            <!-- Header -->
            <div id="header-row">
                <div class="row-container">
                    <div class="container">
                        <header>
                            <div class="row">
                                <!-- Logo -->
                                <div id="logo" class="span4">
                                    <a href="/">
                                        <img src="/images/logo.png" alt="Dance Puls" />
                                    </a>
                                </div>
                                <div class="moduletable navigation  span8">
    <?php
    echo \yii\widgets\Menu::widget([
        'options' => ['class' => 'sf-menu'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About us', 'url' => ['/site/about'], 'items' => [
                ['label' => 'History', 'url' => ['/site/history']],
                ['label' => 'Faqs', 'url' => ['/site/faqs'], 'items' => [
                    ['label' => 'Testimonials', 'url' => ['/site/testimonials']],
                ]],
            ]],
            ['label' => 'Services', 'url' => ['/site/services']],
            ['label' => 'Teachers', 'url' => ['/site/teachers']],
            ['label' => 'News', 'url' => ['/site/news']],
            ['label' => 'Contacts', 'url' => ['/site/contacts']],
        ],
        'activeCssClass'=>'current active deeper parent',
    ]);
    ?>
                                    <script type="text/javascript">
                                        // initialise plugins
                                        jQuery(function(){
                                            jQuery('ul.sf-menu')

                                                .superfish({
                                                    hoverClass:    'sfHover',
                                                    pathClass:     'overideThisToUse',
                                                    pathLevels:    1,
                                                    delay:         500,
                                                    animation:     {opacity:'show', height:'show'},
                                                    speed:         'normal',
                                                    speedOut:      'fast',
                                                    autoArrows:    false,
                                                    disableHI:     false,
                                                    useClick:      0,
                                                    easing:        "swing",
                                                    onInit:        function(){},
                                                    onBeforeShow:  function(){},
                                                    onShow:        function(){},
                                                    onHide:        function(){},
                                                    onIdle:        function(){}
                                                });
                                        });

                                        jQuery(function(){
                                            jQuery('.sf-menu').mobileMenu({
                                                defaultText: 'Navigate to...',
                                                className: 'select-menu',
                                                subMenuClass: 'sub-menu'
                                            });
                                        })

                                        jQuery(function(){
                                            var ismobile = navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i)
                                            if(ismobile){
                                                jQuery('.sf-menu').sftouchscreen({});
                                            }
                                        })
                                    </script></div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>

            <!-- Navigation -->

            <!-- Showcase -->

        </div>

        <!-- Feature -->


        <!-- Maintop -->

        <!-- Main Content row -->
        <div id="content-row">
            <div class="row-container">
                <div class="container">


<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
        <?= $content ?>
    </div>
            </div>
        </div>

        <!-- Mainbottom -->

        <!-- Bottom -->
        <div id="push"></div>
    </div>
</div>

<div id="footer-wrapper">
    <div class="footer-wrapper-inner">
        <!-- Footer -->

        <!-- Copyright -->
        <div id="copyright-row">
            <div class="row-container">
                <div class="container">
                    <div class="row">

                        <div id="copyright" class="span6">
                            <a class="footer_logo" href="/">
                                <img src="/images/footer_logo.png" alt="Dance Puls"/>
                            </a>
                            <span class="year">2016</span> <span class="copy">&copy;</span> <a class="privacy_link" href="<?=\yii\helpers\Url::to(['/site/privacy-policy'])?>">Privacy Policy</a>
                        </div>
                        <div class="moduletable footer_links  span6"><div class="mod-menu">
                                <ul class="nav menu ">
                                    <li class="item-236">
                                        <a href="#">Support</a>
                                    </li>
                                    <li class="item-237">
                                        <a href="<?=\yii\helpers\Url::to(['/site/faqs'])?>">FAQs</a>
                                    </li>
                                    <li class="item-238">
                                        <a href="#">Sitemap</a>
                                    </li>
                                    <li class="item-239">
                                        <a href="#">Help</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="back-top">
    <a href="#"><span></span> </a>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
