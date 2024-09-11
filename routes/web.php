<?php

use App\Http\Controllers\MerkController;
use Illuminate\Support\Facades\Route;

Route::get('/beranda', [MerkController::class, 'beranda'])->name('merk.beranda');


Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/dash',function(){
return view('partial.dash');
});
Route::get('/dashboard',function(){
    return view('dashboard');
    });
    
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::resource('/merk',MerkController::class );
