<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionHapusMahasiswa($nim)
    {
        return $this->render('hapus-mahasiswa');
    }

}
