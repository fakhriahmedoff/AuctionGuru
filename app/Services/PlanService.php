<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\backend\PlanSaveRequest;
use App\Models\Plan;

class PlanService
{
    public function savePlan(PlanSaveRequest $request, ?Plan $plan = null): void
    {
        $model = $text ?? new Plan();
        $model->fill([
            'group' => $request->getGroup(),
            'value' => $request->getValue(),
            'key'   => $request->getKey(),
        ]);


        if (!$model->save()) {
            throw new DomainException('Plan save failed');
        }
    }

    public function deleteText(Plan $plan): void
    {
        $plan->delete();
    }


}
