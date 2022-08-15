<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class AdminLoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape([
        'email'     => "string",
        'password'  => "string"
    ])]
    public function rules(): array
    {
        return [
            'email'     => 'required|min:5|email',
            'password'  => 'required|min:6'
        ];
    }
}
