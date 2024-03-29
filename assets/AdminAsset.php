<?php


namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin-assets';
    public $css = [
        "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback",
        "plugins/fontawesome-free/css/all.min.css",
        "plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
        "plugins/icheck-bootstrap/icheck-bootstrap.min.css",
        "dist/css/adminlte.min.css",
    ];
    public $js = [
//        "plugins/jquery/jquery.min.js",
        "plugins/bootstrap/js/bootstrap.bundle.min.js",
        "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "dist/js/adminlte.js",
        "plugins/jquery-mousewheel/jquery.mousewheel.js",
        "plugins/raphael/raphael.min.js",
        "plugins/jquery-mapael/jquery.mapael.min.js",
        "plugins/jquery-mapael/maps/usa_states.min.js",
        "plugins/chart.js/Chart.min.js",
        "dist/js/demo.js",
        "dist/js/pages/dashboard2.js",
        "ckeditor/ckeditor.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}