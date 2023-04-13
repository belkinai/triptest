<?php
namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Flight ActiveRecord
 */
class Flight extends ActiveRecord
{

    /**
     * @inheritDoc
     */
    public static function tableName(): string
    {
        return '{{flight}}';
    }

    /**
     * TripServices relation
     *
     * @return ActiveQuery
     */
    public function getTripService()
    {
        return $this->hasOne(TripService::class, ['id' => 'trip_service_id']);
    }

    /**
     * FlightSegment relation
     *
     * @return ActiveQuery
     */
    public function getFlightSegments()
    {
        return $this->hasMany(FlightSegment::class, ['flight_id' => 'id']);
    }
}
