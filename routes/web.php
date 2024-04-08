<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('portfolio');
});

Route::get('/dbconn', function() {
    return view('dbconn');
});
