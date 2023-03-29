<?php

namespace App\Http\Controllers;

use App\Reps\DeliveryCalculator;
use App\Reps\FastDeliveryService;
use App\Reps\SlowDeliveryService;

class UserController extends Controller
{
    public function index()
    {

        $fastDeliveryService = new FastDeliveryService('https://example.com/fast-delivery');
        $slowDeliveryService = new SlowDeliveryService('https://example.com/slow-delivery', 150.0);

        $deliveryCalculator = new DeliveryCalculator($fastDeliveryService);
        $deliveries = [
            [
                'sourceKladr' => 'source_kladr_1',
                'targetKladr' => 'target_kladr_1',
                'weight' => 5.0,
            ],
            [
                'sourceKladr' => 'source_kladr_2',
                'targetKladr' => 'target_kladr_2',
                'weight' => 10.0,
            ],
        ];

        $result = $deliveryCalculator->calculateDeliveryCostAndDate($deliveries);

        var_dump($result); // Output: array(2) { [0]=> array(3) { ["price"]=> float(50) ["date"]=> string(10) "2021-11-19" ["error"]=> string(0) "" } [1]=> array(3) { ["price"]=> float(50) ["date"]=> string(10) "2021-11-19" ["error"]=> string(0) "" } }
    }
}
