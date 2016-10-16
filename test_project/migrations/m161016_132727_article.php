<?php

use yii\db\Migration;

class m161016_132727_article extends Migration
{
    public function up()
    {

        $this->createTable('article', [
            'id' => $this->integer(11),
            'title' => $this->char(255)->notNull()->defaultValue('')->comment('标题'),
            'created_at' => $this->integer(10)->notNull()->defaultValue(0)->comment('创建时间'),
            'updated_at' => $this->integer(10)->notNull()->defaultValue(0)->comment('更新时间'),
            'id' => $this->primaryKey(11)
        ]);

    }

    public function down()
    {

        $this->dropTable('article');

        echo "m161016_132727_article cannot be reverted.\n";

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
