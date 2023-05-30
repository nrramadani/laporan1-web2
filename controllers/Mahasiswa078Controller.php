<?php

namespace app\controllers;
use app\models\Mahasiswa078;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa078Controller extends \yii\web\Controller
{
    public function actionIndex()
{
       $query = Mahasiswa078::find();
       $dataProvider = new ActiveDataProvider ([
            'query' => $query
       ]);
       return $this->render('index',['dataProvider' => $dataProvider
    ]);
} 
    public function actionTambah()
    {
        $mahasiswa078 = new Mahasiswa078;
        $randomNumber = mt_rand(100, 999);
        $mahasiswa078 -> nim078 = '60200121078-' . $randomNumber;
        $mahasiswa078 -> nama078 = 'Nur Ramadani';
        $mahasiswa078 -> kelas078 = 'C';
        $mahasiswa078 -> status078 = 'Baru';
        $mahasiswa078->save();
        if ($mahasiswa078->save()) {
        Yii::$app->session->setFlash('success', 'Data DItambah');
         return $this->redirect(['index']);
        }
    }
    public function actionUpdate($id = '')
    {
       $mahasiswa078 = Mahasiswa078::findOne(['id078' => $id]);
       $mahasiswa078 -> status078 = 'Update';
       $mahasiswa078 -> kelas078 = 'B';
       if ($mahasiswa078->save()) {
        Yii::$app->session->setFlash('success', 'Data Diubah');
            return $this->redirect(['index']);
       }
    }
    public function actionDelete($id = '')
    {
       $mahasiswa078 = Mahasiswa078::findOne(['id078' => $id]);
       if ($mahasiswa078->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Tehapus');
            return $this->redirect(['index']);
       }
    }
    public function actionView($id)
    {
       $mahasiswa078 = Mahasiswa078::findOne(['id078' => $id]);
        return $this->render('view',['model' => $mahasiswa078]);
    

}

}
