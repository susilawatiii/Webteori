<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa124}}`.
 */
class m230529_033346_create_mahasiswa124_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa124}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string(100)->notNull()->unique(),
            'nama_mahasiswa' => $this->string(100)->notNull(),
            'kelas' => $this->string(100)->notNull(),
            'status' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa124}}');
    }
}
