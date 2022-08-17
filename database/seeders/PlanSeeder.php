<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    private array $plans = [
        'plan1',
        'plan2',
        'plan3'
    ];
    public function run()
    {
        $plans = $this->plans;

        foreach ($plans as $plan)
        {
            Plan::create([
               'name'   => $plan,
               'price' => 15
            ]);
        }
    }
}
