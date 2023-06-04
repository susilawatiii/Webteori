<?php

namespace app\controllers;

use app\models\Mahasiswa124;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa124Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa124::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa124 = new Mahasiswa124;
        $mahasiswa124->no_induk_mahasiswa = '60200121124-'.rand(100,999);
        $mahasiswa124->nama_mahasiswa = 'Susilawati';
        $mahasiswa124->kelas = 'A';
        $mahasiswa124->status = 'Baru';
        if ($mahasiswa124->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa124 = Mahasiswa124::findOne(['id' => $id]);
        if($mahasiswa124 !== null){
            $mahasiswa124->kelas = 'D';
            $mahasiswa124->status = 'Update';
            $mahasiswa124->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa124 = Mahasiswa124::findOne(['id' => $id]);
        if($mahasiswa124->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mahasiswa124 = Mahasiswa124::findOne($id);
        return $this->render('view', ['mahasiswa124' => $mahasiswa124]);
    }
}