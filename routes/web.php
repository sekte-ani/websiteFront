<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('screens.index');
});
Route::get('/artikel', function () {
    return view('screens.artikel');
});