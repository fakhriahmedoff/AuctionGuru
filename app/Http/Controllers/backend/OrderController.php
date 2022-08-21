<?php
declare(strict_types=1);

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class OrderController extends Controller
{

    public function index(): Application|Factory|View
    {
        $dataProvider = new EloquentDataProvider(Order::query()->orderBy('id','desc'));

        return view('backend.orders.index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order): Application|View|Factory
    {
        $order->load('plan');

        return view('backend.orders.view',compact('order'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
