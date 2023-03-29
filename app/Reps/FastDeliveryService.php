<?php

namespace App\Reps;

use App\Interfaces\DeliveryService;



class FastDeliveryService implements DeliveryService
{
    private $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function calculateDeliveryCostAndDate(string $sourceKladr, string $targetKladr, float $weight): array
    {
        // Mock data for demonstration purposes
        $price = 50.0;
        $period = 3;
        $error = '';

        return [
            'price' => $price,
            'date' => date('Y-m-d', strtotime('+' . $period . ' days')),
            'error' => $error
        ];
    }
}
