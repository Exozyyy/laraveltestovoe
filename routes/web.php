<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootbalersController;
use App\Http\Controllers\TeamController;

Route::get('/footballers', [FootbalersController::class, 'index'])->name('footbalers.index');

Route::get('/footballers/add', [FootbalersController::class, 'create'])->name('footbalers.create');
Route::post('/footballers', [FootbalersController::class, 'store'])->name('footbalers.store');

Route::get('/footballers/edit/{id}', [FootbalersController::class, 'edit'])->name('footbalers.edit');
Route::post('/footballers/update/{id}', [FootbalersController::class, 'update'])->name('footbalers.update');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
