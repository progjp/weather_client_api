<?php

namespace App\Api;

use App\Application\Feature\Weather\WeatherCityCommand;
use App\Application\Feature\Weather\WeatherCityCommandHandler;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Weather extends AbstractController
{
    #[Route('/api/weather/{city}', name: 'weather_city', methods: ['GET'])]
    public function weather(
        WeatherCityCommandHandler $handler,
        string $city
    ): Response {
        try {
            $weatherDTO = $handler(new WeatherCityCommand($city));
        } catch (Exception $e) {
            return $this->render('weather/error.html.twig', ['message' => $e->getMessage()]);
        }

        return $this->render('weather/current_weather.html.twig', [
            'city'         => $weatherDTO->city,
            'country'      => $weatherDTO->country,
            'temperature'  => $weatherDTO->temperature,
            'condition'    => $weatherDTO->condition,
            'humidity'     => $weatherDTO->humidity,
            'wind_speed'   => $weatherDTO->windSpeed,
            'last_updated' => $weatherDTO->lastUpdated,
        ]);
    }
}
