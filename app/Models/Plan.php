<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string name
 * @property string price
 */
class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function planTexts(): HasMany
    {
        return $this->hasMany(PlanText::class, 'plan_id','id');
    }
}
