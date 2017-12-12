<?php

namespace alex290\gallery;

use alex290\gallery\GalleryAssetsBundle;



/**
 * This is just an example.
 */
class Gallery extends \yii\base\Widget {

    public $modelsImages;

    public function run() {
        GalleryAssetsBundle::register($this->view);
        $tree = '';
        foreach ($this->modelsImages->getImages() as $image) {
            $tree .= $this->catToTemplate($image);
        }


        return $tree;
    }

    protected function catToTemplate($image) {
        ob_start();
        include __DIR__ . '/gall_tpl/gall.php';
        return ob_get_clean();
    }

}
