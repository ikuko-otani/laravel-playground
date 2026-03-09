<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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

    /**
     * Store a new user.
     */
    public function store(Request $request): RedirectResponse
    {
      $name = $request->input('name');

      // In a real app, create a user record here.
      return redirect('/users/' . $name);
    }

    /**
     * Update user by ID.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
      $name = $request->input('name');

      // In a real app, create a user record here.
      return redirect("/users/{$id}");
    }
}
