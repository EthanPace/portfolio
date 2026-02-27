<?php

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

Route::get('/login', [\App\Http\Controllers\SessionController::class, 'create'])->name('login');
Route::post('/sessions', [\App\Http\Controllers\SessionController::class, 'store']);
Route::delete('/sessions', [\App\Http\Controllers\SessionController::class, 'destroy']);

Route::group(['middleware' => 'auth', 'prefix' => 'tasks'], function () {
    Route::get('/', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
    Route::get('/new', [\App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
    Route::post('/new', [\App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
    Route::post('/{task}', [\App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/{task}', [\App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy');
});