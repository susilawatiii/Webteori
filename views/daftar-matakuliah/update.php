Update
'id' => $this->primaryKey(),
            'npsn' => $this->integer(20)->notNull()->unique(),
            'alamat' => $this->string(100)notNull(),
            'kelurahan' => $this->string20(100)->notNull(),
            'kode_kecamatan' => $this->integer(20)->notNull(),->unique()
            