<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user
        $request->authenticate();

        // Regenerate session to prevent session fixation attacks
        $request->session()->regenerate();

        // Get the authenticated user's role
        $role = Auth::user()->role;

        // Redirect based on the user's role
        switch ($role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'freelance':
                return redirect()->route('freelance.dashboard');
            case 'client':
                return redirect()->route('client.dashboard');
            default:
                // Log unauthorized access attempt
                Log::warning('Unauthorized access attempt by user ID: ' . Auth::id());

                // Logout the user and abort with a 403 error
                Auth::logout();
                abort(403, 'Unauthorized');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout the user
        Auth::guard('web')->logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the homepage
        return redirect('/');
    }
}
