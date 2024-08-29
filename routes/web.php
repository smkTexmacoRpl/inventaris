<?php

use App\Http\Controllers\MerkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::resource('/merk',MerkController::class, );
