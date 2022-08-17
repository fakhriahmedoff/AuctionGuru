<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class PlanSaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
