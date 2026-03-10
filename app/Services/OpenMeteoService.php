<?php

namespace App\Services;

use App\DTOs\WeatherData;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class OpenMeteoService
{
    public function __construct(
        private readonly float $longitude,
        private readonly float $latitude,
        private readonly int $days,
        private readonly int $cache_hours,
    ) {}

    public function getWeather(): Collection
    {
        return Cache::remember('data.weather', now()->addHours($this->cache_hours), function () 
        {
            $response = Http::get('https://archive-api.open-meteo.com/v1/era5', [
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'start_date' => Carbon::now()->subDays($this->days)->toDateString(),
                'end_date' => Carbon::now()->toDateString(),
                'daily' => 'temperature_2m_max,temperature_2m_min,precipitation_sum,cloud_cover_mean,weather_code',
                'timezone' => "Australia/Sydney",
            ]);

            $weather = $response->json('daily');

            $dates = $weather['time'];
            $maxTemps = $weather['temperature_2m_max'];
            $minTemps = $weather['temperature_2m_min'];
            $precipitation = $weather['precipitation_sum'];
            $cloudCover = $weather['cloud_cover_mean'];
            $weatherCode = $weather['weather_code'];

            return collect($dates)->map(fn($date, $index) => WeatherData::fromArray([
                'date' => $date,
                'high_temp' => $maxTemps[$index],
                'low_temp' => $minTemps[$index],
                'precipitation' => $precipitation[$index],
                'cloud_cover' => $cloudCover[$index],
                'weather_code' => $weatherCode[$index],
            ]));
        });
    }
}