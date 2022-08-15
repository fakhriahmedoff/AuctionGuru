<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property-read string $name
 * @property-read string $email
 * @property-read string $password
 */
class AdminSaveRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape([
        'name'      => "string",
        'email'     => "string",
        'password'  => "string"
    ])]
    public function rules(): array
    {
        return [
            'name'      => 'required|max:50',
            'email'     => 'required|min:5|email',
            'password'  => 'nullable|min:6'
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

    public function getPassword(): ?string
    {
        return $this->password;
    }
}
