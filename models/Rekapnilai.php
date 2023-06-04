<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekapnilai".
 *
 * @property int $id
 * @property int $id_peserta
 * @property int $target_penilaian
 * @property int $skor
 */
class Rekapnilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekapnilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_peserta', 'target_penilaian', 'skor'], 'required'],
            [['id_peserta', 'target_penilaian', 'skor'], 'integer'],
            [['id_peserta'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_peserta' => 'Id Peserta',
            'target_penilaian' => 'Target Penilaian',
            'skor' => 'Skor',
        ];
    }
}
