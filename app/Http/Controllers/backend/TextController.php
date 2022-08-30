<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\TextSaveRequest;
use App\Models\Text;
use App\Services\TextService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class TextController extends Controller
{
    public function __construct(private TextService $textService)
    {
    }

    public function index(): Application|View|Factory
    {
        $dataProvider = new EloquentDataProvider(Text::query());

        return view('backend.texts.index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function create(): Application|View|Factory
    {
        return view('backend.texts.save');
    }

    public function store(TextSaveRequest $request): RedirectResponse
    {
        $this->textService->storeText(request: $request);

        return redirect()->back()->withSuccess(__('admin.added'));
    }

    public function show($id)
    {
        //
    }

    public function edit(Text $text)
    {
        return view('backend.texts.save', compact('text'));
    }

    public function update(TextSaveRequest $request, Text $text): RedirectResponse
    {
        $this->textService->storeText(request: $request, text: $text);

        return redirect()->back()->withSuccess(__('admin.edited'));
    }

    public function delete(Text $text): RedirectResponse
    {
        $this->textService->deleteText(text: $text);

        return redirect()->route('admin.texts.index')->withErrors(__('admin.edited'));
    }
}
