<?php

use yii\db\Migration;

/**
 * Class m230530_125908_mahasiswa078
 */
class m230530_125908_mahasiswa078 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa078}}', [
            'id078' => $this->primarykey(),
            'nim078' => $this->string(255)->notNull()->unique(),
            'nama078' => $this->string(255)->notNull(),
            'kelas078' => $this->string(255)->notNull(),
            'status078' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_125908_mahasiswa078 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_125908_mahasiswa078 cannot be reverted.\n";

        return false;
    }
    */
}
