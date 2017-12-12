<?php

namespace alex290\gallery;

/**
 * This is just an example.
 */
class Gallery extends \yii\base\Widget {

    public $modelsImages;

    public function run() {

        $tree = '';
        foreach ($this->modelsImages as $image) {
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
