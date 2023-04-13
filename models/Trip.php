<?php
namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Trip ActiveRecord model
 */
class Trip extends ActiveRecord
{

    /**
     * @inheritDoc
     */
    public static function tableName(): string
    {
        return '{{trip}}';
    }

    /**
     * TripServices relation
     *
     * @return ActiveQuery
     */
    public function getTripServices()
    {
        return $this->hasMany(TripService::class, ['trip_id' => 'id']);
    }
}
