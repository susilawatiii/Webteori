<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa124".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mahasiswa124 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa124';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'string', 'max' => 100],
            [['no_induk_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID124',
            'no_induk_mahasiswa' => 'No Induk Mahasiswa124',
            'nama_mahasiswa' => 'Nama Mahasiswa124',
            'kelas' => 'Kelas124',
            'status' => 'Status124',
        ];
    }
}
