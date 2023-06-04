<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sekolah".
 *
 * @property int $id
 * @property int $npsn
 * @property string $alamat
 * @property string $kelurahan
 * @property int $kode_kecamatan
 */
class Sekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['npsn', 'alamat', 'kelurahan', 'kode_kecamatan'], 'required'],
            [['npsn', 'kode_kecamatan'], 'integer'],
            [['alamat', 'kelurahan'], 'string', 'max' => 100],
            [['npsn'], 'unique'],
            [['kode_kecamatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'npsn' => 'Npsn',
            'alamat' => 'Alamat',
            'kelurahan' => 'Kelurahan',
            'kode_kecamatan' => 'Kode Kecamatan',
        ];
    }
}
