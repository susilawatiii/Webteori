<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_124".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa124 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_124';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'string', 'max' => 20],
            [['nama', 'jurusan'], 'string', 'max' => 100],
            [['kelas'], 'string', 'max' => 50],
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
            'nim' => 'No. Induk Mahasiswa',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    public function getprofil_124()
    {
        return $this->hasOne(profil124::className(), ['id' => 'id']);
    }
 
}
