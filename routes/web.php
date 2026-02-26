<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');