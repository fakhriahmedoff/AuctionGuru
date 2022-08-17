<?php

namespace App\Services;

use App\Actions\UploadImage;
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
            $image = UploadImage::uploadImage($request->file('image'),'reviews');

            $model->fill([
                'image'    => $image,
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