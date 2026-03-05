<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class UserController extends Controller
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
      return [
        'auth', // Apply auth middleware to all actions.
        new Middleware('verified', only: ['dashboard'])
      ];
    }

    /**
     * Show user dashboard page.
     */
    public function dashboard()
    {
      return 'User dashboard (requires authenticated & verified user)';
    }

    /**
     * Show public profile page.
     */
    public function profile(string $username)
    {
      return "Public profile of {$username}";
    }
}
