<?php

namespace App\Tests\Api;

use App\Infrastructure\Api\Weather\CurrentWeatherDTO;
use App\Infrastructure\Api\Weather\WeatherApiService;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Exception;

class WeatherApiServiceTest extends TestCase
{
    private WeatherApiService $weatherApiService;
    private HttpClientInterface $httpClientMock;
    private LoggerInterface $loggerMock;

    protected function setUp(): void
    {
        $this->httpClientMock = $this->createMock(HttpClientInterface::class);
        $this->loggerMock = $this->createMock(LoggerInterface::class);
        $this->weatherApiService = new WeatherApiService(
            'https://api.example.com',
            'fakeApiKey',
            $this->httpClientMock,
            $this->loggerMock
        );
    }

    /**
     * @dataProvider provideWeatherData
     */
    public function testGetCurrentWeatherReturnsDtoSuccessfully(
        string $city,
        string $country,
        string $temperature,
        string $condition,
        string $humidity,
        string $windSpeed,
        string $lastUpdated
    ): void {
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock
            ->method('getContent')
            ->willReturn(json_encode([
                'location' => [
                    'name'      => $city,
                    'country'   => $country,
                    'localtime' => $lastUpdated,
                ],
                'current'  => [
                    'temp_c'    => $temperature,
                    'condition' => ['text' => $condition],
                    'humidity'  => $humidity,
                    'wind_kph'  => $windSpeed,
                ],
            ]));
        $this->httpClientMock
            ->method('request')
            ->willReturn($responseMock);
        $this->loggerMock
            ->expects($this->once())
            ->method('info')
            ->with('Weather data retrieved successfully', $this->arrayHasKey('data'));
        $result = $this->weatherApiService->getCurrentWeather($city);
        $this->assertInstanceOf(CurrentWeatherDTO::class, $result);
        $this->assertEquals($city, $result->city);
        $this->assertEquals($country, $result->country);
        $this->assertEquals($temperature, $result->temperature);
        $this->assertEquals($condition, $result->condition);
        $this->assertEquals($humidity, $result->humidity);
        $this->assertEquals($windSpeed, $result->windSpeed);
        $this->assertEquals($lastUpdated, $result->lastUpdated);
    }

    public function provideWeatherData(): array
    {
        return [
            ['Paris', 'France', '18', 'Sunny', '50', '10', '2024-03-19'],
            ['London', 'UK', '15', 'Cloudy', '70', '5', '2024-03-19'],
            ['Kyiv', 'Ukraine', '20', 'Rainy', '80', '15', '2024-03-19'],
        ];
    }
    public function testGetCurrentWeatherThrowsExceptionOnInvalidJson(): void
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock
            ->method('getContent')
            ->willReturn('invalid json');
        $this->httpClientMock
            ->method('request')
            ->willReturn($responseMock);
        $this->loggerMock
            ->expects($this->once())
            ->method('info')
            ->with('Unable to parse API response', $this->arrayHasKey('data'));
        $this->loggerMock
            ->expects($this->once())
            ->method('error')
            ->with('Failed to fetch weather data', $this->arrayHasKey('error'));
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Unable to parse API response.');
        $this->weatherApiService->getCurrentWeather('Paris');
    }
    public function testGetCurrentWeatherThrowsTransportException(): void
    {
        $this->httpClientMock
            ->method('request')
            ->willThrowException($this->createMock(TransportExceptionInterface::class));
        $this->loggerMock
            ->expects($this->once())
            ->method('error')
            ->with('Failed to fetch weather data', $this->arrayHasKey('error'));
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Failed to fetch weather data');
        $this->weatherApiService->getCurrentWeather('Paris');
    }
}
