<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sekolah}}`.
 */
class m230524_075034_create_sekolah_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sekolah}}', [
            'id' => $this->primaryKey(),
            'npsn' => $this->integer(20)->notNull()->unique(),
            'alamat' => $this->string(100)->notNull(),
            'kelurahan' => $this->string(100)->notNull(),
            'kode_kecamatan' => $this->integer(20)->notNull()->unique(),
        ]);
    }

}