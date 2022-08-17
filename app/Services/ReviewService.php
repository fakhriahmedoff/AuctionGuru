<?php

namespace App\Services;

use App\Http\Requests\backend\ReviewSaveRequest;
use App\Models\Review;
use DomainException;

class ReviewService
{
    public function saveReview(ReviewSaveRequest $request, ?Review $review = null): void
    {
        $model = $review ?? new Review();

        $model->fill([
            'group' => $request->getGroup(),
            'value' => $request->getValue(),
            'key'   => $request->getKey(),
        ]);


        if (!$model->save()) {
            throw new DomainException('Review save failed');
        }
    }

    public function deleteText(Review $text): void
    {
        $text->delete();
    }
}