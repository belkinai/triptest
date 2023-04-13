<?php

namespace app\services;

use app\models\AirportName;

class AirportService
{
    public function find($input)
    {
        AirportName::find()->where(['like', 'value', 'Домодедово'])->one();
    }
}
