<?php

namespace App\Application\Feature\Weather;

class WeatherCityCommand
{
    public function __construct(
        private readonly string $city,
    ) {
    }

    public function getCity(): string
    {
        return $this->city;
    }
}
