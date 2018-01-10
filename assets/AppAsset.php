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
        'css/photobox.css',
        'css/bluer.css',
        'css/paraxify.css',
        //img
      //  'css/style_common.css',
      //  'css/style_img.css',
        //circle
        'css/style_block_circle.css',
        'css/common.css',


        'http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic-ext',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300,400italic,700italic&subset=latin,cyrillic-ext',
    ];
    public $js = [
        'js/isotope.pkgd.min.js',
        'js/owl.carousel.min.js',
        'js/wow.min.js',
       // 'js/modernizr.custom.69142.js'
        'js/modernizr.custom.79639.js',
        'js/search/classie.js',
        'js/search/modernizr.custom.js',
        'js/search/uisearch.js',
        'js/jquery.photobox.js',
        'js/bluer.js',
        'js/paraxify.min.js',
        'js/custom.js',
        'js/typed.min.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
