<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property int $id
 * @property string $kode_MK
 * @property string $nama_MK
 */
class matakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_Matakuliah', 'nama_Matakuliah'], 'required'],
            [['kode_Matakuliah'], 'string', 'max' => 10],
            [['nama_Matakuliah'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_MK' => 'Kode Matakuliah',
            'nama_MK' => 'Nama Matakuliah',
        ];
    }
}
