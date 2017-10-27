<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.08.2017
 * Time: 22:56
 */

namespace app\assets;


use yii\web\AssetBundle;

class ltAppAsset extends AssetBundle
{
    public  $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [

        'js/vendor/html5shiv.js',
        '//html5shiv.googlecode.com/svn/trunk/html5.js',

    ];
    public $jsOptions = [
        'condition' =>'lte IE9',
        'position'=>\yii\web\View::POS_HEAD,

    ];

}