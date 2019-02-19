<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m171228_203156_create_brand_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%brand}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'desc' => $this->string(),
        ],$tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%brand}}');
    }
}
