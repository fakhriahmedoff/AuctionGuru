<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\ConfigSaveRequest;
use App\Models\Config;
use App\Repositories\ConfigRepository;
use App\Services\ConfigService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class ConfigController extends Controller
{
    public function __construct(private ConfigService $configService)
    {
    }

    public function edit(Config $config): Application|Factory|View
    {
        $config = ConfigRepository::getConfig();

        return view('backend.configs.save',compact('config'));
    }


    public function update(ConfigSaveRequest $request, Config $config): RedirectResponse
    {
        $this->configService->storeConfig($request, $config);

        return redirect()->route('admin.configs.edit',1)->with(['success' => __('admin.edited')]);
    }

}
