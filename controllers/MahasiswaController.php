<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionBlokAkun($nim)
    {
        return $this->render('blok-akun');
    }
    public function actionProfil()
    {
        return $this->render('profil');
    }
}
