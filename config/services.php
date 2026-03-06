<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'github' => [
        'token' => env('GITHUB_TOKEN'),
        'username' => env('GITHUB_USERNAME'),
    ],

    'weather' => [
        'lat' => env('WEATHER_LATITUDE'),
        'lon' => env('WEATHER_LONGITUDE'),
    ],

    'stats' => [
        'days' => env('STATS_DAYS', 30),
    ],

];
