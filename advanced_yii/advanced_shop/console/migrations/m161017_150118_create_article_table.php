<?php

use yii\db\Migration;

/**
 * Handles the creation for table `article`.
 */
class m161017_150118_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->char(255)->notNull()->defaultValue(0)->comment('标题'),
            'created_at' => $this->integer(10) -> notNull()->defaultValue(0) -> comment('创建时间'),
            'updated_at' => $this->integer(10)->notNull()->defaultValue(0) -> comment('添加时间')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
