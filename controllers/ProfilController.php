<?php

namespace app\controllers;
use app\models\Profil124;
use yii\data\ActiveDataProvider;

class ProfilController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $dataProvider = new ActiveDataProvider([
            'query' => Profil124::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
