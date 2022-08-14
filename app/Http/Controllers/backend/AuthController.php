<?php
declare(strict_types=1);

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class AuthController extends Controller
{
  
    public function loginPage(): Application|Factory|View
    {
        return view('backend.auth.login');
    }


}
