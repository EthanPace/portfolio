<?php

use App\Jobs\FetchStats;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

$hours = config('services.stats.cache_hours');
Schedule::job(new FetchStats)->cron("0 */{$hours} * * *");