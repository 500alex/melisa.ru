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
<body class="com_content view-category task- itemid-101 body__home">
<?php $this->beginBody() ?>

<div id="wrapper">
    <div class="wrapper-inner">
        <div class="top_container">


            <div id="header-row">
                <div class="row-container">
                    <div class="container">
                        <header>
                            <div class="row">

                                <div id="logo" class="span4">
                                    <a href="/">
                                        <img src="/images/logo.png" alt="Dance Puls"/>
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
                                    </script>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
            <div id="showcase-row">
                <div class="row-container">
                    <div class="container">
                        <div class="row">
                            <div class="moduletable   span12">
                                <div id="camera-slideshow" class="  camera_wrap pattern_1">
                                    <?php $sliders = \app\models\DanceSliders::find()->all(); ?>
                                    <?php foreach ($sliders as $slider){
                                        echo '<div class="camera-item" data-src="/images/slider/' . $slider->img . '" data-link="' . $slider->descrition . '" data-target="_self">
                                    </div>';
                                    } ?>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function(){
                                        jQuery('#camera-slideshow').camera({
                                            alignment			: "topCenter", //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
                                            autoAdvance				: true,	//true, false
                                            mobileAutoAdvance	: true, //true, false. Auto-advancing for mobile devices

                                            barDirection			: "leftToRight",	//'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
                                            barPosition				: "bottom",	//'bottom', 'left', 'top', 'right'
                                            cols							: 6,
                                            easing						: "swing",	//for the complete list http://jqueryui.com/demos/effect/easing.html
                                            mobileEasing			: "swing",	//leave empty if you want to display the same easing on mobile devices and on desktop etc.
                                            fx								: "simpleFade",
                                            mobileFx					: "simpleFade",		//leave empty if you want to display the same effect on mobile devices and on desktop etc.
                                            gridDifference		: 250,	//to make the grid blocks slower than the slices, this value must be smaller than transPeriod
                                            height						: "48.586572438162544169611307420495%",	//here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
                                            // imagePath					: 'images/',	//the path to the image folder (it serves for the blank.gif, when you want to display videos)
                                            hover							: true,	//true, false. Puase on state hover. Not available for mobile devices
                                            loader						: "none",	//pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
                                            loaderColor				: "#eeeeee",
                                            loaderBgColor			: "#222222",
                                            loaderOpacity			: .8,	//0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
                                            loaderPadding			: 2,	//how many empty pixels you want to display between the loader and its background
                                            loaderStroke			: 7,	//the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
                                            minHeight					: "200px",	//you can also leave it blank
                                            navigation				: false,	//true or false, to display or not the navigation buttons
                                            navigationHover		: false,	//if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be 	visible always
                                            mobileNavHover		: false,	//same as above, but only for mobile devices
                                            opacityOnGrid			: false,	//true, false. Decide to apply a fade effect to blocks and slices: if your slideshow is fullscreen or simply big, I recommend to set it false to have a smoother effect
                                            overlayer					: false,	//a layer on the images to prevent the users grab them simply by clicking the right button of their mouse (.camera_overlayer)
                                            pagination				: true,
                                            playPause					: false,	//true or false, to display or not the play/pause buttons
                                            pauseOnClick			: false,	//true, false. It stops the slideshow when you click the sliders.
                                            pieDiameter				: 38,
                                            piePosition				: "rightTop",	//'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
                                            portrait					: false, //true, false. Select true if you don't want that your images are cropped
                                            rows							: 4,
                                            slicedCols				: 6,	//if 0 the same value of cols
                                            slicedRows				: 4,	//if 0 the same value of rows
                                            // slideOn				: "",	//next, prev, random: decide if the transition effect will be applied to the current (prev) or the next slide
                                            thumbnails				: false,
                                            time							: 7000,	//milliseconds between the end of the sliding effect and the start of the nex one
                                            transPeriod				: 1500	//lenght of the sliding effect in milliseconds
                                            // onEndTransition		: function() {  },	//this callback is invoked when the transition effect ends
                                            // onLoaded					: function() {  },	//this callback is invoked when the image on a slide has completely loaded
                                            // onStartLoading		: function() {  },	//this callback is invoked when the image on a slide start loading
                                            // onStartTransition	: function() {  }	//this callback is invoked when the transition effect starts
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="feature-row">
            <div class="row-container">
                <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
                </div>
            </div>
        </div>


        <div id="content-row">
            <div class="row-container">
                <div class="container">
                    <div class="content-inner row">

                        <div id="component" class="span4">


                            <div id="system-message-container">
                                <div id="system-message">
                                </div>
                            </div>
                            <div class="page-category page-category__home">
                                <div class="page_header">
                                    <h3>
                                        <span class="item_title_part0">Some words about us</span
                                    </h3>
                                </div>
                                <div class="items-row cols-1 row-0 row-fluid">
                                    <div class="span12">
                                        <div class="item column-1">


                                            <div class="item_img img-intro img-intro__left">
                                                <img src="/images/home-1.jpg" alt=""/>
                                            </div>

                                            <div class="item_header">
                                                <h4 class="item_title">
                                                    <a href="<?= \yii\helpers\Url::to(['site/about']) ?>">
                                                        <span class="item_title_part0">Lorem ipsum dolor sit amet, csec tetuer adipi</span>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div class="item_introtext">
                                                <p>Lorem ipsum dolor sit amet, concr adipi scing.esent ves tibuum molstie lacuiirhs ean non ummy hen. dreriauriaselll lus. porta. Fusce suscipit</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="aside-right" class="span8">
                            <div class="row">
                                <aside>
                                    <div class="moduletable news  span8"><h3 class="moduleTitle ">Latest news</h3>
                                        <div class="mod-newsflash-adv mod-newsflash-adv__news">
                                            <?php
                                            $lastNews = \app\models\DanceNews::find()->limit(4)->all();
                                            ?>
                                            <div class="row">
                                                <?php
                                                /**
                                                 * @var $lastNew \app\models\DanceNews
                                                 */
                                                foreach ($lastNews as $lastNew){
                                                ?>
                                                <div class="span2 item item_num0 item__module  ">

                                                    <div class="item_content">
                                                        <div class="item_published">
                                                            <?=date('d.m.Y', $lastNew->time)?>
                                                        </div>

                                                        <h4 class="item_title item_title__news">
                                                            <span class="item_title_part0">
                                                                <?=$lastNew->name?>
                                                            </span> </h4>

                                                        <div class="item_introtext"><p>
                                                                <?=$lastNew->minidescription?>
                                                            </p>
                                                        </div>

                                                        <a class="btn btn-info readmore" href="<?=\yii\helpers\Url::to(['news/viewsite', 'id' => $lastNew->id])?>"><span>more</span></a></div>
                                                    <div class="clearfix"></div> </div>

                                                <?php
                                                }
                                                ?>

<!--                                                <div class="span2 item item_num3 item__module  lastItem">-->
<!---->
<!--                                                    <div class="item_content">-->
<!--                                                        <div class="item_published">-->
<!--                                                            25.09.2012 </div>-->
<!---->
<!--                                                        <h4 class="item_title item_title__news">-->
<!--                                                            <span class="item_title_part0">Aenean</span> <span class="item_title_part1">non</span> <span class="item_title_part2">ummy</span> <span class="item_title_part3">hendr.</span> </h4>-->
<!---->
<!--                                                        <div class="item_introtext"><p>Lorem ipsum dolor sit amet, conc ter adipi scing. Praesent vestibuum molsticuiirhs.</p>-->
<!--                                                        </div>-->
<!---->
<!--                                                        <a class="btn btn-info readmore" href="/index.php/latest-news/23-aenean-non-ummy-hendr"><span>more</span></a></div>-->
<!--                                                    <div class="clearfix"></div> </div>-->
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="push"></div>
    </div>
</div>
<div id="footer-wrapper">
    <div class="footer-wrapper-inner">


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
