<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rekapnilai}}`.
 */
class m230526_002030_create_rekapnilai_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rekapnilai}}', [
            'id' => $this->primaryKey(),
            'id_peserta' => $this->integer(20)->notNull()->unique(),
            'target_penilaian' => $this->integer(20)->notNull(),
            'skor' => $this->integer(20)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rekapnilai}}');
    }
}
