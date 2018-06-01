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
class CustomAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'custom/plugins/font-awesome/css/font-awesome.min.css',
        'custom/dist/css/adminlte.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',

    ];
    public $js = [
        'custom/plugins/jquery/jquery.min.js',
        'custom/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'custom/dist/js/adminlte.js',
        'custom/dist/js/demo.js',
        'custom/plugins/sparkline/jquery.sparkline.min.js',
        'custom/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'custom/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'custom/plugins/slimScroll/jquery.slimscroll.min.js',
        'custom/plugins/chartjs-old/Chart.min.js',
        'custom/dist/js/pages/dashboard2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
    ];
}
