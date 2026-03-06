<?php

namespace App\DTOs;

use Carbon\Carbon;

readonly class WeatherData
{
    public function __construct(
        public Carbon $date,
        public float $high_temp,
        public float $low_temp,
        public float $precipitation,
        public int $cloud_cover,
        public string $weather_code,
    )
    {}

    public static function fromArray(array $data): self
    {
        return new self(
            date: Carbon::parse($data['date']),
            high_temp: $data['high_temp'],
            low_temp: $data['low_temp'],
            precipitation: $data['precipitation'],
            cloud_cover: $data['cloud_cover'],
            weather_code: $data['weather_code'],
        );
    }
}