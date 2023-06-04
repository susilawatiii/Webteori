<?php

namespace app\controllers;

use app\models\RekapNilai;
use yii\data\ActiveDataProvider;

class RekapNilaiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $dataProvider = new ActiveDataProvider([
            'query' => RekapNilai::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $rekapnilai = new Rekapnilai;
        $rekapnilai->id = 3;
        $rekapnilai->id_peserta = 14;
        $rekapnilai->target_penilaian = 80;
        $rekapnilai->skor = 60;
        if ($rekapnilai->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($rekapnilai>getError());
            die();
        }
    }

    public function actionUpdate($id = 'id')
    {
        $rekapnilai = Rekapnilai::findOne($id);
        $rekapnilai->id_peserta = 7;
        if ($rekapnilai->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($rekapnilai->getError());
            die();
        }
    }

    public function actionDelete($id)
    {
        $rekapnilai = Rekapnilai::findOne($id);
        if ($rekapnilai->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($rekapnilai->getError());
            die();
        }
    }
   
    }



