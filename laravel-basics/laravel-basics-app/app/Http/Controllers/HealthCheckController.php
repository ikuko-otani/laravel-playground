<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthCheckController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Simple health check endpoint for monitoring tools.
        return response()->json([
          'status' => 'ok',
          'timestamp' => now()->toISOString(),
        ]);
    }
}
