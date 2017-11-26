<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/default.css',
        'css/template.css',
        'css/touch.gallery.css',
        'css/responsive.css',
        'css/komento.css',
        'css/camera.css',
        'css/superfish.css',
        'css/superfish-navbar.css',
        'css/superfish-vertical.css',
    ];
    public $js = [
    	'js/mootools-core.js',
    	'js/core.js',
    	'js/caption.js',
    	'js/jquery.min.js',
    	'js/jquery.mobile.customized.min.js',
    	'js/jquery.easing.1.3.js',
    	'js/bootstrap.js',
    	'js/jquery.isotope.min.js',
    	'js/touch.gallery.js',
    	'js/scripts.js',
    	'js/camera.min.js',
    	'js/jquery.mobile.customized.min.js',
    	'js/jquery.easing.1.3.js',
    	'js/superfish.js',
    	'js/jquery.mobilemenu.js',
    	'js/jquery.hoverIntent.js',
    	'js/supersubs.js',
    	'js/sftouchscreen.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
