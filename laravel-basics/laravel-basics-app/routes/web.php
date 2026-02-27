<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
  return 'Hello from Laravel routing study!';
});

Route::get('/about', function () {
  return 'About page';
});

Route::get('/contact', function () {
  return 'Contact page';
});

