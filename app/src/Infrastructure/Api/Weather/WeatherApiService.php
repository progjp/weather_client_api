<?php

namespace App\Infrastructure\Api\Weather;

use App\Domain\WeatherProvider\WeatherProviderInterface;
use App\Util\Exception\DetailedException;
use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

readonly class WeatherApiService implements WeatherProviderInterface
{
    public function __construct(
        private string $apiUrl,
        private string $apiKey,
        private HttpClientInterface $httpClient,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Fetch current weather data for a given location.
     *
     * @param string $city
     * @return CurrentWeatherDTO
     * @throws Exception
     * @throws TransportExceptionInterface
     */
    public function getCurrentWeather(string $city): CurrentWeatherDTO
    {
        $endpoint = sprintf('%s/current.json?key=%s&q=%s', $this->apiUrl, $this->apiKey, ucfirst(urlencode($city)));

        try {
            $response = $this->httpClient->request(
                'GET',
                $endpoint
            );
            
            
            
            /**
             * @var array{
             *  location: array{
             *      name: string,
             *      country: string,
             *      localtime: string,
             *  },
             *  current: array{
             *      temp_c: string,
             *      condition: array{
             *          text: string
             *      },
             *      humidity: string,
             *      wind_kph: string,
             *  }
             * }
             */
            $data = json_decode($response->getContent(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->logger->info('Unable to parse API response', ['data' => $data]);

                throw new Exception('Unable to parse API response.');
            }

            $this->logger->info('Weather data retrieved successfully', ['data' => $data]);
            
            return new CurrentWeatherDTO(
                city: $data['location']['name'],
                country: $data['location']['country'],
                temperature: $data['current']['temp_c'],
                condition: $data['current']['condition']['text'],
                humidity: $data['current']['humidity'],
                windSpeed: $data['current']['wind_kph'],
                lastUpdated: $data['location']['localtime'],
            );
        } catch (HttpExceptionInterface $e) {
            $message = json_encode($e->getResponse()->toArray(false));
            $this->logger->error('Failed to fetch weather data', [
                'data'  => $endpoint,
                'error' => $message,
            ]);
            throw new DetailedException('API Failed to fetch weather data: ' .
                $message, $e->getCode(), $e->getPrevious());
        } catch (\Throwable $e) {
            $this->logger->error('Failed to fetch weather data', [
                'data'  => $endpoint,
                'error' => $e->getMessage(),
            ]);

            throw new Exception('Failed to fetch weather data: ' . $e->getMessage());
        }
    }
}
