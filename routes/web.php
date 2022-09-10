<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('test_1', 'test1')->name('test.1');
    Route::post('/test_1', 'result1')->name('result.1');
    Route::get('test_2', 'test2')->name('test.2');
    Route::post('/test_2', 'result2')->name('result.2');
    Route::get('test_3', 'test3')->name('test.3');
    Route::post('/test_3', 'result3')->name('result.3');
});