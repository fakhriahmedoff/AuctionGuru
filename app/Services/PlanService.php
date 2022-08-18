<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\backend\PlanSaveRequest;
use App\Models\Plan;
use App\Models\PlanText;

class PlanService
{
    public function savePlan(PlanSaveRequest $request, ?Plan $plan = null): void
    {
        $model = $plan ?? new Plan();
        $model->fill([
            'name'  => $request->getName(),
            'price' => $request->getPrice(),
        ]);

        if ($plan)
        $this->savePlanTexts($request->getPlanTexts(), $plan->id);

        if (!$model->save()) {
            throw new DomainException('Plan save failed');
        }
    }

    private function savePlanTexts(array $texts, int $plan): void
    {
        PlanText::where('plan_id',$plan)->delete();

        foreach ($texts as $text)
        {
            PlanText::create([
                'plan_id'  => $plan,
                'text' => $text,
            ]);
        }
    }

    public function deleteText(Plan $plan): void
    {
        $plan->delete();
    }


}
