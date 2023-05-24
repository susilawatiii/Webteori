<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_60200121124".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa60200121124 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_60200121124';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 100],
            [['kelas'], 'string', 'max' => 5],
            [['jurusan'], 'string', 'max' => 50],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'N0.Induk_Mahasiswa',
            'nama' => 'Nama_Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }
    public function getprofil_60200121124()
    {
        return $this->hasOne(profil60200121124::className(), ['id' => 'id']);
    }
  
}
