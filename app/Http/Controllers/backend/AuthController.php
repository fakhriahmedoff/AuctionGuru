<?php

declare(strict_types=1);

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AdminLoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('admin.dashboard'))
                ->withSuccess('Signed in');
        }
        return redirect()->route('loginPage')->withErrors('Login details are not valid');
    }
    public function logout(): RedirectResponse
    {
        return redirect()->route('home');
    }
}
