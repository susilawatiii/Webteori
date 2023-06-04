<?php

namespace app\controllers;

use app\models\Sekolah;
use yii\data\ActiveDataProvider;

class SekolahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $dataProvider = new ActiveDataProvider([
            'query' => Sekolah::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
