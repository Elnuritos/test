<?php

namespace App\Reps;

use App\Interfaces\DeliveryService;



class SlowDeliveryService implements DeliveryService
{
    private $baseUrl;
    private $baseCost;

    public function __construct(string $baseUrl, float $baseCost)
    {
        $this->baseUrl = $baseUrl;
        $this->baseCost = $baseCost;
    }

    public function calculateDeliveryCostAndDate(string $sourceKladr, string $targetKladr, float $weight): array
    {
        // Mock data for demonstration purposes
        $coefficient = 2.0;
        $date = date('Y-m-d', strtotime('+10 days'));
        $error = '';

        $price = $this->baseCost * $coefficient;

        return [
            'price' => $price,
            'date' => $date,
            'error' => $error
        ];
    }
}
