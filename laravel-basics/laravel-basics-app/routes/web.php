<?php

use App\Http\Controllers\PostController;
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
// Route::get('/posts', function () {
//   return 'GET /posts';
// });

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

// Route::get('/users/{name?}', function (?string $name = 'John') {
//   return "User Name: {$name}";
// });

Route::get('/category/{category}', function (string $category) {
  return $category;
})->whereIn('category', ['movie', 'song', 'painting']);

Route::get('/user/profile', function () {
  return 'Profile';
})->name('profile');

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show'])
  ->whereNumber('id');

use App\Http\Controllers\HealthCheckController;

Route::get('/health', HealthCheckController::class);

use App\Http\Controllers\UserController;

Route::get('/users/dashboard', [UserController::class, 'dashboard']);
Route::get('/users/{username}', [UserController::class, 'profile']);

use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);

// Only index & show public article listing.
Route::resource('public-articles', ArticleController::class)->only(['index', 'show']);

// API-style routes (no create/edit views).
Route::apiResource('article-api', ArticleController::class);

use App\Http\Controllers\ProfileController;

Route::singleton('profile', ProfileController::class);
