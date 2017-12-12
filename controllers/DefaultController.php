<?php

namespace alex290\gallery\controllers;

use yii\web\Controller;
use alex290\gallery\models\Image;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        if (\Yii::$app->request->isAjax) {

            $dataPost = \Yii::$app->request->get();
            $idPist = $this->findModel($dataPost['id'], \yii\helpers\StringHelper::basename($dataPost['name']))->itemId;
            $model = $dataPost['name']::find()->where(['id' => $idPist])->one();
            foreach ($model->getImages() as $imag) {
                if ($imag->getPrimaryKey() == $dataPost['id']) {
                    $model->removeImage($imag);
                }
            }
        }
        return TRUE;
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
