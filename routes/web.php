<?php

use Illuminate\Support\Facades\Route;
Route::get('/line-chart', 'ChartController@lineChart');


Route::get('/', function () {
    return view('welcome');
});
