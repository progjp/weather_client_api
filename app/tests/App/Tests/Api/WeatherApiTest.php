<?php

namespace App\Tests\Api;

use App\Api\Weather;
use App\Application\Feature\Weather\WeatherCityCommandHandler;
use App\Infrastructure\Api\Weather\CurrentWeatherDTO;
use Exception;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class WeatherApiTest extends TestCase
{
    public function testWeatherSuccessfulResponse(): void
    {
        $city = 'Berlin';
        $dto = new CurrentWeatherDTO(
            city: 'Berlin',
            country: 'Germany',
            temperature: '15°C',
            condition: 'Clear',
            humidity: '63%',
            windSpeed: '17 km/h',
            lastUpdated: '2025-03-19 10:00:00'
        );
        $handler = $this->createMock(WeatherCityCommandHandler::class);
        $handler->method('__invoke')->willReturn($dto);
        $controller = $this->getMockBuilder(Weather::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['render'])
            ->getMock();
        $controller->expects($this->once())
            ->method('render')
            ->with('weather/current_weather.html.twig', [
                'city'         => $dto->city,
                'country'      => $dto->country,
                'temperature'  => $dto->temperature,
                'condition'    => $dto->condition,
                'humidity'     => $dto->humidity,
                'wind_speed'   => $dto->windSpeed,
                'last_updated' => $dto->lastUpdated,
            ])
            ->willReturn(new Response());
        $response = $controller->weather($handler, $city);
        $this->assertInstanceOf(Response::class, $response);
    }
    public function testWeatherHandlerThrowsException()
    {
        $city = 'UnknownCity';
        $exceptionMessage = 'City not found';
        $handler = $this->createMock(WeatherCityCommandHandler::class);
        $handler->method('__invoke')
            ->willThrowException(new Exception($exceptionMessage));
        $controller = $this->getMockBuilder(Weather::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['render'])
            ->getMock();
        $controller->expects($this->once())
            ->method('render')
            ->with('weather/error.html.twig', [
                'message' => $exceptionMessage,
            ])
            ->willReturn(new Response());
        $response = $controller->weather($handler, $city);
        $this->assertInstanceOf(Response::class, $response);
    }
}
