<?php

use yii\db\Migration;

/**
 * Handles the creation of table `price`.
 */
class m171228_203608_create_price_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('price', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('price');
    }
}
