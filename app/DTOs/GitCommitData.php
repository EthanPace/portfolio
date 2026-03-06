<?php

namespace App\DTOs;

use Carbon\Carbon;

readonly class GitCommitData
{
    public function __construct(
        public Carbon $date,
        public int $commit_count,
    )
    {}

    public static function fromArray(array $data): self
    {
        return new self(
            date: Carbon::parse($data['date']),
            commit_count: $data['commit_count'],
        );
    }
}