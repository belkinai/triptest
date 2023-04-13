<?php
namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * FlightSegment ActiveRecord
 */
class FlightSegment extends ActiveRecord
{

    /**
     * @inheritDoc
     */
    public static function tableName(): string
    {
        return '{{flight_segment}}';
    }

    /**
     * Flight relation
     *
     * @return ActiveQuery
     */
    public function getFlight()
    {
        return $this->hasOne(Flight::class, ['id' => 'flight_id']);
    }
}
