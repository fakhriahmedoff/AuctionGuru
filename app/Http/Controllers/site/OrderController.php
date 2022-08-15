<?php
declare(strict_types=1);

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\StoreOrderRequest;
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

    public function order(StoreOrderRequest $request): Application|Factory|View
    {
        dd($request->all());
        return view('frontend.order');
    }
}
