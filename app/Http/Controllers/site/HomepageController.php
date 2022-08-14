<?php
declare(strict_types=1);

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class HomepageController extends Controller
{
    public function home(): Application|Factory|View
    {
        return view('frontend.homepage');
    }
}
