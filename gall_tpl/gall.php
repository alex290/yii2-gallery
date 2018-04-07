<?php
if ($type == 'pic') {
    $col = 'col-xs-12 col-sm-12 col-md-12 col-lg-12 item-gallery item-image';
} else {
    $col = 'col-xs-12 col-sm-6 col-md-3 col-lg-2 item-gallery item-image';
}
?>
<div class="<?= $col ?>" data="<?= $image->getPrimaryKey() ?>">
    <div class="item-del <?= $image->getPrimaryKey() ? '': 'hidden' ?>" id="<?= $image->getPrimaryKey() ?>" data-name="<?= $modelsName ?>"><i class="fa fa-trash fa-2x danger" aria-hidden="true"></i></div>
    <img src="/web/<?= $image->getPath('400x400'); ?>" class="img-responsive" alt="">
</div>