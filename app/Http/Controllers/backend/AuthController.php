<?php

declare(strict_types=1);

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\AdminLoginRequest;
use App\Http\Requests\backend\AdminSaveRequest;
use App\Services\AdminService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Factory;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(private AdminService $adminService)
    {
    }

    public function login(AdminLoginRequest $request): Application|View|Factory|RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('admin.dashboard'))
                ->withSuccess('Signed in');
        }
        return view('backend.auth.login')->with('error', 'Email və ya Şifrə düzgün deyil ');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function editAdminDetails(): Application|View|Factory
    {
        $user = Auth::user();

        return view('backend.auth.update', compact('user'));
    }

    public function updateAdminDetails(AdminSaveRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $this->adminService->updateUserDetails($user, $request);

        return redirect()->back();
    }
}
