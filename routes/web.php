<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/templateSatu', function () {
    return view('templateSatu');
});