<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/about','aboutUs')->name('about');
Route::view('/contact','contact')->name('contact');

