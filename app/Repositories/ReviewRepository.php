<?php

namespace App\Repositories;

use App\Models\Review;
use Illuminate\Support\Collection;

class ReviewRepository
{
    public function getReviewsAll(): Collection
    {
        return Review::all();
    }
}
