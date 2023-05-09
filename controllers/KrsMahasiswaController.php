<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionHapusMahasiswa()
    {
        return $this->render('hapus-mahasiswa');
    }

}
