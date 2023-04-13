<?php

use yii\db\Migration;

/**
 * Handles the creation of table `flight`.
 */
class m230412_045329_create_flight_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('flight', [
            'id' => $this->primaryKey(),
            'trip_service_id' => $this->integer()->null(),
        ]);
        $this->createIndex(
            'idx-flight-trip_service_id',
            'flight',
            'trip_service_id'
        );
        $this->addForeignKey(
            'fk-flight-trip_service_id',
            'flight',
            'trip_service_id',
            'trip_service',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('flight');
    }
}
