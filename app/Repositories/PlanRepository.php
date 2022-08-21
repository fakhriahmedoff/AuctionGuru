<?php

namespace App\Repositories;

use App\Models\Plan;
use Illuminate\Support\Collection;

class PlanRepository
{
    public function getAllPlans(): Collection
    {
        return Plan::with(['planTexts'])->get();
    }
}
