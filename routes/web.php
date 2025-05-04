<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/costumPage',function(){
    return view('costumPage');
});

Route::view('/third','costumPage');

