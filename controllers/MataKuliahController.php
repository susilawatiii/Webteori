<?php

namespace app\controllers;
use app\models\MataKuliah;
use yii\data\ActiveDataProvider;

class MataKuliahController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $query = MataKuliah::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]); 
        return $this->render('index', [
            'dataProvider' => $dataProvider]);
    }

}
