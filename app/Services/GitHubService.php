<?php

namespace App\Services;

use App\DTOs\GitCommitData;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GitHubService
{
    public function __construct(
        private readonly string $token,
        private readonly string $username,
        private readonly int $days,
        private readonly int $cache_hours,
    )
    {}

    public function getCommits(): Collection
    {
        return Cache::remember('data.commits', now()->addHours($this->cache_hours), function () {
            $since = Carbon::now()->subDays($this->days + 1)->toDateString();

            $response = Http::withToken($this->token)
                ->withHeaders(['Accept' => 'application/vnd.github.cloak-preview+json'])
                ->get('https://api.github.com/search/commits', [
                    'q' => "author:{$this->username} author-date:>{$since}",
                    'per_page' => 100,
                    'sort' => 'author-date',
                    'order' => 'desc',
                ]);

            $commits = collect($response->json('items'));

            $grouped = $commits
                ->groupBy(fn($item) => Carbon::parse($item['commit']['author']['date'])->toDateString());

            return $grouped->map(fn($group, $date) => GitCommitData::fromArray([
                'date' => $date,
                'commit_count' => $group->count(),
            ]));
        });
    }
}