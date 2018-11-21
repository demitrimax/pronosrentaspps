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
        'css/site.css',
        //<!-- RS5.0 Main Stylesheet -->
        'freetheme/plugins/revo-slider/css/settings.css',
        //<!-- RS5.0 Layers and Navigation Styles -->
        'freetheme/plugins/revo-slider/css/layers.css',
        'freetheme/plugins/revo-slider/css/navigation.css',
        //<!-- REVOLUTION STYLE SHEETS -->
        'freetheme/plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'freetheme/plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css',
        'freetheme/plugins/revo-slider/css/settings.css',
        'freetheme/plugins/revo-slider/css/layers.css',
        'freetheme/plugins/revo-slider/css/navigation.css',
        //<!-- Themefisher Icon font -->
        'freetheme/plugins/themefisher-font/style.css',
        //<!-- bootstrap.min css -->
        'freetheme/plugins/bootstrap/css/bootstrap.min.css',
        //<!-- Lightbox.min css -->
        'freetheme/plugins/lightbox2/dist/css/lightbox.min.css',
        //<!-- Slick Carousel -->
        'freetheme/plugins/slick-carousel/slick/slick.css',
        'freetheme/plugins/slick-carousel/slick/slick-theme.css',
        //<!-- Main Stylesheet -->
        'freetheme/css/style.css',
        //<!-- Colors -->
        'freetheme/css/colors/green.css',
        'freetheme/css/colors/red.css', 
        'freetheme/css/colors/blue.css', 
        'freetheme/css/colors/light-blue.css', 
        'freetheme/css/colors/yellow.css', 
        'freetheme/css/colors/light-green.css', 
    ];
    public $js = [
        //<!-- Main jQuery -->
    'freetheme/plugins/jquery/dist/jquery.min.js',
    //<!-- Bootstrap 3.1 -->
    'freetheme/plugins/bootstrap/js/bootstrap.min.js',
    //<!-- Parallax -->
   'freetheme/plugins/parallax/jquery.parallax-1.1.3.js',
    //<!-- lightbox -->
    'freetheme/plugins/lightbox2/dist/js/lightbox.min.js',
    //<!-- slick Carousel -->
    'freetheme/plugins/slick-carousel/slick/slick.min.js', 
    //<!-- Portfolio Filtering -->
    'freetheme/plugins/mixitup/dist/mixitup.min.js',
    //<!-- Smooth Scroll js -->
    'freetheme/plugins/smooth-scroll/dist/js/smooth-scroll.min.js',

   'freetheme/plugins/revo-slider/js/jquery.themepunch.tools.min.js',
   'freetheme/plugins/revo-slider/js/jquery.themepunch.revolution.min.js',
    //<!-- Custom js -->
    'freetheme/js/script.js',

    //  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    //(Load Extensions only on Local File Systems ! 
    //The following part can be removed on Server for On Demand Loading) --> 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.actions.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.migration.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js', 
    'freetheme/plugins/revo-slider/js/extensions/revolution.extension.video.min.js', 
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
