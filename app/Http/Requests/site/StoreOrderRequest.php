<?php
declare(strict_types=1);

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property string name
 * @property string email
 * @property string message
 * @property array uploaded_files
 */
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getUploadedFiles(): ?array
    {
        return $this->uploaded_files;
    }


}
