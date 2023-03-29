<?php

namespace App\Reps;

use App\Interfaces\DeliveryService;



class DeliveryCalculator
{
    private $deliveryService;

    public function __construct(DeliveryService $deliveryService)
    {
        $this->deliveryService = $deliveryService;
    }

    public function calculateDeliveryCostAndDate(array $deliveries): array
    {
        $result = [];

        foreach ($deliveries as $delivery) {
            $response = $this->deliveryService->calculateDeliveryCostAndDate(
                $delivery['sourceKladr'],
                $delivery['targetKladr'],
                $delivery['weight']
            );

            $result[] = [
                'price' => $response['price'],
                'date' => $response['date'],
                'error' => $response['error']
            ];
        }

        return $result;
    }
}
