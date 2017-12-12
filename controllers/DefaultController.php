<?php

namespace alex290\gallery\controllers;

use yii\web\Controller;
use alex290\gallery\models\Image;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return 'fjhdgfdfghjg';
    }
    
    protected function findModel($id, $modelName)
    {
        if (($model = Image::find()->where(['id' => $id, 'modelName' => $modelName])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
