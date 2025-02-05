<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): JsonResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return response()->json([
    //         'message' => 'Login successful',
    //         'user' => Auth::user(),
    //     ]);
    // }


    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        //$user = Auth::user();
        // $user = new User();
        $user = $request->user();
        $token = $request->user()->createToken($user->email . '_Token')->plainTextToken;
        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token,
        ])
            ->cookie('token', $token, 60 * 24, '/', null, true, true);  // Token en cookie HTTP-only;
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Suppression du cookie du token
        $cookieName = 'token';
        $response = response()->noContent();

        // Supprime le cookie
        return $response->withCookie(cookie()->forget($cookieName));
    }
}
