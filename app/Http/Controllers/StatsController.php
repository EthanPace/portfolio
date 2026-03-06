<?php

namespace App\Http\Controllers;

use App\Services\GitHubService;
use App\Services\OpenMeteoService;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function __construct(
        private readonly GitHubService $gitHubService,
        private readonly OpenMeteoService $openMeteoService,
    ) {}

    public function index() {
        return view('stats.index', [
            'git' => $this->gitHubService->getCommits()->keyBy(fn($item) => $item->date->toDateString()),
            'weather' => $this->openMeteoService->getWeather(),
        ]);
    }
}
