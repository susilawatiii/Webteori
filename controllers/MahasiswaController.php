<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionResetNilai($nim)
    {
        return "<h1>mahasiswa / reset-nilai ? nim = 2". $nim ."</h1";
    }


}
