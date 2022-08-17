<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Text;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class PlanController extends Controller
{
    public function index(): Application|Factory|View
    {
        $dataProvider = new EloquentDataProvider(Plan::query());

        return view('backend.plans.index', [
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

    public function show($id)
    {
        //
    }

    public function edit(Plan $plan)
    {
        return view('backend.plans.save');
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
