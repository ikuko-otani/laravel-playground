<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the current user's profile.
     */
    public function show()
    {
        // In real app, fetch authenticated user's profile.
        return 'Profile singleton resource - show current user profile';
    }

    /**
     * Show the form for editing the profile.
     */
    public function edit()
    {
      return 'Profile edit form';
    }

    /**
     * Update the profile.
     */
    public function update(Request $request)
    {
      // In a real app, save the profile change here.
      return 'Profile updated';
    }
}
