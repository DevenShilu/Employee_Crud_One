<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return view('index');
})->name('index');


//testing perpose routesRaw
Route::get('/create',function(){
    return view('create');
})->name('create');
