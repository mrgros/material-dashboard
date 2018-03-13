<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\material;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@vendor/creativetimofficial/material-dashboard/assets';
    public $css = [
        'css/bootstrap.min.css',
        'css/material-dashboard.css',
        'css/demo.css',
        'http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons',
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/bootstrap.min.js',
        'js/material.min.js',
        'js/chartist.min.js',
        'js/arrive.min.js',
        'js/perfect-scrollbar.jquery.min.js',
        'js/bootstrap-notify.js',
        'js/material-dashboard.js',
        'js/demo.js',
    ];
}
