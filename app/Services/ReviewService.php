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
            'name'    => $request->getName(),
            'text'    => $request->getText(),
            'number'  => $request->getNumber(),
        ]);

        if ($request->getImage())
        {
            $model->fill([
                'image'    => $request->getImage(),
            ]);
        }

        if (!$model->save()) {
            throw new DomainException('Review save failed');
        }
    }

    public function deleteText(Review $review): void
    {
        $review->delete();
    }
}