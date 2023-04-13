<?php

namespace app\controllers;

use app\models\AirportName;
use app\models\FlightSegment;
use app\models\Trip;
use app\services\AirportService;
use app\services\AirportServices;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex(AirportService $airportService)
    {
        $request = Yii::$app->request;
        $input = $request->get();
        $airportName = $airportService->find(['name' => $input['airportName']]);
        if (!$airportName) {
            throw new NotFoundHttpException();
        }

        print_r($airportName->airport_id);
        die;
        $trips = Trip::find()->joinWith([
            'tripServices ts' => function ($tripServiceQuery) {
                $tripServiceQuery->joinWith([
                    'flights f' => function($flightsQuery) {
                        $flightsQuery->joinWith([
                            'flightSegments fs' => function($flightSegmentsQuery) {
                                $flightSegmentsQuery->andWhere(['=', 'depAirportId', 758]);
                            },
                        ]);
                    },
                ]);
            },
        ])->all();
        return $this->render('index', [
            'trips' => $trips,
        ]);
    }
}
