<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $price
 * @property string plan_texts
 */
class PlanSaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'  => 'required|max:128',
            'price' => 'required',
            'plan_texts' => 'required',
            'plan_texts.*' => 'required'
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getPlanTexts(): array
    {
        return $this->plan_texts;
    }
}
