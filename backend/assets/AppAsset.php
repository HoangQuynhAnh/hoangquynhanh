<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/index.css',
        'css/bootstrap.min.css',
         'public/css/bootstrap.min.css',
        'public/css/font-awesome.min.css',
        'public/css/ionicons.min.css',
        'public/css/ionicons.min.css',
        'public/css/AdminLTE1.css',
        'public/css/skins.min.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery-3.2.1.min.js',
                'public/js/jquery-2.2.3.min.js',
        'public/js/jquery-ui.min.js',
        'public/js/loader.js',
    'public/ckeditor/ckeditor.js',
    'public/js/bootstrap.js',
    'public/js/app.min.js',
    //'tinymce/jquery.tinymce.min.js',
    'tinymce/tinymce.min.js',
    'public/js/main.js',
    'tinymce/plugin.min.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
