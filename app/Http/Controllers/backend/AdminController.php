<?php
declare(strict_types=1);

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\View\Factory;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function loginPage(): Application|Factory|View
    {
        return view('backend.auth.login');
    }
    public function dashboard():Application|Factory|View
    {
        return view('backend.dashboard');
    }


}
