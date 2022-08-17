<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\ReviewSaveRequest;
use App\Models\Review;
use App\Services\ReviewService;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class ReviewController extends Controller
{
    public function __construct(private ReviewService $reviewService)
    {

    }

    public function index(): Application|View|Factory
    {
        $dataProvider = new EloquentDataProvider(Review::query());

        return view('backend.reviews.index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function create()
    {
        return view('backend.reviews.save');
    }

    public function store(ReviewSaveRequest $request)
    {
        $this->reviewService->saveReview(request: $request);

        return redirect()->route('admin.reviews.index')->withSuccess(__('admin.added'));

    }


    public function edit(Review $review): Application|View|Factory
    {
        return view('backend.reviews.save', compact('review'));
    }

    public function update(ReviewSaveRequest $request, Review $review): RedirectResponse
    {
        $this->reviewService->saveReview(request: $request,review: $review);

        return redirect()->route('admin.reviews.index')->withSuccess(__('admin.added'));
    }

    public function delete(Review $review): RedirectResponse
    {
        $this->reviewService->deleteText($review);

        return redirect()->route('admin.reviews.index')->withSuccess(__('admin.deleted'));
    }
}
