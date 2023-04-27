<?php

namespace App\Http\Controllers\University\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\UniversityAuthRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticateSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('university.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(UniversityAuthRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::UniversityHOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('university')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/university/login');
    }
}
