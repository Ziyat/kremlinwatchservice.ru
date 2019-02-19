<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/font-awesome/css/font-awesome.css',
        'css/prettyPhoto.css',
        'css/style.css',

    ];
    public $js = [
//        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
//        'js/jquery.1.11.1.js',
        'js/SmoothScroll.js',
//        'js/jquery.prettyPhoto.js',
//        'js/jquery.isotope.js',
//        'js/jqBootstrapValidation.js',
//        'js/contact_me.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

class HeadAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        "js/modernizr.custom.js",
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}

class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js",
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js'
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => \yii\web\View::POS_HEAD
    ];
}
