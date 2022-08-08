<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

Route::view('profile','profile');

Route::get('/profile/{lang}', function($lang){
    App::setLocale($lang);
    return view('profile');
});