<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa078".
 *
 * @property int $id078
 * @property string $nim078
 * @property string $nama078
 * @property string $kelas078
 * @property string $status078
 */
class Mahasiswa078 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa078';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim078', 'nama078', 'kelas078', 'status078'], 'required'],
            [['nim078', 'nama078', 'kelas078', 'status078'], 'string', 'max' => 255],
            [['nim078'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id078' => 'ID078',
            'nim078' => 'No. Induk Mahasiswa078',
            'nama078' => 'Nama Mahasiswa078',
            'kelas078' => 'Kelas078',
            'status078' => 'Status078',
        ];
    }
}
