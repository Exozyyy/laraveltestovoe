<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootbalersController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return redirect()->route('footbalers.create');
});
Route::get('/footballers', [FootbalersController::class, 'index'])->name('footbalers.index');
Route::get('/footballers/create', [FootbalersController::class, 'create'])->name('footbalers.create');
Route::post('/footballers', [FootbalersController::class, 'store'])->name('footbalers.store');
Route::get('/footballers/edit/{id}', [FootbalersController::class, 'edit'])->name('footbalers.edit');
Route::put('/footballers/{id}', [FootbalersController::class, 'update'])->name('footbalers.update');


