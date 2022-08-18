<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\PlanSaveRequest;
use App\Models\Plan;
use App\Models\Text;
use App\Services\PlanService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class PlanController extends Controller
{
    public function __construct(private PlanService $planService)
    {
    }

    public function index(): Application|Factory|View
    {
        $dataProvider = new EloquentDataProvider(Plan::query());

        return view('backend.plans.index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function edit(Plan $plan): Application|Factory|View
    {
        return view('backend.plans.save', compact('plan'));
    }

    public function update(PlanSaveRequest $request, Plan $plan): RedirectResponse
    {
        $this->planService->savePlan($request,$plan);

        return redirect()->route('admin.plans.index')->withSuccess(__('admin.added'));
    }

}
