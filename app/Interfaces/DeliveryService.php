<?php

namespace App\Interfaces;

interface DeliveryService
{
    public function calculateDeliveryCostAndDate(string $sourceKladr, string $targetKladr, float $weight): array;
}
