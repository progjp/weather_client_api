<?php

namespace App\Infrastructure\Api\Weather;

readonly class CurrentWeatherDTO
{
    public function __construct(
        public string $city,
        public string $country,
        public string $temperature,
        public string $condition,
        public string $humidity,
        public string $windSpeed,
        public string $lastUpdated,
    ) {
    }
}
