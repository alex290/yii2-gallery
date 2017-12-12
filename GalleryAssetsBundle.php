<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace alex290\gallery;

use yii\web\AssetBundle;

/**
 * Description of GalleryAssetsBundle
 *
 * @author art
 */
class GalleryAssetsBundle extends AssetBundle {
    
    public $sourcePath  = '@vendor/alex290/yii2-gallery/assets';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/gallery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    
}
