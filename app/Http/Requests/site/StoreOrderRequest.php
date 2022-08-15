<?php
declare(strict_types=1);

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreOrderRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape([
        'name'           => "string",
        'email'          => "string",
        'message'        => "string",
        'uploaded_files' => "array",
    ])]
    public function rules(): array
    {
        return [
            'name'           => 'required',
            'email'          => 'required',
            'message'        => 'nullable',
            'uploaded_files' => 'required',
        ];
    }
}
