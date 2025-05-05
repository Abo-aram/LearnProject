<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




//calling the function index in the controller HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about','aboutUs')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/article','article')->name ('article');

