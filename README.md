Управление галереей в админки
=============

Это расширение работает с расширением **[yii2-images](https://github.com/CostaRico/yii2-images)**

Установка
------------

Предпочтительный способ установки этого расширения через [composer](http://getcomposer.org/download/).

Установить командой

	php composer.phar require --prefer-dist alex290/yii2-gallery "*"

или добавить

	"alex290/yii2-gallery": "*"


в секцию require вашего `composer.json` файла.


Использование
-----

	use alex290\gallery\Gallery;

запустить виджет перед полем загрузкой файла


	<?php if (!$model->isNewRecord): ?>

        <div class="row">
            <?= Gallery::widget(['modelsImages' => $model]) ?>  
        </div>

    <?php endif; ?>

Если в одну колонку до добавляем параметр 'typeGalley' => 'pic'

Получается

        <?= Gallery::widget(['modelsImages' => $model, 'typeGalley' => 'pic']) ?> 

и в конфиге `web.php` прописать

	'modules' => [
        'yii2gallery' => [
            'class' => 'alex290\gallery\Module',
            'layout' => false,
        ],  
    ],