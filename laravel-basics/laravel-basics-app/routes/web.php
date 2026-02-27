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

// Route::get/post/put/delete with /posts endpoints
Route::get('/posts', function () {
  return 'GET /posts';
});

// NOTE:
// These POST / PUT / DELETE routes are defined correctly,
// but calling them via `curl.exe -X POST http://localhost:8000/posts`
// from PowerShell returns a 419 Page Expired error
// because the web routes use CSRF protection.
// I will revisit these routes when learning forms / API routes / Sanctum.

Route::post('/posts', function () {
  return 'POST /posts';
});

Route::put('/posts/{id}', function ($id) {
  return 'PUT /posts/{$id}';
});

Route::delete('/posts/{id}', function ($id) {
  return 'DELETE /posts/{$id}';
});
