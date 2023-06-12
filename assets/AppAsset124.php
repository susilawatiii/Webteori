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
class AppAsset124 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template124/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css',
        'template124/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        'template124/lib/owlcarousel/assets/owl.carousel.min.css',
        'template124/css/bootstrap.min.css',
        'template124/css/style.css',

    ];
    public $js = [
        
        'template124/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
        'template124/https://code.jquery.com/jquery-3.4.1.min.js',
        'template124/lib/easing/easing.min.js',
        'template124/lib/easing/easing.js',
        'template124/lib/waypoints/waypoints.min.js',
        'template124/lib/owlcarousel/owl.carousel.min.js',
        'template124/js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
