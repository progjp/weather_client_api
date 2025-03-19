<?php

namespace App\Application\Feature\Weather;

use App\Domain\WeatherProvider\WeatherProviderInterface;
use App\Infrastructure\Api\Weather\CurrentWeatherDTO;

class WeatherCityCommandHandler
{
    public function __construct(
        private readonly WeatherProviderInterface $weatherProvider,
    ) {
    }

    public function __invoke(WeatherCityCommand $command): CurrentWeatherDTO
    {
        return $this->weatherProvider->getCurrentWeather(
            $command->getCity(),
        );
    }
}
