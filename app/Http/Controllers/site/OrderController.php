<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): Application|Factory|View
    {
        return view('frontend.order');
    }

    public function order(): Application|Factory|View
    {
        return view('frontend.order');
    }
}
