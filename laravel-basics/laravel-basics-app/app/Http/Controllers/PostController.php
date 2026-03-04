<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show a simple list of posts.
     */
    public function index()
    {
      // In a real app, this would fetch posts from database.
      return 'PostController index - list of posts';
    }

    /**
     * Show a single post detail by ID.
     */
    public function show(string $id)
    {
      return "PostController show - post ID: {$id}";
    }
}
