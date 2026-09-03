<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('design');
});

Route::get('/design', function () {
    return view('design');
});