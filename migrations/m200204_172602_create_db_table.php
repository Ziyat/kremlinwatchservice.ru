<?php

use yii\db\Migration;

class m200204_172602_create_db_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ], $tableOptions);

        $this->createTable('service', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTable('service_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'service_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey(
            'fk-service_type',
            'service_type',
            'service_id',
            'service',
            'id',
            'CASCADE'
        );

        $this->createTable('brand_service', [
            'brand_id' => $this->integer()->notNull(),
            'service_id' => $this->integer()->notNull(),
            'price' => $this->float()->notNull(),
        ]);

        $this->createIndex(
            'idx-brand_service',
            'brand_service',
            ['brand_id', 'service_id'],
            ['brand_id', 'service_id']
        );

        $this->addForeignKey(
            'fk-brand_service-service_id',
            'brand_service',
            'service_id',
            'service',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-brand_service-brand_id',
            'brand_service',
            'brand_id',
            'brand',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('brands');
    }
}
