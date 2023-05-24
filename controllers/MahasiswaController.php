<?php

namespace app\controllers;

use app\models\Mahasiswa124;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa124::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
