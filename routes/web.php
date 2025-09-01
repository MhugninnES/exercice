<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/nosbiens', function(){
    return view('nosbiens');
})->name('nosbiens');