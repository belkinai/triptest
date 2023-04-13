<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * AirportName ActiveRecord model
 */
class AirportName extends ActiveRecord
{

    /**
     * @inheritDoc
     */
    public static function tableName(): string
    {
        return '{{airport_name}}';
    }

    /**
     * @inheritDoc
     */
    public static function getDb()
    {
        return Yii::$app->dbAirports;
    }
}
