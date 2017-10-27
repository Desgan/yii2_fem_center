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
        'css/style.css',
        'css/button.css',
        'css/button2.css',
        'css/component.css',
        'css/normalize.css',
        'css/search/component.css',
        'css/search/default.css',
        'http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic-ext',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300,400italic,700italic&subset=latin,cyrillic-ext',
    ];
    public $js = [
        'js/isotope.pkgd.min.js',
        'js/owl.carousel.min.js',
        'js/wow.min.js',
        'js/custom.js',
        'js/search/classie.js',
        'js/search/modernizr.custom.js',
        'js/search/uisearch.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
