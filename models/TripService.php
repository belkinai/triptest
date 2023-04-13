<?php
namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * TripService ActiveRecord model
 */
class TripService extends ActiveRecord
{

    /**
     * @inheritDoc
     */
    public static function tableName(): string
    {
        return '{{trip_service}}';
    }

    /**
     * Trip relation
     *
     * @return ActiveQuery
     */
    public function getTrip()
    {
        return $this->hasOne(Trip::class, ['id' => 'trip_id']);
    }

    /**
     * Flight relation
     *
     * @return ActiveQuery
     */
    public function getFlights()
    {
        return $this->hasMany(Flight::class, ['trip_service_id' => 'id']);
    }
}
