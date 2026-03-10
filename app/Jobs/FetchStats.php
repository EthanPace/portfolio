<?php

namespace App\Jobs;

use App\Services\GitHubService;
use App\Services\OpenMeteoService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class FetchStats implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(GitHubService $github, OpenMeteoService $weather): void
    {
        $github->getCommits();
        $weather->getWeather();
    }
}
