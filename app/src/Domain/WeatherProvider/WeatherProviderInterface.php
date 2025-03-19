<?php

declare(strict_types=1);

namespace App\Domain\WeatherProvider;

use App\Infrastructure\Api\Weather\CurrentWeatherDTO;

interface WeatherProviderInterface
{
    public function getCurrentWeather(string $city): CurrentWeatherDTO;
}
