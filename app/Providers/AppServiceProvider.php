<?php

namespace App\Providers;

use App\Services\GitHubService;
use App\Services\OpenMeteoService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(GitHubService::class, fn() => new GitHubService(
            token: config('services.github.token'),
            username: config('services.github.username'),
            days: config('services.stats.days'),
            cache_hours: config('services.stats.cache_hours'),
        ));

        $this->app->bind(OpenMeteoService::class, fn() => new OpenMeteoService(
            latitude: config('services.weather.lat'),
            longitude: config('services.weather.lon'),
            days: config('services.stats.days'),
            cache_hours: config('services.stats.cache_hours'),
        ));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
