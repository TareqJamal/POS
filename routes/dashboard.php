<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::prefix('dashboard')->group(function () {
    Route::get('/test', function () {
        return 'hello from route dashboard';

    });
});
