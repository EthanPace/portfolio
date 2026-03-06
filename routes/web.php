<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('projects');
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

Route::get('/stats', [StatsController::class, 'index'])->name('stats.index')->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/sessions', [SessionController::class, 'store']);
Route::delete('/sessions', [SessionController::class, 'destroy']);

Route::group(['middleware' => 'auth', 'prefix' => 'tasks'], function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/new', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/new', [TaskController::class, 'store'])->name('tasks.store');
    Route::post('/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});