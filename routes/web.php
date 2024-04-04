<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeizureController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatisticController;


Route::view('/', 'index')->name('index');

Route::controller(SeizureController::class)->group(function(){
    Route::get('/seizure',  'index')->name('seizure.index');
    Route::post('/seizure', 'store')->name('seizure.store');
});

Route::controller(SuccessController::class)->group(function(){
    Route::get('/success',                'index') ->name('success.index');
    Route::post('/success',               'store') ->name('success.store');
    Route::get('/success/{success}/edit', 'edit')  ->name('success.edit');
    Route::put('/success/{success}',      'update')->name('success.update');
});

Route::controller(SearchController::class)->group(function(){
    Route::get('/search',  'index') ->name('search.index');
    Route::post('/search', 'result')->name('search.result');
});

Route::controller(StatisticController::class)->group(function(){
    Route::get('/statistic',          'index')         ->name('statistic.index');
    Route::post('/statistic/seizure', 'seizure_export')->name('statistic.seizure');
    Route::post('/statistic/success', 'success_export')->name('statistic.success');
});
