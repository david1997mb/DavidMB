<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('imagenes', function () {
    return view('img');
})->name('imagenes');

Route::get('videos', function () {
    return view('videos');
})->name('videos');

Route::get('developer', function () {
    return view('dev');
})->name('developer');