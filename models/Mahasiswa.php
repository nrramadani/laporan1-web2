<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property int|null $kelas
 * @property string $status
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'status'], 'required'],
            [['kelas'], 'integer'],
            [['nim', 'nama', 'status'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID078',
            'nim' => 'No. Induk Mahasiswa078',
            'nama' => 'Nama Mahasiswa078',
            'kelas' => 'Kelas078',
            'status' => 'Status078',
        ];
    }
}
